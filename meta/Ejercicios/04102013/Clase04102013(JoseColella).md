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
>- Instalarlo y crear una aplicación contenedorizada
>
> Para poder instalar docker tenemos que tener unos requisitos exigidos por los creadores de
> Docker. Los requisitos son:
>
>   - Un kernel 3.8 que contiene AUFS, ZFS, y addiciones de invitado de virtual box.
>
> Para poder instalar el kernel se ejecuta el siguiente comando:

> ```sh
> sudo apt-get install linux-image-generic-lts-raring linux-headers-generic-lts-raring
>```

> Después de ejecutar dichas instrucciones hay que reiniciar el sistema. Ahora hay que agregar el repostorio de docker. Siguiendo los comandos proporcionados por el [sitio web](http://docs.docker.io/en/latest/installation/ubuntulinux/), instalamos docker en nuestro sistema.

> Para comprobar que se ha instalado ejecutamos el siguiente comando:

> ```sh
> sudo docker run -i -t ubuntu /bin/bash
> ```

> El comando anterior ejecuta un shell bash en una imagen de ubuntu.

> Ya instado docker, se puede crear la aplicación contenedorizada.
> La aplicación contenorizada será basada en una imagen para crear aplicaciones web en python



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


###Ejercicio 7

    1. Crear diferentes grupos de control sobre un sistema operativo Linux.
    Ejecutar un uno de ellos el navegador, en otro un procesador de textos,
    y en uno último cualquier otro proceso. Comparar el uso de recursos de
    unos y otros durante un tiempo determinado.
    2. Calcular el coste real de uso de recursos de un ordenador teniendo
    en cuenta sus costes de amortización. Añadir los costes eléctricos
    correspondientes.

> Cgroups proporciona la habiidad de controlar cunatos recurosos puede
> utilizar un programa, puede restringir acceso a recursos y puede monitorizar
> los recursos del sistema.
>
> Para distribuciones como Ubuntu, hay que instalar los paquetes para
trabajar con cgroups.
> Para instalar cgroups se ejecuta el siguiente comando:
>
> ```sh
> sudo apt-get install -y cgroup-bin
> ```


> Para crear los grupos de control usamos
> ```sh
> cgcreate, cgexec, cgclassify
> ```

> cgroups proporciona la habilidad de gestionar recursos proporcionados por la cpu, memoria, y entrada/salida.
> Tenemos dos opciones para los control de grupos.
>    1. Podemos crear los grupos al momento
>    2. Usando el fichero /etc/cgconfig.conf podemos crear una configuración persistente qu esta cuando se reinicie el ordenador.

> Para este experimento crearé tres grupos de control
>   1. El primer grupo de control tiene limitaciones de memoria. En este grupo de control se ejecuta el navegador.
>   2. El segundo grupo de control tiene limitaciones de CPU. En este grupo de control se ejecuta emacs y sublime text, que son editores de texto.
>   3. El tercer grupo de control tiene limitaciones de CPU y memoria. En este grupo se ejecuta nautilus.

> Los grupos los he creado con los siguientes comandos:
> ```sh
> sudo cgcreate -g memory,cpuacct:browser
> sudo cgcreate -g memory,cpuacct:textEditor
> sudo cgcreate -g memory,cpuacct:python
> ```

> Para lanzar un proceso en un control de grupo usamos el comando:
> ```sh
> cgexec
> ```

> El comando toma como parametro el grupo de control y la aplicación a ejecutar
> Para el primer grupo de control que ejecuta el navegador web se
> ha ejecutado el siguiente comando:

> ```sh
> cgexec -g memory,cpu:browser lynx
> ```

> He optado por lynx, ya que es un navegador que no requiere ninguna GUI, como
> Chrome y Firefox.

> Para el segundo grupo que hay que analizar como consume recursos un editor de
texto. He probado el comando con emacs, que es un editor de terminal. Pero además es
conosido porque consume más recursos que otros editor por linea de comando.

> El comando ejecutado es:

> ```sh
> cgexec -g memory,cpuacct:textEditor emacs
> ```

> Finalmente para el último grupo de control en el cual se esta analizando el
> uso de CPU y memoria por parte de interprete del lenguaje python.

> El comando para lanzar el programa al control de grupo es:

> ```sh
> cgexec -g memory,cpuacct:python python
> ```

> - **Análisis**
> Para el análisis se comprueba principales las siguiente métricas:
>   - cpuacct.usage: Tiempo de CPU consumid por las aplicaciones ejecutadas por el grupo
>   - cpuacct.stat: Tiempo consumido por el modo usuario y el sistema
>   - cpuacct.usage_percpu: tiempo (en nanosegundos) consumido por la CPU
>   - memory.max-usage-in-bytes: Máxima memoria usada por el proceso en el grupo
> Toda esta información esta explicada con más detalle [aquí](https://access.redhat.com/site/documentation/en-US/Red_Hat_Enterprise_Linux/6/html/Resource_Management_Guide/sec-memory.html)




> |               | browser       | textEditor    | python|
> | ------------- |:-------------:|:-------------:|-----: |
> | cpuacct.usage  | 409996738 | 447980337 | 152670739
> | cpuacct.stat   | user:34,sys:4      |   user:34,sys:3  | user:12,sys:4
> | cpuacct.usage_percpu | 206655546      |    351511754  | 66869739
> | memory.max-usage-in-bytes   | 5910528     |   7909376 | 9056256

> Lo sorprendente es que el editor de texto; emacs, ha consumido más recursos
de procesamiento y de memoria que el navegador. Aunque si analizamos, el navegador
no usa una interfaz de usuario, y si se hubiera usado Chrome o Firefox como navegador
se hubierá visto un uso más elevado de procesador y memoria.



