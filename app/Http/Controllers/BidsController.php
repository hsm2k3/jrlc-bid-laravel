<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\FifthAliyah;
use App\Models\FirstAliyah;
use App\Models\FourthAliyah;
use App\Models\GelilahOne;
use App\Models\GelilahTwo;
use App\Models\HagBahOne;
use App\Models\HagBahTwo;
use App\Models\Holiday;
use App\Models\Maftir;
use App\Models\OpeningTheArk;
use App\Models\PuttingOnTheCrownOne;
use App\Models\PuttingOnTheCrownTwo;
use App\Models\PuttingOnTheShieldOne;
use App\Models\PuttingOnTheShieldTwo;
use App\Models\SecondAliyah;
use App\Models\ThirdAliyah;
use App\Services\HighestBidsService;
use App\Services\SearchableAliyahModelService;
use Illuminate\Http\Request;
use Throwable;

class BidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|string|void
     */
    public function index(HighestBidsService $highestBidsService)
    {
        try {
            return response()->json($highestBidsService->getHighestBids());
        }
        catch(Throwable $e)
        {
            report($e);
            return $e->getMessage();
        }

        return abort(500, 'error: e500');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $data = $request->all();
        $searchable = new SearchableAliyahModelService();
        $aliyahModel = $searchable->getAliyah($data);
        if($aliyahModel != null) {
            $aliyahModel::create([
                'holiday_id' => $id,
                'aliyah' => $request->input('aliyah'),
                'name' => $data['name'],
                'designation' => $data['designation'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'amount' => $data['amount'],
                'comment' => $data['comment'],
            ]);
            return response(200);
        }
        else
            return response(204);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HighestBidsService $highestBidsService)
    {
        try {
            return response()->json($highestBidsService->getAllBids());
        }
        catch(Throwable $e)
        {
            report($e);
            return $e->getMessage();
        }

        return abort(500, 'error: 500');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
