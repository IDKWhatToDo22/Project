<?php

class Dbh {
    private $host = "localhost";
    private $user = "id20299276_c33zr";
    private $pwd = "P/L3{[Ew78icxses";
    private $dbName = "id20299276_c3zr";
    
    protected function connect() {
        $dsn = 'mysql:host=' . $this->$host . ';dbname=' . $this->$dnName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo; 
    }
}
