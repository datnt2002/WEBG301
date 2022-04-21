<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class PuppyRepos
{
    public static function GetAllPet()
    {
        $result = DB::table('puppy')->join('breeds', 'puppy.breedsID', '=', 'breeds.id')
            ->select('puppy.*',
                'breeds.*')->get();
        return $result;
    }

    public static function GetAllBreeds()
    {
        $result = DB::table('breeds')->get();
        return $result;
    }

    public static function GetBreedByID($id)
    {
        return DB::table('breeds')->where('id', '=', $id)->get();

    }

    public static function GetPetByID($id)
    {
        return DB::table('puppy')->where('pid', '=', $id)->get();
    }

    public static function Store($pet)
    {
        DB::table('puppy')->insert([
            'name' => $pet['name'],
            'gender' => $pet['gender'],
            'area' => $pet['area'],
            'breedsID' => $pet['breed'],
            'detail' => $pet['detail'],
            'color' => $pet['color'],
            'image' => $pet['image']
        ]);
    }

    public static function StoreBreed($Breed){
        DB::table('breeds')->insert([
            'bread'=>$Breed['breed']
        ]);
    }

    public static function Update($id, $pet)
    {
        DB::table('puppy')->where('Pid', '=', $id)->update([
            'name' => $pet['name'],
            'gender' => $pet['gender'],
            'area' => $pet['area'],
            'breedsID' => $pet['breed'],
            'detail' => $pet['detail'],
            'color' => $pet['color'],
            'image' => $pet['image']
        ]);
    }

    public static function Delete($id)
    {
        DB::table('puppy')->where('Pid', '=', $id)->delete();
    }
}
