<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá povos!</title>
</head>
    <h1>App da Auxiliana!</h1>
<body>
    <?php
    require_once "model/Conexao.php";  
    $tecnologias = Conexao::select("tecnologia","id, nome");
    print_r($tecnologias);
    ?>
</body>
</html>