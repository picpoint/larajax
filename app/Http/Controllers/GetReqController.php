<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetReqController extends Controller
{

    public function index() {
        return view('requests.getreq');
    }



    public function getAllPosts(Request $request) {
        dd($request);
    }
     


}
