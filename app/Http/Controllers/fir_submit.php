<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\ctype;
use App\fir_info;
use App\range;
use App\police_station;
use App\victim_info;
use App\message;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\session;
use DB;
class fir_submit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(Session::get('email')!="") {
       $address=Address::all();

         $crimetype=ctype::get(['CRIME_TYPE']);
        $province=Address::distinct()->get(['province']);
       return view('ofircs/fir-form',compact('crimetype','address','province'));
    
                                }  
    else{
        return view('ofircs/index');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
        
        'date' =>'required|before:tomorrow',
        'time' =>'required',
        //'detail'=>'required',
        'ctype'=>'required|not_in:0',
        
        'province'=>'required|not_in:0',
        'city'=>'required|not_in:0',
        'district'=>'required|not_in:0',
        'area'=>'required|not_in:0',
        'town'=>'required|not_in:0',


            );

        $messages = array(

        'required' => 'This field is required'
       
             );
        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) 
        {
            $messages = $validator->messages();
            return Redirect::to('fir-form')
            ->withErrors($validator)
            ->withInput(Input::all());
        }
        else
        {
            $v_id=victim_info::select('vic_id')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_id')->first();
            //Saving Values
            $fir = new fir_info;
            
            $f_id=$this->GetFirId();
            session::put('f_id',$f_id);
            $fir->fir_id=$f_id;
            $fir->crime_type=Input::get("ctype");
            $fir->date_of_incident=Input::get("date");
            $fir->time_of_incident=Input::get("time");
            $town=Input::get("town");
            $area=Input::get("area");
            $fir->place_of_incident="$town,$area";
            $fir->fir_status="1";
            $fir->fir_type="1";
            $fir->fir_submit_date=Carbon::today()->toDateString();

            if(($data=$request->audiofile))
            {
                if(Input::get("detail")=="")
                {
                    $fir->detail_by_victim="Audio is attached";   //if user details are not given, audio is given
                }
                else
                {
                    $fir->detail_by_victim=Input::get("detail");     //if detail and audio both are given save detail
                }

                //decode and save base64 audio data to server
                $data=str_replace('data:audio/wav;base64,', '', $data);
                $data = str_replace(' ', '+', $data);
                $location = public_path('/audiofir/');
                $somedat="helooa";
                header('Content-Type: audio/mp3');
                file_put_contents($location.$v_id.'_'.$f_id.'.mp3',base64_decode($data));
                //save audio location in database
                $fir->audio=$v_id.'_'.$f_id.'.mp3';
            }
            else
            {
                $rules = array('detail' => 'required', );
                $validator = Validator::make(Input::all(), $rules,$messages);

                if ($validator->fails()) 
                {
                    $messages = $validator->messages();
                    return Redirect::to('fir-form')
                    ->withErrors($validator)
                    ->withInput(Input::all());
                }
                else
                {                    
                    $fir->detail_by_victim=Input::get("detail");
                }

            }

                        $ver_code=$this->getVerCode();
            //session::put('v_code',$ver_code);
            $fir->ver_code_fir=$ver_code;
            $police_station=range::select('ps_name')->where('ps_range','=',$area)->take(1)->get()->pluck('ps_name')->first();
            session::put('p_name',$police_station);
            $fir->ps_name=$police_station;
            $province=Input::get("province");
            $city=Input::get("city");
            $district=Input::get("district");
            $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
            session::put('did',$did); 

            $fir->d_id=$did;
            $fir->vic_id=$v_id;
            $fir->verification_status=0;
            $sms=message::select('*')->where('name','=','Lifetimesms')->get()->first();

            $username = $sms->smsusername;
            $password = $sms->smspassword;
            $data=victim_info::select('vic_phno')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_phno')->first();
            $to = $data;
            $from = "OFIR";
            $message ="Your Verification Code: ".$ver_code;
            $url = "http://Lifetimesms.com/plain?username=".$username."&password=".$password."&to=".$to."&from=".urlencode($from)."&message=".urlencode($message)."";
            //Curl Start
            $ch  =  curl_init();
            $timeout  =  30;
            curl_setopt ($ch,CURLOPT_URL, $url) ;
            curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
            $response = curl_exec($ch) ;
            curl_close($ch) ; 
            //Write out the response
            echo $response ;

            $fir->save();
            return Redirect::to('fir-verify');
        }

    }

 
/*public function SendMsg(Request $request)
{
$username = 'mewanahmed';
$password = '77845';
$data=victim_info::select('vic_phno')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_phno')->first();
$to = $data;
$from = "OFIR";
$message = session::get('v_code');
$url = "http://Lifetimesms.com/plain?username=".$username."&password=".$password.
"&to=".$to."&from=".urlencode($from)."&message=".urlencode($message)." ";
//Curl Start
$ch  =  curl_init();
$timeout  =  30;
curl_setopt ($ch,CURLOPT_URL, $url) ;
curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
$response = curl_exec($ch) ;
curl_close($ch) ; 
//Write out the response
echo $response ;

return Redirect::to('fir-verify');
}
*/
public function save_audio(Request $request)
{
            //alert('audio detected');
            // The file

    //$data=$request->audiofile;
    if(($data=$request->audiofile))
    {

        $data=str_replace('data:audio/wav;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $location = public_path('/audiofir/');
        $somedat="helooa";
        header('Content-Type: audio/mp3');
        file_put_contents($location.'music_file.mp3',base64_decode($data));

    }
    else{
        alert("empty url");
    }

    

}
public function check_ver_code(Request $request)
{
     $rules=array(
        
        'ver_code' =>'required',

        );
   

             

        $messages = array(

        'required' => 'Incorrect Verification Code'
       
             );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('fir-verify')
            ->withErrors($validator);

}
else
{
   $code=Input::get("ver_code");
   $compare=fir_info::select('ver_code_fir')->where('fir_id','=',session::get('f_id'))->get()->pluck('ver_code_fir')->first();
   if($code==$compare)
   {

    //sms service username password query
 $sms=message::select('*')->where('name','=','Lifetimesms')->get()->first();

$username = $sms->smsusername;
$password = $sms->smspassword;

$data=victim_info::select('vic_phno')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_phno')->first();
$to = $data;
$from = "OFIR";

$p_name=fir_info::select('ps_name')->where('fir_id','=',session::get('f_id'))->get()->pluck('ps_name')->first();


$ps_detail=police_station::select('*')->where('ps_name','=',$p_name)->first();
//$display="Your FIR has been successfully submitted. Your FIR id is: ".session::get('f_id')." \nPlease Visit Police Station: ".$p_name." \nAddress: ".$ps_detail->ps_plotno." ".$ps_detail->ps_area." ".$ps_detail->ps_town."\nPhone No: ".$ps_detail->ps_phno;
$plot=$ps_detail->ps_plotno;
$area=$ps_detail->ps_area;
$town=$ps_detail->ps_town;
$phone=$ps_detail->ps_phno;
$fid=session::get('f_id');
$message =" Your FIR id is: ".$fid.". Please Visit ".$p_name.",".$plot." ".$area." ".$town.". Phone:".$phone;
$url = "http://Lifetimesms.com/plain?username=".$username."&password=".$password."&to=".$to."&from=".urlencode($from)."&message=".urlencode($message)."";
//Curl Start
$ch  =  curl_init();
$timeout  =  30;
curl_setopt ($ch,CURLOPT_URL, $url) ;
curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
$response = curl_exec($ch) ;
curl_close($ch) ; 
//Write out the response
echo $response ;
DB::table('fir_infos')->where('fir_id',session::get('f_id'))
->update(['verification_status'=>1]);

     return Redirect::to('print-nonver-fir')->with('alert-success','Your FIR has been successfully submitted');
     

   }
   else
   {
     return Redirect::to('fir-verify')->with('alert-invalid', 'Incorrect Verificatiion Code');
   }


    session::forget('did');
     session::forget('f_id');
}
}



//Methods for generating Verification code.

 public function getVerCode(){
         
             $rand = $this->generateRandomString(6);
              return $rand;
        }
    

 public function generateRandomString($length) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
     }    






//Methods for generating Unique FIR id

public function check_Fir_id()
       { 
           return fir_info::select('fir_id')->get()->pluck('fir_id');
       }


public function generateRandomFirId($length) {

    
        $characters = '0123456';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        return "F".$randomString;
     }

 public function GetFirId(){
         
             $rand = $this->generateRandomFirId(6);
             if($this->check_Fir_id()==$rand){
            return generateRandomFirId(6);
        }
              return $rand;
        }
         

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
