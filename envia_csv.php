<?php

//include 'conexao.php';
date_default_timezone_set( 'America/Sao_Paulo' );
$conn = new mysqli("contech-plus.mysql.uhserver.com", "fidelis1", "Triangulo@1", "contech_plus");
mysqli_set_charset($conn,"utf8");

$arquivo = $_FILES["file"]["tmp_name"];
$nome = $_FILES["file"]["name"];

$ext = explode(".", $nome);

$extensao = end($ext);


if ($extensao != "csv") {
    echo "Extensao invalida";    
}else  {
    $objeto = fopen($arquivo, 'r');
    
    while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE) {
        $codigo = $dados[0];
        $descricao = utf8_encode($dados[1]);
        $codbarras = utf8_encode($dados[2]);
        $estoque = $dados[3];
        $pvenda = $dados[4];
        $departamento = $dados[5];
        $pliquido = $dados[6];
        $pbruto = $dados[6];
        $ncm = utf8_encode($dados[6]);
        
        $result = $conn->query("insert into produtos (codigo, descricao, codbarras, estoque, pvenda, departamento, pliquido, pbruto, ncm) values ($codigo,'$descricao','$cobarras',$estoque,$pvenda,$departamento,$pliquido,$pbruto,'$ncm')");
    }
    if ($result) {
        echo "dados inseridos com sucesso";
    }else{
        echo "Erro ao inserir os dados";
    }
}