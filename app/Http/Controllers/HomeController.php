<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $persona = Personas::count();
        // $CountPersonas = $persona->count();

        return view('dashboard',compact('persona'));
    }
}
