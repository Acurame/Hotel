<?php
    class db{
        public function conexion($consult){
            $conexion = mysqli_connect('localhost', 'root', '','miniproy') 
            or die(mysqli_error($conexion));

            $conexion_ =  mysqli_query($conexion,$consult);

            return $conexion_;
        }
    }
?>