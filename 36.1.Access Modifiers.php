<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // ok
$mango->color = 'Yellow'; // Error
$mango->weight = '300'; // Error