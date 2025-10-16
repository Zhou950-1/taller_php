<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Taller Avanzado PHP</title>
    </head>
    <body>
        <?php 
            // Nivel 1: Lógica con Funciones

            /*
            Problema 1: Calculadora de Descuentos Crea una función calcularDescuento($precio, $categoria) que aplique 
            diferentes descuentos según la categoría de un producto:

            Si la categoría es 'electronica', aplica un 15% de descuento.
            Si la categoría es 'ropa', aplica un 10% de descuento.
            Si la categoría es 'alimentacion', aplica un 5% de descuento. La función debe devolver el precio final después del descuento.
            */
            $precio = 199;
            $categoria = "electronica";

            function calcularDescuentos($precio, $categoria) {
                if ($categoria == "electronica") {
                    $descuentoAplicado = $precio - ($precio / 15);
                    return round($descuentoAplicado, 2);
                } else if ($categoria == "ropa") {
                    $descuentoAplicado = $precio - ($precio / 10);
                    return round($descuentoAplicado, 2);
                } else if ($categoria == "alimentacion") {
                    $descuentoAplicado = $precio - ($precio / 5);
                    return round($descuentoAplicado, 2);
                }
            }

            echo calcularDescuentos($precio, $categoria) . "€" . "<br><br>";

            /*
            Problema 2: El Juego "FizzBuzz" Crea una función fizzBuzz($numero) que reciba un número y devuelva:

            "FizzBuzz" si el número es divisible por 3 y por 5.
            "Fizz" si el número es solo divisible por 3.
            "Buzz" si el número es solo divisible por 5.
            El propio número si no es divisible ni por 3 ni por 5.
            */

            $n1 = 10;

            function FizzBuzz($n1) {
                if ($n1 % 3 == 0 && $n1 % 5 == 0) {
                    return "FizzBuzz";
                } else if ($n1 % 3 == 0) {
                    return "Fizz";
                } else if ($n1 % 5 == 0) {
                    return "Buzz";
                } else {
                    return $n1;
                }
            }

            echo FizzBuzz($n1) . "<br><br>";

            /*
            Problema 3: Validador de Contraseña Crea una función validarContraseña($pass) que 
            verifique la fortaleza de una contraseña y devuelva un string:

            "FUERTE" si tiene más de 8 caracteres, una mayúscula y un número.
            "MEDIA" si tiene más de 8 caracteres pero no cumple alguna de las otras dos condiciones.
            "DEBIL" si tiene 8 caracteres o menos. 
            Pista: Puedes necesitar funciones nativas como 
            strlen(), strtoupper() o is_numeric().
            */

            $password = "holahA1aaaaaaa";

            function passwordStrength($password) {
                $Numero = 0;
                $Mayuscula = 0;

                $tieneNumero = false;
                $tieneMayuscula = false;

                $character = "";

                for ($i = 0; $i < strlen($password); $i++) {

                    $character = $password[$i];

                    // ¿El carácter (String) se interpreta como número?
                    if (is_numeric($character)) {
                        $Numero++;
                    }
                    
                    // ¿El carácter actual es igual a su contraparte en mayúsculas?
                    if ($character == strtoupper($character)) {
                        $Mayuscula++;
                    }
                }

                if ($Numero >= 1) {
                    $tieneNumero = true;
                }

                if ($Mayuscula >= 1) {
                    $tieneMayuscula = true;
                }

                if (strlen($password) > 8 && $tieneNumero == true && $tieneMayuscula == true) {
                    return "FUERTE";
                } else if (strlen($password) > 8) {
                    return "MEDIA";
                } else {
                    return "DEBIL";
                }

            }

            echo passwordStrength($password) . "<br><br>";

            /*
            Problema 4: Encontrar el Valor Máximo Crea una función encontrarMaximo($array) 
            que reciba un array de números y devuelva el número más alto del array sin usar la función max() de PHP.
            */

            $arrayNumero = [1, 100, 6, 666];

            function encontrarMaximo($arrayNumero) {

                $elemento = 0;
                $resultado = 0;

                for ($i = 0; $i < count($arrayNumero); $i++) {

                    $elemento = $arrayNumero[$i];

                    if ($elemento > $resultado) {
                        $resultado = $elemento;
                    }
                }
                return $resultado;
            }

            echo encontrarMaximo($arrayNumero) . "<br><br>";

            /*
            Problema 5: Filtrar Usuarios por Criterio Dado el siguiente array de usuarios:

            Manual de array_filter:
            https://www.php.net/manual/es/function.array-filter.php

            Cómo pasarle dos argumentos a la función anónima del array_filter:
            https://stackoverflow.com/questions/5482989/php-array-filter-with-arguments
            */

            $listasUsuarios = [
                ["nombre" => "Ana", "edad" => 25, "activo" => true, "creditos_sociales" => 0],
                ["nombre" => "Juan", "edad" => 17, "activo" => true, "creditos_sociales" => 0],
                ["nombre" => "Pedro", "edad" => 35, "activo" => false, "creditos_sociales" => 0],
                ["nombre" => "Sofía", "edad" => 22, "activo" => true, "creditos_sociales" => 0],
                ["nombre" => "Zhihui", "edad" => 666, "activo" => true, "creditos_sociales" => 10000]
            ];

            $nombre = "Pedro";

            // FIltrar de edad estático, mayor o igual que 18
            function filtroDeEdad($listasUsuarios) {

                // Internamente recorre el array como un foreach y le pasa los elementos del array 
                // al argumento de la función, en este caso da igual el nombre del argumento,
                // es un poco raro, devuelve lo que a devuelto la función.
                return array_filter($listasUsuarios,

                    function ($usuarioDevuelto) {
                        return $usuarioDevuelto["edad"] >= 18;
                    }
                );

            }

            // Filtro por estado activo
            function filtroDeEstado($listasUsuarios) {

                return array_filter($listasUsuarios,
                    
                    function ($usuarioDevuelto) {
                        return $usuarioDevuelto["activo"] == true;
                    }
                );

            }

            // Filtro de nombre
            function filtroDeNombre($listasUsuarios, $nombre) {

                $nombreEnMayusculas = strtoupper($nombre);

                return array_filter($listasUsuarios,
                    
                    // Por defecto, no se puede añadir dos argumentos
                    // a una función anónima, a menos que uses function ($argumento1) use ($argumento2).
                    function ($usuarioDevuelto) use ($nombreEnMayusculas) {
                        return strtoupper($usuarioDevuelto["nombre"]) == $nombreEnMayusculas;
                    }
                );

            }

            // Filtro de créditos sociales
            function filtroDeCreditosSociales($listasUsuarios) {

                return array_filter($listasUsuarios,

                    function ($usuarioDevuelto) {
                        return $usuarioDevuelto["creditos_sociales"] >= 10000;
                    }
                );

            }

            // print_r suena a pintar de forma recursiva
            print_r(filtroDeEdad($listasUsuarios));
            echo "<br><br>";
            print_r(filtroDeEstado($listasUsuarios));
            echo "<br><br>";
            print_r(filtroDeNombre($listasUsuarios, $nombre));
            echo "<br><br>";
            print_r(filtroDeCreditosSociales($listasUsuarios));

        ?>
    </body>
</html>