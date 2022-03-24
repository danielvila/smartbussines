<?php

namespace App\Http\Controllers;

use App\Models\FinancialData;
use Illuminate\Http\Request;

class FinancialDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function show_client($id)
    {
        return FinancialData::where('client_id', $id)->first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $financial_datum = FinancialData::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $financial_datum,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialData  $financial_datum
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialData $financial_datum)
    {
        return $financial_datum;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialData  $financial_datum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialData $financial_datum)
    {
        $financial_datum->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $financial_datum,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialData  $financial_datum
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialData $financial_datum)
    {
        $financial_datum->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
