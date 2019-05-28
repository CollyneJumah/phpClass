<?php
/**
 * Created by PhpStorm.
 * User: CollinsJumah
 * Date: 5/19/2019
 * Time: 07:40
 */


//include the class definition
require 'class.php';

//create an object

$object= new helloWorld();
//to call a method or invoke a method of a class we use object operator

$object->sayHello();
$object->sayHello('Dutch');
$object->sayHello('French');
$object->sayHello('Spanish');
$object->sayHello('Germany');

//delete the object
unset($object);

?>