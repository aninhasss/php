<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão-6</title>
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
            #n1, #n2, #n3{
            width: 3cm;
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

        <h2>Média</h2>
        <h4>Digite as 3 notas referente ao aluno</h4>

        <form method="POST">
            <input name="n1" id="n1" type="number" placeholder="primeira nota">
            <input name="n2" id="n2" type="number" placeholder="segunda nota">
            <input name="n3" id="n3" type="number" placeholder="terceira nota">
            <input type="submit" value="Enviar">
        </form>

    </div class="result">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            $m = ($n1 + $n2 + $n3) / 3;
            
            if ($m >= 6 && $m <= 10) {
                echo "Média: " . $m . "\nAluno aprovado";
            } 
            else {
                echo "Média: " . $m . "\nAluno reprovado";
            } 
        }
    ?>
    
</body> 
</html>
