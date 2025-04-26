<?php

namespace App\Http\Controllers;

use App\Models\Admin\CaseInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    //
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/cases');
        $casesInfo = CaseInfo::orderBy('created_at', 'desc')->paginate(10);
        return view('cases')
            ->with('casesInfo', $casesInfo)
            ->with('seoInfo', $seoInfo);
    }
}
