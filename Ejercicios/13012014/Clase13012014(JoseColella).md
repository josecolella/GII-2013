Clase del 13 de Enero
=========================

José Miguel Colella
--------------------

###Ejercicio 1

Para verificar que la máquina tiene la tecnología de virtualización
se usa el comando:

```bash
sudo kvm-ok
```

En la siguiente imagen, se puede ver que la máquina tiene capacidades de
tecnología de virtualización.

!["KVM-OK"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/kvm.png)

Para verificar se puede ver las caracteristícas del procesador, y comprobar que tiene
`vmx`.

Usando el comando:

```bash
sudo cat /proc/cpuinfo | grep vmx
```

se puede comprobar si se tiene la tecnología de virtualización.

En la siguiente imagen podemos ver que si se tiene dicha propiedad.

!["vmx"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/vtxenabled.png)



###Ejercicio 2
    1. Crear varias máquinas virtuales con algún sistema operativo libre,
    Linux o BSD. Si se quieren distribuciones que ocupen poco espacio con
    el objetivo principalmente de hacer pruebas se puede usar CoreOS
    (que sirve como soporte para Docker) GALPon Minino, hecha en Galicia
    para el mundo, Damn Small Linux, SliTaz (que cabe en 35 megas) y ttylinux
    (basado en línea de órdenes solo).
    2. Hacer un ejercicio equivalente usando otro hipervisor como Xen, VirtualBox o Parallels.

* Para la primera máquina virtual he montado Debian Linux con qemu.
Lo primero que hay que hacer es crear un disco duro para la máquina.

Usando `qemu-img` he creado un disco qcow2. En la siguiente imagen se puede ver como se
ha creado el disco.

!["Creación de disco"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/creatingDisk.png)

Ya creado el disco en el cual se almacena la máquina virtual, ya se puede crear la máquina.
Usando `qemu-system-x86_64` se ha creado la máquina especificando el disco que se
va a usar, y la imagen .iso.

En la siguiente imagen, se puede ver la creación de la máquina virtual.

!["Creación de la máquina virtual"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/creatingDisk.png)

Como se ve en la siguiente imagen, se puede ver el arranque de QEMU para poder
instalar el sistema operativo.

!["QEMU"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/debian.png)

Al momento de instalar, el QEMU reconoce el disco que se ha seleccionado para
almacenar la máquina.

En la siguiente imagen se puede ver que el disco que reconoce para la instalación
es el mismo que se ha especificado.

!["Disco"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/recognizedDisk.png)

* He usado VirtualBox para instalar Debian

###Ejercicio 3
    Crear un benchmark de velocidad de entrada salida y comprobar la diferencia entre usar paravirtualización y arrancar la máquina virtual simplemente con
    qemu-system-x86_64 -hda /media/Backup/Isos/discovirtual.img


###Ejercicio 4
    Crear una máquina virtual Linux con 512 megas de RAM y
    entorno gráfico LXDE a la que se pueda acceder mediante VNC y ssh

Hay que instalar un cliente vnc que proporciona conectarse con la máquina virtual que se va a crear.

```bash
sudo apt-get install vinagre
```

Primero para crear la máquina virtual con 512 MB de RAM se usa la opción -m.

```bash
qemu-system-x86_64 -hda deb.img -cdrom ~/Downloads/debian-7.3.0-amd64-netinst.iso  -m 512M -name Debian
```

Después que haya sido creada, para poder usar vnc y ssh hay que especificarlo en las opciones.

```bash
qemu-system-x86_64 -boot -hda deb.img -name Debian -vnc:1 -redir tcp:2222::22
```

Para poder conectarse hay que averiguar el IP que se asigna, usando 

```bash
ifconfig
```

Ya sabiendo el IP se puede conectar mediante ssh


###Ejercicio 5
    Crear una máquina virtual ubuntu e instalar en ella un
    servidor nginx para poder acceder mediante web.

Para crear una máquina virtual con azure hay que especificar la imagen que se quiere
montar en dicha máquina, el usuario, la contraseña, la localización, y la habilidad de acceso remoto.

En la siguiente imagen se puede ver como se ha creado una máquina virtual con Ubuntu 12.04.

!["Creación de VM con Azure"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/creatingAzureVM.png)

Después de crear la máquina virtual esta en un estado especial en el cual no se puede
interactuar con ella. Hay que iniciar la máquina para poder acceder remotamemente.

En la siguiente imagen se puede ver como se inicia la máquina virtual.

!["Iniciar la máquina"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/startingAzureVM.png)

Ahora usando el comando:

```bash
azure vm list
```

se puede verificar el estado de la máquina virtual. Estará en el estado **ReadyRole**.

Antes de acceder a la máquina mediante ssh, hay que crear un `endpoint`, que sirve
para poder acceder a la máquina mediante un puerto especificado por el usuario.
Este puerto será el puerto 80, que es el puerto usado por los servidores web para servir
páginas.

En la siguiente imagen se puede ver como se crea un endpoint para la máquina virtual
creada.

!["Creando un endpoint"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/creatingEndPoint.png)

Ahora se accede mediante ssh a la máquina creada. En la siguiente imagen se
puede ver como he accedido a la máquina `ivmachine2.cloudapp.net`.

!["ssh"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/sshAzureVM.png)

A continuación se instala en nginx.

```bash
sudo apt-get install -y nginx
```

Ya instalado he creado un fichero index.html configurado, pero para que nginx
sirva dicho fichero y no el que viene por defecto hay que cambiar unas configuraciones
de /etc/nginx/sites-available/default.
Dentro de dicho fichero hay que especificar el destino del fichero index.html
que quieres servir.
En la siguiente imagen se puede ver dicha configuración, donde se ha cambiado la
raiz de los documentos a /home/josecolella.

!["Nginx Conf"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/changingNginxConf.png)

Hay que reiniciar la configuración del demonio de nginx.

```bash
sudo service nginx restart
```

Si accedemos a http://ivmachine2.cloudapp.net/ podemos ver la siguiente página

!["index.html"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/indexPage.png)

Se ha configurado correctamente la máquina virtual para acceder desde afuera con nginx.

###Ejercicio 6
    Usar juju para hacer el ejercicio anterior.

Para usar juju en conjunto con azure hay que primero cambiar el fichero
de configuración que viene con juju: `environments.yaml`. El fichero se genera
usando:

```bash
sudo juju init
```

Hay que crearse unos certificados de seguridad para que azure autentifique al usuario
Esto se hace usando openssl.

```bash
openssl req -x509 -nodes -days 3650 -newkey rsa:2048 -keyout azure.pem -out azure.pem
openssl x509 -inform pem -in azure.pem -outform der -out azure.cer
chmod 600 azure.pem
```

Ya creados los certificados .pem y .cer, podemos configurar `environments.yaml`.
En el fichero se dispone de un `admin-secret` que será importante para entrar en juju-gui.
Se tiene que cambiar el lugar, management-subscription-id, management-certificate-path,
y storage-account-name para reflejar correctamente la información del usuario.

El management-subscription-id se conoce utilizando el siguiente comando:

```bash
azure account list
```

El management-certificate-path es el lugar del certificado .pem, mientras que el
storage-account-name es el nombre del almacenamiento que ya tiene creado el usuario.
Esto se conoce usando:

```bash
azure storage account list
```

Ahora que ha configurado, hay que indicarle a juju que se va a usar azure.
Esto se hace usando:

```bash
sudo juju switch azure
```

Hecho esto, esta listo para construir el entorno. Esto se hace con:

```bash
sudo juju bootstrap
```

Ahora hay que indicar que se va a emplear el charm `juju-gui`.

```bash
sudo juju deploy --to 0 juju-gui
```

Después hay que exponerlo para poder usarlo. Esto se hace usando:

```bash
sudo juju expose juju-gui
```

Ahora que tenemos la interfaz, se puede acceder mediante un cliente
web. En mi caso la url es https://juju-azure-s7hyocf897.cloudapp.net/
La contraseña para entrar es el `admin-secret` de environments.yaml.

Ya dentro de la interfaz web, se pueden escoger charms para agregar. Si buscamos
por `nginx`, el charm resultante es el que se ve en la siguiente imagen.

!["Nginx Charm"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/nginxcharm.png)


En la siguiente imagen se puede ver que se ha agregado dicho servicio:

!["Nginx"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/statusnginx.png)

Podemos exponer dicho servicio con:

```bash
sudo juju expose nginx
```

Como se puede ver en la siguiente imagen, el servicio esta activo y ya se puede acceder mediante
el puerto 80 o 8080:

!["Activación de nginx"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema5Screenshots/nginxstarted.png)

###Ejercicio 7
    Instalar una máquina virtual Ubuntu 12.04 para el hipervisor que tengas instalado.


Lo primero que hay que hacer es descargarnos los paquetes necesarios.
Usando el siguiente comando:

```bash
sudo apt-get install ubuntu-vm-builder kvm virt-manager
```

Ahora usando `vmbuilder` se puede especificar la distribucion, el destino
del disco, el nombre de la maquina virtual, y el dominio.

```bash
sudo vmbuilder kvm ubuntu --suite precise --flavour server -o --dest ~/Desktop/Ubuntu.vdi --hostname iv --domain iv 
```

Usando la imagen creada con dicha orden se puede montar sobre Oracle Virtualbox para que se pueda usar, o con qemu.

