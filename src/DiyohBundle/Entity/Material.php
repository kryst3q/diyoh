<?php

namespace DiyohBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\MaterialRepository")
 */
class Material
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="recycled_source", type="text", nullable=true)
     */
    private $recycledSource;

    /**
     * @var string
     *
     * @ORM\Column(name="specyfication", type="text", nullable=true)
     */
    private $specyfication;

    /**
     * @ORM\Column(name="images", type="array", nullable=true)
     */
    private $images;
    
    /**
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="materials")
     * @var type 
     */
    private $projects;

    public function __construct() {
        
        $this->projects = new ArrayCollection();
        
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
     * @return Material
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
     * @return Material
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
     * Set recycledSource
     *
     * @param string $recycledSource
     * @return Material
     */
    public function setRecycledSource($recycledSource)
    {
        $this->recycledSource = $recycledSource;

        return $this;
    }

    /**
     * Get recycledSource
     *
     * @return string 
     */
    public function getRecycledSource()
    {
        return $this->recycledSource;
    }

    /**
     * Set specyfication
     *
     * @param string $specyfication
     * @return Material
     */
    public function setSpecyfication($specyfication)
    {
        $this->specyfication = $specyfication;

        return $this;
    }

    /**
     * Get specyfication
     *
     * @return string 
     */
    public function getSpecyfication()
    {
        return $this->specyfication;
    }

    /**
     * Add projects
     *
     * @param \DiyohBundle\Entity\Project $projects
     * @return Material
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
     * Set images
     *
     * @param array $images
     * @return Material
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
