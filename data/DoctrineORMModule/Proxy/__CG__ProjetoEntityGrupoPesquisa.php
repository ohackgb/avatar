<?php

namespace DoctrineORMModule\Proxy\__CG__\Projeto\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GrupoPesquisa extends \Projeto\Entity\GrupoPesquisa implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'inputFilter', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'idGrupoPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'nomeGrupoPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'objetivoGeral', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'linhaPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'pesquisadorresponsavel', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'coordPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'salasala', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'areaarea');
        }

        return array('__isInitialized__', 'inputFilter', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'idGrupoPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'nomeGrupoPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'objetivoGeral', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'linhaPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'pesquisadorresponsavel', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'coordPesquisa', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'salasala', '' . "\0" . 'Projeto\\Entity\\GrupoPesquisa' . "\0" . 'areaarea');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GrupoPesquisa $proxy) {
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
    public function getIdGrupoPesquisa()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdGrupoPesquisa();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGrupoPesquisa', array());

        return parent::getIdGrupoPesquisa();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeGrupoPesquisa($nomeGrupoPesquisa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeGrupoPesquisa', array($nomeGrupoPesquisa));

        return parent::setNomeGrupoPesquisa($nomeGrupoPesquisa);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeGrupoPesquisa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeGrupoPesquisa', array());

        return parent::getNomeGrupoPesquisa();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjetivoGeral($objetivoGeral)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjetivoGeral', array($objetivoGeral));

        return parent::setObjetivoGeral($objetivoGeral);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjetivoGeral()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjetivoGeral', array());

        return parent::getObjetivoGeral();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinhapesquisa($linhaPesquisa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinhapesquisa', array($linhaPesquisa));

        return parent::setLinhapesquisa($linhaPesquisa);
    }

    /**
     * {@inheritDoc}
     */
    public function getlinhaPesquisa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getlinhaPesquisa', array());

        return parent::getlinhaPesquisa();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalasala(\Sala\Entity\Sala $salasala = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalasala', array($salasala));

        return parent::setSalasala($salasala);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalasala()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalasala', array());

        return parent::getSalasala();
    }

    /**
     * {@inheritDoc}
     */
    public function setPesquisadorresponsavel(\Professor\Entity\Professor $pesquisadorresponsavel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPesquisadorresponsavel', array($pesquisadorresponsavel));

        return parent::setPesquisadorresponsavel($pesquisadorresponsavel);
    }

    /**
     * {@inheritDoc}
     */
    public function getPesquisadorresponsavel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPesquisadorresponsavel', array());

        return parent::getPesquisadorresponsavel();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoordPesquisa(\Professor\Entity\Professor $coordPesquisa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoordPesquisa', array($coordPesquisa));

        return parent::setCoordPesquisa($coordPesquisa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoordPesquisa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoordPesquisa', array());

        return parent::getCoordPesquisa();
    }

    /**
     * {@inheritDoc}
     */
    public function addAreaarea(\Curso\Entity\Atuacao $areaarea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAreaarea', array($areaarea));

        return parent::addAreaarea($areaarea);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAreaarea(\Curso\Entity\Atuacao $areaarea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAreaarea', array($areaarea));

        return parent::removeAreaarea($areaarea);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreaarea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreaarea', array());

        return parent::getAreaarea();
    }

    /**
     * {@inheritDoc}
     */
    public function getArrayCopy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrayCopy', array());

        return parent::getArrayCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function populate($data = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'populate', array($data));

        return parent::populate($data);
    }

    /**
     * {@inheritDoc}
     */
    public function setInputFilter(\Zend\InputFilter\InputFilterInterface $inputFilter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInputFilter', array($inputFilter));

        return parent::setInputFilter($inputFilter);
    }

    /**
     * {@inheritDoc}
     */
    public function getInputFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInputFilter', array());

        return parent::getInputFilter();
    }

}
