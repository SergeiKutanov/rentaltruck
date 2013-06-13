<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Organisation
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="INN", type="string", length=10)
     */
    private $iNN;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account", type="string", length=20)
     */
    private $bankAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="corr_account", type="string", length=20)
     */
    private $corrAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="BIC", type="string", length=9)
     */
    private $bIC;

    /**
     * @var string
     *
     * @ORM\Column(name="CEO_first_name", type="string", length=255)
     */
    private $cEOFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="CEO_middle_name", type="string", length=255)
     */
    private $cEOMiddleName;

    /**
     * @var string
     *
     * @ORM\Column(name="CEO_last_name", type="string", length=255)
     */
    private $cEOLastName;


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
     * Set name
     *
     * @param string $name
     * @return Organisation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Organisation
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
     * Set iNN
     *
     * @param string $iNN
     * @return Organisation
     */
    public function setINN($iNN)
    {
        $this->iNN = $iNN;
    
        return $this;
    }

    /**
     * Get iNN
     *
     * @return string 
     */
    public function getINN()
    {
        return $this->iNN;
    }

    /**
     * Set bankAccount
     *
     * @param string $bankAccount
     * @return Organisation
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
    
        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return string 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set corrAccount
     *
     * @param string $corrAccount
     * @return Organisation
     */
    public function setCorrAccount($corrAccount)
    {
        $this->corrAccount = $corrAccount;
    
        return $this;
    }

    /**
     * Get corrAccount
     *
     * @return string 
     */
    public function getCorrAccount()
    {
        return $this->corrAccount;
    }

    /**
     * Set bIC
     *
     * @param string $bIC
     * @return Organisation
     */
    public function setBIC($bIC)
    {
        $this->bIC = $bIC;
    
        return $this;
    }

    /**
     * Get bIC
     *
     * @return string 
     */
    public function getBIC()
    {
        return $this->bIC;
    }

    /**
     * Set cEOFirstName
     *
     * @param string $cEOFirstName
     * @return Organisation
     */
    public function setCEOFirstName($cEOFirstName)
    {
        $this->cEOFirstName = $cEOFirstName;
    
        return $this;
    }

    /**
     * Get cEOFirstName
     *
     * @return string 
     */
    public function getCEOFirstName()
    {
        return $this->cEOFirstName;
    }

    /**
     * Set cEOMiddleName
     *
     * @param string $cEOMiddleName
     * @return Organisation
     */
    public function setCEOMiddleName($cEOMiddleName)
    {
        $this->cEOMiddleName = $cEOMiddleName;
    
        return $this;
    }

    /**
     * Get cEOMiddleName
     *
     * @return string 
     */
    public function getCEOMiddleName()
    {
        return $this->cEOMiddleName;
    }

    /**
     * Set cEOLastName
     *
     * @param string $cEOLastName
     * @return Organisation
     */
    public function setCEOLastName($cEOLastName)
    {
        $this->cEOLastName = $cEOLastName;
    
        return $this;
    }

    /**
     * Get cEOLastName
     *
     * @return string 
     */
    public function getCEOLastName()
    {
        return $this->cEOLastName;
    }
}
