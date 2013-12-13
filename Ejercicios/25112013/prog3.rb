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