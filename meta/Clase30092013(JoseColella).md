Clase de 30-09-2013
====================
Jose Miguel Colella
------------------
Ejercicios
-----------

- Ejercicio 1

Consultar en el catálogo de alguna tienda de informática el precio de un ordenador tipo servidor y calcular su coste de amortización a cuatro y siete años.

> He seleccionado la empresa IBM, y el servidor [DataPlex dx360 M4 server][1].
> Dicho servidor tiene un valor de $3969.00. Para calcular el coste de amortización
> he optado por usar el calculo de [amortización lineal][2], que se puede ver a continuación.
>((Coste - Valor Residual)/ Vida Útil)
>
> Si se compra dicho servidor al *comienzo del año*, que significa 1 de Enero, 2013,
> y se quiere calcular  el coste de depreciación para el año terminando en 31 de 
> Diciembre, 2017. El valor residual será 1032
>
> Con valor residual: ((3969 - 1032)/4) = $734.25
> Sin valor residual: ((3969)/4) = $992.25
>
> En vez, si se compra el servidor en otro mes, se usa la siguiente formula
> Amortización del primer año: (MesComprado /12) * ((3969-1032)/4)
> Amortización del último año: ((12 - MesComprado) /12) * ((3969-1032)/4)
>
> Entonces si el servidor se compra el 1 de Marzo, el calculo de amortización es:
> Primer año con valor residual : (3 /12) * ((3969-1032)/4) = $183.56
> Último año con valor residual : (9/12) * ((3969-1032)/4) = $550.69
>
> Primer año sin valor residual : (3 /12) * ((3969)/4) = $248.06
> Último año sin valor residual : (9/12) * ((3969)/4) = $774.19

- Ejercicio 2

Usando las tablas de precios de servicios de alojamiento en Internet y de proveedores de servicios en la nube, Comparar el coste durante un año de un ordenador con un procesador estándar (escogerlo de forma que sea el mismo tipo de procesador en los dos vendedores) y con el resto de las características similares (tamaño de disco duro equivalente a transferencia de disco duro) si la infraestructura comprada se usa sólo el 1% o el 10% del tiempo.

> Las empresas principales utilizadas para hacer las comparaciones de precio
> son Amazon Web Services y Microsoft Azure. 
> Amazon Web Service proporciona la habilidad depagar en base al uso de la instancia
> pero tambien esta la opción de reservar una instancia por un año para recibir precios reducidos 
> al cambio de poner más dinero al comienzo. Los procesadoes de amazon web services 
> suelen ser Intel Xeon, aunque no especifican que modelo para instancias generales.
>
> 
> Para una instancia de media utilización de medio tamaño (1 vCPU, 3.75 GB SSD), localizada en Virginia se tiene que
> pagar al frente $277. Por hora se paga $0.042, que significa que si la instancia esta corriendo todo el dia, al final del año tienes que pagar 24*0.042*365 = $367.92.
>
> Si se útiliza sólo el 1% del tiempo se paga $3.67.

> Si se útiliza sólo el 10% del tiempo se paga $36.79.

> La información sobre los precios y características hardware se han conseguido de los
> siguientes lugares:
> - [precios][3]









[1]: http://goo.gl/phXHBh
[2]: http://goo.gl/yHhoS9
[3]: http://aws.amazon.com/ec2/pricing/
[4]: http://aws.amazon.com/ec2/instance-types/instance-details/