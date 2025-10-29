<?php
    // PHP (recibe_get.php)
    $terminosRecibidos = isset($_GET['termino_busqueda']) ? $_GET['termino_busqueda'] : 'N/A';

    echo "Término de búsqueda introducido: " . htmlspecialchars($terminosRecibidos);
?>