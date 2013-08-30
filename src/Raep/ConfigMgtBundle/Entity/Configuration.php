<?php

namespace Raep\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Raep\ConfigMgtBundle\Entity\ConfigurationRepository")
 */
class Configuration
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
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="derived_from_version", type="string", length=255)
     */
    private $derivedFromVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="superseeded_by", type="string", length=255)
     */
    private $superseededBy;

    /**
     * @var string
     *
     * @ORM\Column(name="use_status", type="string", length=255)
     */
    private $useStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text")
     */
    private $comments;


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
     * Set version
     *
     * @param string $version
     * @return Configuration
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Configuration
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Configuration
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
     * Set derivedFromVersion
     *
     * @param string $derivedFromVersion
     * @return Configuration
     */
    public function setDerivedFromVersion($derivedFromVersion)
    {
        $this->derivedFromVersion = $derivedFromVersion;
    
        return $this;
    }

    /**
     * Get derivedFromVersion
     *
     * @return string 
     */
    public function getDerivedFromVersion()
    {
        return $this->derivedFromVersion;
    }

    /**
     * Set superseededBy
     *
     * @param string $superseededBy
     * @return Configuration
     */
    public function setSuperseededBy($superseededBy)
    {
        $this->superseededBy = $superseededBy;
    
        return $this;
    }

    /**
     * Get superseededBy
     *
     * @return string 
     */
    public function getSuperseededBy()
    {
        return $this->superseededBy;
    }

    /**
     * Set useStatus
     *
     * @param string $useStatus
     * @return Configuration
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

    /**
     * Set comments
     *
     * @param string $comments
     * @return Configuration
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
