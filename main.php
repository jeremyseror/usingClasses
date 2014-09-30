<?php
/**
 * Created by PhpStorm.
 * User: jeremyseror
 * Date: 30/09/2014
 * Time: 12:54
 *
 * Adding Marc
 */
class AbstractCar {
    protected $carType;
    protected $numberOfDoors;
    protected $color;

    public function setCarType($type)
    {
        $this->carType=$type;
    }

    public function getCarType()
    {
        return $this->carType;
    }

    public function setNumberOfDoors($numberOfDoors)
    {
        $this->numberOfDoors=$numberOfDoors;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color=$color;
    }
    public function getNumberOfDoors()
    {
        return $this->numberOfDoors;
    }
}

$sportsCar = new AbstractCar();

$sportsCar->setCarType("sports");
$sportsCar->setColor("blue");
$sportsCar->setNumberOfDoors("2");

echo $sportsCar->getCarType() ."\n";
echo $sportsCar->getColor()."\n";
echo $sportsCar->getNumberOfDoors()."\n";

$carSport = new AbstractCar();
$carSport->setColor("green");
$carSport->setCarType("sports");
$carSport->setNumberOfDoors("4");

echo $carSport->getCarType() ."\n";
echo $carSport->getColor()."\n";
echo $carSport->getNumberOfDoors()."\n";

$sportsCarBlackTwoDoors = new AbstractCar();
$sportsCarBlackTwoDoors->setColor("black");
$sportsCarBlackTwoDoors->setCarType("sports");
$sportsCarBlackTwoDoors->setNumberOfDoors("2");

echo $sportsCarBlackTwoDoors->getCarType() ."\n";
echo $sportsCarBlackTwoDoors->getColor()."\n";
echo $sportsCarBlackTwoDoors->getNumberOfDoors()."\n";