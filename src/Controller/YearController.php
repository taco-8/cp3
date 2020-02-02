<?php
namespace App\Controller;

use App\Controller\AppController;

class YearController extends AppController
{

    public function index()
    {

        $this->viewBuilder()->autoLayout(false);

        $currentyear = date("Y");
        $selectyearlist = [];
        $titleyear = "";

        $cntyear = 140;


        for ($i = ($currentyear-$cntyear); $i <= ($currentyear+20); $i++) {

            $wayear = self::wareki($i);
            $selectyearlist += array($i => $i."年 ".$wayear."年 ".$cntyear."歳");

            if($currentyear==$i){
                $titleyear = $i.$wayear;
            }

            $cntyear--;

        }

        $this->set('selectyearlist', $selectyearlist);
        $this->set('currentyear', $currentyear);
        $this->set('titleyear', $titleyear);

    }

    function wareki($year) {

        $eras = [
            ['year' => 2018, 'name' => '令和'],
            ['year' => 1988, 'name' => '平成'],
            ['year' => 1925, 'name' => '昭和'],
            ['year' => 1911, 'name' => '大正'],
            ['year' => 1867, 'name' => '明治']
        ];
    
        foreach($eras as $era) {
    
            $base_year = $era['year'];
            $era_name = $era['name'];
    
            if($year > $base_year) {
    
                $era_year = $year - $base_year;
    
                if($era_year === 1) {
    
                    return $era_name .'元';
    
                }
    
                return $era_name . $era_year;
    
            }
    
        }
    
        return null;
    
    }


}
