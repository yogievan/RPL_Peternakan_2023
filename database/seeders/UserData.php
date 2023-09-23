<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
            [
                'name' =>'Peternak Handal',
                'email' => 'peternak@gmail.com',
                'role' => 'peternak',
                'password' => bcrypt('123'),
            ],
            [
                'name' =>'Pabrik Bang Jago',
                'email' => 'pabrik@gmail.com',
                'role' => 'pabrik',
                'password' => bcrypt('123'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
