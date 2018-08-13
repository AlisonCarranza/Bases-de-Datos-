--parte dos implementacion dml

-----------------------------Generos--------------------------------------
INSERT INTO TBL_GENEROS
VALUES (1,'Femenino');

INSERT INTO TBL_GENEROS
VALUES (2,'Masculino');

-------------------------------TIPO DE UBICACION-------------------------------------
INSERT INTO TBL_TIPO_UBICACION
VALUES (1,'PAIS');

INSERT INTO TBL_TIPO_UBICACION
VALUES (2,'ESTADO');

INSERT INTO TBL_TIPO_UBICACION
VALUES (3,'PROVINCIA');

INSERT INTO TBL_TIPO_UBICACION
VALUES (4,'CIUDAD');

INSERT INTO TBL_TIPO_UBICACION
VALUES (5,'DEPARTAMENTO');

-----------------------------UBICACION-------------------------------------------------------

INSERT INTO TBL_UBICACION
VALUES(1,1,NULL,'HONDURAS',504,20,100);

INSERT INTO TBL_UBICACION
VALUES(2,1,NULL,'NICARAGUA',302,21,104);

INSERT INTO TBL_UBICACION
VALUES(3,1,NULL,'España',1003,50,120);

INSERT INTO TBL_UBICACION
VALUES(4,1,Null,'Inglaterra',44,51,0);

INSERT INTO TBL_UBICACION
VALUES(5,4,1,'Tegucigalpa',1103,20,89);

INSERT INTO TBL_UBICACION
VALUES(6,2,2,'Managua',167,23,80);

INSERT INTO TBL_UBICACION
VALUES(7,3,3,'Barcelona',12,78,34);

INSERT INTO TBL_UBICACION
VALUES(8,3,3,'Sevilla',145,67,65);

INSERT INTO TBL_UBICACION
VALUES(9,4,1,'San Pedro Sula',156,25,89);

------------------------------------usuarios-------------------------------
INSERT INTO TBL_USUARIOS 
VALUES(1,1,2,'josue03@hotmail.com','josue01','J0S777','33223723',TO_DATE('14-05-2017','DD/MM/YYYY'),TO_DATE('02-03-1996','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(2,1,1,'mariahe1@gmail.com','mariposa112','Mari504','92934567',TO_DATE('15-11-2011','DD/MM/YYYY'),TO_DATE('23-08-1997','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(3,4,1,'AnaLopez@gmail.com','ana199816','AnaLop03','9193012324',TO_DATE('15-11-2011','DD/MM/YYYY'),TO_DATE('05-11-1995','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(4,4,1,'KatherinHawking78@yahoo.com','kathy78','kathy78','9675640987',TO_DATE('24-09-2000','DD/MM/YYYY'),TO_DATE('05-12-1980','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(5,3,2,'MateoHernandez@gmail.com','cupcake@190','Mateo91','785429891',TO_DATE('23-09-2010','DD/MM/YYYY'),TO_DATE('13-11-1995','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(6,4,2,'PhilipMorrison@gmail.com','british1234','Philip','2345678901',TO_DATE('25-11-2018','DD/MM/YYYY'),TO_DATE('05-11-1997','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(7,2,1,'yukotoriyama123@gmail.com','dragonball23','Yuko67','33456712',TO_DATE('07-10-2017','DD/MM/YYYY'),TO_DATE('09-09-1992','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(8,2,1,'alejandracarrazco16@yahoo.com','matematicas4@','Ale21','567348902',TO_DATE('15-05-2018','DD/MM/YYYY'),TO_DATE('06-11-1998','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(9,1,2,'josefocs@gmail.com','tutoriashn','JoseDavid','88984567',TO_DATE('04-10-2009','DD/MM/YYYY'),TO_DATE('03-12-1995','DD/MM/YYYY'));

INSERT INTO TBL_USUARIOS 
VALUES(10,1,2,'VariedadesNancy@gmail.com','Decoraciones234','VariedadesNancy','867453210',TO_DATE('17-03-2012','DD/MM/YYYY'),TO_DATE('05-11-1997','DD/MM/YYYY'));

---------------------------------------Usuario Prime---------------------------------------------------------------
INSERT INTO TBL_USUARIOS_PRIME
VALUES(7);

INSERT INTO TBL_USUARIOS_PRIME
VALUES(9);

INSERT INTO TBL_USUARIOS_PRIME
VALUES(6);

INSERT INTO TBL_USUARIOS_PRIME
VALUES(4);

---------------------------------------------TIPO DE PROVEEDORES-----------------------------
INSERT INTO TBL_TIPOS_DE_PROVEEDORES
VALUES(1,'Comercial');

INSERT INTO TBL_TIPOS_DE_PROVEEDORES
VALUES(2,'Manufacturera');

INSERT INTO TBL_TIPOS_DE_PROVEEDORES
VALUES(3,'Servicios');

-------------------------------------------Proveedores-------------------------------------------
INSERT INTO TBL_PROVEEDORES
VALUES(1,2,'Nike');

INSERT INTO TBL_PROVEEDORES
VALUES(2,3,'Tourline Express');

INSERT INTO TBL_PROVEEDORES
VALUES(3,2,'Song Migs');

INSERT INTO TBL_PROVEEDORES
VALUES(4,1,'Remington');

INSERT INTO TBL_PROVEEDORES
VALUES(5,1,'Santillana');

INSERT INTO TBL_PROVEEDORES
VALUES(6,2,'Langria');

INSERT INTO TBL_PROVEEDORES
VALUES(7,2,'San Disk');

INSERT INTO TBL_PROVEEDORES
VALUES(8,2,'Samsung');

------------------------------------------------Plataforma de Difusion----------------------------------

INSERT INTO TBL_PLATAFORMAS_DE_DIFUSION
VALUES(1,'Instagram',TO_DATE('12-08-2010','DD-MM-YYYY'),null);

INSERT INTO TBL_PLATAFORMAS_DE_DIFUSION
VALUES(2,'Facebook',TO_DATE('09-06-2007','DD-MM-YYYY'),null);

INSERT INTO TBL_PLATAFORMAS_DE_DIFUSION
VALUES(3,'Twitter',TO_DATE('23-08-2011','DD-MM-YYYY'),null);

INSERT INTO TBL_PLATAFORMAS_DE_DIFUSION
VALUES(4,'Google plus',TO_DATE('04-11-2010','DD-MM-YYYY'),null);

-------------------------------------------Tipo Ofertas--------------------------------------------------
INSERT INTO TBL_TIPOS_DE_OFERTAS
VALUES(1,'Ofertas del dia');

INSERT INTO TBL_TIPOS_DE_OFERTAS
VALUES(2,'Ofertas Flash');

INSERT INTO TBL_TIPOS_DE_OFERTAS
VALUES(3,'Ofertas destacadas');

INSERT INTO TBL_TIPOS_DE_OFERTAS
VALUES(4,'Ofertas de acceso prioritario PRIME');

-----------------------------------------Tipos de Listas--------------------------------------------------
INSERT INTO TBL_TIPOS_DE_LISTAS
VALUES(1,'Listas de Compras ');

INSERT INTO TBL_TIPOS_DE_LISTAS
VALUES(2,'Listas de deseos');

INSERT INTO TBL_TIPOS_DE_LISTAS
VALUES(3,'Listas de deseos universal');

INSERT INTO TBL_TIPOS_DE_LISTAS
VALUES(4,'Lista de nacimiento');

-----------------------------------------Tipos de Envio------------------------------------------------
INSERT INTO TBL_TIPO_ENVIOS
VALUES (1,'Nacional');

INSERT INTO TBL_TIPO_ENVIOS
VALUES (2,'Internacional');

----------------------------------------Tipo de Privacidad---------------------------------------------
INSERT INTO TBL_TIPO_DE_PRIVACIDAD
VALUES (1,'Privado');

INSERT INTO TBL_TIPO_DE_PRIVACIDAD
VALUES (2,'Publico');

----------------------------------------Temas de Ayuda--------------------------------------------------
INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (1,1,'Como puedo vender un producto en Amazon?');

INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (2,3,'Cuales con las garantias que da Amazon');

INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (3,3,'Cuales son los metodos de pago permitidos');

INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (4,9,'Cual es el mecanismo para devolver un producto');

INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (5,2,'Plazo para cancelar un pedido');

INSERT INTO TBL_TEMAS_DE_AYUDA
VALUES (6,8,'Plazo para cancelar un pedido');

--ALTER TABLE TBL_TEMAS_DE_AYUDA MODIFY DESCRIPCION VARCHAR2(200);

----------------------------------------------MARCAS----------------------------------------------------------
INSERT INTO TBL_MARCAS
VALUES (1,'Samsung');

INSERT INTO TBL_MARCAS
VALUES (2,'Sandisk');

INSERT INTO TBL_MARCAS
VALUES (3,'Converse');

INSERT INTO TBL_MARCAS
VALUES (4,'Nike');

INSERT INTO TBL_MARCAS
VALUES (5,'Covergirl');

INSERT INTO TBL_MARCAS
VALUES (6,'Remington');

------------------------------------------Tabla Agrupaciones---------------------------------------------------
INSERT INTO TBL_AGRUPACIONES
VALUES (1,'Por Fecha');

INSERT INTO TBL_AGRUPACIONES
VALUES (2,'Por Popularidad');

INSERT INTO TBL_AGRUPACIONES
VALUES (3,'Satisfaccion del Cliente');

INSERT INTO TBL_AGRUPACIONES
VALUES (4,'Color');

-------------------------------------------Articulos---------------------------------
INSERT INTO TBL_ARTICULOS
VALUES (1,4,2,3,2,4,'Tennis Converse color negro talla 8',2,TO_DATE('12-03-2017','DD-MM-YYYY'),'Zapato');

INSERT INTO TBL_ARTICULOS
VALUES (2,1,2,4,2,4,'Tennis Nike color blanco talla 6',37,TO_DATE('12-03-2017','DD-MM-YYYY'),'zapato deportivo');

INSERT INTO TBL_ARTICULOS 
VALUES (3,2,1,6,4,3,'Color rosado,Pantalla LCD 150-235ºC,Placas con revestimiento de cerámica',6,
TO_DATE('02-04-2018','DD-MM-YYYY'),'Plancha para el cabello');

INSERT INTO TBL_ARTICULOS
VALUES (4,2,1,6,4,3,'Cuenta con ajuste de temperatura ThermoProtect,Chorro de aire frío que fija el peinado',5,
TO_DATE('11-04-2017','DD-MM-YYYY'),'Secadora de Cabello');

INSERT INTO TBL_ARTICULOS
VALUES (5,8,2,1,3,3,'Procesador de 1.9 GHz Octa-Core;
memoria RAM 3 GB,Pantalla Super AMOLED táctil capacitiva de 5.2 pulgadas con una resolución de 1920 x 1080 píxeles',10,
TO_DATE('7-08-2018','DD-MM-YYYY'),'Telefono Movil');

INSERT INTO TBL_ARTICULOS
VALUES (6,3,1,2,3,1,'Velocidades de transferencia de hasta 98 MB/s,tamaño 32 gb',20,TO_DATE('15-07-2018','DD-MM-YYYY'),'Memoria Micro SD');

INSERT INTO TBL_ARTICULOS
VALUES (7,9,2,1,3,3,'3 GB de RAM y con almacenamiento de 32 GB + ranura MicroSD (hasta 256 GB)
,Dimensiones 149,3x70,2x8,2 mm ,Batería de 3.000 mAh',12,TO_DATE('01-07-2018','DD-MM-YYYY'),'Telefono movil');

INSERT INTO TBL_ARTICULOS
VALUES (8,2,1,5,4,2,'La Palette Gold consta de una selección de 10 tonos Shimmer, de rosa sutil a oro brillante y púrpura,Peso:9 g',
12,TO_DATE('24-12-2017','DD-MM-YYYY'),'Sombra de Ojos');

INSERT INTO TBL_ARTICULOS
VALUES (9,10,2,5,2,2,'Labial mate fijo tinta liquida, sella el mate con el color ink más saturado',12,
TO_DATE('24-12-2017','DD-MM-YYYY'),'Labial');

------------------------------------Articulos DE Carrito(Deberia tener un funcionamiento similar al de las listas)---------------------------------------------------------------------
----------------------------------- CONCLUSION=> Articulos DE Carrito = ARTICULOS_X_USUARIOS
INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (1,8,TO_DATE('31-08-2018','DD-MM-YYYY'),2);

INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (8,4,TO_DATE('31-08-2018','DD-MM-YYYY'),3);

INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (6,7,TO_DATE('31-08-2018','DD-MM-YYYY'),1);

INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (9,8,TO_DATE('28-08-2018','DD-MM-YYYY'),2);

INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (8,9,TO_DATE('28-08-2018','DD-MM-YYYY'),2);

INSERT INTO TBL_ARTICULOS_DE_CARRITOS
VALUES (2,3,TO_DATE('27-08-2018','DD-MM-YYYY'),2);


----------------------------------------Listas------------------
INSERT INTO TBL_LISTAS
VALUES (1,2,2,2,TO_DATE('27-06-2018','DD-MM-YYYY'),'Electronica');

INSERT INTO TBL_LISTAS
VALUES (2,3,4,1,TO_DATE('07-06-2018','DD-MM-YYYY'),'Mi bebe');

INSERT INTO TBL_LISTAS
VALUES (3,4,1,2,TO_DATE('21-07-2017','DD-MM-YYYY'),'Muchas cosas oooo');

INSERT INTO TBL_LISTAS
VALUES (4,2,2,2,TO_DATE('20-05-2018','DD-MM-YYYY'),'Mis compras');

-------------------------------------Articulos por listas-----------------------------------
INSERT INTO ARTICULOS_DE_LISTAS
VALUES (6,1);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (5,1);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (8,4);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (7,4);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (5,3);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (1,3);

INSERT INTO ARTICULOS_DE_LISTAS
VALUES (8,3);






















