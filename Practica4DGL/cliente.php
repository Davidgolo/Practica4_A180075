<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4DGL/Server.php");

    $error = $cliente->getError();
    if($error)
    {
        echo "<h2>MARCA ERROR</h2><pre>" . $error . "</pre>";
    }
    $result = $cliente->call("getPaises", array("datos" => "Paises"));
    if($cliente->fault)
    {
        echo "<h2>FAULT</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else
    {
        $error = $cliente->getError();
        if($error)
        {
            echo "<h2>ERROR</h2><pre>" . $error . "/pre>";

        }
        else
        {
            echo "<h2>PAISES</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>