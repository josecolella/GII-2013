Clase del 17 de Enero
=====================

José Miguel Colella
-------------------


##Ejercicio 1
    Instalar chef en la máquina virtual que vayamos a usar

```bash
sudo apt-get install -y ruby1.9.1 ruby1.9.1-dev rubygems
```

```bash
sudo gem install ohai chef
```

##Ejercicio 2
    Crear una receta para instalar nginx, tu editor favorito y
    algún directorio y fichero que uses de forma habitual.

Cuando ejecutas `chef-solo`, se comienzan a configurar unas cosas.

-> Le decimos que configurar con el fichero `node.json`
-> Le decimos como configurar proporcionando


```bash
mkdir -p ~/chef/cookbooks/nginx/recipes
```

Ahora se crea el fichero que define la receta. Dentro de dicho fichero
se define la receta para instalar `nginx`

```bash
vim ~/chef/cookbooks/nginx/recipes/default.rb
```

La receta es la siguiente:

```ruby
package 'nginx'
```

Ahora hay que indicarle que receta hay que ejecutar. Esto se hace configurando
`node.json`, e indicarle que se va a ejecutar la receta de nginx.

```js
{
  "run_list": [ "recipe[nginx]" ]
}
```

Para poder ejecutar la receta se usa el siguiente comando:

```bash
sudo chef-solo -c chef/solo.rb
```

La ejecución de la receta se puede visualizar en la siguiente imagen:

!["Ejecución de Receta Nginx"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema6Screenshots/nginxChefStart.png)

Para poder probar que sirve el nginx se tiene que iniciar el demonio
de nginx, y hacemos un curl a la página principal.

En la siguiente imagen, se puede ver como se ha iniciado el demonio y
se ha comprobado que esta se sirve la página principal.

!["nginx main page"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema6Screenshots/curl.png)


Para instalar algun directorio y fichero, primero se crea el directorio
donde se va a crear la receta.

```bash
mkdir -p ~/chef/cookbooks/directory/recipes
```

Y se define la receta:

```bash
vim ~/chef/cookbooks/directory/recipes/default.rb
```

La receta para instalar algun directorio y fichero es la siguiente:

```ruby
directory '/home/vagrant/Desktop/'
file "/home/vagrant/Desktop/project" do
  owner "vagrant"
  group "vagrant"
  mode 00544
  action :create
  content "Creado nginx"
end
```

Ahora hay que indicarle a chef que receta ejecutar configurando el fichero
`node.json`.

```js
{
  "run_list": [ "recipe[directory]" ]
}
```

Y ejecutamos la receta con el siguiente comando:

```bash
sudo chef-solo -c chef/solo.rb
```

En la siguiente imagen se puede ver la ejecución de la receta:

!["Ejecución de Chef"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema6Screenshots/creatingDirectoryFile.png)

Después de la ejecución de chef, se ha creado un directorio Desktop con un fichero project

!["Creado Desktop"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema6Screenshots/Desktop%20created.png)


Para instalarme `emacs` con Chef he seguido los mismos pasos anteriores.
Primero hay que identificar el directorio de la receta de la receta de emacs.

```bash
mkdir chef/cookbooks/emacs/recipes
```

La receta es la siguiente:

```ruby
package 'emacs'
```

Moficamos el node.json para apuntar a dicha receta, y ejecutamos la receta con:

```bash
sudo chef-solo -c chef/solo.rb
```

Como podemos ver en la siguiente imagen, se ha instalado el emacs con éxito.

!["Version Emacs"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema6Screenshots/emacsVersion.png)


Las tres recetas en conjunto serían

```ruby
package 'emacs'
package 'nginx'
directory '/home/vagrant/Desktop/'
file "/home/vagrant/Desktop/project" do
  owner "vagrant"
  group "vagrant"
  mode 00544
  action :create
  content "Creado nginx"
end
```


##Ejercicio 3
    Escribir en YAML la siguiente estructura de datos en JSON
    { 'uno': 'dos', 'tres': [ 4, 5, 'Seis', { 'siete': 8, 'nueve': [Object] } ] }

La representación en yaml de dicha estructura de datos es muy similar a la que se
visualiza en forma json. Un aspecto importante es que yaml no require el uso
de comillas para denotar los valores de la estructura de datos.

A continuación se puede ver como se representaría en forma YAML.

```yaml
--- # Bloque indentado
uno :   dos
tres :
    - 4
    - 5
    - Seis
    - siete: 8
    - nueve:
      - Object
---
```

Como se puede ver los arrays asociativos o diccionarios se representan de la
siguiente manera `llave : valor`. Las listas se denotan como:

```yaml
---
- valor1
- valor2
---
```

Y se pueden combiar las dos notaciones para obtener diccionarios
que tiene listas como valores, como esta en la estructura de datos de json
que se tiene que modelar.

##Ejercicio 4

Lo primero que hay que hacer es subir la llave pública de la máquina anfitriona
a la máquina de azure. Con el siguiente comando se sube la llave

```bash
ssh-copy-id -i ~/.ssh/id_rsa.pub josecolella@ivmachine2.cloudapp.net
```

Se hace ssh a la máquina con:

```bash
ssh josecolella@ivmachine2.cloudapp.net
```

sudo mkdir -p /etc/ansible/hosts


```bash
[azure]
ivmachine2.cloudapp.net
```


Vamos a la aplicación almacenada en Github y hacemos `Deploy keys`, y agregamos
la llave publica del servidor.
En el servidor

```bash
ssh-keygen -t rsa
```

En el primero ponemos el bloque de servidores en el que vamos a actuar,
en el segundo si hace falta hacer sudo o no y en el tercero las tareas
que vamos a ejecutar, en este caso una sola.

Hay que conectarse previamente a git o sino no se podrá desplegar la aplicación

```bash
ansible azure -m git -a "repo=git@github.com:josecolella/DAI_Practica4.git dest=~/ version=HEAD"
```

```yaml
---
- hosts: azure
  sudo: yes
  tasks:
    - name: Pip install
      apt: name=python-pip state=present
    - name: Install essential packages
      apt: name=python-dev state=present
      apt: name=build-essential state=present
    - name: Install Python Modules for Application
      command: easy_install web.py tweepy mako pymongo feedparser
    - name: Deploying Application
      command: chdir=/home/josecolella/repo nohup python index.py 80 &
      async: 45
      poll: 0
```

Para poder ejecutar la aplicación he tenido que usar en el playbook acciones
[asincronas][1], para poder mantener las conexiones abiertas

Si se accede al sitio http://ivmachine2.cloudapp.net, se puede ver que el sitio
esta activo. Se ha configurado con éxito

Comparando Chef y Ansible

Ansible es mucho más flexible al momento de usarla. No es tan rigido con
los directorios como Chef. Además tienes la flexibilidad de que puedes ejecutar
ansible desde afuera mientras que chef tiene que tener las recetas adentro.
Chef es más rápido que Ansible pero Ansible es más flexible con su facil
gestión de multiples máquinas. El sintaxis de Chef es un poco más claro que
el que usa Ansible.

Voy a comparar tiempo de ejecución para instalar el paquete conocido como `mc`.

###Ansible

He creado un playbook para ansible y he recabado el tiempo de ejecución

```yaml
---
- hosts: azure
  sudo: yes
  tasks:
    - name: Update mc
      apt: pkg=mc state=present
```

La ejecución con:

```bash
ansible-playbook -i /etc/ansible/hosts mc.yml
```

Ha tomado unos 20.181 segundos en ejecutar

###Chef

He creado una receta para la instalación de `mc` para chef.
La receta es la siguiente:

```ruby
package 'mc'
```

Hay que cambiar el node.json para que sepa que hay que ejecutar la receta
de `mc`.

```json
{
  "run_list": [ "recipe[mc]" ]
}
```

El tiempo de ejecución 2.777s

##Ejercicio 6

Primero hay que agregar la box que se usará como distribución. Usando el sitio web
que proporciona los [enlaces][2] a las boxes, la distribución de debian se puede conseguir
en el siguiente enlace https://dl.dropboxusercontent.com/s/xymcvez85i29lym/vagrant-debian-wheezy64.box

Usando el siguiente comando se puede instalar la máquina.

```bash
vagrant box add Debian https://dl.dropboxusercontent.com/s/xymcvez85i29lym/vagrant-debian-wheezy64.box
```

Hay que cambiar el fichero de configuración conocido como `Vagrantfile`
para que arranque la box de Debian.
Se tiene que cambiar las siguiente configuraciones.


Lo que hace es descargarse la box del sitio proporcionado. Cuando haya terminado
descargarse, se puede iniciar usando el comando:

```bash
vagrant up
```

Esto inicializa la máquina, abriendo el puerto 22 para conexión remota desde
la máquina anfitriona. Para poder conectarse remotamente a la máquina se usa
el siguiente comando:

```bash
vagrant ssh
```

Vagrant es un excelente mecanismo para desarrollo ya que se puede configurar
para tener cualquier entorno, y además proporciona flexibilidad al momento
de crear, configurar, y destruir. Para ir un workflow moderno debería incluir
Vagrant como herramienta de desarrollo, usando la nube para el despliegue.




[1]: http://docs.ansible.com/playbooks_async.html
[2]:http://www.vagrantbox.es/
