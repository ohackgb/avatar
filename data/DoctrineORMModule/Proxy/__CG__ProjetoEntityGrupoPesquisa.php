<?php

namespace DoctrineORMModule\Proxy\__CG__\Projeto\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GrupoPesquisa extends \Projeto\Entity\GrupoPesquisa implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdGrupoPesquisa()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idGrupoPesquisa"];
        }
        $this->__load();
        return parent::getIdGrupoPesquisa();
    }

    public function setNomeGrupoPesquisa($nomeGrupoPesquisa)
    {
        $this->__load();
        return parent::setNomeGrupoPesquisa($nomeGrupoPesquisa);
    }

    public function getNomeGrupoPesquisa()
    {
        $this->__load();
        return parent::getNomeGrupoPesquisa();
    }

    public function setObjetivoGeral($objetivoGeral)
    {
        $this->__load();
        return parent::setObjetivoGeral($objetivoGeral);
    }

    public function getObjetivoGeral()
    {
        $this->__load();
        return parent::getObjetivoGeral();
    }

    public function setLinhapesquisa($linhaPesquisa)
    {
        $this->__load();
        return parent::setLinhapesquisa($linhaPesquisa);
    }

    public function getlinhaPesquisa()
    {
        $this->__load();
        return parent::getlinhaPesquisa();
    }

    public function setSalasala(\Sala\Entity\Sala $salasala = NULL)
    {
        $this->__load();
        return parent::setSalasala($salasala);
    }

    public function getSalasala()
    {
        $this->__load();
        return parent::getSalasala();
    }

    public function setPesquisadorresponsavel(\Professor\Entity\Professor $pesquisadorresponsavel = NULL)
    {
        $this->__load();
        return parent::setPesquisadorresponsavel($pesquisadorresponsavel);
    }

    public function getPesquisadorresponsavel()
    {
        $this->__load();
        return parent::getPesquisadorresponsavel();
    }

    public function setCoordPesquisa(\Professor\Entity\Professor $coordPesquisa = NULL)
    {
        $this->__load();
        return parent::setCoordPesquisa($coordPesquisa);
    }

    public function getCoordPesquisa()
    {
        $this->__load();
        return parent::getCoordPesquisa();
    }

    public function addAreaarea(\Curso\Entity\Atuacao $areaarea)
    {
        $this->__load();
        return parent::addAreaarea($areaarea);
    }

    public function removeAreaarea(\Curso\Entity\Atuacao $areaarea)
    {
        $this->__load();
        return parent::removeAreaarea($areaarea);
    }

    public function getAreaarea()
    {
        $this->__load();
        return parent::getAreaarea();
    }

    public function getArrayCopy()
    {
        $this->__load();
        return parent::getArrayCopy();
    }

    public function populate($data = array (
))
    {
        $this->__load();
        return parent::populate($data);
    }

    public function setInputFilter(\Zend\InputFilter\InputFilterInterface $inputFilter)
    {
        $this->__load();
        return parent::setInputFilter($inputFilter);
    }

    public function getInputFilter()
    {
        $this->__load();
        return parent::getInputFilter();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idGrupoPesquisa', 'nomeGrupoPesquisa', 'objetivoGeral', 'linhaPesquisa', 'pesquisadorresponsavel', 'coordPesquisa', 'salasala', 'areaarea');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}