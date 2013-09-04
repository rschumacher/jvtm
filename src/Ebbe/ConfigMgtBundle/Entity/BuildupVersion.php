<?php

namespace Ebbe\ConfigMgtBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildupVersion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\ConfigMgtBundle\Entity\BuildupVersionRepository")
 */
class BuildupVersion
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
     * @ORM\Column(name="buildup", type="string", length=255)
     */
    private $buildup;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
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
     * Set buildup
     *
     * @param string $buildup
     * @return BuildupVersion
     */
    public function setBuildup($buildup)
    {
        $this->buildup = $buildup;
    
        return $this;
    }

    /**
     * Get buildup
     *
     * @return string 
     */
    public function getBuildup()
    {
        return $this->buildup;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return BuildupVersion
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
     * Set subject
     *
     * @param string $subject
     * @return BuildupVersion
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
