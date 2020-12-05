<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert(

            [
                'descripcion' => 'Administrador',
            ]
        );


        DB::table('rols')->insert(

            [
                'descripcion' => 'Administrador General',
            ]
        );

        DB::table('rols')->insert(

            [
                'descripcion' => 'Personal',
            ]
        );

        DB::table('rols')->insert(

            [
                'descripcion' => 'Invitado',
            ]
        );

    }
}
