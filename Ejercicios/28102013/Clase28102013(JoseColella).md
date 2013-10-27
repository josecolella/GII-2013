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



    