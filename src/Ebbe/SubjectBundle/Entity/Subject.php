<?php

namespace Ebbe\SubjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\SubjectBundle\Entity\SubjectRepository")
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
     * @ORM\Column(name="identification", type="string", length=255)
     */
    private $identification;

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
     * @ORM\Column(name="reference", type="text")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="lifecycle status", type="string", length=16)
     */
    private $lifecycleStatus;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="versions", type="object")
     */
    private $versions;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="components", type="object")
     */
    private $components;


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
     * Set identification
     *
     * @param string $identification
     * @return Subject
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;
    
        return $this;
    }

    /**
     * Get identification
     *
     * @return string 
     */
    public function getIdentification()
    {
        return $this->identification;
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
     * Set owner
     *
     * @param string $owner
     * @return Subject
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set lifecycleStatus
     *
     * @param string $lifecycleStatus
     * @return Subject
     */
    public function setLifecycleStatus($lifecycleStatus)
    {
        $this->lifecycleStatus = $lifecycleStatus;
    
        return $this;
    }

    /**
     * Get lifecycleStatus
     *
     * @return string 
     */
    public function getLifecycleStatus()
    {
        return $this->lifecycleStatus;
    }

    /**
     * Set versions
     *
     * @param \stdClass $versions
     * @return Subject
     */
    public function setVersions($versions)
    {
        $this->versions = $versions;
    
        return $this;
    }

    /**
     * Get versions
     *
     * @return \stdClass 
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * Set components
     *
     * @param \stdClass $components
     * @return Subject
     */
    public function setComponents($components)
    {
        $this->components = $components;
    
        return $this;
    }

    /**
     * Get components
     *
     * @return \stdClass 
     */
    public function getComponents()
    {
        return $this->components;
    }
}
