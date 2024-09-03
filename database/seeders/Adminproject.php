<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminproject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'gaia quiluange',
            'email' => 'gaiokiluange01@mail.ru',
            'password' => bcrypt('123456'),

        ]);
    }
}
