<?php

class Car implements Vehicle
{

    public function accelerate()
    {
        echo 'Accelerating!';
    }

    public function brake()
    {
        echo 'Braking!';
    }
}
