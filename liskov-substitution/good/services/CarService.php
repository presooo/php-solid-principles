<?php

class CarService
{

    public function fuelCar(CombustionEngineCar $car)
    {
        $fuel = $car->fuel();
    }

    public function chargeCar(ElectricCar $car)
    {
        $car->chargeBattery();
    }
}
