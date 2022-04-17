<?php

namespace App\Http\Controllers;


use App\Repository\PuppyRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PuppyController extends Controller
{
    public function index()
    {
        $pets = PuppyRepos::GetAllPet();
        return view('puppywebsite.index', [
            'pets' => $pets
        ]);
    }

    public function create()
    {
        $breed = PuppyRepos::GetAllBreeds();

        return view('puppywebsite.create', [
            'breed' => (object)$breed
        ]);

    }

    public function store(Request $rq)
    {
        $pet = [
            'name' => $rq->name,
            'area' => $rq->area,
            'breed' => $rq->Breed,
            'gender' => $rq->gender,
            'image' => $rq->image,
            'color' => $rq->color,
            'detail' => $rq->detail
        ];
        PuppyRepos::Store($pet);
        return redirect()->route('puppy.index');
    }

    public function confirm($id)
    {

    }

    public function edit($id)
    {
        $pets = PuppyRepos::GetPetByID($id);
        return view('puppywebsite.update',[
            'pets' => $pets
        ]);
    }

    public function update($id)
    {

    }


//    private function validate($rq)
//    {
//        return Validator::make($rq->all(), [
//
//        ]);
//    }
}
