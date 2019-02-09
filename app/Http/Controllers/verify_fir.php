<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Address;
use Illuminate\Support\Facades\session;
use App\ctype;
use App\fir_info;
use Carbon\Carbon;
use App\range;
use App\witness_info;
use App\investigation_officer;
class verify_fir extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
    //     $fid=$request->id;
    //     $psname=Session::get('psname');
    //     $firinfo=fir_info::leftjoin('Addresss','fir_infos.d_id','=','Addresss.d_id')
    //                        ->where([['fir_infos.fir_id','=',$fid], ['fir_infos.ps_name','=',$psname]])
    //                         ->select('fir_infos.*','Addresss.*')->get();


    //    return view('cisps/verify-fir',compact('firinfo'));
           
     }

    public function fir_verify1(Request $request)
    {



        $fid=$request->id;
        session::put('rfid',$fid);  //FIR ID PUT IN SESSION FOR PROSECUTION, INVESTIGATION, WITNESS
        $psname=Session::get('psname');
        $firinfo=fir_info::leftjoin('Addresss','fir_infos.d_id','=','Addresss.d_id')
                           ->where([['fir_infos.fir_id','=',$fid], ['fir_infos.ps_name','=',$psname]])
                            ->select('fir_infos.*','Addresss.*')->get();


       return view('cisps/verify-fir',compact('firinfo'));

    }

    public function fir_verify2(Request $request)
    {
             $fid=session::get('rfid');
        $psname=Session::get('psname');
        $firinfo=fir_info::leftjoin('Addresss','fir_infos.d_id','=','Addresss.d_id')
                         ->where([['fir_infos.fir_id','=',$fid], ['fir_infos.ps_name','=',$psname]]) 
                        ->select('fir_infos.*','Addresss.*')->get();

        return view('cisps/verify-fir',compact('firinfo'));

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
    

      



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function updatefirinfo(Request $request)
    {

              // process the form
        // validate the info, create rules for the inputs

    $rules = array(
    'id'    => 'required', // make sure the id is an actual complete fir id
    'detailps' => 'required',// makesure the detail of by PS
    'psoname'=>'required',
    'psname'=>'required',
    'ctype'=>'required|not_in:0',);
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
 $id=session::get('rfid');
// if the validator fails, redirect back to the form
    if ($validator->fails()) {
       
     return redirect('verify-fir/'.$id)
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
    
           
        
        fir_info::where('fir_id',$id)
                ->update(['detail_by_police' => Input::get('detailps'),'ps_name' => Input::get('psname'),'psw_officer' 
                                             => Input::get('psoname'),'fir_id' => Input::get('id'),'crime_type'
                                             => Input::get('ctype')]);
                session::put('rfid',Input::get('id'));
        return Redirect::to('verify-fir/'.$id)->with('alert-success', 'Successfully Updated.');

     }

    } 

   public function AddWitnessInfo(Request $request)
   {
      $rules=array(
      'fname' =>'required',
      'lname' => 'required',
      'cnic' =>'required|max:14|min:13',
      'phno' => 'required',
      'province'=>'required|not_in:0',
       'city'=>'required|not_in:0',
       'district'=>'required|not_in:0',
       'town'=>'required|not_in:0',
       'area' => 'required',
       'hno' =>'required',
       'street' =>'required'

        );
      $messages = array(

        'required' => 'This field is required',
);

    $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('add-witness')
            ->withErrors($validator)
            ->withInput(Input::all());

    }
    else
    {
        $witness=new witness_info;
        $witness->wit_fname=Input::get('fname');
        $witness->wit_lname=Input::get('lname');
        $witness->wit_cnic=Input::get('cnic');
        $witness->wit_phno=Input::get('phno');
        $witness->wit_house_no=Input::get('hno');
        $witness->wit_street=Input::get('street');
        $witness->wit_area=Input::get('area');
        $witness->wit_town=Input::get('town');
        $province=Input::get("province");  //Getting District ID
        $city=Input::get("city");
        $district=Input::get("district");
        $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        $witness->d_id=$did;
        $witness->fir_id=session::get('rfid');
        $witness->save();
        return Redirect::to('witness-info');

    }
  
   }  

public function AddInvestigationOfficer(Request $request)
{
   $result=investigation_officer::select('*')->where('fir_id','=',session::get('rfid'));

   //Update record of investigation Officer if it exists
   if($result->count()>0){ 
   $rules=array(
      'no' =>'required',
      'oname' => 'required',
      'cnic' =>'required|max:16|min:13'
      );
   $messages = array(

        'required' => 'This field is required',
);

   $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('investigation-officer')
            ->withErrors($validator)
            ->withInput(Input::all());

    }
    else
    {
        investigation_officer::where('fir_id',session::get('rfid'))
                ->update(['inv_off_name' => Input::get('oname'),'inv_off_cnic' => Input::get('cnic'),
                    'inv_off_ono' => Input::get('no')]);

        
        return Redirect::to('investigation-officer')->with('alert-success', 'Successfully Updated.');

    }
}
//Add new record of investigation Officer if it doesn't exists
else if($result->count()==0)
{
$rules=array(
      'no' =>'required',
      'oname' => 'required',
      'cnic' =>'required|max:16|min:13'
      );
   $messages = array(

        'required' => 'This field is required',
);

   $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('investigation-officer')
            ->withErrors($validator)
            ->withInput(Input::all());

    }
    else
    {
        $investigation=new investigation_officer;
        $investigation->inv_off_name=Input::get('oname');
        $investigation->inv_off_cnic=Input::get('cnic');
        $investigation->inv_off_ono=Input::get('no');
        $investigation->fir_id=session::get('rfid');
        $investigation->save();

        
        return Redirect::to('investigation-officer')->with('alert-success', 'Successfully Added');

    }
    
}

}



    
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
     
    public function searchFirDetail(Request $request)
    {

       $firs = new fir_info;

        $firid=Input::get("firid");
        $ctype=Input::get("ctype");
        //Address
        $province=Input::get("province");
        $city=Input::get("city");
        $district=Input::get("district");

        $provinceQuery=Address::select('D_ID')->where('Province','=',$province)->get();
        $cityQuery=Address::select('D_ID')->where([['Province','=',$province],['City','=',$city]])->get();
         $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        //Dates

        $from=Input::get("fromDate");
        $to=Input::get("toDate");


     /*   if($request->has('fromDate') || $request->has('toDate') || $request->has('ctype') || $request->has('province') ||   $request->has('city') || $request->has('district') || $request->has('firid'))
        { */
        



  /*      $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
         $result=fir_info::select('*')->where('fir_id','=',$firid)->orWhere('crime_type','=',$ctype)->orWhere('D_ID','=',$did)->orWhereBetween('fir_submit_date',[$from,$to])->orWhereIn('D_ID',$provinceQuery)->orWhereIn('D_ID',$cityQuery)->get();
         
         $province=Address::distinct()->get(['province']);
         $crimetype=ctype::get(['CRIME_TYPE']);
         if($result->count()>0){
         return view('cisps/search-fir-detail',compact('result','province','crimetype'));
     }
         else
         {
            return Redirect::to('search-fir')->with('alert-invalid', 'No Record Found');
         }
     

    
   */
      

    /*if(Input::has('fromDate') && Input::has('toDate'))
    
         $firs=$firs->WhereBetween('fir_submit_date',[$from,$to]);
         
         
       if(Input::has('ctype'))
       
          $firs=$firs->WhereBetween('fir_submit_date',[$from,$to])->where('crime_type','=',$ctype);

    if ($request->has('province'))
         
       $firs=$firs->WhereIn('D_ID',$provinceQuery);

    if ($request->has('city'))

       $firs=$firs->WhereIn('D_ID',$cityQuery);
    
    if ($request->has('district'))

        $firs=$firs->where('D_ID','=',$did);

    if ($request->has('firid'))

        $firs=$firs->where('fir_id','=',$firid);

    */
           
     if($from !=" " && $to !=" ")
            
       $firs=$firs->WhereBetween('fir_submit_date',[$from,$to])->Where('verification_status','=','1');

    

     if($from !=" " && $to !=" " && $ctype !=" ")          
       
       $firs=$firs->WhereBetween('fir_submit_date',[$from,$to])->Where('crime_type','=',$ctype)->Where('verification_status','=','1');
    
     
     
     else
     $firs=$firs->orWhere([['D_ID','=',$did],['verification_status','=','1']])->orWhere([['fir_id','=',$firid],['verification_status','=','1']]); 
        
        
    $firs=$firs->get();

         if($firs->count()>0){
          $province=Address::distinct()->get(['province']);
         $crimetype=ctype::get(['CRIME_TYPE']);
         return view('cisps/search-fir-detail',compact('firs','province','crimetype'));
     }
         else
         {
            return Redirect::to('search-fir')->with('alert-invalid', 'No Record Found');
         }
    
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
