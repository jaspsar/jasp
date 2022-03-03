<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plagas;
use Illuminate\Http\Request;

class Controllerpl extends Controller
{
    public function get_all(){
        return Plagas::all();      
   }
}
