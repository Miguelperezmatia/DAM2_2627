``` text
Examen Práctico POO: "Starfleet Battles"
Objetivo: Desarrollar una aplicación de consola en Java para gestionar naves espaciales, simulaciones de combate y usuarios
 con diferentes niveles de acceso.

PARTE 1: Utilidades y Clases Base
1. Clase InputUtils
Crea una clase para manejar la entrada de datos por consola de forma segura.

Debe tener un Scanner estático.

Crea un método readText(String message) que imprima el mensaje y devuelva el String leído.

Crea un método readNumber(String message) que imprima el mensaje, lea un int, limpie el buffer del salto de línea y devuelva el número.

2. Clase Abstracta SpaceShip (Nave Espacial)
Esta será la clase padre de todas las naves.

Atributos privados: name (String) y energy (int).

Constructor: Inicializa ambos atributos pasados por parámetro.

Métodos:

Getters para ambos atributos.

Sobrescribe toString() para devolver este formato: "[Nave: nombre | Energía: energy]".

restoreEnergy(int amount): Suma la cantidad a la energía actual y devuelve el propio objeto (this).

takeDamage(int damage): Resta el daño a la energía actual y devuelve el propio objeto (this).

Un método abstracto String performAction(SpaceShip target): Define cómo interactúa esta nave con otra. 
Devuelve un texto describiendo lo ocurrido.

PARTE 2: Tipos de Naves (Herencia y Polimorfismo)
3. Clase Cruiser (Crucero de Defensa)
Hereda de SpaceShip. Es una nave que se centra en defenderse.

Atributo exclusivo: shieldCapacity (int) - Capacidad de escudo.

Constructor: Recibe nombre, energía y capacidad de escudo. Llama al padre.

Método:
Implementa performAction(SpaceShip target): El crucero no ataca, sino que recarga su propia energía usando su shieldCapacity
(llama al método restoreEnergy). 

Debe devolver un String con el formato: "[Nombre_Crucero] ha activado sus escudos y sube su energía a [Nueva_Energia]".

4. Clase Fighter (Caza de Combate)
Hereda de SpaceShip. Es una nave puramente ofensiva.

Atributo exclusivo: firePower (int) - Potencia de fuego.

Constructor: Recibe nombre, energía y potencia de fuego. Llama al padre.

Método:

Implementa performAction(SpaceShip target): Ataca a la nave pasada por parámetro reduciendo la energía del objetivo según su firePower
(llama a takeDamage en el objetivo).
 
Devuelve un String con el formato: "[Nombre_Caza] dispara e inflige [firePower] de daño a [Nombre_Objetivo]".

PARTE 3: Sistema de Usuarios
5. Clase Abstracta SystemUser
Define la base de los usuarios del sistema.

Atributos: username (String) y password (String).

Constructor: Inicializa ambos atributos.

Métodos:

Getter para el username.

boolean checkPassword(String pass): Devuelve true si coincide con la contraseña.

static void displayFleet(ArrayList<SpaceShip> fleet): Muestra todas las naves usando su toString. Si está vacía, imprime "La flota está vacía".

Un método abstracto void userSession(ArrayList<SpaceShip> fleet): Contendrá el menú específico de cada rol.

6. Clase Commander (Comandante - Equivalente a Admin)
Hereda de SystemUser. Puede construir la flota pero no hacer simulaciones.

Menú en bucle (userSession):

Mostrar flota.
Construir Crucero (Cruiser): Pide nombre, energía y escudos. Lo añade a la lista.
Construir Caza (Fighter): Pide nombre, energía y potencia de fuego. Lo añade a la lista.
Desconectar (vuelve al menú de login).


7. Clase Pilot (Piloto - Equivalente a Guest)
Hereda de SystemUser. Solo puede ver la flota y hacer simulaciones de combate.

Menú en bucle (userSession):

Mostrar flota.
Simular Escaramuza.
Desconectar.

Reglas de la Escaramuza: Pide el nombre de dos naves. Búscalas en la lista. Si ambas existen:
Imprime los datos de ambas.

La nave 1 ejecuta su acción sobre la nave 2. Imprime el mensaje resultante y el nuevo estado de la nave 2.

La nave 2 ejecuta su acción sobre la nave 1. Imprime el mensaje resultante y el nuevo estado de la nave 1.
(Si alguna no existe, avisa de que no se encontró en los hangares).

PARTE 4: Lanzamiento del Programa
8. Clase StarBaseApp (Equivalente al Main)

Crea el ArrayList<SpaceShip> vacío.

Crea un ArrayList<SystemUser> y añade dos usuarios por defecto:

Un Commander con credenciales: "leia" / "rebelde"
Un Pilot con credenciales: "luke" / "fuerza"


Inicia el menú principal (bucle infinito):

Iniciar sesión en la base estelar.
Apagar sistema (salir del programa).
Login: Pide usuario y contraseña. Si coinciden, muestra un mensaje de bienvenida y llama a userSession pasándole la flota (polimorfismo en acción). Si no, "Acceso denegado".
```