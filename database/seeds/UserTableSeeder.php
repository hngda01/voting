<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();

        factory(User::class)->create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => 'password',
            'avatar' => 'default.jpg',
            'chatwork_id' => '12345678',
            'gender' => 1,
            'role' => 1,
        ]);
    }
}