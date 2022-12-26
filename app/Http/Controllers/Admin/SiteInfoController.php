<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function GetAllSiteInfo() {
        $allsiteinfo = SiteInfo::get();
        return $allsiteinfo[0];
    }
}
