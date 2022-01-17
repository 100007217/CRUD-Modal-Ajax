<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 25; $i++) { 
            DB::table('objetos')->insert([
                'id'=> $i,
                'Titulo' => 'titulo'.$i,
                'Descripcion' => 'descripcion'.$i,
            ]);
        }
        /*
        for ($i=0; $i < 25; $i++) { 
            DB::table('dogs')->insert([
                'title' => 'título'.$i,
                'author_id' => $i+1,
            ]);
        }
        */
    }
}
