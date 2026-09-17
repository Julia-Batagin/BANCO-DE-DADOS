<?php 
header("Content-Type: application/json");

require "conexao.php";

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == "POST"){
    $json = file_get_contents("php://input");  //file_get_contents= Armazenar entradas
    $dados = json_decode($json,true);

    $sql = "INSERT INTO produtos (nome,preco) VALUES (?,?)";

    $comando = $pdo -> prepare($sql);  // -> = Herda metodos 

    $comando -> execute([
    $dados["nome"],
    $dados["preco"]
    ]);

    echo json_encode(["Mensagem" =>"Produto cadastrado com sucesso!"]);

}

if($metodo == "GET"){
    $sql = "SELECT * FROM produtos";

    $comando = $pdo -> query($sql);

    $resposta = $comando -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resposta);
}
?>