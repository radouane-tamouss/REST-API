<?php 

class Connect extends PDO{
    public function __construct()
    {
        parent::__contruct("mysql:host=localhost;dbname=api", 'root','',
        array(PDO::MYSQL_ATTR_ANIT_COMMANDE =>"SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
}

?>