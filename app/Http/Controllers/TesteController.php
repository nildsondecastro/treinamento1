<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TesteController extends Controller
{
    public function teste(){
        $postagens = Post::all();
        $segundo_post = Post::find(2)->first();

        dd($postagens, $postagens[0]->comentarios, $postagens[1]->comentarios, $segundo_post->comentarios);
    }
}
