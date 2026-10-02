<?php

class Persona {
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(string $nombre, string $apellido, string $fechaNacimiento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getFechaNacimiento(): string {
        return $this->fechaNacimiento;
    }
}

class Estudiante extends Persona {
    protected string $matricula;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $matricula,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->matricula = $matricula;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getMatricula(): string { return $this->matricula; }
    public function getIndiceAcademico(): float { return $this->indiceAcademico; }
    public function getCohorte(): int { return $this->cohorte; }
    public function getEstadoAcademico(): int { return $this->estadoAcademico; }
    public function getModalidadEstudio(): int { return $this->modalidadEstudio; }
}

class Docente extends Persona {
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $maximoTitulo;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->maximoTitulo = $maximoTitulo;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente(): string { return $this->codigoDocente; }
    public function getDepartamento(): string { return $this->departamento; }
    public function getCategoria(): string { return $this->categoria; }
    public function getMaximoTitulo(): string { return $this->maximoTitulo; }
    public function getTipoContratacion(): string { return $this->tipoContratacion; }
}

// --- Pruebas de ejecución ---

$miEstudiante = new Estudiante(
    "8-988-123",
    3.5,
    2023,
    1, // 1 = Activo
    2, // 2 = Presencial
    "Juan",
    "Pérez",
    "2000-05-15"
);

echo "<h3>Datos del Estudiante:</h3>";
echo "Nombre: " . $miEstudiante->getNombre() . " " . $miEstudiante->getApellido() . "<br>";
echo "Matrícula: " . $miEstudiante->getMatricula() . "<br>";
echo "Índice: " . $miEstudiante->getIndiceAcademico() . "<br>";
echo "Cohorte: " . $miEstudiante->getCohorte() . "<br><br>";

$miDocente = new Docente(
    "DOC-4589",
    "Sistemas y Computación",
    "Titular",
    "Doctor/PhD",
    "Tiempo Completo",
    "Carlos",
    "Mendoza",
    "1980-11-20"
);

echo "<h3>Datos del Docente:</h3>";
echo "Nombre: " . $miDocente->getNombre() . " " . $miDocente->getApellido() . "<br>";
echo "Código: " . $miDocente->getCodigoDocente() . "<br>";
echo "Departamento: " . $miDocente->getDepartamento() . "<br>";
echo "Categoría: " . $miDocente->getCategoria() . "<br>";

?>