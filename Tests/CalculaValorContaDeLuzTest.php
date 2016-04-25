<?php

/**
 * Classe de teste do PHPUnit para a função de calculo da conta de luz
 */
//require './_app/Config.inc.php';

use Own\CalculaValorContaDeLuz;
use PHPUnit_Framework_TestCase as PHPUnit;

class CalculaValorContaDeLuzTest extends PHPUnit
{

    /**
     * Testes residenciais
     */
    public function testCalculaSemImpostoBandeiraVerdeResidencial(){
        $Calcula  = new CalculaValorContaDeLuz();
        $this->assertEquals('43,60', $Calcula->CalculaConta(false,  '100', '1', 'residencial'));
    }


    public function testCalculaSemImpostoBandeiraAmarelaResidencial(){
        $Calcula  = new CalculaValorContaDeLuz();
        $this->assertEquals('45,10', $Calcula->CalculaConta(false,  '100', '2', 'residencial'));
    }

    public function testCalculaSemImpostoBandeiraVermelhaResidencial(){
        $Calcula  = new CalculaValorContaDeLuz();
        $this->assertEquals('48,10', $Calcula->CalculaConta(false,  '100', '3', 'residencial'));
    }

    /**
     * Testes em Instalações Comerciais
     */
    public function testCalculaSemImpostoBandeiraVerdeComercio(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('43,60', $Calcula->CalculaConta(false, '100', 1, 'comercial'));
    }

    public function testCalculaSemImpostoBandeiraAmarelaComercio(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('45,10', $Calcula->CalculaConta(false, '100', 2, 'comercial'));
    }

    public function testCalculaSemImpostoBandeiraVermelhaComercio(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('48,10', $Calcula->CalculaConta(false, '100', 3, 'comercial'));
    }

    /**
     * Teste para calculo da conta de luz em casas de baixa renda
     * Para o pessoal de baixa renda, o calculo diz que os 30Kwh iniciais devem ter um valor, o restante
     * deve ter um valor difente. Em nosso exemplo usamos como base um calculo de 100 KWh no site da AESEletropaulo
     * Os 30Kwh Iniciais tinham um valor de R$ 0,0830  e os 70 kWh restantes um valor de 0,1422.
     * Para simplificar um pouco a atividade, utilizamos apenas os valores referentes aos 70 Kwh restantes.
     * @URL https://www.aeseletropaulo.com.br/educacao-legislacao-seguranca/simuladores/conteudo/calcule-sua-conta
     */
    public function testCalculaSemImpostoBandeiraVerdeBaixaRenda(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('25,78', $Calcula->CalculaConta(false, '100', 1, 'residencial_baixa'));
    }

    public function testCalculaSemImpostoBandeiraAmarelaBaixaRenda(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('27,28', $Calcula->CalculaConta(false, '100', 2, 'residencial_baixa'));
    }


    public function testCalculaSemImpostoBandeiraVermelhaBaixaRenda(){
        $Calcula = new CalculaValorContaDeLuz();
        $this->assertEquals('30,28', $Calcula->CalculaConta(false, '100', 3, 'residencial_baixa'));
    }



}