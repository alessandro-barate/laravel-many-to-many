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

        $posts = Post::with('type', 'tags')->paginate(3);

        return response()->json([
            'status' => true,
            'results' => $posts
        ]);    
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->with('type', 'tags', 'user')->first();
        
        if ($post){
            return response()->json([
                'status' => true,
                'result' => $post
            ]);

        } else {
            return response()->json([
                'status' => false,
                'result' => null
            ], 404);        // Qui il 404 serve per farci restituire non un codice 404 e non 200
        }

        // return response()->json($post);
    }
}
