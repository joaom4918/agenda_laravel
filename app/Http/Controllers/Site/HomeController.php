<?php

namespace App\Http\Controllers\Site;

use App\Atividade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $req){

        $registros=Atividade::all();
        
        return view("home",compact('registros'));  
    }


    
}
