<?php

if(isset($_COOKIE["login"])){
    $obj = json_decode($_COOKIE["login"]);
    var_dump($obj);
}