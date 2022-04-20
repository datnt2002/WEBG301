<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use App\Http\Controllers\UserAuthController;

class UserAuth
{


    public static function login($username, $password)
    {
        return DB::table('users')->where(['username' => $username, 'password' => $password])->count();

    }
//    public static function loginAdmin($username, $password)
//    {
//        return DB::table('admin')->where(['username' => $username, 'password' => $password])->count();
//
//    }

    public static function store($users)
    {
        DB::table('users')->insert([
            'customer_name' => $users['fullName'],
            'email' => $users['email'],
            'address' => $users['address'],
            'gender' => $users['gender'],
            'username' => $users['username'],
            'password' => $users['password'],
        ]);
    }
}
