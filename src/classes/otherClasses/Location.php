<?php

namespace Com\Iesebre\Dam2\adamalvarado\otherclasses;


/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 20:21
 */
class Location
{

    public $location = array();  //Array locations

    /**
     * Location constructor.
     * @param array $location
     */
    public function __construct(array $location)
    {
        $this->location = $location;
    }

    /**
     * @return array
     * Getter Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param array $location
     * Setter Location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}