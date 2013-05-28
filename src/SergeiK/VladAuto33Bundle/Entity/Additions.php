<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SergeiK\VladAuto33Bundle\Entity\Additions
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Additions
{
    const NO_CONDITIONER = 0;
    const AIRCOND = 1;
    const CLIMATE_ONE = 2;
    const CLIMATE_TWO = 3;
    const CLIMATE_MORE = 4;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Car", inversedBy="additions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

    /**
     * @ORM\Column(name="abs", type="boolean", nullable=true)
     */
    protected $abs;

    /**
     * @ORM\Column(name="antislip", type="boolean", nullable=true)
     */
    protected $antislip;

    /**
     * @ORM\Column(name="lightsensor", type="boolean", nullable=true)
     */
    protected $lightsensor;

    /**
     * @ORM\Column(name="rainsensor", type="boolean", nullable=true)
     */
    protected $rainsensor;

    /**
     * @ORM\Column(name="conditioner", type="smallint", nullable=false)
     */
    protected $conditioner;

    /**
     * @ORM\Column(name="warmseats", type="boolean", nullable=true)
     */
    protected $warmseats;

    /**
     * @ORM\Column(name="power_steering", type="boolean", nullable=true)
     */
    protected $power_steering;

    public function getConditionerString()
    {
        return self::getConditionerName($this->getConditioner());
    }

    public static function getConditionerName($type = false)
    {
        switch($type)
        {
            case self::NO_CONDITIONER   : return 'Нет';
            case self::AIRCOND          : return 'Да';
            case self::CLIMATE_ONE      : return 'Климат 1-зонный';
            case self::CLIMATE_TWO      : return 'Климат 2-зонный';
            case self::CLIMATE_MORE     : return 'Климат больше двух зон';
        }
        return false;
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
     * Set car
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Car $car
     * @return Additions
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

    /**
     * Set abs
     *
     * @param boolean $abs
     * @return Additions
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;
    
        return $this;
    }

    /**
     * Get abs
     *
     * @return boolean 
     */
    public function getAbs()
    {
        return $this->abs;
    }

    /**
     * Set antislip
     *
     * @param boolean $antislip
     * @return Additions
     */
    public function setAntislip($antislip)
    {
        $this->antislip = $antislip;
    
        return $this;
    }

    /**
     * Get antislip
     *
     * @return boolean 
     */
    public function getAntislip()
    {
        return $this->antislip;
    }

    /**
     * Set lightsensor
     *
     * @param boolean $lightsensor
     * @return Additions
     */
    public function setLightsensor($lightsensor)
    {
        $this->lightsensor = $lightsensor;
    
        return $this;
    }

    /**
     * Get lightsensor
     *
     * @return boolean 
     */
    public function getLightsensor()
    {
        return $this->lightsensor;
    }

    /**
     * Set rainsensor
     *
     * @param boolean $rainsensor
     * @return Additions
     */
    public function setRainsensor($rainsensor)
    {
        $this->rainsensor = $rainsensor;
    
        return $this;
    }

    /**
     * Get rainsensor
     *
     * @return boolean 
     */
    public function getRainsensor()
    {
        return $this->rainsensor;
    }

    /**
     * Set conditioner
     *
     * @param integer $conditioner
     * @return Additions
     */
    public function setConditioner($conditioner)
    {
        $this->conditioner = $conditioner;
    
        return $this;
    }

    /**
     * Get conditioner
     *
     * @return integer 
     */
    public function getConditioner()
    {
        return $this->conditioner;
    }

    /**
     * Set warmseats
     *
     * @param boolean $warmseats
     * @return Additions
     */
    public function setWarmseats($warmseats)
    {
        $this->warmseats = $warmseats;
    
        return $this;
    }

    /**
     * Get warmseats
     *
     * @return boolean 
     */
    public function getWarmseats()
    {
        return $this->warmseats;
    }

    /**
     * Set power_steering
     *
     * @param boolean $powerSteering
     * @return Additions
     */
    public function setPowerSteering($powerSteering)
    {
        $this->power_steering = $powerSteering;
    
        return $this;
    }

    /**
     * Get power_steering
     *
     * @return boolean 
     */
    public function getPowerSteering()
    {
        return $this->power_steering;
    }
}