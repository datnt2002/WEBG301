<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use App\Http\Controllers\UserAuthController;

class UserAuth
{
    public static function login($username, $password)
    {
        $checklogin = DB::table('userr')->where(['Username' => $username, 'Password' => $password])->count();
        return $checklogin;


    }
}