<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Lieucamping extends \App\Entity\Lieucamping implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'coordonner', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'region_id', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'avis', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'favorits', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'capacite', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'PlacesRestantes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'coordonner', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'region_id', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'avis', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'favorits', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'capacite', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'reservations', '' . "\0" . 'App\\Entity\\Lieucamping' . "\0" . 'PlacesRestantes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Lieucamping $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoordonner(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoordonner', []);

        return parent::getCoordonner();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoordonner(string $coordonner): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoordonner', [$coordonner]);

        return parent::setCoordonner($coordonner);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(string $photo): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegionId(): ?\App\Entity\Region
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegionId', []);

        return parent::getRegionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegionId(?\App\Entity\Region $region_id): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegionId', [$region_id]);

        return parent::setRegionId($region_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvis(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvis', []);

        return parent::getAvis();
    }

    /**
     * {@inheritDoc}
     */
    public function addAvi(\App\Entity\Avis $avi): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAvi', [$avi]);

        return parent::addAvi($avi);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavorits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavorits', []);

        return parent::getFavorits();
    }

    /**
     * {@inheritDoc}
     */
    public function addFavorit(\App\Entity\Favorit $favorit): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFavorit', [$favorit]);

        return parent::addFavorit($favorit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFavorit(\App\Entity\Favorit $favorit): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFavorit', [$favorit]);

        return parent::removeFavorit($favorit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacite(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacite', []);

        return parent::getCapacite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacite(int $capacite): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacite', [$capacite]);

        return parent::setCapacite($capacite);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservations', []);

        return parent::getReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addReservation(\App\Entity\Reservation $reservation): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReservation', [$reservation]);

        return parent::addReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlacesRestantes(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlacesRestantes', []);

        return parent::getPlacesRestantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlacesRestantes(?int $PlacesRestantes): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlacesRestantes', [$PlacesRestantes]);

        return parent::setPlacesRestantes($PlacesRestantes);
    }

}
