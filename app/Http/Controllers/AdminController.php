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

    public function editAdmin($username)
    {
        $admin = AdminRepos::GetAdminByUsername($username);
        return view('puppywebsite.accountAdmin.updateAdmin', [
            'admin' => $admin[0],
        ]);
    }

    public function updateAdmin(Request $request, $username)
    {
//        $this->validation($rq)->validate();
        $admin = [
//            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
//            'username' => $request->input('username'),

        ];
        AdminRepos::Update($username, $admin);
        return redirect()->route('puppy.index');
    }
}
