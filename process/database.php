<?php


try{
    $dsn = 'mysql:host=localhost;dbname=clone_instagram';
    
    $username = 'root';
    
    $password = '';
    
    $database = new PDO($dsn, $username, $password);
    }
    catch (Exception $message){
        echo "ya un problème <br>" . $message;
    }