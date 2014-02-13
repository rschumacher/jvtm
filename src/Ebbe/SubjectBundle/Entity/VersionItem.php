<?php

namespace Ebbe\SubjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionItem
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\SubjectBundle\Entity\VersionItemRepository")
 */
class VersionItem
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
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="version", type="object")
     */
    private $version;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="composition of", type="object")
     */
    private $compositionOf;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="subject item", type="object")
     */
    private $subjectItem;


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
     * Set comment
     *
     * @param string $comment
     * @return VersionItem
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
     * Set version
     *
     * @param \stdClass $version
     * @return VersionItem
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return \stdClass 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set compositionOf
     *
     * @param \stdClass $compositionOf
     * @return VersionItem
     */
    public function setCompositionOf($compositionOf)
    {
        $this->compositionOf = $compositionOf;
    
        return $this;
    }

    /**
     * Get compositionOf
     *
     * @return \stdClass 
     */
    public function getCompositionOf()
    {
        return $this->compositionOf;
    }

    /**
     * Set subjectItem
     *
     * @param \stdClass $subjectItem
     * @return VersionItem
     */
    public function setSubjectItem($subjectItem)
    {
        $this->subjectItem = $subjectItem;
    
        return $this;
    }

    /**
     * Get subjectItem
     *
     * @return \stdClass 
     */
    public function getSubjectItem()
    {
        return $this->subjectItem;
    }
}
