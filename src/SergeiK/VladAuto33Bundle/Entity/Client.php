<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middleName", type="string", length=255)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="driverLicence", type="string", length=10)
     */
    private $driverLicence;

    /**
     * @var integer
     *
     * @ORM\Column(name="expirience", type="integer")
     */
    private $expirience;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="passportNumber", type="string", length=10)
     */
    private $passportNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="passportIssuer", type="string", length=255)
     */
    private $passportIssuer;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="usageArea", type="string", length=255)
     */
    private $usageArea;

    /**
     * @var boolean
     *
     * @ORM\Column(name="punctuality", type="boolean")
     */
    private $punctuality;

    public function __toString(){
        return $this->getLastName()." ".$this->getFirstName()." ".$this->getMiddleName()." ".$this->getPassportNumber();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return Client
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Client
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set driverLicence
     *
     * @param string $driverLicence
     * @return Client
     */
    public function setDriverLicence($driverLicence)
    {
        $this->driverLicence = $driverLicence;
    
        return $this;
    }

    /**
     * Get driverLicence
     *
     * @return string 
     */
    public function getDriverLicence()
    {
        return $this->driverLicence;
    }

    /**
     * Set expirience
     *
     * @param integer $expirience
     * @return Client
     */
    public function setExpirience($expirience)
    {
        $this->expirience = $expirience;
    
        return $this;
    }

    /**
     * Get expirience
     *
     * @return integer 
     */
    public function getExpirience()
    {
        return $this->expirience;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set passportNumber
     *
     * @param string $passportNumber
     * @return Client
     */
    public function setPassportNumber($passportNumber)
    {
        $this->passportNumber = $passportNumber;
    
        return $this;
    }

    /**
     * Get passportNumber
     *
     * @return string 
     */
    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    /**
     * Set passportIssuer
     *
     * @param string $passportIssuer
     * @return Client
     */
    public function setPassportIssuer($passportIssuer)
    {
        $this->passportIssuer = $passportIssuer;
    
        return $this;
    }

    /**
     * Get passportIssuer
     *
     * @return string 
     */
    public function getPassportIssuer()
    {
        return $this->passportIssuer;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set usageArea
     *
     * @param string $usageArea
     * @return Client
     */
    public function setUsageArea($usageArea)
    {
        $this->usageArea = $usageArea;
    
        return $this;
    }

    /**
     * Get usageArea
     *
     * @return string 
     */
    public function getUsageArea()
    {
        return $this->usageArea;
    }

    /**
     * Set punctuality
     *
     * @param boolean $punctuality
     * @return Client
     */
    public function setPunctuality($punctuality)
    {
        $this->punctuality = $punctuality;
    
        return $this;
    }

    /**
     * Get punctuality
     *
     * @return boolean 
     */
    public function getPunctuality()
    {
        return $this->punctuality;
    }
}
