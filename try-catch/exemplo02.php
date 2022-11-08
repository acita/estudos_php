<?php

function trataNome($name){

    if(!$name){

        throw new Exception("Nenhum nome foi informado", 1);
        
    }

    echo ucfirst($name) . "<br>";
}

try{

    trataNome("João");
    trataNome("");

}catch(Exception $e){

    echo $e->getMessage() . "<br>";
    echo "Código do erro: " . $e->getCode();

}finally{

    echo "<br>" . "Executou bloco try";

}