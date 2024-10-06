<?php


// Clase abstracta que define un contrato para los vehículos
abstract class Vehiculo {
    // Método abstracto que debe ser implementado por las clases que heredan
    abstract public function obtenerTipo(); // Este método no tiene implementación en la clase base y debe ser definido en las clases derivadas.

    // Método concreto que puede ser utilizado por las clases que heredan
    public function iniciar() {
        return "El vehículo ha iniciado."; // Método que proporciona funcionalidad común a todos los vehículos.
    }
}

// Clase que hereda de Vehiculo
class Coche extends Vehiculo {
    private $marca; // Propiedad privada para almacenar la marca del coche

    // Constructor de la clase Coche
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado al crear la instancia.
    }

    // Implementación del método abstracto de la clase base
    public function obtenerTipo() {
        return "Coche"; // Devuelve el tipo de vehículo, en este caso "Coche".
    }

    // Método para obtener la marca del coche
    public function obtenerMarca() {
        return $this->marca; // Devuelve el valor de la propiedad marca.
    }
}

// Uso del Ejemplo 1
$coche1 = new Coche("Toyota"); // Se crea una instancia de la clase Coche, pasando "Toyota" como argumento al constructor.
echo $coche1->obtenerTipo(); // Llama al método obtenerTipo() para mostrar el tipo de vehículo. Salida: Coche
echo "<br>"; // Salto de línea para mejorar la legibilidad de la salida.
echo $coche1->iniciar(); // Llama al método iniciar() para mostrar un mensaje de inicio del vehículo. Salida: El vehículo ha iniciado.
echo "<br>"; // Salto de línea para mejorar la legibilidad de la salida.
echo "Marca: " . $coche1->obtenerMarca(); // Llama al método obtenerMarca() para mostrar la marca del coche. Salida: Marca: Toyota
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 2: Nivel Medio
// Clase que hereda de Vehiculo
class Moto extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca de la moto

    // Constructor
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca
    }

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Moto"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca de la moto
    }
}

// Uso del Ejemplo 2
$moto1 = new Moto("Yamaha"); // Se crea una instancia de la clase Moto, pasando "Yamaha" como argumento.
echo $moto1->obtenerTipo(); // Salida: Moto
echo "<br>"; // Salto de línea
echo $moto1->iniciar(); // Salida: El vehículo ha iniciado.
echo "<br>"; // Salto de línea
echo "Marca: " . $moto1->obtenerMarca(); // Salida: Marca: Yamaha
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 3: Nivel Avanzado
// Clase que hereda de Vehiculo
class CocheAvanzado extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca del coche avanzado

    // Constructor
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca
    }

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Coche Avanzado"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca del coche avanzado
    }

    // Método para obtener la velocidad máxima
    public function obtenerVelocidadMaxima() {
        return 200; // Devuelve la velocidad máxima del coche.
    }
}

// Clase que hereda de Vehiculo
class MotoAvanzada extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca de la moto avanzada

    // Constructor
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca
    }

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Moto Avanzada"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca de la moto avanzada
    }

    // Método para obtener la velocidad máxima
    public function obtenerVelocidadMaxima() {
        return 150; // Devuelve la velocidad máxima de la moto.
    }
}

// Uso del Ejemplo 3
$cocheAvanzado = new CocheAvanzado("Audi"); // Se crea una instancia de la clase CocheAvanzado, pasando "Audi" como argumento.
echo $cocheAvanzado->obtenerTipo(); // Salida: Coche Avanzado
echo "<br>"; // Salto de línea
echo "Marca: " . $cocheAvanzado->obtenerMarca(); // Salida: Marca: Audi
echo "<br>"; // Salto de línea
echo "Velocidad máxima: " . $cocheAvanzado->obtenerVelocidadMaxima() . " km/h"; // Salida: Velocidad máxima: 200 km/h
echo "<br>"; // Salto de línea

$motoAvanzada = new MotoAvanzada("Kawasaki"); // Se crea una instancia de la clase MotoAvanzada, pasando "Kawasaki" como argumento.
echo $motoAvanzada->obtenerTipo(); // Salida: Moto Avanzada
echo "<br>"; // Salto de línea
echo "Marca: " . $motoAvanzada->obtenerMarca(); // Salida: Marca: Kawasaki
echo "<br>"; // Salto de línea
echo "Velocidad máxima: " . $motoAvanzada->obtenerVelocidadMaxima() . " km/h"; // Salida: Velocidad máxima: 150 km/h
echo "<br>"; // Salto de línea
echo $cocheAvanzado->iniciar(); // Salida: El vehículo ha iniciado.
?>