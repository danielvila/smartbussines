<?php

namespace App\Http\Controllers;

use App\Models\Itbmssale;
use Illuminate\Http\Request;

class ItbmssaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Itbmssale::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itbmssale = Itbmssale::create($request->all());
        return response()->json([
            'res' => true,
            'itbmssale' => $itbmssale,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itbmssale  $itbmssale
     * @return \Illuminate\Http\Response
     */
    public function show(Itbmssale $itbmssale)
    {
        return response()->json([
            'res' => true,
            'itbmssale' => $itbmssale,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itbmssale  $itbmssale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itbmssale $itbmssale)
    {
        $itbmssale->update($request->all());
        return response()->json([
            'res' => true,
            'itbmssale' => $itbmssale,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itbmssale  $itbmssale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itbmssale $itbmssale)
    {
        $itbmssale->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
