<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FalabellaController extends Controller
{
    public function index(){

        $words = ["IT", "Falabella", "Integraciones"];
        $aux = [];
        for ($i = 1; $i <= 100; $i++) {
          (($i % 3 == 0 || $i % 5 == 0) 
             && $aux[] = ($words[($i % 3 == 0 && $i % 5 >= 1) + (($i % 3 == 0 && $i % 5 == 0) * 2)])) 
             || $aux[] = ($i.'');
        }
        return $aux;    
    }        
}
