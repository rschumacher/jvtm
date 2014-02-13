<?php

namespace Ebbe\SubjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\SubjectBundle\Entity\VersionRepository")
 */
class Version
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
     * @ORM\Column(name="change log reference", type="string", length=255)
     */
    private $changeLogReference;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="lifecycle status", type="string", length=16)
     */
    private $lifecycleStatus;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="components", type="object")
     */
    private $components;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="subject", type="object")
     */
    private $subject;


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
     * @return Version
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
     * @return Version
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
     * Set changeLogReference
     *
     * @param string $changeLogReference
     * @return Version
     */
    public function setChangeLogReference($changeLogReference)
    {
        $this->changeLogReference = $changeLogReference;
    
        return $this;
    }

    /**
     * Get changeLogReference
     *
     * @return string 
     */
    public function getChangeLogReference()
    {
        return $this->changeLogReference;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Version
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set lifecycleStatus
     *
     * @param string $lifecycleStatus
     * @return Version
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
     * Set components
     *
     * @param \stdClass $components
     * @return Version
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

    /**
     * Set subject
     *
     * @param \stdClass $subject
     * @return Version
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return \stdClass 
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
