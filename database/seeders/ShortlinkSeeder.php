<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShortlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'mubesLPJ';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 2;
        $shortlink->save();
        
        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'RisingStar';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 3;
        $shortlink->save();

        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'konten2024';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 4;
        $shortlink->save();

        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'bankSoal';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 5;
        $shortlink->save();

        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'ifmerch';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 6;
        $shortlink->save();

        $shortlink = new \App\Models\Shortlink;
        $shortlink->code = 'NgobrolSantuy';
        $shortlink->link = 'https://hmifunej.id/';
        $shortlink->user_id = 7;
        $shortlink->save();

        
    }
}
