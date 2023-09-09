<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão-3</title>
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

        <h2>IMC</h2>
        <h4>Digite os dados pedidos</h4>

        <form method="POST">
            <input name="peso" id="peso" type="text" placeholder="peso(kg)">
            <input name="altura" id="altura" type="text" placeholder="altura(m)">
            <input type="submit" value="Enviar">
        </form>

    </div class="result">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $peso = $_POST["peso"];
            $alt = $_POST["altura"];
            $imc = ($peso/($alt**2));
            $Pmin = (18.5*($alt**2));
            $Pmax = (24.9*($alt**2));
            $Pmed = ($Pmin+$Pmax)/2;

            echo "\nIMC = " . $imc . "<br>" . "\n\nPeso Mínimo = " . $Pmin . "<br>" . "\n\nPeso Máximo = " . $Pmax . "<br>" . "\n\nPeso Médio = " . $Pmed . "<br>";
            
            if ($imc<18.5){
                echo "Você está abaixo do peso ideal";
            }
            else if ($imc>=18.5 && $imc<=24.9){
                echo "Parabéns! Você está em seu peso ideal";
            }
            else if ($imc>=25 && $imc<=29.9){
                echo "Você está acima de seu peso (sobrepeso)";
            }
            else if ($imc>=30 && $imc<=34.9){
                echo "Obesidade grau I";
            }
            else if ($imc>=35 && $imc<=39.9){
                echo "Obesidade garu II";
            }
            else if ($imc>=40){
                echo "Obesidade grau III";
            }
        }
    ?>
    
</body> 
</html>
