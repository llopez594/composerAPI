<?php

    require 'vendor/autoload.php';

    require 'app/lib/Database.php';
    require 'app/lib/Session.php';
    require 'app/model/UserModel.php';
    require 'app/routes/UserRoute.php';

    use \App\Model\UserModel;

    $um = new UserModel();


    var_dump($um->obtener(4));

    /*$um->registrar([
        'Carrera_id' => 4,
        'Nombre' => 'Julio Mario',
        'Apellido' => 'Gonzales Prado',
        'Sexo' => 1,
        'FechaNacimiento' => '1989-02-11',
        'Correo' => 'jgonzales@hotmail.com'
    ]);*/

/*$um->actualizar([
    'id' => 7,
    'Carrera_id' => 4,
    'Nombre' => 'Juan Mario',
    'Apellido' => 'Gonzales Prado',
    'Sexo' => 1,
    'FechaNacimiento' => '1989-02-11',
    'Correo' => 'jgonzales@hotmail.com'
]);*/
//    $um->eliminar(7);