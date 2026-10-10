<?php
// Evidencia de MODIFICAR: se cambia el dato de entrada (radio) y el resultado se actualiza.

class Circulo {
    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return M_PI * ($this->radio * $this->radio);
    }

    public function calcularPerimetro() {
        return 2 * M_PI * $this->radio;
    }
}

echo '<h3>Radio original: 4</h3>';
$miCirculo = new Circulo(4);
echo 'Área del círculo: ' . number_format($miCirculo->calcularArea(), 2, ".", "") . '<br>';
echo 'Perímetro del círculo: ' . number_format($miCirculo->calcularPerimetro(), 2, ".", "") . '<br>';

// Modificación del radio
echo '<h3>Radio modificado: 10</h3>';
$miCirculo = new Circulo(10);
echo 'Área del círculo: ' . number_format($miCirculo->calcularArea(), 2, ".", "") . '<br>';
echo 'Perímetro del círculo: ' . number_format($miCirculo->calcularPerimetro(), 2, ".", "") . '<br>';
?>
