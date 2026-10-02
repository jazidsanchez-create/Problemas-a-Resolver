<?php

class A {
    public static function miFuncion() {
        echo "Clase A <br>";
    }

    // Usando static:: (Late Static Binding)
    public static function otraFuncionStatic() {
        static::miFuncion();
    }

    // Usando self::
    public static function otraFuncionSelf() {
        self::miFuncion();
    }
}

class B extends A {
    public static function miFuncion() {
        echo "Clase B <br>";
    }
}

echo "--- Resultado con static:: ---<br>";
B::otraFuncionStatic(); // Imprime: Clase B

echo "<br>--- Resultado con self:: ---<br>";
B::otraFuncionSelf();   // Imprime: Clase A

?>