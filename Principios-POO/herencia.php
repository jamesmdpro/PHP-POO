<?php

// Ejemplo 1: Herencia Básica
// Clase base que representa un vehículo
class Vehiculo {
    protected $marca; // Propiedad protegida para almacenar la marca del vehículo

    // Constructor de la clase Vehiculo
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado al crear la instancia.
    }

    // Método para obtener la marca del vehículo
    public function obtenerMarca() {
        return $this->marca; // Devuelve el valor de la propiedad marca.
    }

    // Método abstracto que debe ser implementado por las clases que heredan
    public function obtenerTipo() {
        return "Vehículo"; // Método que puede ser sobrescrito por las clases derivadas.
    }
}

// Clase que hereda de Vehiculo
class Coche extends Vehiculo {
    private $modelo; // Propiedad privada para almacenar el modelo del coche

    // Constructor de la clase Coche
    public function __construct($marca, $modelo) {
        parent::__construct($marca); // Llama al constructor de la clase base (Vehiculo) para inicializar la marca.
        $this->modelo = $modelo; // Inicializa la propiedad modelo con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Coche"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la información del coche
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Modelo: " . $this->modelo; // Devuelve la información del coche.
    }
}

// Uso del Ejemplo 1
$coche1 = new Coche("Toyota", "Corolla"); // Se crea una instancia de la clase Coche, pasando "Toyota" y "Corolla" como argumentos.
echo $coche1->obtenerTipo(); // Llama al método obtenerTipo() para mostrar el tipo de vehículo. Salida: Coche
echo "<br>"; // Salto de línea
echo $coche1->iniciar(); // Llama al método iniciar() para mostrar un mensaje de inicio del vehículo. Salida: El vehículo ha iniciado.
echo "<br>"; // Salto de línea
echo "Marca: " . $coche1->obtenerInfo(); // Llama al método obtenerInfo() para mostrar la información del coche. Salida: Marca: Toyota, Modelo: Corolla
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 2: Herencia con Métodos Adicionales
// Clase que hereda de Vehiculo
class Moto extends Vehiculo {
    private $tipo; // Propiedad privada para almacenar el tipo de moto

    // Constructor de la clase Moto
    public function __construct($marca, $tipo) {
        parent::__construct($marca); // Llama al constructor de la clase base (Vehiculo) para inicializar la marca.
        $this->tipo = $tipo; // Inicializa la propiedad tipo con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Moto"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la información de la moto
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Tipo: " . $this->tipo; // Devuelve la información de la moto.
    }
}

// Uso del Ejemplo 2
$moto1 = new Moto("Yamaha", "Deportiva"); // Se crea una instancia de la clase Moto, pasando "Yamaha" y "Deportiva" como argumentos.
echo $moto1->obtenerTipo(); // Llama al método obtenerTipo() para mostrar el tipo de vehículo. Salida: Moto
echo "<br>"; // Salto de línea
echo $moto1->iniciar(); // Llama al método iniciar() para mostrar un mensaje de inicio del vehículo. Salida: El vehículo ha iniciado.
echo "<br>"; // Salto de línea
echo "Marca: " . $moto1->obtenerInfo(); // Llama al método obtenerInfo() para mostrar la información de la moto. Salida: Marca: Yamaha, Tipo: Deportiva
echo "<br><br>"; // Salto de línea para separar ejemplos

// ---------------------------------------------------

// Ejemplo 3: Herencia con Sobrescritura de Métodos
// Clase que hereda de Vehiculo
class Camion extends Vehiculo {
    private $capacidad; // Propiedad privada para almacenar la capacidad de carga del camión

    // Constructor de la clase Camion
    public function __construct($marca, $capacidad) {
        parent::__construct($marca); // Llama al constructor de la clase base (Vehiculo) para inicializar la marca.
        $this->capacidad = $capacidad; // Inicializa la propiedad capacidad con el valor proporcionado.
    }

    // Implementación del método obtenerTipo
    public function obtenerTipo() {
        return "Camión"; // Devuelve el tipo de vehículo.
    }

    // Sobrescritura del método obtenerInfo para incluir la capacidad
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Capacidad: " . $this->capacidad . " kg"; // Devuelve la información del camión.
    }
}

// Uso del Ejemplo 3
$camion1 = new Camion("Volvo", 10000); // Se crea una instancia de la clase Camion, pasando "Volvo" y 10000 como argumentos.
echo $camion1->obtenerTipo(); // Llama al método obtenerTipo() para mostrar el tipo de vehículo. Salida: Camión
echo "<br>"; // Salto de línea
echo $camion1->iniciar(); // Llama al método iniciar() para mostrar un mensaje de inicio del vehículo. Salida: El vehículo ha iniciado.
echo "<br>"; // Salto de línea
echo "Marca: " . $camion1->obtenerInfo(); // Llama al método obtenerInfo() para mostrar la información del camión. Salida: Marca: Volvo, Capacidad: 10000 kg
?>