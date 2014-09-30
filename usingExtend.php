<?php

/**
 * Created by PhpStorm.
 * User: marct
 * Date: 30/09/14
 * Time: 3:07 PM
 */
class AbstractCar
{

    protected $carType;
    protected $numberOfDoors;
    protected $color;

    public static $validColors = array('red', 'green', 'blue', 'white', 'black');
    public static $validNumberOfDoors = array('2', '3', '4', '5');
    public static $validCarType = array('sports', 'mini', 'suv');

    function __construct($type, $color, $doors)
    {
        $hasError = false;

        if (!in_array($type, self::$validCarType)) {
            echo "\nERROR: Invalid car type (" . __CLASS__ . ")\n";
            $hasError = true;
        }

        if (!in_array($doors, self::$validNumberOfDoors)) {
            echo "\nERROR: Invalid number of doors (" . __CLASS__ . ")\n";
            $hasError = true;
        }

        if (!in_array($color, self::$validColors)) {
            echo "\nERROR: Invalid color (" . __CLASS__ . ")\n";
            $hasError = true;
        }

        if ($hasError)
            return false;

        $this->setCarType($type);
        $this->setColor($color);
        $this->setNumberOfDoors($doors);
    }

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

    public function showCar()
    {
        echo "type: " . $this->getCarType() . "\n";
        echo "color: " . $this->getColor() . "\n";
        echo "doors: " . $this->getNumberOfDoors() . "\n";
    }
}


class SportsCar extends AbstractCar
{
    function __construct($color, $doors)
    {
        return parent::__construct("sports", $color, $doors);
    }
}

class MiniCar extends AbstractCar
{
    function __construct($color, $doors)
    {
        return parent::__construct("mini", $color, $doors);
    }
}

$poo = new SportsCar("red", "2");
$poo->showCar();


$mini = new MiniCar("4", "green");
$mini->showCar();


