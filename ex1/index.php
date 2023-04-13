<?php
include_once 'People.php';
$bob= new People();
$bob->name='Bob';
$bob->age=18;
var_dump($bob);
echo '<br>';
$bob->go();
echo '<br>';
$bob->go1();
echo $bob->age;
$kate=new People();
$kate->name='Kate';
$kate->age=20;
echo '<br>';
var_dump($kate);
echo '<br>';
// класс животное
include_once 'Animal.php';
// $tom=new Animal();
// $tom->name='tom';
// $tom->type='kot';
// $tom->age=7;
// echo '<br>';
// var_dump($tom);
// echo '<br>';
// $tom->hello();
// echo '<br>';
// $tom->year();

// $miki=new Animal();
// $miki->name='miki';
// $miki->type='sobaka';
// $miki->age=10;
// echo '<br>';
// echo '<br>';
// var_dump($tom);
// echo '<br>';
// $miki->hello();
// echo '<br>';
// $miki->year();


//конструктор
include_once 'Construct.php';
$bib=new Construct('bob',1);
echo '<br>';
var_dump($bib);

//наследование
include_once 'Person.php';
echo '<br>';
$tim=new Person('tim',1,"pip");
var_dump($tim);
echo '<br>';
$tim->go();

include_once 'Kot.php';
echo '<br>';
$bars=new Kot('Барсик',5,'крутой');
var_dump($bars);
echo '<br>';
$bars->hello();