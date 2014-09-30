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

    public static $validColors = array('red', 'green', 'blue', 'white', 'black', 'pink', 'yellow');
    public static $validNumberOfDoors = array('2', '3', '4', '5');
    public static $validCarType = array('sports', 'mini', 'suv');
    public static $validCars = array('SportsCar', 'MiniCar', 'SUVCar');
    public static $minimumDoors = 2;
    public static $maximumDoors = 5;

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
        echo "  type: " . $this->getCarType() . "\n";
        echo "  color: " . $this->getColor() . "\n";
        echo "  doors: " . $this->getNumberOfDoors() . "\n";
    }

    public function start($display = true)
    {
        if ($display) {
            echo "starting car " . $this->getCarType() . "\n";
            $this->showCar();
        }

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


class SUVCar extends AbstractCar
{
    function __construct($color, $doors)
    {
        return parent::__construct("suv", $color, $doors);
    }
}

class CarFactory
{

    public $cars = array();

    protected $numberOfCars;

    function __construct($numberOfCars = 10, $display = true)
    {
        $this->numberOfCars = $numberOfCars;
        if ($display)
            echo "creating " . $this->numberOfCars . " cars\n";
    }

    public function start($display = false)
    {
        $carCount = array();

        echo "starting factory....\n";

        for ($i = 0; $i < $this->numberOfCars; $i++) {
            $randomCarIndex = rand(0, count(AbstractCar::$validCars) - 1);
            $randomColorIndex = rand(0, count(AbstractCar::$validColors) - 1);
            $randomDoors = rand(AbstractCar::$minimumDoors, AbstractCar::$maximumDoors);

            $carClassName = AbstractCar::$validCars[$randomCarIndex];
            $carColor = AbstractCar::$validColors[$randomColorIndex];

            if ($display)
                echo "  making car " . $i . " - " . $carClassName . "\n";

            array_push($this->cars, new $carClassName($carColor, $randomDoors));
            $carCount[$carClassName][$carColor][$randomDoors]++;

        }

        foreach ($this->cars as $index => $car) {
            $car->start(false);
        }

        print_r($carCount);
        echo "Total cars ".count($this->cars)."\n";

    }


}

$factory = new CarFactory(10,false);
$factory->start();

