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

> !["Características del procesador"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Screen%20Shot%202013-10-08%20at%2023.08.49.png)

> Determino si el procesador tiene virtualización a nivel de hardware, con el siguiente comando:
> ```sh
> egrep '^flags.*(vmx|svm)' /proc/cpuinfo
> ```

> El output correspondiente, que se puede ver en la siguiente imagen:

> !["Resultado de Ejecutar el comando"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Screen%20Shot%202013-10-08%20at%2023.03.19.png)

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

> Software as a Service es un paradigma revolucionario para el desarrollo y despliegue
> de aplicaciones. Software as a Service útilizan el internet, especialmente los
> navegadores web como plataforma de desarrollo y ejecución.

> Soluciones que uso habitual que son Software as a Service son:
>   - redes sociales
>    - Facebook
>    - Twitter
>   - servicios de correo:
>    - Yahoo
>    - Gmail


> Hasta Microsoft ha visto que Software as a Service es el futuro
> para el desarrollo y despliegue de aplicaciones, que ha migrado
> su suite popular de Microsoft Office a la nube, denotado como Microsoft
> Office 365

> Software as a Service proporciona beneficios a los usuarios, que
> ya no tiene que preocuparse de incompatibilidades hardware con el software y a los
> desarrolladores del software.


###Ejercicio 12
    - Instalar un entorno virtual para tu lenguaje de programación favorito (uno de los mencionados arriba, obviamente)

> El entorno virtual que instalaré es *virtualenv*, que es un entorno virtual
> de desarrollo de python. Los beneficios que proporciona con respecto de:
>   - versiones del lenguaje
>   - dependiencias
> habilita tener un entorno que sea igual al entorno de producción. Además
> proporciona separación entre otros entornos de desarrollo, que significa
> que podemos tener diversos entornos con diferentes versiones y modulos en base
> a la aplicación.

> Para instalar **virtualenv** usa la herramiento para instalar y gestionar
paquetes de python *pip*:

> ```sh
> pip3 install virtualenv
> ```

> Ahora instalado para comenzar un entorno aislado de desarrollo en python
> ejecutamos la siguiente orden:

> ```sh
> virtualenv ENV
> ```

> Como vemos en la siguiente imagen, **virtualenv** crea un directorio
> con el interprete de python, pip, easy_install, etc...Con esto tenemos
> lo necesario para comenzar una aplicación aislada en python.

> !["Resultado de ejecutar 'virtualenv ENV'"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Screen%20Shot%202013-10-09%20at%2000.16.16.png)

###Ejercicio 13
    - Darse de alta en algún servicio PaaS tal como Heroku, Nodejitsu u OpenShift

> El PaaS que me doy de alta es Heroku, ya que lo conosco después de haber
> trabajo con el en algunas instancias.
> Un PaaS proporciona un stack de herramientas para el despliegue de una aplicación.
> Por ejemplo, cuando use Heroku para el despliegue de una aplicación web que útilizaba
> nodejs y mongodb, el heroku detectaba que la aplicación era con nodejs y proporciona
> las herramientas necesarias para su ejecución y visión por navegador.

> Para darse de alta, sólo se necesita un correo electrónico. Para poder interactuar
hay que instalarse una herramienta de línea de comando en la máquina de desarrollo,
que se puede instalar usando el siguiente comando:

> ```sh
> wget -qO- https://toolbelt.heroku.com/install-ubuntu.sh | sh
> ```

> *El comando anterior se usa para distribuciones de Debian/Ubuntu*

