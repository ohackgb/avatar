<?php

namespace Funcionario\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface; 

/**
 * Funcionario
 *
 * @ORM\Table(name="funcionario")
 * @ORM\Entity
 */
class Funcionario implements InputFilterAwareInterface 
{
    protected $inputFilter;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFuncionario", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeFuncionario", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nomefuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="emailFuncionario", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $emailfuncionario;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoneFuncionario", type="string", length=15, precision=0, scale=0, nullable=false, unique=false)
     */
    private $telefonefuncionario;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataNasc", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $datanasc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAdmissao", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dataAdmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="grauInstrucao", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $grauInstrucao;

    /**
     * @var string
     *
     * @ORM\Column(name="formacao", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $formacao;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $funcao;

    /**
     * @var string
     *
     * @ORM\Column(name="horarioInicio", type="string", length=5, precision=0, scale=0, nullable=false, unique=false)
     */
    private $horarioInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="horarioFim", type="string", length=5, precision=0, scale=0, nullable=false, unique=false)
     */
    private $horarioFim;


    /**
     * Get idfuncionario
     *
     * @return integer 
     */
    public function getIdfuncionario()
    {
        return $this->idfuncionario;
    }

    /**
     * Set nomefuncionario
     *
     * @param string $nomefuncionario
     * @return Funcionario
     */
    public function setNomefuncionario($nomefuncionario)
    {
        $this->nomefuncionario = $nomefuncionario;
    
        return $this;
    }

    /**
     * Get nomefuncionario
     *
     * @return string 
     */
    public function getNomefuncionario()
    {
        return $this->nomefuncionario;
    }

    /**
     * Set emailfuncionario
     *
     * @param string $emailfuncionario
     * @return Funcionario
     */
    public function setEmailfuncionario($emailfuncionario)
    {
        $this->emailfuncionario = $emailfuncionario;
    
        return $this;
    }

    /**
     * Get emailfuncionario
     *
     * @return string 
     */
    public function getEmailfuncionario()
    {
        return $this->emailfuncionario;
    }

    /**
     * Set telefonefuncionario
     *
     * @param string $telefonefuncionario
     * @return Funcionario
     */
    public function setTelefonefuncionario($telefonefuncionario)
    {
        $this->telefonefuncionario = $telefonefuncionario;
    
        return $this;
    }

    /**
     * Get telefonefuncionario
     *
     * @return string 
     */
    public function getTelefonefuncionario()
    {
        return $this->telefonefuncionario;
    }
    /**
     * Set datanasc
     *
     * @param \DateTime $datanasc
     * @return Funcionario
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    
        return $this;
    }

    /**
     * Get datanasc
     *
     * @return \DateTime 
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * Set dataAdmissao
     *
     * @param \DateTime $dataAdmissao
     * @return Funcionario
     */
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;
    
        return $this;
    }

    /**
     * Get dataAdmissao
     *
     * @return \DateTime 
     */
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * Get projetoprojeto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjetoprojeto()
    {
        return $this->projetoprojeto;
    }

    /**
     * Set grauInstrucao
     *
     * @param string $grauInstrucao
     * @return Funcionario
     */
    public function setGrauInstrucao($grauInstrucao)
    {
        $this->grauInstrucao = $grauInstrucao;
    
        return $this;
    }

    /**
     * Get grauInstrucao
     *
     * @return string 
     */
    public function getGrauInstrucao()
    {
        return $this->grauInstrucao;
    }

    /**
     * Set formacao
     *
     * @param string $formacao
     * @return Funcionario
     */
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;
    
        return $this;
    }

    /**
     * Get formacao
     *
     * @return string 
     */
    public function getFormacao()
    {
        return $this->formacao;
    }

    /**
     * Set funcao
     *
     * @param string $funcao
     * @return Funcionario
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;
    
        return $this;
    }

    /**
     * Get funcao
     *
     * @return string 
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set horarioInicio
     *
     * @param string $horarioInicio
     * @return Funcionario
     */
    public function setHorarioInicio($horarioInicio)
    {
        $this->horarioInicio = $horarioInicio;
    
        return $this;
    }

    /**
     * Get horarioInicio
     *
     * @return string 
     */
    public function getHorarioInicio()
    {
        return $this->horarioInicio;
    }

    /**
     * Set horarioFim
     *
     * @param string $horarioFim
     * @return Funcionario
     */
    public function setHorarioFim($horarioFim)
    {
        $this->horarioFim = $horarioFim;
    
        return $this;
    }

    /**
     * Get horarioFim
     *
     * @return string 
     */
    public function getHorarioFim()
    {
        return $this->horarioFim;
    }

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function getArrayCopy() 
    {
        $obj_vars = get_object_vars($this);
        $obj_vars['datanasc'] = $obj_vars['datanasc']->format('d/m/Y');
        $obj_vars['dataAdmissao'] = $obj_vars['dataAdmissao']->format('d/m/Y');
        return $obj_vars;
    }

    /**
     * Populate from an array.
     *
     * @param array $data
     */
    public function populate($data = array()) 
    {
        foreach ($data as $property => $value) {
            if (! property_exists($this, $property)) {
                continue;
            }
            $this->$property = $value;
        }
    }

    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used!");
    }

    public function getInputFilter()
    {
        if (! $this->inputFilter) {
            $inputFilter = new InputFilter();

            $factory = new InputFactory();


            $inputFilter->add($factory->createInput(array(
                'name'     => 'nomefuncionario',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 255,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'emailfuncionario',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    /*array(
                        'name' => 'record_exists',
                        'options' => array(
                            'allow' => Hostname::ALLOW_DNS,
                            'deep' => FALSE, 
                            'domain' => TRUE, 
                            'mx' => FALSE
                        ),
                    ),*/
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'telefonefuncionario',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 14,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'datanasc',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'date',
                        'options' => array(
                            'locale' => 'pt_BR', 
                            'format' => 'd/m/Y'),
                        ),
                    ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'dataAdmissao',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'date',
                        'options' => array(
                            'locale' => 'pt_BR', 
                            'format' => 'd/m/Y'),
                        ),
                    ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'grauInstrucao',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 50,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'formacao',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 50,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'funcao',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 50,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'horarioInicio',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 5,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'horarioFim',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 5,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;        
        }

        return $this->inputFilter;
    } 
}
