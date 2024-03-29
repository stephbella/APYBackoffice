<?php

namespace Proxies\__CG__\Backoffice\MenusBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Menus extends \Backoffice\MenusBundle\Entity\Menus implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'id', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'nomMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'slugMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'ordreMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'nivMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'isActivatedMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'dateCreaMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'dateModifMenus');
        }

        return array('__isInitialized__', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'id', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'nomMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'slugMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'ordreMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'nivMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'isActivatedMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'dateCreaMenus', '' . "\0" . 'Backoffice\\MenusBundle\\Entity\\Menus' . "\0" . 'dateModifMenus');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Menus $proxy) {
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
    public function setNomMenus($nomMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomMenus', array($nomMenus));

        return parent::setNomMenus($nomMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomMenus', array());

        return parent::getNomMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugMenus($slugMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugMenus', array($slugMenus));

        return parent::setSlugMenus($slugMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugMenus', array());

        return parent::getSlugMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdreMenus($ordreMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdreMenus', array($ordreMenus));

        return parent::setOrdreMenus($ordreMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdreMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdreMenus', array());

        return parent::getOrdreMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setNivMenus($nivMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNivMenus', array($nivMenus));

        return parent::setNivMenus($nivMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getNivMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNivMenus', array());

        return parent::getNivMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setisActivatedMenus($isActivatedMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setisActivatedMenus', array($isActivatedMenus));

        return parent::setisActivatedMenus($isActivatedMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getisActivatedMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getisActivatedMenus', array());

        return parent::getisActivatedMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreaMenus($dateCreaMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreaMenus', array($dateCreaMenus));

        return parent::setDateCreaMenus($dateCreaMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreaMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreaMenus', array());

        return parent::getDateCreaMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModifMenus($dateModifMenus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModifMenus', array($dateModifMenus));

        return parent::setDateModifMenus($dateModifMenus);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModifMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModifMenus', array());

        return parent::getDateModifMenus();
    }

}
