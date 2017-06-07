<?php

namespace DiyohBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\ProjectRepository")
 */
class Project
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
     * @var int
     * @ORM\ManyToOne(targetEntity="User", inversedBy="projects")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $authorId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;
    
    /**
     * @ORM\Column(name="instruction", type="text", nullable=false)
     * @var type 
     */
    private $instruction;

    /**
     * @var string
     *
     * @ORM\Column(name="images_paths", type="string", length=255, nullable=true)
     */
    private $imagesPaths;

    /**
     * @var string
     *
     * @ORM\Column(name="schemes_paths", type="string", length=255, nullable=true)
     */
    private $schemesPaths;

    /**
     * @var string
     *
     * @ORM\Column(name="movies_paths", type="string", length=255, nullable=true)
     */
    private $moviesPaths;

    /**
     * @var string
     *
     * @ORM\Column(name="CAD_path", type="string", length=255, nullable=true)
     */
    private $cadPath;

    /**
     * @var string
     *
     * @ORM\Column(name="printableparts_paths", type="string", length=255, nullable=true)
     */
    private $printablepartsPaths;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="projects")
     * @ORM\JoinTable(name="projects_tags")
     * @var type 
     */
    private $tags;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="projects")
     * @ORM\JoinTable(name="projects_categories")
     * @var type 
     */
    private $categories;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tool", inversedBy="projects")
     * @ORM\JoinTable(name="projects_tools")
     * @var type 
     */
    private $tools;
    
    /**
     * @ORM\ManyToMany(targetEntity="Material", inversedBy="projects")
     * @ORM\JoinTable(name="projects_materials")
     * @var type 
     */
    private $materials;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="favouriteProjects")
     * @ORM\JoinTable(name="favprojects_users")
     */
    private $users;
    
    public function __construct() {
        
        $this->tags = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->tools = new ArrayCollection();
        $this->materials = new ArrayCollection();
        $this->users = new ArrayCollection();
        
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
     * Set authorId
     *
     * @param integer $authorId
     * @return Project
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
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
     * @return Project
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
     * Set rating
     *
     * @param integer $rating
     * @return Project
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set imagesPaths
     *
     * @param string $imagesPaths
     * @return Project
     */
    public function setImagesPaths($imagesPaths)
    {
        $this->imagesPaths = $imagesPaths;

        return $this;
    }

    /**
     * Get imagesPaths
     *
     * @return string 
     */
    public function getImagesPaths()
    {
        return $this->imagesPaths;
    }

    /**
     * Set schemesPaths
     *
     * @param string $schemesPaths
     * @return Project
     */
    public function setSchemesPaths($schemesPaths)
    {
        $this->schemesPaths = $schemesPaths;

        return $this;
    }

    /**
     * Get schemesPaths
     *
     * @return string 
     */
    public function getSchemesPaths()
    {
        return $this->schemesPaths;
    }

    /**
     * Set moviesPaths
     *
     * @param string $moviesPaths
     * @return Project
     */
    public function setMoviesPaths($moviesPaths)
    {
        $this->moviesPaths = $moviesPaths;

        return $this;
    }

    /**
     * Get moviesPaths
     *
     * @return string 
     */
    public function getMoviesPaths()
    {
        return $this->moviesPaths;
    }

    /**
     * Set cADPath
     *
     * @param string $cadPath
     * @return Project
     */
    public function setCADPath($cadPath)
    {
        $this->cadPath = $cadPath;

        return $this;
    }

    /**
     * Get cADPath
     *
     * @return string 
     */
    public function getCADPath()
    {
        return $this->cadPath;
    }

    /**
     * Set printablepartsPaths
     *
     * @param string $printablepartsPaths
     * @return Project
     */
    public function setPrintablepartsPaths($printablepartsPaths)
    {
        $this->printablepartsPaths = $printablepartsPaths;

        return $this;
    }

    /**
     * Get printablepartsPaths
     *
     * @return string 
     */
    public function getPrintablepartsPaths()
    {
        return $this->printablepartsPaths;
    }

    /**
     * Add tags
     *
     * @param \DiyohBundle\Entity\Tag $tags
     * @return Project
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
     * Add categories
     *
     * @param \DiyohBundle\Entity\Category $categories
     * @return Project
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
     * Add tools
     *
     * @param \DiyohBundle\Entity\Tool $tools
     * @return Project
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
     * Add materials
     *
     * @param \DiyohBundle\Entity\Material $materials
     * @return Project
     */
    public function addMaterial(\DiyohBundle\Entity\Material $materials)
    {
        $this->materials[] = $materials;

        return $this;
    }

    /**
     * Remove materials
     *
     * @param \DiyohBundle\Entity\Material $materials
     */
    public function removeMaterial(\DiyohBundle\Entity\Material $materials)
    {
        $this->materials->removeElement($materials);
    }

    /**
     * Get materials
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set instruction
     *
     * @param string $instruction
     * @return Project
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get instruction
     *
     * @return string 
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Add user
     *
     * @param \DiyohBundle\Entity\User $user
     * @return Project
     */
    public function addUser(\DiyohBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \DiyohBundle\Entity\User $user
     */
    public function removeUser(\DiyohBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
