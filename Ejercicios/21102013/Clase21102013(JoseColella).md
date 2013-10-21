Clase de 21 de Octubre
=====================

Ejercicios
----------

##Ejercicio 1
    Crear un espacio de nombres y montar en él una imagen ISO de un CD de forma que no se pueda leer más que desde él.
    Pista: en ServerFault nos explican como hacerlo, usando el dispositivo loopback

> Para crear un espacio de nombres usamos el comando:

> ```sh
> sudo unshare -u /bin/bash
> ```

> Para montar un imagen ISO, podemos usar el comando mount, como podemos ver en la siguiente imagen. Primero se ha creado el directorio /mnt/disk.

> !["Imagen de montar de una ISO"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/Screenshot%20from%202013-10-21%2022:17:35.png)

> Se ha montado la .iso de la distribución de GNU/Linux, ArchLinux, en el directorio /mnt/disk.

> Para verificar que se haya montado en el espacio de nombres usamos df -h.
Como podemos ver en la siguiente imagen, el ISO se ha montado correctamente en el sistema en el directio /mnt/disk.

> !["Imagen de los sistemas de ficheros montados"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/Screenshot%20from%202013-10-21%2022:18:59.png)

##Ejercicio 2
    1. Mostrar los puentes configurados en el sistema operativo.
    2. Crear un interfaz virtual y asignarlo al interfaz de la tarjeta wifi, si se tiene, o del fijo,
    si no se tiene.


> * Para mostrar los puentes configurados en el sistema operativo, usamos el 
> siguiente comando:

> ```sh
> sudo brctl show
> ```

> Como podemos ver en la siguiente imagen, el sistema tiene tres interfaces.


> !["Puentes configurados en el sistema operativo"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema2Screenshots/Screenshot%20from%202013-10-20%2023:05:24.png)

> Una interfaz es la que se ha creado, que esta ligada con la interfaz eth0.
> La segunda interfaz esta relacionada con docker, para proporcionar acceso a red a los contenedores. La tercera interfaz esta relacionada con lxc.


> * Para crear una interfaz virtual podemos usar el siguiente comando:

> ```sh
> sudo brctl addbr virtualint
> ```

> Para asignarlo a la interfaz, el sistema requiere al menos una instancia logica. En mi caso no tengo tarjeta wifi, asociare la interfaz fija *etho* a la interfaz creada.

> ```sh
> sudo brctl addif virtualint eth0
> sudo brctl show
> ```

> Si queremos habilitar la interfaz virtual podemos usar el siguiente comando:

> ```sh
> ifconfig virtualint up
> ```
