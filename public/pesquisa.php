<?php
require 'Conection.php';
//verificamos qual o metodo de requisição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //caso seja igual a POST recuramos a variavel
    //pesquisa.
    $pesquisa = filter_input(
        INPUT_POST,
        'pesquisa',
        FILTER_UNSAFE_RAW
    );
    if (
        !empty($pesquisa)
    ) {
        $sql = "select * FROM pessoa
        where 
        nome like '%$pesquisa%' or 
        sobre_nome like '%$pesquisa%' or
        cpf like '%$pesquisa%'";
        $dados = $pdo->query($sql);
        $clientes = $dados->fetchAll(PDO::FETCH_OBJ);
        foreach ($clientes as $key => $value) {
            echo "<tr><td>$value->id</td>" .
                "<td>$value->nome</td>" .
                "<td>$value->sobre_nome</td>" .
                "<td>$value->cpf</td></tr>";
        }
    } else {
        echo "Por favor informe o que deseja pesquisa";
    }
}
