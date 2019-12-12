<?php

//A
class Employee
{
    private $id;
    private $name;
    private $salary;

    public function setId($_id)
    {
        $this->id = $_id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setSalary(int $_salary)
    {
        if ($_salary < 0) {
            throw new Exception("Employee's Salary must gather than 0, $_salary was passed!");
        }
        $this->salary = $_salary;
//        if ($_salary > 0) {
//            $this->salary = $_salary;
//        } else {
//            $this->salary = 0;
//        }
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}

//B
echo "<pre>";
$emp = new Employee();
$emp->setId("123");
$emp->setSalary(2000);

echo $emp->getId() . " get salary = " . $emp->getSalary();