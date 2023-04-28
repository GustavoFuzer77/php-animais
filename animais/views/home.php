<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    
    <div>
    </div>
    
    <div style="margin-top: 10px">

        <?php
        require_once "controllers/composite/Componente.php";
        require_once "controllers/composite/Link.php";

        $link = new LinkAnimais();
        $link->render();
        ?>
    </div>
</body>

</html>