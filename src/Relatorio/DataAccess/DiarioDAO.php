<?php
namespace Relatorio\DataAccess;

use \PDO;
use Relatorio\DataAccess\Entity\Obra;
use Relatorio\DataAccess\Entity\Diario;

class DiarioDAO
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
   
    public function insert(Diario $diario)
    {
        $stm = $this->pdo->prepare('INSERT INTO obras_diario(
    			 cliente_id,
    			 cod_obra,
    			 titulo,
                 arquivo_lnk,
    			 reg_status,
    			 ult_atualizacao
            ) VALUES (
    			 :cliente_id,
    			 :cod_obra,
    			 :titulo,
                 :arquivo_lnk,
    			 :reg_status,
    			 :ult_atualizacao
            )');
        
        $stm->bindValue(':cliente_id', $diario->getClienteId(), PDO::PARAM_INT);
        $stm->bindValue(':cod_obra', $diario->getCodObra(), PDO::PARAM_INT);
        $stm->bindValue(':titulo', $diario->getTitulo(), PDO::PARAM_STR);
        $stm->bindValue(':arquivo_lnk', $diario->getArquivoLnk(), PDO::PARAM_STR);
        $stm->bindValue(':reg_status', $diario->getRegStatus(), PDO::PARAM_STR);
        $stm->bindValue(':ult_atualizacao', $diario->getUltAtualizacao(), PDO::PARAM_STR);
                
        if ($stm->execute()) {
            return (int) $this->pdo->lastInsertId();
        }
        throw new \RuntimeException('Falha ao inserir');
    }
    
    public function getById($id)
    {
        if (is_int($id)) {
            $diario = null;
            $stm = $this->pdo->prepare(
                'SELECT
                    *
                FROM
                    obras_diario
                WHERE
                    obras_diario_id = :obras_diario_id;'
            );
            $stm->setFetchMode(PDO::FETCH_CLASS, 'Relatorio\DataAccess\Entity\Diario');
            $stm->bindValue(':obras_diario_id', $id, PDO::PARAM_INT);
            if ($stm->execute()) {
                $diario = $stm->fetch();
                $stm->closeCursor();
            }
            if (!$diario instanceof Diario) {
                throw new \RuntimeException('Falha ao recuparar o diario');
            }
            return $diario;
        }
        throw new \InvalidArgumentException(print_r($id, true) . ' e um valor inválido');
    }
}