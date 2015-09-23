<?php
namespace Relatorio\DataAccess\Entity;

class Obra
{

    private $cod_obra;

    private $construtora_id;

    private $andamento_id;

    private $cidade_id;

    private $ordem;

    private $obra;

    private $endereco;

    private $data;

    private $descricao;

    private $logo_lnk;

    private $reg_status;

    private $ult_atualizacao;

    private $data_registro;

    public function getCodObra()
    {
        return $this->cod_obra;
    }

    public function setCodObra($cod_obra)
    {
        $this->cod_obra = $cod_obra;
        return $this;
    }

    public function getConstrutoraId()
    {
        return $this->construtora_id;
    }

    public function setConstrutoraId($construtora_id)
    {
        $this->construtora_id = $construtora_id;
        return $this;
    }

    public function getAndamentoId()
    {
        return $this->andamento_id;
    }

    public function setAndamentoId($andamento_id)
    {
        $this->andamento_id = $andamento_id;
        return $this;
    }

    public function getCidadeId()
    {
        return $this->cidade_id;
    }

    public function setCidadeId($cidade_id)
    {
        $this->cidade_id = $cidade_id;
        return $this;
    }

    public function getOrdem()
    {
        return $this->ordem;
    }

    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
        return $this;
    }

    public function getObra()
    {
        return $this->obra;
    }

    public function setObra($obra)
    {
        $this->obra = $obra;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getLogoLnk()
    {
        return $this->logo_lnk;
    }

    public function setLogoLnk($logo_lnk)
    {
        $this->logo_lnk = $logo_lnk;
        return $this;
    }

    public function getRegStatus()
    {
        return $this->reg_status;
    }

    public function setRegStatus($reg_status)
    {
        $this->reg_status = $reg_status;
        return $this;
    }

    public function getUltAtualizacao()
    {
        return $this->ult_atualizacao;
    }

    public function setUltAtualizacao($ult_atualizacao)
    {
        $this->ult_atualizacao = $ult_atualizacao;
        return $this;
    }

    public function getDataRegistro()
    {
        return $this->data_registro;
    }

    public function setDataRegistro($data_registro)
    {
        $this->data_registro = $data_registro;
        return $this;
    }
 
}