<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	echo "\n\n\n\n Importação realizada em " . date("d/m/Y H:i:s") . "\n";

    	for ($i=0; $i < 50; $i++) { 
            echo "-";
        }

        echo "\n";

    	// Quantidade de posts que serão adicionados
    	$limite = 10;

    	$faker = Faker\Factory::create();

    	for ($i = 1; $i <= $limite; $i++) {
	        
	        DB::table('posts')->insert([
	        	'descricao' => $faker->sentence($nbDigits = 7, $variableNbWords = true),
	        	'tags' => $faker->word()
	        ]);

	        echo $i . "º post adicionado com sucesso! \n";
	    }

	    for ($i=0; $i < 50; $i++) { 
            echo "-";
        }

        echo "\n \nImportação concluída! \n\n";
    }
}
