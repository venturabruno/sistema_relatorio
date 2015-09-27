<?php

use Relatorio\DataAccess\Entity\Clima;

class ClimaTest extends \PHPUnit_Framework_TestCase
{
    public function assertPreConditions()
    {
        $this->assertTrue(class_exists($class = 'Relatorio\DataAccess\Entity\Clima'), 'Classe não encontrada: ' . $class);
    }

    public function testInstanciandoSemArgumentos()
    {
        $instance = new Clima();
        $this->assertInstanceOf('Relatorio\DataAccess\Entity\Clima', $instance);
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o id
     */
    public function testDefinindoIdComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setObrasClimaId("");
    }
    
    public function testDefinindoIdComValidacaoDados()
    {
        $intancia = new Clima();
        $id = 1;
        $retorno = $intancia->setObrasClimaId($id);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($id, 'obras_clima_id', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOIdDefinido()
    {
        $id = 1;
        $instance = new Clima();
        $instance->setObrasClimaId($id);
        $this->assertTrue(method_exists($instance, 'getObrasClimaId'), 'Não existe um método getObrasClimaId no objeto');
        $this->assertEquals($id, $instance->getObrasClimaId());
    }
    
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o cliente
     */
    public function testDefinindoClienteComValorVazio()
    {
        $intancia = new Clima();
        $intancia->setClienteId("");
    }
    
    public function testDefinindoClienteComValidacaoDados()
    {
        $intancia = new Clima();
        $clienteId = 1;
        $retorno = $intancia->setClienteId($clienteId);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($clienteId, 'cliente_id', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOClienteDefinido()
    {
        $id = 1;
        $instance = new Clima();
        $instance->setClienteId($id);
        $this->assertTrue(method_exists($instance, 'getClienteId'), 'Não existe um método getClienteId no objeto');
        $this->assertEquals($id, $instance->getClienteId());
    }
    
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a obra
     */
    public function testDefindaObraComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setCodObra("");
    }
    
    public function testDefindaObraComValidacaoDados()
    {
        $intancia = new Clima();
        $codObra = 1;
        $retorno = $intancia->setCodObra($codObra);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($codObra, 'cod_obra', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarAObraDefinida()
    {
        $codObra = 1;
        $instance = new Clima();
        $instance->setCodObra($codObra);
        $this->assertTrue(method_exists($instance, 'getCodObra'), 'Não existe um método getCodObra no objeto');
        $this->assertEquals($codObra, $instance->getCodObra());
    }


    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a sigla
     */
    public function testDefindaClimaSiglaComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setClimaSigla("");
    }
    
    public function testDefindaClimaSiglaComValidacaoDados()
    {
        $intancia = new Clima();
        $climaSigla = "sigla";
        $retorno = $intancia->setClimaSigla($climaSigla);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($climaSigla, 'clima_sigla', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarAClimaSiglaDefinida()
    {
        $climaSigla = "sigla";
        $instance = new Clima();
        $instance->setClimaSigla($climaSigla);
        $this->assertTrue(method_exists($instance, 'getClimaSigla'), 'Não existe um método getClimaSigla no objeto');
        $this->assertEquals($climaSigla, $instance->getClimaSigla());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o texto
     */
    public function testDefinindoTextoComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setTexto("");
    }
    
    public function testDefinindoTextoComValidacaoDados()
    {
        $intancia = new Clima();
        $texto = "texto";
        $retorno = $intancia->setTexto($texto);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($texto, 'texto', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOTextoDefinida()
    {
        $texto = "texto";
        $instance = new Clima();
        $instance->setTexto($texto);
        $this->assertTrue(method_exists($instance, 'getTexto'), 'Não existe um método getTexto no objeto');
        $this->assertEquals($texto, $instance->getTexto());
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a atualização
     */
    public function testDefinindoAtualizacaoComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setUltAtualizacao("");
    }
    
    public function testDefinindoAtualizacaoComValidacaoDados()
    {
        $intancia = new Clima();
        $atualiazao = new DateTime();
        $retorno = $intancia->setUltAtualizacao($atualiazao);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($atualiazao, 'ult_atualizacao', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarAAtualizacaoDefinida()
    {
        $atualiazao = new DateTime();
        $instance = new Clima();
        $instance->setUltAtualizacao($atualiazao);
        $this->assertTrue(method_exists($instance, 'getUltAtualizacao'), 'Não existe um método getUltAtualizacao no objeto');
        $this->assertEquals($atualiazao, $instance->getUltAtualizacao());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a data do registro
     */
    public function testDefinindaDataRegistroComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setDataRegistro("");
    }
    
    public function testDefinindaDataRegistroComValidacaoDados()
    {
        $intancia = new Clima();
        $data = new DateTime();
        $retorno = $intancia->setDataRegistro($data);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($data, 'data_registro', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarDataRegistroDefinida()
    {
        $data = new DateTime();
        $instance = new Clima();
        $instance->setDataRegistro($data);
        $this->assertTrue(method_exists($instance, 'getDataRegistro'), 'Não existe um método getDataRegistro no objeto');
        $this->assertEquals($data, $instance->getDataRegistro());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a data do registro
     */
    public function testDefinindoStatusComValorInvalido()
    {
        $intancia = new Clima();
        $intancia->setRegStatus("");
    }
    
    public function testDefinindaStatusComValidacaoDados()
    {
        $intancia = new Clima();
        $status = "ativo";
        $retorno = $intancia->setRegStatus($status);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($status, 'reg_status', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarStatusDefinida()
    {
        $status = "ativo";
        $instance = new Clima();
        $instance->setRegStatus($status);
        $this->assertTrue(method_exists($instance, 'getRegStatus'), 'Não existe um método getRegStatus no objeto');
        $this->assertEquals($status, $instance->getRegStatus());
    }
}