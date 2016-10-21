<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        \DB::table('productos')->insert([

            'nombre' => 'Ensalada de espinaca',
            'descripcion' => $faker->text(),
            'precio' => '1.65',
            'unidad' => '100',
            'tipo' => 'ensalada',
            'medida' => 'gr',
            'imagen' => 'ensalada_espinaca.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'tortellini alla carbonada',
            'descripcion' => $faker->text(),
            'precio' => '1.30',
            'unidad' => '100',
            'tipo' => 'pasta',
            'medida' => 'gr',
            'imagen' => 'tortellini.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Pollo al curry',
            'descripcion' => $faker->text(),
            'precio' => '1.55',
            'unidad' => '100',
            'tipo' => 'carne',
            'medida' => 'gr',
            'imagen' => 'pollo_curry.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Arroz con verduras',
            'descripcion' => $faker->text(),
            'precio' => '1.55',
            'unidad' => '100',
            'tipo' => 'granos',
            'medida' => 'gr',
            'imagen' => 'arroz_verduras.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Pizza primavera',
            'descripcion' => $faker->text(),
            'precio' => '2.00',
            'unidad' => '1',
            'tipo' => 'bocadillo',
            'medida' => 'ud',
            'imagen' => 'pizza_primavera.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Carne estofada',
            'descripcion' => $faker->text(),
            'precio' => '2.15',
            'unidad' => '100',
            'tipo' => 'carne',
            'medida' => 'gr',
            'imagen' => 'Carne_estofada.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Agua',
            'descripcion' => $faker->text(),
            'precio' => '1.20',
            'unidad' => '1',
            'tipo' => 'bebida',
            'medida' => 'ud',
            'imagen' => 'agua.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Zumo Naranja',
            'descripcion' => $faker->text(),
            'precio' => '2.00',
            'unidad' => '1',
            'tipo' => 'bebida',
            'medida' => 'ud',
            'imagen' => 'zumo_naranja.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Manzana',
            'descripcion' => $faker->text(),
            'precio' => '2.00',
            'unidad' => '1',
            'tipo' => 'bocadillo',
            'medida' => 'ud',
            'imagen' => 'manzana.png',


        ]);
        \DB::table('productos')->insert([

            'nombre' => 'Tarta de queso',
            'descripcion' => $faker->text(),
            'precio' => '2.50',
            'unidad' => '1',
            'tipo' => 'bocadillo',
            'medida' => 'ud',
            'imagen' => 'tarta_queso.png',


        ]);
    }
}
