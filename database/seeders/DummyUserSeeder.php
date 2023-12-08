<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'  => 'Miracle',
                'email' => 'miracle@gmail.com',
                'password'  => Hash::make('miracle'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'Gaben',
                'email' => 'gaben@gmail.com',
                'password'  => Hash::make('gaben'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'Yatoro',
                'email' => 'yatoro@gmail.com',
                'password'  => Hash::make('yatoro'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'Olofmeister',
                'email' => 'olof@gmail.com',
                'password'  => Hash::make('olofmeister'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'midOrFeed',
                'email' => 'midori@gmail.com',
                'password'  => Hash::make('midorfeed'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'Midoriya',
                'email' => 'midoriya@gmail.com',
                'password'  => Hash::make('midoriya'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'admoon',
                'email' => 'admoon@gmail.com',
                'password'  => Hash::make('moonada'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'radogooday',
                'email' => 'gooday@gmail.com',
                'password'  => Hash::make('radogooday'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 's1mple',
                'email' => 'simple@gmail.com',
                'password'  => Hash::make('simple'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'magisk',
                'email' => 'magis@gmail.com',
                'password'  => Hash::make('magik'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'Dondo',
                'email' => 'dendi@gmail.com',
                'password'  => Hash::make('dendi'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'n0tail',
                'email' => 'nitail@gmail.com',
                'password'  => Hash::make('n0ta1l'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'topson',
                'email' => 'topson@gmail.com',
                'password'  => Hash::make('topson'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'adin',
                'email' => 'adin@gmail.com',
                'password'  => Hash::make('adin'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'sumail',
                'email' => 'mailsu@gmail.com',
                'password'  => Hash::make('sumail'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'arteezy',
                'email' => 'arteezy@gmail.com',
                'password'  => Hash::make('arteezy'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
            [
                'name'  => 'ame',
                'email' => 'ame@gmail.com',
                'password'  => Hash::make('ame'),
                'balance'   => '0',
                'isAdmin'   => '0',
            ],
        ];

        User::insert($users);
    }
}
