<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CarTag;
use App\Models\Tags;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(150)->create();
         \App\Models\Car::factory(250)->create();
         \App\Models\Tag::factory(20)->create();
//         \App\Models\CarTag::factory(250)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => 'admin'
         ]);
    }
}
