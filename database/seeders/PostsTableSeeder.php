<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Primeiro post do admin',
                'content' => 'Este é o primeiro post do administrado, seja bem-vindos'
            ],
            [
                'user_id' => 1,
                'title' => 'Uma nota importante',
                'content' => 'Todos devem manter o respeito',
            ],
            [
                'user_id' => 2,
                'title' => 'Ola a todos!',
                'content' => 'Ola meu nome é João, sou novo aqui',
            ],
            [
                'user_id' => 1,
                'title' => 'Ben-vindo João!',
                'content' => 'Seja bem-vindo, João. Aproveite e se divirta na nossa cominidade',
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
