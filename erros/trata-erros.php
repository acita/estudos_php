<?php

function errorHandler($code, $message, $file, $line)
{
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));

}
set_error_handler("errorHandler");

100 / 0;


// manipular apresentaçao do erro (error_reporting())