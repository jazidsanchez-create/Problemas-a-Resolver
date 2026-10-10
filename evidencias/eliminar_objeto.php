<?php
// Evidencia de ELIMINAR: se destruye un objeto con unset() y se ejecuta su destructor.

class Coche {
    protected $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function __destruct() {
        echo "<p><strong>__destruct():</strong> el objeto Coche de color {$this->color} fue destruido.</p>";
    }
}

$miCoche = new Coche();
$miCoche->setColor('negro');
echo '<p>Objeto creado. Color: ' . $miCoche->getColor() . '</p>';

// Eliminación del objeto
unset($miCoche);

echo isset($miCoche)
    ? '<p>El objeto todavía existe.</p>'
    : '<p><strong>unset($miCoche):</strong> la variable ya no existe en memoria.</p>';
?>
