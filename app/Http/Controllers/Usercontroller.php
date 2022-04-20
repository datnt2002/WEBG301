<?php

namespace App\Http\Controllers;
use App\Repository\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        $pets = User::GetAllPet();
        return view('Userview.index', [
            'pets' => $pets
        ]);

    }

}
