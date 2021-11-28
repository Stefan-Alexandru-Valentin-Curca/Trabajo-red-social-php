<?php
$ID = $_POST["Nombre"];
$POSTS = $_POST["Contraseña"];
echo $ID;
echo $POST;
$db = new mysqli("localhost", "Stefan", "234zysmn81ELPEPE", "Redsocial");
$sql="SELECT * FROM usuarios)";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    if ($ID == $row['Nombre'] and md5($password) == $row['Contraseña']){
        echo "Usuario encontrado";
    }
    else {
        echo "Usuario no encontrado";
    }
}
$result->close();
$db->close();
?>
