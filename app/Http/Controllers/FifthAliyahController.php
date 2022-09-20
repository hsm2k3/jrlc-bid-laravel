<?php

namespace App\Http\Controllers;

use App\Models\FifthAliyah;
use Illuminate\Http\Request;

class FifthAliyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = FifthAliyah::latest('created_at')->first();
        return response()->json($bids);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FifthAliyah  $fifthAliyah
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(FifthAliyah $fifthAliyah)
    {
        return response()->json(FifthAliyah::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FifthAliyah  $fifthAliyah
     * @return \Illuminate\Http\Response
     */
    public function edit(FifthAliyah $fifthAliyah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FifthAliyah  $fifthAliyah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FifthAliyah $fifthAliyah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FifthAliyah  $fifthAliyah
     * @return \Illuminate\Http\Response
     */
    public function destroy(FifthAliyah $fifthAliyah)
    {
        //
    }
}
