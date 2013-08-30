<?php

namespace Raep\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buildup
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Raep\ConfigMgtBundle\Entity\BuildupRepository")
 */
class Buildup
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="use_status", type="string", length=255)
     */
    private $useStatus;


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
     * @return Buildup
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
     * Set description
     *
     * @param string $description
     * @return Buildup
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set useStatus
     *
     * @param string $useStatus
     * @return Buildup
     */
    public function setUseStatus($useStatus)
    {
        $this->useStatus = $useStatus;
    
        return $this;
    }

    /**
     * Get useStatus
     *
     * @return string 
     */
    public function getUseStatus()
    {
        return $this->useStatus;
    }
}
