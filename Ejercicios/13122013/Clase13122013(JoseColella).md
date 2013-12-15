Clase del 13 de Diciembre
=========================

José Miguel Colella
--------------------

###Ejercicio 1
      * ¿Cómo tienes instalado tu disco duro? ¿Usas particiones? ¿Volúmenes lógicos?
      * Si tienes acceso en tu escuela o facultad a un ordenador común para las prácticas, ¿qué almacenamiento físico utiliza?
      * Buscar ofertas SAN comerciales y comparar su precio con ofertas locales (en el propio ordenador) equivalentes.

> Tengo instalado mi disco duro con tres particiones:

  > * / : Esta partición contiene todo relevante a sistema operativo, como el kernel,
  >  y sistema de ficheros, etc...
  > * /home: Esta partición contiene todo relevante a mi usuario, como Escritorio,
  Descargas, Musica, etc...
  > * swap: Esta partición se usa para el intercambio de memoria RAM.

  > No uso ningun vólumen lógico.


  Para el ordenador de la facultad, se usa un sistema de fichero remoto. Cada
  vez que arranca el ordenador de la facultad, coge el contenido del alumno usando
  un NFS (Network File System).




###Ejercicio 2

Para este ejercicio se ha usado un contenedor de ubuntu que se había creado anteriormente con `lxc`.

```sh
sudo lxc-start -n una-caja
```

Dentro del contenedor se ha instalado ```sshfs``` y ```fuse```.

```sh
sudo apt-get install sshfs fuse
```

Antes de seguir es importante conocer el IP de la maquina remota para poder crear un fichero en remoto. En mi caso la maquina remota tiene IP, 10.0.3.185.

Antes de mapear el directorio remoto con uno en local, hay que agregar el usuario al grupo de usuario de fuse. Esto se hace usando el comando `usermod`. 

```sh
sudo usermod -a -G fuse josecolella
```

Ahora se crea un directorio en local donde se quiere mapear el directorio remoto

Por ejemplo, en mi caso, he creado un directorio llamado **RemoteHome**
```sh
mkdir ~/RemoteHome
```

Ahora usando ```sshfs``` podemos mapear un directorio remoto en local.

```sh
sshfs ubuntu@10.0.3.185:/home/ubuntu /home/josecolella/RemoteHome
```

!["Ejecucion del comando"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/sshfstoUbuntu.png)


Con este comando se puede ver todo lo que ha sido creado en el directorio /home/ubuntu de la maquina remota en local.

Dentro del directorio /home/ubuntu se ha creado un fichero que tiene el siguiente contenido: `CREADO DENTRO DEL CONTENEDOR`. Dicho fichero se ha nombrado `1.txt`.

Como se puede ver en la siguiente imagen, se puede visualizar dicho fichero desde ~/RemoteHome de la maquina en local.

!["Visualizacion del fichero creado en remoto"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/remotedirectory.png) 

Ademas si creamos un fichero en local tambien se puede visualizar en el directorio remoto.


###Ejercicio 3



###Ejercicio 4



###Ejercicio 5

Para instalar `ceph` se usa el gestor de paquetes `apt-get `:

```sh
sudo apt-get install ceph
```

