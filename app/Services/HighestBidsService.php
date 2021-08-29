<?php

namespace App\Services;

use App\Models\FifthAliyah;
use App\Models\FirstAliyah;
use App\Models\FourthAliyah;
use App\Models\Holiday;
use App\Models\Maftir;
use App\Models\OpeningTheArk;
use App\Models\SecondAliyah;
use App\Models\ThirdAliyah;

class HighestBidsService
{
    private $highestBids = [];
    private $openingTheArk;
    private $firstAliyah;
    private $secondAliyah;
    private $thirdAliyah;
    private $fourthAliyah;
    private $fifthAliyah;
    private $maftir;

    public function getHighestBids()
    {
        $holidays = Holiday::all();
        $json = array();
        foreach($holidays as $holiday)
        {
            $this->setHighestBids($holiday->id);
            $json[] = [$holiday->id, $holiday->holiday, $this->highestBids];
        }
        return $json;
    }

    /**
     * @param $id
     */
    public function setHighestBids($id)
    {
        $this->openingTheArk = OpeningTheArk::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->firstAliyah = FirstAliyah::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->secondAliyah = SecondAliyah::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->thirdAliyah = ThirdAliyah::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fourthAliyah = FourthAliyah::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->fifthAliyah = FifthAliyah::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->maftir = Maftir::select('id', 'amount', 'description')->where('holiday_id' , $id)->latest('updated_at')->firstOrFail();
        $this->highestBids["Opening The Ark"] = $this->openingTheArk;
        $this->highestBids["First Aliyah"] = $this->firstAliyah;
        $this->highestBids["Second Aliyah"] = $this->secondAliyah;
        $this->highestBids["Third Aliyah"] = $this->thirdAliyah;
        $this->highestBids["Fourth Aliyah"] = $this->fourthAliyah;
        $this->highestBids["Fifth Aliyah"] = $this->fifthAliyah;
        $this->highestBids["Maftir"] = $this->maftir;
    }
}
