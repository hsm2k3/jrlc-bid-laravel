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
//            $aliyahs = [OpeningTheArk::class, FirstAliyah::class, SecondAliyah::class, ThirdAliyah::class, FourthAliyah::class, FifthAliyah::class, Maftir::class, HagBahOne::class,  HagBahTwo::class, GelilahOne::class, GelilahTwo::class, PuttingOnTheCrownOne::class, PuttingOnTheCrownTwo::class, PuttingOnTheShieldOne::class, PuttingOnTheShieldTwo::class];
//            dd($aliyahs[1]);
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
//        $aliyahs = [OpeningTheArk::class, FirstAliyah::class, SecondAliyah::class, ThirdAliyah::class, FourthAliyah::class, FifthAliyah::class, Maftir::class, HagBahOne::class,  HagBahTwo::class, GelilahOne::class, GelilahTwo::class, PuttingOnTheCrownOne::class, PuttingOnTheCrownTwo::class, PuttingOnTheShieldOne::class, PuttingOnTheShieldTwo::class];
//        dd($aliyahs);
//        $aliyahStr = ["App\Models\OpeningTheArk" => "Opening the ark", "App\Models\FirstAliyah" => "First Aliyah", "App\Models\SecondAliyah" => "Second Aliyah", "App\Models\ThirdAliyah" => "Third Aliyah", "App\Models\FourthAliyah" => "Fourth Aliyah", "App\Models\FifthAliyah" => "Fifth Aliyah", "App\Models\Maftir" => "Maftir", "App\Models\HagBahOne" => "Hag Bah One", "App\Models\HagBahTwo" => "Hag Bah Two", "App\Models\GelilahOne" => "Gelilah One", "App\Models\GelilahTwo" => "Gelilah Two", "App\Models\PuttingOnTheCrownOne" => "Putting on the crown one", "App\Models\PuttingOnTheCrownTwo" => "Putting on the crown two", "App\Models\PuttingOnTheShieldOne" => "Putting on the shield one", "App\Models\PuttingOnTheShieldTwo" => "Putting on the shield two"];
//        for($i = 0; $i < count($aliyahs); $i++)
//            if($aliyahStr[$i] == $aliyahs[$i])
//                dd($aliyahStr[$i]);
//            $i = 0;
//            foreach($aliyahStr as $key => $value)
//            {
//                if($aliyahs[$i] == $key)
//                    $aliyahs[$i]::where(['holiday_id' => $id, 'aliyah' => $value])->update($data);
//                $i++;
//            }
//
//        \App\Models\OpeningTheArk::where(['holiday_id' => $id, 'aliyah' => $value])->update($data);


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
