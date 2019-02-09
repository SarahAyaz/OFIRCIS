<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\session;
use App\message;

class sms extends Controller
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
    public function update(Request $request)
    {


        // process the form
        // validate the info, create rules for the inputs

    $rules = array(
    'uname'    => 'required', // make sure the email is an actual email
    'pwd' => 'required|Numeric'); // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('sms-service')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('pwd')); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
    // // App\Flight::where('active', 1)
    //       ->where('destination', 'San Diego')
    //       ->update(['delayed' => 1]);


    // DB::table('messages')
    //         ->where('name', 'Lifetimesms')
    //         ->update(['smsusername' => Input::get('uname'),'smspassword' => Input::get('pwd')]);
    
    //     return Redirect::to('sms-service')->with('alert-success', 'Successfully Updated.');

           
        
        message::where('name', 'Lifetimesms')
                ->update(['smsusername' => Input::get('uname'),'smspassword' => Input::get('pwd')]);
        return Redirect::to('sms-service')->with('alert-success', 'Successfully Updated.');

     }

     
       
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
