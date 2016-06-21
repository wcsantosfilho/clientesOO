<?php

class Cliente
{
    public $nome;
    public $endereco;

    /**
     * Cliente constructor.
     * @param $nome
     * @param $endereco
     */
    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }



}