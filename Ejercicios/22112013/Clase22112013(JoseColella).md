Clase de 22 de Noviembre
========================

Ejercicios
----------

    7. a. Destruir toda la configuración creada anteriormente
       b. Volver a crear la máquina anterior y añadirle mediawiki
       y una relación entre ellos.
       c. Crear un script en shell para reproducir la configuración usada en
       las máquinas que hagan falta.
    8. Instalar libvirt.
    9. Instalar un contenedor usando virt-install.


###7

> - Para destruir la configuración creada anteriormente se puede usar el
siguiente comando:

> ```sh
> sudo juju remove-unit mediawiki/0 mysql/0
> ```

> Esto borra las máquinas creadas. Si se quiere borrar todo
se usa:

>```sh
>sudo juju destroy-environment
>```

> - Para volver a recrear la máquina y añadirle una relación entre mediawiki
y mysql se usan los siguientes comandos:

> ```sh
> sudo juju switch local
> sudo juju bootstrap
> sudo juju deploy mediawiki
> sudo juju deploy mysql
> sudo juju add-relation mediawiki:db mysql
> sudo juju expose mediawiki
> ```

> Se tiene que esperar hasta que el estado de dichos contenedores este en `started`.

> - El script que he creado para reproducir la configuración de las máquinas

>```sh
> #!/bin/bash
> #Author: Jose Miguel Colella
> #Description: Inicializa una máquina con juju en
> #la cual se tiene mediawiki y mysql y agrega una
> #relacion entre mysql y mediawiki

> juju init -f  #inicializamos juju para poder cear environments.yaml
> juju switch local #cambiamos para que se despliegue de manera local
> juju bootstrap #Se crea el contenedor juju
> juju deploy mediawiki #Se agrega mediawiki
> juju deploy mysql #Se agrega mysql
> juju add-relation mediawiki:db mysql #Se declara que hay una relacion entre media wiki y mysql
> juju expose mediawiki #Exponemos el servicio
> juju status #Vemos el estatus de dicho contenedor
> ```

> Para ejecutar dicho script hay que tener privilegios de superusuario,
Primero se cambiar el modo del script para ser un ejecutable.

>```sh
>chmod +x juju_build.sh
>sudo ./juju_build.sh
>```

> El resultado de ejecutar el script se puede ver en la siguiente imagen, donde
> se puede ver que se ha creado un contenedor con dos charms: mediawiki y mysql.

> !["Resultado de ejecutar el script"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/scriptresult.png)

###8

> Para instalar `libvirt` se puede ejecutar el comando que se visualiza en la siguiente imagen:

> !["Instalar libvirt"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/installlibvirt.png)

> Es importante agregar el usuario al grupo `libvirtd`. En la siguiente imagen, se puede ver
como se agrega el usuario al grupo.

> !["Agregar usuario al grupo libvirtd"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/addusertolibvirtdgroup.png)


###9

> Para instalar `virt-install` se ejecuta el comando que se puede visualizar en
la siguiente imagen.

> !["Instalación de virt-install"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/installvirtinstall.png)

> Después de ser instalado, hay que usar una imagen de disco localizado en /var/lib/libvrt/images.
En mi caso me he descagado la .iso de arch-linux.

>Después de descargar la .iso hay que moverse en el directorio de imagenes de libvirt.

> ```sh
sudo mv ~/Downloads/archlinux-2013.11.01-dual.iso /var/lib/libvirt/images/
```

> Para poder usar virt-install hay que especificar el nombre, la cantidad de ram,
el lugar de la imagen de disc, el lugar de la iso que se puede expresar en http,
ftp o cdrom. Además he especificado una opción para visualizarla (vnc).

> Primero hay que instalar virt-viewer.

> !["Instación de virt-viewer para visualizar la máquina virtual"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/virt-viewer.png)

> Para instalar arch-linux con `virt-install`, se puede ejecutar el comando
que se visualiza en la siguiente imagen.

> !["virt-install arch-linux"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/virt-install.png)

> Al final de ejecutar dicho comando, se visualiza lo que se ve en la siguiente imagen.

> !["Arch-linux"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/virt-installarch.png)