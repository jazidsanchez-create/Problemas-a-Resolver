<?php

class Persona {
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }
}

class Docente extends Persona {
    private string $materia;

    public function __construct(string $nombre, int $edad, string $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function getMateria(): string {
        return $this->materia;
    }
}

class Studente extends Persona {
    private string $matricula;

    public function __construct(string $nombre, int $edad, string $matricula) {
        parent::__construct($nombre, $edad);
        $this->matricula = $matricula;
    }

    public function getMatricula(): string {
        return $this->matricula;
    }
}

// --- Ejemplo de uso ---
$docente = new Docente("Carlos", 40, "Programación Web");
$estudiante = new Studente("Ana", 20, "A01234567");

echo "Docente: " . $docente->getNombre() . " - Materia: " . $docente->getMateria() . "\n";
echo "Estudiante: " . $estudiante->getNombre() . " - Matrícula: " . $estudiante->getMatricula() . "\n";

?>