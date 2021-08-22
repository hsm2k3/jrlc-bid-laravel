<?php

namespace App\Http\Controllers;

use App\Models\SecondAliyah;
use Illuminate\Http\Request;

class SecondAliyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = SecondAliyah::latest('created_at')->first();
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
     * @param  \App\Models\SecondAliyah  $secondAliyah
     * @return \Illuminate\Http\Response
     */
    public function show(SecondAliyah $secondAliyah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondAliyah  $secondAliyah
     * @return \Illuminate\Http\Response
     */
    public function edit(SecondAliyah $secondAliyah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SecondAliyah  $secondAliyah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SecondAliyah $secondAliyah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondAliyah  $secondAliyah
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondAliyah $secondAliyah)
    {
        //
    }
}
