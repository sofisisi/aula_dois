<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../aula_dois/style.css">
    <title>Área de um triângulo</title>
</head>
<body>
<div id="DIV1">
    <form method="post">
            <h3>Escreva a base do triângulo</h3>
            <label for="base">Base:</label>
            <input type="number" id="base" name="base" step="0.01" required>
            <h3>Escreva a altura do triângulo</h3>
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" required>
            <h3>Area do triângulo</h3>
            <button type="submit" name="calcular_area">Calcular</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['calcular_area'])){
            $base = $_POST['base'];
            $altura = $_POST['altura']; 
            $area = ($base * $altura)/ 2; 
            echo  "A area do triangulo é $area "; 

            if ($area >= 100){
                echo '<br> A area é maior ou igual que 100';
            } else {
                echo '<br> A area é menor que 100';
            }
        }
    }
    ?>
</div>
</body>
</html>