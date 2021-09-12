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

        $aliyahs = [
            OpeningTheArk::class => "Opening the ark",
            FirstAliyah::class => "First Aliyah",
            SecondAliyah::class => "Second Aliyah",
            ThirdAliyah::class => "Third Aliyah",
            FourthAliyah::class => "Fourth Aliyah",
            FifthAliyah::class => "Fifth Aliyah",
            Maftir::class => "Maftir",
            HagBahOne::class => "Hag Bah One",
            HagBahTwo::class => "Hag Bah Two",
            GelilahOne::class => "Gelilah One",
            GelilahTwo::class => "Gelilah Two",
            PuttingOnTheCrownOne::class => "Putting on the crown one",
            PuttingOnTheCrownTwo::class => "Putting on the crown two",
            PuttingOnTheShieldOne::class => "Putting on the shield one",
            PuttingOnTheShieldTwo::class => "Putting on the shield two",
        ];
        foreach($aliyahs as $key => $value)
        {
            if($request->input('aliyah') == $value)
                $key::create([
                    'holiday_id' => $id,
                    'aliyah' => $value,
                    'name' => $data['name'],
                    'designation' => $data['designation'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'amount' => $data['amount'],
                    'comment' => $data['comment'],
                ]);
        }
        return response(200);
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
    public function show($id)
    {
        //
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
