<?php

namespace Ebbe\Test\MissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Assignment
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="documentation", type="string", length=255)
     */
    private $documentation;

    /**
     * @var string
     *
     * @ORM\Column(name="selection", type="string", length=255)
     */
    private $selection;

    /**
     * @var string
     *
     * @ORM\Column(name="sessions", type="string", length=255)
     */
    private $sessions;

    /**
     * @var string
     *
     * @ORM\Column(name="report", type="string", length=255)
     */
    private $report;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_version", type="string", length=255)
     */
    private $subjectVersion;


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
     * Set title
     *
     * @param string $title
     * @return Assignment
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
     * @return Assignment
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
     * @return Assignment
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
     * Set documentation
     *
     * @param string $documentation
     * @return Assignment
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
    
        return $this;
    }

    /**
     * Get documentation
     *
     * @return string 
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Set selection
     *
     * @param string $selection
     * @return Assignment
     */
    public function setSelection($selection)
    {
        $this->selection = $selection;
    
        return $this;
    }

    /**
     * Get selection
     *
     * @return string 
     */
    public function getSelection()
    {
        return $this->selection;
    }

    /**
     * Set sessions
     *
     * @param string $sessions
     * @return Assignment
     */
    public function setSessions($sessions)
    {
        $this->sessions = $sessions;
    
        return $this;
    }

    /**
     * Get sessions
     *
     * @return string 
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Set report
     *
     * @param string $report
     * @return Assignment
     */
    public function setReport($report)
    {
        $this->report = $report;
    
        return $this;
    }

    /**
     * Get report
     *
     * @return string 
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Assignment
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

    /**
     * Set subjectVersion
     *
     * @param string $subjectVersion
     * @return Assignment
     */
    public function setSubjectVersion($subjectVersion)
    {
        $this->subjectVersion = $subjectVersion;
    
        return $this;
    }

    /**
     * Get subjectVersion
     *
     * @return string 
     */
    public function getSubjectVersion()
    {
        return $this->subjectVersion;
    }
}
