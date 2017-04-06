<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use CategoriaTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Model::unguard();

        $this->call(CategoriaTableSeeder::class);

        Model::reguard();*/
        DB::table('categorias')->insert(['nome' => 'ESPORTE',
                                         'nome' => 'BRINQUEDO']);
    }
}
