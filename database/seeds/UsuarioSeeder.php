<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(

            [
                'name' 				=>	'Wilhelm Ruiz Taype',
                'permiso'           => '1',
                'email'				=>	'wilhelmrt@kairadevops.com',
                'password'			=>	Hash::make('qweqwe123'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Jean Edgar Rodrigues Gago',
                'permiso'           =>  '1',
                'email'				=>	'jrodriguez@kairadevops.com',
                'password'			=>	Hash::make('jrodriguez'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Richard Percy Rodrigues Gago',
                'permiso'           =>  '1',
                'email'				=>	'rrodriguez@kairadevops.com',
                'password'			=>	Hash::make('rrodriguez'),

            ]
        );
        DB::table('users')->insert(

            [
                'name' 				=>	'Luis Miguel Carnica Roque',
                'permiso'           =>  '1',
                'email'				=>	'lcarnica@kairadevops.com',
                'password'			=>	Hash::make('lcarnica'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Pierina de los Angeles Montanchez Pineda',
                'permiso'           =>  '1',
                'email'				=>	'pmontanchez@kairadevops.com',
                'password'			=>	Hash::make('pmontanchez'),

            ]
        );
        DB::table('users')->insert(

            [
                'name' 				=>	'Gerencia General',
                'permiso'           =>  '1',
                'email'				=>	'gerencia@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Recursos Humanos',
                'permiso'           =>  '1',
                'email'				=>	'rrhh@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Marketing y Publicidad',
                'permiso'           =>  '1',
                'email'				=>	'marketing@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );


        DB::table('users')->insert(

            [
                'name' 				=>	'Tecnologias de la informacion',
                'permiso'           =>  '1',
                'email'				=>	'tecnologiasinformacion@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );



          DB::table('users')->insert(

              [
                  'name' 				=>	' Soluciones y Proyectos',
                  'permiso'           =>  '1',
                  'email'				=>	'solucionesyproyectos@kairadevops.com',
                  'password'			=>	Hash::make('Kairadevops123'),

              ]
          );

        DB::table('users')->insert(

            [
                'name' 				=>	'Area de Administracion',
                'permiso'           =>  '1',
                'email'				=>	'administracion@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Externos ',
                'permiso'           =>  '1',
                'email'				=>	'externos@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );

        DB::table('users')->insert(

            [
                'name' 				=>	'Mesa de Ayuda ',
                'permiso'           =>  '1',
                'email'				=>	'helpdesk@kairadevops.com',
                'password'			=>	Hash::make('Kairadevops123'),

            ]
        );

    }
}
