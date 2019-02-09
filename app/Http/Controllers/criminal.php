<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\criminal_info;
use App\Address;
use DB;
use App\ctype;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;
use Illuminate\Support\MessageBag;
use App\crime_record;
use App\fir_info;
class criminal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Function to open Add criminal Page
    public function index()
    {
        //

        if(session::get('uname')!="")
        {
         
        $province=Address::distinct()->get(['province']);
         $crimetype=ctype::get(['CRIME_TYPE']);
        return view('cisps/add-criminal',compact('province','crimetype'));
        }
        else{



            return view('cisps/login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function searchcriminal()  //police site search-criminal.php
    {
         if(session::get('uname')!="")
        {
            
            
        


             return view('cisps/search-criminal');
        }
        else{



            return view('cisps/login');
        }

    }
        //search criminal recode method

        public function searchcriminalMethod(Request $request)
        {
       

             $rules = array(
            'cnic'    => 'required|max:15|regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'); // make sure the email is an actual email
             // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
             $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
            if ($validator->fails()) {

            return Redirect::to('search-criminal')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
                            } 


    else {
    // query to show criminal info with address and fir details
    

      $info=criminal_info::Leftjoin('addresss', 'criminal_infos.d_id', '=', 'addresss.d_id')->Leftjoin('crime_records', 'criminal_infos.cr_cnic','=','crime_records.cr_cnic')->Leftjoin('fir_infos','crime_records.fir_id','=','fir_infos.fir_id')->select('criminal_infos.*','addresss.*','crime_records.*','fir_infos.*')->where('criminal_infos.cr_cnic','=',input::get('cnic'))->get();


      session::put('criminalCnic',Input::get('cnic'));
      if($info->first())
            {
         
        
         return view('cisps/search-criminal-info',compact('info'));

             }

        else{

         return Redirect::to('search-criminal')->with('alert-invalid', 'No Record Found');
         

             }
   
            }

        /********************************************************/



    }



        


    
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
     $rules=array(
        'fname' => 'required',
        'lname' =>'required',
        'father' =>'required',
        'mother'=>'required',
        'cnic' =>'required|max:16|unique:criminal_infos,cr_cnic|regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/',
        'nationality'=>'required',
        'religion'=>'required',
        'cast'=>'required',
        'language'=>'required',
        'province'=>'required|not_in:0',
        'city'=>'required|not_in:0',
        'district'=>'required|not_in:0',
        'hno'=>'required',
        'area'=>'required',
        'street'=>'required',
        'town'=>'required',
        'age'=>'required|numeric',
        'dob'=>'required',
        'imark'=>'required',
        'height'=>'required',
        'complexion'=>'required',
        'ecolor'=>'required',
        'ctype'=> 'required|not_in:0',
        'fid'=>'required',
        'imageData1' => 'required',
        'imageData2' => 'required',
        'imageData3' => 'required'


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
        return Redirect::to('add-criminal')
            ->withErrors($validator);

    }


else{
        //
        $criminal=new criminal_info;
        $criminal->cr_fname=Input::get("fname");
        $criminal->cr_lname=Input::get("lname");
        $criminal->cr_father_name=Input::get("father");
        $criminal->cr_mother_name=Input::get("mother");
        $cnic=Input::get("cnic");
        $criminal->cr_cnic=$cnic;
        $criminal->cr_nationality=Input::get("nationality");
        $criminal->cr_religion=Input::get("religion");
        $criminal->cr_cast=Input::get("cast");
        $criminal->cr_house_no=Input::get("hno");
        $criminal->cr_street=Input::get('street');
        $criminal->cr_area=Input::get("area");
        $criminal->cr_town=Input::get("town");
        $province=Input::get("province");
        $city=Input::get("city");
        $district=Input::get("district");
        $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        $criminal->d_id=$did;
        $criminal->cr_age=Input::get("age");
        $criminal->cr_dob=Input::get("dob");
        $criminal->cr_lang=Input::get("language");
        $criminal->cr_iden_mark=Input::get("imark");
        $criminal->cr_complexion=Input::get("complexion");
        $criminal->cr_height=Input::get("height");
        $criminal->cr_eye_color=Input::get("ecolor");
        $criminal->crime_type=Input::get("ctype");
        $criminal->fir_id=Input::get("fid");
        $criminal->cr_fngerprint="Finger";
        $criminal->cr_picture="/criminals/".$cnic;

       $criminal->save();

        $data=$request->imageData1;
        $data=str_replace('data:image/jpeg;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data=base64_decode($data);
        $saveimage=imagecreatefromstring($data);
        if ($saveimage!==false)
        {
            header('Content-Type: image/png');
            $save=public_path('/criminals/').$cnic.'1'.".jpg";
            imagepng($saveimage,$save);
        }
        else
        {
            echo "An error occured";
        }

        $data=$request->imageData2;
        $data=str_replace('data:image/jpeg;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data=base64_decode($data);
        $saveimage=imagecreatefromstring($data);
        if ($saveimage!==false)
        {
            header('Content-Type: image/png');
            $save=public_path('/criminals/').$cnic.'2'.".jpg";
            imagepng($saveimage,$save);
        }
        else
        {
            echo "An error occured";
        }

        $data=$request->imageData3;
        $data=str_replace('data:image/jpeg;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data=base64_decode($data);
        $saveimage=imagecreatefromstring($data);
        if ($saveimage!==false)
        {
            header('Content-Type: image/png');
            $save=public_path('/criminals/').$cnic.'3'.".jpg";
            imagepng($saveimage,$save);
        }
        else
        {
            echo "An error occured";
        }
        //return back()
        //->with('success','Image Uploaded successfully.')
        //->with('path');
        



        return Redirect::to('police-dashboard')->with('alert-success', 'Criminal record has been successfully entered');

}

}
    

//Add Criminal FIR method
public function AddCriminalFir(Request $request)
{
  $fir=fir_info::select('fir_id')->where('fir_id','=',Input::get('fid'))->get();//Insert record if FIR exists
  if($fir->count()>0){
$crime=crime_record::select('*')->where([['cr_cnic','=',session::get('criminalCnic')],['fir_id','=',Input::get('fid')]])->get();// Checking if record already exists
if($crime->count()>0){
  return Redirect::to('search-criminal')->with('alert-invalid', 'FIR already entered'); 
}
else{
  $criminalFir=new crime_record;
  $criminalFir->cr_cnic=session::get('criminalCnic');
  $criminalFir->fir_id=Input::get('fid');
  $criminalFir->save();
  return Redirect::to('search-criminal')->with('alert-success', 'FIR has been successfully entered in criminal record');
}
}
else
{
 return Redirect::to('search-criminal')->with('alert-invalid', 'FIR record does not exist'); 
}
session::forget('criminalCnic');
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
