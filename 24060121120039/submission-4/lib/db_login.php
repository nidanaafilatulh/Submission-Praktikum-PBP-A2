<?php 
// TODO 1: Buatlah koneksi dengan database
    $db_host = 'localhost:3307';
    $db_database = 'bookorama_t';
    $db_username = 'root';
    $db_password = '';

    $db = new mysqli($db_host, $db_username, $db_password, $db_database);
    if($db->connect_errno){
        die('Could not connect to the database : <br />'.$db->connect_errno);
    }
    
// TODO 2: Buatlah function test_input
function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}


?>