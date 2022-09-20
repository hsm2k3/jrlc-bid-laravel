<?php

namespace App\Services;

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

/**
 * This class queries the database to get a list of all the bid history and presents in a consumable fashion for the ui.
 */
class BidsHistoryService
{

    public function getBidsHistoryForAllHolidays()
    {
        $holidays = Holiday::all();
        foreach($holidays as $holiday)
        {
            $highestBids = $this->setBidsHistory($holiday->id);
            $json[] = ["key" => $holiday->id, "title" => $holiday->holiday, "biddingItems" =>  $highestBids];
        }
        return $json;
    }

    private function setBidsHistory($id)
    {
        $bidHistory[] = OpeningTheArk::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = FirstAliyah::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = SecondAliyah::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = ThirdAliyah::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = FourthAliyah::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = FifthAliyah::select('id', 'aliyah', 'name', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = Maftir::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = HagBahOne::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = HagBahTwo::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = GelilahOne::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = GelilahTwo::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = PuttingOnTheCrownOne::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = PuttingOnTheCrownTwo::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = PuttingOnTheShieldOne::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $bidHistory[] = PuttingOnTheShieldTwo::select('id', 'amount', 'name', 'designation', 'email', 'phone', 'comment', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        return $bidHistory;
    }
}
