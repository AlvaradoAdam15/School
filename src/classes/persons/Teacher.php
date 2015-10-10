<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 18:58
 */

namespace Com\Iesebre\Dam2\adamalvarado\persons;


class Teacher extends Person
{
    use Worket; //Use trait worket -> Salary

    public $specialitzation;

    /**
     * @return mixed
     * Getter Specialitzation
     */
    public function getSpecialitzation()
    {
        return $this->specialitzation;
    }

    /**
     * @param mixed $specialitzation
     * Setter Specialitzation
     */
    public function setSpecialitzation($specialitzation)
    {
        $this->specialitzation = $specialitzation;
    }


}