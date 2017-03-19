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
        $user = [
            'name' => 'Julio Contreras',
            'email' => 'patrick_01_pato@outlook.com',
            'password' => bcrypt('admin')
        ];
        User::create($user);
    }
}
