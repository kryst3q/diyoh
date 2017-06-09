<?php

namespace DiyohBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tool
 *
 * @ORM\Table(name="tool")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\ToolRepository")
 */
class Tool
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
     * @ORM\Column(name="name", type="string", length=60, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="string", length=255, unique=false, nullable=true)
     * @var type 
     */
    private $description;
    
    /**
     * @ORM\Column(name="images", type="array", nullable=true)
     */
    private $images;
    
    /**
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="tools")
     * @var type 
     */
    private $projects;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="tools")
     * @ORM\JoinTable(name="categories_tools")
     * @var type 
     */
    private $categories;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="tools")
     * @ORM\JoinTable(name="tags_tools")
     * @var type 
     */
    private $tags;

    public function __construct() {
        
        $this->projects = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->tags = new ArrayCollection();
        
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
     * @return Tool
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
     * Set description
     *
     * @param string $description
     * @return Tool
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
     * Add projects
     *
     * @param \DiyohBundle\Entity\Project $projects
     * @return Tool
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
     * Add categories
     *
     * @param \DiyohBundle\Entity\Category $categories
     * @return Tool
     */
    public function addCategory(\DiyohBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \DiyohBundle\Entity\Category $categories
     */
    public function removeCategory(\DiyohBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add tags
     *
     * @param \DiyohBundle\Entity\Tag $tags
     * @return Tool
     */
    public function addTag(\DiyohBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \DiyohBundle\Entity\Tag $tags
     */
    public function removeTag(\DiyohBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set images
     *
     * @param array $images
     * @return Tool
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array 
     */
    public function getImages()
    {
        return $this->images;
    }
}
