<?php
if(DB::connection()->getDatabaseName())
   {
     echo "connected successfully to database ".DB::connection()->getDatabaseName();
   }
   
//$users = DB::table('demos')->select('Name')->where('Name','ikram')->groupBy('Name')->get();   
//echo $users;
 ?>