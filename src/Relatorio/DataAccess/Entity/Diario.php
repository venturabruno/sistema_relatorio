<?php
namespace Relatorio\DataAccess\Entity;

class Diario
{

    private $obras_diario_id;

    private $cliente_id;

    private $cod_obra;

    private $titulo;

    private $arquivo_lnk;

    private $ult_atualizacao;

    private $data_registro;

    private $reg_status;

    public function getObrasDiarioId()
    {
        return $this->obras_diario_id;
    }

    public function setObrasDiarioId($obras_diario_id)
    {
        if (empty($obras_diario_id) || ! is_int($obras_diario_id)) {
            throw new \InvalidArgumentException('Valor inválido para o id');
        }
        
        $this->obras_diario_id = $obras_diario_id;
        return $this;
    }

    public function getClienteId()
    {
        return $this->cliente_id;
    }

    public function setClienteId($cliente_id)
    {
        if (empty($cliente_id) || ! is_int($cliente_id)) {
            throw new \InvalidArgumentException('Valor inválido para o cliente');
        }
        
        $this->cliente_id = $cliente_id;
        return $this;
    }

    public function getCodObra()
    {
        return $this->cod_obra;
    }

    public function setCodObra($cod_obra)
    {
        if (empty($cod_obra) || ! is_int($cod_obra)) {
            throw new \InvalidArgumentException('Valor inválido para a obra');
        }
        
        $this->cod_obra = $cod_obra;
        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        if (empty($titulo) || ! is_string($titulo)) {
            throw new \InvalidArgumentException('Valor inválido para o título');
        }
        
        $this->titulo = $titulo;
        return $this;
    }

    public function getArquivoLnk()
    {
        return $this->arquivo_lnk;
    }

    public function setArquivoLnk($arquivo_lnk)
    {
        if (empty($arquivo_lnk) || ! is_string($arquivo_lnk)) {
            throw new \InvalidArgumentException('Valor inválido para o arquivo');
        }
        
        $this->arquivo_lnk = $arquivo_lnk;
        return $this;
    }

    public function getUltAtualizacao()
    {
        $return = "";
        
        if (!empty($this->ult_atualizacao))
        {
            $return = \DateTime::createFromFormat('Y-m-d H:i:s', $this->ult_atualizacao);
        }
        
        return $return;
    }

    public function setUltAtualizacao($ult_atualizacao)
    {
        if (empty($ult_atualizacao) || ! ($ult_atualizacao instanceof \DateTime)) {
            throw new \InvalidArgumentException('Valor inválido para a atualização');
        }
        
        $this->ult_atualizacao = $ult_atualizacao;
        return $this;
    }

    public function getDataRegistro()
    {
        return $this->data_registro;
    }

    public function setDataRegistro($data_registro)
    {
        if (empty($data_registro) || ! ($data_registro instanceof \DateTime)) {
            throw new \InvalidArgumentException('Valor inválido para a data do registro');
        }
        
        $this->data_registro = $data_registro;
        return $this;
    }

    public function getRegStatus()
    {
        return $this->reg_status;
    }

    public function setRegStatus($reg_status)
    {
        $status = array(
            "ativo",
            "desativado",
            "excluido"
        );
        
        if (empty($reg_status) || ! in_array($reg_status, $status)) {
            throw new \InvalidArgumentException('Valor inválido para a data do registro');
        }
        
        $this->reg_status = $reg_status;
        return $this;
    }
}