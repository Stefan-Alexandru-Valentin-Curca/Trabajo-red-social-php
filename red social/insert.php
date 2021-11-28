<?php
    $Nombre= "pepitok";
    $Contraseña ="12345fewffrrwrf"; 
    $db = new mysqli ("localhost","Stefan","234zysmn81ELPEPE","redsocial");
    $password_md5 = md5($Contraseña);
    #comprobación de si: el usuario ya existe que no añadamos el registro.
    $existeSql = "select * from usuarios where nombre='".$Nombre. "' and Contraseña='".$password_md5."';";
    $result = $db->query($existeSql);
    if (mysqli_num_rows ( $result )==0) {
        insertar_usuario_password($Nombre,$password_md5,$db);       
    } else {
        echo "ya existe el usuario";
    }
    # esta función inserta el usuario y el pass en md5 en la base de datos    
    function insertar_usuario_password ($Nombre, $password_md5, $db) {
        $sql = "insert into usuarios values ('".$Nombre."','".$password_md5."');";
        # ejecuta la query
        if (!$db->query($sql)){
            echo "error al insertar (" . $db->errno . ") " . $db->error;
        } else {
            echo "USUARIO REGISTRADO EN LA BASE DE DATOS";
        }
    }
?>