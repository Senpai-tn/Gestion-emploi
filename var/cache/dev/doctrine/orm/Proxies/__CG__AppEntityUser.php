<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'companyName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'educationLevel', '' . "\0" . 'App\\Entity\\User' . "\0" . 'graduationYear', '' . "\0" . 'App\\Entity\\User' . "\0" . 'experience', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'applications', '' . "\0" . 'App\\Entity\\User' . "\0" . 'speciality', '' . "\0" . 'App\\Entity\\User' . "\0" . 'location', '' . "\0" . 'App\\Entity\\User' . "\0" . 'type'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'articles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'companyName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'educationLevel', '' . "\0" . 'App\\Entity\\User' . "\0" . 'graduationYear', '' . "\0" . 'App\\Entity\\User' . "\0" . 'experience', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'applications', '' . "\0" . 'App\\Entity\\User' . "\0" . 'speciality', '' . "\0" . 'App\\Entity\\User' . "\0" . 'location', '' . "\0" . 'App\\Entity\\User' . "\0" . 'type'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\App\Entity\Article $article): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Article $article): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName(?string $companyName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEducationLevel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEducationLevel', []);

        return parent::getEducationLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setEducationLevel(string $educationLevel): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEducationLevel', [$educationLevel]);

        return parent::setEducationLevel($educationLevel);
    }

    /**
     * {@inheritDoc}
     */
    public function getGraduationYear(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGraduationYear', []);

        return parent::getGraduationYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setGraduationYear(int $graduationYear): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGraduationYear', [$graduationYear]);

        return parent::setGraduationYear($graduationYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperience(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperience', []);

        return parent::getExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperience(int $experience): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperience', [$experience]);

        return parent::setExperience($experience);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getApplications(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplications', []);

        return parent::getApplications();
    }

    /**
     * {@inheritDoc}
     */
    public function addApplication(\App\Entity\Application $application): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApplication', [$application]);

        return parent::addApplication($application);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApplication(\App\Entity\Application $application): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApplication', [$application]);

        return parent::removeApplication($application);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeciality(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpeciality', []);

        return parent::getSpeciality();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpeciality(string $speciality): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpeciality', [$speciality]);

        return parent::setSpeciality($speciality);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(string $location): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

}
