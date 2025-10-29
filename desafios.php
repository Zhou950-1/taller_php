<!--Desafío 1: La Sucesión de Fibonacci-->
<!--
La sucesión de Fibonacci es una secuencia de números donde cada número es la suma de
los dos anteriores (ej: 0, 1, 1, 2, 3, 5, 8...).

Tu tarea: Escribe un script que genere y muestre los primeros 20 números de la sucesión de
Fibonacci.
-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Desafíos PHP</title>
    </head>
    <body>
        <?php 
        
            // Desafíos de Lógica y Algoritmos Puros

            // Desafío 1: La Sucesión de Fibonacci
            /*
            La sucesión de Fibonacci es una secuencia de números donde cada número es la suma de
            los dos anteriores (ej: 0, 1, 1, 2, 3, 5, 8...).

            Tu tarea: Escribe un script que genere y muestre los primeros 20 números de la sucesión de
            Fibonacci.
            */

            $longitud = 20;

            function fibonacci($longitud) {

                $fibonacci = array(0, 1);

                for ($i = 1; $i < $longitud; $i++) {

                    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i];
                    
                }
                return $fibonacci;
            }

            print_r(fibonacci($longitud));
        ?>

        <?php

            // Desafío 2: Comprobador de Números Primos
            /*
            Un número primo es un número natural mayor que 1 que no tiene divisores positivos aparte
            de 1 y él mismo.

            Tu tarea: Declara una variable $numero = 29; (o cualquier otro número) y escribe un script
            que determine si ese número es primo o no, imprimiendo el resultado. Pista: necesitarás un
            bucle y el operador módulo (%).
            */



            // Desafíos de Manipulación de Datos

            // Desafío 3: ¿Es un Palíndromo?
            /*
            Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de
            derecha a izquierda (ej: "radar", "ana", "reconocer").

            Tu tarea: Declara una variable $palabra = "sometemos"; y escribe un script que compruebe
            si la palabra es un palíndromo sin usar funciones predefinidas de PHP para revertir strings
            (como strrev()). Imprime "Es un palíndromo" o "No es un palíndromo". Pista: puedes
            acceder a los caracteres de un string como si fuera un array (ej: $palabra[0]).
            */



            // Desafío 4: Ordenación Manual de un Array (Bubble Sort)
            /*
            El "Bubble Sort" o método de la burbuja es un algoritmo simple para ordenar una lista de
            números. Funciona revisando repetidamente la lista, comparando elementos adyacentes y
            cambiándolos de posición si están en el orden incorrecto.

            Tu tarea: Dado el array $numeros = [5, 2, 8, 1, 9, 4];, escribe un script que lo ordene de
            menor a mayor utilizando el algoritmo Bubble Sort. No puedes usar la función sort() de PHP.
            Al final, imprime el array ordenado.
            */



            // Desafío 5: Pirámide de Asteriscos
            /*
            Tu tarea: Usando bucles for anidados, escribe un script que imprima por pantalla una
            pirámide de asteriscos. La altura de la pirámide debe estar definida en una variable $altura
            = 10;.

            Resultado esperado para $altura = 5:
            */

            /*
            Recapiturando, ¿qué necesito?, imagina una pirámide centrada, con base 5 y espacios de 1 asterisco en las bases superiores.
            ¿Cómo, de forma recursiva añades dos asteriscos a la base inferior, y añades 1 espacio vacío a la base superior,
            de forma que en cada iteración se añada un espacio a la izquierda en cada base.

            No, más fácil, que el programa asigne los espacios necesarios mediante un contados que vaya restando, y así
            asignar espacios adecuados como relleno a todas las filas.

            Más fácil, solo piensa que es una concatenación de espacios vacíos con asteriscos, dado que ambos son String.
            */



        ?>
        
        <pre>

            <?php
                // altura = fila
                $altura = 5;

                // la base aumenta de forma impar, si la pirámide empieza por un asterisco, que vaya agregando dos asteriscos a la base por cada fila
                $base = ($altura - 1) * 2 + 1;
                $espacio = 0;

                $result = "";
                echo "<br>";

                while ($base >= 0) {
                    
                    $line = str_repeat(" ", $espacio) . str_repeat("*", $base) . "\n";
                    $result = $line . $result; // Mira que ingenioso, calculas desde la base y vas inviertiendo el orden de la pirámide

                    $espacio++;
                    $base = $base - 2;
                }
                echo $result;
            ?>

        </pre>

    </body>
</html>