<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mensagem;
use App\Models\User;
use App\Models\Post;
use App\Models\Comentario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(60)->create();

        Mensagem::create([
            'men_texto' => 'mensagem teste',
        ]);
        Mensagem::create([
            'men_texto' => 'mensagem 2 de teste',
        ]);

        Post::create([
            'pst_texto' => 'Post 1',
        ]);
        Post::create([
            'pst_texto' => 'Post 2',
        ]);

        Comentario::create([
            'cmn_texto' => 'Comentário 1',
            'pst_id'    => 1
        ]);
        Comentario::create([
            'cmn_texto' => 'Comentário 2',
            'pst_id'    => 1
        ]);
        Comentario::create([
            'cmn_texto' => 'Comentário 3',
            'pst_id'    => 2
        ]);
        Comentario::create([
            'cmn_texto' => 'Comentário 4',
            'pst_id'    => 1
        ]);


        
    }
}
