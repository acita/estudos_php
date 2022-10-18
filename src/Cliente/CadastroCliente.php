<?php

namespace Cliente;

class CadastroCliente extends \Cadastro
{

    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente " . $this->getNome();
    }

    public function registrarPedido(){
        echo "Seu pedido foi gerado para o email" . $this->getEmail();
    }

}