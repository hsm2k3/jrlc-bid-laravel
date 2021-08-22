<?php

namespace App\Http\Controllers;

use App\Models\FirstAliyah;
use Illuminate\Http\Request;

class FirstAliyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = FirstAliyah::latest('created_at')->first();
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
     * @param  \App\Models\FirstAliyah  $firstAliyah
     * @return \Illuminate\Http\Response
     */
    public function show(FirstAliyah $firstAliyah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstAliyah  $firstAliyah
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstAliyah $firstAliyah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstAliyah  $firstAliyah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstAliyah $firstAliyah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstAliyah  $firstAliyah
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstAliyah $firstAliyah)
    {
        //
    }
}
