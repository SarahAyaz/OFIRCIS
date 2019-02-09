<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class cisps extends Controller
{
   public function homepage()  //homepage of police site login.php
    {
        return view('cisps/login');
    }
    public function dashboard()  //police site police-dashboard.php
    {
        return view('cisps/police-dashboard');
    }
    public function searchfir()  //police site search-fir.php
    {
        return view('cisps/search-fir');
    }
    public function searchfirresult()  //police site search-fir-result.php
    {
        return view('cisps/search-fir-result');
    }
    public function verifyfir()  //police site verify-fir.php
    {
        return view('cisps/verify-fir');
    }
    public function firinfo()  //police site fir-info.php
    {
        return view('cisps/fir-info');
    }
    public function firpending()  //police site fir-pending.php
    {
        return view('cisps/fir-pending');
    }
    public function firinprocess()  //police site fir-inprocess.php
    {
        return view('cisps/fir-inprocess');
    }
    public function firclosed()  //police site fir-closed.php
    {
        return view('cisps/fir-closed');
    }
    public function printfir()  //police site print-fir.php
    {
        return view('cisps/print-fir');
    }
    public function investigationofficer()  //police site investigation-officer.php
    {
        return view('cisps/investigation-officer');
    }
    public function prosecution()  //police site prosecution.php
    {
        return view('cisps/prosecution');
    }
    public function witnessinfo()  //police site witness-info.php
    {
        return view('cisps/witness-info');
    }
    public function help()  //police site help.php
    {
        return view('cisps/help');
    }

    public function searchcriminal()  //police site search-criminal.php
    {
        return view('cisps/search-criminal');
    }
    public function addcriminal()  //police site add-criminal.php
    {
        return view('cisps/add-criminal');
    }
    public function editcriminal()  //police site edit-criminal.php
    {
        return view('cisps/edit-criminal');
    }
}



