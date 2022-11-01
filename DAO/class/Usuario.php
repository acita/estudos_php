<?php

class Usuario {

    private $id_usuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;
    
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($value)
    {
        $this->id_usuario = $value;
    }

    public function getDesLogin()
    {
        return $this->des_login;
    }

    public function setDesLogin($value)
    {
        $this->des_login = $value;
    }

    public function getDeSenha(){
        return $this->des_senha;
    }

    public function setDesSenha($value)
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
            "id_usuario" => $this->getIdUsuario(),
            "des_login" => $this->getDesLogin(),
            "des_senha" => $this->getDeSenha(),
            "dt_cadatro" => $this->getDtCadastro()
        ));
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID",
        array(":ID" => $id)
        );

        if (isset($results)){
            $row = $results[0];
            $this->setIdUsuario($row["id_usuario"]);
            $this->setDesLogin($row["des_login"]);
            $this->setDesSenha($row["des_senha"]);
            $this->setdtCadastro(new DateTime($row["dt_cadastro"]));
        }
    }

    public static function loadAll()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY des_login");
    }

    public static function search($login)
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login",
        array(
            ':SEARCH' => "%".$login."%"
        ));
    }

    public function login($login, $senha)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND des_senha = :SENHA",
        array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        )
        );

        if (count($results) > 0){

            $row = $results[0];

            $this->setIdUsuario($row["id_usuario"]);
            $this->setDesLogin($row["des_login"]);
            $this->setDesSenha($row["des_senha"]);
            $this->setdtCadastro(new DateTime($row["dt_cadastro"]));

        } else {

            throw new Exception("Login e/ou senha inválidos");

        }

    }

}

