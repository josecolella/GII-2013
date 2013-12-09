Ejercicios
==========
Jose Miguel Colella Carbonara
-----------------------------


* Ejercicio 1:
Para instalar Ruby e usado [`RVM`][1]. Con esta herramienta se puede gestionar multiples versiones de ruby, de manera que se pueden tener instaladas varias versiones sin ningun problema. 

Para instalar rvm se tiene que ejecutar el siguiente comando:

```sh
\curl -sSL https://get.rvm.io | bash -s stable
```

Al final tengo la siguiente version de ruby:

```sh
>>> ruby --version
>>> ruby 2.0.0p353 (2013-11-22 revision 43784) [x86_64-linux]

```

*Ejercicio 2:
Crear un programa en Ruby que imprima los números desde el 1 hasta otro contenido en una variable.

```ruby
#!/usr/bin/env ruby
#Author: Jose Miguel Colella
#Crear un programa en Ruby que imprima los numeros desde 1 hasta otro contenido en una variable

def foo(endVariable)
    (1..endVariable).each do |i|
        puts "Valor es: #{i}"
    end
end

puts "Lo siguiente imprime desde el 1 hasta el 5"
foo(5)
puts "Lo siguiente imprime desde el 1 hasta el 10"
foo(10)
```

El resultado es:

!["Resultado de prog1"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/prog1Ruby.png)

* Ejercicio 3: 
¿Se pueden crear estructuras de datos mixtas en Ruby? Crear un array de hashes de arrays e imprimirlo.

```ruby
#!/usr/bin/ruby
#Author: Jose Miguel Colella
a = {:name => ['Jose','Colella'],:family=> ['Maria Colella', 'Antonietta Carbonara']}
#Entero
puts a.inspect
#Por llave
a.keys().each do |i|
    puts a[i]
end

```

El resultado es el siguiente: 

!["Resultado de prog2"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/prog2ruby.png)

* Ejercicio 4:
Crear una serie de funciones instanciadas con un URL que devuelvan algún tipo de información sobre el mismo: fecha de última modificación, por ejemplo. Pista: esa información está en la cabecera HTTP que devuelve

```ruby
#!/usr/bin/env usr/bin/ruby
#Devolver informacion de cabecera HTTP

require 'net/http'

url = ARGV[0]
puts "La url es " << url

http = Net::HTTP.new(url, 80)
respuesta = http.request_head('/')
puts respuesta['Last-Modified'].to_s
puts respuesta["content-type"].to_s
puts respuesta["date"].to_s
puts respuesta["age"].to_s
puts respuesta["Server"].to_s
```

El resultado del programa es: 

!["Resultado Prog 3"](https://raw.github.com/josecolella/GII-2013/master/Screenshots/Tema3Screenshots/prog3ruby.png)


* Ejercicio 5:
Para instalar `vagrant` hay que ejecutar el siguiente comando:

```sh
gem install vagrant
```

[1]: https://rvm.io/

