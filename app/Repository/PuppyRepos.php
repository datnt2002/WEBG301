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
}
