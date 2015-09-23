<?php
namespace Relatorio\DataAccess;

use \PDO;
use Relatorio\DataAccess\Entity\Obra;

class ObraDAO
{

    /**
     *
     * @var \PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
   
    public function getById($id)
    {
        if (is_int($id)) {
            $obra = null;
            $stm = $this->pdo->prepare(
                'SELECT
                    *
                FROM
                    obras
                WHERE
                    cod_obra = :cod_obra;'
            );
            $stm->setFetchMode(PDO::FETCH_CLASS, 'Relatorio\DataAccess\Entity\Obra');
            $stm->bindValue(':cod_obra', $id, PDO::PARAM_INT);
            if ($stm->execute()) {
                $obra = $stm->fetch();
                $stm->closeCursor();
            }
            if (!$obra instanceof Obra) {
                throw new \RuntimeException('Falha ao recuparar a obra');
            }
            return $obra;
        }
        throw new \InvalidArgumentException(print_r($id, true) . ' e um valor inválido');
    }
}