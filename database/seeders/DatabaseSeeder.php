<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'image' => 'https://static.toiimg.com/thumb/msid-89392914,width-1070,height-580,imgsize-104716,resizemode-75,overlay-toi_sw,pt-32,y_pad-40/photo.jpg',
            'date' => '2020-01-01',
            'time' => '10:00:00',
            'capacity' => '1',
            'featured' => true,
        ]);
        Event::factory(15)->create();
        User::factory(1)->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
        ]);

        User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'isAdmin' => true,
        ]);
    }
}
