<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContactDetails(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'contact_time' => date("h:i:sa"),
            'contact_date' => date("d-m-Y")
        ];

        $result = Contact::insert($data);
        // echo '<pre>'. print_r($data) .'</pre>';
        return $result;
    } //End Method

    public function funcName() {

    } //End Method
}