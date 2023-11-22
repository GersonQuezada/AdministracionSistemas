<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personas\StoreRequest;
use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = Personas::query()
                    ->when(request('search'),function ($query) {
                        return $query ->where('VC_NOMBRECOMPLETO','like','%'.request('search').'%');
                    })
                    ->paginate(8);
        return view('personas.index',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persona = new Personas();
        return view('personas.create',compact('persona'));
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data = array_merge($request->all(),['VC_USUARIO_CREACION' => auth()->user()->email ,
                                            'VC_NOMBRECOMPLETO' => $request->VC_NOMBRE.' '.$request->VC_APELLIDO_PATERNO.' '.$request->VC_APELLIDO_MATERNO ]);
        // dd( $data );
        $mArray = array_map('strtoupper', $data);
        // dd($mArray);
        Personas::create($mArray);
        return to_route('Personas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $persona = Personas::find($id);
        // return $persona;
        return view('personas.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $persona = Personas::find($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $datos = $request->validate([
            "VC_NOMBRE" => "required|min:3",
            "VC_APELLIDO_PATERNO" => "required|min:3",
            "VC_APELLIDO_MATERNO" => "required|min:3",
            "BT_ESTADO_FILA" => "required"

        ]);         
        Personas::where('id','=',$id )->update($datos);        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $persona = Personas::find($id);
        $persona->delete();
        return redirect()->back();
    }
}
