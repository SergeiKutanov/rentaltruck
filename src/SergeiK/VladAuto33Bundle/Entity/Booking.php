<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SergeiK\VladAuto33Bundle\Entity\Booking
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="SergeiK\VladAuto33Bundle\Repository\BookingRepository")
 */
class Booking
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
     * @var client's name
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected $name;

    /**
     * @var booking start date
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    protected $start_date;

    /**
     * @var booking over date
     * @ORM\Column(name="over_date", type="date", nullable=false)
     */
    protected $over_date;

    /**
     * @var client's phone number
     * @ORM\Column(name="phone", type="string", nullable=false)
     */
    protected $phone;

    /**
     * @var client's email address
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    protected $email;

    /**
     * @var car
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    protected $car;

    /**
     * @var boolean idicates if the booking is active
     * @ORM\Column(name="active", type="boolean", nullable=true)
     * @return bool
     */
    protected $active = false;

    /**
     * @var shows if booking was processed
     * @ORM\Column(name="new", type="boolean", nullable=true)
     */
    protected $checked = false;

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
     * @return Booking
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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return Booking
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    
        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set over_date
     *
     * @param \DateTime $overDate
     * @return Booking
     */
    public function setOverDate($overDate)
    {
        $this->over_date = $overDate;
    
        return $this;
    }

    /**
     * Get over_date
     *
     * @return \DateTime 
     */
    public function getOverDate()
    {
        return $this->over_date;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Booking
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set car
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Car $car
     * @return Booking
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
     * Set phone
     *
     * @param string $phone
     * @return Booking
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
     * Set active
     *
     * @param boolean $active
     * @return Booking
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set checked
     *
     * @param boolean $checked
     * @return Booking
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    
        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean 
     */
    public function getChecked()
    {
        return $this->checked;
    }
}