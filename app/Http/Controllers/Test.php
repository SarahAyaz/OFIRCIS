<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function myfun1()
    {
        //$users = DB::table('demo')->get(); 

        return view('index');
    }
    public function myfun()
    {
        //$users = DB::table('demo')->get(); 

        //return view('index2', ['users' => 'IKRAM']);
        return view('index2');
    }
     public function myfun2()
    {
        //$users = DB::table('demo')->get(); 

        return view('pages\mailbox\compose');
    }
     public function myfun3()
    {
        //$users = DB::table('demo')->get(); 

        return view('pages\mailbox\mailbox');
    }
     public function data()
    {
        //$users = DB::table('demo')->get(); 

        return DB::select ("select * from sample");
    }

     public function datains()
    {
        //$users = DB::table('demo')->get(); 
        DB::insert into sample (ID,NAME) values(34343,'RANA');
        //table('sample')->insert(
        //   ['ID'=>34543,'NAME'=>'IKRAM']);
return "inserted";
    }
     
}    