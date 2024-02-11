<?php

/**
 * Issue: In the future, if a new type(Part-time Employee) comes then the code needs to be modified 
 * to calculate the salary based on employee type.
 */
class EmployeeSalaryService
{
    public function salary(Employee $employee): Salary
    {
        $type = $employee->getType();

        $salary = 0;

        switch ($type) {
            case Employee::PERMANENT:
                $salary = $employee->basicPay() + $employee->totalWorkingDays() + $employee->bonus();
                break;
            case Employee::CONTRACTOR:
                $salary = $employee->basicPay() + $employee->totalWorkingDays();
                break;
        }

        return $salary;
    }
}
