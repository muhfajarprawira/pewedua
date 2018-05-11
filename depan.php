<?php 
spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});
use src\View


$V = new \app\View();
$V->render();
echo "<br>";

$x = new src\View();

$x->render();
?>






