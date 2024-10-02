<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='46b.css'>

</head>
<body>
        <u>
        <tr>
            <th>Nombre</th>
            <th>Coste</th>
            <th>Coste en pesetas</th>
        </tr>
   
    <?php
    $cantidad = $_GET['cantidad'];
    $total =0;
    $totalP=0;
    for ($i=0; $i <$cantidad ; $i++) { 
        $nombre = $_GET['nombre'.$i];
        $coste = $_GET['coste'.$i];
        $costeP= $coste*166.36;
        $total+=$coste;
        $totalP+=$costeP;
       echo "<li> Nombre $nombre cuesta $coste € y en pesetas cuesta $costeP pesetas </li>" ;
    }
    echo "<li>
        Total:
        $total € 
        $totalP en pesetas
       </li>" ;

    ?>
    </u>
</body>
</html>