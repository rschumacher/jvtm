<?php

namespace Ebbe\SubjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubjectItem
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\SubjectBundle\Entity\SubjectItemRepository")
 */
class SubjectItem
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
     * @ORM\Column(name="refersTo", type="object")
     */
    private $refersTo;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="composition of", type="object")
     */
    private $compositionOf;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="version items", type="object")
     */
    private $versionItems;


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
     * @return SubjectItem
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
     * Set refersTo
     *
     * @param Subject $subject
     * @return SubjectItem
     */
    public function setRefersTo($subject)
    {
        $this->refersTo = $subject;
    
        return $this;
    }

    /**
     * Get refersTo
     *
     * @return Subject 
     */
    public function getRefersTo()
    {
        return $this->refersTo;
    }

    /**
     * Set compositionOf
     *
     * @param \stdClass $compositionOf
     * @return SubjectItem
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
     * Set versionItems
     *
     * @param \stdClass $versionItems
     * @return SubjectItem
     */
    public function setVersionItems($versionItems)
    {
        $this->versionItems = $versionItems;
    
        return $this;
    }

    /**
     * Get versionItems
     *
     * @return \stdClass 
     */
    public function getVersionItems()
    {
        return $this->versionItems;
    }
}
