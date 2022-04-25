<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class User
{
    public static function GetAllPet()
    {
        $sql = "select * from puppy join breeds on puppy.breedsID =  breeds.id  ";
        return DB::select($sql);
//        return DB::table('puppy')->join('breeds', 'puppy.breedsID', '=', 'breeds.id')
//            ->select('puppy.*',
//                'breeds.*')->get();
    }

    public static function GetPetByID($id)
    {
        $sql = "select * from puppy join breeds on puppy.breedsID = breeds.id where Pid = $id";
        return DB::select($sql);
//        return DB::table('puppy')->where('Pid', '=', $id)->get();
    }
    public static function GetPetByBreed($id)
    {
        $sql = "select * from puppy join breeds on puppy.breedsID = breeds.id where breeds.id = $id";
        return DB::select($sql);
//        return DB::table('puppy')->where('Pid', '=', $id)->get();
    }
}
