<?php

abstract class Employee{
    protected $name;
    protected $salary;
    public function setName($name){
        $this->name = $name;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    abstract public function getInfor();
}
class Manager extends Employee{
    public function getInfor(){
        return ['nameManager' => $this->name, 'salaryManager' => $this->salary];

    }
}
class Staff extends Employee{
    public function getInfor(){
        return ['nameStaff' => $this->name, 'salaryStaff' => $this->salary];

    } 
}
$manager = new Manager();
$manager->setName('Nguyễn Văn An');
$manager->setSalary('10.000.000');
print_r($manager->getInfor());
echo "<br>";
$staff = new Staff();
$staff->setName('Nguyễn Thị Tâm');
$staff->setSalary('3.000.000');
print_r($staff->getInfor());