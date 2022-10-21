<?php

class Usuario {

    private $idusuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;
    
    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    public function setIdUsuario($value)
    {
        $this->idusuario = $value;
    }

    public function getDeslogin()
    {
        return $this->des_login;
    }

    public function setDeslogin($value)
    {
        $this->des_login = $value;
    }

    public function getDesenha(){
        return $this->des_senha;
    }

    public function setDessenha($value)
    {
        $this->des_senha = $value;
    }

    public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

    public function setdtCadastro($value)
    {
        $this->dt_cadastro = $value;
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdUsuario(),
            "des_login" => $this->getDeslogin(),
            "des_senha" => $this->getDesenha(),
            "dt_cadatro" => $this->getDtCadastro()
        ));
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",
        array(":ID" => $id)
        );

        if (isset($results)){
            $row = $results[0];
            $this->setIdUsuario($row["idusuario"]);
            $this->setDeslogin($row["des_login"]);
            $this->setDessenha($row["des_senha"]);
            $this->setdtCadastro(new DateTime($row["dt_cadastro"]));
        }
    }

    public function loadAll()
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios");

        print_r($results);

    }

}

