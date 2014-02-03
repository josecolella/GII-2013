# DOCKER-VERSION 0.7.6
FROM    ubuntu:12.04

RUN     apt-get update
RUN     apt-get install -y build-essential
RUN     apt-get install -y python
RUN     apt-get install -y python-dev
RUN     DEBIAN_FRONTEND=noninteractive apt-get install -q -y python-setuptools
RUN     easy_install pip
# Instalar git
RUN     apt-get install -y git
# Subir las llaves para usar ssh
# Clono el repositorio
RUN     git clone https://c7a359176499cad775c7ecacb1fe9592a79d4b45@github.com/josecolella/DAI_Practica4.git
#Instalar modulos de dependencia
RUN     pip install tweepy
RUN     pip install web.py
RUN     pip install feedparser
RUN     pip install pymongo
RUN     pip install mako
#Expongo el puerto 8080
EXPOSE  8080
#Ejecuto el programa
CMD     ["nohup python", "~/DAI_Practica4/index.py"]