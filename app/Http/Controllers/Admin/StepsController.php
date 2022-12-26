<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Steps;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function GetAllSteps() {
        $allSteps = Steps::get();
        // dd($allSteps[0]);
        return $allSteps;
    }
}