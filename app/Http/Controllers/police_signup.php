<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\police_station;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\session;
use Illuminate\Support\MessageBag;

class police_signup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session::forget('uname');
        session::forget('address');
         session::forget('psname');
       return view('cisps/login');  
    }


    public function police_login(Request $request)// Vic_login function for validation of login page Victim
    {
// process the form
        // validate the info, create rules for the inputs


    $rules = array(
    'uname'    => 'required', // make sure the email is an actual email
    'password' => 'required|alphaNum'); // password can only be alphanumeric and has to be greater than 3 characters
    
    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
    if ($validator->fails()) {
    return Redirect::to('signout-login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
                            } 


    else {
    // create our user data for the authentication
    $userdata = array(
        'ps_uname'     => Input::get('uname'),
        'ps_pwd'  => Input::get('password')
    );

     if(police_station::where('PS_USERNAME', '=', Input::get('uname'))->where('PS_PWD', '=', Input::get('password'))->first() )

            {
       $name=input::get('uname');
        Session::put('uname', $name );
        
         return Redirect::to('police-dashboard')->with('alert-success', 'You are now logged in.');

             }

        else{

        return Redirect::to('signout-login')->with('alert-invalid', 'Invalid Credentials.');
        

             }
   
            }

        /********************************************************/



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
