<?php

//código para buscar informações de arquivos em uma pasta

$images = scandir("images");

$data = array();

foreach($images as $image){
    if(!in_array($image, array(".", ".."))){
        $filename = "images" . DIRECTORY_SEPARATOR . $image;
        $info = pathinfo($filename);

        $info["size"] = (round(filesize($filename)/1024)) . " KB";
        $info["modified"] = date("d/m/y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost:8080/DIR/". $filename;

        array_push($data, $info);
    }
}

echo json_encode($data);