<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function myAccount($username)
    {
        $admin = AdminRepos::GetAdminByUsername($username);
        return view('puppywebsite.accountAdmin.myAccount', [
            'admin' => $admin[0],
        ]);
    }

    public function adminAccount()
    {
        $admin = AdminRepos::GetAllAccount();
        return view('puppywebsite.accountAdmin.adminAccount', [
            'admin' => $admin,
        ]);
    }

    public function VerifyPassword(Request $rq)
    {
        $pwd = AdminRepos::GetAllAccount();
        if ($rq->pwd == sha1($pwd)) {
            return redirect()->route('admin.edit');
        }
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
        $this->validation($request)->validate();
        $admin = [
//            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'password' => $request->input('password'),
//            'username' => $request->input('username'),

        ];
        AdminRepos::Update($username, $admin);
        return redirect()->route('puppy.index');
    }

    private function validation($request)
    {
        return Validator::make($request->all(), [
            'email' => ['required',],
            'phone' => ['required'],
            'gender' => ['required'],
            'password' => ['required'],
            function ($atribute, $value, $fail) use ($request) {
                $username = (new \Symfony\Component\HttpFoundation\Session\Session)->get('username');
                $admin = AdminRepos::GetAllAccount();
                $count = 0;
                for ($i = 0, $iMax = count($admin); $i < $iMax; $i++) {
                    if ($username == $admin[$i]->username) {
                        $pwd = sha1($request->input('password'));
                        if ($pwd != $admin[$i]->password) {
                            $count += 1;
                            break;
                        }
                    }
                }
                if ($count != 0) {
                    $fail('password is incorrect');
                }
            }

        ]);
    }
}
