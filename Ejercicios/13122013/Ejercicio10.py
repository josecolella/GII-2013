# -*- coding: utf-8 -*-
# Author: Jose Miguel Colella
# https://github.com/WindowsAzure/azure-sdk-for-python

# Desde un programa en Ruby o en algún otro lenguaje,
# listar los blobs que hay en un contenedor,
# crear un fichero con la lista de los mismos y
# subirla al propio contenedor.

import credentials  # Contiene información sensible
from azure.storage import BlobService


def getContainersWithBlobs(blob_service):
    """
    Imprime los contenedores del usuario con los correspondientes
    blobs.

    blob_service: Nombre del servicio de gestion de blobs @class BlobService
    """
    for i in blob_service.list_containers().containers:
        print("Nombre del contenedor: {}".format(i.name))
        print("Url del contenedor: {}".format(i.url))
        print("##############################")
        for j in blob_service.list_blobs(i.name).blobs:
            print("\tNombre del Blob: {}".format(j.name))
            print("\tUrl del Blob: {}".format(j.url))
            print("\t------------------------------")

blob_service = BlobService(credentials.account_name, credentials.account_key)

getContainersWithBlobs(blob_service)


f_blob = open('Ejercicio10.txt', "w")
for i in blob_service.list_containers().containers:
        f_blob.write("Nombre del contenedor: {}".format(i.name))
        f_blob.write("Url del contenedor: {}".format(i.url))
        f_blob.write("##############################")
        for j in blob_service.list_blobs(i.name).blobs:
            f_blob.write("\tNombre del Blob: {}".format(j.name))
            f_blob.write("\tUrl del Blob: {}".format(j.url))
            f_blob.write("\t------------------------------")
f_blob.close()

blob_service.put_blob('code', 'f_blob.txt', f_blob, 'BlockBlob')
