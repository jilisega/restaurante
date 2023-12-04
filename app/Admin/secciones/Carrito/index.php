<?php 
    include_once("../../../../config/config.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="icon" type="imagen/x-icon" href="<?php Base::url(); ?>favicon.svg">
    <link rel="stylesheet" href="<?php Base::Carrito(); ?>">
   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .btn{
            width: 100px;
            height: 50px;
            margin-top: auto;
            background-color: greenyellow;
            color: black;
            border-radius: 20px;
        }
        .btn:hover{
            background-color: red;
            color-scheme: white ;
            
        }
    </style>
</head>

<body>
    <header id="header">
        <h1>Shopping Car</h1>
        <div>
                <a href="<?php Base::url(); ?>app/Admin/index.php"><input type="button" class="btn btn-outline-success"  value="Ir a menu"></a>
        </div>
    </header>

    <main>
        <div class="contenedor">
            <!-- Añadir -->
            <div class="añadir">
                <h2>Añadir</h2>
                <form action="" method="post">
                    <label>Nombre del producto</label>
                    <input type="text" id="productoAñadir" name="nombreDelProducto">

                    <label>Valor del producto</label>
                    <input type="number" id="valorAñadir">

                    <label>Existencia</label>
                    <input type="number" id="existenciaAñadir">

                    <label>Url Imagen</label>
                    <input type="text" id="ImagenAñadir">

                    <input class="button" type="button" id="botonAñadir" value="Añadir">
                </form>
            </div>
            <!-- Editar -->
            <div class="editar">
                <h2>Editar</h2>
                <form action="" method="post">
                    <label>Nombre del producto</label>
                    <select id="productoEditar">
                        <option value="">---</option>
                    </select>

                    <label>Atributo</label>
                    <select id="atributoEditar">
                        <option value="">---</option>
                    </select>

                    <label>Nuevo valor</label>
                    <input type="text" id="nuevoAtributo">

                    <input class="button" type="button" id="botonEditar" value="Editar">
                </form>
            </div>

            <!-- Eliminar -->
            <div class="eliminar">
                <h2>Eliminar</h2>

                <form action="" method="post">
                    <label>Nombre del producto</label>
                    <select id="productoEliminar">
                        <option value="">---</option>
                    </select>
                    <input class="button" type="button" id="botonEliminar" value="Eliminar">
                </form>
            </div>
        </div>

        <!-- Mostrar el mensaje -->
        <div class="contenedorMensaje">
            <div id="mensaje"></div>
        </div>

        <!-- Productos -->
        <div class="contenedorProductos">
            <h2>Productos</h2>
            <div class="mostrarProductos" id="mostrarProductos">
                
            </div>
        </div>
        </div>
    </main>

    <script src="<?php Base::carritojs(); ?>"></script>
</body>

</html>
