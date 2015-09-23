<?php

use Relatorio\DataAccess\ObraDAO;

class ObraDAOTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->exec('
        	CREATE TABLE IF NOT EXISTS obras (
			  cod_obra INTEGER PRIMARY KEY AUTOINCREMENT,
			  construtora_id INTEGER,
			  andamento_id INTEGER,
			  cidade_id INTEGER,
			  ordem INTEGER,
			  obra TEXT,
			  endereco TEXT,
			  data TEXT,
			  descricao TEXT,
			  logo_lnk TEXT,
			  reg_status TEXT,
			  ult_atualizacao TEXT,
			  data_registro TEXT
			)
        ');
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testRetornoPeloIdComArgumentoInvalido()
    {
        $dataAccess = new ObraDAO($this->pdo);
        $dataAccess->getById(null);
    }
    
    /**
     * @expectedException RuntimeException
     */
    public function testRetornoPeloIdComArgumentoZero()
    {
        $dataAccess = new ObraDAO($this->pdo);
        $dataAccess->getById(0);
    }
    
    protected function tearDown()
    {
        $this->pdo->exec('DROP TABLE obras');
    }
}