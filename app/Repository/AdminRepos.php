<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function GetAllAccount(){
        $admin = DB::table('admin')->select('admin.*')->get();
        return $admin;
    }



}
