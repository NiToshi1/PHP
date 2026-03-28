<?php
if (isset($_GET["name"]) && isset($_GET["email"])) {
    $nome = $_GET["name"];
    $email = $_GET["email"];

    echo "Bem-vindo $nome <br>";
    echo "Seu e-mail é: $email";
} else {
    echo "Dados não enviados.";
}
if (isset($POST["name"] $_POST["pedido"], $_POST["tamanho"], $_POST["pepino"])) {

    $pedidos = array(
        $_POST["name"],
        $_POST["pedido"],
        $_POST["tamanho"],
        $_POST["pepino"]
    );
    echo "<h2>CONFIRMAÇÃO DO PEDIDO</h2>";
    echo "pedido: " . implode(", ", $pedidos) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>
</head>
<body>
    <div class="formulario">
        <form method="post">
            <p>
                Nome:
                <input class="texto" type="text" name="name">
            </p>

            <p>
                E-mail:
                <input class="texto" type="text" name="email">
            </p>
        <label for="pedido">Faça seu pedido: </label>
            <select name="pedido" id="pedidos">
                <option name="Bigmac1" value="Bigmac">Bigmac</option>
                <option name="McChicken2" value="McChicken">Mcchichken</option>
                <option name="MCFish3" value="MCFish">McFish</option>
            </select>
            <label for="quantidade">Quantidade: </label>
            <input type="number" id="quantidade" name="quantidade" min="1" value="1">            
            

        <input class="texto" type="radio" name="tamanho" id="peq" value="P" checked>
        <label for="pequeno">Pequeno</label>
        <input class="texto" type="radio" name="tamanho" id="med" value="M">
        <label for="medio">Médio</label>
        <input class="texto" type="radio" name="tamanho" id="gra" value="G">
        <label for="pequeno">Grande</label>          
        <br>
        <input type="checkbox" id="op1" name="pepino" value="1">
        <label for=opcao1>PEPINO</label><br>
        <input type="checkbox" id="op2" name="pepino" value="2">
        <label for=opcao2>TOMATE</label><br>
        <input type="checkbox" id="op3" name="pepino" value="3">
        <label for=opcao3>CARNE</label><br>        


        <br>
            <input class="botao" type="submit" value="Enviar">
        </form>



</body>
</html>
