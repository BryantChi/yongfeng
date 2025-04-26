<?php

namespace App\Http\Controllers;

use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function locomotive()
    {
        $seoInfo = SeoSettingRepository::getInfo('/locomotive');
        return view('locomotive')
            ->with('seoInfo', $seoInfo);
    }

    public function car()
    {
        $seoInfo = SeoSettingRepository::getInfo('/car');
        return view('car')
            ->with('seoInfo', $seoInfo);
    }

    public function gold()
    {
        $seoInfo = SeoSettingRepository::getInfo('/gold');
        return view('gold')
            ->with('seoInfo', $seoInfo);
    }


    public function loan3c()
    {
        $seoInfo = SeoSettingRepository::getInfo('/3c-loan');
        return view('3c-loan')
            ->with('seoInfo', $seoInfo);
    }

    public function microfinance()
    {
        $seoInfo = SeoSettingRepository::getInfo('/microfinance');
        return view('microfinance')
            ->with('seoInfo', $seoInfo);
    }

    public function bontique()
    {
        $seoInfo = SeoSettingRepository::getInfo('/bontique');
        return view('bontique')
            ->with('seoInfo', $seoInfo);
    }

}
