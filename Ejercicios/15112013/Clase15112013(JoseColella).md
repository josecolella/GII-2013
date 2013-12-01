Clase de 15 de Noviembre
=====================

Ejercicios
----------

    5. Comparar las prestaciones de un servidor web en una jaula y el mismo sevidor en un contenedor.
    6. Instalar juju y, usándolo, instalar MediaWiki en un táper.

###5. 

> Antes de crear la jaula y el contenedor que contendrá `nginx`, es importante 
destacar que los contenedores tienen una ventaja sobre las jaulas en terminos del
aislamiento de recursos y la posibilidad de manejarlos. Las jaulas, en vez, comparten los 
recursos con el sistema anfitrion.
> Usando la herramienta de prestaciones web conocida como `ab`, se compara una jaula contra un contenedor.

> Usando uno de los contenedores y jaulas creadas se pueden comparar las prestaciones usando `ab`.
Para el contenedor, he usado el ubuntu-cloud que se ha instalado anteriormente.

> ```sh
sudo lxc-start -n nubecilla
```

> Si no esta instalado `nginx` y `ab` hay que instalarlos.

> ```sh
sudo apt-get install nginx
sudo apt-get install apache2-utils
```

> Después de instalar dichos paquetes se usará `ab` para medir el rendimiento
Se ha usado `ab` con la opción -n y -c, que denotan el número de peticiones a crear y
la concurrencia de dichas peticiones.

> En la siguiente imagen, se puede ver que se generan 10000 peticiones que se hacen 50 en 50 para el localhost
en el contenedor.

> !["ab contra el contenedor"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/Ejercicio5Container.png)

> Ahora para la jaula, he usado una jaula que contiene el sistema operativo `Debian Wheezy`. Para entrar en dicha 
jaula se usa

> ```sh
sudo chroot /home/jaulas/wheezy
```

> Ya dentro de la jaula, se instala `ab` con el mismo comando que se ha usado par el contenedor.
Despues de ser instalado, se usan los mismos parametros para obtener las prestaciones de la jaula.
En la siguiente imagen, se puede ver el resultado de la jaula.

> !["ab contra la jaula"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/Ejercicio5Jail.png)

> No se pueden obtener conclusiones en concreta de estos tests. La jaula tuviera que ser más rápida ya que comparte los recursos de la máquina anfitriona, mientras que los contenedor tiene sus recursos aislados, con un puente de red hacia el anfitrion. 

###6.

> Para instalar juju, hay que agregar el repositorio correspondiente.

> ```sh
> sudo add-apt-repository ppa:juju/stable
> ```

> Después de agregar el repositorio, hay que actualizar los paquetes de ubuntu, y ya se puede instalar juju.

> ```sh
> sudo apt-get update
> sudo apt-get install juju-core
> ```

> Si solo se quiere crear un taper en local se puede descargar `juju-local`.

> ```sh
> sudo apt-get install juju-local
> ```

> Después de haber instalado juju, se instala el fichero de configuracion
> en `~/.juju/environments.yaml`. En dicho fichero se define el sistema que
> se quiere isntalar con juju (AWS, Windows Azure, HP Cloud, OpenStack, LXC).

> Hay que configurar dicho fichero para indicar que el sistema se instala en local con lxc.
> En la siguiente imagen, se puede visualizar lo que se tiene que cambiar.

> !["Cambio en ~/.juju/environments.yaml"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/defaultlocal.png)

> También se puede cambiar el tipo de taper usando:

> ```sh
> sudo juju switch local
> ```

> Para trabajar en local hay que instalar mongodb.

> ```sh
> sudo apt-get install mongodb-server
> ```

> Ya instalado se activa el demonio de mongo `mongod`.

> Ahora se puede crear un contenedor juju con:

> ```sh
> sudo juju bootstrap
> ```

> Ahora si queremos integrar MediaWiki, que requiere MySQL, en dicho contenedor
> podemos usar el siguiente comando:

> ```sh
> sudo juju deploy mediawiki
> sudo juju deploy mysql
> ```

> Ejecutando los anteriores comandos solo intalala los servicios pero trabajan
> de manera aislada. Hay que indicarle a juju que el `MySQL` trabaja en conjunto
> con `MediaWiki`.

> ```sh
> sudo juju add-relation mediawiki:db mysql
> ```

> !["Agregar relation entre MediaWiki y MySQL"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/addrelation.png)

> Es importante indicar que se usa mysql como base de datos master,
> ya que si no se indica `mediawiki:db`, va a dar un error.

> Para que dicho contenedor pueda ser usado en publico se usa el siguiente comando:

> ```sh
> sudo juju expose mediawiki
> ```

> Para ver detalles sorbe el contenedor creado, se puede usar ```sudo juju status```.
> En la siguiente imagen, se puede ver los detalles del contenedor creado.

> !["Imagen sobre el estado de juju"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/status.png)

> Hay que esperar que el taper este listo para visualizar por el navegador web
> usando el IP publico proporcionado por juju.

> Después que en el status de juju se indica que el taper esta listo,
> como se ve en la siguiente imagen, se puede acceder al taper con el IP público.

> !["El taper esta listo para visualizar"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/jujustarted.png)

> En la siguiente image se puede ver, mediante el IP proporcionado por juju, la
> visualización del MediaWiki.

> !["MediaWiki visualizado por el navegador"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/mediawikibrowser.png)
