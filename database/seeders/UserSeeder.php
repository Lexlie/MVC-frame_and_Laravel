<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => '第一個使用者',
            'email' => 'first_user@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $user->save();
    }
}
