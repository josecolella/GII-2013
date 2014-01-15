#!/usr/bin/env python3

import os
from time import time

paravirtualizationCmd = "qemu-system-x86_64 -boot order=c -drive file=~/Desktop/qcow2_disc.img,if=virtio"
otherCmd = "qemu-system-x86_64 -hda ~/Desktop/qcow2_disc.img"

if __name__ == '__main__':
    timeStartParavirtualization = time()
    os.system(paravirtualizationCmd)
    endTimeParavirtualization = time() - timeStartParavirtualization
    print("Tiempo tardado para Paravirtualizacion: {}".format(
        endTimeParavirtualization))
    timeStartOtherCmd = time()
    os.system(otherCmd)
    endTimeOtherCmd = time() - timeStartOtherCmd
    print("Tiempo tardado para Otro: {}".format(
        endTimeParavirtualization))
