<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Kota;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Hilmy Haidar',
            'username' => 'haidar',
            'email' => 'haidar@haidar.com',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(4)->create();

        Kota::create([
            'name' => 'Kebumen',
            'description' => 'lorem',
            'slug' => 'kebumen',
        ]);
        
        Kota::create([
            'name' => 'Purwokerto',
            'description' => 'lorem',
            'slug' => 'purwokerto',
        ]);
        
        Kota::create([
            'name' => 'Surakarta',
            'description' => 'lorem',
            'slug' => 'surakarta',
        ]);
        
        Kota::create([
            'name' => 'Surabaya',
            'description' => 'lorem',
            'slug' => 'surabaya',
        ]);

        Wisata::factory(20)->create();

        Blog::factory(10)->create();
    }
}
