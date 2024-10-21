<?php
    include("hola.php");
    if (!$conectar) {
         echo "no se conecto";
    }
    else {
        echo "si se conecto";
    }
		if(isset($_POST['Submit'])){
        if (isset($_POST['nombre']) >=1 && isset($_POST['apellido']) >=1 && isset($_POST['correo']) >=1 && isset($_POST['asunto']) >=1 && isset($_POST['mensaje']) >=1) {
            $nombre=trim($_POST['nombre']);
            $apellido=trim($_POST['apellido']);
            $correo=trim($_POST['correo']);
            $asunto=trim($_POST['asunto']);
            $mensaje=trim($_POST['mensaje']);
            $consulta="INSERT INTO informacion(nombre,apellido,correo,asunto,mensaje) VALUES('$nombre','$apellido','$correo','$asunto','$mensaje')";
            $resultado=@mysqli_query($conectar,$consulta);
    }
    if ($resultado) {
        echo " datos guardados";
    }else {
        echo " no se guardo";
    }
  }

?> 