<?php

namespace App\Http\Controllers;

use App\Repository\PuppyRepos;
use App\Repository\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        $pets = User::GetAllPet();
        $breeds = PuppyRepos::GetAllBreeds();
        return view('Userview.index', [
            'pets' => $pets,
            'breed' => $breeds
        ]);

    }

    public function FilterPet($id)
    {
        $breeds = PuppyRepos::GetAllBreeds();
        $pet = User::GetPetByBreed($id);
        return view('Userview.FilterPet', [
            'pet' => $pet,
            'breed' => $breeds
        ]);
    }

    public function GetPetById($id)
    {
        $breeds = PuppyRepos::GetAllBreeds();
        $pets = User::GetPetByID($id);
        return view('UserView.Detail',
            [
                'pet' => $pets,
                'breed' => $breeds
            ]);
    }

    public function ClientSearchPet()
    {
        $breeds = PuppyRepos::GetAllBreeds();
        $pet = $_GET['petname'];
        $result = PuppyRepos::FindPetByName($pet);
//        dd($result);
        return view('UserView.index', [
            'pets' => $result,
            'breed' => $breeds
        ]);
    }


}
