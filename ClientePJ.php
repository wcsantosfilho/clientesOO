<?php

class ClientePJ extends Cliente
{
    public $cnpj;

    /**
     * ClientePJ constructor.
     * @param $cnpj
     */
    public function __construct($cNome, $cEndereco, $cCnpj)
    {
        parent::__construct($cNome, $cEndereco);
        $this->cnpj = $cCnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }


}