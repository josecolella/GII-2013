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


>Para el ordenador de la facultad, se usa un sistema de fichero remoto. Cada
vez que arranca el ordenador de la facultad, coge el contenido del alumno usando
un NFS (Network File System).

###Ejercicio 2
    Usar FUSE para acceder a recursos remotos como si fueran
    ficheros locales. Por ejemplo, sshfs para acceder a ficheros
    de una máquina virtual invitada o de la invitada al anfitrión.

> Para este ejercicio se ha usado un contenedor de ubuntu que se había creado anteriormente con `lxc`.

> ```sh
> sudo lxc-start -n una-caja
> ```

> Dentro del contenedor se ha instalado ```sshfs``` y ```fuse```.

> ```sh
> sudo apt-get install sshfs fuse
> ```

> Antes de seguir es importante conocer el IP de la maquina remota para poder crear un fichero en remoto. En mi caso la maquina remota tiene IP, 10.0.3.185.

> Antes de mapear el directorio remoto con uno en local, hay que agregar el usuario al grupo de usuario de fuse. Esto se hace usando el comando `usermod`.

> ```sh
sudo usermod -a -G fuse josecolella
```

> Ahora se crea un directorio en local donde se quiere mapear el directorio remoto

> Por ejemplo, en mi caso, he creado un directorio llamado **RemoteHome**
```sh
mkdir ~/RemoteHome
```

> Ahora usando ```sshfs``` podemos mapear un directorio remoto en local.

>```sh
sshfs ubuntu@10.0.3.185:/home/ubuntu /home/josecolella/RemoteHome
```

> !["Ejecucion del comando"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/sshfstoUbuntu.png)

> Con este comando se puede ver todo lo que ha sido creado en el directorio /home/ubuntu de la maquina remota en local.

> Dentro del directorio /home/ubuntu se ha creado un fichero que tiene el siguiente contenido: `CREADO DENTRO DEL CONTENEDOR`. Dicho fichero se ha nombrado `1.txt`.

> Como se puede ver en la siguiente imagen, se puede visualizar dicho fichero desde ~/RemoteHome de la maquina en local.

> !["Visualizacion del fichero creado en remoto"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/remotedirectory.png)

> Ademas si creamos un fichero en local tambien se puede visualizar en el directorio remoto.


###Ejercicio 3
    Crear imágenes con estos formatos (y otros que se encuentren tales como VMDK)
    y manipularlas a base de montarlas o con cualquier otra utilidad que se encuentre

> He creado imagenes con formato `img` y `vdi`, que es un formato de VirtualBox
para almacenaje virtual. Además, he creado una imagen formato vmdk, los formatos VMDK tambien funcionan para el almacenamiento virtual. Y finalmente se tiene qcow2 que es una imagen de disco usado por QEMU

> Para crear la imagen `img` he usado el siguiente comando:
```sh
qemu create -f raw raw_img.img 50M
```
![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/createraw.png)

> Para crear la imagen `vdi` he usado el siguiente comando:
```sh
qemu-img create -f vdi virt_disc.vdi
```

> Para crear la imagen `qcow2` he usado el siguiente comando:
```sh
qemu-img create -f qcow2 qcow2_disc.qcow2 5M
```

![""](https://github.com/josecolella/GII-2013/blob/master/Screenshots/Tema4Screenshots/qcow2create.png)

>Finalmente para crear la imagen `vmdk` he usado el siguiente comando:
```sh
qemu-img create -f vmdk vmdk_disc.vmdk 50M
```

>A continuación he usado la imagen .vdi en conjunto con Oracle VirtualBox
para montar dicha imagen para que sirva como almacenamiento de una distribución
que se virtualizará.

>En la construcción de la máquina virtual se puede especificar un disco duro virtual
que se puede usar.
En la siguiente imagen se puede ver que se ha seleccionado el .vdi que se ha creado con qemu.

>!["Elección del .vdi"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/vdiselect.png)


###Ejercicio 4

    Crear uno o varios sistema de ficheros en bucle usando un formato
    que no sea habitual (xfs o btrfs) y comparar las prestaciones de
    entrada/salida entre sí y entre ellos y el sistema de ficheros en
    el que se encuentra, para comprobar el overhead que se añade mediante este sistema

> Para poder crear los sistemas, hay que primero crear las imagenes con qemu

> Las imagenes se crean con los siguientes comando:
```sh
qemu-img create -f raw btrfs.img 100M
qemu-img create -f raw xfs.img 100M
```
En el primer comando se ha creado la imagen para el sistema de ficheros btrfs
mientras que en la segunda se ha creado para xfs.

> Ahora que hacer las images accesibles al usuario usando `losetup`.

> ```sh
sudo losetup -v -f xfs.img
sudo losetup -v -f btrfs.img
```

> Hay que asignarles sistemas de ficheros a los dos. Esto
se hace usando `mkfs`.
Con los siguientes comandos podemos asignar el sistema de fichero
`xfs` a su imagen correspondiente y `btrfs` a su imagen.

> ```sh
sudo mkfs.xfs /dev/loop1
sudo mkfs.btrfs /dev/loop2
```

> Finalmente se montan en el sistema usando el comando `mount`.

> ```sh
sudo mount /dev/loop0 /mnt/xfs
sudo mount /dev/loop1 /mnt/btrfs
```


###Ejercicio 5
    Instalar ceph en tu sistema operativo

>Para instalar `ceph` se usa el gestor de paquetes `apt-get `:

>```sh
sudo apt-get install ceph-mds
```


###Ejercicio 6
    Crear un dispositivo ceph usando BTRFS o XFS

> Lo primero que hay que hacer es crear los directorios donde se va a almacenar
la información de CEPH.

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/mkdirceph.png)

> Hay que crear el fichero de configuración en el directorio /etc/ceph/ceph.conf

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/mkdirceph.png)

> Creamos la imagen de ceph

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/cephcreate.png)

> Se formatea para que tenga un sistema de ficheros xfs ó btrfs. En mi caso
he optado por xfs.

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/xfsloop2.png)

> Hacer directorio para objeto

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/servidorobjetos.png)

> Para finalizar hay que iniciar el demonio de CEPH y montar el directorio.

> El comando para iniciar el demonio es:

> ```sh
sudo /etc/init.d/ceph -a start
```

> !["Iniciar Demonio"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/cephstart.png)

> Vemos el estatus:

> !["Estatus de ceph"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/cephstatus.png)

> Y el comando para montarlo es:

> ```sh
sudo mount -t ceph ubuntu:/ /mnt/ceph
```

!["Montar"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/mountceph.png)]

###Ejercicio 7

    Almacenar objetos y ver la forma de almacenar directorios completos usando ceph y rados.

>Primero se tiene que usar rados para crear el objeto. Eso se hace usando la opción
`mkpool`. En la siguiente imagen se puede ver la creación de un nuevo pool

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/radosmk.png)

> En esta imagen podemos ver el estatus de los objetos.

> ![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/radoslspools.png)

> Finalmente almacenamos un objeto con la opción `put`.

>En la siguiente imagen se puede ver la creación de un objeto.
![""](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/radosput.png)

###Ejercicio 8

    Tras crear la cuenta de Azure, instalar las herramientas
    de línea de órdenes (Command line interface, cli) del mismo y
    configurarlas con la cuenta Azure correspondiente


> Después de haberse creado una cuenta en **http://www.windowsazurepass.com/**
lo primero que hay que hacer es instalar la herramienta de linea
de comandos que se descarga con `npm`.
`npm` es el gestor de modulo para `nodejs`, que es el javascript de server-side.

> En la siguiente imagen, se puede ver la instalación del modulo

!["Instalación de azure-cli"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/npmazurecli.png)

Ya descargada la herramienta de linea de comando, hay que bajarse un fichero
.publishsettings que contiene información sobre la cuenta del usuario.

Esto se descarga usando el siguiente comando:

```sh
azure account download
```

Después de descargar el fichero se tiene que importar.
En la siguiente imagen se puede ver como se importa la configuración en la herramienta
de cliente.

!["Importar configuración"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/azureimport.png)

Ahora se crea la instancia de almacenamiento.

!["Creación de storage"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/createstorage.png)

Para poder interactuar con el contenedor hay que insertar las llaves de acceso
de dicho contenedor como variables del terminal. Para ver las llaves se
ejecuta el siguiente comando:

```sh
azure storage account keys list ivphotostorage
```

En la siguiente imagen se puede ver que se ha insertado dos variables que
denotan el nombre de la cuenta y la llave de la cuenta.

!["bash_profile"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/bashprofile.png)


###Ejercicio 9

    Crear varios contenedores en la cuenta usando la
    línea de órdenes para ficheros de diferente tipo
    y almacenar en ellos las imágenes en las que capturéis
    las pantallas donde se muestre lo que habéis hecho.

Primero se crea un blob que se usará para subir las fotos. En la siguiente imagen, se puede ver la creación de
dicho blob.

!["Crear Blob"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/creatingBlob.png)

Cada blob tiene su url para acceder a ella. En la siguiente imagen se puede ver la url de dicho blob.

!["Url del Blob"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/bloburl.png)

Ahora que se tiene la url, ya se puede subir los ficheros a dicha url.
En la siguiente imagen, se puede ver como se sube una imagen al blob.

!["Upload 1"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/upload1.png)

Como se puede ver en la siguiente imagen, el upload de dicha imagen se ha hecho correctamente.

!["Successful Upload"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/sucessfulupload.png)

He subido otra imagen en dicho blob. En la siguiente imagen, se ve el comando ejecutado
para subir la imagen

!["Upload 2"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/upload2.png)

Como se puede ver en la siguiente imagen, se ha subido correctamente la imagen, ya
que se puede visualizar con una url

!["Successful Upload 2"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/successfulupload2.png)

Para finalizar que creado otra blob que servirá para guardar ficheros de texto.
En la siguiente imagen, se puede ver como se crea el blob.

!["Crear Blob 2"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/createblob2.png)


###Ejercicio 10

    Desde un programa en Ruby o en algún otro lenguaje, listar los blobs que
    hay en un contenedor, crear un fichero con la lista de los mismos y
    subirla al propio contenedor.

Yo he optado por hacer este programa con `python`. Azure tiene una API para python
que se puede descargar con `pip`. En la siguiente imagen se puede ver la descarga
e instalación del modulo que sirve como interfaz para interactuar con azure.

!["pip install"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/pipazure.png)

El código para poder listar los contenedores, los blobs y crear un fichero con

```python
# -*- coding: utf-8 -*-
# Author: Jose Miguel Colella
# https://github.com/WindowsAzure/azure-sdk-for-python

# Desde un programa en Ruby o en algún otro lenguaje,
# listar los blobs que hay en un contenedor,
# crear un fichero con la lista de los mismos y
# subirla al propio contenedor.

import credentials  # Contiene información sensible
from azure.storage import BlobService


def getContainersWithBlobs(blob_service):
    """
    Imprime los contenedores del usuario con los correspondientes
    blobs.

    blob_service: Nombre del servicio de gestion de blobs @class BlobService
    """
    for i in blob_service.list_containers().containers:
        print("Nombre del contenedor: {}".format(i.name))
        print("Url del contenedor: {}".format(i.url))
        print("##############################")
        for j in blob_service.list_blobs(i.name).blobs:
            print("\tNombre del Blob: {}".format(j.name))
            print("\tUrl del Blob: {}".format(j.url))
            print("\t------------------------------")

#Conexion con el servicio
blob_service = BlobService(credentials.account_name, credentials.account_key)

#Visualizar los contenedores y blobs
getContainersWithBlobs(blob_service)

# Escribir a fichero
f_blob = open('Ejercicio10.txt', "w")
for i in blob_service.list_containers().containers:
        f_blob.write("Nombre del contenedor: {}".format(i.name))
        f_blob.write("Url del contenedor: {}".format(i.url))
        f_blob.write("##############################")
        for j in blob_service.list_blobs(i.name).blobs:
            f_blob.write("\tNombre del Blob: {}".format(j.name))
            f_blob.write("\tUrl del Blob: {}".format(j.url))
            f_blob.write("\t------------------------------")
f_blob.close()

# Se pone en el blob
blob_service.put_blob('code', 'f_blob.txt', f_blob, 'BlockBlob')
```

En la siguiente imagen se puede ver la ejecución del programa, y el
resultado. Se ven los contenedores y blobs.

!["Ejercicio 10"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema4Screenshots/Ejercicio10.png)
