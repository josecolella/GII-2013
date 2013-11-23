#!/bin/bash
#Author: Jose Miguel Colella
#Description: Inicializa una máquina con juju en
#la cual se tiene mediawiki y mysql y agrega una
#relacion entre mysql y mediawiki


juju init -f  #inicializamos juju para poder cear environments.yaml

juju switch local #cambiamos para que se despliegue de manera local

juju bootstrap #Se crea el contenedor juju 

juju deploy mediawiki #Se agrega mediawiki

juju deploy mysql #Se agrega mysql

juju add-relation mediawiki:db mysql #Se declara que hay una relacion entre media wiki y mysql

juju expose mediawiki #Exponemos el servicio

juju status #Vemos el estatus de dicho contenedor
