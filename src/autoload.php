<?php

spl_autoload_register(
    function(string $nomeDaClasse)
    {

        //var_dump(($nomeDaClasse));
        //echo "<br/>";


        $pathCompleto = ('src\\' . "$nomeDaClasse");
        //echo "caminho completo " . var_dump($pathCompleto);

        //echo "<br/>";

        $pathArquivo = $pathCompleto . '.php';
        //echo "caminho arquivo" . var_dump($pathArquivo);
        
        //echo "<br/>";

        if(file_exists($pathArquivo))
        {
            require_once $pathArquivo;
        }
    }
);