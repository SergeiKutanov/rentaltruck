<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SergeiK\VladAuto33Bundle\Entity\PricesForWedding
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PricesForWedding
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
     * @var decimal price for wedding car per hour
     * @ORM\Column(name="hour", type="decimal", scale=2, nullable=false)
     */
    protected $hour;

    /**
     * @ORM\OneToOne(targetEntity="Car", inversedBy="pricesForWedding")
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

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
     * Set hour
     *
     * @param float $hour
     * @return PricesForWedding
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    
        return $this;
    }

    /**
     * Get hour
     *
     * @return float 
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set car
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Car $car
     * @return PricesForWedding
     */
    public function setCar(\SergeiK\VladAuto33Bundle\Entity\Car $car)
    {
        $this->car = $car;
    
        return $this;
    }

    /**
     * Get car
     *
     * @return SergeiK\VladAuto33Bundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }
}