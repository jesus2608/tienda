



<?php
include 'header.php';
    $cantidad = $_GET['cantidad'];
    ?>
    <form action="46b.php">
        <?php

        for ($i=0; $i < $cantidad; $i++) { 
            echo "Nombre: <label for='nombre$i'> <input type='text' name='nombre$i'> </label> <br>";
            echo "Coste: <label for='coste$i'> <input type='text' name='coste$i'> </label> <br>";
            echo "<input type='hidden' name='cantidad' value=$cantidad>";
        }
        ?>
    <input type="submit">
        
    </form>
   <?php
   include 'footer.php';
   ?> 