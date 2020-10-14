# Modelo Entidad Relación AFIM
---
Para AFIM (Aplicativo de facturación e inventariado multitenant), se utilizará el siguiente diagrama ER:

___

![](https://github.com/KelvinMR1997/A.F.I.M/blob/main/Documentacion/UML/img/Diagrama-ER.jpg?raw=true)

#### Empezamos con Empresas: 
En esta tabla se almacenan los datos mas relevantes a la hora de identificar una empresa: Nombre, NIT, Telefono y dirección, a su vez se puede observar la llave foranea del identificador de Sucursales. <br><br>

#### **Sucursales:** 
Los atributos aqui mencionados, son los mismos de una empresa a diferencia de la llave foranea del identificador Clientes. <br><br>

##### **CliSuc:** 
Nace como union de clientes con sucursales.

#### **Clientes:** 
En esta tabla se insertan los datos resumidos del cliente (Primer nombre, apellidos, cedula y numero telefonico) el cual haya recibido su Factura, a su vez podemos observar la tabla Detalles la cual está conectada a facturas. <br><br>

##### **Detalles:**
Esta tabla nace de la union entre Clientes y facturas, ya que en cada factura no sólo van los datos del cliente o los datos de los productos a comprar, sino tambien vemos una serie de información extra la cual no tendria sentido colocar en ninguna de las dos tablas principales (Clientes/Facturas), he ahí la  importancia de esta tabla. <br><br>

#### **Facturas:** 
La tabla encargada de almacenar la informacion del Codigo identificador de la factura, asi como la fecha de creacion de esta misma y por ultimo el iva representado en porcentaje. facturas más adelante se cruza con productos. <br><br>

#### **Productos:**
 Esta tabla se encarga de almacenar la informacion de cada producto en stock, con los atributos Identificador, nombre, existencias, lote, fecha de vencimiento (en caso sea un producto comestible) y precio de compra, son estos datos los que junto a factura y cliente, se crea una factura fisica la cual se entrega al cliente. <br><br>

A partir de aquí se dividen dos tablas con una en comun Productos.

### Productos/Almacenan/Bodegas:
#### **Almacenan:** 
Esta tabla hace referencia a que los productos son almacenados en las bodegas, ademas guarda la fecha en que fueron almacenados.

##### **Bodegas:**
Esta tabla almacena la informacion de la bodega, informacion parecida a Empresas y Sucursales.

### Productos/Entregan/Proveedores:

##### **Entregan:**
Esta tabla almacena la fecha en que se entregaron los productos y la cantidad de productos entregados.

#### **Proveedores:** 
Esta tabla almacena la informacion de los proveedores, informacion identica a Empresas, a diferencia de la llave foranea.
