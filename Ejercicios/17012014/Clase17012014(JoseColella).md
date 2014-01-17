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


##Ejercicio 3
    Escribir en YAML la siguiente estructura de datos en JSON
    { 'uno': 'dos', 'tres': [ 4, 5, 'Seis', { 'siete': 8, 'nueve': [Object] } ] }