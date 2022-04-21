<?php
require_once __DIR__ .'/config.php';

class API{
    function Select()
    {
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM users ORDER BY id');
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            
        }
    }
}