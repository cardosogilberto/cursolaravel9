<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gilberto Cardoso',
            'email' => 'gilberto.cardoso537@gmail.com',
            'password' => bcrypt('cdc1234'),
        ]);
    }
}
