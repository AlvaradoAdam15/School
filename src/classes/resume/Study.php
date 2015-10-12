<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 19:37
 */

namespace Com\Iesebre\Dam2\adamalvarado\resume;

class Study
{
    public $name; //Name Study

    public $description; //Description Study

    public $yearsDuration; //Duration Study with years

    public $category; //Categoty Study for example Superior Module, College...

    /**
     * Study constructor.
     * @param $name
     * @param $description
     * @param $yearsDuration
     * @param $category
     */
    public function __construct($name, $description, $yearsDuration, $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->yearsDuration = $yearsDuration;
        $this->category = $category;
    }

    /**
     * @return mixed
     * Getter Name Study
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * Setter Name Study
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     * Getter Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * Setter Description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     * Getter Years Duration
     */
    public function getYearsDuration()
    {
        return $this->yearsDuration;
    }

    /**
     * @param mixed $yearsDuration
     * Setter Years Duration
     */
    public function setYearsDuration($yearsDuration)
    {
        $this->yearsDuration = $yearsDuration;
    }

}