<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('conn', function () {
    return view('scriptdemo	 ');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    // Put all your routes inside here.
Route::auth();
Route::get('ofirclientsite',['uses'=>'fircs@homepage','as'=>'sign.out']) ;

Route::POST('vic_login','vic_signup@victim_login') ;//validate and login function for victim login

Route::get('fir-form',['uses'=>'fir_submit@index','as'=>'fir.form']); 

Route::POST('fir-submit','fir_submit@store') ;
Route::POST('verification','fir_submit@check_ver_code');
Route::post('vic_signup','vic_signup@store') ;

//Route::POST('myprofile','fircs@myprofile');

Route::get('myprofile', [ 'uses' => 'fircs@myprofile' , 'as' => 'user.profile' ] ) ;






Route::get('my-profile-running','fircs@my_profile_running') ;

Route::get('my-profile-pending','fircs@my_profile_pending') ;

Route::get('my-profile-all-firs','fircs@my_profile_all_firs') ;

Route::get('my-profile-delete-account','fircs@my_profile_delete_account') ;




// Route::get('view-fir-details/{id?}','fircs@view_fir_details') ;

Route::get('view-fir-details/{id?}', [ 'uses' => 'fircs@view_fir_details' , 'as' => 'fir.details']) ;



Route::get('fir-verify','fircs@fir_verify') ;


Route::get('forget-password','fircs@forget_password') ;

Route::get('forget-password-verify','fircs@forget_password_verify') ;


Route::get('print-nonver-fir','fircs@print_fir') ;

Route::get('print-fir-pdf','fircs@print_fir_pdf') ;

//reset password post and get routes
Route::POST('reset','forgetpass@reset');

Route::get('reset-password','forgetpass@index') ;

//update profile POST route
Route::get('update-profile','forgetpass@update');




Route::get('signup','vic_signup@index') ;

 //route for victim signup validation

Route::get('FindCity','fircs@FindCity') ;

Route::get('FindDistrict','fircs@FindDistrict');
Route::get('FindProvince','fircs@FindProvince');

Route::get('FindTown','fircs@FindTown');


Route::get('FindArea','fircs@FindArea');

Route::get('FindCtype','fircs@CrimeType');


Route::get('contact-us',['uses'=> 'fircs@contact','as'=>'victim.contactus']) ;



//routes of Police station site

//Route::get('main','cisps@dashboard') ;


Route::post('vic_register','insertion@vic_signup') ; //route for victim signup validation

Route::get('signout-login',['uses'=>'police_signup@index', 'as'=>'log.out']);

Route::POST('police-login','police_signup@police_login') ;//validate and login function for victim login

Route::get('police-dashboard',['uses'=>'cisps@dashboard','as'=>'police.dashboard']);

Route::get('search-fir',['uses'=>'cisps@searchfir','as'=>'search.fir']);
Route::POST('fir-search','verify_fir@searchFirDetail');

Route::get('search-criminal',['uses'=>'criminal@searchcriminal','as'=>'search.criminal']);//search criminal empty
Route::POST('criminal-search',['uses'=>'criminal@SearchCriminalMethod','as'=>'criminal.search']);


Route::get('add-criminal',['uses'=>'criminal@index','as'=>'add.criminal']);
Route::POST('criminal_add','criminal@store');
Route::POST('add-criminal-fir','criminal@AddCriminalFir');

Route::get('fir-pending',['uses'=>'cisps@firpending','as'=>'fir.pending']);
Route::get('fir-inprocess',['uses'=>'cisps@firinprocess','as'=>'fir.inprocess']) ;
Route::get('fir-closed',['uses'=>'cisps@firclosed','as'=>'fir.closed']);
Route::get('help',['uses'=>'cisps@help','as'=>'help']);
Route::get('fir-info/{id?}',['uses'=>'cisps@firinfo','as'=>'fir.info']) ;
Route::get('investigation-officer',['uses'=>'cisps@investigationofficer','as'=>'inv.officer']) ;
Route::POST('add-officer','verify_fir@AddInvestigationOfficer');
//Route::get('verify-fir','cisps@verifyfir') ;
Route::get('edit-criminal',['uses'=>'cisps@editcriminal','as'=>'edit.criminal']);
Route::get('search-fir-result',['uses'=>'cisps@searchfirresult','as'=>'search.fir.result']);

//routes of Police station site
Route::get('verify-fir/{id?}',['uses'=>'verify_fir@fir_verify1', 'as'=>'verify.fir']) ;

Route::get('verifyfir',['uses'=>'verify_fir@fir_verify2', 'as'=>'verify.fir2']) ;




Route::POST('valid-verify-fir',['uses'=>'verify_fir@updatefirinfo', 'as'=>'valid.verify.fir']) ;

Route::get('print-ver-fir',['uses'=>'cisps@printfir','as','print.fir']);
Route::get('prosecution',['uses'=>'prosecution@prosecution','as'=>'prosecution']) ;
Route::POST('update_pros',['uses'=>'prosecution@update_prosecution','as'=>'update_pros']) ;
Route::POST('add_pros_detail',['uses'=>'prosecution@add_pros_detail','as'=>'pros_detail']) ;
Route::get('witness-info',['uses'=>'cisps@witnessinfo','as'=>'witness.info']);
Route::get('add-witness',['uses'=>'cisps@addWitness','as'=>'add.witness']);
Route::POST('add-witness-info','verify_fir@AddWitnessInfo');





//routes of Police station Admin Site admin folder

Route::get('admin&12login',['uses'=>'admincis@adminLogin','as'=>'adminlogin']);
Route::POST('admin-login','admincis@adminLoginPost');
Route::get('admin-dashboard','admincis@admin_dashboard') ;
Route::get('add-PS','admincis@createacc') ;

Route::POST('add-ps-acc','admincis@Add_account') ;
Route::POST('add-range','admincis@add_range') ;
Route::get('View-PS','admincis@viewacc') ;
Route::POST('search-ps',['uses'=>'admincis@search_ps','as'=>'search.ps']);
Route::get('sms-service','admincis@sms_service') ;

Route::get('help-admin','admincis@help') ;
Route::get('add-range-ps','admincis@add_range_view');//range search view
Route::POST('search-range','admincis@search_range');//redirect page to add range view
Route::get('add-police-station-range','admincis@add_police_station_range') ;
Route::get('stats','admincis@graph') ;
Route::POST('update-sms-service','sms@update');
Route::get('rights',['uses'=>'admincis@rights','as'=>'rights']) ;

Route::POST('criminal-edit-rights','admincis@criminal_rights');
Route::POST('fir-edit-rights','admincis@fir_rights');

Route::get('view-request','admincis@ViewRequest'); //View Requests of current date
Route::POST('request-display','admincis@ViewRequest'); //Search Requests




//routes of  SP's Police station Admin Site SP folder


Route::get('sp-dashboard','spcontroller@SP_dashboard') ;
Route::get('sp','spcontroller@index');

//Route::get('stats','spcontroller@graphs');
Route::POST('sp_login','spcontroller@login');


Route::get('sp-request','spcontroller@SendRequest');
Route::POST('submit-request','spcontroller@SubmitRequest');

Auth::routes();

Route::get('/home', 'HomeController@index');
//

//camera checking routes

Route::any('{all}', function(){
    return view('missing');
})->where('all', '.*');





});





