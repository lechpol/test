<?php

/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 17.10.15
 * Time: 11:41
 */

abstract class AbstractPerson
{
   const GENDER_MALE= 'M';
    const GENDER_FEMALE="F";
    private $name;
    private $surname;
    private $age;
    private $gender;

    public function _construct($name, $surname, $age, $gender =self::GENDER_MALE)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function  setName($name)
    {

        $this->name=$name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setSurname($surname)
    {
        $this->surname=$surname;
        return $this;

    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function hello()
    {
        return $this->name;
    }
    abstract public function getSalaryYer();

}