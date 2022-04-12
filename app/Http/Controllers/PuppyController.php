<?php

namespace App\Http\Controllers;


use App\Repository\PuppyRepos;
use Illuminate\Http\Request;

class PuppyController extends Controller
{
    public function index()
    {
        $pets = PuppyRepos::GetAllPet();
        return view('puppywebsite.index', [
            'pets' => $pets
        ]);
    }

    public function confirm($id)
    {

    }
}
