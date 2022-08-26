<?php
require "Conection.php";

$dados = $pdo->query("select * from pessoa;");

$clientes = $dados->fetchAll(PDO::FETCH_OBJ);

foreach ($clientes as $key => $value) {

    echo "<tr><td>$value->id</td>" .
        "<td>$value->nome</td>" .
        "<td>$value->sobre_nome</td>" .
        "<td>$value->cpf</td></tr>";
}
