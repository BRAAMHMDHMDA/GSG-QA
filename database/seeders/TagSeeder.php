<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'php',
            'slug' => Str::slug('php')
        ]);
        Tag::create([
            'name' => 'laravel',
            'slug' => Str::slug('laravel')
        ]);
        Tag::create([
            'name' => 'java',
            'slug' => Str::slug('java')
        ]);
        Tag::create([
            'name' => 'ecommerce',
            'slug' => Str::slug('ecommerce')
        ]);
        Tag::create([
            'name' => 'css',
            'slug' => Str::slug('css')
        ]);
    }
}
