<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <style>
    </style>
</head>

<body style="background-color: lemonchiffon">

    <h1 style="text-align: center;">LISTADO DE PRODUCTOS</h1>
    <br>
    <br>

    <!-- tabla -->
    <div style="text-align: center; width:70%; margin: auto auto;">
        <table id="example" class="table table-bordered table-sm table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Talle</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Tela</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include("DDBB\get_properties.php");
                $listproductos = getItems();
                $cont = 1;

                foreach ($listproductos as $fila) {

                    echo "<tr>";
                    echo "<td scope='row'>" . $cont . "</td>";
                    echo "<td>" . $fila["codigo"] . "</td>";
                    echo "<td>" . $fila["precio"] . "</td>";
                    echo "<td>" . $fila["talle"] . "</td>";
                    echo "<td>" . $fila["tipo"] . "</td>";
                    echo "<td>" . $fila["color"] . "</td>";
                    echo "<td>" . $fila["tela"] . "</td>";
                    echo "</tr>";

                    $cont++;
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6"><strong>Total items</strong></td>
                    <?php echo "<td class='text-right'><strong>" . $cont - 1 . "</strong></td>"; ?>
                </tr>
            </tfoot>
        </table>
    </div>

    <br>
    <br>

    <!-- botones -->
    <div style="text-align: center">
        <a href="insertIndex.php" class="btn btn-info" style="margin: 0 10px 0 10px;">Agregar item</a>
        <a href="updateitem.php" class="btn btn-warning" style="margin: 0 10px 0 10px;">Actualizar item</a>
        <a href="deleteitem.php" class="btn btn-danger" style="margin: 0 10px 0 10px;">Borrar item</a>
    </div>

</body>

</html>