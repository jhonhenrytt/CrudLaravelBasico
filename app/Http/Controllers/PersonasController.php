<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $datos['personas']=Personas::paginate(5);

        return view('personas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $campos=[
                'Nombre'=>'required|string|max:100',
                'ApelPaterno'=>'required|string|max:100',
                'ApelMaterno'=>'required|string|max:100',
                'dni'=>'required|string|max:8',
                'email'=>'required|email'
        ];
        $Mensaje=["required"=>'El campo :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje);
         //$datosPersonas=request()->all();

        $datosPersonas = request()->except('_token');
        Personas::insert($datosPersonas);
        //return response()->json($datosPersonas);
        return redirect('personas')->with('Mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Personas::findOrFail($id);
        return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersonas = request()->except(['_token','_method']);
        Personas::where('id','=',$id)->update($datosPersonas);
        $persona=Personas::findOrFail($id);
       // return view('personas.edit',compact('persona'));

       return redirect('personas')->with('Mensaje','Modificado con exito');
       //return var_dump($datosPersonas);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personas::destroy($id);
        return redirect('personas')->with('Mensaje','Empleado eliminado  con exito');
    }
}
