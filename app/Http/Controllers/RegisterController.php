<?php

namespace App\Http\Controllers;

use App\Repository\UserAuth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function userAccount(){
        $users = UserAuth::GetAllAccount();
        return view('puppywebsite.accountUser.userAccount', [
            'users' => $users,
        ]);
    }

    public function index(){
        return view('UserAuth.register',[
            'user'=>(object)[
                'fullName' => '',
                'email' => '',
                'address' => '',
                'gender' => '',
                'username' => '',
                'password' => ''
            ]
        ]);
    }

    public function storeAccount(Request $request){
        $this->validation($request)->validate();

        $users =  [
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
//        dd($users);
        UserAuth::store($users);

        return redirect()->route('admin.login');
    }

    public function editCustomer($id)
    {
        $users = UserAuth::GetUserByID($id);
        return view('puppywebsite.accountUser.updateUser', [
            'users' => $users,
        ]);
    }

    public function updateCustomer(Request $request, $id) {
        $this->validation($request)->validate();

        $user = [
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        UserAuth::update($id, $user);
        return redirect()->route('puppy.index');
    }
    public function confirmCustomer($id)
    {
        $user = UserAuth::GetUserByID($id);
        return view('puppywebsite.accountUser.confirmCustomer', [
            'user' => $user
        ]);
    }

    public function deleteCustomer($id)
    {
        UserAuth::delete($id);
        return redirect()->Route('puppy.index');
    }
    private function validation($request){
        return Validator::make($request->all(),[
            'fullName' => ['required'],
                'email' => ['required'],
                'address' => ['required'],
                'username' => ['required'],
                'password' => ['required', 'min:8'],
            ]
        );
    }



}
