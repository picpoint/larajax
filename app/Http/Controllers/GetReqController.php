<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetReqController extends Controller
{

    public function index() {
        return view('requests.getreq');
    }



    public function getAllPosts(Request $request) {
        return DB::table('posts')->get();
    }
     


}
