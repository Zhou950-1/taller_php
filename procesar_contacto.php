<?php
    // PHP (recibe_post.php)
    $recibirNombre = isset($_POST['nombre_contacto']) ? $_POST['nombre_contacto'] : 'Sin nombre';
    $recibirEmai = isset($_POST['email_contacto']) ? $_POST['email_contacto'] : 'Sin email';

    echo "Tu nombre de contacto: " . htmlspecialchars($recibirNombre);
    echo "Tu email de contacto: " . htmlspecialchars($recibirEmai);
    // ¡NO mostrar la clave recibida en producción!
    // echo "<br>Clave: " . htmlspecialchars($claveRecibida);
?>