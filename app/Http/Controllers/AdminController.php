<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    public function

    public function adminAccount(){
        $admin = AdminRepos::GetAllAccount();
        return view('puppywebsite.accountAdmin.adminAccount', [
            'admin' => $admin,
        ]);
    }

}
