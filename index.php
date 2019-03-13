<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Usando variables</h1>
    <?php
    $Nombre='Jose Ruben';
    $Edad=22;
    $SalarioMensual=2300.50;
    $Sindicalizado=false;
    echo $Nombre.'<BR>';
    echo $Edad.'<BR>';
    echo $SalarioMensual.'<BR>';
    echo $Sindicalizado.'<BR>';
    echo 'Empleado: '.$Nombre.' Tiene '.$Edad.' Años ';
    ?>
    <h1>Operaciones Aritméticas</h1>
    <?php
    $Numero1=15;
    $numero2=10;
    $Suma=$Numero1+$numero2;
    $Resta=$Numero1-$numero2;
    $Multiplicacion=$Numero1*$numero2;
    $Divide=$Numero1/$numero2;

    echo 'Suma: '.$Suma.' Resta: '.$Resta.' Multiplicación: '.$Multiplicacion.' División: '.$Divide.'<BR>';
    echo 'Suma: '.($Numero1+$numero2.'<BR>');
    if($Sindicalizado==true)
    {
        echo 'Va a Guelga';
    }
        else
    {
        echo 'Trabajara';
    }
    ?>
</body>
</html>