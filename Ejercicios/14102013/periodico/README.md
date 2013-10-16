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
datos en OpenShift usando las corresponidentes herramientas.
> 5. Codificación de la aplicación, y el uso de git para subir la aplicación al
> repositorio de OpenShift.
> 6. Visualizar la aplicación y ver que todo funciona bien.
> 7. Si se quiere almacenar el codigo en github para poder trabajar
> con otros, agregamos una repositorio remoto adicional.
> 8. Subimos el codigo a Github, donde la gente puede contribuir, y puedes
> compartir tu codigo.

A continuación detallo los pasos previamente vistos.

1. Para registrar la aplicación he optado por usar la interfaz web que proporciona
OpenShift. OpenShift proporciona runtime para una multitud de lenguajes script.
He seleccionado PHP 5.3 para que pueda ejecutar mi aplicación.
Como podemos ver en la siguiente imagen, he registrado la aplicación con
el nombre http://periodico-ivblog.rhcloud.com/.

!["Registración de una aplicación"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Practica1Photos/Screen%20Shot%202013-10-16%20at%2012.49.18.png)


2. A continuación, OpenShift nos habilita agregar herramientas, como bases de datos
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

3. 








