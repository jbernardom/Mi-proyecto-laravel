<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoControllerResource extends Controller
{

    public $manager;
    function _construct(){

        $this->manager = new Empleado();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->manager->listarEmpleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $registro = $this->manager->guardarBd($request);
        return response()->json($registro);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return response()->json($this->manager->buscarEmpleado($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $result = $this->manager->actualizarEmpleado($request, $id);
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->manager->eliminarEmpleado($id);
        return response()->json($result);
    }
}
