<?php

use Illuminate\Database\Seeder;
use App\Model\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = array('Animes',
                'Mangá', 
                'Blueprints', 
                'Livros', 
                'Carros', 
                'Desenhos animados',
                'Celebridades', 
                'Urbanas', 
                'Histórias em quadrinhos',
                'Arte contemporânea',
                'Fantasia', 
                'Moda', 
                'Floral', 
                'Comida e Cozinha',
                'Engraçado', 
                'Jogos', 
                'Inspirador', 
                'Japonês', 
                'Ásia', 
                'Infantil', 
                'Paisagens', 
                'Espaço masculino',
                'Mapas', 
                'Militares', 
                'Minimalista', 
                'Filmes', 
                'Música', 	
                'Natureza', 
                'Pinturas', 
                'Aviões', 
                'Arte pop',
                'Retro',
                'Espaço',
                'Esporte',
                'Text Art',
                'Viagem',
                'Programas de TV',
                'Estados Unidos',
                'Cartazes vintage',
                'Brasil');

        foreach ($dados as $dado) {
            Categoria::create([ 'nome_categoria' => $dado ]);
        }
        
    }
}
