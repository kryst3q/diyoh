<?php

namespace DiyohBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="categories")
     * @var type 
     */
    private $projects;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tool", mappedBy="categories")
     * @var type 
     */
    private $tools;

    /**
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="overriding")
     */
    private $subordinate;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="subordinate")
     * @ORM\JoinTable(name="category_tree",
     *      joinColumns={@ORM\JoinColumn(name="overriding", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="subordinate", referencedColumnName="id")}
     *      )
     */
    private $overriding;
    
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
     * @return Category
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
     * @return Category
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
     * @return Category
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

    /**
     * Add subordinate
     *
     * @param \DiyohBundle\Entity\Category $subordinate
     * @return Category
     */
    public function addSubordinate(\DiyohBundle\Entity\Category $subordinate)
    {
        $this->subordinate[] = $subordinate;

        return $this;
    }

    /**
     * Remove subordinate
     *
     * @param \DiyohBundle\Entity\Category $subordinate
     */
    public function removeSubordinate(\DiyohBundle\Entity\Category $subordinate)
    {
        $this->subordinate->removeElement($subordinate);
    }

    /**
     * Get subordinate
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubordinate()
    {
        return $this->subordinate;
    }

    /**
     * Add overriding
     *
     * @param \DiyohBundle\Entity\Category $overriding
     * @return Category
     */
    public function addOverriding(\DiyohBundle\Entity\Category $overriding)
    {
        $this->overriding[] = $overriding;

        return $this;
    }

    /**
     * Remove overriding
     *
     * @param \DiyohBundle\Entity\Category $overriding
     */
    public function removeOverriding(\DiyohBundle\Entity\Category $overriding)
    {
        $this->overriding->removeElement($overriding);
    }

    /**
     * Get overriding
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOverriding()
    {
        return $this->overriding;
    }
}
