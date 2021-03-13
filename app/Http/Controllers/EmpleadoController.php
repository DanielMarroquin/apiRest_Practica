<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

use function PHPUnit\Framework\isEmpty;

class EmpleadoController extends Controller
{
    //Funcion para generar json todos los registros
    public function getEmpleado(){
        return response()->json(Empleado::all(), 200);

    }
    //Funcion para generar json registros especificos
    public function getEmpleadoById($id){
        $empleado = Empleado::find($id);
        if(is_null($empleado)){
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        return response()->json($empleado::find($id), 200);
    }

    public function addEmpleado(Request $request) {
        $empleado = Empleado::create($request->all());
        return response($empleado, 201);
    }

    public function updateEmpleado(Request $request, $id) {
        $empleado = Empleado::find($id);
        if(is_null($empleado)) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        $empleado->update($request->all());
        return response($empleado, 200);
    }

    public function deleteEmpleado(Request $request, $id) {
        $empleado = Empleado::find($id);
        if(is_null($empleado)) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
        $empleado->delete();
        return response()->json(null, 204);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instancia la clase 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Empleado::findOrFail($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
