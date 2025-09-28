<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            Post::create([
                'title' => 'Post ke-' . $i,
                'content' => Str::random(100),
            ]);
        }
    }
}

