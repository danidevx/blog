<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'daniel arenas';
        $user->email = 'deanarespe@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(10)->create();
    }
}
