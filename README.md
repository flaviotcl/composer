# MEu pacote




# Exemplo de Utilização


````

use Flavio\CursoSon\Hello;

$log = new  Logger ('name');

$log->pushHandler (new  StreamHandler('app.log' , Logger :: WARNING));

$log->warning ( ( new Hello())->Say('Anderson A. C') );



````