Ejercicios Docker
=================

Jose Miguel Colella
--------------------

###Ejercicio 10
        Instalar docker

Para instalar docker de la manera mas simple **docker.io** ofrece un script 
que gestiona la agregacion del repositorio y la instalacion de docker en el sistema

```bash
curl -s https://get.docker.io/ubuntu/ | sudo sh

```

Para poder usar dokcer hay que iniciar el demonio. En la siguiente imagen se puede ver como se inicia el demonio de docker.

!["sudo docker -d &"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerdaemon.png)


###Ejercicio 11
        - Instalar a partir de docker una imagen alternativa de Ubuntu y alguna adicional, por ejemplo de CentOS.
        -Buscar e instalar una imagen que incluya MongoDB.


Para instalar la imagen de centos se usa la opcion `pull` de docker.

En la siguiente podemos ver que se hace el `pull`, y que se ha descargado.

!["docker pull centos"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/pullcentos.png)

Para la imagen que contiene mongodb, lo primero que hay que hacer es buscar imagenes disponibles con `mongodb`. Docker ofrece la opción `search`.

En la siguiente imagen se puede ver las posibles imagenes que tienen mognodb

!["docker search mongodb"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockersearch.png)

Yo he optado por una imagen que contiene mongodb dentro de la distribución ubuntu. 

!["image"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/mongodbimage.png)

Para poder usarla hay que importarla. Esto se hace usando `pull`.
En la siguiente imagen se puede ver como se hace el importe de la imagen.

!["docker pull "](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/downloading_dockermongo.png)


###Ejercicio 12
        - Crear un usuario propio e instalar nginx en el contenedor creado de esta forma.


Lo primero que hay que hacer es acceder a la imagen para poder  crear el usuario.

En la siguiente imagen se puede ver el uso de un terminal dentro de un contenedor, la creación de un usuario y la asignación de una contraseña.

!["useradd"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/useradd.png)

Ahora ya creado el usuario, hay que instalar nginx. La forma de instalar nginx requiere agregar un repositorio. Pero para poder agregar un repositorio hay que instalar unos paquetes esenciales.

En la siguiente imagen podemos ver la instalacion de dicho paquetes.

!["python-software"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/packagenecessaryforaddapt.png)

Ya instalado el anterior paquete, ya podemos agregar el repositorio para
instalar nginx.
A continuación podemos ver los pasos para intalar e inicializar el demonio:

```bash
add-apt-repository ppa:nginx/stable
apt-get update
apt-get install nginx
service nginx start
```

He instalado curl para probar que puedo acceder a localhost

```bash
apt-get install curl
curl localhost
```

Como se puede ver en la siguiente imagen, la pagina principal es la
siguiente:

!["localhost"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/mainpagenginx.png)

Se ha instalado correctamente

###Ejercicio 13
    Crear a partir del contenedor anterior una imagen persistente con commit.

Para crear una imagen persistente, docker proporciona `commit` que proporciona al usuario una manera de guardar el estado actual del contenedor.

Lo primero que hay que hacer es conocer el id del contenedor.
Esto se hace usando:

```bash
docker ps -l
```

En la siguiente imagen se puede ver el id del contenedor del cual voy hacer el commit.

!["commit id"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerps.png)

Ya que sabemos el id, usamos `commit` e indicamos un nombre que se ha a usar para el commit. Yo he optado por `josecolella/ubunut_nginx`

!["commit"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockercommit.png)

Ahora para comprobar que se ha realizado el commit, se usa el comando:

```bash
sudo docker images
```

En la siguiente imagen, podemos ver que se ha realizado correctamente el commit.

!["docker images"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerimages.png)


###Ejercicio 14
    Crear una imagen con las herramientas necesarias para DAI sobre un sistema operativo de tu elección.


```bash
docker version
```

Ahora hay que crear un fichero Dockerfile donde se va a especificar que acciones
tomar para construir un contenedor en el cual se pueda desplegar la aplicación. Para que el contenedor Docker pueda descargarse la aplicación sin tener que poner usuario y contraseña, hay que darle de alta un token Oauth.

A continuación podemos ver el contenido del Dockerfile que he usado para
crear la imagen.


```
# DOCKER-VERSION 0.7.6
FROM    ubuntu:12.04

RUN     apt-get update
RUN     apt-get install -y build-essential
RUN     apt-get install -y python
RUN     apt-get install -y python-dev
RUN     DEBIAN_FRONTEND=noninteractive apt-get install -q -y python-setuptools
RUN     easy_install pip
# Instalar git
RUN     apt-get install -y git
# Subir las llaves para usar ssh
# Clono el repositorio
RUN     git clone https://c7a359176499cad775c7ecacb1fe9592a79d4b45@github.com/josecolella/DAI_Practica4.git
#Instalar modulos de dependencia
RUN     pip install tweepy
RUN     pip install web.py
RUN     pip install feedparser
RUN     pip install pymongo
RUN     pip install mako
#Expongo el puerto 8080
EXPOSE  8080
#Ejecuto el programa
CMD     ["nohup python", "~/DAI_Practica4/index.py"]
```


Ahora se usa el comando build de docker para que pueda construir la imagen
En la siguiente imagen podemos ver como se ha construido la imagen.

!["docker build"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerbuild.png)

Ahora que se ha construido hay que comprobar que se puede acceder a la aplicacióm. Para eso se usa `docker run`, con una redirección de los puertos para poder visualizar el contenido de la aplicación.

!["docker run"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerrun.png)

En la siguiente imagen, podemos ver que se puede visualizar la página principal de la aplicación

```bash
curl -i localhost:49160
```

!["curl localhost"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Docker/dockerfileexecution.png)
 

