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

    public function SearchPet()
    {
        $pet = $_GET['petname'];
        $result = PuppyRepos::FindPetByName($pet);
//        dd($result);
        return view('puppywebsite.index', [
            'pets' => $result
        ]);
    }

    public function GetAllBreed()
    {
        $breed = PuppyRepos::GetAllBreeds();
        return view('puppywebsite.breed', [
            'breed' => $breed
        ]);
    }

    public function breedEdit(Request $rq, $id)
    {
        $this->validationBreed($rq)->validate();
        $breed = [
            'breed' => $rq->breed
        ];
        PuppyRepos::UpdateBreed($breed, $id);
        return redirect()->route('puppy.breed');
    }

    public function breedUpdate($id)
    {

        $breed = PuppyRepos::GetBreedByID($id);
        return view('puppywebsite.breedDetail', [
            'breed' => $breed
        ]);
    }

    public function breedDelete($id)
    {
        PuppyRepos::DeleteBreed($id);
        return redirect()->Route('puppy.breed');
    }

    public function breedConfirm($id)
    {
        $breed = PuppyRepos::GetBreedByID($id);
        return view('puppywebsite.confirmBreed', [
            'breed' => $breed
        ]);
    }

    public function create()
    {
        $breed = PuppyRepos::GetAllBreeds();

        return view('puppywebsite.create', [
                'breed' => $breed,
                'pet' => (object)[
                    'Pid' => '',
                    'name' => '',
                    'area' => '',
                    'breedID' => '',
                    'image' => '/images/puppy_images/' . '',
                    'color' => '',
                    'detail' => '',
                ],
            ]
        );
    }

    public function createBreed()
    {
        return view('puppywebsite.createBreed', [
                'Breed' => (object)[
                    'breed' => ''
                ]
            ]
        );
    }

    public function storeBreed(Request $rq)
    {
        $this->validationBreed($rq)->validate();
        $Breed = (object)[
            'breed' => $rq->input('breed')
        ];
        PuppyRepos::StoreBreed($Breed);
        return redirect()->route('puppy.index');
    }

    public function store(Request $rq)
    {
        $this->validation($rq)->validate();
        $pet = (object)[
            'name' => $rq->input('name'),
            'area' => $rq->area,
            'breed' => $rq->Breed,
            'gender' => $rq->gender,
            'image' => '/images/puppy_images/' . $rq->image,
            'color' => $rq->color,
            'detail' => $rq->detail
        ];
        PuppyRepos::Store($pet);
        return redirect()->route('puppy.index');
    }

    public function edit($id)
    {
        $pets = PuppyRepos::GetPetByID($id);
        $breed = PuppyRepos::GetAllBreeds();
        return view('puppywebsite.update',
            [
                'pets' => $pets,
                'breed' => $breed
            ]);
    }

    public function update(Request $rq, $id)
    {
        $this->validation($rq)->validate();
        $pet = (object)[
            'id' => $rq->input('Pid'),
            'name' => $rq->input('name'),
            'area' => $rq->input('area'),
            'breed' => $rq->input('Breed'),
            'gender' => $rq->input('gender'),
            'image' => '/images/puppy_images/' . $rq->input('image'),
            'color' => $rq->input('color'),
            'detail' => $rq->input('detail')
        ];
        PuppyRepos::update($id, $pet);
        return redirect()->route('puppy.index');
    }



    private function validation($rq)
    {
        return Validator::make($rq->all(),
            [
                'name' => ['required',],
                'area' => ['required'],
                'Breed' => ['required'],
                'gender' => ['required'],
                'image' => ['required'],
                'color' => ['required'],
                'detail' => ['required']
            ]);
    }

    private function validationBreed($rq)
    {
        return Validator::make($rq->all(), [
            'breed' => ['required'],
        ]);
    }

    public function confirm($id)
    {
        $pet = PuppyRepos::GetPetByID($id);
        return view('puppywebsite.confirm', [
            'pet' => $pet
        ]);
    }

    public function delete($id)
    {
        PuppyRepos::delete($id);
        return redirect()->Route('puppy.index');
    }

//    public function searchByName(Request $request){
//
//        $pets = [
//            'name' => $request->input('name'),
//        ];
//        PuppyRepos::SearchByName($request);
//        return view('puppywebsite.index', [
//          'pets' => $pets]);
//    }

}
