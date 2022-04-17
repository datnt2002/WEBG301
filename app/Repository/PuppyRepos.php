<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class PuppyRepos
{
    public static function GetAllPet()
    {
        $result = DB::table('puppy')->join('breeds', 'puppy.breedsID', '=', 'breeds.id')->select('puppy.*', 'breeds.*')->get();
        return $result;
    }

    public static function GetAllBreeds()
    {
        $result = DB::table('breeds')->get();
        return $result;
    }

    public static function GetPetByID($id)
    {

        return DB::table('puppy')->where('id', '=', $id)->join('breeds')->on('*')->select('puppy.*', 'breeds.*')->get();

    }

    public function Store($pet)
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
}
