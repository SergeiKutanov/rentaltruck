<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PricesWithoutDriver
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
     * @ORM\OneToOne(targetEntity="Car", inversedBy="pricesWithoutDriver")
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

    /**
     * @var decimal price for one day
     * @ORM\Column(name="day", type="decimal", scale=2, nullable=false)
     */
    protected $day;

    /**
     * @var decimal price from three days to five
     * @ORM\Column(name="threeDays", type="decimal", scale=2, nullable=false)
     */
    protected $threeDays;

    /**
     * @var decimal price for one week
     * @ORM\Column(name="week", type="decimal", scale=2, nullable=false)
     */
    protected  $week;



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
     * Set day
     *
     * @param float $day
     * @return PricesWithoutDriver
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return float 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set threeDays
     *
     * @param float $threeDays
     * @return PricesWithoutDriver
     */
    public function setThreeDays($threeDays)
    {
        $this->threeDays = $threeDays;
    
        return $this;
    }

    /**
     * Get threeDays
     *
     * @return float 
     */
    public function getThreeDays()
    {
        return $this->threeDays;
    }

    /**
     * Set week
     *
     * @param float $week
     * @return PricesWithoutDriver
     */
    public function setWeek($week)
    {
        $this->week = $week;
    
        return $this;
    }

    /**
     * Get week
     *
     * @return float 
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set car
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Car $car
     * @return PricesWithoutDriver
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