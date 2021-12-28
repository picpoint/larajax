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
        $datas = DB::table('posts')->get();

        return $datas;
    }
     


}
