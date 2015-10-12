<?php

namespace Com\Iesebre\Dam2\adamalvarado\resume;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:24
 */
class StudySubModule extends StudyModule
{
    public $formativeUnit; //Formative Unit

    public $hoursDuration; //Duration SubModule with Hours

    /**
     * StudySubModule constructor.
     * @param $formativeUnit
     * @param $hoursDuration
     */
    public function __construct($formativeUnit, $hoursDuration)
    {
        $this->formativeUnit = $formativeUnit;
        $this->hoursDuration = $hoursDuration;
    }


    /**
     * @return mixed
     * Getter Formative Unit
     */
    public function getFormativeUnit()
    {
        return $this->formativeUnit;
    }

    /**
     * @param mixed $formativeUnit
     * Setter Formative Unit
     */
    public function setFormativeUnit($formativeUnit)
    {
        $this->formativeUnit = $formativeUnit;
    }

    /**
     * @return mixed
     * Getter Hours Duration
     */
    public function getHoursDuration()
    {
        return $this->hoursDuration;
    }

    /**
     * @param mixed $hoursDuration
     * Setter HoursDuration
     */
    public function setHoursDuration($hoursDuration)
    {
        $this->hoursDuration = $hoursDuration;
    }


}