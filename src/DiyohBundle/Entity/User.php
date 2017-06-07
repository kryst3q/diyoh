<?php

namespace DiyohBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     * @var type 
     */
    private $about;
    
    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     * @var type 
     */
    private $picturePath;

    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="authorId")
     * @var type 
     */
    private $projects;
    
    /**
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="users")
     * @var type 
     */
    private $favouriteProjects;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->projects = new ArrayCollection();
        $this->favouriteProjects = new ArrayCollection();
        
    }
    
    /**
     * Set about
     *
     * @param string $about
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     * @return User
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string 
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Add projects
     *
     * @param \DiyohBundle\Entity\Project $projects
     * @return User
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
     * Set favouriteProjects
     *
     * @param \DiyohBundle\Entity\Project $favouriteProjects
     * @return User
     */
    public function setFavouriteProjects(\DiyohBundle\Entity\Project $favouriteProjects = null)
    {
        $this->favouriteProjects = $favouriteProjects;

        return $this;
    }

    /**
     * Get favouriteProjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavouriteProjects()
    {
        return $this->favouriteProjects;
    }

    /**
     * Add favouriteProjects
     *
     * @param \DiyohBundle\Entity\Project $favouriteProjects
     * @return User
     */
    public function addFavouriteProject(\DiyohBundle\Entity\Project $favouriteProjects)
    {
        $this->favouriteProjects[] = $favouriteProjects;

        return $this;
    }

    /**
     * Remove favouriteProjects
     *
     * @param \DiyohBundle\Entity\Project $favouriteProjects
     */
    public function removeFavouriteProject(\DiyohBundle\Entity\Project $favouriteProjects)
    {
        $this->favouriteProjects->removeElement($favouriteProjects);
    }
}
