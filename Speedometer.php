<?php

Class Speedometer

{

    private const CONVERSION_VALUE = 1.610;

    private $kilometers ;

    private $miles;

    public static function convertKmToMiles($kilometers)

    {   

        return $kilometers / self::CONVERSION_VALUE ; 

    }

    public function getKilometers()
    {
        return $this->kilometers;
    }
 
    public function setKilometers($kilometers)
    {
        $this->kilometers = $kilometers;

        return $this;
    }

    public function getMiles()
    {
        return $this->miles;
    }
 
    public function setMiles($miles)
    {
        $this->miles = $miles;

        return $this;
    }
}

echo round( Speedometer::convertKmToMiles(10), 2, PHP_ROUND_HALF_DOWN);