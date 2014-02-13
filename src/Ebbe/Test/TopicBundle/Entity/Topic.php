<?php

namespace Ebbe\Test\TopicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ebbe\SubjectBundle\Entity\Subject as Subject;


/**
 * Topic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\Test\TopicBundle\Entity\TopicRepository")
 */
class Topic
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
     * @ORM\ManyToOne(targetEntity = "Ebbe\SubjectBundle\Entity\Subject")
     */
    private $subject;

    /**
     * @ORM\ManyToOne(targetEntity = "Source")
     */
    private $source;

    /**
     * @ORM\ManyToOne(targetEntity = "Environment")
     */
    private $environment;

    /**
     * @ORM\ManyToOne(targetEntity = "Focus")
     */
    private $focus;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity = "Intention")
     */
    private $intention;

    /**
     * @ORM\ManyToOne(targetEntity = "RoleProfile")
     */
    private $bDKRole;


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
     * Set subject
     *
     * @param \stdClass $subject
     * @return Topic
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

    /**
     * Set source
     *
     * @param string $source
     * @return Topic
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set environment
     *
     * @param \stdClass $environment
     * @return Topic
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    
        return $this;
    }

    /**
     * Get environment
     *
     * @return \stdClass 
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set focus
     *
     * @param string $focus
     * @return Topic
     */
    public function setFocus($focus)
    {
        $this->focus = $focus;
    
        return $this;
    }

    /**
     * Get focus
     *
     * @return string 
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Topic
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
     * Set intention
     *
     * @param string $intention
     * @return Topic
     */
    public function setIntention($intention)
    {
        $this->intention = $intention;
    
        return $this;
    }

    /**
     * Get intention
     *
     * @return string 
     */
    public function getIntention()
    {
        return $this->intention;
    }

    /**
     * Set bDKRole
     *
     * @param string $bDKRole
     * @return Topic
     */
    public function setBDKRole($bDKRole)
    {
        $this->bDKRole = $bDKRole;
    
        return $this;
    }

    /**
     * Get bDKRole
     *
     * @return string 
     */
    public function getBDKRole()
    {
        return $this->bDKRole;
    }
}
