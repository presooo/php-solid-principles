<?php

class EmployeeSalaryService
{
    public function salary(Employee $employee, EmployeeSalary $employeeSalaryService): Salary
    {
        return $$employeeSalaryService->calculate($employee);
    }
}
