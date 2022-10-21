<?php

//CONEXÃO COM PDO
$con = new PDO(
    "mysql:dbname=dbteste;host=172.17.0.2","root","root"
);


// CONSULTA NO BANCO 

$stmt = $con->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row)
{
    foreach ($row as $key => $value)
    {
        echo "<strong>" . $key . ": " . "</strong>" . $value . "<br/>";
    }
    echo "====================================== <br/> ";
}

