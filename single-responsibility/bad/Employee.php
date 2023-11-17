<?php

/**
 * The class is tightly coupled, hard to maintain, multiple reasons to modify it...
 */
class Employee
{
    private string $firstName;
    private string $lastName;
    private int $salary;
    private DateTime $dateJoined;

    // --- GETTERS ---

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function salary(): int
    {
        return $this->salary;
    }

    public function dateJoined(): DateTime
    {
        return $this->dateJoined;
    }

    // --- SETTERS ---

    public function setFirstName(string $name): self
    {
        $this->firstName = $name;
        return $this;
    }

    public function setLastName(string $name): self
    {
        $this->lastName = $name;
        return $this;
    }

    public function setSalary(int $amount): self
    {
        $this->salary = $amount;
        return $this;
    }

    // --- CALCULATIONS ---

    public function calculateSalaryTax(): int
    {
        //TBC
    }

    public function calculateTenure(): int
    {
        //TBC
    }

    // --- DB ACTIONS ---


    public function save(EmployeeDto $dto): self
    {
        //TBC
        return $this;
    }

    public function edit(ChangesDto $dto): self
    {
        //TBC
        return $this;
    }
}
