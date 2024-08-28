<!DOCTYPE html>
<html lang="pt_Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] =='POST') {

        if(isset($_POST['converter_para_Fahrenheit'])){
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9/5) + 32; 
            echo "$celsius °C é igual a $fahrenheit °F <br>"; 

        }
        if(isset($_POST['converter_para_Celsius'])){
            $celsius = $_POST['fahrenheit'];
            $fahrenheit = ($fahrenheit - 32) * 5/9; 
            echo "$fahrenheit °F é igual a $celsius °C <br>"; 

        }
    }

    ?>

    <form method="post">
        <h1>Questão 3 </h1>
        <label for="Celsius">Temperatura em Celsius</label>
        <input type="number" id="celsius" name="celsius" step="0.01" require> 
        <button type="submit" name="converter_para_Fahrenheit">Converter para Fahrenheit</button>
        <label for="Fahrenheit">Temperatura em Fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" step="0.01" require> 
        <button type="submit" name="converter_para_Celsius">Converter para Fahrenheit</button>
    </form>


</body>
</html>