<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = User::query()
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
        $usuario = new User();
        return view('auth.register',compact('usuario'));
    }

    public function BusquedaSelect2(Request $request){
        // dd($request->page);
        $personaBusqueda = User::where('VC_NOMBRECOMPLETO','like','%'.$request->name.'%');
        // dd($personaBusqueda);
        return $personaBusqueda->paginate(10,['*'],'page',$request->page);
        // return $personaBusqueda->paginate(10);
    }



    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $persona = User::find($id);
        // return $persona;
        return view('personas.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $persona = User::find($id);
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
        User::where('id','=',$id )->update($datos);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $persona = User::find($id);
        $persona->delete();
        return redirect()->back()->with('eliminar','ok');
    }
}
