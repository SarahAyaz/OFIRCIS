<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\victim_info;


class forgetpass extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('ofircs/reset-password');
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
    public function reset(Request $request)
    {

                $rules=array(
                'phoneno' => 'required|regex:/(03)[0-9]{9}/',
                'password' =>'required|min:5|alpha_num',
                'cpassword'=>'required|same:password',
                

                    );

                $messages = array(

                'required' => 'This field is required',
                'same'  => 'Password does not match'
                
            );

                  // run the validation rules on the inputs from the form
                $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
            if ($validator->fails()) {
            return Redirect::to('reset-password')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('pwd')); // send back the input (not the password) so that we can repopulate the form
            } 


            else {
                $count=victim_info::select('*')->where('vic_phno','=',Input::get('phoneno'))->get()->count();

                    if($count==1)
                    {
                      victim_info::where('vic_phno',input::get('phoneno'))->update(['vic_pwd' =>input::get('password')]);
                    return Redirect::to('reset-password')->with('alert-success', 'Your password is successfully reset.');
  
                    }
                   else
                   {
                    return Redirect::to('reset-password')->with('alert-invalid', 'This phone no is not registred');
                   }
                
              
     }


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
