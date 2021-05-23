<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;

class HomeController extends Controller
{
    public function index(){
        
        return view('site.home');
    }    
    
}
