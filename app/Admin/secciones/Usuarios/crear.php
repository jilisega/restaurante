<?php 
    include_once("../../../../config/config.php");
    include("../../../Database/database.php"); //incluye el archivo de la base
    if($_POST){
      //Guardando datos en las variables
      $nombres=(isset($_POST["nombre"])?$_POST["nombre"]:"");
      $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
      $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:"");
      $direccion=(isset($_POST["direccion"])?$_POST["direccion"]:"");
      $password=(isset($_POST["pass"])?$_POST["pass"]:"");
      $rol=(isset($_POST["rol"])?$_POST["rol"]:"");

      //preparar la insersion de usuario
        $sql="INSERT INTO usuarios(nombre,correo,telefono,direccion, password, rol) values(:nombres,:correo,:telefono,:direccion,:password,:rol)";
        $sql = $connect->prepare($sql);

       //asignamos os valores que vienen del metodo post(los que vienen del formulario
        $sql->bindParam(':nombres',$nombres,PDO::PARAM_STR, 50);
        $sql->bindParam(':correo',$correo,PDO::PARAM_STR, 50);
        $sql->bindParam(':telefono',$telefono,PDO::PARAM_STR, 25);
        $sql->bindParam(':direccion',$direccion,PDO::PARAM_STR,100);
        $sql->bindParam(':password',$password,PDO::PARAM_STR, 50);
        $sql->bindParam(':rol',$rol,PDO::PARAM_INT);

        $sql->execute();
        $mensaje="Registro agregado";
        header("Location:index.php?mensaje=".$mensaje);//redireccionamos
    }

?>


<?php include("../../templates/header.php"); ?>
<div class="container w-75 mt-4 py-4 rounded shadow bg-transparent">
    <div class="card-header" style="color:white;">
        <h3 class="text-center">Datos del Usuarios</h3>
    </div>
    <div class="card bg-transparent">
      
        <form action="" method="post" enctype="multipart/form-data">
            
            <!--Formulario nombre de usuario-->
            <div class="input-group mb-3 my-4" >
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Nombres</span>
              </div>
              <input type="text" class="form-control bg-dark" style="color:white" name="nombre" id="nombre" placeholder="Nombre del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <!--Formulario correo de usuario-->
            <div class="input-group mb-3 my-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Correo</span>
                <span class="input-group-text bg-dark" style="color:white" id="basic-addon1">@</span>
              </div>
              <input type="email" class="form-control bg-dark" style="color:white" name="correo" id="correo" placeholder="Correo del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <!--Formulario Telefono-->
            <div class="input-group mb-3 my-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Telefono</span>
              </div>
              <input type="number" class="form-control bg-dark" style="color:white" name="telefono" id="telefono" placeholder="Telefono del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <!--formulario de direccion del usuario"-->
            <div class="input-group mb-3 my-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Dirección</span>
              </div>
              <input type="text" class="form-control bg-dark" style="color:white" name="direccion" id="direccion" placeholder="Direccion del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <!--Formulario del Password-->
            <div class="input-group mb-3 my-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Password</span>
              </div>
              <input type="text" class="form-control bg-dark" style="color:white" name="pass" id="pass" placeholder="Password del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

             <!--Formulario del Rol-->
             <div class="input-group mb-3 my-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-dark" style="color:white" id="inputGroup-sizing-default">Rol</span>
              </div>
              <input type="number" class="form-control bg-dark" style="color:white" name="rol" id="rol" placeholder="rol del usuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            
            <!--Botones Agregar | Cancelar-->
            <button type="buttonsubmit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>