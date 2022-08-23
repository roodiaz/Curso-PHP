<?php

function alertLoginError()
{
  echo "<div id='alert' class='alert alert-danger' role='alert' style='width: 30%;
   margin-left: auto;
   margin-right: auto;
   margin-top: 50px;'> 
   <strong>Aviso!</strong> Usuario y/o contraseñas invalidos.
   <button type='button' onclick='closealert()' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
   </button> </div>";
}

function alertInsertOk()
{
  echo '<script type="text/javascript"> alert("Producto insertado con exito!"); </script>';
}

function alertInsertError()
{
  echo '<script type="text/javascript"> alert("Debe ingresar todos los datos!"); </script>';
}
