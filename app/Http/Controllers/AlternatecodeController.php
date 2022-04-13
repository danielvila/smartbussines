<?php

namespace App\Http\Controllers;

use App\Models\Alternatecode;
use Illuminate\Http\Request;

class AlternatecodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Alternatecode::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alternatecode = Alternatecode::create($request->all());
        return response()->json([
            'res' => true,
            'alternatecode' => $alternatecode,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatecode  $alternatecode
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatecode $alternatecode)
    {
        return response()->json([
            'res' => true,
            'alternatecode' => $alternatecode,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatecode  $alternatecode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatecode $alternatecode)
    {
        $alternatecode->update($request->all());
        return response()->json([
            'res' => true,
            'alternatecode' => $alternatecode,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatecode  $alternatecode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatecode $alternatecode)
    {
        $alternatecode->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
