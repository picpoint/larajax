<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostReqController extends Controller
{

    public function index() {
        return view('requests.postreq');
    }

    public function recPost(Request $request) {
        Post::create($request->all());

        return redirect()->route('postrequests');
    }

}
