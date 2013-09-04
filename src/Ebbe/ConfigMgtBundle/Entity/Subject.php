<?php

namespace Ebbe\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\ConfigMgtBundle\Entity\SubjectRepository")
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
     * @var boolean
     *
     * @ORM\Column(name="use_as_sut", type="boolean")
     */
    private $useAsSut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="singular", type="boolean")
     */
    private $singular;


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
     * Set useAsSut
     *
     * @param boolean $useAsSut
     * @return Subject
     */
    public function setUseAsSut($useAsSut)
    {
        $this->useAsSut = $useAsSut;
    
        return $this;
    }

    /**
     * Get useAsSut
     *
     * @return boolean 
     */
    public function getUseAsSut()
    {
        return $this->useAsSut;
    }

    /**
     * Set singular
     *
     * @param boolean $singular
     * @return Subject
     */
    public function setSingular($singular)
    {
        $this->singular = $singular;
    
        return $this;
    }

    /**
     * Get singular
     *
     * @return boolean 
     */
    public function getSingular()
    {
        return $this->singular;
    }
}
