<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculadora de compra de gaseosas</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora de compra de gaseosas</h1> <br>
        <form action="" method="post">
            
            <label class="input">Ingrese precio actual de la gaseosa </label><br> 
            <input type="text" name="precioActual"> <br>
            <label class="input">Ingrese cantidad de unidades adquiridas </label><br> 
            <input type="text" name="cantidad"> <br>    
            


            <input class="btn 1" type="submit" name="producto" value="Calcular"> 
            <input class="btn 2" type="reset" name="cancelar" value="Cancelar">
           
        </form>
        <?php
            $css = file_get_contents("css/styles.css");
            echo  "<style> $css </style>";

            if (array_key_exists('precioActual', $_POST)) {
                $precioActual = $_POST['precioActual'];
            } else {
                $precioActual = 0;
            }

            if (array_key_exists('cantidad', $_POST)) {
                $cantidad = $_POST['cantidad'];
            } else {
                $cantidad = 0;
            }
            
            $porcentajeDescuento = 5;
            $porcentajeDescuentoEspecial = 7;

            $precioRebajado = $precioActual * (1 - ($porcentajeDescuento / 100));

            $importeCompra = $precioRebajado * $cantidad;

            $importeDescuento = $importeCompra * (1 - ($porcentajeDescuentoEspecial / 100));

            $importePagar = $importeCompra - $importeDescuento;

            $obsequio = 2 * $cantidad;


            echo "<ul>";
            echo "<li>Precio rebajado: $precioRebajado</li>";
            echo "<li>Importe de la compra: $importeCompra</li>";
            echo "<li>Importe del descuento: $importeDescuento</li>";
            echo "<li>Importe a pagar: $importePagar</li>";
            echo "<li>Obsequio: $obsequio</li>";
            echo "</ul>";
        ?>
    </div>
</body>
</html>
