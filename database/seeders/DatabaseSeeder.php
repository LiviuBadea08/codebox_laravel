<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Event::factory()->create([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => '10',
            'image' => 'https://via.placeholder.com/150',
            'date' => '2020-01-01',
            'time' => '10:00:00',
            'capacity' => '1',
            'featured' => '1',
        ]);
        Event::factory(15)->create();
        User::factory(1)->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
        ]);
    }
}
