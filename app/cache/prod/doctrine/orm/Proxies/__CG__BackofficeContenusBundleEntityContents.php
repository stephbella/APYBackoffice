<?php

namespace Proxies\__CG__\Backoffice\ContenusBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contents extends \Backoffice\ContenusBundle\Entity\Contents implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'id', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'nomContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'slugContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'descriptContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'isActivatedContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'idMenusContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'dateCreaContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'dateModifContents');
        }

        return array('__isInitialized__', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'id', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'nomContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'slugContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'descriptContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'isActivatedContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'idMenusContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'dateCreaContents', '' . "\0" . 'Backoffice\\ContenusBundle\\Entity\\Contents' . "\0" . 'dateModifContents');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contents $proxy) {
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
    public function setNomContents($nomContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContents', array($nomContents));

        return parent::setNomContents($nomContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContents', array());

        return parent::getNomContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugContents($slugContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugContents', array($slugContents));

        return parent::setSlugContents($slugContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugContents', array());

        return parent::getSlugContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptContents($descriptContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptContents', array($descriptContents));

        return parent::setDescriptContents($descriptContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptContents', array());

        return parent::getDescriptContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setisActivatedContents($isActivatedContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setisActivatedContents', array($isActivatedContents));

        return parent::setisActivatedContents($isActivatedContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getisActivatedContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getisActivatedContents', array());

        return parent::getisActivatedContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMenusContents($idMenusContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMenusContents', array($idMenusContents));

        return parent::setIdMenusContents($idMenusContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMenusContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMenusContents', array());

        return parent::getIdMenusContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreaContents($dateCreaContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreaContents', array($dateCreaContents));

        return parent::setDateCreaContents($dateCreaContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreaContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreaContents', array());

        return parent::getDateCreaContents();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModifContents($dateModifContents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModifContents', array($dateModifContents));

        return parent::setDateModifContents($dateModifContents);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModifContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModifContents', array());

        return parent::getDateModifContents();
    }

}
