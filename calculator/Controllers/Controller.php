<?php
    require_once("Modelo.php"); 
    
    $res = isset($_REQUEST['resultado']) ? $_REQUEST['resultado'] : 0;
    $n1 = isset($_REQUEST['n1']) ? $_REQUEST['n1'] : 0;
    $operador = isset($_REQUEST['operador']) ? $_REQUEST['operador'] : "";

    if (isset($_REQUEST['clear'])) {
        $res = 0;
        $n1 = 0;
        $operador = "";
    }


    $model = new Modelo();

    if (isset($_REQUEST['numero'])) {
        $res = (int) ($res . $_REQUEST['numero']);
    }


    if (isset($_REQUEST['oper'])) {
        $oper = $_REQUEST['oper'];
        if ($oper != "=") {
            if ($operador == "") {
                $operador = $oper;
                $n1 = $res;
                $res = 0;
            }
        } else {
            if ($operador != "") {
                $n2 = $res;
                $res = $model->calcular($n1, $n2, $operador);
                $operador = "";
            }
        }
    }

echo "<p>Resultado:".$res."</p>";