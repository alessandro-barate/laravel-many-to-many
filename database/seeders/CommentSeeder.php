<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {

            $post = Post::inRandomOrder()->first();

            $new_comment = new Comment();
            $new_comment->author = fake()->name();
            $new_comment->content = fake()->text(200);
            $new_comment->post_id = $post->id;

            $new_comment->save();
        }
    }
}
