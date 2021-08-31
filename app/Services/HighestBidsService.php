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

class HighestBidsService
{
    private $openingTheArk;
    private $firstAliyah;
    private $secondAliyah;
    private $thirdAliyah;
    private $fourthAliyah;
    private $fifthAliyah;
    private $maftir;
    private $hagBahOne;
    private $hagBahTwo;
    private $gelilahOne;
    private $gelilahTwo;
    private $puttingOnTheCrownOne;
    private $puttingOnTheCrownTwo;
    private $puttingOnTheShieldOne;
    private $puttingOnTheShieldTwo;

    public function getHighestBids()
    {
        $holidays = Holiday::all();
        foreach($holidays as $holiday)
        {
            $highestBids = $this->setHighestBids($holiday->id);
            $json[] = ["key" => $holiday->id, "title" => $holiday->holiday, "biddingItems" =>  $highestBids];
        }
        return $json;
    }

    /**
     * @param $id
     */
    public function setHighestBids($id)
    {
        $this->openingTheArk = OpeningTheArk::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->firstAliyah = FirstAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->secondAliyah = SecondAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->thirdAliyah = ThirdAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fourthAliyah = FourthAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fifthAliyah = FifthAliyah::select('id', 'aliyah', 'amount')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->maftir = Maftir::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->hagBahOne = HagBahOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->hagBahTwo = HagBahTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->gelilahOne = GelilahOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->gelilahTwo = GelilahTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheCrownOne = PuttingOnTheCrownOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheCrownTwo = PuttingOnTheCrownTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheShieldOne = PuttingOnTheShieldOne::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->puttingOnTheShieldTwo = PuttingOnTheShieldTwo::select('id', 'amount', 'aliyah')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        switch($id)
        {
            case 1:
                $highestBids[] = $this->openingTheArk;
                $highestBids[] = $this->firstAliyah;
                $highestBids[] = $this->secondAliyah;
                $highestBids[] = $this->thirdAliyah;
                $highestBids[] = $this->fourthAliyah;
                $highestBids[] = $this->fifthAliyah;
                $highestBids[] = $this->maftir;
                $highestBids[] = $this->hagBahOne;
                $highestBids[] = $this->hagBahTwo;
                $highestBids[] = $this->gelilahOne;
                $highestBids[] = $this->gelilahTwo;
                $highestBids[] = $this->puttingOnTheCrownOne;
                $highestBids[] = $this->puttingOnTheCrownTwo;
                $highestBids[] = $this->puttingOnTheShieldOne;
                $highestBids[] = $this->puttingOnTheShieldTwo;
                break;
            case 2:
                $highestBids[] = $this->openingTheArk;
                $highestBids[] = $this->firstAliyah;
                $highestBids[] = $this->secondAliyah;
                $highestBids[] = $this->thirdAliyah;
                $highestBids[] = $this->fourthAliyah;
                $highestBids[] = $this->fifthAliyah;
                $highestBids[] = $this->maftir;
                $highestBids[] = $this->hagBahOne;
                $highestBids[] = $this->hagBahTwo;
                $highestBids[] = $this->gelilahOne;
                $highestBids[] = $this->gelilahTwo;
                $highestBids[] = $this->puttingOnTheCrownOne;
                $highestBids[] = $this->puttingOnTheCrownTwo;
                $highestBids[] = $this->puttingOnTheShieldOne;
                $highestBids[] = $this->puttingOnTheShieldTwo;
                break;
            case 3:
                $highestBids[] = $this->openingTheArk;
                $highestBids[] = $this->firstAliyah;
                $highestBids[] = $this->secondAliyah;
                $highestBids[] = $this->thirdAliyah;
                $highestBids[] = $this->fourthAliyah;
                $highestBids[] = $this->fifthAliyah;
                $highestBids[] = $this->maftir;
                $highestBids[] = $this->hagBahOne;
                $highestBids[] = $this->hagBahTwo;
                $highestBids[] = $this->gelilahOne;
                $highestBids[] = $this->gelilahTwo;
                $highestBids[] = $this->puttingOnTheCrownOne;
                $highestBids[] = $this->puttingOnTheCrownTwo;
                $highestBids[] = $this->puttingOnTheShieldOne;
                $highestBids[] = $this->puttingOnTheShieldTwo;
                break;
        }
        return $highestBids;
    }
}
