<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver;

/**
 * SergeiK\VladAuto33Bundle\Entity\Car
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Car
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string car's name
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @ORM\OneToOne(targetEntity="PricesWithoutDriver", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $pricesWithoutDriver;


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
     * @return Car
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
     * Set pricesWithoutDriver
     *
     * @param SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver $pricesWithoutDriver
     * @return Car
     */
    public function setPricesWithoutDriver(\SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver $pricesWithoutDriver = null)
    {
        $this->pricesWithoutDriver = $pricesWithoutDriver;
    
        return $this;
    }

    /**
     * Get pricesWithoutDriver
     *
     * @return SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver 
     */
    public function getPricesWithoutDriver()
    {
        return $this->pricesWithoutDriver;
    }
}