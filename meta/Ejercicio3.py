#!/usr/bin/env python3
#Author: Jose Miguel Colella
#Description: En este script el usuario inserta
#el nombre de un fichero que se comprimira con gizp


import gzip

name_of_file = input("Inserta nombre de fichero a comprimir: ")
with open(name_of_file, 'rb') as f_in:
    with gzip.open(name_of_file+'.gz', 'wb') as f_out:
        f_out.writelines(f_in)

print("La compression ha terminado con exito")
