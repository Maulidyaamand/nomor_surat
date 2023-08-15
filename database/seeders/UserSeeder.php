<?php

namespace Database\Seeders;

use App\Models\User;
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
       $users = [
        [
            'username' => 'kadivmin',
            'password' => bcrypt('admin'),
        ],

        [
            'username' => 'kadivimig',
            'password' => bcrypt('imig'),
        ],

        [
            'username' => 'kadivpas',
            'password' => bcrypt('pas'),
        ]
        
        ];

        foreach($users as $key => $value){
            User::create($value);
 }
}

}