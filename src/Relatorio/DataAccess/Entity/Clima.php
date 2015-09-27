<?php

namespace Relatorio\DataAccess\Entity;

class Clima
{

    private $obras_clima_id;

    private $cliente_id;

    private $cod_obra;

    private $clima_sigla;

    private $texto;

    private $ult_atualizacao;

    private $data_registro;

    private $reg_status;

    public function getObrasClimaId()
    {
        return $this->obras_clima_id;
    }

    public function setObrasClimaId($obras_clima_id)
    {
        if (empty($obras_clima_id) || ! is_int($obras_clima_id)) {
            throw new \InvalidArgumentException('Valor inválido para o id');
        }
        
        $this->obras_clima_id = $obras_clima_id;
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

    public function getClimaSigla()
    {
        return $this->clima_sigla;
    }

    public function setClimaSigla($clima_sigla)
    {
        if (empty($clima_sigla) || ! is_string($clima_sigla)) {
            throw new \InvalidArgumentException('Valor inválido para a sigla');
        }
        
        $this->clima_sigla = $clima_sigla;
        return $this;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        if (empty($texto) || ! is_string($texto)) {
            throw new \InvalidArgumentException('Valor inválido para o texto');
        }
        
        $this->texto = $texto;
        return $this;
    }

    public function getUltAtualizacao()
    {
        
        if (is_string($this->ult_atualizacao))
        {
            $this->ult_atualizacao = \DateTime::createFromFormat('Y-m-d H:i:s', $this->ult_atualizacao);
        }
        
        return $this->ult_atualizacao;
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