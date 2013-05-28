<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SergeiK\VladAuto33Bundle\Entity\PricesWithoutDriver;

/**
 * SergeiK\VladAuto33Bundle\Entity\Car
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SergeiK\VladAuto33Bundle\Repository\CarRepository")
 */
class Car
{
    const MANUAL    = 1;
    const AUTOMATIC = 2;
    const VARIATOR  = 3;
    const ROBOT     = 4;
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
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    protected $name;

    /**
     * @var date car's manufacture year
     * @ORM\Column(name="year", type="date", nullable=false)
     */
    protected $year;

    /**
     * @var transmission
     * @ORM\Column(name="transmission", type="smallint", nullable=false)
     */
    protected $transmission;

    /**
     * @ORM\OneToOne(targetEntity="PricesWithoutDriver", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $pricesWithoutDriver;

    /**
     * @ORM\OneToOne(targetEntity="PricesWithDriver", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $pricesWithDriver;

    /**
     * @ORM\OneToOne(targetEntity="PricesForWedding", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $pricesForWedding;

    /**
     * @ORM\OneToOne(targetEntity="Additions", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $additions;

    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="car", cascade={"persist"}, orphanRemoval=true)
     */
    private $photos;

    /**
     * @var bool is published
     * @ORM\Column(name="published", type="boolean")
     */
    protected $published;

    /**
     * @ORM\Column(name="info", type="text", nullable=true)
     */
    protected $info;

    /**
     * @ORM\Column(name="consumption", type="float", nullable=false)
     */
    protected $consumption;

    /**
     * @ORM\Column(name="deposit", type="decimal", scale=2, nullable=false)
     */
    protected $deposit;

    /**
     * @ORM\Column(name="seats", type="smallint", nullable=false)
     */
    protected $seats;

    /**
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    protected $width;

    /**
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    protected $height;

    /**
     * @ORM\Column(name="depth", type="integer", nullable=true)
     */
    protected $depth;

    /**
     * @ORM\Column(name="capacity", type="integer", nullable=true)
     */
    protected $capacity;

    /**
     * @return path to main photo
     */
    public function getMainPhotoPath()
    {
        foreach($this->photos as $photo)
        {
            if($photo->getMain())
            {
                return $photo->getThumbWebPath();
            }
        }
        return false;
    }

    public function getTransmissionString()
    {
        return self::getTransmissionName($this->getTransmission());
    }

    public static function getTransmissionName($type = false)
    {
        switch($type)
        {
            case self::MANUAL       : return 'Механическая';
            case self::AUTOMATIC    : return 'Автоматическая';
            case self::VARIATOR     : return 'Вариатор';
            case self::ROBOT        : return 'Робот';
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

    /**
     * Set pricesWithDriver
     *
     * @param SergeiK\VladAuto33Bundle\Entity\PricesWithDriver $pricesWithDriver
     * @return Car
     */
    public function setPricesWithDriver(\SergeiK\VladAuto33Bundle\Entity\PricesWithDriver $pricesWithDriver = null)
    {
        $this->pricesWithDriver = $pricesWithDriver;
    
        return $this;
    }

    /**
     * Get pricesWithDriver
     *
     * @return SergeiK\VladAuto33Bundle\Entity\PricesWithDriver 
     */
    public function getPricesWithDriver()
    {
        return $this->pricesWithDriver;
    }

    /**
     * Set year
     *
     * @param \DateTime $year
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set pricesForWedding
     *
     * @param SergeiK\VladAuto33Bundle\Entity\PricesForWedding $pricesForWedding
     * @return Car
     */
    public function setPricesForWedding(\SergeiK\VladAuto33Bundle\Entity\PricesForWedding $pricesForWedding = null)
    {
        $this->pricesForWedding = $pricesForWedding;
    
        return $this;
    }

    /**
     * Get pricesForWedding
     *
     * @return SergeiK\VladAuto33Bundle\Entity\PricesForWedding
     */
    public function getPricesForWedding()
    {
        return $this->pricesForWedding;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add photos
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Photo $photos
     * @return Car
     */
    public function addPhoto(\SergeiK\VladAuto33Bundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;
    
        return $this;
    }

    /**
     * Remove photos
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Photo $photos
     */
    public function removePhoto(\SergeiK\VladAuto33Bundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set transmission
     *
     * @param integer $transmission
     * @return Car
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    
        return $this;
    }

    /**
     * Get transmission
     *
     * @return integer 
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Car
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Car
     */
    public function setInfo($info)
    {
        $this->info = $info;
    
        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set consumption
     *
     * @param float $consumption
     * @return Car
     */
    public function setConsumption($consumption)
    {
        $this->consumption = $consumption;
    
        return $this;
    }

    /**
     * Get consumption
     *
     * @return float 
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Set deposit
     *
     * @param float $deposit
     * @return Car
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;
    
        return $this;
    }

    /**
     * Get deposit
     *
     * @return float 
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set additions
     *
     * @param SergeiK\VladAuto33Bundle\Entity\Additions $additions
     * @return Car
     */
    public function setAdditions(\SergeiK\VladAuto33Bundle\Entity\Additions $additions = null)
    {
        $this->additions = $additions;
    
        return $this;
    }

    /**
     * Get additions
     *
     * @return SergeiK\VladAuto33Bundle\Entity\Additions 
     */
    public function getAdditions()
    {
        return $this->additions;
    }

    /**
     * Set seats
     *
     * @param integer $seats
     * @return Car
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    
        return $this;
    }

    /**
     * Get seats
     *
     * @return integer 
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return Car
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Car
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     * @return Car
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Car
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    
        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}