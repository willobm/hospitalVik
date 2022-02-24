<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request; 

class PersonalController extends Controller
{
    public function index(){
        $personas = Persona::all();
        return view('personas.index',compact('personas'));
    }
}
