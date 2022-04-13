<?php

namespace App\Http\Controllers;

use App\Models\Itbmsbuy;
use Illuminate\Http\Request;

class ItbmsbuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Itbmsbuy::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itbmsbuy = Itbmsbuy::create($request->all());
        return response()->json([
            'res' => true,
            'itbmsbuy' => $itbmsbuy,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itbmsbuy  $itbmsbuy
     * @return \Illuminate\Http\Response
     */
    public function show(Itbmsbuy $itbmsbuy)
    {
        return response()->json([
            'res' => true,
            'itbmsbuy' => $itbmsbuy,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itbmsbuy  $itbmsbuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itbmsbuy $itbmsbuy)
    {
        $itbmsbuy->update($request->all());
        return response()->json([
            'res' => true,
            'itbmsbuy' => $itbmsbuy,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itbmsbuy  $itbmsbuy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itbmsbuy $itbmsbuy)
    {
        $itbmsbuy->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
