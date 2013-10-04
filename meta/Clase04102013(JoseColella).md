Clase de 4 de Octubre
=====================

Ejercicios 
----------

### Ejercicio 4 

> Docker es una aplicación que proporciona la habilidad 
> de virtualización de aplicaciones, donde se crean paquetes que
> permiten ejecutar aplicaciones con las dependencias necesarias para
> ejecutar dicha aplicación.
>
> El tutorial de docker enseña como interactuar con imagenes creadas 
> a priori por otros usuarios, denotadas como contenedores. Con dichos contenedores podemos ejecutar ordenes que estan disponibles para dichos contenedores.
> Por ejemplo en el contenedor del tutorial, proporciona una imagen de Linux, en la cual podemos instalar paquetes.
>
 ```sh
 docker run apt-get install -y ping
 ```
 > Además los cambios hechos sobre dichas imagenes se pueden guardar usando:
 >
 ```sh
 docker commit 
 ```
 
> __*Avanzado*__
> 
>- Instalarlo y crear una aplicación

###Ejercicio 5

    * Instala el sistema de gestión de fuentes git

> Para instalar el sistema de gestión de fuentes git en los sistemas GNU/Linux se puede usar el gestionador de paquete de la distribución.
Por ejemplo, para los sistemas basados en Debian, se usa el apt-get.
El comando para instalar git es:

> ```sh
>   sudo apt-get install -y git    
>    ```
 
> Para verificar que se haya instalado usamos el comando:

> ```sh
>   git --help
> ```

###Ejercicio 6

    1. Crear un proyecto y descargárselo con git. Al crearlo se marca la opción de incluir el fichero Readme.
    2. Modificar el readme y subir el fichero modificado
    
> Para crear un proyecto en GitHub, lo primero
> que hay que hacer es crear un nuevo repositorio.
> Esto lo hacemos usando el boton de crearse un nuevo repository como se puede ver en la siguiente imagen.
> 

   ![Crear Nuevo Respositorio](https://raw.github.com/josecolella/GII-2013/master/meta/Screenshots/Screen%20Shot%202013-10-01%20at%2017.08.41.png) 
 
> Después tienes que darle un nombre a dicho repositorio, y una descripción opcional. 
> Para que el proyecto tenga un README, hacemos click en la caja que dice *"Initialize this repository with a README"*.
> En la siguiente imagen podemos ver los pasos a seguir:

   ![Crear nuevo proyecto e inicializar con README](https://raw.github.com/josecolella/GII-2013/master/meta/Screenshots/Screen%20Shot%202013-10-01%20at%2017.11.22.png)

> Cuando haces click sobre el botón *"Create repository"* se crea el proyecto en GitHub. 

> Ahora necesitamos crear un lugar local que tenga el contenido del directorio alojado en Github. Esto se hace usando el comando 
> ```sh 
>git clone [options] [--] <repo> [<dir>]
```
> En mi caso el comando que he tenido que ejecutar para crear una copia local del repositorio es:

> ```sh
> git clone https://github.com/josecolella/testRepo.git 
> ```

> Ahora en la máquina local, tenemos el repositorio.

> Para modificar el readme y subir el fichero modificado usamos un editor de texto para agregar contenido a dicho fichero. 
>
> ```sh 
> vim README.md
> ```

> Después de cambiar el contenido del fichero, para que dicho cambio sea reflejado en el repositorio de GitHub tenemos que agregarlo al *staging area*, ponerle un mensaje de commit, y mandarlo.

> Esto se hace usando los siguientes comandos:

>  ```sh
> git commit -a -m "Agregado descripción en README" 
> git push
> ```
>
> Finalmente, si se revisa el repositorio en GitHub, se puede comprobar que dicho fichero ha sido actualizado.

 
 
