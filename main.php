<?php

/**
 * Created by PhpStorm.
 * User: jeremyseror
 * Date: 30/09/2014
 * Time: 12:54
 *
 * Adding Marc
 */
class AbstractCar
{

    protected $carType;
    protected $numberOfDoors;
    protected $color;

    public function setCarType($type)
    {
        $this->carType = $type;
    }

    public function getCarType()
    {
        return $this->carType;
    }

    public function setNumberOfDoors($numberOfDoors)
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}


$sportsCar = new AbstractCar();

$sportsCar->setCarType("sports");
$sportsCar->setColor("blue");
$sportsCar->setNumberOfDoors(2);

echo "type: ".$sportsCar->getCarType() . "\n";
echo "doors: ".$sportsCar->getNumberOfDoors() . "\n";
echo "color: ".$sportsCar->getColor() . "\n";




$myCar = new SportsCar("red","2");

