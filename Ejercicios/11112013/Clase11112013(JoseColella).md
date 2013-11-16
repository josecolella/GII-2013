Clase de 11 de Noviembre
=====================

Ejercicios
----------

    1. Entender el concepto de contenedores.
    2. Configurar el sistema para poder crear y usar contenedores.
    3. Crear y usar contenedores.

###1.

>Para instalar LXC en la distribución Ubuntu, se puede usar el gestor
de paquetes ```apt```.

>```sh
sudo apt-get install lxc
> ```

###2.

Después de haber instalado un contenedor basado en ubuntu y en ubuntu cloud
usando los siguientes comandos:

```sh
sudo lxc-create -n una-caja -t ubuntu
sudo lxc-create -n nubecilla -t ubuntu-cloud
```

podemos visualizar las interfaces puentes creadas con el comando
```ifconfig -a```.

Para visualizar la interfaz del contenedor "nubecilla", hay que arrancar dicho
contenedor

```sh
sudo lxc-start -n nubecilla
```

Ya dentro del contenedor, dentro del terminal ejecutamos ```ifconfig -a```.
Dentro de mi contenedor `nubecilla` existen las siguientes
configuraciones de red.

!["Configuración de red de nubecilla"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/ifconfigubuntucloudlxc.png)



###3.

> - Para crear un contenedor basado en debian usamos el siguiente comando:

>```sh
>sudo lxc-create -n DebianCont -t debian
>```

>Esto significa que el contenedor se llamará `DebianContainer` y usa el template
>de lxc para instalar Debian. También podemos agregar templates en ```/usr/lib/lxc/templates/```
>y tener un sistema Debian más reciente usando un template que denota las caracterisiticas
>de [Debian Wheezy][1].

> Después de instalar el contedor, podemos comenzar a trabajar sobre dicho
> contenedor usando el siguiente comando:

> ```sh
> sudo lxc-start -n DebianCont
> ```

> Le estamos indicando con la opción `-n`, el nombre del contenedor que
> se quiere iniciar.

> Después de estar dentro del contenedor, he verificado que estamos entro
> del contenedor, ejecutando el comando que se puede ver en la siguiente imagen:

> !["Verificación de estar dentro de contenedor Debian"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/debianinstalled.png)


> - Para poder instalar un contenedor con fedora en un sistema con sistema
> operativo Ubuntu, hay que tener instalados los paquetes ```curl``` y ```yum```.

> ```sh
> sudo apt-get install yum curl
> ```

> ```sh
> sudo lxc-create -t fedora -n FedoraCont
> ```

> Después de ejecutar dicha orden, se instalan los paquetes necesarios para
> crear un contenedor que tiene fedora.

> Arrancamos el contenedor "FedoraCont" usando el siguiente comando:

> ```sh
> sudo lxc-start -n FedoraCont
> ```

> Después de estar dentro de dicho contenedor, para verificar que estamos
> dentro de un contenedor, he ejecutado un comando para verificar la distribución.

> !["Verificación de distribución de contenedor"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/fedoradistribution.png)

> Como podemos ver en la anterior imagen, el contenedor tiene la versión 14
> de Fedora denotada `Laughlin`.


###4.

>- Para instalar la herramiento lxc-webpanel para poder gestionar de manera
más facil los contenedores instalados, se puede usar ```wget```, como podemos
ver en la siguiente imagen.

> !["Instalación de lxc-webpanel"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/lxc-webpanelinstall.png)

> *Se tiene que ser root para poder instalar el script que se descarga usando wget*

> La interfaz web que proporciona lxc-webpanel es amigable y simple, de manera
> que es facil gestionar los multiples contenedores instalados. Como podemos
> ver en la siguiente imagen, el panel proporciona el uso de CPU de la máquina
> anfitriona, la utilización de disco y de memoria. Se puede visualizar los
> contenedores que se han instalado en la máquina, con tres botones para arrancar,
> parar, y cerrar un contenedor.

> !["Página principal del panel web"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/lxc-webpanel.png)

> Para arrancar un contenedor, elegimos el contenedor que queremos arrancar, y se
> pulsa sobre el boton "Start". En la siguiente imagen, se puede ver que se ha
> arrancado un contenedor denotado "DebianCont".

> !["Arranque del contenedor DebianCont"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/debianstart.png)

> A continuación se ha probado de parar el contenedor "DebianCont" y se ha arrancado
> el contendor denotado "FedoraCont". En la siguiente imagen, se puede ver el
> resultado de hacer dicha operación.

> !["Arranque de FedoraCont, parar DebianCont"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/fedorastartdebianfreeze.png)

> - Desde dicho panel, también se puede controlar de manera bien directa los
recursos; CPU y memoria, que pueden usar los contenedores.

> Por ejemplo, en la siguiente imagen, podemos ver como se ha restringido
> la CPU y memoria que puede usar el contenedor "FedoraCont". Se puede ver
> que se ha restringido cuanta memoria puede usar a 1024MB = 1GB. Se le ha asignado
> la CPU 1 ha dicho contenedor, y además se le ha asignado 50 % de dicha CPU.
> El mecanismo de control es similar a como trabaja CGROUPS.

> !["Restringir los recursos de FedoraCont"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/fedoralimit.png)

[1]:http://freedomboxblog.nl/wp-content/uploads/lxc-debian-wheezy.gz
