<?php

class ClientePF extends Cliente
{
    public $renda;
    public $dataNasc;
    public $cpf;

    /**
     * ClientePF constructor.
     * @param $renda
     * @param $dataNasc
     * @param $cpf
     */
    public function __construct($cNome, $cEndereco, $cRenda, $cDataNasc, $cCpf)
    {
        parent::__construct($cNome,$cEndereco);
        $this->renda = $cRenda;
        $this->dataNasc = $cDataNasc;
        $this->cpf = $cCpf;
    }

    /**
     * @return mixed
     */
    public function getRenda()
    {
        return $this->renda;
    }

    /**
     * @return mixed
     */
    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }



}