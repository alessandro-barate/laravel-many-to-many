<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        Tag::truncate();

        for($i = 0; $i < 100; $i++){

            $new_post_tag = new PostTag();

            $new_post_tag->post_id = Post::inRandomOrder()->first()->id;
            $new_post_tag->tag_id = Tag::inRandomOrder()->first()->id;

            $new_post_tag->save();
        }

        Schema::enableForeignKeyConstraints();

    }
}
