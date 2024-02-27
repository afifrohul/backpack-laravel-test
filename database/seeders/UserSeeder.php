<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'admin@hmifunej.id';
        $user->email_verified_at = now();
        $user->password = bcrypt('adminhmif');
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
    }
}
