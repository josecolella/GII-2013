Clase de 7 de Octubre
=====================

Ejercicios
----------

###Ejercicio 8

    1. Qué aplicación puede tener la limitación o asignación de recursos en un entorno de producción?

> Una posible aplicación de limitación o asignación de recursos es lo que hacen las empresas de hosting
> o las empresas que suelen rentar servicios a usuarios. Lo que suelen hacer es limitar los recursos de procesamiento,
> memoria, entrada/salida, y/o ancho de bancha disponible al usuario. Esto es útil para la empresa que ofrece el
> servicio ya que se asegura que el cliente tenga disponible los servicios que haya pagado, y facilita el
> gestionamiento de recursos por parte de la empresa.

    2. Implementar usando el fichero de configuración de cgcreate una política que dé menos prioridad a los procesos de usuario que a los procesos del sistema (o viceversa).

>
>
>

    3. Usar un programa que muestre en tiempo real la carga del sistema tal como htopy comprobar los efectos de la migración en tiempo real de una tarea pesada de un procesador a otro (si se tiene dos núcleos en el sistema).

>
>
>

    4. Configurar un servidor para que el servidor web que se ejecute reciba mayor prioridad de entrada/salida que el resto de los usuarios.


###Ejercicio 9
    - Comprobar si el procesador o procesadores instalados lo tienen.
    ¿Qué modelo de procesador es?
    ¿Qué aparece como salida de esa orden?

> El procesador que tiene la máquina es el seguiente modelo:

> ```sh
> model name  : Intel(R) Core(TM)2 Duo CPU     T9400  @ 2.53GHz
> ```

> Es un procesador con dos cores, y si vemos las caracteristicas proporcionadas
> por la página oficial, tiene la technología de virtualización de intel como
> se puede ver en la siguiente imagen:

> Si ejecutamos el siguiente comando:

> ```sh
> egrep '^flags.*(vmx|svm)' /proc/cpuinfo
> ```
> que determina si el procesador tiene virtualización a nivel de hardware.

> El output correspondiente, que se puede ver en la siguiente imagen:


> indica que el procesador soporta virtualización de hardware.

###Ejercicio 10
    - Comprobar si el núcleo instalado en tu ordenador contiene este módulo del kernel usando la orden kvm-ok

> Para poder la orden **kvm-ok** es importante tener instalado un paquete especial
> que habilita conocer información adicional de la CPU.
> El paquete se instala con la siguiente orden:

> ```sh
> sudo apt-get install cpu-checker
> ```

> Después de instalar dicho paquete, y ejecutamos:
> ```sh
> kvm-ok
> ```

> El comando determina si el procesador es capaz de virtualización
> a nivel de hardware. Después de ejecutar el comando la siguiente información
aparece:

> ```sh
> INFO: /dev/kvm exists
> KVM acceleration can be used
> ```

> Esto significa que el procesado tiene kvm y es capaz de virtualización de
> hardware.

###Ejercicio 11
    - Comentar diferentes soluciones de Software as a Service de uso habitual.




###Ejercicio 12
    - Instalar un entorno virtual para tu lenguaje de programación favorito (uno de los mencionados arriba, obviamente)

