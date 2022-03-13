<?php

namespace Database\Seeders;

use App\Models\Dropee;
use App\Models\User;
use Illuminate\Database\Seeder;

class DropeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dropee Admin',
            'email' => 'admin@dropee.com',
            'password' => '$2y$10$DYjKQr49npti5KKonuVwhOboEHny8.BC4t/B3DwTa8a7T0.L2yUMy', //12345678
        ]);

        Dropee::create([
            'title' => null,
            'location' => 1,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => 'Dropee.com',
            'location' => 2,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 3,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => 'B2B Marketplace',
            'location' => 4,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 5,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 6,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => 'SaaS enabled marketplace',
            'location' => 7,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 8,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => 'B2B Marketplace',
            'location' => 9,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 10,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 11,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 12,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 13,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 14,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => null,
            'location' => 15,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);

        Dropee::create([
            'title' => 'Provide Transparency',
            'location' => 16,
            'color' => 'black',
            'size' => '12px',
            'bold' => '100'
        ]);
    }
}
