<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\session;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use App\Quotation;


use App\Address;
use App\ctype;
use App\town;
use App\range;
use App\victim_info;
use App\police_station;
use App\fir_info;
use App\inv_officer;
use App\procecution;

class fircs extends Controller
{
    

    public function homepage()  //homepage of client site index.php
    {
        //Auth::logout();
        Session::forget('email');
       

        return view('ofircs/index');
    }

    public function myprofile() //client site my-profile.php
    { 

    //session_start();
    if(Session::get('email')!="") {


        $data=victim_info::select('vic_id')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_id');
        $id=str_replace('["','', $data);
        $id=str_replace('"]','', $id);
        session::put('id',$id);
        $countpost = fir_info::where(['vic_id'=>$id,'fir_type' => 0,'verification_Status'=>1])->count();
        session::put('fir',$countpost);
        $countall = fir_info::where(['vic_id'=>$id,'verification_Status'=>1])->count();
        session::put('firall',$countall);


       // $info=victim_info::select('*')->where('VIC_Email','=',session::get('email'))->get();
         $info=victim_info::join('addresss', 'victim_infos.d_id', '=', 'addresss.d_id')->select('victim_infos.*', 'addresss.*')
                          ->where('victim_infos.vic_email','=',session::get('email'))->get();


       


        return view('ofircs/my-profile',compact('info'));
    
                                }  
    else{
        return view('ofircs/index');
    }
     
    }

    public function my_profile_running() //client site my-profile-runnning.php all runnning firs
    { if(Session::get('email')!="") {


        $data=victim_info::select('vic_id')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_id')->first();
        //$id=str_replace('["','', $data);
        //$id=str_replace('"]','', $id);
       
       $info=victim_info::select('*')->where('VIC_Email','=',session::get('email'))->get();
         $fir_info=fir_info::select('*')->where(['VIC_ID'=>$data ,'fir_status'=> 0,'fir_type'=>1,'verification_Status'=>1])->get();



        return view('ofircs/my-profile-running',compact('fir_info','info'));
    
                                }  
    else{
        return view('ofircs/index');
    }
     
       
    }


    public function my_profile_pending() //client site my-profile-pending.php all pending  firs
    {

        if(Session::get('email')!="") {


            $data=victim_info::select('vic_id')->where('VIC_Email','=',session::get('email'))->get()->pluck('vic_id')->first();
        //$id=str_replace('["','', $data);
        //$id=str_replace('"]','', $id);
       
       $info=victim_info::select('*')->where('VIC_Email','=',session::get('email'))->get();
         $fir_info=fir_info::select('*')->where(['VIC_ID'=>$data ,'fir_status'=> 1,'fir_type'=>1,'verification_Status'=>1])->get();
       

       return view('ofircs/my-profile-pending',compact('fir_info','info'));
    
                                }  
    else{
        return view('ofircs/index');
    }
        
    }

    public function my_profile_all_firs() //client site my-profile-all-firs.php all  firs
    {

         if(Session::get('email')!="") {

        $data=victim_info::select('vic_id')->where(['VIC_Email'=>session::get('email')])->get()->pluck('vic_id');
        $id=str_replace('["','', $data);
        $id=str_replace('"]','', $id);
       
       $info=victim_info::select('*')->where('VIC_Email','=',session::get('email'))->get();
         $fir_info=fir_info::select('*')->where(['VIC_ID'=>$id,'verification_Status'=>1])->get();


       


        return view('ofircs/my-profile-all-fir',compact('fir_info','info'));
    
                                }  
    else{
        return view('ofircs/index');
    }

        
            }


    public function my_profile_delete_account() //client site my-profile-delete-account.php delete accounts 
    {

         if(Session::get('email')!="")
          {

         $info=victim_info::select('*')->where('VIC_Email','=',session::get('email'))->get();
      
       return view('ofircs/my-profile-delete-account',compact('info'));

    
                                }  
    else{
        return view('ofircs/index');
    }


       
    }

    public function view_fir_details(Request $request) //client site view-fir-details.blade firs Details form
    {
          $fid=$request->id;

         if(Session::get('email')!="") 
         {
            $fir_detail=fir_info::leftjoin('prosecutions','fir_infos.fir_id', '=', 'prosecutions.fir_id')
                                ->leftjoin('investigation_officers','prosecutions.fir_id','=','investigation_officers.fir_id')
                                ->where('fir_infos.fir_id','=',$fid)
                                ->select('fir_infos.*', 'prosecutions.*','investigation_officers.*')->get();
            

                    return view('ofircs/view-fir-details',compact('fir_detail','fid'));}  
        else{
         return view('ofircs/index');
            }
    }



///extra code

    public function fir_form() //client site fir-form.blade.php firs form   
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

    //ecd extra code

    public function fir_verify() //client site fir-verify.blade f.php verify FIR form   
    {


         if(Session::get('email')!="") {
         return view('ofircs/fir-verify');
    
                                }  
    else{
        return view('ofircs/index');
    }
     
       

    }


    public function forget_password() //client site forget-password.blade.php Password forget page   
    {


      
         return view('ofircs/forget-password');
    
                                
    
     
       

    }


    public function forget_password_verify() //client site forget-password-verify.blade Password forget verificatioj page  
    {



         
        return view('ofircs/forget-password-verify');
    
                            
   
     
        

    }

   public function print_fir() //client site print-fir.blade.php Print FIR button page
    {


         if(Session::get('email')!="") {
           $firdetail= fir_info::where('fir_id','=',session::get('f_id'))->select('*')->get();
         return view('ofircs/print-fir',compact('firdetail'));

    
                                }  
    else{
        return view('ofircs/index');
    }
     
       

    }
 
    public function print_fir_pdf() //client site print-fir-pdf.blade Print FIR pdf  page
    {


         if(Session::get('email')!="") {
            $firdetail= fir_info::where('fir_id','=',session::get('f_id'))->select('*')->get();
         return view('ofircs/print-fir-pdf',compact('firdetail'));

    
        
    
                                }  
    else{
        return view('ofircs/index');
    }
     
        

    }


    public function reset_password() //client site reset-password.blade.php Reset Password
    {


      
        return view('ofircs/reset-password');
    
      
     
        

    }


    public function signup() //client site signup.blade.php Sign Up page
    {


        
        $address=Address::all();
        $province=Address::distinct()->get(['province']);
       return view('ofircs/signup',compact('address','province'));

    }

     public function FindProvince(Request $request) //client site signup.blade.php Sign Up page
    {
        
        $address=Address::all();
        $province=Address::distinct()->get(['province']);
       return response()->json($province);

    }


    public function FindCity(Request $request){
        $data=Address::select('province','city')->where('province','=', $request->pname)->take(100)->distinct()->get();
        return response()->json($data);
    } 


    public function FindDistrict(Request $request){
        $district=Address::select('city','district')->where('city','=',$request->cname)->take(100)->get();
        return response()->json($district);
    }


   

public function FindTown(Request $request){
    $did=Address::select('d_id')->where('district','=',$request->dname)->take(100)->get()->pluck('d_id');
    //    echo $did ;
    $town=Town::select('t_name')->where('d_id','=',$did)->take(100)->get();
      return response()->json($town);
}


//find area 

public function FindArea(Request $request){
    $psname=police_station::select('ps_name')->where('ps_town','=',$request->tname)->take(100)->get()->pluck('ps_name');
    //    echo $did ;
    $Area=range::select('ps_range')->whereIn('ps_name',$psname)->take(100)->get();
      return response()->json($Area);

}



//crime time load on ajax

public function CrimeType(Request $request){
    $crime=ctype::select('*')->get()->pluck('crime_type');
    //    echo $did ;
   
      return response()->json($crime);

}

    public function contact() //client site signup.blade.php Sign Up page
    {
       return view('ofircs/contact-us');}

    




    //test of cis site in this controller

 












}
