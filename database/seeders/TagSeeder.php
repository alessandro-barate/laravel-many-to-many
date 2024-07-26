<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Tag::truncate();

        $tags = ['HTML'. 'CSS', 'Javascript', 'Vue', 'PHP', 'Laravel', 'React', 'Python', 'Angular', 'Ruby', 'MySQL', 'SQL', 'Bootstrap'];

        foreach ($tags as $tag) {

            $new_tag = new Tag();

            $new_tag->title = $tag;
            $new_tag->slug = Str::of($tag)->slug();

            $new_tag->save();
        }

        Schema::enableForeignKeyConstraints();
    }
}
