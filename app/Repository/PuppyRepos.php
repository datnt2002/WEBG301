<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class PuppyRepos
{
    public static function GetAllPet()
    {
        $sql = "select * from puppy join breeds on puppy.breedsID = breeds.id";
        return DB::select($sql);
//        $result = DB::table('puppy')->join('breeds', 'puppy.breedsID', '=', 'breeds.id')
//            ->select('puppy.*',
//                'breeds.*')->get();
//        return $result;
    }

    public static function GetAllBreeds()
    {
        $sql = "select * from breeds";
        return DB::select($sql);
//        $result = DB::table('breeds')->get();
//        return $result;
    }

    public function FindPetByName($pet)
    {
        $search = '%'.$pet.'%';
        $sql = " select * from puppy join breeds on puppy.breedsID = breeds.id where puppy.name LIKE ? ";
//        dd(DB::getQueryLog());
        return DB::select($sql, [$search]);
    }

    public static function GetBreedByID($id)
    {
        $sql = "select * from breeds where id=$id";
        return DB::select($sql);
//        return DB::table('breeds')->where('id', '=', $id)->get();

    }

    public static function GetPetByID($id)
    {
        $sql = "select * from puppy where Pid = $id";
        return DB::select($sql);
//        return DB::table('puppy')->where('pid', '=', $id)->get();
    }

    public static function Store($pet)
    {
        $sql = "insert into puppy(name,gender,area,breedsID,detail,color,image) values (?,?,?,?,?,?,?)";
        DB::insert($sql, [
            $pet->name,
            $pet->gender,
            $pet->area,
            $pet->breed,
            $pet->detail,
            $pet->color,
            $pet->image
//            'name' => $pet['name'],
//            'gender' => $pet['gender'],
//            'area' => $pet['area'],
//            'breedsID' => $pet['breed'],
//            'detail' => $pet['detail'],
//            'color' => $pet['color'],
//            'image' => $pet['image']
        ]);
    }

    public static function StoreBreed($Breed)
    {
//        DB::table('breeds')->insert([
//            'bread' => $Breed['breed']
//        ]);
        $sql = " insert into breeds (bread) values (?) ";
        DB::insert($sql,[$Breed->breed]);
    }

    public static function Update($id, $pet)
    {
        $sql = "update puppy set name=?,gender=?,area=?,breedsID=?,detail=?,color=?,image=? where Pid=$id";
        DB::update($sql,[
            $pet->name,
            $pet->gender,
            $pet->area,
            $pet->breed,
            $pet->detail,
            $pet->color,
            $pet->image
        ]);

//        DB::table('puppy')->where('Pid', '=', $id)->update([
//            'name' => $pet['name'],
//            'gender' => $pet['gender'],
//            'area' => $pet['area'],
//            'breedsID' => $pet['breed'],
//            'detail' => $pet['detail'],
//            'color' => $pet['color'],
//            'image' => $pet['image']
//        ]);
    }

    public static function UpdateBreed($breed, $id)
    {
        DB::table('breeds')->where('id', '=', $id)->update([
            'bread' => $breed['breed']
        ]);
    }

    public static function Delete($id)
    {
        DB::table('puppy')->where('Pid', '=', $id)->delete();
    }

    public static function DeleteBreed($id)
    {
        DB::table('breeds')->where('id', '=', $id)->delete();
    }
}
