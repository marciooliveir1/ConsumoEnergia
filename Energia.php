<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $classe = $_GET["classe"];
    $gasto = $_GET["kw"];
    $imp = 0.03;
    if($classe == ""){
        echo("Informa a classe!");
    }else
        if($gasto == ""){
            echo("Informa o conssumo");
        }  else
    if($classe == "a"){
        $t = 0.70;
        $a = $gasto * $t;
        $a = ($a * $imp + $a);
        echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <table border='12'><tr><td><body bgcolor='teal'</body><b><h4>
                O valor da sua conta é de R$ $a</h4></b>
                </td></tr></table>");
    }else
        if($classe == "b"){
            $t = 0.40;
            $a = $gasto * $t;
            $a = ($a * $imp + $a);
            echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <table border='12'><tr><td><body bgcolor='teal'</body><b><h4>
                O valor da sua conta é de R$ $a</h4></b>
                </td></tr></table>");
        }else
            if($classe == "c"){
                 $t = 0.30;
            $a = $gasto * $t;
            $a = ($a * $imp + $a);
            echo("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <table border='12'><tr><td><body bgcolor='teal'</body><b><h4>
                O valor da sua conta é de R$ $a</h4></b>
                </td></tr></table>");
            }
?>
