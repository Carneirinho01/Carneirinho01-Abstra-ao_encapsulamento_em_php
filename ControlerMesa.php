<?php
    require_once("Mesa.php");

    $mesal = new Mesa();
    if ($mesal->addMesa(4,"medeiraRustica","retangular")) {
        echo"<br>Mesa Cadastrada<br>".$mesal->mostrarMesa();
    }else{
        echo"<br>Ocorreu um Erro ao cadastrar a mesa !!<br>";
    }
    echo"<br>";
    var_dump($mesal);