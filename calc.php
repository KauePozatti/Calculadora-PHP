<?php

    $nro1 =0;
    $nro2 =0;
    $resultado =0;
    $Calcular ='somar';

    if(isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])) {
        $nro1 = $_GET['nro1'];
        $nro2 = $_GET['nro2']; 
        $Calcular = $_GET['calcular'];

        switch($Calcular) {
        case 'somar':
            $resultado = $nro1 + $nro2;
            break;
        case 'subtrair':
            $resultado = $nro1 - $nro2;
            break;
        case 'multiplicar':
            $resultado = $nro1 * $nro2;
            break;
        case 'dividir':
            $resultado = $nro1 / $nro2;
            break;
        }
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Calculadora</title>
</head>
<body>
    <form>
        Primeiro Número <br />
        <input type='number' name="nro1" value=<?= $nro1 ?> required/><br />
        Segundo Número <br />
        <input type='number' name='nro2' value=<?= $nro2 ?> required/><br /><br />
        <select name='calcular'>
            <option value='somar' <?= ($Calcular=='somar')?'selected':'' ?> >Somar</option>
            <option value='subtrair' <?= ($Calcular=='subtrair')?'selected':'' ?> >Subtrair</option>
            <option value='multiplicar' <?= ($Calcular=='multiplicar')?'selected':'' ?> >Multiplicar</option>
            <option value='dividir' <?= ($Calcular=='dividir')?'selected':'' ?> >Dividir</option>
        </select>
        <br /><br />
        <input type='submit' value='Calcular'/>
        <br /><br />
        <p>O Resultado é <?= $resultado ?></p>
    </form>

</body>
</html>