<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;
use App\procecution;
use App\crime_record;
use App\ctype;
class prosecution extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function prosecution()  //police site prosecution.php
    {
         if(session::get('uname')!="")
        {
           $fid=session::get(('rfid'));
           $prosecution_detail=procecution::where('fir_id','=',$fid)->select('*')->get();
           $crime_record=crime_record::join('criminal_infos','crime_records.cr_cnic','=','criminal_infos.cr_cnic')->where('crime_records.fir_id','=',$fid)->select('crime_records.*','criminal_infos.*')->get();
           $crime_type=ctype::select('*')->get();
           return view('cisps/prosecution',compact('prosecution_detail','crime_record','crime_type'));
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
    public function add_pros_detail()
    {
        //
        $rules = array(
        'judge_name'    => 'required', // make sure the id is an actual complete fir id
        'Date' => 'required',// makesure the detail of by PS
        'Pros_Lawyer'=>'required',
        'Def_Lawyer'=>'required',
        'court'=>'required',);
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
       
            return redirect('prosecution')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        } 
        else
        {
            $id=session::get('rfid');
            $prosecution=new procecution;
            $prosecution->def_lawyer=Input::get('Def_Lawyer');
            $prosecution->pros_lawyer=Input::get('Pros_Lawyer');
            $prosecution->judge=Input::get('judge_name');
            $prosecution->court=Input::get('court');
            $prosecution->judgement_date=Input::get('Date');
            $prosecution->fir_id=$id;
            $prosecution->save();
            return redirect('prosecution')->with('alert-success', 'Successfully added.');
        }

    }

    public function update_prosecution()
    {
        $loop=session::get('records');
        $judgement=input::get('judgement');
        $id=input::get('fir0');
        procecution::where('fir_id',$id)->update(['judgement'=>$judgement]);
        for($i=0;$i<$loop;$i++)
        {
            
            $cnic=input::get('cnic'.$i);
            crime_record::where('fir_id',$id)->where('cr_cnic',$cnic)->update(['section'=>input::get('section'.$i)]);    
        }
        return redirect('prosecution')->with('alert-success', 'Successfully added.');
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
