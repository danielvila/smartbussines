<?php

namespace App\Http\Controllers;

use App\Models\OtherData;
use Illuminate\Http\Request;

class OtherDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function show_client($id)
    {
        return OtherData::where('client_id', $id)->first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $other_datum = OtherData::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $other_datum,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtherData  $otherData
     * @return \Illuminate\Http\Response
     */
    public function show(OtherData $other_datum)
    {
        return $other_datum;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OtherData  $otherData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherData $other_datum)
    {
        $other_datum->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $other_datum,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtherData  $otherData
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherData $other_datum)
    {
        $other_datum->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
