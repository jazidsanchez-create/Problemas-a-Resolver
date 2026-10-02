<?php

final class Coche {
    public function getColor() {
        echo "Rojo";
    }
}

// Al intentar extender una clase 'final', PHP generará un Error Fatal:
/*
class CocheDeLujo extends Coche {
    // Error: Class CocheDeLujo may not inherit from final class (Coche)
}
*/

$miCoche = new Coche();
$miCoche->getColor();

?>