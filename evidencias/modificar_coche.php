<?php
// Evidencia de MODIFICAR: se cambian los atributos de un objeto existente usando sus setters.

class Coche {
    protected $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

class CocheDeLujo extends Coche {
    protected $extras;

    public function setExtras($extras) {
        $this->extras = $extras;
    }

    public function printCaracteristicas() {
        echo 'Color: ' . $this->color;
        echo '<hr/>';
        echo 'Extras: ' . $this->extras;
    }
}

$miCoche = new CocheDeLujo();
$miCoche->setColor('negro');
$miCoche->setExtras('TV');

echo '<h3>Antes de modificar</h3>';
$miCoche->printCaracteristicas();

// Modificación de los atributos
$miCoche->setColor('rojo');
$miCoche->setExtras('TV, asientos de cuero y GPS');

echo '<h3>Después de modificar</h3>';
$miCoche->printCaracteristicas();
?>
