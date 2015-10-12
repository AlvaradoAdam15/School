<?php

namespace Com\Iesebre\Dam2\adamalvarado\persons;

use Com\Iesebre\Dam2\adamalvarado\otherClasses\Location;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 10/10/15
 * Time: 18:45
 */
class Person
{
    public $personalId; //Document NIF, NIE , DNI
    public $givenName; //Name
    public $sn1; //Surname
    public $sn2; //Secon Surname
    public $email; //Email Address
    public $locality; //Loacality
    public $postalCode; //Postal Code
    public $state; //State
    public $country; //Country

    /**
     * Person constructor.
     * @param $personalId
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $locality
     * @param $postalCode
     * @param $state
     * @param $country
     */
    public function __construct($personalId, $givenName, $sn1, $sn2, $email, Location $locality, $postalCode, $state, $country)
    {
        $this->personalId = $personalId;
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->locality = $locality;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
    }

    /**
     * @return mixed
     * Getter PersonalID
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     * Setter PersonalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    /**
     * @return mixed
     * Getter Given Name
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     * Setter Given Name
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     * Getter sn1
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     * Setter sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return mixed
     * Getter sn2
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     * Setter sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     * Getter email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * Setter email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     * Getter locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param mixed $locality
     * Setter locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     * Getter postal code
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     * Setter postal code
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     * Getter state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * Setter state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     *Getter country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * Setter country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }


}