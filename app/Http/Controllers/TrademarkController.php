<?php

namespace App\Http\Controllers;

use App\Models\Trademark;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Trademark::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trademark = Trademark::create($request->all());
        return response()->json([
            'res' => true,
            'trademark' => $trademark,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function show(Trademark $trademark)
    {
        return response()->json([
            'res' => true,
            'trademark' => $trademark,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trademark $trademark)
    {
        $trademark->update($request->all());
        return response()->json([
            'res' => true,
            'trademark' => $trademark,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trademark $trademark)
    {
        $trademark->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
