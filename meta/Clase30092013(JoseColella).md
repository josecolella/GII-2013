Clase de 30-09-2013
====================
Jose Miguel Colella
------------------
Ejercicios
-----------

- ###Ejercicio 1

Consultar en el catálogo de alguna tienda de informática el precio de un ordenador tipo servidor y calcular su coste de amortización a cuatro y siete años.

> He seleccionado la empresa IBM, y el servidor [DataPlex dx360 M4 server][1].
> Dicho servidor tiene un valor de $3969.00. Para calcular el coste de amortización
> he optado por usar el calculo de [amortización lineal][2], que se puede ver a continuación.
>((Coste - Valor Residual)/ Vida Útil)
>
> Si se compra dicho servidor al *comienzo del año*, que significa 1 de Enero, 2013,
> y se quiere calcular  el coste de depreciación para el año terminando en 31 de 
> Diciembre, 2017. El valor residual será 1032. El valor residual es el valor que se espera tener después del ciclo de vida del producto.
>
> Con valor residual: ((3969 - 1032)/4) = $734.25
>
> Sin valor residual: ((3969)/4) = $992.25
>
> En vez, si se compra el servidor en otro mes, se usa la siguiente formula:

> Amortización del primer año: (MesComprado /12) * ((3969-1032)/4).

> Amortización del último año: ((12 - MesComprado) /12) * ((3969-1032)/4)
>
> Entonces si el servidor se compra el 1 de Marzo, el calculo de amortización es:
> Primer año con valor residual : (3 /12) * ((3969-1032)/4) = $183.56
>
> Último año con valor residual : (9/12) * ((3969-1032)/4) = $550.69
>
> Primer año sin valor residual : (3 /12) * ((3969)/4) = $248.06
>
> Último año sin valor residual : (9/12) * ((3969)/4) = $774.19
>
> Para calcular los 7 años se utiliza la misma metodología
>
> Si se compra dicho servidor al *comienzo del año*, que significa 1 de Enero, 2013,
> y se quiere calcular  el coste de depreciación para el año terminando en 31 de 
> Diciembre, 2020.
>
> Este calculo se hace sin el uso del valor residual debido a que con el avanzamiento de la technología, después de un cierto tiempo, ya no tiene valor.

> Sin valor residual: ((3969)/7) = $567



- ### Ejercicio 2

Usando las tablas de precios de servicios de alojamiento en Internet y de proveedores de servicios en la nube, Comparar el coste durante un año de un ordenador con un procesador estándar (escogerlo de forma que sea el mismo tipo de procesador en los dos vendedores) y con el resto de las características similares (tamaño de disco duro equivalente a transferencia de disco duro) si la infraestructura comprada se usa sólo el 1% o el 10% del tiempo.

> Las empresas principales utilizadas para hacer las comparaciones de precio
> son Amazon Web Services y Microsoft Azure. 
> ###Amazon Web Services 
>
> Amazon Web Service proporciona la habilidad de pagar en base al uso de la instancia
> pero tambien esta la opción de reservar una instancia por un año para recibir precios reducidos 
> al cambio de poner más dinero al comienzo. Los procesadoes de amazon web services 
> suelen ser Intel Xeon, aunque no especifican que modelo para instancias generales.
>
> 
> Para una instancia de media utilización de medio tamaño (1 vCPU, 2 ECU, 3.75 GB RAM), localizada en Virginia se tiene que
> pagar al frente $277. Agrego que 1 ECU es equivalente a 1 CPU de capacidad de 1.0-1.2 Ghz de procesador Xeon de Intel.
>
>Por hora se paga $0.042, que significa que si la instancia esta corriendo todo el dia, al final del año tienes que pagar 24*0.042*365 = $367.92.
>
> * Si se útiliza sólo el 1% del tiempo se paga $3.67.

> * Si se útiliza sólo el 10% del tiempo se paga $36.79.

> La información sobre los precios y características hardware de AWS se han conseguido de los
> siguientes lugares:
>
> - [precios][3]
> - [hardware][4]

> ### Microsoft Azure
> Microsoft Azure proporciona la habilidad de pagar por hora, y también proporciona la opción de comprar por 6 meses y 12 meses.
> Ya que queremos hacer una comparación directa entre los precios proporcionados por amazon web services, se elige una máquina virtual
mediana. La médiana tiene 2 CPU de 1.6 Ghz, y 3.5 GB RAM. Las características de las máquinas virtual son similares, aunque Azure proporciona más capacidad por parte del procesador, AWS proporciona más RAM.

> Si contratas por 12 meses, el comprador tiene dos opciones: prepago o pagar mensualmente.

> Si el comprador opta por prepago tiene que pagar todo al comienzo y recibirá un descuento más grande.

> * El descuento recibido por el plan más simple es 25%

> Si el comprador opta por pagar mensualmente, mínimo tiene que pagar $500 al mes.

> * El descuento recibido por el plan más simple es 22.5%

> Por hora se paga $0.18. Al mes se aproxima un pago de [~$134/month](http://www.windowsazure.com/en-us/pricing/details/virtual-machines/)
>
> * Si se usa por 1% de tiempo y se ha hecho el prepago se paga 134*12*0.01*0.25 = $4.02
>
> * Si se usa por 10% de tiempo y se ha hecho el prepago se paga 134*12*0.1*0.25 = $40.2
>
> * Si se usa por 1% de tiempo y se paga por mes se paga 
134*12*0.01*0.225 = $3.62
>
> * Si se usa por 10% de tiempo y se ha hecho el prepago se paga 134*12*0.1*0.225 = $36.18

> La información sobre los precios y características hardware se han conseguido de los
> siguientes lugares:
>
> - [precios](http://www.windowsazure.com/en-us/pricing/details/virtual-machines/)
> - [hardware](http://www.windowsazure.com/en-us/pricing/calculator/?scenario=virtual-machines)
>

> Como se puede ver por los calculos Amazon Web Services proporciona 
> un precio más bajo. 


[1]: http://goo.gl/phXHBh
[2]: http://goo.gl/yHhoS9
[3]: http://aws.amazon.com/ec2/pricing/
[4]: http://aws.amazon.com/ec2/instance-types/instance-details/