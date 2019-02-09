<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\session;
use App\Address;
use App\ctype;
use App\Police_Station;
use App\fir_info;
use App\witness_info;
use App\investigation_officer;
class cisps extends Controller
{


    public function dashboard()  //police site police-dashboard.php
    {
        if(session::get('uname')!="")
        {

    $name=Police_Station::select('ps_name')->where('ps_username','=',session::get('uname'))->get()->pluck('ps_name')->first();
    $distict=Police_Station::select('d_id')->where('ps_username','=',session::get('uname'))->get()->pluck('d_id')->first();
    $address=Address::select('*')->where('d_id','=',$distict)->get()->first();
    $firs=fir_info::select('fir_id','Crime_type','fir_status','fir_submit_date')->where(['ps_name'=>$name,'verification_status'=>1])->get();
       

      
    
    session::put('psname',$name);
    session::put('address',$address->district." ".$address->city.", ".$address->province);



        return view('cisps/police-dashboard',compact('firs','name','address'));}
        else{


            return view('cisps/login');
        }
    }
    public function searchfir()  //police site search-fir.php
    {
         if(session::get('uname')!="")
        {
         $province=Address::distinct()->get(['province']);
         $crimetype=ctype::get(['CRIME_TYPE']);
        return view('cisps/search-fir',compact('province','crimetype'));}
        else{


            return view('cisps/login');
        }

       
    }

    
    public function searchfirresult()  //police site search-fir-result.php
    {   
        if(session::get('uname')!="")
        {
          return view('cisps/search-fir-result');
        }
        else{



            return view('cisps/login');
        }




       
    }

    //public function verifyfir()  //police site verify-fir.php

    //    return view('cisps/verify-fir');
    //}
    
   public function firinfo(Request $request)  //police site fir-info.php
    {
        $fid=$request->id;
        if(session::get('uname')!="")
        {
            $firinfo=fir_info::leftjoin('investigation_officers','fir_infos.fir_id','=','investigation_officers.fir_id')->leftjoin('prosecutions','prosecutions.fir_id','=','fir_infos.fir_id')->leftjoin('crime_records','crime_records.fir_id','=','fir_infos.fir_id')->leftjoin('criminal_infos','crime_records.cr_cnic','=','criminal_infos.cr_cnic')->where('fir_infos.fir_id','=',$fid)->select('fir_infos.*','investigation_officers.*','prosecutions.*','criminal_infos.*')->get();
            return view('cisps/fir-info',compact('firinfo'));
        }
        else{



            return view('cisps/login');
        }

        
    }
    public function firpending()  //police site fir-pending.php
    {
         if(session::get('uname')!="")
        {
            $fir=fir_info::select('*')->where(['fir_type'=>0,'fir_status'=>0,'ps_name'=>session::get('psname')])->get();
            return view('cisps/fir-pending',compact('fir'));
        }
        else{



            return view('cisps/login');
        }


      
    }
    public function firinprocess()  //police site fir-inprocess.php
    {
         if(session::get('uname')!="")
        {


             $fir=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>0,'ps_name'=>session::get('psname'),'verification_status'=>1])->get();
            return view('cisps/fir-inprocess',compact('fir'));}
       
        else{



            return view('cisps/login');
        }

        
    }
    public function firclosed()  //police site fir-closed.php
    {
         if(session::get('uname')!="")
        {


            $fir=fir_info::select('*')->where(['fir_type'=>1,'fir_status'=>1,'ps_name'=>session::get('psname'),'verification_status'=>1])->get();
            return view('cisps/fir-closed',compact('fir'));}
            
        
        else{



            return view('cisps/login');
        }

      
    }
    public function printfir()  //police site print-fir.php
    {
         if(session::get('uname')!="")
        {
           return view('cisps/print-fir');
        }
        else{



            return view('cisps/login');
        }

       
    }
    public function investigationofficer()  //police site investigation-officer.php
    {
         if(session::get('uname')!="")
        {
           $inv_officer=investigation_officer::select('*')->where('fir_id','=',session::get('rfid'))->get();
                      { 
           return view('cisps/investigation-officer',compact('inv_officer'));}
           
           
            
        }
        else{



            return view('cisps/login');
        }

       
    }
    public function prosecution()  //police site prosecution.php
    {
         if(session::get('uname')!="")
        {
           return view('cisps/prosecution');
        }
        else{



            return view('cisps/login');
        }

       
    }
    public function witnessinfo()  //police site witness-info.php
    {
         if(session::get('uname')!="")
              {
    $info=witness_info::join('addresss','witness_infos.d_id','=','addresss.d_id')->where('witness_infos.fir_id','=',session::get('rfid'))->get();            

    return view('cisps/witness-info',compact('info'));
              }
        else{



            return view('cisps/login');
        }

        
    }

    public function addWitness()
    {
         if(session::get('uname')!="")
        {
            $address=Address::all();
            $province=Address::distinct()->get(['province']);
            return view('cisps/add-witness',compact('address','province'));
        }
        else{



            return view('cisps/login');
        }
    }
    public function help()  //police site help.php
    {
         if(session::get('uname')!="")
        {
          return view('cisps/help');
        }
        else{



            return view('cisps/login');
        }

        
    }

    

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
 
    
   
    public function addcriminal()  //police site add-criminal.php
    {
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
    public function editcriminal()  //police site edit-criminal.php
    {
         if(session::get('uname')!="")
        {
           return view('cisps/edit-criminal');
        }
        else{



            return view('cisps/login');
        }

       
    }



    //camera checking routes
     public function imageUploadPost(Request $request)
    {

    

        $this->validate($request, [
            // 'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'saveimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
                'imageData1' => 'required',
                'imageData2' => 'required',
                'imageData3' => 'required',

        ]);
        $data=$request->imageData1;
        $data=str_replace('data:image/jpeg;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data=base64_decode($data);
        $saveimage=imagecreatefromstring($data);
        if ($saveimage!==false)
        {
            header('Content-Type: image/png');
            $save=public_path('/criminals/').'left'.".png";
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
            $save=public_path('/criminals/').'front'.".png";
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
            $save=public_path('/criminals/').'right'.".png";
            imagepng($saveimage,$save);
        }
        else
        {
            echo "An error occured";
        }
        return back()
        ->with('success','Image Uploaded successfully.')
        ->with('path');
        // else
        // {
        //     $this->validate($request, [
        //         'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //         //'saveimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);
        //     $imageName1 = $request->image1->getClientOriginalName().'.'.$request->image1->getClientOriginalExtension();
        //     $request->image1->move(public_path('images/criminal_images'), $imageName1);

        //     $imageName2 = $request->image2->getClientOriginalName().'.'.$request->image2->getClientOriginalExtension();
        //     $request->image2->move(public_path('images/criminal_images'), $imageName2);

        //     $imageName3 = $request->image3->getClientOriginalName().'.'.$request->image3->getClientOriginalExtension();
        //     $request->image3->move(public_path('images/criminal_images'), $imageName3);

        //     $savedimage = time().'.'.$request->saveimage->getClientOriginalExtension();
        //     $saveimage->move(public_path('images/criminal_images'), $savedimage);
        // }




        //$datas[]=$request->all();
        // foreach ($request as $data) 
        // {
        //     $data=array_values($data);
        //     $data=str_replace('data:image/jpeg;base64,', '', $data);
        //     $data = str_replace(' ', '+', $data);
        //     $data=base64_decode($data);
        //     $saveimage=imagecreatefromstring($data);
        //     if ($saveimage!==false)
        //     {
        //         header('Content-Type: image/png');
        //         $save=public_path('images/criminal_images/').time().".png";
        //         imagepng($saveimage,$save);
        //     }
        //     else
        //     {
        //         echo "An error occured";
        //     }
        // }





    }
}



