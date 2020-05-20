<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Afeez Olayinka',
            'email' => 'admin@yahoo.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
