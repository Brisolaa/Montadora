<pre>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'Carro.php';
require_once 'Pickup.php';
require_once 'Motor.php';
require_once 'Motor1000.php';
require_once 'Motor1600.php';
require_once 'MotorTurbo.php';
require_once 'VolanteComum.php';


$motor1 = new Motor1000();
$motor2 = new Motor1600();
$motort = new MotorTurbo();

$volante = new VolanteComum();

$carro1 = new Carro($motort , $volante);


try 
{
 $carro1->ligar();
 $carro1->acelerar(30);
 
} catch (Exception $e) {
    echo "\n" . $e ->getMessage()."\n";
}


var_dump($carro1);