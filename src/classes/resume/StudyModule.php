<?php

namespace Com\Iesebre\Dam2\adamalvarado\resume;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:17
 */
class StudyModule extends Study
{
    public $name; //Name Module

    /**
     * @return mixed
     * Getter Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * Setter Name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}