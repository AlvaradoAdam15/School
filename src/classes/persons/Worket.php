<?php

namespace Com\Iesebre\Dam2\adamalvarado\persons;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:02
 */

trait Worket
{
    public $salary; //Salary

    /**
     * @return mixed
     * Getter Salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     * Setter Salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}