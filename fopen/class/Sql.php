<?php

class Sql extends PDO
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=dbteste;host=172.17.0.2","root","root");   
    }

    private function setParams($statement, $params = array()) 
    {
        foreach ($params as $key => $value) 
        {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function getQuery($rawQuery, $params = array()) 
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->getQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}