<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function GetVisitorDetails() {
        date_default_timezone_set('America/Vancouver');

        $data = [
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'visit_time' => date("h:i:sa"),
            'visit_date' => date("d-m-Y")
        ];

        $result = Visitor::insert($data);
        // echo '<pre>'. print_r($data) .'</pre>';
        return $result;

    } //End Method

    public function funcName() {

    } //End Method
}