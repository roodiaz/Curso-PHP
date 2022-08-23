<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
</head>

<body style="background-color: lemonchiffon">

    <?php require("DDBB\get_properties.php"); ?>

    <h1 style="text-align: center;">INSERTAR PRODUCTO</h1>

    <form action="DDBB\insertItem.php" method="POST" style="margin-top:20px; margin-left:20px;">

        <div style="width: 30%; margin-left: auto; margin-right: auto; margin-top: 60px; text-align: center;">
            <!-- Codigo -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ingresar codigo</span>
                </div>
                <input type="text" class="form-control" name="codigo" id="codigo" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php if (isset($_POST['codigo'])) {
                                                                                                                                                                echo $_POST['codigo'];
                                                                                                                                                            } ?>">
            </div>

            <!-- Precio -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ingresar precio</span>
                </div>
                <input type="text" class="form-control" name="precio" id="precio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php if (isset($_POST['precio'])) {
                                                                                                                                                                echo $_POST['precio'];
                                                                                                                                                            } ?>">
            </div>

            <!-- Talle -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Talle</label>
                </div>
                <select class="custom-select" name="talle" required="true">
                    <option disabled selected>Seleccionar</option>
                    <?php
                    $talles = getTalle();

                    foreach ($talles as $item) {
                        if (isset($_POST["talle"]) && $_POST["talle"] == $item["talle"])
                            echo '<option value="' . $item["talle"] . '" selected>' . $item["talle"] . ' </option>';
                        else
                            echo "<option value=" . $item["talle"] . ">" . $item["talle"] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Tipo -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Tipo</label>
                </div>
                <select class="custom-select" name="tipo">
                    <option disabled selected>Seleccionar</option>
                    <?php
                    $tipos = getTipo();

                    foreach ($tipos as $item) {
                        if (isset($_POST["tipo"]) && $_POST["tipo"] == $item["tipo"])
                            echo '<option value="' . $item["tipo"] . '" selected>' . $item["tipo"] . ' </option>';
                        else
                            echo "<option value=" . $item["tipo"] . ">" . $item["tipo"] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Color -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Color</label>
                </div>
                <select class="custom-select" name="color">
                    <option disabled selected>Seleccionar</option>
                    <?php
                    $colores = getColor();

                    foreach ($colores as $item) {
                        if (isset($_POST["color"]) && $_POST["color"] == $item["color"])
                            echo '<option value="' . $item["color"] . '" selected>' . $item["color"] . ' </option>';
                        else
                            echo "<option value=" . $item["color"] . ">" . $item["color"] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Tela -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Tela</label>
                </div>
                <select class="custom-select" name="tela">
                    <option disabled selected>Seleccionar</option>
                    <?php
                    $telas = getTela();

                    foreach ($telas as $item) {
                        if (isset($_POST["tela"]) && $_POST["tela"] == $item["tela"])
                            echo '<option value="' . $item["tela"] . '" selected>' . $item["tela"] . ' </option>';
                        else
                            echo "<option value=" . $item["tela"] . ">" . $item["tela"] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div style="text-align:center;">
                <input type="submit" id="enviar" name="enviar" value="aceptar" class="btn btn-primary mb-2">
                <a href='javascript:history.back()' class="btn btn-danger mb-2">Volver</a>
            </div>
        </div>
    </form>

    <?php

    require("DDBB\inserItem.php");
    require("alerts.php");

    if (isset($_POST["enviar"])) {

        //Tomo datos del formulario
        $cod = htmlentities(addslashes($_POST["codigo"]));
        $prec = htmlentities(addslashes($_POST["precio"]));
        $talle = htmlentities(addslashes($_POST["talle"]));
        $tipo = htmlentities(addslashes($_POST["tipo"]));
        $color = htmlentities(addslashes($_POST["color"]));
        $tela = htmlentities(addslashes($_POST["tela"]));

        //valido que no vengan vacias
        if (empty($cod) || empty($prec) || empty($talle) || empty($tipo) || empty($color) || empty($tela)) {
            alertInsertError();
        } else {

            header("location:insertIndex.php");
            alertInsertOk();
        }
    }
    ?>
</body>

</html>