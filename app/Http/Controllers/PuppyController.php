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
        return view('puppywebsite.create');

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
