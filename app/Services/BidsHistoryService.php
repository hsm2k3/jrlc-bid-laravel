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

    public function getBids()
    {
        $json = array();
        $holidays = Holiday::all();
        foreach($holidays as $holiday)
        {
            $highestBids = $this->setBidsHistory($holiday->id);
            if(!empty($highestBids)) {
                $json[] = ["key" => $holiday->id, "title" => $holiday->holiday, "biddingItems" => $highestBids];
            }
        }
        return $json;
    }

    private function setBidsHistory($id)
    {
        $bidHistory[] = OpeningTheArk::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = FirstAliyah::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = SecondAliyah::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = ThirdAliyah::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = FourthAliyah::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = FifthAliyah::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = Maftir::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = HagBahOne::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = HagBahTwo::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = GelilahOne::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = GelilahTwo::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = PuttingOnTheCrownOne::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = PuttingOnTheCrownTwo::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = PuttingOnTheShieldOne::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        $bidHistory[] = PuttingOnTheShieldTwo::select('created_at', 'name', 'aliyah', 'designation', 'email', 'phone', 'comment', 'amount')->where('holiday_id' , $id)->where('name', '!=', '')->get()->sortDesc()->toArray();
        return array_filter($bidHistory);
    }
}
