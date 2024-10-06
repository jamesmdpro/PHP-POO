<?php

// Clase abstracta que define un contrato para los vehículos
abstract class Vehiculo {
    protected $marca; // Propiedad protegida para almacenar la marca del vehículo

    // Constructor de la clase Vehiculo
    public function __construct($marca) {
        $this->marca = $marca; // Inicializa la propiedad marca con el valor proporcionado al crear la instancia.
    }

    // Método abstracto que debe ser implementado por las clases que heredan
    abstract public function obtenerTipo(); // Este método no tiene implementación en la clase base.

    // Método para obtener la marca del vehículo
    public function obtenerMarca() {
        return $this->marca; // Devuelve el valor de la propiedad marca.
    }

    // Método para iniciar el vehículo
    public function iniciar() {
        return "El vehículo ha iniciado."; // Mensaje común para todos los vehículos.
    }

    // Método para obtener detalles del vehículo
    public function obtenerDetalles() {
        // Implementar la lógica para obtener detalles del vehículo
        return "Detalles del vehículo"; // Ejemplo de retorno
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

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Coche"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la información del coche
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Modelo: " . $this->modelo; // Devuelve la información del coche.
    }

    // Método para establecer el modelo
    // Este método permite modificar el valor de la propiedad privada $modelo.
    // Al ser privado, $modelo no puede ser accedido directamente desde fuera de la clase.
    // Por lo tanto, se proporciona este método público para permitir que otras partes del código
    // puedan establecer un nuevo valor para el modelo del coche.
    // El parámetro $modelo es el nuevo valor que se desea asignar a la propiedad.
    public function setModelo($modelo) {
        $this->modelo = $modelo; // Asigna el valor del parámetro $modelo a la propiedad $modelo de la clase.
    }

    // Método para obtener el modelo
    // Este método permite acceder al valor de la propiedad privada $modelo.
    // Al igual que el método anterior, se proporciona un método público para permitir
    // que otras partes del código puedan obtener el valor actual del modelo del coche.
    // No se puede acceder directamente a $modelo desde fuera de la clase, por lo que
    // este método es esencial para la encapsulación.
    // El valor devuelto es el valor actual de la propiedad $modelo.
    public function getModelo() {
        return $this->modelo; // Devuelve el valor de la propiedad $modelo.
    }
}

// Clase que hereda de Vehiculo
class Moto extends Vehiculo {
    private $tipo; // Propiedad privada para almacenar el tipo de moto

    // Constructor de la clase Moto
    public function __construct($marca, $tipo) {
        parent::__construct($marca); // Llama al constructor de la clase base (Vehiculo) para inicializar la marca.
        $this->tipo = $tipo; // Inicializa la propiedad tipo con el valor proporcionado.
    }

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Moto"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la información de la moto
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Tipo: " . $this->tipo; // Devuelve la información de la moto.
    }
}

// Clase que hereda de Vehiculo
class Camion extends Vehiculo {
    private $capacidad; // Propiedad privada para almacenar la capacidad de carga del camión

    // Constructor de la clase Camion
    public function __construct($marca, $capacidad) {
        parent::__construct($marca); // Llama al constructor de la clase base (Vehiculo) para inicializar la marca.
        $this->capacidad = $capacidad; // Inicializa la propiedad capacidad con el valor proporcionado.
    }

    // Implementación del método abstracto
    public function obtenerTipo() {
        return "Camión"; // Devuelve el tipo de vehículo.
    }

    // Método para obtener la información del camión
    public function obtenerInfo() {
        return "Marca: " . $this->obtenerMarca() . ", Capacidad: " . $this->capacidad . " kg"; // Devuelve la información del camión.
    }

    // Sobrescritura del método iniciar
    public function iniciar() {
        return "El camión ha iniciado con carga."; // Mensaje específico para el camión.
    }
}

// Función que muestra la información de un vehículo
function mostrarInfo(Vehiculo $vehiculo) {
    echo $vehiculo->obtenerTipo() . ": " . $vehiculo->obtenerDetalles(); // Cambiar obtenerInfo() a obtenerDetalles()
    echo "<br>"; // Salto de línea
}

// Uso del sistema de vehículos
$coche1 = new Coche("Toyota", "Corolla"); // Se crea una instancia de la clase Coche con marca Toyota y modelo Corolla.
$coche2 = new Coche("Honda", "Civic"); // Se crea una instancia de la clase Coche con marca Honda y modelo Civic.
$moto1 = new Moto("Yamaha", "Deportiva"); // Se crea una instancia de la clase Moto.
$camion1 = new Camion("Volvo", 10000); // Se crea una instancia de la clase Camion.
$coche1->setModelo("Audi"); // Aquí se llama al método setModelo en la instancia $coche1.
$modelo1 = $coche1->getModelo(); // Aquí se llama al método getModelo para obtener el valor de $modelo1.
echo "El modelo del coche1 es: " . $modelo1 . "<br>"; // Imprime el modelo del coche1.
$modelo2 = $coche2->getModelo(); // Aquí se llama al método getModelo para obtener el valor de $modelo2.
echo "El modelo del coche2 es: " . ($modelo2 ? $modelo2 : "No establecido") . "<br>"; // Imprime el modelo del coche2.

// Ejemplo de uso de la variable $vehiculo
$vehiculos = [$coche1, $coche2, $moto1, $camion1]; // Arreglo de vehículos.

foreach ($vehiculos as $vehiculo) {
    echo $vehiculo->obtenerTipo() . ": " . $vehiculo->obtenerInfo(); // Muestra el tipo y la información del vehículo.
    echo "<br>"; // Salto de línea
}

?>