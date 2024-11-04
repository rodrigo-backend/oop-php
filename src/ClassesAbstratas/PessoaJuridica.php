<?php
declare(strict_types=1);

namespace Rodrigo\OopPhp\ClassesAbstratas;

//Possui métodos e atributos da classe Pessoa
class PessoaJuridica extends Pessoa{
    //Adiciona-se esse atributo
    private string $cnpj;

    //Adiciona-se esses métodos
    public function getCNPJ(){
        return $this-> cnpj;

    }

    public function setCNPJ(string $cnpj){
        $this-> cnpj = $cnpj;
    }

}