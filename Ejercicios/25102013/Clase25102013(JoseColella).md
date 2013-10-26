Clase de 25 de Octubre
=====================

Ejercicios
----------

###Ejercicio 3
    1. Usar debootstrap (o herramienta similar en otra distro) para crear un sistema mínimo que se pueda ejecutar más adelante.
    2. Experimentar con la creación de un sistema Fedora dentro de Debian usando Rinse.


> * He usado la herramienta debootstrap para crear un sistam debian *"wheezy"* dentro de la distribución de Ubuntu que uso principalmente. 
> En la siguiente imagen, podemos ver como se ha creado el sistema mínimo de wheezy con el debootstrap. Se tiene que identificar cual distribución se instalará, "wheezy", en que directorio se instalará, y la dirección sobre la cual se descarga la distribución mínima. 

> !["Usano debootstrap para crear un sistema Debian"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/debootstrap.png)


> Va recogiendo los paquetes necesarios para poder montar el sistema minimo.
Esto incluye paquetes del sistema operativo, para interaccion con el terminal como bash, less, etc...,paquetes para iniciar servicios de red, o interaccion como iputils-ping. Tambien instala el gestionador de paquetes apt.

> Usando el chroot podemos cambiar al root de dicho sistema mínimo. Como podemos ver en la siguiente imagen, tenemos un sistema completo, en el cual el root solo tiene derecho dentro de el.

> !["Chroot de sistema debian"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/chrootwheezy.png)

 
> * Para este ejercicio he optado por usar rinse dentro de la 
jaula de debian creada en el ejercicio anterior. Nos descargamos el 
comprimido de [aqui][1]. Los requisitos para instalar rinse es wget y rpm.
Para instalar el programa usamos make install.

> ```sh 
> apt-get install wget rpm
> make install
> ``

> *Es importante tener perl instalado y ademas tener instalado el modulo de perl que trabaja como una interfaz para el internet, sino no funciona rinse.*
Usando el siguiente comando:

> ```sh
> apt-get install libwww-perl
> ```
instalamos el modulo esencial para poder ejecutar rinse.

> Ya instalado podemos visualizar que distribuciones tiene disponible usando:

> ```sh
> rinse --list-distributions
> ```

> En la siguiente podemos visualizar las diversas distribuciones disponibles.

> !["Imagen de las distribuciones disponibles con Rinse"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/listdistributions.png)

> En mi caso he optado por instalar *CentOS 6* en el directorio /home/guest/centos6/. Con rinse podemos especificar la arquitectura de procesador que empleará la distribución.

> En la siguiente imagen, podemos ver el comando ejecutado para instalar la versión de 64 bit de CentOS en el directorio /home/guest/centos6

> !["Instalar CentOS con Rinse"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/installcentos.png)

> Ahora rinse comienza a coger las dependencias necesarias para poder instalar
centos. Al final del proceso de instalación, podemos usar chroot para meternos dentro de la distribución como root, como vemos en la siguiente imagen.

> !["Chroot en el sistema de CentOS"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/chrootcentos.png)

> Finalmente, para probar que se ha instalado he usado la siguiente orden:

> ```sh 
> yum install vim 
> ```

> Yum es el gestionador de paquetes que usa las distribuciones CentOS para instalar, borrar, buscar paquetes.
> Funciona correctamente e instala el paquete indicado. 

Enlaces Adicionales:
*-> http://www.howtoforge.com/debian-ubuntu-cant-locate-lwp-useragent.pm-in-INC
*-> https://github.com/libwww-perl/libwww-perl

###Ejercicio 4
    * Instalar alguna sistema debianita y configurarlo para su uso. Trabajando desde terminal, probar a ejecutar alguna aplicación o instalar las herramientas necesarias para compilar una y ejecutarla.

> Para este ejercicio he usado el sistema debian que se ha instalado en el ejecicio 3. Primero ejecuto ```chroot``` para entrar dentro de la maquina.  La aplicacion que voy a ejecutar requiere python3. Instalo python3 usando apt-get.

> ```sh
> apt-get install python3
> apt-get install vim
> ```

> Ademas he instalado vim para tener un editor de texto para crear el script y ejecutarlo en el sistema.
En la siguiente imagen, podemos ver el script creado.

> !["Script creado en Wheezy"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/scriptcreado.png)

> Ahora para ejecutar el script, usamos el interprete de python instalado. 
En la siguiente podemos ver la ejecución del script creado.

> !["Ejecución del script python"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/scriptejecutado.png)


[1]: http://www.steve.org.uk/Software/rinse/rinse-2.0.1.tar.gz
