# Prácticas de Programación Orientada a Objetos en PHP

Este repositorio contiene la solución a la serie de laboratorios y ejercicios prácticos de Programación Orientada a Objetos (POO) en PHP, que abarcan conceptos como herencia, modificadores de acceso, enlace estático en tiempo de ejecución (*Late Static Binding*), restricción de herencia y modelado de clases.

---

## 📋 Contenido de las Prácticas

### 1. Herencia y Modificadores de Acceso (`Coche` y `CocheDeLujo`)
* **Descripción:** Implementación del concepto de herencia utilizando una clase base `Coche` y una clase derivada `CocheDeLujo`.
* **Conceptos:** Atributos protegidos (`protected`), sobrescritura de métodos, llamados a getter/setter e instanciación de clases hijas.

### 2. Late Static Binding (`static::` vs `self::`)
* **Descripción:** Demostración práctica de la diferencia en la resolución de ámbito en tiempo de ejecución entre `static::` y `self::`.
* **Conceptos:** Métodos estáticos, herencia de métodos estáticos, enlace estático tardío (*Late Static Binding*).

### 3. Restricción de Herencia (`final`)
* **Descripción:** Ejemplo del uso de la palabra clave `final` para prevenir la sobrescritura de métodos o impedir que una clase sea extendida por otra.
* **Conceptos:** Clases finales, seguridad e integridad del diseño en POO.

### 4. Cálculo de Área y Perímetro de un Círculo
* **Descripción:** Clase `Circulo` que recibe el radio como parámetro y realiza el cálculo de área y perímetro utilizando la constante matemática `M_PI`.
* **Conceptos:** Constructor (`__construct`), encapsulamiento de datos privados (`private`), formato de salida numérico (`number_format`).

### 5. Modelado de Dominio: `Persona`, `Estudiante` y `Docente`
* **Descripción:** Diseño e implementación de un modelo jerárquico del ámbito académico donde `Estudiante` y `Docente` heredan de la clase base `Persona`.
* **Conceptos:** Tipado estricto de retorno y parámetros, uso de `parent::__construct()`, abstracción de atributos específicos por rol.

---


## 📁 Estructura del Proyecto
Plaintext
.
├── Practica1_Herencia.php
├── Practica2_StaticBinding.php
├── Practica3_FinalClass.php
├── Practica4_Circulo.php
└── Practica5_PersonaEstudianteDocente.php
## 📝 Autor
Jazid Sanchez 8-1038-1191