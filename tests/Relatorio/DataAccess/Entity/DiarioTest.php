<?php

use Relatorio\DataAccess\Entity\Diario;

class DiarioTest extends \PHPUnit_Framework_TestCase
{
    public function assertPreConditions()
    {
        $this->assertTrue(class_exists($class = 'Relatorio\DataAccess\Entity\Diario'), 'Classe não encontrada: ' . $class);
    }

    public function testInstanciandoSemArgumentos()
    {
        $instance = new Diario();
        $this->assertInstanceOf('Relatorio\DataAccess\Entity\Diario', $instance);
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o id
     */
    public function testDefinindoIdComValorInvalido()
    {
        $intancia = new Diario();
        $intancia->setObrasDiarioId("");
    }
    
    public function testDefinindoIdComValidacaoDados()
    {
        $intancia = new Diario();
        $id = 1;
        $retorno = $intancia->setObrasDiarioId($id);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($id, 'obras_diario_id', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOIdDefinido()
    {
        $id = 1;
        $instance = new Diario();
        $instance->setObrasDiarioId($id);
        $this->assertTrue(method_exists($instance, 'getObrasDiarioId'), 'Não existe um método getObrasDiarioId no objeto');
        $this->assertEquals($id, $instance->getObrasDiarioId());
    }
    
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o cliente
     */
    public function testDefinindoClienteComValorVazio()
    {
        $intancia = new Diario();
        $intancia->setClienteId("");
    }
    
    public function testDefinindoClienteComValidacaoDados()
    {
        $intancia = new Diario();
        $clienteId = 1;
        $retorno = $intancia->setClienteId($clienteId);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($clienteId, 'cliente_id', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOClienteDefinido()
    {
        $id = 1;
        $instance = new Diario();
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
        $intancia = new Diario();
        $intancia->setCodObra("");
    }
    
    public function testDefindaObraComValidacaoDados()
    {
        $intancia = new Diario();
        $codObra = 1;
        $retorno = $intancia->setCodObra($codObra);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($codObra, 'cod_obra', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarAObraDefinida()
    {
        $codObra = 1;
        $instance = new Diario();
        $instance->setCodObra($codObra);
        $this->assertTrue(method_exists($instance, 'getCodObra'), 'Não existe um método getCodObra no objeto');
        $this->assertEquals($codObra, $instance->getCodObra());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o título
     */
    public function testDefinindoTituloComValorInvalido()
    {
        $intancia = new Diario();
        $intancia->setTitulo(0);
    }
    
    public function testDefinindoTituloComValidacaoDados()
    {
        $intancia = new Diario();
        $titulo = "titulo";
        $retorno = $intancia->setTitulo($titulo);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($titulo, 'titulo', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOTituloDefinida()
    {
        $titulo = "Título";
        $instance = new Diario();
        $instance->setTitulo($titulo);
        $this->assertTrue(method_exists($instance, 'getTitulo'), 'Não existe um método getTitulo no objeto');
        $this->assertEquals($titulo, $instance->getTitulo());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para o arquivo
     */
    public function testDefinindoArquivoComValorInvalido()
    {
        $intancia = new Diario();
        $intancia->setArquivoLnk(0);
    }
    
    public function testDefinindoArquivoComValidacaoDados()
    {
        $intancia = new Diario();
        $arquivo = "arquivo.jpg";
        $retorno = $intancia->setArquivoLnk($arquivo);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($arquivo, 'arquivo_lnk', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarOArquivoDefinida()
    {
        $arquivo = "Título";
        $instance = new Diario();
        $instance->setArquivoLnk($arquivo);
        $this->assertTrue(method_exists($instance, 'getArquivoLnk'), 'Não existe um método getArquivoLnk no objeto');
        $this->assertEquals($arquivo, $instance->getArquivoLnk());
    }
    
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor inválido para a atualização
     */
    public function testDefinindoAtualizacaoComValorInvalido()
    {
        $intancia = new Diario();
        $intancia->setUltAtualizacao("");
    }
    
    public function testDefinindoAtualizacaoComValidacaoDados()
    {
        $intancia = new Diario();
        $atualiazao = new DateTime();
        $retorno = $intancia->setUltAtualizacao($atualiazao);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($atualiazao, 'ult_atualizacao', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarAAtualizacaoDefinida()
    {
        $atualiazao = new DateTime();
        $instance = new Diario();
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
        $intancia = new Diario();
        $intancia->setDataRegistro("");
    }
    
    public function testDefinindaDataRegistroComValidacaoDados()
    {
        $intancia = new Diario();
        $data = new DateTime();
        $retorno = $intancia->setDataRegistro($data);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($data, 'data_registro', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarDataRegistroDefinida()
    {
        $data = new DateTime();
        $instance = new Diario();
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
        $intancia = new Diario();
        $intancia->setRegStatus("");
    }
    
    public function testDefinindaStatusComValidacaoDados()
    {
        $intancia = new Diario();
        $status = "ativo";
        $retorno = $intancia->setRegStatus($status);
        $this->assertEquals($intancia, $retorno, 'Valor devolvido deve ser a mesma instância');
        $this->assertAttributeEquals($status, 'reg_status', $intancia, 'Atributo não foi definido corretamente');
    }
    
    public function testDeveRecuperarStatusDefinida()
    {
        $status = "ativo";
        $instance = new Diario();
        $instance->setRegStatus($status);
        $this->assertTrue(method_exists($instance, 'getRegStatus'), 'Não existe um método getRegStatus no objeto');
        $this->assertEquals($status, $instance->getRegStatus());
    }
}