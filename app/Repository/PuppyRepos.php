<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class PuppyRepos
{
    public static function GetAllPet()
    {
        $result = DB::table('puppy')->get();
        return $result;
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
