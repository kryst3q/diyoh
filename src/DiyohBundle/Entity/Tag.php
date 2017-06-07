<?php

namespace DiyohBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\TagRepository")
 */
class Tag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, unique=true)
     */
    private $name;
    
    /**
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="tags")
     * @var type 
     */
    private $projects;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tool", mappedBy="tags")
     * @var type 
     */
    private $tools;

    public function __construct() {
        
        $this->projects = new ArrayCollection();
        $this->tools = new ArrayCollection();
        
    }

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
     * @return Tag
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
     * Add projects
     *
     * @param \DiyohBundle\Entity\Project $projects
     * @return Tag
     */
    public function addProject(\DiyohBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \DiyohBundle\Entity\Project $projects
     */
    public function removeProject(\DiyohBundle\Entity\Project $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add tools
     *
     * @param \DiyohBundle\Entity\Tool $tools
     * @return Tag
     */
    public function addTool(\DiyohBundle\Entity\Tool $tools)
    {
        $this->tools[] = $tools;

        return $this;
    }

    /**
     * Remove tools
     *
     * @param \DiyohBundle\Entity\Tool $tools
     */
    public function removeTool(\DiyohBundle\Entity\Tool $tools)
    {
        $this->tools->removeElement($tools);
    }

    /**
     * Get tools
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTools()
    {
        return $this->tools;
    }
}
