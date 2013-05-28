<?php

namespace SergeiK\VladAuto33Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SergeiK\VladAuto33Bundle\Entity\Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}