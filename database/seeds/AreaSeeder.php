<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [
                'descripcion' => 'Recursos Humanos',
            ]

        );

        DB::table('areas')->insert(

            [
                'descripcion' => 'Marketing y Publicidad',
            ]
        );

        DB::table('areas')->insert(

            [
                'descripcion' => 'Tecnologias de la Informacion',
            ]
        );

        DB::table('areas')->insert(

            [
                'descripcion' => 'Soluciones y Proyectos',
            ]
        );
        DB::table('areas')->insert(

            [
                'descripcion' => 'Apoyo Administrativo',
            ]
        );
        DB::table('areas')->insert(

            [
                'descripcion' => 'Externos',
            ]
        );

        DB::table('areas')->insert(

            [
                'descripcion' => 'Otros',
            ]
        );


    }
}
