<?php

class Airplane implements VehicleInterface
{

    public function accelerate()
    {
        echo 'Accelerating!';
    }

    public function brake()
    {
        echo 'Braking!';
    }

    public function fly()
    {
        echo 'Flying an airplane!';
    }
}
