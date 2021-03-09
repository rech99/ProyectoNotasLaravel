<?php

namespace Database\Seeders;

use App\Models\Notas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo' => '¿Para que sirve composer?',
            'contenido' => 'Con Composer podemos instalar y actualizar frameworks como Laravel 
                        o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más. ',
        ]);


        Notas::create([
            'titulo' => 'Instalacion de Laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);



        Notas::create([
            'titulo' => 'Rutas y JSON',
            'contenido' => 'Recuerda que si retornas un arreglo en una ruta, Laravel lo va a convertir en JSON automáticamente:

            <?php
        
            Route::get(/, function () {
                return [
                    Cursos => [
                        Primeros pasos con Laravel,
                        Crea un panel de control con Laravel,
                    ]
                ];
            });
        Producirá el siguiente resultado:
        
        {"Cursos":["Primeros pasos con Laravel","Crea un panel de control con Laravel"]} ',
        ]);




        Notas::create([
            'titulo' => 'Front Controller',
            'contenido' => 'Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web. ',
        ]);



        Notas::create([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => 'Puedes colocar el siguiente código en el método boot de app/Providers/RouteServiceProvider.php para restringir cualquier parámetro de las rutas a un formato numérico:

                Route::pattern(nombre-del-parametro, \d+);
                Puedes por supuesto usar otras expresiones regulares para restringir a otros formatos.',
        ]);
    }
}
