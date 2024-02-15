<?php
namespace App\MyDigitalSchool;

class TemperatureConverter
{
    public function convert($temperature, $unit)
    {
        if ($unit === 'C') {
            $faranheit = $temperature * 9 / 5 + 32;
            return $faranheit;
        } else if ($unit === 'F') {
            $celsius = ($temperature - 32) * 5 / 9;
            return $celsius;
        } else {
            throw new \Exception('Unit should be C or F');
        }



    }
    

}
