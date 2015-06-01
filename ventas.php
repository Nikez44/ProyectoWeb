<?php

session_start();
include 'daos/show_ventas.php';

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ventas</title>

    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
</head>
<body>

<?php include '_header.php' ?>

<div class="table_up" id="content">
    <h2 class="title">Ventas</h2>
    <div class="right">
        <form action="ventas.php" method="post">
            <?php
                $months = array('JAN' => 'Enero',
                                'FEB' => 'Febrero',
                                'MAR' => 'Marzo',
                                'APRIL' => 'Abril',
                                'MAY' => 'Mayo',
                                'JUNE' => 'Junio',
                                'JUL' => 'Julio',
                                'AUG' => 'Agosto',
                                'SEP' => 'Septiembre',
                                'OCT' => 'Octubre',
                                'NOV' => 'Noviembre',
                                'DEC' => 'Diciembre');
            ?>
            <select name="mes" id="mes">
                <?php foreach($months as $month => $m) { ?>
                    <?php if ($mes === $month) { ?>
                            <option value="<?php echo $month ?>" selected><?php echo $m ?> </option>
                    <?php } else { ?>
                        <option value="<?php echo $month ?>"><?php echo $m ?> </option>
                    <?php } ?>
                <?php } ?>
            </select>
            <input class="button" type="submit" value="Ver"/>
        </form>
    </div>
    <div class="clear"></div>
</div>

<div class="wrap-table" id="content">
    <table align="center">
        <thead>
        <tr>
            <td> Juego </td>
            <td> Cantidad </td>
            <td> Ganancia </td>
        </tr>
        </thead>

        <tbody>

        <?php if($ventas) {
            foreach ($ventas as $venta): ?>
                <tr>
                    <td> <?php echo $venta['nombre'] ?> </td>
                    <td> <?php echo $venta['sum(ventas.cantidad)'] ?> </td>
                    <td> $<?php echo $venta['sum(ventas.cantidad)']*$venta['precio'] ?> </td>
                </tr>
            <?php $total = $total + $venta['sum(ventas.cantidad)']*$venta['precio'];
            endforeach;
        }?>
        </tbody>

    </table>

    <p>Ganancia Total del mes: $<?php echo $total ?></p>
</div>

<?php include '_footer.php'?>

</body>
</html>