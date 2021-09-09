<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class auth extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name'     => 'Saya Admin',
                'email'    => 'admin@gmail.com',
                'level'    => 'admin',
                'password' => bcrypt('admin111')
            ],
            [
                'username' => 'owner',
                'name'     => 'Saya owner',
                'email'    => 'owner@gmail.com',
                'level'    => 'owner',
                'password' => bcrypt('owner111')
            ]
                ];
                foreach($user as $key => $value){
                    user::create($value);
                }
    }
}
