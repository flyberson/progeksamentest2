<?php
/**
 * Created by PhpStorm.
 * User: flyberson_2
 * Date: 10-11-17
 * Time: 4:38 PM
 */

    if(isset($_SESSION['user']) && $_SESSION['user'] != "")
    {
        //Task to do
    }

    else{
        header("Location:http://localhost:63342/progeksamentest2/php/login.php");
        exit;
    }

