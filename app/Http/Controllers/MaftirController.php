<?php

namespace App\Http\Controllers;

use App\Models\Maftir;
use Illuminate\Http\Request;

class MaftirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Maftir::latest('created_at')->first();
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
     * @param  \App\Models\Maftir  $maftir
     * @return \Illuminate\Http\Response
     */
    public function show(Maftir $maftir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maftir  $maftir
     * @return \Illuminate\Http\Response
     */
    public function edit(Maftir $maftir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maftir  $maftir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maftir $maftir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maftir  $maftir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maftir $maftir)
    {
        //
    }
}
