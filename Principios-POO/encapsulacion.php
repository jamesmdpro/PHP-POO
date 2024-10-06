<?php
// Ejemplo 1: Nivel Muy Fácil
class Coche {
    // Propiedad privada
    private $marca; // Esta propiedad almacena la marca del coche. Es privada para proteger su acceso directo desde fuera de la clase.

    // Constructor
    public function __construct($marca) {
        // El constructor se llama al crear una nueva instancia de la clase Coche.
        // Se utiliza para inicializar la propiedad $marca con el valor proporcionado al crear el objeto.
        $this->marca = $marca; // Asigna el valor de la marca al atributo privado.
    }

    // Método público para obtener la marca
    public function obtenerMarca() {
        // Este método permite acceder al valor de la propiedad privada $marca.
        // Al ser público, puede ser llamado desde fuera de la clase, proporcionando una forma controlada de acceder a la información.
        return $this->marca; // Devuelve el valor de la propiedad $marca.
    }
}

// Uso del Ejemplo 1
$coche1 = new Coche("Toyota"); // Se crea una nueva instancia de la clase Coche, pasando "Toyota" como argumento para la marca.
echo $coche1->obtenerMarca(); // Llama al método obtenerMarca() para mostrar la marca del coche. Salida: Toyota
echo "<br>"; // Salto de línea para mejorar la legibilidad de la salida.

// ---------------------------------------------------

// Ejemplo 2: Nivel Medio
class CocheMedio {
    // Propiedades privadas
    private $marca;
    private $modelo;

    // Constructor
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método público para obtener la información del coche
    public function obtenerInfo() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo;
    }

    // Método público para cambiar el modelo
    public function cambiarModelo($nuevoModelo) {
        $this->modelo = $nuevoModelo;
    }
}

// Uso del Ejemplo 2
$coche2 = new CocheMedio("Toyota", "Corolla");
echo $coche2->obtenerInfo(); // Salida: Marca: Toyota, Modelo: Corolla
$coche2->cambiarModelo("Camry");
echo "<br>" . $coche2->obtenerInfo(); // Salida: Marca: Toyota, Modelo: Camry
echo "<br>"; // Salto de línea

// ---------------------------------------------------

// Ejemplo 3: Nivel Avanzado
class CocheAvanzado {
    // Propiedades privadas
    private $marca;
    private $modelo;
    private $velocidad;

    // Constructor
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = 0; // Velocidad inicial
    }

    // Método público para obtener la información del coche
    public function obtenerInfo() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Velocidad: " . $this->velocidad . " km/h";
    }

    // Método público para acelerar
    public function acelerar($incremento) {
        $this->velocidad += $incremento;
    }

    // Método público para frenar
    public function frenar($decremento) {
        $this->velocidad -= $decremento;
        if ($this->velocidad < 0) {
            $this->velocidad = 0; // No permitir velocidad negativa
        }
    }
}

// Uso del Ejemplo 3
$coche3 = new CocheAvanzado("Toyota", "Corolla");
$coche3->acelerar(50);
echo $coche3->obtenerInfo(); // Salida: Marca: Toyota, Modelo: Corolla, Velocidad: 50 km/h
$coche3->frenar(20);
echo "<br>" . $coche3->obtenerInfo(); // Salida: Marca: Toyota, Modelo: Corolla, Velocidad: 30 km/h
$coche3->frenar(40);
echo "<br>" . $coche3->obtenerInfo(); // Salida: Marca: Toyota, Modelo: Corolla, Velocidad: 0 km/h
?>
