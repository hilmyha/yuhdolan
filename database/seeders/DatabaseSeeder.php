<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'email' => 'haidar@blogsite.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(4)->create();

        Kota::create([
            'name' => 'Kebumen',
            'slug' => 'kebumen',
        ]);
        
        Kota::create([
            'name' => 'Purwokerto',
            'slug' => 'purwokerto',
        ]);
        
        Kota::create([
            'name' => 'Surakarta',
            'slug' => 'surakarta',
        ]);

        Wisata::factory(20)->create();
    }
}
