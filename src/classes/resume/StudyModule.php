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
    public $nameModule; //Name Module

    /**
     * StudyModule constructor.
     * @param $nameModule
     */
    public function __construct($nameModule)
    {
        $this->nameModule = $nameModule;
    }


    /**
     * @return mixed
     */
    public function getNameModule()
    {
        return $this->nameModule;
    }

    /**
     * @param mixed $nameModule
     */
    public function setNameModule($nameModule)
    {
        $this->nameModule = $nameModule;
    }



}