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


