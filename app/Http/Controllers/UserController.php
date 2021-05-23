<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento; 

class UserController extends Controller
{
    public function index(){
        
        $eventos = Evento::paginate(3); 
        return view('user.index', compact('eventos'));
    }   
}
