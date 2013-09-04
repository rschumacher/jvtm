<?php

namespace Ebbe\Test\SpecificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestCase
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\Test\SpecificationBundle\Entity\TestCaseRepository")
 */
class TestCase
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
     * @ORM\Column(name="specification", type="text")
     */
    private $specification;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=255)
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_under_test", type="string", length=255)
     */
    private $subjectUnderTest;


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
     * @return TestCase
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
     * @return TestCase
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
     * @return TestCase
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
     * Set specification
     *
     * @param string $specification
     * @return TestCase
     */
    public function setSpecification($specification)
    {
        $this->specification = $specification;
    
        return $this;
    }

    /**
     * Get specification
     *
     * @return string 
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return TestCase
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set topic
     *
     * @param string $topic
     * @return TestCase
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    
        return $this;
    }

    /**
     * Get topic
     *
     * @return string 
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set subjectUnderTest
     *
     * @param string $subjectUnderTest
     * @return TestCase
     */
    public function setSubjectUnderTest($subjectUnderTest)
    {
        $this->subjectUnderTest = $subjectUnderTest;
    
        return $this;
    }

    /**
     * Get subjectUnderTest
     *
     * @return string 
     */
    public function getSubjectUnderTest()
    {
        return $this->subjectUnderTest;
    }
}
