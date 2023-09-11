<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão-7</title>
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
            margin-top: 6.5cm;
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

        <h2>Hora Extra</h2>
        <h4>Digite os dados pedidos</h4>

        <form method="POST">
            <input name="tempo" id="tempo" type="number" placeholder="horas mensais">
            <input name="valor" id="valor" type="number" placeholder="salário por hora">
            <input type="submit" value="Enviar">
        </form>

    </div class="result">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $tempo = $_POST["tempo"];
            $valor = $_POST["valor"];
            $salario = ($tempo*$valor);

            if ($tempo > 160 ) {
                echo "Salário Total = " . (($salario*0.5)+$salario);
            }
            elseif ($tempo <= 160 ) {
                echo "Salário Total = " . ($salario);
            }
        }
    ?>
    
</body> 
</html>
