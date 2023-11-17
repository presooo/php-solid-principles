<?php

interface EmployeeSalary
{
    public function calculate(Employee $employee): Salary;
}
