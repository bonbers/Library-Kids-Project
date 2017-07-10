<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 10/07/17
 * Time: 11:13
 */
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'coda';
$DB_NAME = 'library_kids';

try{
    $bdd = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $e){
    echo $e->getMessage();
}
