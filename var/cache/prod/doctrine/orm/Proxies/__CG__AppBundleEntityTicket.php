<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ticket extends \AppBundle\Entity\Ticket implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'grc_user', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'eternity', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'source', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbLastNumbers', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbExpMonth', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbExpYear', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'refundedAmount', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'wasUnsuscribed', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'logs', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'matchedUserId'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'grc_user', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'eternity', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'source', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbLastNumbers', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbExpMonth', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'cbExpYear', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'comments', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'refundedAmount', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'wasUnsuscribed', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'logs', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'matchedUserId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ticket $proxy) {
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
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setCbLastNumbers($cbLastNumbers = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCbLastNumbers', [$cbLastNumbers]);

        return parent::setCbLastNumbers($cbLastNumbers);
    }

    /**
     * {@inheritDoc}
     */
    public function getCbLastNumbers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCbLastNumbers', []);

        return parent::getCbLastNumbers();
    }

    /**
     * {@inheritDoc}
     */
    public function setCbExpMonth($cbExpMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCbExpMonth', [$cbExpMonth]);

        return parent::setCbExpMonth($cbExpMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getCbExpMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCbExpMonth', []);

        return parent::getCbExpMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setCbExpYear($cbExpYear = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCbExpYear', [$cbExpYear]);

        return parent::setCbExpYear($cbExpYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getCbExpYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCbExpYear', []);

        return parent::getCbExpYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setComments($comments = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComments', [$comments]);

        return parent::setComments($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefundedAmount($refundedAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefundedAmount', [$refundedAmount]);

        return parent::setRefundedAmount($refundedAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefundedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefundedAmount', []);

        return parent::getRefundedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setWasUnsuscribed($wasUnsuscribed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWasUnsuscribed', [$wasUnsuscribed]);

        return parent::setWasUnsuscribed($wasUnsuscribed);
    }

    /**
     * {@inheritDoc}
     */
    public function getWasUnsuscribed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWasUnsuscribed', []);

        return parent::getWasUnsuscribed();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogs($logs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogs', [$logs]);

        return parent::setLogs($logs);
    }

    /**
     * {@inheritDoc}
     */
    public function addLog($log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLog', [$log]);

        return parent::addLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogs', []);

        return parent::getLogs();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatchedUserId($matchedUserId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatchedUserId', [$matchedUserId]);

        return parent::setMatchedUserId($matchedUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchedUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchedUserId', []);

        return parent::getMatchedUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrcUser(\AppBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrcUser', [$user]);

        return parent::setGrcUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrcUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrcUser', []);

        return parent::getGrcUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setEternity(\AppBundle\Entity\Eternity $eternity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEternity', [$eternity]);

        return parent::setEternity($eternity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEternity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEternity', []);

        return parent::getEternity();
    }

}