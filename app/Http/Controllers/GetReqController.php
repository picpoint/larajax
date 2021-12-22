<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetReqController extends Controller
{

    public function index() {
        return view('requests.getreq');
    }

}
