
#   TIPOS

nombre = "Miguel"           #   <class 'str'>
edad = 24                   #   <class 'int'>
altura = 1.75               #   <class 'float'>
is_conductor = True         #   <class 'bool'>
letra = 'D'                 #   <class 'str'>, no existe el tipo de dato Char



#   FUNCIÓN TYPE(nombre_variable)

print(f"NOMBRE: {type(nombre)}, EDAD: {type(edad)}, ALTURA: {type(altura)}, CONDUCTOR: {type(is_conductor)}, LETRA: {type(letra)}")


#   DECLARACIÓN DE VARIABLES EN UNA SOLA LÍNEA

primer_apellido, segundo_apellido, peso = "PEREZ", "MATIA", 75
print(f"MIS APELLIDOS SON {primer_apellido} y {segundo_apellido} y peso {peso}")    #   MIS APELLIDOS SON PEREZ y MATIA y peso 75