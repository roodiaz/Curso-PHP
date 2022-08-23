<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script type="text/javascript">
        function closealert() {
            document.getElementById('alert').style.display = "none";
        }
    </script>

    <title>Login</title>
</head>

<body style="background-color: lemonchiffon">
    <h1 style="text-align: center;">INICIAR SESION</h1>

    <form method="post">
        <div style="width: 20%; margin-left: auto; margin-right: auto; margin-top: 60px; text-align: center;">
            <div class="form-group">
                <input type="text" class="form-control" name="user" aria-describedby="emailHelp" placeholder="User">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
        </div>
    </form>

    <?php

    require("validaciones.php");
    require("alerts.php");

    if (isset($_POST["submit"])) {
        //Tomo datos del formulario
        $user = htmlentities(addslashes($_POST["user"]));
        $pass = htmlentities(addslashes($_POST["pass"]));

        $return = validarLogin($user, $pass);

        if (!$return) {
            alertLoginError();
        }
    }
    ?>

</body>

</html>