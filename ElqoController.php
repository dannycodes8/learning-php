<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Migrations\Migration\hotel;
// use App\Models\EloquentPractice;


class ElqoController extends Controller
{
    //
    public function index(){

       $hotel=DB::select('select * from hotel');
       dd($hotel);
    }


}
