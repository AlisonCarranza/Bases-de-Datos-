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
VALUES(3,1,NULL,'Espania',1003,50,120);

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
VALUES (1,4,2,3,2,4,'Tennis Converse',2,TO_DATE('12-03-2017','DD-MM-YYYY'),'Zapato',70.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Color Negro',1);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Talla 8',1);

INSERT INTO TBL_ARTICULOS
VALUES (2,1,2,4,2,4,'Tenis Nike',37,TO_DATE('12-03-2017','DD-MM-YYYY'),'zapato deportivo', 100.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Color Blanco',2);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Talla 6',2);

INSERT INTO TBL_ARTICULOS 
VALUES (3,2,1,6,4,3,'Plancha ceramica',6,
TO_DATE('02-04-2018','DD-MM-YYYY'),'Plancha para el cabello',40.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Color Rosado',3);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Pantalla LCD 150-235CC',3);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Placas con revestimiento de ceramica',3);

INSERT INTO TBL_ARTICULOS
VALUES (4,2,1,6,4,3,'Secadora XYZ',5,
TO_DATE('11-04-2017','DD-MM-YYYY'),'Secadora de Cabello',60.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Cuenta con ajuste de temperatura ThermoProtect',4);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Chorro de aire frio que fija el peinado',4);

INSERT INTO TBL_ARTICULOS
VALUES (5,8,2,1,3,3,'Galaxy XYZ',10,
TO_DATE('7-08-2018','DD-MM-YYYY'),'Telefono Movil',600.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Procesador de 1.9 GHz Octa-Core',5);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('memoria RAM 3 GB',5);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Pantalla Super AMOLED tactil capacitiva de 5.2 pulgadas',5);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Resolucion de 1920 x 1080 pixeles',5);

INSERT INTO TBL_ARTICULOS
VALUES (6,3,1,2,3,1,'Adata 9000',20,TO_DATE('15-07-2018','DD-MM-YYYY'),'Memoria Micro SD',600.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Velocidades de transferencia de hasta 98 MB/s',6);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('32 GB de espacio de almacenamiento',6);

INSERT INTO TBL_ARTICULOS
VALUES (7,9,2,1,3,3,'Sx-8000',12,TO_DATE('01-07-2018','DD-MM-YYYY'),'Telefono movil',600.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('3 GB de RAM',7);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Amacenamiento de 32 GB',7);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Ranura MicroSD (hasta 256 GB)',7);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Dimensiones 149,3x70,2x8,2 mm',7);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Bateria de 3.000 mAh',7);

INSERT INTO TBL_ARTICULOS
VALUES (8,2,1,5,4,2,'La Palette Gold',
12,TO_DATE('24-12-2017','DD-MM-YYYY'),'Sombra de Ojos',10.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Consta de una seleccion de 10 tonos Shimmer',8);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Sutil a oro brillante y purpura',8);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Peso: 9g',8);

INSERT INTO TBL_ARTICULOS
VALUES (9,10,2,5,2,2,'Labial mate fijo',12,
TO_DATE('24-12-2017','DD-MM-YYYY'),'Labial',10.00);

INSERT INTO TBL_CARACTERISTICAS
VALUES ('Sella el mate con el color ink mas saturado',9);
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

---------------------------------------------Articulos X plataforma--------------------------------

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (1,1);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (2,1);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (3,2);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (1,4);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (5,2);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (3,3);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (4,3);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (4,1);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (9,4);

INSERT INTO TBL_ARTICULOS_X_PLATAFORMA
VALUES (8,2);
--------------------------------------Idiomas-------------------------------------------------
INSERT INTO TBL_IDIOMAS
VALUES (1,'Esp. latino');

INSERT INTO TBL_IDIOMAS
VALUES (2,'Polaco');

INSERT INTO TBL_IDIOMAS
VALUES (3,'Ingles');

INSERT INTO TBL_IDIOMAS
VALUES (4,'Catalan');

INSERT INTO TBL_IDIOMAS
VALUES (5,'Aleman');

INSERT INTO TBL_IDIOMAS
VALUES (6,'Frances');

INSERT INTO TBL_IDIOMAS
VALUES (7,'Holandes');

INSERT INTO TBL_IDIOMAS
VALUES (8,'Flamenco');

---------------------------------Empresas de Envio----------------------------------------------

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (1,1,'Celeritas/SGEL',TO_DATE('15-09-2009','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (2,1,'Correos Express',TO_DATE('15-09-2009','DD-MM-YYYY'));
INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (3,1,'MRW',TO_DATE('21-11-2009','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (4,1,'SEUR',TO_DATE('07-09-2010','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (5,1,'City Spring',TO_DATE('11-08-2011','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (6,1,'An Post',TO_DATE('18-04-2008','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (7,1,'Aramex',TO_DATE('30-07-2007','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (8,1,'DHL Express International',TO_DATE('22-09-2008','DD-MM-YYYY'));

INSERT INTO TBL_EMPRESAS_DE_ENVIO
VALUES (9,1,'UPS',TO_DATE('02-01-2005','DD-MM-YYYY'));


----------------------------------------Telefonos----------------------------------------------
INSERT INTO TBL_TELEFONOS
VALUES (1,'+31 880 183 300','Asistencia solo desde fuera de Belgica',1);

INSERT INTO TBL_TELEFONOS
VALUES (2,'+44 845 266 8778','Gratis unicamente en Polonia',3);

INSERT INTO TBL_TELEFONOS
VALUES (3,'+33 969 391 391','Asistencia en ingles y holandes',3);

INSERT INTO TBL_TELEFONOS
VALUES (4,'+48 438 220 689','Gratis desde Luxemburgo',5);

INSERT INTO TBL_TELEFONOS
VALUES (5, '+34 902 122 424','Gratis desde Espania',4);

INSERT INTO TBL_TELEFONOS
VALUES (6,'+34 902 122 424','asistencia fuera de Espania',4);

INSERT INTO TBL_TELEFONOS
VALUES (7,'+31 880 183 300','Solo pedidos en Portugal',6);

INSERT INTO TBL_TELEFONOS
VALUES (8,'+44 844 824 0505','Asistencia de lunes a sabado',7);

INSERT INTO TBL_TELEFONOS
VALUES (9,'+44 844 556 0560','Linea en Catalan e Ingles',7);

INSERT INTO TBL_TELEFONOS
VALUES (10,'800 262 966',null,8);

INSERT INTO TBL_TELEFONOS
VALUES (11,'+48 409 420 600',null,9);

---------------------------------DEPARTAMENTOS------------------------------------------

INSERT INTO TBL_DEPARTAMENTOS
VALUES (1,'Bebe y Juguetes');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (2,'Appstore para Android');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (3,'Moda');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (4,'Amazon dash bottom');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (5,'Electronica ');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (6,'Informatica y Oficina');

INSERT INTO TBL_DEPARTAMENTOS
VALUES (7,'Belleza y Salud');

----------------------------------------Categorias---------------------------------------------

INSERT INTO TBL_CATEGORIAS
VALUES (1,'Belleza');

INSERT INTO TBL_CATEGORIAS
VALUES (2,'Moviles y telefonia');

INSERT INTO TBL_CATEGORIAS
VALUES (3,'Maquillaje');

INSERT INTO TBL_CATEGORIAS
VALUES (4,'Zapatos');

INSERT INTO TBL_CATEGORIAS
VALUES (5,'Alamcenamiento');

INSERT INTO TBL_CATEGORIAS
VALUES (6,'Ropa');

INSERT INTO TBL_CATEGORIAS
VALUES (7,'Bebes');

INSERT INTO TBL_CATEGORIAS
VALUES (8,'Portatiles');

-----------------------------------Categorias X Departamento------------------------------
INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (1,7);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (3,7);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (6,3);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (4,3);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (5,5);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (5,6);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (2,5);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (8,6);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (7,3);

INSERT INTO CATEGORIAS_X_DEPARTAMENTOS
VALUES (7,1);

------------------------------- Departamentos X Articulos----------------------------------------
INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (1,3);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (2,3);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (3,7);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (5,5);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (6,5);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (6,6);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (4,7);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (8,7);

INSERT INTO DEPARTAMENTOS_X_ARTICULOS
VALUES (9,7);

---------------------------------Cantidad de estrellas ---------------------------------------------
INSERT INTO TBL_CANTIDAD_DE_ESTRELLAS
VALUES (1,1);

INSERT INTO TBL_CANTIDAD_DE_ESTRELLAS
VALUES (2,2);

INSERT INTO TBL_CANTIDAD_DE_ESTRELLAS
VALUES (3,3);

INSERT INTO TBL_CANTIDAD_DE_ESTRELLAS
VALUES (4,4);

INSERT INTO TBL_CANTIDAD_DE_ESTRELLAS
VALUES (5,5);

-----------------------------Contenido de Texto-------------------------------------
INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (1,2,2,1,TO_DATE('12-04-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (2,4,3,2,TO_DATE('08-05-2017','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (3,2,7,3,TO_DATE('08-06-2108','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (4,8,6,2,TO_DATE('11-07-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (5,9,9,1,TO_DATE('23-09-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (6,5,9,3,TO_DATE('23-02-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (7,2,2,1,TO_DATE('24-06-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (8,1,6,4,TO_DATE('10-03-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (9,3,3,3,TO_DATE('04-05-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (10,2,7,3,TO_DATE('08-06-2108','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (11,8,6,2,TO_DATE('11-07-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (12,9,9,1,TO_DATE('23-09-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (13,5,9,3,TO_DATE('23-02-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (14,9,9,1,TO_DATE('23-09-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (15,5,9,3,TO_DATE('23-02-2018','DD-MM-YYYY'));

INSERT INTO TBL_CONTENIDOS_DE_TEXTO
VALUES (16,1,6,4,TO_DATE('10-03-2018','DD-MM-YYYY'));

---------------------------------------Opiniones-----------------------------------------------
INSERT INTO TBL_OPINIONES
VALUES (1,1,2,'El color de los zapatos se diferencia al mostrado en la pagina','Color Diferente');

INSERT INTO TBL_OPINIONES
VALUES (2,3,5,'Muy buen producto  ','Excelente ');

INSERT INTO TBL_OPINIONES
VALUES (3,2,3,'La plancha tiene problemas al indicar de temperatura','Temperatura');

----------------------------------------Comentarios---------------------------------------------
INSERT INTO TBL_COMENTARIOS
VALUES (1,4,1,NULL,'El color si se parece');

INSERT INTO TBL_COMENTARIOS
VALUES (2,5,2,NULL,'Si ademas esta super barato');

INSERT INTO TBL_COMENTARIOS
VALUES (3,6,2,2,'This phone is perfect.');

INSERT INTO TBL_COMENTARIOS
VALUES (4,7,3,NULL,'Si pero aun asi funciona');

----------------------------------Preguntas-----------------------------------------------------
INSERT INTO TBL_PREGUNTAS
VALUES (1,8,NULL,'Tienen memorias usb de 32Gb');

INSERT INTO TBL_PREGUNTAS
VALUES (2,16,1,'Cuanto tarda el envio hacia espania sevilla');


---------------------------------Reportes------------------------------------------------------
INSERT INTO TBL_REPORTES
VALUES (9,'La imagen no corresponde con el producto');

INSERT INTO TBL_REPORTES
VALUES (13,'No aparece el precio');

INSERT INTO TBL_REPORTES
VALUES (14,'Los productos llegan vencidos');

---------------------------------Respuestas-----------------------------------------------------
INSERT INTO TBL_RESPUESTAS
VALUES (1,10,1,'Si hay disponibles');

INSERT INTO TBL_RESPUESTAS
VALUES (2,11,2,'solo tres dias dado hay un store de entregas en la quinta avenida calle Cervantes');

INSERT INTO TBL_RESPUESTAS
VALUES (3,12,2,'Podria especificar la marca para mayor informacion');

----------------------------------------------------------------------------------

------------------------------ Servicios Prime-----------------------------------------------

INSERT INTO TBL_SERVICIOS_PRIME
VALUES (7,1,'Amazon Prime Video');

INSERT INTO TBL_SERVICIOS_PRIME
VALUES (9,1,'Envio Prioritario');

INSERT INTO TBL_SERVICIOS_PRIME
VALUES (4,1,'Amazon Music unlimited');
COMMIT;

