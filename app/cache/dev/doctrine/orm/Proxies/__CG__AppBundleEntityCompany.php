<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \AppBundle\Entity\Company implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'street', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'post_code', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'NIP', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'main_site', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'localization', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'email_subject_begin', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'smallLogoFile', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'smallLogoName', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'logoFile', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'logoName'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'street', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'post_code', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'NIP', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'main_site', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'localization', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'email_subject_begin', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'smallLogoFile', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'smallLogoName', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'updatedAt', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'logoFile', '' . "\0" . 'AppBundle\\Entity\\Company' . "\0" . 'logoName'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Company $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostCode', []);

        return parent::getPostCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostCode($post_code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostCode', [$post_code]);

        return parent::setPostCode($post_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getNIP()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNIP', []);

        return parent::getNIP();
    }

    /**
     * {@inheritDoc}
     */
    public function setNIP($NIP)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNIP', [$NIP]);

        return parent::setNIP($NIP);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainSite', []);

        return parent::getMainSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainSite($main_site)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainSite', [$main_site]);

        return parent::setMainSite($main_site);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalization', []);

        return parent::getLocalization();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalization($localization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalization', [$localization]);

        return parent::setLocalization($localization);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailSubjectBegin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailSubjectBegin', []);

        return parent::getEmailSubjectBegin();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailSubjectBegin($email_subject_begin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailSubjectBegin', [$email_subject_begin]);

        return parent::setEmailSubjectBegin($email_subject_begin);
    }

    /**
     * {@inheritDoc}
     */
    public function getSmallLogoFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSmallLogoFile', []);

        return parent::getSmallLogoFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setSmallLogoFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSmallLogoFile', [$image]);

        return parent::setSmallLogoFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getSmallLogoName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSmallLogoName', []);

        return parent::getSmallLogoName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSmallLogoName($smallLogoName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSmallLogoName', [$smallLogoName]);

        return parent::setSmallLogoName($smallLogoName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoFile', []);

        return parent::getLogoFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoFile', [$image]);

        return parent::setLogoFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoName', []);

        return parent::getLogoName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoName($logoName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoName', [$logoName]);

        return parent::setLogoName($logoName);
    }

}
