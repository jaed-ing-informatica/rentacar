Hosting guebs
forbreak
Estructuras de Control
PHP Manual
foreach
(PHP 4, PHP 5)

El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada. Existen dos sintaxis:

foreach (expresión_array as $valor)
    sentencias
foreach (expresión_array as $clave => $valor)
    sentencias
La primera forma recorre el array dado por expresión_array. En cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posición (así en la próxima iteración se estará observando el siguiente elemento).

La segunda forma además asigna la clave del elemento actual a la variable $clave en cada iteración.

También es posible personalizar la iteración de objetos.

Nota:

Cuando foreach inicia su ejecución, el puntero interno del array se pone automáticamente en el primer elemento del array. Esto significa que no es necesario llamar la función reset() antes de un bucle foreach.

Ya que foreach depende el puntero de array interno, cambiar éste dentro del bucle puede conducir a un comportamiento inesperado.

Para poder modificar directamente los elementos del array dentro de bucle, se ha de anteponer & a $valor. En este caso el valor será asignado por referencia.

<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento
?>
Referenciar $valor sólo es posible si el array iterado puede ser referenciado (es decir, si es una variable). El siguiente código no funcionará:

<?php
foreach (array(1, 2, 3, 4) as &$valor) {
    $valor = $valor * 2;
}
?>
Advertencia
La referencia del $valor y el último elemento del array permanecen aún después del bucle foreach. Se recomienda destruirlos con unset().

Nota:

foreach no soporta la capacidad de suprimir mensajes de error usando '@'.

Se puede haber notado que las siguientes construcciones son funcionalmente idénticas:

<?php
$array = array("uno", "dos", "tres");
reset($array);
while (list(, $valor) = each($array)) {
    echo "Valor: $valor<br />\n";
}

foreach ($array as $valor) {
    echo "Valor: $valor<br />\n";
}
?>
Las siguientes construcciones también son funcionalmente idénticas:

<?php
$array = array("uno", "dos", "tres");
reset($array);
while (list($clave, $valor) = each($array)) {
    echo "Clave: $clave; Valor: $valor<br />\n";
}

foreach ($array as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor<br />\n";
}
?>
Algunos ejemplos más para demostrar su uso:

<?php
/* Ejemplo 1 de foreach: sólo el valor */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.\n";
}

/* Ejemplo 2 de foreach: valor (con su notación de acceso manual impreso con fines ilustrativos) */

$a = array(1, 2, 3, 17);

$i = 0; /* sólo para efectos ilustrativos */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* Ejemplo 3 de foreach: clave y valor */

$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* Ejemplo 4 de foreach: arrays multidimensionales */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* Ejemplo 5 de foreach: arrays dinámicos */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>
Utilizando arrays anidados con list()
(PHP 5 >= 5.5.0)

PHP 5.5 añade la posibilidad de recorrer un array de arrays y utilizar el array interior en las variables del bucle proporcionando list() como el valor.

Por ejemplo:

<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a contiene el primer elemento del array interior,
    // y $b contiene el segundo elemento.
    echo "A: $a; B: $b\n";
}
?>
El resultado del ejemplo sería:

A: 1; B: 2
A: 3; B: 4
Puedes proporcionar menos elementos a list() de los que hay en el array interior, en cuyo caso los elementos sobrantes del array serán descartados:

<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a)) {
    // Observa que no hay $b en este caso.
    echo "$a\n";
}
?>
El resultado del ejemplo sería:

1
3
Se generará un notice si no hay suficientes elementos en el array para completar el list():

<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b, $c)) {
    echo "A: $a; B: $b; C: $c\n";
}
?>
El resultado del ejemplo sería:


Notice: Undefined offset: 2 in example.php on line 7
A: 1; B: 2; C: 

Notice: Undefined offset: 2 in example.php on line 7
A: 3; B: 4; C: 
forbreak
Estructuras de Control
PHP Manual