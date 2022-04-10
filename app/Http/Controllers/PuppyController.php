<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PuppyController extends Controller
{
    public function index()
    {
        $result = DB::table('puppy')->get();
        return view('puppywebsite.index', ['result' => $result]);
    }
}
