<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=login_maestros', 'root', '');
    }
    
    catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }

?>