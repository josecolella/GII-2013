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




###Ejercicio 5

Para instalar `ceph` se usa el gestor de paquetes `apt-get `:

```sh
sudo apt-get install ceph
```

