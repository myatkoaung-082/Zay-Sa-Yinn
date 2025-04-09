<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('rose'),
            ],
            [
                'name' => 'Myat Ko Aung',
                'email' => 'myatkoaung161@gmail.com',
                'profile_img' => 'rose.jpg',
                'password' => bcrypt('rose'),
            ],
            [
                'name' => 'Moe Kyaw Swar',
                'email' => 'moekyawswar@gmail.com',
                'profile_img' => 'lisa.jpg',
                'password' => bcrypt('rose'),
            ],
            [
                'name' => 'Thiha Maung',
                'email' => 'thihamaung@gmail.com',
                'profile_img' => 'jennie.jpg',
                'password' => bcrypt('rose'),
            ],
            [
                'name' => 'Soe Htike Aung',
                'email' => 'soehtikeaung@gmail.com',
                'profile_img' => 'jisoo.jpg',
                'password' => bcrypt('rose'),
            ],
            [
                'name' => 'Aung Khant',
                'email' => 'aungkhant@gmail.com',
                'profile_img' => 'jisoo.jpg',
                'password' => bcrypt('rose'),
            ],

        ];
        foreach ($users as $user) {
            $user = User::create($user); 
        }
    }
}
