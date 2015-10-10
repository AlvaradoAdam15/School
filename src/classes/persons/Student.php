<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 18:57
 */

namespace Com\Iesebre\Dam2\adamalvarado\persons;


class Student extends Person
{
    use Worket; //Use trait worket -> Salary

    public $dual = false; //Dual is a Students are Worcking

    public $classNameGroup; //Name Gropu Class

    /**
     * @return boolean
     * Getter Dual
     */
    public function isDual()
    {
        return $this->dual;
    }

    /**
     * @param boolean $dual
     * Setter Dual
     */
    public function setDual($dual)
    {
        $this->dual = $dual;
    }

    /**
     * @return mixed
     * Getter ClassNameGroup
     */
    public function getClassNameGroup()
    {
        return $this->classNameGroup;
    }

    /**
     * @param mixed $classNameGroup
     * Setter ClassNameGroup
     */
    public function setClassNameGroup($classNameGroup)
    {
        $this->classNameGroup = $classNameGroup;
    }


}