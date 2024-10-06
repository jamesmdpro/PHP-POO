<?php

// Ejemplo 1: Polimorfismo Básico
// Clase base que representa un vehículo
class Vehiculo {
    // Método que debe ser implementado por las clases que heredan
    public function obtenerTipo() {
        return "Vehículo"; // Método que puede ser sobrescrito por las clases derivadas.
    }

    // Método para iniciar el vehículo
    public function iniciar() {
        return "El vehículo ha iniciado."; // Mensaje común para todos los vehículos.
    }
}

// Clase que hereda de Vehiculo
class Coche extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca del coche

    // Constructor de la clase Coche
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Coche"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca del coche.
    }
}

// Clase que hereda de Vehiculo
class Moto extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca de la moto

    // Constructor de la clase Moto
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Moto"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca de la moto.
    }
}

// Uso del Ejemplo 1
function mostrarTipo(Vehiculo $vehiculo) {
    echo $vehiculo->obtenerTipo(); // Llama al método obtenerTipo() del objeto pasado como argumento.
    echo "<br>"; // Salto de línea
}

$coche1 = new Coche("Toyota"); // Se crea una instancia de la clase Coche, pasando "Toyota" como argumento.
$moto1 = new Moto("Yamaha"); // Se crea una instancia de la clase Moto, pasando "Yamaha" como argumento.

mostrarTipo($coche1); // Salida: Coche
mostrarTipo($moto1); // Salida: Moto
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 2: Polimorfismo con Métodos Comunes
// Clase que hereda de Vehiculo
class Camion extends Vehiculo {
    private $marca; // Propiedad para almacenar la marca del camión

    // Constructor de la clase Camion
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Camión"; // Devuelve el tipo de vehículo.
    }

    // Sobrescritura del método iniciar
    public function iniciar() {
        return "El camión ha iniciado con carga."; // Mensaje específico para el camión.
    }

    // Método para obtener la marca
    public function obtenerMarca() {
        return $this->marca; // Devuelve la marca del camión.
    }
}

// Uso del Ejemplo 2
$camion1 = new Camion("Volvo"); // Se crea una instancia de la clase Camion, pasando "Volvo" como argumento.
echo $camion1->iniciar(); // Llama al método iniciar() del camión. Salida: El camión ha iniciado con carga.
echo "<br>"; // Salto de línea
mostrarTipo($camion1); // Salida: Camión
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 3: Polimorfismo en Arreglos
// Función que inicia todos los vehículos en un arreglo
function iniciarVehiculos(array $vehiculos) {
    foreach ($vehiculos as $vehiculo) {
        echo $vehiculo->iniciar(); // Llama al método iniciar() de cada vehículo en el arreglo.
        echo "<br>"; // Salto de línea
    }
}

// Uso del Ejemplo 3
$vehiculos = [$coche1, $moto1, $camion1]; // Arreglo de vehículos.
iniciarVehiculos($vehiculos); // Inicia todos los vehículos en el arreglo.
?>
