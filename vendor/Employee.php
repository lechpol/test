<?php

/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 17.10.15
 * Time: 11:44
 */
namespace Academy;

class Employee extends AbstractPerson
{
    private $salary;
    private $commision;

 #   public  function __construct($name, $surname, $age, $salary, )
    public function  setSalary($salary)
    {
        $this->salary=$salary;
        return $this;
    }


    public function getSalaryYer()
    {
        return $this->salary * 12;
    }


}