<?php

class EmployeeService
{
    private EmployeeRepository $repo;

    public function __construct(EmployeeRepository $repo)
    {
        $this->repo = $repo;
    }


    public function calculateSalaryTax(): int
    {
        //TBC
    }

    public function calculateTenure(): int
    {
        //TBC
    }
}
