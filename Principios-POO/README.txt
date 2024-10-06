--------------------------------------------------------------
                          Comentarios Explicativos
--------------------------------------------------------------

1. Clase Abstracta Vehiculo:
   Define un contrato para todos los tipos de 
   vehículos. No se puede instanciar directamente. 
   Contiene propiedades y métodos comunes a todos 
   los vehículos, como marca, obtenerMarca(), 
   iniciar(), y un método abstracto obtenerTipo() 
   que debe ser implementado por las clases que 
   heredan.

2. Propiedades:
   protected $marca: Almacena la marca del vehículo, 
   accesible solo desde la clase base y sus 
   subclases.

3. Métodos:
   __construct($marca): Constructor que inicializa 
   la propiedad marca.
   obtenerMarca(): Devuelve la marca del vehículo.
   iniciar(): Método que devuelve un mensaje 
   indicando que el vehículo ha iniciado.
   obtenerDetalles(): Método que puede ser 
   sobrescrito en las subclases para proporcionar 
   detalles específicos del vehículo.

4. Clases Derivadas (Coche, Moto, Camion):
   Cada clase hereda de Vehiculo y debe implementar 
   el método obtenerTipo(). Cada clase tiene su 
   propio constructor que llama al constructor de 
   la clase base para inicializar la marca y 
   también inicializa sus propiedades específicas 
   (como modelo para Coche, tipo para Moto, y 
   capacidad para Camion).

5. Métodos Específicos:
   obtenerInfo(): Cada clase implementa este 
   método para devolver información específica sobre 
   el vehículo, como marca y modelo, tipo o 
   capacidad.

6. Función mostrarInfo():
   Toma un objeto de tipo Vehiculo y muestra su 
   tipo y detalles. Utiliza el método 
   obtenerDetalles() para obtener la información.

7. Uso del Sistema de Vehículos:
   Se crean instancias de Coche, Moto y Camion. 
   Se almacenan en un arreglo $vehiculos y se 
   itera sobre este arreglo para mostrar la 
   información de cada vehículo utilizando 
   obtenerTipo() y obtenerInfo().

Este código es un buen ejemplo de la programación 
orientada a objetos en PHP, utilizando clases 
abstractas, herencia y polimorfismo.

--------------------------------------------------------------
Principios POO en la historia
1. Abstracción
Imagina que en esta fábrica hay un esquema general para cualquier tipo de vehículo, ya sea un
coche, una moto o un camión. La fábrica establece un "contrato" para que todos los vehículos
sigan ciertas reglas mínimas, como tener una marca y un tipo. Pero la fábrica no especifica
cómo será cada tipo de vehículo, solo que debe existir.

Este "contrato" es como la clase abstracta Vehiculo. Define las propiedades y métodos que
todos los vehículos deben tener, como obtenerMarca(), iniciar(), y obtenerTipo() (aunque
este último es abstracto, es decir, cada tipo de vehículo deberá implementarlo a su manera).
El objetivo de esta abstracción es que no necesitas saber qué tipo de vehículo específico es
para poder trabajar con él.

2. Encapsulamiento
Cada tipo de vehículo tiene detalles que no todos pueden ver o modificar libremente. Por
ejemplo, el modelo de un coche o la capacidad de carga de un camión están bien protegidos.
Solo los propios vehículos o la fábrica pueden modificar estos detalles.

Esto es como cuando el coche tiene su propiedad privada $modelo, que solo puede ser
cambiado o consultado a través de los métodos setModelo() y getModelo(). Este es el
principio de encapsulamiento, que protege los datos internos del objeto y permite el acceso
a ellos únicamente a través de métodos públicos.

3. Herencia
Ahora, la fábrica no construye cada vehículo desde cero. En su lugar, todos los vehículos
heredan ciertos planos básicos de la fábrica. Si decides construir un coche, moto o camión,
en lugar de volver a definir lo que es un vehículo, tomas lo que ya está definido en Vehiculo
y luego lo adaptas para que el nuevo vehículo sea más específico.

Por ejemplo, Coche, Moto y Camion heredan de Vehiculo. Esto significa que automáticamente
tienen las propiedades y métodos comunes, como iniciar() o obtenerMarca(). Sin embargo,
cada uno puede agregar sus propias particularidades, como el modelo del coche o la capacidad
de carga del camión. Además, deben implementar su propia versión de obtenerTipo().

4. Polimorfismo
En la fábrica, tienes la flexibilidad de manejar cualquier tipo de vehículo sin preocuparte
demasiado por los detalles específicos. Esto es porque todos los vehículos comparten el
mismo "contrato" básico. Por ejemplo, si la fábrica necesita mostrar información sobre
cualquier vehículo, no importa si es un coche, una moto o un camión, porque todos saben
cómo comportarse en esa situación.

Esto se refleja en el código cuando utilizas la función mostrarInfo(Vehiculo $vehiculo).
No importa si le das un coche, una moto o un camión; cada uno de ellos sabrá cómo
responder con su tipo y detalles.

El Código en Acción
Clase abstracta Vehiculo:
Define el plano básico que todos los vehículos deben seguir. Esta clase tiene algunas
propiedades comunes, como marca, y métodos como iniciar() y obtenerMarca(). Pero no
implementa el método obtenerTipo(), dejando que las subclases (coche, moto, camión) lo
definan a su manera.

Clase Coche:
Aquí la fábrica construye un coche. El coche tiene su marca y, además, una propiedad única:
el modelo. El coche puede cambiar su modelo usando setModelo() y puede devolver el modelo
actual con getModelo().

Clase Moto:
Similar al coche, pero en este caso, la moto tiene una propiedad única llamada tipo (por
ejemplo, puede ser una moto deportiva, de calle, etc.). Esta clase también hereda de Vehiculo
y cumple con la obligación de implementar obtenerTipo().

Clase Camion:
Este vehículo, además de la marca, tiene una propiedad especial: la capacidad de carga (por
ejemplo, 10,000 kg). Además, sobrescribe el método iniciar(), porque los camiones inician
de una manera especial (con carga).

Uso del sistema:
Creas varios vehículos: dos coches, una moto y un camión. A través del polimorfismo, puedes
iterar sobre todos ellos, sin preocuparte por qué tipo específico son. Cada vehículo sabe
cómo dar su información (obtenerInfo()).

Resumen de los Principios POO en el Código
Abstracción: La clase abstracta Vehiculo define un "contrato" general.
Encapsulamiento: Los detalles como modelo o capacidad son privados, accesibles solo a
través de métodos.
Herencia: Coche, Moto y Camion heredan de Vehiculo, reutilizando el código y adaptándolo
a sus necesidades.
Polimorfismo: Los diferentes vehículos pueden ser tratados de manera uniforme, gracias a
que todos implementan los métodos requeridos.