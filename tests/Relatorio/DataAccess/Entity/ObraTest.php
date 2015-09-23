<?php

use Relatorio\DataAccess\Entity\Obra;

class ObraTest extends \PHPUnit_Framework_TestCase
{
    public function assertPreConditions()
    {
        $this->assertTrue(class_exists($class = 'Relatorio\DataAccess\Entity\Obra'), 'Classe não encontrada: ' . $class);
    }

    public function testInstanciandoSemArgumentos()
    {
        $instance = new Obra();
        $this->assertInstanceOf('Relatorio\DataAccess\Entity\Obra', $instance);
    }
}