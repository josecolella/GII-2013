Clase de 15 de Noviembre
=====================

Ejercicios
----------

    5. Instalar juju y, usándolo, instalar MediaWiki en un táper.

###5.

Para instalar juju, hay que agregar el repositorio correspondiente.

```sh
sudo add-apt-repository ppa:juju/stable
```

Despues de agregar el repositorio, hay que actualizar los paquetes de ubuntu, y ya se puede instalar juju.

```sh
sudo apt-get update
sudo apt-get install juju-core
```

Si solo se quiere crear un taper en local se puede descargar `juju-local`.

```sh
sudo apt-get install juju-local
```

Despues de haber instalado juju, se instala el fichero de configuracion
en `~/.juju/environments.yaml`. En dicho fichero se define el sistema que
se quiere isntalar con juju (AWS, Windows Azure, HP Cloud, OpenStack, LXC).

Hay que configurar dicho fichero para indicar que el sistema se instala en local con lxc.
En la siguiente imagen, se puede visualizar lo que se tiene que cambiar.

-> Aqui va la imagen.

También se puede cambiar el tipo de taper usando:

```sh
sudo juju switch local
```

Para trabajar en local hay que instalar mongodb.

```sh
sudo apt-get install mongodb-server
```

Ya instalado se activa el demonio de mongo `mongod`.

Ahora se puede crear un contenedor juju con:

```sh
sudo juju bootstrap
```

Ahora si queremos integrar MediaWiki, que requiere MySQL, en dicho contenedor
podemos usar el siguiente comando:

```sh
sudo juju deploy mediawiki
sudo juju deploy mysql
```

Ejecutando los anteriores comandos solo intalala los servicios pero trabajan
de manera aislada. Hay que indicarle a juju que el `MySQL` trabaja en conjunto
con `MediaWiki`.

```sh
sudo juju add-relation mediawiki:db mysql
```

!["Agregar relation entre MediaWiki y MySQL"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/addrelation.png)

Es importante indicar que se usa mysql como base de datos master,
ya que si no se indica `mediawiki:db`, va a dar un error.


Para que dicho contenedor pueda ser usado en publico se usa el siguiente comando:

```sh
sudo juju expose mediawiki
```

Para ver detalles sorbe el contenedor creado, se puede usar ```sudo juju status```.
En la siguiente imagen, se puede ver los detalles del contenedor creado.

!["Imagen sobre el estado de juju"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/status.png)

Hay que esperar que el taper este listo para visualizar por el navegador web
usando el IP publico proporcionado por juju.

Después que en el status de juju se indica que el taper esta listo,
como se ve en la siguiente imagen, se puede acceder al taper con el IP público.

!["El taper esta listo para visualizar"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/jujustarted.png)

En la siguiente image se puede ver, mediante el IP proporcionado por juju, la
visualización del MediaWiki.

!["MediaWiki visualizado por el navegador"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/mediawikibrowser.png)

