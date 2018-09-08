<?php

try{ // catch and block -> catching the error of the database
    $handler=new PDO('mysql:host=localhost;dbname=add_name','root','');
    //  PDO attribute for catching the error and PDO Exception
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) { /* Catching the exception here and outputing it here */
    // die('Sorry, database problem');
    echo $e->getMessage();
    die();
 }

?>