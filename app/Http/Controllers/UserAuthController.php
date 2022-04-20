<?php

namespace App\Http\Controllers;

use App\Repository\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserAuthController extends Controller
{
    public function index()
    {
        return view('UserAuth.index');
    }

    public function login(Request $rq)
    {
        $validation = $this->checklogin($rq);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            $username = $rq->input('username');
            $password = $rq->input('password');
        }
       $checklogin =  UserAuth::login($username, $password);
        if($checklogin>0){
            return redirect()->Route('puppy.index');
        }
        else return redirect()->back();

    }

    private function checklogin($rq)
    {
        return validator::make(
            $rq->all(),
            [
                'username' => ['required'],
                'password' => ['required', 'min:8'],
            ],
            [
                'username.required' => 'email cannot be empty!!!',
                'password.required' => 'password cannot be empty',
                'password.min' => 'password must have at least 8 character'
            ]
        );
    }

}
