<?php

namespace Raep\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Raep\ConfigMgtBundle\Entity\SubjectRepository")
 */
class Subject
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="introduced", type="datetime")
     */
    private $introduced;

    /**
     * @var string
     *
     * @ORM\Column(name="lifecycle_status", type="string", length=255)
     */
    private $lifecycle_status;


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
     * @return Subject
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
     * @return Subject
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
     * Set reference
     *
     * @param string $reference
     * @return Subject
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set introduced
     *
     * @param \DateTime $introduced
     * @return Subject
     */
    public function setIntroduced($introduced)
    {
        $this->introduced = $introduced;
    
        return $this;
    }

    /**
     * Get introduced
     *
     * @return \DateTime 
     */
    public function getIntroduced()
    {
        return $this->introduced;
    }

    /**
     * Set lifecycle_status
     *
     * @param string $lifecycle_status
     * @return Subject
     */
    public function setLifecycleStatus($lifecycle_status)
    {
        $this->lifecycle_status = $lifecycle_status;
    
        return $this;
    }

    /**
     * Get lifecycle_status
     *
     * @return string 
     */
    public function getLifecycleStatus()
    {
        return $this->lifecycle_status;
    }
}
