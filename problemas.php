<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>

        <?php

// Categoría 1: Variables y Tipos de Datos (Dificultad: Baja)

// Problema 1.1: Perfil de Usuario

    $nombre = "zhihui";
    $apellido = "zhou";
    $edad = 20;
    $altura = 1.72;
    $esEstudiante = true;

// Problema 1.2: Información de un Producto

    $producto = "Ratón chino";
    $precio = 0.49;
    $stock = 1000;
    $estaEnOferta = true;

// Problema 1.3: Constantes de la Aplicación

    define("SITE_NAME", "Mi Tienda Online");
    define("VERSION_APP", "1.0");

// Categoría 2: Operadores (Dificultad: Baja-Media)

// Problema 2.1: Calculadora Básica

    $num1 = 10;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $divicion = $num1 / $num2;

// Problema 2.2: Actualización de Stock
    
    $stock = 100;

    $venta = $stock - 25;
    $stock_restante = $venta;

    $reabastecido = $stock_restante + 50;
    $stock_reabastecido = $reabastecido;

// Problema 2.3: Concatenación de Textos

    $nombre = "Oskar";
    $apellido = " Calvo";
    $curso = " Desarrollo Web en Entorno Servidor";

    $fraseCompleta = $nombre . $apellido . $curso;

// Problema 2.4: Comparaciones Simples

    $edad1 = 20;
    $edad_minima = 18;

    $contraseñaGuardada = "1234";
    $contraseñaUsuario = "123";

// Problema 2.5: ¿Par o Impar?

    $numero_par_impar = 7;

    if ($numero_par_impar % 2 == 0) {
        $resultado_par_impar = $numero_par_impar . " Es par";
    } else {
        $resultado_par_impar = $numero_par_impar . " Es impar";
    }

// Categoría 3: Estructuras Condicionales (Dificultad: Media)

// Problema 3.1: Control de Acceso

    $edad2 = 17;

    if ($edad2 > 18) {
        $resultado_edad = "Pedes pasar";
    } else {
        $resultado_edad = "No puedes pasar";
    }

// Problema 3.2: Calificación de Examen

    $nota = 7.5;

    if ($nota >= 9) {
        $resultado_nota = "sobresaliente ";
    } elseif ($nota >= 7 && $nota <= 8.9) {
        $resultado_nota = "Notable " . $nota;
    } elseif ($nota >= 5 && $nota <= 6.9) {
        $resultado_nota = "Aprobado " . $nota;
    } else {
        $resultado_nota = "Suspenso " . $nota;
    }

// Problema 3.3: Menú del Día con switch

    $diaSemana = "lunes";

    switch ($diaSemana) {
        case "lunes":
            $resultado_switch = "Lentejas";
            break;
        case "miércoles":
            $resultado_switch = "Pealla";
            break;
        case "viernes":
            $resultado_switch = "Pescado al horno";
            break;
        default:
            $resultado_switch = "Hoy no hay plato especial";
    }

// Problema 3.4: Verificación de Usuario Avanzada

    $rolUsuario = "admin";
    $usuarioActivo = true;

    if ($rolUsuario === "admin" && $usuarioActivo == true) {
        $mensaje = "Acceso concedido";
    } else {
        $mensaje = "Acceso denegado";
    }

// Categoría 4: Bucles (Dificultad: Media-Alta)

// Problema 4.1: Tabla de Multiplicar del 7

    $multiplicador = 7;

// Problema 4.2: Cuenta Atrás para Año Nuevo

    $contador = 0;

// Problema 4.3: Recorrer Nombres

    $alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

// Problema 4.4: Listado de Productos

    $productos = [
        ["nombre" => "Teclado", "precio" => 50],
        ["nombre" => "Ratón", "precio" => 25],
        ["nombre" => "Monitor", "precio" => 200]
    ];

// Categoría 5: Arrays (Dificultad: Alta)

// Problema 5.1: Ficha de Usuario

    $usuario = [
        ["nombre" => "Zhou Zhihui", "edad" => 20, "email" => "zzh0001@alu.medac.es", "estudiante" => true]
    ];

// Problema 5.2: Filtrado de Notas

    $notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

// Problema 5.3: Lista de la Compra Avanzada

    $listaCompra = [
        "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
        "Lácteos" => ["Leche", "Queso"],
        "Limpieza" => ["Detergente", "Lejía"]
    ];

// Problema 5.4: Calculando el Total del Carrito

    $total = 0;

        ?>

        <main>

            <h1>Categoría 1: Variables y Tipos de Datos (Dificultad: Baja)</h1>
            <h2>Problema 1.1: Perfil de Usuario</h2>
            <p><strong>nombre:</strong> <?php echo $nombre;?></p>
            <p><strong>apellido:</strong> <?php echo $apellido; ?></p>
            <p><strong>edad:</strong> <?php echo $edad; ?></p>
            <p><strong>altura:</strong> <?php echo $altura; ?> metros</p>
            <p><strong>estudiante:</strong> <?php echo $esEstudiante ? "si" : "no"; ?></p>


            <h2>Problema 1.2: Información de un Producto</h2>
            <p><strong>producto:</strong> <?php echo $producto; ?><p>
            <p><strong>precio:</strong> <?php echo $precio; ?> €<p>
            <p><strong>stock:</strong> <?php echo $stock; ?><p>
            <p><strong>oferta:</strong> <?php echo $estaEnOferta ? "si" : "no"; ?><p>


            <h2>Problema 1.3: Constantes de la Aplicación</h2>
            <p><strong>SITE_NAME:</strong> <?php echo SITE_NAME; ?><p>
            <p><strong>VERSION_APP:</strong> <?php echo VERSION_APP; ?><p>

            
            <h1>Categoría 2: Operadores (Dificultad: Baja-Media)</h1>
            <h2>Problema 2.1: Calculadora Básica</h2>
            <p><strong>Suma:</strong> <?php echo $suma; ?></p>
            <p><strong>Resta:</strong> <?php echo $resta; ?></p>
            <p><strong>Multiplicación:</strong> <?php echo $multiplicacion; ?></p>
            <p><strong>Divición:</strong> <?php echo $divicion; ?></p>


            <h2>Problema 2.2: Actualización de Stock</h2>
            <p><strong>Stock inicial:</strong> <?php echo $stock; ?></p>
            <p><strong>Stock restante:</strong> <?php echo $stock_restante; ?></p>
            <p><strong>Stock reabast$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];ecido:</strong> <?php echo $stock_reabastecido; ?></p>


            <h2>Problema 2.3: Concatenación de Textos</h2>
            <p><strong>Frase completa:</strong> <?php echo $fraseCompleta; ?></p>


            <h2>Problema 2.4: Comparaciones Simples</h2>
            <p><strong>Edad:</strong></p>

            <!--Curioso PHP https://www.php.net/manual/es/language.basic-syntax.phpmode.php-->
            <?php var_dump($edad1 >= $edad_minima); ?>
            <?php if ($edad1 >= $edad_minima): ?>
                tu edad es mayor que la edad minima.
            <?php else: ?>
                tu edad es menor que la edad minima.
            <?php endif; ?>

            <p><strong>Contraseña:</strong></p>

            <?php var_dump($contraseñaGuardada === $contraseñaUsuario); ?>
            <?php if ($contraseñaGuardada === $contraseñaUsuario): ?>
                tu contraseña es correcto.
            <?php else: ?>
                tu contraseña no es correcto.
            <?php endif; ?>


            <h2>Problema 2.5: ¿Par o Impar?</h2>
            <p><strong>Resultado par impar:</strong> <?php echo $resultado_par_impar; ?></p>

            <h1>Categoría 3: Estructuras Condicionales (Dificultad: Media)</h1>
            <h2>Problema 3.1: Control de Acceso</h2>
            <p><strong>Zona de control:</strong> <?php echo $resultado_edad;?></p>

            <h2>Problema 3.2: Calificación de Examen</h2>
            <p><strong>Resultado de la nota:</strong> <?php echo $resultado_nota;?></p>

            <h2>Problema 3.3: Menú del Día con switch</h2>
            <p><strong>Plato del día:</strong> <?php echo $resultado_switch;?></p>

            <h2>Problema 3.4: Verificación de Usuario Avanzada</h2>
            <p><strong>Resultado de verificación:</strong> <?php echo $mensaje;?></p>

            <h1>Categoría 4: Bucles (Dificultad: Media-Alta)</h1>
            <h2>Problema 4.1: Tabla de Multiplicar del 7</h2>
            <?php for ($i = 0; $i < 11; $i++): ?>
                <?php echo $multiplicador * $i; ?><br>
            <?php endfor; ?>

            <h2>Problema 4.2: Cuenta Atrás para Año Nuevo</h2>
            <?php while ($contador < 10): ?>
                <?php $contador++; ?>
                <?php echo $contador; ?><br>
                <?php if ($contador == 10): ?>
                    <?php echo "Feliz año nuevo!"; ?>
                <?php endif; ?>
            <?php endwhile; ?>

            <h2>Problema 4.3: Recorrer Nombres</h2>
            <?php foreach ($alumnos as $valor): ?>
                <?php echo "Hola $valor"; ?><br>
            <?php endforeach; ?>
            
            <h2>Problema 4.4: Listado de Productos</h2>
            <?php foreach ($productos as $valor): ?>
                <?php echo "Producto: " . $valor["nombre"] . ", Precio: " . $valor["precio"]; ?><br>
            <?php endforeach; ?>

            <h1>Categoría 5: Arrays (Dificultad: Alta)</h1>
            <h2>Problema 5.1: Ficha de Usuario</h2>
            <?php foreach ($usuario as $valor): ?>
                <?php echo "Nombre: " . $valor["nombre"] . ", Edad: " . $valor["edad"] . ", Email:" . $valor["email"] . ", Estudiante" . $valor["estudiante"]; ?><br>
            <?php endforeach; ?>

            <h2>Problema 5.2: Filtrado de Notas</h2>
            <?php foreach ($notas as $nota): ?>
                <?php if ($nota >= 5): ?>
                    <?php echo "Aprobados: " . $nota; ?><br>
                <?php endif; ?>
            <?php endforeach; ?>

            <h2>Problema 5.3: Lista de la Compra Avanzada</h2>
            <?php foreach ($listaCompra as $valor): ?> <!--El primer foreach recorre sobre el primer array, lo vamos a llamar categorías de producto, el segundo recorre sobre los productos-->
                <?php foreach ($valor as $valor2): ?>
                    <?php echo $valor2 ?><br>
                <?php endforeach; ?>
            <?php endforeach; ?>

            <h2>Problema 5.4: Calculando el Total del Carrito</h2>
            
            <?php foreach ($productos as $valor): ?>
                <?php $total += $valor["precio"]; ?>
            <?php endforeach; ?>
            <?php echo "Suma total del carrito: " . $total; ?>

            

        </main>
    </body>
</html>