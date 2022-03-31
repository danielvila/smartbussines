<?php

namespace App\Http\Controllers;

use App\Models\SupplierFinancial;
use Illuminate\Http\Request;

class SupplierFinancialController extends Controller
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
        return SupplierFinancial::where('supplier_id', $id)->first();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suppliers_financial = SupplierFinancial::create($request->all());
        return response()->json([
            'res' => true,
            'data' => $suppliers_financial,
            'message' => 'Registro creado correctamente.'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierFinancial  $suppliers_financial
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierFinancial $suppliers_financial)
    {
        return $suppliers_financial;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SupplierFinancial  $suppliers_financial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierFinancial $suppliers_financial)
    {
        $suppliers_financial->update($request->all());
        return response()->json([
            'res' => true,
            'data' => $suppliers_financial,
            'message' => 'Registro actualizado correctamente.'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierFinancial  $suppliers_financial
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierFinancial $suppliers_financial)
    {
        $suppliers_financial->delete();
        return response()->json([
            'res' => true,
            'message' => 'Registro eliminado correctamente.'
        ], 200);
    }
}
