IV: Practica 1
==============

Autor: Jose Miguel Colella
-------------------


En este documento hablo sobre el despliegue de una aplicación PHP,
en el PaaS llamado OpenShift de RedHat. Dentro de dicha aplicación
agrego funcionalidad de trabajar con la base de dato *MySQL*, y usando
*phpmyadmin* para gestionar las bases de datos de la aplicación.

Los pasos para crear y desplegar dicha aplicación en OpenShift sigue los
siguientes puntos:

> 1. Registrar la aplicación usando la interfaz web de OpenShift ó usando
> la herramienta **rhc**.
> 2. Agregar funcionalidades y herramientas adicionales que requiere la aplicación.
> Por ejemplo, bases de datos relacionales, no relaciones, interfaces web para las
> bases de datos, sistemas de integración continua, etc...
> 3. Después de registrar la aplicación, OpenShift proportica una URL donde
> que indica donde esta localizado el repositorio git remoto. Usando git, hacemos
> hacemos una copia local para poder almacenar y codificar la aplicación que se
> visualiza en una dirección proporcionada por OpenShift.
> 4. (Opcional) Si la aplicación usa base de datos, hay que configurar las bases de
datos y la conexión a las mismas.
> 5. Codificación de la aplicación, y el uso de git para subir la aplicación al
> repositorio de OpenShift.
> 6. Visualizar la aplicación y ver que todo funciona bien.
> 7. Si se quiere almacenar el codigo en github para poder trabajar
> con otros, agregamos una repositorio remoto adicional.
> 8. Subimos el codigo a Github, donde la gente puede contribuir, y puedes
> compartir tu codigo.

A continuación detallo los pasos previamente vistos.

* Para registrar la aplicación he optado por usar la interfaz web que proporciona
OpenShift. OpenShift proporciona runtime para una multitud de lenguajes script.
He seleccionado PHP 5.3 para que pueda ejecutar mi aplicación.
Como podemos ver en la siguiente imagen, he registrado la aplicación con
el nombre http://periodico-ivblog.rhcloud.com/.

!["Registración de una aplicación"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Practica1Photos/Screen%20Shot%202013-10-16%20at%2012.49.18.png)


* A continuación, OpenShift nos habilita agregar herramientas, como bases de datos
a nuestra aplicación. En mi caso, he agregado la gestor de bases de datos, *MySQL*,
y la herramient web *phpyadmin* para facilitar la creación de las bases de datos de la aplicación.

En la siguiente imagen, vemos la agregación de *phpmyadmin*.

!["Foto en la cual se ve la addición de phpmyadmin como herramienta"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Practica1Photos/Screen%20Shot%202013-10-15%20at%2023.14.32.png)

*Una cosa muy importante de tener en cuenta es que cuando se agregan estan dos herramientas,*
*OpenShift proporciona información sobre autentificación para acceso a dichas herramientas*

Como podemos ver en las siguientes imagenes, OpenShift proporciona el nombre de usuario y contraseña
para poder acceder a *MySQL* y a *phpmyadmin*.

En la siguiente imagen, vemos como OpenShift ha proporcionado los credenciales para poder acceder a *MySQL*.

!["Credenciales para poder acceder a MySQL"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Practica1Photos/Screen%20Shot%202013-10-15%20at%2023.13.32.jpg)

Para *phpmyadmin*, emplea el mismo mecanismo, como podemos ver en la siguiente imagen.

!["Credenciales para acceder a phpmyadmin"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Practica1Photos/Screen%20Shot%202013-10-15%20at%2023.14.48.jpg)

* Ya podemos trabajar sobre la aplicación registrada usando el comando *git*.
OpenShift proporciona un URL en la cual almacena el codigo que desplega.
Usando el siguiente comando, he podido crear una copia local del codigo:

```sh
git clone ssh://525dae914382ec45c2000090@periodico-ivblog.rhcloud.com/~/git/periodico.git/
```

Dentro de dicho dicho directorio, en el subdirectio llamado `php`, hay un fichero index.php.
Este es el fichero que ejecuta OpenShift cuando se hace un **git push**.
La aplicación que se despliega se almacena aquí.

* Este paso es el más importante para un correcto despliegue en OpenShift.
Después de tener la aplicación ya codificada, la parte que interactua con las
bases de datos *MySQL* tiene que ser configurada correctamente con el OpenShift.
Para que la aplicación pueda interactuar con el *MySQL* que esta en el runtime de
OpenShift, hay que obtener información sobre variables del entorno.

OpenShift proporciona acceso remoto al servidor. Usando acceso remoto, y
ejecutando el siguiente comando:

```sh
env | grep OPENSHIFT | grep SQL
```

podemos conocer la información del entorno necesaria para conectarse al servidor *MySQL*.

Por ejemplo, en la aplicación que he desplegado, he usado la clase *mysqli* para
poder conectarme a la base de datos. La conexión se hace usando los siguientes
parametros en el constructor:

```php
<?php
  connection = new mysqli(
    $_ENV['OPENSHIFT_MYSQL_DB_HOST'],
    $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
    $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
    $_ENV['OPENSHIFT_APP_NAME'], // By default, app name == db name
    $_ENV['OPENSHIFT_MYSQL_DB_PORT'],
    $_ENV['OPENSHIFT_MYSQL_DB_SOCKET']
  );
?>
```

Los parametros en el constructor garantizan que el PHP lea las
variables del entorno OpenShift para poder conectarse e interactuar con
las bases de datos.

Este paso me tomo tiempo en completar, pero después de leer [este][ref1] enlace y [este][ref2],
se me aclaro en como OpenShift trabaja con las bases de datos.


* Después de hacer toda la codificación de la aplicación y la configuración
para conectarse a las bases de datos, subimos la aplicación usando la combinación
de los siguientes comandos.

```sh
git add .
git commit -m "Terminado la Practica 1"
git push
```

Lo que me hizo interesante fue cuando se ha ejecutado el *git push*,
que como vemos en la siguiente imagen, ha primero desactivado
los servicios *php*, *mysql*, *phpmyadmin*. Después los ha reactivado y puesto
el codigo en el branch `master`.

Imagen


* Visualizamos la aplicación











[ref1]: https://www.openshift.com/blogs/manipulate-your-paas-database
[ref2]: http://wogan.wordpress.com/2013/08/13/zero-to-php-mysql-on-redhat-openshift/






