<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SP;
use App\Address;
use App\fir_info;
use App\Police_Station;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use App\request_table;
class spcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session::forget('spaddress');
        session::forget('spname');
        session::forget('spuname');
        return view('sp/login');
    }

    public function login(Request $request)
    {


         $rules = array(
    'uname'    => 'required', // make sure the email is an actual email
    'password' => 'required|alphaNum'); // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('sp')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
                            } 


    else {
    // create our user data for the authentication
    $userdata = array(
        'ps_uname'     => Input::get('uname'),
        'ps_pwd'  => Input::get('password')
    );

     if(SP::where('SP_USERNAME', '=', Input::get('uname'))->where('SP_PWD', '=', Input::get('password'))->first() )

            {
       $spuname=input::get('uname');
        Session::put('spuname',$spuname);
        
         return Redirect::to('sp-dashboard');

             }

        else{

        return Redirect::to('sp')->with('alert-invalid', 'Invalid Credentials.');
        

             }
   
            }
         }   
        /********************************************************/




        public function SP_dashboard()
        {
              if(Session::get('spuname')!="")      
            {

                $spname=SP::select('sp_name')->where('sp_username','=',Session::get('spuname'))->get()->pluck('sp_name')->first();
                $district=SP::select('d_id')->where('sp_username','=',Session::get('spuname'))->get()->pluck('d_id')->first();

                session::put('spname',$spname);
                
                $address=Address::select('*')->where('d_id','=',$district)->get()->first();

                //session::put('spaddress',$address);

                $pending=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>1,'d_id'=>$district])->count();
                $running=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'d_id'=>$district])->count();
                $completed=fir_info::select('*')->where(['fir_type'=>0,'fir_status'=>0,'d_id'=>$district])->count();

                $Rob=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Roberry','d_id'=>$district])->count();
                $Dmurder=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Deliberate Murder','d_id'=>$district])->count();
                
                $Amurder=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Attempt To Murder','d_id'=>$district])->count();
                
                $Kidnap=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Kidnapping','d_id'=>$district])->count();
                $Rape=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Rape','d_id'=>$district])->count();
                $Theft=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'crime_type'=>'Theft','d_id'=>$district])->count();
                


                session::put('spaddress',$address->district." ".$address->city." ".$address->province);
                session::put('spd_id',$district);

                return view('SP/sp-dashboard',compact('pending','running','completed','Rob','Dmurder','Amurder','Kidnap','Rape','Theft'));
           

}
else
{
 return view('SP\login');   
}
                

        }


//Send Request Form
    
    public function SendRequest()
    { 
        if(Session::get('spuname')!=""){
        $district=Address::select('district')->where('D_ID','=',session::get('spd_id'))->get();
        $info=Police_Station::select('ps_name')->get();
       // $spname=SP::select('sp_name')->where('sp_username','=',session::get('spuname'))->get();
        return view('sp/request',compact('district','spname','info'));
}
else
{
    return view('SP\login');
}

    }

 public function SubmitRequest(Request $request)
 {
     $rules=array(
        'subject' => 'required',
        'obo' =>'required',
        'psname'=>'required|not_in:0',


              );

        $messages = array(

        'required' => 'This field is required',
        
        //'email'=>'Invalid Email'
    );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('sp-request')
            ->withErrors($validator)
            ->withInput(Input::all());

    }
    else{
    $request=new request_table;
    $request->sp_name=session::get('spname');
    $request->d_id=session::get('spd_id');
    $request->subject=Input::get('subject');
    $request->on_behalf_of=Input::get('obo');
    $request->details=Input::get('details');
    $request->police_station=Input::get('psname');
    $request->submit_date=Carbon::today()->toDateString();
    $request->save();
    return Redirect::to('sp-request')->with('alert-success', 'Your Request has been sucessfully submitted');
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
        //
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
