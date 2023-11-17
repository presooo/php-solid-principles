<?php

/**
 * Issue: In the future, if a new type(Part-time Employee) comes then the code needs to be modified 
 * to calculate the salary based on employee type.
 */
class EmployeeSalary
{
    public function calculate(Employee $employee): Salary
    {
        $type = $employee->getType();

        switch ($type) {
            case Employee::PERMANENT:
                return;
                break;
            case Employee::CONTRACTOR:
                return;
                break;
        }

        throw new Exception("Employee type not recognised...");
    }
}
