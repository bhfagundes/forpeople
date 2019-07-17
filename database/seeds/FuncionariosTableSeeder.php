<?php

use Illuminate\Database\Seeder;
use App\Funcionarios;
class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionarios::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) 
        {
            Funcionarios::create([
                'nome' => $faker->sentence,
                'endereco' => $faker->sentence,
                'cidade' => $faker->sentence,
                'estado' => $faker->sentence,
                
            ]);
        }
    }
}
