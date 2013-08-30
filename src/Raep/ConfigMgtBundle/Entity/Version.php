<?php

namespace Raep\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Raep\ConfigMgtBundle\Entity\VersionRepository")
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
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

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
     * Set version
     *
     * @param string $version
     * @return Version
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
     * Set useStatus
     *
     * @param string $useStatus
     * @return Version
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
