<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\fir_info;
use App\criminal_info;
use App\police_station;
use App\range;
use App\message;
use App\request_table;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Address;
use Illuminate\Support\Facades\session;


class admincis extends Controller
{
   public function adminLogin()
   {
    session::forget('adminname');
    return view('cisps/admin/admin-login');
   }

   public function adminLoginPost(Request $request )
   {

    

    // process the form
        // validate the info, create rules for the inputs

    $rules = array(
    'uname'    => 'required', // make sure the email is an actual email  php |Camptcha Validation  'g-recaptcha-response' => 'required|captcha');
    'password' => 'required|alphaNum'); // password can only be alphanumeric and has to be greater than 3 characters
   
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('admin&12login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
    // create our user data for the authentication
    $userdata = array(
        'smsusername'     => Input::get('uname'),
        'smspassword'  => Input::get('password')
    );

     if(message::where('smsusername', '=', Input::get('uname'))->where('smspassword', '=', Input::get('password'))->first() )

     {
       
        session::put('adminname',Input::get('uname'));
        
         return Redirect::to('admin-dashboard')->with('alert-success', 'You are now logged in.');

     }

     else{

        return Redirect::to('admin&12login')->with('alert-invalid', 'Invalid Credentials.');
        }
      }
    }
    
   


    public function admin_dashboard()  //admin site admin-dashboard.php
    {
        if(session::get('adminname')!="")
        {

        $psEditFirInfo=police_station::select('*')->where('fir_edit_status','=','Allowed')->get();
        $psEditCriminalInfo=police_station::select('*')->where('criminal_edit_status','=','Allowed')->get();

        return view('cisps/admin/admin-dashboard',compact('psEditCriminalInfo','psEditFirInfo'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
    }

    public function createacc()  //admin site add-police-station.php
    {
        if(session::get('adminname')!="")
        {

        $province=Address::distinct()->get(['province']);
        return view('cisps/admin/add-police-station',compact('province'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  

        
    }
    public function viewacc()  //admin site view-police-station.php
    {
        if(session::get('adminname')!="")
        {

        $province=Address::distinct()->get(['province']);

        return view('cisps/admin/view-police-station',compact('province'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
            
    }
    public function sms_service()  //admin site sms-service-account.php
    {

         if(session::get('adminname')!="")
        {

        

         return view('cisps/admin/sms-service-account');
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
       
    }
     public function help()  //admin site help.php
    {

         if(session::get('adminname')!="")
        {

         return view('cisps/admin/help');
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
       
    }
     public function add_police_station_range()  //admin site add-police-station-range.php
    {

         if(session::get('adminname')!="")
        {
        $name=session::get('newpsname');
        $psdid=session::get('newpsdid');
      // $name="Gulberg PS";
        ///$psdid='D5';

        $rangeinfo=range::select('*')->where([['ps_name','=',$name],['d_id','=',$psdid]])->get();
        return view('cisps/admin/add-police-station-range',compact('name','psdid','rangeinfo'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
        
    }


    public function rights()  //admin site add-police-station-range.php
    {

         if(session::get('adminname')!="")
        {

         $info=police_station::select('ps_username')->get(); 

        return view('cisps/admin/rights',compact('info'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
       
    }
     public function graph()  //admin site add-police-station-range.php
    {
       
        $pending=fir_info::select('*')->where(['fir_type'=>0,'fir_status'=>0,'d_id'=>'D5'])->count();
        $running=fir_info::select('*')->where(['fir_type'=>0,'fir_status'=>1,'d_id'=>'D5'])->count();
        $completed=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>1,'d_id'=>'D5'])->count();

        $Rob=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Roberry','d_id'=>'D5'])->count();
        $Dmurder=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Deliberate Murder','d_id'=>'D5'])->count();
        
        $Amurder=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Attempt To Murder','d_id'=>'D5'])->count();
        
        $Kidnap=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Kidnapping','d_id'=>'D5'])->count();
        $Rape=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Rape','d_id'=>'D5'])->count();
        $Theft=fir_info::select('*')->where(['fir_type'=>0,'crime_type'=>'Theft','d_id'=>'D5'])->count();
    

       return view('cisps/admin/graph',compact('pending','running','completed','Rob','Dmurder','Amurder','Kidnap','Rape','Theft'));
    }







     public function fir_rights(Request $request)
    {

         if(session::get('adminname')!="")
        {
             // process the form
        // validate the info, create rules for the inputs

    $rules = array(
    'psuname'    => 'required|not_in:0', // make sure the email is an actual email
    'psright' => 'required|not_in:0'); // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('rights')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
   
  
        
        police_station::where('ps_username', Input::get('psuname'))->update(['fir_edit_status' => Input::get('psright')]);
        return Redirect::to('rights')->with('alert-success', 'Successfully Updated.');

     }
        
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  

     }








    public function criminal_rights(Request $request)
    {


        // process the form
        // validate the info, create rules for the inputs

    $rules = array(
    'pscuname'    => 'required|not_in:0', // make sure the email is an actual email
    'pscright' => 'required|not_in:0'); // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('rights')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
   
  
        
        police_station::where('ps_username', Input::get('pscuname'))->update(['criminal_edit_status' => Input::get('pscright')]);
        return Redirect::to('rights')->with('alert-success', 'Successfully Updated.');

     } }




     public function Add_account(Request $request)
     {  
         $rules=array(
        
        'psname' =>'required',
        'psphno' =>'required',
        'plotno'=>'required',
        'area'  =>'required',
        'psuname'=>'required|unique:police_stations,ps_username',
        'password'=>'required|alphaNum',
        'province'=>'required|not_in:0',
        'city'=>'required|not_in:0',
        'district'=>'required|not_in:0',
        'town'=>'required|not_in:0',



            );

        $messages = array(

        'required' => 'This field is required'
       
             );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('add-PS')->with('alert-danger','Something wrong')
            ->withErrors($validator)
            ->withInput(Input::all());
       
                }

        else{
        //
        
        

        //Saving Values
        $policeacc = new police_station;
        
        
        $policeacc->ps_name=Input::get("psname");;
        $policeacc->ps_phno=Input::get("psphno");
        $policeacc->ps_area=Input::get("area");
        $policeacc->ps_plotno=Input::get('plotno');
        $policeacc->ps_username=Input::get("psuname");
        $policeacc->ps_pwd=Input::get('password');
        $policeacc->ps_town=Input::get('town');
        $policeacc->fir_edit_status="NotAllowed";
        $policeacc->criminal_edit_status="NotAllowed";
        $province=Input::get("province");
        $city=Input::get("city");
        $district=Input::get("district");
        $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        $policeacc->d_id=$did;
        
        $policeacc->save();

        session::put('newpsname',Input::get('psname'));
        session::put('newpsdid',$did);
        return Redirect::to('add-police-station-range');
            }



     }




     public function add_range()

     {  
         
         $rules=array(
        
        'psname' =>'required',
        'psdid' =>'required',
        'psarea'=>'required',);

        $messages = array(

        'required' => 'This field is required'
       
             );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('add-police-station-range')
            ->withErrors($validator)
            ->withInput(Input::all());
       
}

else{
        $name=Input::get('psname');
        $did=Input::get('psdid');
        $area=Input::get('psarea');

      $check=range::select('*')->where([['ps_name','=',$name],['d_id','=',$did],['ps_range','=',$area]])->count();

        if($check==0)

        {
        

        //Saving Values
        $psrange = new range;
        
        
        $psrange->ps_range=Input::get("psarea");
         $psrange->d_id=Input::get("psdid");
        $psrange->ps_name=Input::get("psname");
       
       
        
        $psrange->save();

        return Redirect::to('add-police-station-range')->with('alert-success','Successfully Added');
        }

       else
        {
            return Redirect::to('add-police-station-range')->with('alert-danger','This area is already exist');
        }
    }


     }




     //search Police station method

     public function search_ps(Request $request)
     {

        $rules=array(
        'province'=>'required|not_in:0',
        'city'=>'required|not_in:0',
        'district'=>'required|not_in:0',);

        $messages = array(

        'required' => 'This field is required'
       
             );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('View-PS')
            ->withErrors($validator)
            ->withInput(Input::all());
       
                }

        else{
        //
        
        

        //Saving Values
        $province=Input::get("province");
        $city=Input::get("city");
        $district=Input::get("district");
        $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        
        $data=police_station::select('*')->where('d_id','=',$did)->get();
        
        $province=Address::distinct()->get(['province']);// to comapct provice on result page also
        if($data->count()!=0){
        return view('cisps/admin/search-police-station',compact('province','data'));
                    }
        else{
                return Redirect::to('View-PS')->with('alert-danger','No recode found');
            }
        }
        

    }




    //range search view


    public function add_range_view(Request $request)
    {

         if(session::get('adminname')!="")
        {

         $info=police_station::select('ps_username')->get(); 

        return view('cisps/admin/add-range-search',compact('info'));
        } 
        else
        {
        return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
        }  
      
    }


    public function search_range(Request $request)
    {
         $rules=array(
        'psuname'=>'required|not_in:0',);

        $messages = array(

        'required' => 'select a username'
       
             );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('add-range')
            ->withErrors($validator)
            ->withInput(Input::all());
       
                }

        else{
        //
        
        

        //Saving Values
        $psuname=Input::get('psuname');
        
        $psdetail=police_station::select('*')->where('ps_username','=',$psuname)->get()->first();
        $name=$psdetail->ps_name;
        $psdid=$psdetail->d_id;        
        $rangeinfo=range::select('*')->where([['ps_name','=',$name],['d_id','=',$psdid]])->get();
        return view('cisps/admin/add-police-station-range',compact('name','psdid','rangeinfo'));
        }
        
    }
     

   public function ViewRequest(Request $request)

   {
     if(session::get('adminname')!="")
     {
    $province=Address::distinct()->get(['province']);
    $requests=request_table::select('*')->where('submit_date','=',Carbon::today())->get();
    $did=Address::select('d_id')->where([['Province','=',Input::get('province')], ['City','=',Input::get('city')],['District','=',Input::get('district')]])->take(1)->get()->pluck('d_id')->first();
    $result=request_table::select('*')->where('d_id','=',$did)->get();
    return view('cisps\admin\view-request',compact('requests','province','result'));
}
else
{
   return Redirect::to('admin&12login')->with('alert-invalid', 'Please Login');
}
     
}


}
