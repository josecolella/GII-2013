#!/usr/bin/ruby
#Author: Jose Miguel Colella
a = {:name => ['Jose','Colella'],:family=> ['Maria Colella', 'Antonietta Carbonara']}
#Entero
puts a.inspect
#Por llave
a.keys().each do |i|
    puts a[i]
end