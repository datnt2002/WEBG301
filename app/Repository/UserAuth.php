<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use App\Http\Controllers\UserAuthController;

class UserAuth
{
    public static function login($username, $password)
    {
        $sql = "select * from userr where Username='$username' and Password='$password'";
        $checklogin = DB::table('userr')->where(['Username' => $username, 'Password' => $password])->count();
        if ($checklogin>0) {
            echo 'login success';
        }
        else echo 'fail';
    }
}