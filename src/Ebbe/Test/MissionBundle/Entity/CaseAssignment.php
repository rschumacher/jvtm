<?php

namespace Ebbe\Test\MissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaseAssignment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ebbe\Test\MissionBundle\Entity\CaseAssignmentRepository")
 */
class CaseAssignment
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
     * @ORM\Column(name="testcase", type="string", length=255)
     */
    private $testcase;

    /**
     * @var string
     *
     * @ORM\Column(name="assignment", type="string", length=255)
     */
    private $assignment;

    /**
     * @var string
     *
     * @ORM\Column(name="runs", type="string", length=255)
     */
    private $runs;

    /**
     * @var string
     *
     * @ORM\Column(name="sut_version", type="string", length=255)
     */
    private $sutVersion;


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
     * Set testcase
     *
     * @param string $testcase
     * @return CaseAssignment
     */
    public function setTestcase($testcase)
    {
        $this->testcase = $testcase;
    
        return $this;
    }

    /**
     * Get testcase
     *
     * @return string 
     */
    public function getTestcase()
    {
        return $this->testcase;
    }

    /**
     * Set assignment
     *
     * @param string $assignment
     * @return CaseAssignment
     */
    public function setAssignment($assignment)
    {
        $this->assignment = $assignment;
    
        return $this;
    }

    /**
     * Get assignment
     *
     * @return string 
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Set runs
     *
     * @param string $runs
     * @return CaseAssignment
     */
    public function setRuns($runs)
    {
        $this->runs = $runs;
    
        return $this;
    }

    /**
     * Get runs
     *
     * @return string 
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * Set sutVersion
     *
     * @param string $sutVersion
     * @return CaseAssignment
     */
    public function setSutVersion($sutVersion)
    {
        $this->sutVersion = $sutVersion;
    
        return $this;
    }

    /**
     * Get sutVersion
     *
     * @return string 
     */
    public function getSutVersion()
    {
        return $this->sutVersion;
    }
}
