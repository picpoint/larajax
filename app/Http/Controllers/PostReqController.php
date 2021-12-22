<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostReqController extends Controller
{

    public function index() {
        return view('requests.postreq');
    }

}
