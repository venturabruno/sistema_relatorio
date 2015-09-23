<?php

use Relatorio\DataAccess\Entity\Diario;
use Relatorio\DataAccess\DiarioDAO;

class DiarioDAOTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->exec('
        	CREATE TABLE IF NOT EXISTS obras_diario (
			  obras_diario_id INTEGER PRIMARY KEY AUTOINCREMENT,
			  cliente_id INTEGER,
			  cod_obra INTEGER,
			  titulo TEXT,
              arquivo_lnk TEXT,
			  reg_status TEXT,
			  ult_atualizacao TEXT,
			  data_registro TEXT
			)
        ');
    }
    
    public function testInserindoDiario()
    {
        $diario = new Diario();
        $diario->setClienteId(1);
        $diario->setCodObra(1);
        $diario->setTitulo("teste");
        $diario->setArquivoLnk("arquivo.jpg");
        $diario->setRegStatus("ativo");
        $diario->setUltAtualizacao(new \DateTime());
        
        $dataAccess = new DiarioDAO($this->pdo);
        $id = $dataAccess->insert($diario);
        $this->assertEquals(1, $id);
        $diarioInserido = $dataAccess->getById($id);
        
        $this->assertInstanceOf('Relatorio\DataAccess\Entity\Diario', $diarioInserido);
        $this->assertEquals($diario->getObrasDiarioId(), $diarioInserido->getObrasDiarioId());
        $this->assertEquals($diario->getClienteId(), $diarioInserido->getClienteId());
        $this->assertEquals($diario->getCodObra(), $diarioInserido->getCodObra());
        $this->assertEquals($diario->getTitulo(), $diarioInserido->getTitulo());
        $this->assertEquals($diario->getArquivoLnk(), $diarioInserido->getArquivoLnk());
        $this->assertEquals($diario->getRegStatus(), $diarioInserido->getRegStatus());
        $this->assertEquals($diario->getUltAtualizacao(), $diarioInserido->getUltAtualizacao());
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRetornoPeloIdComArgumentoInvalido()
    {
        $dataAccess = new DiarioDAO($this->pdo);
        $dataAccess->getById(null);
    }
    
    /**
     * @expectedException RuntimeException
     */
    public function testRetornoPeloIdComArgumentoZero()
    {
        $dataAccess = new DiarioDAO($this->pdo);
        $dataAccess->getById(0);
    }
    
    protected function tearDown()
    {
        $this->pdo->exec('DROP TABLE obras');
    }
}