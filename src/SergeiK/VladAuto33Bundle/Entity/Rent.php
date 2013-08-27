<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rent
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rent
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
     * @var \DateTime
     *
     * @ORM\Column(name="pickUpDate", type="date")
     */
    private $pickUpDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="returnDate", type="date")
     */
    private $returnDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickUpMillage", type="integer")
     */
    private $pickUpMillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="returnMillage", type="integer", nullable=true)
     */
    private $returnMillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment", type="integer")
     */
    private $payment;

    /**
     * @var integer
     *
     * @ORM\Column(name="deposit", type="integer")
     */
    private $deposit;

    /**
     * @var integer
     *
     * @ORM\Column(name="returnDeposit", type="integer", nullable=true)
     */
    private $returnDeposit;

    /**
     * @var string
     *
     * @ORM\Column(name="usageArea", type="string", length=255, nullable=true)
     */
    private $usageArea;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @ORM\ManyToOne(targetEntity="Car")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

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
     * Set pickUpDate
     *
     * @param \DateTime $pickUpDate
     * @return Rent
     */
    public function setPickUpDate($pickUpDate)
    {
        $this->pickUpDate = $pickUpDate;
    
        return $this;
    }

    /**
     * Get pickUpDate
     *
     * @return \DateTime 
     */
    public function getPickUpDate()
    {
        return $this->pickUpDate;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     * @return Rent
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    
        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime 
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set pickUpMillage
     *
     * @param integer $pickUpMillage
     * @return Rent
     */
    public function setPickUpMillage($pickUpMillage)
    {
        $this->pickUpMillage = $pickUpMillage;
    
        return $this;
    }

    /**
     * Get pickUpMillage
     *
     * @return integer 
     */
    public function getPickUpMillage()
    {
        return $this->pickUpMillage;
    }

    /**
     * Set returnMillage
     *
     * @param integer $returnMillage
     * @return Rent
     */
    public function setReturnMillage($returnMillage)
    {
        $this->returnMillage = $returnMillage;
    
        return $this;
    }

    /**
     * Get returnMillage
     *
     * @return integer 
     */
    public function getReturnMillage()
    {
        return $this->returnMillage;
    }

    /**
     * Set payment
     *
     * @param integer $payment
     * @return Rent
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    
        return $this;
    }

    /**
     * Get payment
     *
     * @return integer 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set deposit
     *
     * @param integer $deposit
     * @return Rent
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    
        return $this;
    }

    /**
     * Get deposit
     *
     * @return integer 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set returnDeposit
     *
     * @param integer $returnDeposit
     * @return Rent
     */
    public function setReturnDeposit($returnDeposit)
    {
        $this->returnDeposit = $returnDeposit;
    
        return $this;
    }

    /**
     * Get returnDeposit
     *
     * @return integer 
     */
    public function getReturnDeposit()
    {
        return $this->returnDeposit;
    }

    /**
     * Set usageArea
     *
     * @param string $usageArea
     * @return Rent
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
     * Set notes
     *
     * @param string $notes
     * @return Rent
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set car
     *
     * @param \SergeiK\VladAuto33Bundle\Entity\Car $car
     * @return Rent
     */
    public function setCar(\SergeiK\VladAuto33Bundle\Entity\Car $car = null)
    {
        $this->car = $car;
    
        return $this;
    }

    /**
     * Get car
     *
     * @return \SergeiK\VladAuto33Bundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set client
     *
     * @param \SergeiK\VladAuto33Bundle\Entity\Client $client
     * @return Rent
     */
    public function setClient(\SergeiK\VladAuto33Bundle\Entity\Client $client = null)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \SergeiK\VladAuto33Bundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
}