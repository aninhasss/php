<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão-11</title>
    <style>
        body{
            background-color: rgb(150, 187, 211);
            display: grid;
            place-items: center; 
        }
        .result{
            background-color: white;
            padding: 2%;
            border-radius: 15px;
            text-align: center;
            margin-top: 5cm;
            .espaço{
                width: 5cm;
                padding: 0.5cm;
            }
            #margem{
                margin-top: 1cm;
            }
        }
        .link, a{
            color: rgb(0, 0, 0);
            padding: 0.2cm;
            margin-top: 1cm;
            text-decoration: none;
            background-color: white;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="link">
        <a href="ex1.php">questao-1</a>
        <a href="ex2.php">questao-2</a>
        <a href="ex3.php">questao-3</a>
        <a href="ex4.php">questao-4</a>
        <a href="ex5.php">questao-5</a>
        <a href="ex6.php">questao-6</a>
        <a href="ex7.php">questao-7</a>
        <a href="ex8.php">questao-8</a>
        <a href="ex9.php">questao-9</a>
        <a href="ex10.php">questao-10</a>
        <a href="ex11.php">questao-11</a>
    </div class="link">

    <div class="result">

        <h2>Formulário</h2>
        <h4>Digite suas informações</h4>

        <form class="espaço" method="POST">
            <label>Nome: </label><input name="nome" id="nome" type="text">
            <label>Email: </label><input name="email" id="email" type="text">
            <label>CPF: </label><input name="cpf" id="cpf" type="text">
            <label>Idade: </label><input name="idade" id="idade" type="number">
            <input type="submit" value="Enviar">
        </form>

    </div class="result">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $idade = $_POST["idade"];

            echo "Nome: " . $nome . "<br>" . "\nEmail: " . $email . "<br>" . "\nCPF: " . $cpf . "<br>" . "\nIdade: " . $idade;
        }
    ?>
    
</body> 
</html>
