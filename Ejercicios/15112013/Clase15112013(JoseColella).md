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

Despues de haber instalado juju, se instala el fichero de configuracion
en `~/.juju/environments.yaml`. En dicho fichero se define el sistema que
se quiere isntalar con juju (AWS, Windows Azure, HP Cloud, OpenStack, LXC).

Hay que configurar dicho fichero para indicar que el sistema se instala en local con lxc. En la siguiente imagen, se puede visualizar lo que se tiene que cambiar.

-> Aqui va la imagen.

Para trabajar en local hay que instalar mongodb.

```sh
sudo apt-get install mongodb-server
```

Ahora se puede crear un contenedor juju con:

```sh
sudo juju bootstrap
```


Ahora si queremos integrar MediaWiki, que requiere MySQL, en dicho contenedor podemos usar el siguiente comando:

```sh
sudo juju deploy mediawiki
sudo juju deploy mysql
```

Para que dicho contenedor pueda ser usado en publico se usa el siguiente comando:

```sh
sudo juju expose mediawiki
```

Para ver detalles sorbe el contenedor creado, se puede usar ```sudo juju status```. En la siguiente imagen, se puede ver los detalles del contenedor 
creado.

-> Imagen 

