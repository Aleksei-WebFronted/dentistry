<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Submit(PostRequest $req)
    {
        $body = $req->body;
        return DB::table('client')->insert(['body' => $body]);
    }
}


