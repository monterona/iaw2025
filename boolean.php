<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x=TRUE;
        $y=FALSE;
        $z=($y OR $x);

        //Obtengo el valor de la variable z
        var_dump ($z);
    ?>
</body>
</html>