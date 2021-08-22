<?php

namespace App\Http\Controllers;

use App\Models\ThirdAliyah;
use Illuminate\Http\Request;

class ThirdAliyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = ThirdAliyah::latest('created_at')->first();
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
     * @param  \App\Models\ThirdAliyah  $thirdAliyah
     * @return \Illuminate\Http\Response
     */
    public function show(ThirdAliyah $thirdAliyah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThirdAliyah  $thirdAliyah
     * @return \Illuminate\Http\Response
     */
    public function edit(ThirdAliyah $thirdAliyah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThirdAliyah  $thirdAliyah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThirdAliyah $thirdAliyah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThirdAliyah  $thirdAliyah
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThirdAliyah $thirdAliyah)
    {
        //
    }
}
