<?php


require __DIR__.'/vendor/autoload.php';

use  Monolog\Logger ;
use  Monolog\Handler\StreamHandler;

use Flavio\CursoSon\Hello;

// cria um canal de registro 
$log = new  Logger ('name');
$log->pushHandler (new  StreamHandler('app.log' , Logger :: WARNING));

// adiciona registros ao log 
$log->warning ( ( new Hello())->Say('Flavio T C Lima') );


