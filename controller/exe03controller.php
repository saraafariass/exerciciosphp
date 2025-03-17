<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação etária</title>
</head>
<body>
    <h1> Classificação etária</h1>

    <?php

    $idade = intval($_REQUEST['idade']);

    if($idade >= 0 and $idade <= 11){
        echo "A idade é {$idade} classe (0-11) - Criança";
    } elseif ($idade >= 12 and  $idade <= 18) {
        echo "A idade é {$idade} classe (12-18) - Adolescente";
    } elseif ($idade >= 19 and $idade <= 59) {
        echo "A idade é {$idade} classe (19-59) - Adulto";
    } else{
        echo "A idade é {$idade} classe (< 59) - Idoso";
    }



    ?>
    
</body>
</html>