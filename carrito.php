<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }
        th {
            background: #ffa94d;
        }
        .btn {
            padding: 6px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .editar { background: #4CAF50; color: white; }
        .eliminar { background: #E53935; color: white; }
    </style>
</head>
<body>

<h1 style="text-align:center;">🛒 Carrito de compras</h1>

<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $consulta = $conexion->query("SELECT * FROM carrito");

        while ($fila = $consulta->fetch_assoc()) {
            echo "
            <tr>
                <td>{$fila['nombre']}</td>
                <td>\${$fila['precio']}</td>
                <td>{$fila['cantidad']}</td>
                <td>$" . ($fila['precio'] * $fila['cantidad']) . "</td>
                <td>
                    <a class='btn editar' href='editar_carrito.php?id={$fila['id']}'>Editar</a>
                    <a class='btn eliminar' href='eliminar_carrito.php?id={$fila['id']}'>Eliminar</a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>