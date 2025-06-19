<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KartuStok;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KartuStok::all();
        return response()->json(['data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->headers->set('Accept', 'application/json'); // Paksa JSON response

        $validated = $request->validate([
            'matl_no' => 'required',
            'matl_nm' => 'required',
        ]);

        $data = $request->only([
            'matl_no',
            'matl_nm',
            'wire_cd',
            'loc_cd',
            'matl_kind',
            'iss_unit',
            'iss_min_lot',
            'qty'
        ]);
        $daya = KartuStok::create($data);
        return response()->json(['message' => 'Berhasil menambahkan data', 'data' => $daya], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
