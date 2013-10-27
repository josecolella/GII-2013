Clase de 25 de Octubre
=====================

Ejercicios
----------


###Ejercicio 5
    * Instalar una jaula chroot para ejecutar el servidor web de altas prestaciones *nginx*

> La jaula chroot instalada es un sistema minimo de debian `wheezy` instalado con debootstrap.

> ```sh
> sudo debootstrap wheezy /home/jaulas/wheezy http://http.debian.net/debian/
> ```

> Despues dehaberse instalado el sistema, he usado el gestionador de paquetes ```apt```. Usando el comando ```apt-cache search nginx```, podemos visualizar el paquete que necesitamos instalar para ejecutar el nginx.
Usamos el siguiente comando:

> ```sh
> apt-get install nginx
> ```

> Además he instalado ```curl``` para poder visualizar si el servidor nginx
esta ejecutando y sirviendo páginas a peticiones de clientes.

> ```sh
> apt-get install curl
> ```

> Utilizando curl podemos ver si tenemos el sistema esta sirviendo paginas.
> Como podemos ver en la siguiente imagen, el sistema esta sirviendo la pagina index.html que esta creada cuando se ha instalado nginx.

> !["La respuesta despues de haber usado curl"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/nginxwebsite.png) 


###Ejercicio 6
    * Crear una jaula y enjaular un usuario usando `jailkit`, que previamente se habrá tenido que instalar

> Jailkit permite la creación de jaulas en las cuales estan creadas en un directorio especifico. En dicha jaula el usuario no puede ver directorios fuera de dicha jaula. Además jailkit permite definir que daemons, shell, y programas puede ejecutar el usuario que esta dentro de dicha jaula. 

> Ya que no se puede instalar usando ```apt-get```, hay que descargarse el paquete del sitio [oficial][1]. Yo he usado la herramienta ```wget``` que permite descargarse paginas web. 


> ```sh
> wget http://olivier.sessink.nl/jailkit/jailkit-2.16.tar.bz2
> ```

> Para poder usar el jailkit, hay que crear un sistema de ficheros que pertenece a root.

> ```sh
> mkdir -p /seguro/jaulas/dorada
> chown -R root:root /seguro
> ```

> Con los anteriores comando, hemos creado el directorio para la jaula y hemos cambiado el propietario a root.

> A continuación inicializamos la jaula con las herramientas que contendrá.
> En la siguiente imagen podemos ver que se ha inicializado con las herramientas de shell, editor de texto; vim, y herramientas para redes. 

> !["Creando la jaula con las jk_init"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/creatingthejailwithutilities.png)

> Después de haber creado la jaula, hay que crear el usuario que estará dentro de dicha jaula. Esto se hace usando ```useradd```. 

> ```sh
> adduser jaileduser
> ```

> Después de haber creado el usuario, hay que encerrarlo en la jaula. 
En la siguiente imagen podemos ver como *jailkit* nos proporciona esa habilitad.

> !["Encerrar el usuario creado"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/jailuserinjail.png)

> Una cosa importante de hacer, después de haber encerrado el usuario, es que hay que darle acceso al shell /bin/bash. El usuario solo tiene acceso a una shell de acceso limitado. Configurando /etc/passwd, y cambiando el shell del usuario encerrado, ya tendrá acceso desde ssh.
En la siguiente imagen, podemos ver la configuración.

> !["Proporcionar acceso a /bin/bash"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/givejailusershellaccess.png)

> Haciendo dicha configuración, ya se puede acceder a dicho usuario encerrado.
Podemos probar el acceso usando ```ssh```.

> ```sh
> ssh jaileduser@localhost
> ```

> Ya podemos acceder al usuario encerrado, y se ha creado una jaula con recursos limitados y elegidos por el administrador. Jailkit proporciona control al administrador para definir detalladamente que tipo de sistema quiere crear para un usuario encerrado.


[1]:http://olivier.sessink.nl/jailkit/index.html#download
    