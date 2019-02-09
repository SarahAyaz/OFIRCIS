<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Address;
use App\victim_info;
use Illuminate\Support\Facades\session;


use Illuminate\Support\MessageBag;


class vic_signup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $address=Address::all();
        $province=Address::distinct()->get(['province']);
       return view('ofircs/signup',compact('address','province'));
    }

    public function victim_login(Request $request)// Vic_login function for validation of login page Victim
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
    return Redirect::to('ofirclientsite')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } 


    else {
    // create our user data for the authentication
    $userdata = array(
        'vic_email'     => Input::get('uname'),
        'vic_pwd'  => Input::get('password')
    );

     if(VICTIM_INFO::where('VIC_EMAIL', '=', Input::get('uname'))->where('VIC_PWD', '=', Input::get('password'))->first() )

     {
       $name=input::get('uname');
        Session::put('email', $name );
        
         return Redirect::to('myprofile')->with('alert-success', 'You are now logged in.');

     }

     else{

        return Redirect::to('ofirclientsite')->with('alert-invalid', 'Invalid Credentials.');
        

     }
    // else
    // {
    //    $errors = new MessageBag(['password' => ['Email and/or password invalid.']]); 
    //    // if Auth::attempt fails (wrong credentials) create a new message bag instance.
    //     return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
    // }

    
    // if (Auth::attempt(array('vic_email' => Input::get('uname'),'vic_pwd'  => Input::get('password')))) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
      // return redirect:: to('myprofile');
   //}[]
}

        /********************************************************/
/*

    // attempt to do the login
    if (Auth::attempt(['vic_email'     => Input::get('uname'),
        'vic_pwd'  => Input::get('password')])) {


        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
       return redirect:: to('myprofile');



       $errors = new MessageBag(['password' => ['Email and/or password invalid.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

    return Redirect::back()->withErrors($errors)->withInput(Input::except('password')); // 
    */

    /********************************************************/



    // } else {        

    //     // validation not successful, send back to form 
    //     return Redirect::to('ofirclientsite');

    // }


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

        $rules=array(
        'fname' => 'required',
        'lname' =>'required',
        'gender'=>'required|not_in:0',
        'cnic' =>'required|max:14|min:13|unique:victim_infos,vic_cnic',
        'phoneno'=>'required|unique:victim_infos,vic_phno|regex:/(03)[0-9]{9}/',
        'email' =>'required|email',
        'password'=>'required|min:5',
        'cpassword'=>'required|same:password',
        'hno'=>'required',
        'street'=>'required',
        'area'=>'required',
        'town'=>'required',
        'province'=>'required|not_in:0',

        'city'=>'required|not_in:0',
        'district'=>'required|not_in:0'


            );

        $messages = array(

        'required' => 'This field is required',
        'same'  => 'Password does not match'
        //'email'=>'Invalid Email'
    );

        $validator = Validator::make(Input::all(), $rules,$messages);
        if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('signup')
            ->withErrors($validator)
            ->withInput(Input::all());

    }


else{
        //
        $vic=new victim_info;
        $vic->vic_fname=Input::get("fname");
        $vic->vic_lname=Input::get("lname");
        $vic->gender=Input::get("gender");
        $vic->vic_cnic=Input::get("cnic");
        $vic->vic_phno=Input::get("phoneno");
        $vic->vic_email=Input::get("email");
        $vic->vic_pwd=Input::get("password");
        $vic->vic_house_no=Input::get("hno");
        $vic->vic_street=Input::get("street");
        $vic->vic_area=Input::get("area");
        $vic->vic_town=Input::get("town");

     $province=Input::get("province");
     $city=Input::get("city");
     $district=Input::get("district");
     $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get()->pluck('d_id')->first();
        $vic->d_id=$did;
        //$vic->vic_id="2";
        $vic->save();
        return Redirect::to('ofirclientsite')->with('alert-success', 'Your Account has been sucessfully Created');
}
    }

  /*public function GetDistrictId(){
     $province=Input::get("province");
     $city=Input::get("city");
     $District=Input::get("district");
     $did=Address::select('d_id')->where([['Province','=',$province], ['City','=',$city],['District','=',$district]])->take(1)->get();
        
    //$town=Town::select('t_name')->where('d_id','=',$did)->take(100)->get();
    //  return response()->json($town);
  }*/

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
