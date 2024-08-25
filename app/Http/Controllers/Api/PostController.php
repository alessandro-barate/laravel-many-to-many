<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $posts = Post::all();

        // $posts = Post::with('type', 'tags')->get();

        $posts = Post::paginate(3);

        return response()->json([
            'status' => 'success',
            'results' => $posts
        ]);    
    }

    public function show()
    {
        return response()->json('dettaglio post');
    }
}
