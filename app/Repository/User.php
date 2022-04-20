<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class User
{
    public function GetAllPet()
    {
        return DB::table('puppy')->join('breeds', 'puppy.breedsID', '=', 'breeds.id')
            ->select('puppy.*',
                'breeds.*')->get();
    }
}
