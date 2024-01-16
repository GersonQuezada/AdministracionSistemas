<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $persona = Personas::count();
        $usuarios = User::count();
        // $roles = DB::select('SELECT ');
        // $CountPersonas = $persona->count();

        return view('dashboard',compact('persona','usuarios'));
    }
}
