<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "DBLOJA");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}

