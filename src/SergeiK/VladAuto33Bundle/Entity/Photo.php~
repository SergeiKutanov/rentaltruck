<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * SergeiK\VladAuto33Bundle\Entity\Photo
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Photo
{
    const THUMB_WIDTH = 211;
    const IMG_WIDTH = 800;
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Car", inversedBy="photos")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */
    private $car;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * @var checkbox main photo
     * @ORM\Column(name="main", type="boolean")
     */
    private $main;

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    public function getThumbWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/thumbs/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return '/uploads/images/cars';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if($this->file !== null)
        {
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if($this->file === null)
        {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->path);

        //creating thumbnail
        $im = imagecreatefromjpeg($this->getAbsolutePath());

        //resize main photo to max of 800 pixls width
        if(imagesx($im) > self::IMG_WIDTH)
        {
            $new_h = imagesy($im)/(imagesx($im)/self::IMG_WIDTH);
            $im_resized = imagecreatetruecolor(800, $new_h);
            imagecopyresampled($im_resized, $im, 0, 0, 0, 0, self::IMG_WIDTH, $new_h, imagesx($im), imagesy($im));
            imagejpeg($im_resized, $this->getAbsolutePath());
            unset($im);
        }

        $im = imagecreatefromjpeg($this->getAbsolutePath());
        $h = imagesy($im)/(imagesx($im)/self::THUMB_WIDTH);
        $th = imagecreatetruecolor(self::THUMB_WIDTH, $h);
        imagecopyresampled($th, $im, 0, 0, 0, 0, self::THUMB_WIDTH, $h, imagesx($im), imagesy($im));
        imagejpeg($th, $this->getUploadRootDir().'/thumbs/'.$this->path);
        //------------------------------------------------------------------

        //add watermark
        $color = imagecolorallocate($im, 255, 255, 0);
        imagestring($im, 5, 10, 10, 'VladAuto33.ru', $color);
        imagejpeg($im, $this->getAbsolutePath());
        //------------------------------------------------------------------

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if($file = $this->getAbsolutePath())
        {
            unlink($file);
        }

        if($file = $this->getUploadRootDir().'/thumbs/'.$this->path)
        {
            unlink($file);
        }
    }

    /*
    public function upload()
    {
        if(null === $this->file)
        {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->path = $this->file->getClientOriginalName();
        $this->file = null;
    }
    */

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
     * @return Photo
     */
    public function setCar(\SergeiK\VladAuto33Bundle\Entity\Car $car = null)
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
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set main
     *
     * @param boolean $main
     * @return Photo
     */
    public function setMain($main)
    {
        $this->main = $main;
    
        return $this;
    }

    /**
     * Get main
     *
     * @return boolean 
     */
    public function getMain()
    {
        return $this->main;
    }
}