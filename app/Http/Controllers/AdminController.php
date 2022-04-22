<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function myAccount($username){
        $admin = AdminRepos::GetAdminByUsername($username);
        return view('puppywebsite.accountAdmin.myAccount', [
            'admin' => $admin[0],
        ]);
    }

    public function adminAccount(){
        $admin = AdminRepos::GetAllAccount();
        return view('puppywebsite.accountAdmin.adminAccount', [
            'admin' => $admin,
        ]);
    }

}
