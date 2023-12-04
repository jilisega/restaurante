<?php
    class Base{
        //valor del host/ip o servidor        
        private static $servidor = 'http://localhost';     //host externo podria ser 'http://www.misitio.net/;
        private static $puerto = "";        
        private static $proyecto = 'Restaurant';      //variable con el nombre de la carpeta raiz        
        private static $direccion;              //variable para construir la direccion url        
        private static $archivos = 'Assets';    //variable para llevar el nombre de la ubicacion

        //
        private static function asignarDireccion(){
            self::$direccion = self::$servidor;
            if (self::$puerto != ''){
                self::$direccion .= ':' .self::$puerto. '/' . self::$proyecto. '/';
            }else{
                self::$direccion .= '/' .self::$proyecto . '/';
            }

            return self::$direccion;
        }

        //funcion a llamar para obtener la direccion url
        public static function url(){
            //variable interna
            $direccion = self::asignarDireccion(); //llamamos al metodo

            echo $direccion;
        }
        


            //funcion para direccionar los estilos
        public static function construirEstilos(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/bootstrap.min.css';
            echo $paraCss;
        }

        
        //funcion para construir los js
        public static function construirJs(){
            $direccion = self::asignarDireccion();
            $paraJS = $direccion . self::$archivos . '/js/bootstrap.bundle.js';
            echo $paraJS;
        }

        //llamar enviando archivos y tipo ejemplow      base::imagenes('logo.png'); <--para cada llamado de cada imagen seran de esta forma
        public static function imagenes($nombre){
            $direccion = self::asignarDireccion();
            $paraImgs = self::$direccion. self::$archivos .'/images/' . $nombre;
            echo $paraImgs;
        }
        
        public static function StyleHeader(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/style.css';
            echo $paraCss;
        }

        //funcion para construir al script.js para el footer
        public static function scriptJS(){
            $direccion = self::asignarDireccion();
            $paraJS = $direccion . self::$archivos . '/js/script.js';
            echo $paraJS;
        }

        //estilos para la vista reservation
        public static function Reservation(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/Reservation.css';
            echo $paraCss;
        }

        //estilos para la vista carrito de compras del admin
        public static function Carrito(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/carrito.css';
            echo $paraCss;
        }

        //funcion para llamar el js del carrito de compras del admin
        public static function carritojs(){
            $direccion = self::asignarDireccion();
            $paraJS = $direccion . self::$archivos . '/js/carrito.js';
            echo $paraJS;
        }
        
        //estilos para la vista carrito de compras de usuarios
        public static function CarritoUser(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/carritoUser.css';
            echo $paraCss;
        }

         //funcion para llamar el js del carrito de compras del admin
         public static function carritoUserjs(){
            $direccion = self::asignarDireccion();
            $paraJS = $direccion . self::$archivos . '/js/carritoUser.js';
            echo $paraJS;
        }

         //estilos para la vista para la tarjeta de usuarios para pagar
         public static function tarjetaUser(){
            $direccion = self::asignarDireccion();
            $paraCss = $direccion .  self::$archivos . '/css/tarjeta.css';
            echo $paraCss;
        }

        //funcion para llamar el js de la tarjeta del usuario
        public static function tarjetajs(){
            $direccion = self::asignarDireccion();
            $paraJS = $direccion . self::$archivos . '/js/tarjeta.js';
            echo $paraJS;
        }
    }

    
?>