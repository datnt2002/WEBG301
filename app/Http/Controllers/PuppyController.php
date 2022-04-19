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
                'breed' => $breed,
                'pet' => (object) [
                    'Pid' => '',
                    'name' => '',
                    'area' => '',
                    'breedID' => '',
                    'image' => '',
                    'color' => '',
                    'detail' => '',
                ],
                'breed' => $breed
            ]
        );

    }

    public function store(Request $rq)
    {
        $this->validation($rq)->validate();
        $pet = [
            'name' => $rq->input('name'),
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
        $breed = PuppyRepos::GetAllBreeds();
        return view('puppywebsite.update', [
            'pets' => $pets,
            'breed' => $breed
        ]);
    }

    public function update(Request $rq, $id)
    {
        $this->validation($rq)->validate();
        $pet = [
            'id' => $rq->input('Pid'),
            'name' => $rq->input('name'),
            'area' => $rq->input('area'),
            'breed' => $rq->input('Breed'),
            'gender' => $rq->input('gender'),
            'image' => $rq->input('image'),
            'color' => $rq->input('color'),
            'detail' => $rq->input('detail')
        ];
        PuppyRepos::update($id, $pet);
        return redirect()->route('puppy.index');
    }


    private function validation($rq)
    {
        return Validator::make($rq->all(), [
            'name' => ['required'],
            'area' => ['required'],
            'Breed' => ['required'],
            'gender' => ['required'],
            'image' => ['required'],
            'color' => ['required'],
            'detail' => ['required']
        ]);
    }

    public function delete($id)
    {
        PuppyRepos::delete($id);
        return redirect()->Route('puppy.index');
    }
}
