<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Personas = Personas::paginate(50);

        $heads = [
            'DNI',
            'Nombres',
            'Apellido Paterno',
            'Apellido Materno',
            'Estado',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];

        // dd($personas);
        return view('personas.index',compact('Personas','heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $personas = Personas::find(12);

        dd($personas);
    }

    public function BusquedaSelect2(Request $request){
        // dd($request->page);
        $personaBusqueda = Personas::where('VC_NOMBRECOMPLETO','like','%'.$request->name.'%');
        // dd($personaBusqueda);
        return $personaBusqueda->paginate(10,['*'],'page',$request->page);
        // return $personaBusqueda->paginate(10);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
