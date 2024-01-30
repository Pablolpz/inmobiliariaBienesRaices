<?php

require 'funciones.php';
require 'config/databases.php';
require __DIR__ . '/../vendor/autoload.php';

//Conectarnos a la base de Datos
$db = conectarDB();

use App\ActiveRecord;

ActiveRecord::setDB($db);

