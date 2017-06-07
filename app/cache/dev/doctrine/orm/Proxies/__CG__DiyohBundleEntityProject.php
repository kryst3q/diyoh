<?php

namespace Proxies\__CG__\DiyohBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Project extends \DiyohBundle\Entity\Project implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'authorId', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'name', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'rating', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'instruction', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'imagesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'schemesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'moviesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'cadPath', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'printablepartsPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'tags', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'categories', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'tools', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'materials', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'user');
        }

        return array('__isInitialized__', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'authorId', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'name', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'rating', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'instruction', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'imagesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'schemesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'moviesPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'cadPath', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'printablepartsPaths', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'tags', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'categories', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'tools', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'materials', '' . "\0" . 'DiyohBundle\\Entity\\Project' . "\0" . 'user');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Project $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorId($authorId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorId', array($authorId));

        return parent::setAuthorId($authorId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorId', array());

        return parent::getAuthorId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setRating($rating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRating', array($rating));

        return parent::setRating($rating);
    }

    /**
     * {@inheritDoc}
     */
    public function getRating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRating', array());

        return parent::getRating();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagesPaths($imagesPaths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagesPaths', array($imagesPaths));

        return parent::setImagesPaths($imagesPaths);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagesPaths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagesPaths', array());

        return parent::getImagesPaths();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemesPaths($schemesPaths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemesPaths', array($schemesPaths));

        return parent::setSchemesPaths($schemesPaths);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemesPaths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemesPaths', array());

        return parent::getSchemesPaths();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoviesPaths($moviesPaths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoviesPaths', array($moviesPaths));

        return parent::setMoviesPaths($moviesPaths);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoviesPaths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoviesPaths', array());

        return parent::getMoviesPaths();
    }

    /**
     * {@inheritDoc}
     */
    public function setCADPath($cadPath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCADPath', array($cadPath));

        return parent::setCADPath($cadPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getCADPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCADPath', array());

        return parent::getCADPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrintablepartsPaths($printablepartsPaths)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrintablepartsPaths', array($printablepartsPaths));

        return parent::setPrintablepartsPaths($printablepartsPaths);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrintablepartsPaths()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrintablepartsPaths', array());

        return parent::getPrintablepartsPaths();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\DiyohBundle\Entity\Tag $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', array($tags));

        return parent::addTag($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\DiyohBundle\Entity\Tag $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', array($tags));

        return parent::removeTag($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\DiyohBundle\Entity\Category $categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', array($categories));

        return parent::addCategory($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\DiyohBundle\Entity\Category $categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', array($categories));

        return parent::removeCategory($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', array());

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addTool(\DiyohBundle\Entity\Tool $tools)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTool', array($tools));

        return parent::addTool($tools);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTool(\DiyohBundle\Entity\Tool $tools)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTool', array($tools));

        return parent::removeTool($tools);
    }

    /**
     * {@inheritDoc}
     */
    public function getTools()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTools', array());

        return parent::getTools();
    }

    /**
     * {@inheritDoc}
     */
    public function addMaterial(\DiyohBundle\Entity\Material $materials)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMaterial', array($materials));

        return parent::addMaterial($materials);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMaterial(\DiyohBundle\Entity\Material $materials)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMaterial', array($materials));

        return parent::removeMaterial($materials);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaterials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaterials', array());

        return parent::getMaterials();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstruction($instruction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstruction', array($instruction));

        return parent::setInstruction($instruction);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstruction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstruction', array());

        return parent::getInstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\DiyohBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', array($user));

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\DiyohBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', array($user));

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

}