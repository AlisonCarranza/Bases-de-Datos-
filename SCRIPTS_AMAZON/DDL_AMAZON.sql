-- Generated by Oracle SQL Developer Data Modeler 18.1.0.082.1041
--   at:        2018-08-03 23:37:59 CST
--   site:      Oracle Database 11g
--   type:      Oracle Database 11g



CREATE TABLE articulos_de_listas (
    codigo_articulo   INTEGER NOT NULL,
    codigo_lista      INTEGER NOT NULL
);

ALTER TABLE articulos_de_listas ADD CONSTRAINT articulos_de_listas_pk PRIMARY KEY ( codigo_articulo,
                                                                                    codigo_lista );

CREATE TABLE categorias_x_departamentos (
    codigo_categoria   INTEGER NOT NULL,
    codigo_departamento   INTEGER NOT NULL
);

ALTER TABLE categorias_x_departamentos ADD CONSTRAINT categorias_x_departamentos_pk PRIMARY KEY ( codigo_categoria,
                                                                                                  codigo_departamento );

CREATE TABLE condiciones_x_articulo (
    codigo_condicion   INTEGER NOT NULL,
    codigo_articulo    INTEGER NOT NULL
);

ALTER TABLE condiciones_x_articulo ADD CONSTRAINT condiciones_x_articulo_pk PRIMARY KEY ( codigo_condicion,
                                                                                          codigo_articulo );

CREATE TABLE departamentos_x_articulos (
    codigo_articulo       INTEGER NOT NULL,
    codigo_departamento   INTEGER NOT NULL
);

ALTER TABLE departamentos_x_articulos ADD CONSTRAINT departamentos_x_articulos_pk PRIMARY KEY ( codigo_articulo,
                                                                                                codigo_departamento );

CREATE TABLE tbl_agrupaciones (
    codigo_agrupacion   INTEGER NOT NULL,
    descripcion         VARCHAR2(200)
);

ALTER TABLE tbl_agrupaciones ADD CONSTRAINT tbl_agrupaciones_pk PRIMARY KEY ( codigo_agrupacion );

CREATE TABLE tbl_articulos (
    codigo_articulo          INTEGER NOT NULL,
    codigo_usuario_publico   INTEGER NOT NULL,
    codigo_tipo_envio        INTEGER NOT NULL,
    codigo_marca             INTEGER,
    region_de_venta          INTEGER NOT NULL,
    codigo_agrupacion        INTEGER NOT NULL,
    nombre_articulo          VARCHAR2(200),
    cantidad                 INTEGER,
    fecha_de_publicacion     DATE,
    descripcion              VARCHAR2(300),
    precio                   NUMBER
);

ALTER TABLE tbl_articulos ADD CONSTRAINT tbl_articulos_pk PRIMARY KEY ( codigo_articulo );

CREATE TABLE tbl_articulos_de_carritos (
    codigo_articulo         INTEGER NOT NULL,
    codigo_usuario          INTEGER NOT NULL,
    fecha_agrego            DATE,
    cantidad_del_articulo   INTEGER
);


ALTER TABLE tbl_articulos_de_carritos ADD CONSTRAINT tbl_articulos_x_carritos_pk PRIMARY KEY ( codigo_articulo ,codigo_usuario );

CREATE TABLE tbl_articulos_x_plataforma (
    codigo_articulo     INTEGER NOT NULL,
    codigo_plataforma   INTEGER NOT NULL
);

ALTER TABLE tbl_articulos_x_plataforma ADD CONSTRAINT tbl_articulos_x_plataforma_pk PRIMARY KEY ( codigo_articulo,
                                                                                                  codigo_plataforma );

CREATE TABLE tbl_cantidad_de_estrellas (
    codigo_cantidad         INTEGER NOT NULL,
    cantidad_de_estrellas   INTEGER
);

ALTER TABLE tbl_cantidad_de_estrellas ADD CONSTRAINT tbl_cantidad_de_estrellas_pk PRIMARY KEY ( codigo_cantidad );

CREATE TABLE tbl_caracteristicas (
    caracteristica    VARCHAR2(500),
    codigo_articulo   INTEGER NOT NULL
);

CREATE TABLE tbl_categorias (
    codigo_categoria      INTEGER NOT NULL,
    descripcion           VARCHAR2(100)
);

ALTER TABLE tbl_categorias ADD CONSTRAINT tbl_categorias_pk PRIMARY KEY ( codigo_categoria );

CREATE TABLE tbl_comentarios (
    codigo_comentario         INTEGER NOT NULL,
    codigo_contenido          INTEGER NOT NULL,
    codigo_opinion            INTEGER NOT NULL,
    codigo_comentario_padre   INTEGER,
    contenido                 VARCHAR2(1000) NOT NULL
);

CREATE UNIQUE INDEX tbl_comentarios__idx ON
    tbl_comentarios (
        codigo_contenido
    ASC );

ALTER TABLE tbl_comentarios ADD CONSTRAINT tbl_comentarios_pk PRIMARY KEY ( codigo_comentario );

CREATE TABLE tbl_condiciones_de_articulos (
    codigo_condicion   INTEGER NOT NULL,
    condicion          BLOB
);

ALTER TABLE tbl_condiciones_de_articulos ADD CONSTRAINT tbl_condiciones_pk PRIMARY KEY ( codigo_condicion );

CREATE TABLE tbl_contenidos_de_texto (
    codigo_contenido    INTEGER NOT NULL,
    codigo_usuario      INTEGER NOT NULL,
    codigo_articulo     INTEGER,
    codigo_ubicacion    INTEGER,
    fecha_publicacion   DATE
);

ALTER TABLE tbl_contenidos_de_texto ADD CONSTRAINT tbl_contenidos_de_texto_pk PRIMARY KEY ( codigo_contenido );

CREATE TABLE tbl_departamentos (
    codigo_departamento   INTEGER NOT NULL,
    DESCRIPCION           VARCHAR2(100)
);

ALTER TABLE tbl_departamentos ADD CONSTRAINT tbl_departamentos_pk PRIMARY KEY ( codigo_departamento );

CREATE TABLE tbl_descuentos (
    codigo_descuento   INTEGER NOT NULL,
    descripcion        VARCHAR2(100)
);

ALTER TABLE tbl_descuentos ADD CONSTRAINT tbl_descuentos_pk PRIMARY KEY ( codigo_descuento );

CREATE TABLE tbl_destinos_de_tajetas (
    codigo_usuario   INTEGER NOT NULL,
    codigo_tarjeta   INTEGER NOT NULL
);

CREATE UNIQUE INDEX tbl_destinos_de_tajetas__idx ON
    tbl_destinos_de_tajetas (
        codigo_tarjeta
    ASC );

ALTER TABLE tbl_destinos_de_tajetas ADD CONSTRAINT tbl_destinos_de_tajetas_pk PRIMARY KEY ( codigo_usuario,
                                                                                            codigo_tarjeta );

CREATE TABLE tbl_empresas_de_envio (
    codigo_empresa_envio    INTEGER NOT NULL,
    lugar_de_trabajo        INTEGER NOT NULL,
    nombre_empresa_envio    VARCHAR2(100),
    fecha_de_contratacion   DATE
);

ALTER TABLE tbl_empresas_de_envio ADD CONSTRAINT tbl_empresas_de_envio_pk PRIMARY KEY ( codigo_empresa_envio );

CREATE TABLE tbl_generos (
    codigo_genero   INTEGER NOT NULL,
    nombre_genero   VARCHAR2(20)
);

ALTER TABLE tbl_generos ADD CONSTRAINT tbl_generos_pk PRIMARY KEY ( codigo_genero );

CREATE TABLE tbl_historial_de_busquedas (
    codigo_historial    INTEGER NOT NULL,
    fecha_de_busqueda   DATE
);

ALTER TABLE tbl_historial_de_busquedas ADD CONSTRAINT tbl_historial_de_busquedas_pk PRIMARY KEY ( codigo_historial );

CREATE TABLE tbl_historial_de_compras (
    codigo_historial   INTEGER NOT NULL,
    fecha_de_compra    DATE
);

ALTER TABLE tbl_historial_de_compras ADD CONSTRAINT tbl_historial_de_compras_pk PRIMARY KEY ( codigo_historial );

CREATE TABLE tbl_historial_de_ventas (
    codigo_historial   INTEGER NOT NULL,
    fecha_de_venta     DATE
);

ALTER TABLE tbl_historial_de_ventas ADD CONSTRAINT tbl_historial_de_ventas_pk PRIMARY KEY ( codigo_historial );

CREATE TABLE tbl_historiales (
    codigo_historial   INTEGER NOT NULL,
    codigo_articulo    INTEGER NOT NULL,
    codigo_usuario     INTEGER NOT NULL
);

ALTER TABLE tbl_historiales ADD CONSTRAINT tbl_historiales_pk PRIMARY KEY ( codigo_historial );

CREATE TABLE tbl_imagenes_de_articulos (
    codigo_articulo   INTEGER NOT NULL,
    imagen            BLOB
);

CREATE TABLE tbl_idiomas (
    codigo_idioma   NUMERIC NOT NULL,
    nombre_idioma   VARCHAR2(50)
);

ALTER TABLE tbl_idiomas ADD CONSTRAINT tbl_idiomas_pk PRIMARY KEY ( codigo_idioma );

CREATE TABLE tbl_informacion_de_productos (
    codigo_articulo   INTEGER NOT NULL,
    atributo          VARCHAR2(100),
    valor             VARCHAR2(300)
);

CREATE TABLE tbl_listas (
    codigo_lista                INTEGER NOT NULL,
    usuario_creador             INTEGER NOT NULL,
    codigo_tipo                 INTEGER NOT NULL,
    codigo_tipo_de_privacidad   INTEGER NOT NULL,
    fecha_de_creacion           DATE,
    nombre_lista                VARCHAR2(300)
);

ALTER TABLE tbl_listas ADD CONSTRAINT tbl_listas_pk PRIMARY KEY ( codigo_lista );

CREATE TABLE tbl_listas_x_usuarios (
    codigo_usuario   INTEGER NOT NULL,
    codigo_lista     INTEGER NOT NULL
);

ALTER TABLE tbl_listas_x_usuarios ADD CONSTRAINT tbl_listas_x_usuarios_pk PRIMARY KEY ( codigo_usuario,
                                                                                        codigo_lista );

CREATE TABLE tbl_localizacion_de_productos (
    codigo_pedido          INTEGER NOT NULL,
    codigo_ubicacion       INTEGER NOT NULL,
    codigo_empresa_envio   INTEGER NOT NULL,
    latitud                NUMBER,
    longitud               NUMBER
);

ALTER TABLE tbl_localizacion_de_productos ADD CONSTRAINT localizacion_de_productos_pk PRIMARY KEY ( codigo_pedido );

CREATE TABLE tbl_marcas (
    codigo_marca   INTEGER NOT NULL,
    nombre_marca   VARCHAR2(100)
);

ALTER TABLE tbl_marcas ADD CONSTRAINT tbl_marcas_pk PRIMARY KEY ( codigo_marca );

CREATE TABLE tbl_metodo_de_envio (
    codigo_metodo       INTEGER NOT NULL,
    descripcion         VARCHAR2(200),
    duracion_promedio   VARCHAR2(100)
);

ALTER TABLE tbl_metodo_de_envio ADD CONSTRAINT tbl_metodo_de_envio_pk PRIMARY KEY ( codigo_metodo );

CREATE TABLE tbl_metodo_pago (
    codigo_metodo   INTEGER NOT NULL,
    nombre_metodo   VARCHAR2(100)
);

ALTER TABLE tbl_metodo_pago ADD CONSTRAINT tbl_metodo_pago_pk PRIMARY KEY ( codigo_metodo );

CREATE TABLE tbl_metodos_pago_usuarios (
    codigo_usuario   INTEGER,
    codigo_metodo    INTEGER NOT NULL
);

CREATE TABLE tbl_ofertas (
    codigo_oferta        INTEGER NOT NULL,
    codigo_articulo      INTEGER NOT NULL,
    codigo_descuento     INTEGER NOT NULL,
    codigo_tipo_oferta   INTEGER NOT NULL,
    inicio_de_oferta     DATE,
    fin_de_oferta        DATE
);

ALTER TABLE tbl_ofertas ADD CONSTRAINT tbl_ofertas_pk PRIMARY KEY ( codigo_oferta );

CREATE TABLE tbl_opciones_1 (
    codigo_subtema   VARCHAR2(100),
    codigo_tema      VARCHAR2(100) NOT NULL
);

CREATE TABLE tbl_opciones_2 (
    codigo_tema   VARCHAR2(100) NOT NULL,
    descripcion   VARCHAR2(100)
);

CREATE TABLE tbl_opiniones (
    codigo_opinion              INTEGER NOT NULL,
    codigo_contenido            INTEGER NOT NULL,
    codigo_cantidad_estrellas   INTEGER NOT NULL,
    contenido                   VARCHAR2(1000) NOT NULL,
    titulo                      VARCHAR2(100)
);

CREATE UNIQUE INDEX tbl_opiniones__idx ON
    tbl_opiniones (
        codigo_contenido
    ASC );

ALTER TABLE tbl_opiniones ADD CONSTRAINT tbl_opiniones_pk PRIMARY KEY ( codigo_opinion );

CREATE TABLE tbl_pedidos (
    codigo_pedido         INTEGER NOT NULL,
    codigo_usuario        INTEGER NOT NULL,
    codigo_articulo       INTEGER NOT NULL,
    codigo_metodo_envio   INTEGER NOT NULL,
    fecha_de_compra       DATE,
    cantidad              INTEGER
);

ALTER TABLE tbl_pedidos ADD CONSTRAINT tbl_pedidos_pk PRIMARY KEY ( codigo_pedido );

CREATE TABLE tbl_pedidos_cancelados (
    codigo_pedido          INTEGER NOT NULL,
    fecha_de_cancelacion   DATE
);

ALTER TABLE tbl_pedidos_cancelados ADD CONSTRAINT tbl_pedidos_cancelados_pk PRIMARY KEY ( codigo_pedido );

CREATE TABLE tbl_pedidos_en_curso (
    codigo_pedido       INTEGER NOT NULL,
    tiempo_de_entrega   DATE
);

ALTER TABLE tbl_pedidos_en_curso ADD CONSTRAINT tbl_pedidos_en_curso_pk PRIMARY KEY ( codigo_pedido );

CREATE TABLE tbl_pies_de_paginas (
    codigo_tema   VARCHAR2(100) NOT NULL
);

ALTER TABLE tbl_pies_de_paginas ADD CONSTRAINT tbl_pies_de_paginas_pk PRIMARY KEY ( codigo_tema );

CREATE TABLE tbl_plataformas_de_difusion (
    codigo_paltaforma   INTEGER NOT NULL,
    nombre_plataforma   VARCHAR2(100),
    fecha_inscripcion   DATE,
    icono_plataforma    BLOB
);

ALTER TABLE tbl_plataformas_de_difusion ADD CONSTRAINT tbl_plataformas_de_difusion_pk PRIMARY KEY ( codigo_paltaforma );

CREATE TABLE tbl_proveedores (
    codigo_proveedor   INTEGER NOT NULL,
    codigo_tipo        INTEGER NOT NULL,
    nombre_proveedor   VARCHAR2(100)
);

ALTER TABLE tbl_proveedores ADD CONSTRAINT tbl_proveedores_pk PRIMARY KEY ( codigo_proveedor );

CREATE TABLE tbl_preguntas (
    codigo_pregunta      INTEGER NOT NULL,
    codigo_contenido     INTEGER NOT NULL,
    tbl_pregunta_padre   INTEGER,
    contenido            VARCHAR2(1000)
);

CREATE UNIQUE INDEX tbl_preguntas__idx ON
    tbl_preguntas (
        codigo_contenido
    ASC );

ALTER TABLE tbl_preguntas ADD CONSTRAINT tbl_preguntas_pk PRIMARY KEY ( codigo_pregunta );

CREATE TABLE tbl_promociones (
    codigo_oferta    INTEGER NOT NULL,
    codigo_usuario   INTEGER NOT NULL
);

ALTER TABLE tbl_promociones ADD CONSTRAINT tbl_promociones_pk PRIMARY KEY ( codigo_oferta,
                                                                            codigo_usuario );

CREATE TABLE tbl_proveedores_x_articulos (
    codigo_articulo    INTEGER NOT NULL,
    codigo_proveedor   INTEGER NOT NULL
);

ALTER TABLE tbl_proveedores_x_articulos ADD CONSTRAINT tbl_proveedores_x_articulos_pk PRIMARY KEY ( codigo_proveedor,
                                                                                                    codigo_articulo );

CREATE TABLE tbl_reembolsos (
    codigo_pedido          INTEGER NOT NULL,
    codigo_empresa_envio   INTEGER NOT NULL,
    causa_de_reembolso     VARCHAR2(200),
    fecha_de_reembolso     DATE
);

ALTER TABLE tbl_reembolsos ADD CONSTRAINT tbl_reembolsos_pk PRIMARY KEY ( codigo_pedido );

CREATE TABLE tbl_reportes (
    codigo_contenido   INTEGER NOT NULL,
    contenido          VARCHAR2(1000)
);

ALTER TABLE tbl_reportes ADD CONSTRAINT tbl_reportes_pk PRIMARY KEY ( codigo_contenido );

CREATE TABLE tbl_respuestas (
    codigo_respuesta   INTEGER NOT NULL,
    codigo_contenido   INTEGER NOT NULL,
    codigo_pregunta    INTEGER NOT NULL,
    contenido          VARCHAR2(1000)
);

CREATE UNIQUE INDEX tbl_respuestas__idx ON
    tbl_respuestas (
        codigo_contenido
    ASC );

ALTER TABLE tbl_respuestas ADD CONSTRAINT tbl_respuestas_pk PRIMARY KEY ( codigo_respuesta );

CREATE TABLE tbl_servicios_de_ayudas (
    codigo_servicio     INTEGER NOT NULL,
    codigo_usuario      INTEGER NOT NULL,
    icono_de_servicio   BLOB
);

ALTER TABLE tbl_servicios_de_ayudas ADD CONSTRAINT tbl_servicios_de_ayudas_pk PRIMARY KEY ( codigo_servicio );

CREATE TABLE tbl_servicios_prime (
    codigo_usuario    INTEGER NOT NULL,
    codigo_servicio   INTEGER,
    nombre_servicio   VARCHAR2(100)
);

CREATE TABLE tbl_subtemas_de_ayuda (
    codigo_subtema   INTEGER NOT NULL,
    codigo_tema      INTEGER NOT NULL,
    contenido        VARCHAR2(200)
);

ALTER TABLE tbl_subtemas_de_ayuda ADD CONSTRAINT tbl_subtemas_de_ayuda_pk PRIMARY KEY ( codigo_subtema );

CREATE TABLE tbl_subtemas_de_servicios (
    codigo_subtema    INTEGER NOT NULL,
    codigo_servicio   INTEGER NOT NULL,
    descripcion       VARCHAR2(100)
);

ALTER TABLE tbl_subtemas_de_servicios ADD CONSTRAINT tbl_subtemas_pk PRIMARY KEY ( codigo_servicio,
                                                                                   codigo_subtema );

CREATE TABLE tbl_suscripciones_x_articulos (
    codigo_usuario    INTEGER NOT NULL,
    codigo_articulo   INTEGER NOT NULL
);

ALTER TABLE tbl_suscripciones_x_articulos ADD CONSTRAINT suscripciones_x_articulos_pk PRIMARY KEY ( codigo_usuario,
                                                                                                    codigo_articulo );

CREATE TABLE tbl_tarjetas_de_regalo (
    codigo_tarjeta         INTEGER NOT NULL,
    usuario_solicito       INTEGER NOT NULL,
    usuario_destinatario   INTEGER NOT NULL,
    fecha_creacion         DATE,
    fecha_vencimiento      DATE
);

ALTER TABLE tbl_tarjetas_de_regalo ADD CONSTRAINT tbl_tarjetas_de_regalo_pk PRIMARY KEY ( codigo_tarjeta );

CREATE TABLE tbl_temas_de_ayuda (
    codigo_tema      INTEGER NOT NULL,
    codigo_usuario   INTEGER NOT NULL,
    descripcion      VARCHAR2(100)
);

CREATE TABLE tbl_telefonos (
    codigo_telefono        INTEGER NOT NULL,
    telefono               VARCHAR2(30),
    descripcion            VARCHAR2(150),
    codigo_empresa   INTEGER NOT NULL
);

ALTER TABLE tbl_telefonos ADD CONSTRAINT tbl_telefonos_pk PRIMARY KEY ( codigo_telefono );

ALTER TABLE tbl_temas_de_ayuda ADD CONSTRAINT tbl_temas_de_ayuda_pk PRIMARY KEY ( codigo_tema );

CREATE TABLE tbl_tipo_de_privacidad (
    codigo_tipo   INTEGER NOT NULL,
    tipo          VARCHAR2(100)
);

ALTER TABLE tbl_tipo_de_privacidad ADD CONSTRAINT tbl_tipo_de_privacidad_pk PRIMARY KEY ( codigo_tipo );

CREATE TABLE tbl_tipo_envios (
    codigo_tipo   INTEGER NOT NULL,
    descripcion   VARCHAR2(100)
);

ALTER TABLE tbl_tipo_envios ADD CONSTRAINT tbl_tipo_envios_pk PRIMARY KEY ( codigo_tipo );

CREATE TABLE tbl_tipo_ubicacion (
    codigo_tipo      INTEGER NOT NULL,
    tipo_ubicacion   VARCHAR2(100)
);

ALTER TABLE tbl_tipo_ubicacion ADD CONSTRAINT tbl_tipo_ubicacion_pk PRIMARY KEY ( codigo_tipo );

CREATE TABLE tbl_tipos_de_listas (
    codigo_tipo   INTEGER NOT NULL,
    nombre_tipo   VARCHAR2(100)
);

ALTER TABLE tbl_tipos_de_listas ADD CONSTRAINT tbl_tipos_de_listas_pk PRIMARY KEY ( codigo_tipo );

CREATE TABLE tbl_tipos_de_ofertas (
    codigo_tipo_oferta   INTEGER NOT NULL,
    nombre_tipo          VARCHAR2(100)
);

ALTER TABLE tbl_tipos_de_ofertas ADD CONSTRAINT tbl_tipos_de_ofertas_pk PRIMARY KEY ( codigo_tipo_oferta );

CREATE TABLE tbl_tipos_de_proveedores (
    codigo_tipo   INTEGER NOT NULL,
    nombre_tipo   VARCHAR2(100)
);

ALTER TABLE tbl_tipos_de_proveedores ADD CONSTRAINT tbl_tipos_de_proveedores_pk PRIMARY KEY ( codigo_tipo );

CREATE TABLE tbl_ubicacion (
    codigo_ubicacion    INTEGER NOT NULL,
    codigo_tipo         INTEGER NOT NULL,
    codigo_pais_padre   INTEGER,
    nombre_ubicacion    VARCHAR2(150),
    codigo_postal       NUMBER,
    latitud             NUMBER,
    longitud            NUMBER
);

ALTER TABLE tbl_ubicacion ADD CONSTRAINT tbl_pais_pk PRIMARY KEY ( codigo_ubicacion );

CREATE TABLE tbl_usuarios (
    codigo_usuario      INTEGER NOT NULL,
    codigo_pais         INTEGER NOT NULL,
    codigo_genero       INTEGER NOT NULL,
    correo              VARCHAR2(100),
    contrasena          VARCHAR2(50),
    nombre_usuario      VARCHAR2(50),
    telefono_movil      VARCHAR2(50),
    fecha_inscripcion   DATE,
    fecha_nacimiento    DATE
);

ALTER TABLE tbl_usuarios ADD CONSTRAINT tbl_usuarios_pk PRIMARY KEY ( codigo_usuario );

CREATE TABLE tbl_usuarios_prime (
    codigo_usuario   INTEGER NOT NULL
);

ALTER TABLE tbl_usuarios_prime ADD CONSTRAINT tbl_usuarios_prime_pk PRIMARY KEY ( codigo_usuario );

ALTER TABLE tbl_telefonos
    ADD CONSTRAINT tbl_empresas_de_envio_fk FOREIGN KEY ( codigo_empresa )
        REFERENCES tbl_empresas_de_envio ( codigo_empresa_envio );

ALTER TABLE departamentos_x_articulos
    ADD CONSTRAINT articulos_fk FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE departamentos_x_articulos
    ADD CONSTRAINT departamentos_fk FOREIGN KEY ( codigo_departamento )
        REFERENCES tbl_departamentos ( codigo_departamento );

ALTER TABLE tbl_metodos_pago_usuarios
    ADD CONSTRAINT metodo_pago_fk FOREIGN KEY ( codigo_metodo )
        REFERENCES tbl_metodo_pago ( codigo_metodo );

ALTER TABLE tbl_articulos
    ADD CONSTRAINT tbl_agrupaciones_fk FOREIGN KEY ( codigo_agrupacion )
        REFERENCES tbl_agrupaciones ( codigo_agrupacion );

ALTER TABLE tbl_pedidos
    ADD CONSTRAINT tbl_articulos_fk FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_suscripciones_x_articulos
    ADD CONSTRAINT tbl_articulos_fkv1 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_proveedores_x_articulos
    ADD CONSTRAINT tbl_articulos_fkv10 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_contenidos_de_texto
    ADD CONSTRAINT tbl_articulos_fkv11 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_articulos_de_carritos
    ADD CONSTRAINT tbl_articulos_fkv12 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_historiales
    ADD CONSTRAINT tbl_articulos_fkv2 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_informacion_de_productos
    ADD CONSTRAINT tbl_articulos_fkv3 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_caracteristicas
    ADD CONSTRAINT tbl_articulos_fkv4 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_imagenes_de_articulos
    ADD CONSTRAINT tbl_articulos_fkv5 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE condiciones_x_articulo
    ADD CONSTRAINT tbl_articulos_fkv6 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE articulos_de_listas
    ADD CONSTRAINT tbl_articulos_fkv7 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_ofertas
    ADD CONSTRAINT tbl_articulos_fkv8 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_articulos_x_plataforma
    ADD CONSTRAINT tbl_articulos_fkv9 FOREIGN KEY ( codigo_articulo )
        REFERENCES tbl_articulos ( codigo_articulo );

ALTER TABLE tbl_opiniones
    ADD CONSTRAINT tbl_cantidad_de_estrellas_fk FOREIGN KEY ( codigo_cantidad_estrellas )
        REFERENCES tbl_cantidad_de_estrellas ( codigo_cantidad );

ALTER TABLE categorias_x_departamentos
    ADD CONSTRAINT tbl_categorias_fk FOREIGN KEY ( codigo_categoria )
        REFERENCES tbl_categorias ( codigo_categoria );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_comentarios_fk FOREIGN KEY ( codigo_comentario_padre )
        REFERENCES tbl_comentarios ( codigo_comentario );

ALTER TABLE condiciones_x_articulo
    ADD CONSTRAINT tbl_condiciones_fk FOREIGN KEY ( codigo_condicion )
        REFERENCES tbl_condiciones_de_articulos ( codigo_condicion );

ALTER TABLE tbl_reportes
    ADD CONSTRAINT tbl_contenidos_de_texto_fk FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenidos_de_texto ( codigo_contenido );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_contenidos_de_texto_fkv1 FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenidos_de_texto ( codigo_contenido );

ALTER TABLE tbl_respuestas
    ADD CONSTRAINT tbl_contenidos_de_texto_fkv2 FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenidos_de_texto ( codigo_contenido );

ALTER TABLE tbl_preguntas
    ADD CONSTRAINT tbl_contenidos_de_texto_fkv3 FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenidos_de_texto ( codigo_contenido );

ALTER TABLE tbl_opiniones
    ADD CONSTRAINT tbl_contenidos_de_texto_fkv4 FOREIGN KEY ( codigo_contenido )
        REFERENCES tbl_contenidos_de_texto ( codigo_contenido );

ALTER TABLE categorias_x_departamentos
    ADD CONSTRAINT tbl_departamentos_fk FOREIGN KEY ( codigo_departamento )
        REFERENCES tbl_departamentos ( codigo_departamento );

ALTER TABLE tbl_ofertas
    ADD CONSTRAINT tbl_descuentos_fk FOREIGN KEY ( codigo_descuento )
        REFERENCES tbl_descuentos ( codigo_descuento );

ALTER TABLE tbl_localizacion_de_productos
    ADD CONSTRAINT tbl_empresas_de_envio_fkv2 FOREIGN KEY ( codigo_empresa_envio )
        REFERENCES tbl_empresas_de_envio ( codigo_empresa_envio );

ALTER TABLE tbl_reembolsos
    ADD CONSTRAINT tbl_empresas_de_envio_fkv1 FOREIGN KEY ( codigo_empresa_envio )
        REFERENCES tbl_empresas_de_envio ( codigo_empresa_envio );

ALTER TABLE tbl_usuarios
    ADD CONSTRAINT tbl_generos_fk FOREIGN KEY ( codigo_genero )
        REFERENCES tbl_generos ( codigo_genero );

ALTER TABLE tbl_historial_de_compras
    ADD CONSTRAINT tbl_historiales_fk FOREIGN KEY ( codigo_historial )
        REFERENCES tbl_historiales ( codigo_historial );

ALTER TABLE tbl_historial_de_ventas
    ADD CONSTRAINT tbl_historiales_fkv1 FOREIGN KEY ( codigo_historial )
        REFERENCES tbl_historiales ( codigo_historial );

ALTER TABLE tbl_historial_de_busquedas
    ADD CONSTRAINT tbl_historiales_fkv2 FOREIGN KEY ( codigo_historial )
        REFERENCES tbl_historiales ( codigo_historial );

ALTER TABLE articulos_de_listas
    ADD CONSTRAINT tbl_listas_fk FOREIGN KEY ( codigo_lista )
        REFERENCES tbl_listas ( codigo_lista );

ALTER TABLE tbl_listas_x_usuarios
    ADD CONSTRAINT tbl_listas_fkv1 FOREIGN KEY ( codigo_lista )
        REFERENCES tbl_listas ( codigo_lista );

ALTER TABLE tbl_articulos
    ADD CONSTRAINT tbl_marcas_fk FOREIGN KEY ( codigo_marca )
        REFERENCES tbl_marcas ( codigo_marca );

ALTER TABLE tbl_pedidos
    ADD CONSTRAINT tbl_metodo_de_envio_fk FOREIGN KEY ( codigo_metodo_envio )
        REFERENCES tbl_metodo_de_envio ( codigo_metodo );

ALTER TABLE tbl_promociones
    ADD CONSTRAINT tbl_ofertas_fk FOREIGN KEY ( codigo_oferta )
        REFERENCES tbl_ofertas ( codigo_oferta );

ALTER TABLE tbl_comentarios
    ADD CONSTRAINT tbl_opiniones_fk FOREIGN KEY ( codigo_opinion )
        REFERENCES tbl_opiniones ( codigo_opinion );

ALTER TABLE tbl_usuarios
    ADD CONSTRAINT tbl_pais_fk FOREIGN KEY ( codigo_pais )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_localizacion_de_productos
    ADD CONSTRAINT tbl_pedidos_en_curso_fk FOREIGN KEY ( codigo_pedido )
        REFERENCES tbl_pedidos_en_curso ( codigo_pedido );

ALTER TABLE tbl_pedidos_cancelados
    ADD CONSTRAINT tbl_pedidos_fk FOREIGN KEY ( codigo_pedido )
        REFERENCES tbl_pedidos ( codigo_pedido );

ALTER TABLE tbl_pedidos_en_curso
    ADD CONSTRAINT tbl_pedidos_fkv1 FOREIGN KEY ( codigo_pedido )
        REFERENCES tbl_pedidos ( codigo_pedido );

ALTER TABLE tbl_opciones_1
    ADD CONSTRAINT tbl_pies_de_paginas_fk FOREIGN KEY ( codigo_tema )
        REFERENCES tbl_pies_de_paginas ( codigo_tema );

ALTER TABLE tbl_opciones_2
    ADD CONSTRAINT tbl_pies_de_paginas_fkv1 FOREIGN KEY ( codigo_tema )
        REFERENCES tbl_pies_de_paginas ( codigo_tema );

ALTER TABLE tbl_articulos_x_plataforma
    ADD CONSTRAINT tbl_plataformas_de_difusion_fk FOREIGN KEY ( codigo_plataforma )
        REFERENCES tbl_plataformas_de_difusion ( codigo_paltaforma );

ALTER TABLE tbl_proveedores_x_articulos
    ADD CONSTRAINT tbl_proveedores_fk FOREIGN KEY ( codigo_proveedor )
        REFERENCES tbl_proveedores ( codigo_proveedor );

ALTER TABLE tbl_respuestas
    ADD CONSTRAINT tbl_preguntas_fk FOREIGN KEY ( codigo_pregunta )
        REFERENCES tbl_preguntas ( codigo_pregunta );

ALTER TABLE tbl_preguntas
    ADD CONSTRAINT tbl_preguntas_fkv1 FOREIGN KEY ( tbl_pregunta_padre )
        REFERENCES tbl_preguntas ( codigo_pregunta );

ALTER TABLE tbl_reembolsos
    ADD CONSTRAINT tbl_reembolsos_tbl_pedidos_fk FOREIGN KEY ( codigo_pedido )
        REFERENCES tbl_pedidos ( codigo_pedido );

ALTER TABLE tbl_subtemas_de_servicios
    ADD CONSTRAINT tbl_servicios_de_ayudas_fk FOREIGN KEY ( codigo_servicio )
        REFERENCES tbl_servicios_de_ayudas ( codigo_servicio );

ALTER TABLE tbl_subtemas_de_ayuda
    ADD CONSTRAINT tbl_temas_de_ayuda_fk FOREIGN KEY ( codigo_tema )
        REFERENCES tbl_temas_de_ayuda ( codigo_tema );

ALTER TABLE tbl_listas
    ADD CONSTRAINT tbl_tipo_de_privacidad_fk FOREIGN KEY ( codigo_tipo_de_privacidad )
        REFERENCES tbl_tipo_de_privacidad ( codigo_tipo );

ALTER TABLE tbl_articulos
    ADD CONSTRAINT tbl_tipo_envios_fk FOREIGN KEY ( codigo_tipo_envio )
        REFERENCES tbl_tipo_envios ( codigo_tipo );

ALTER TABLE tbl_ubicacion
    ADD CONSTRAINT tbl_tipo_ubicacion_fk FOREIGN KEY ( codigo_tipo )
        REFERENCES tbl_tipo_ubicacion ( codigo_tipo );

ALTER TABLE tbl_listas
    ADD CONSTRAINT tbl_tipos_de_listas_fk FOREIGN KEY ( codigo_tipo )
        REFERENCES tbl_tipos_de_listas ( codigo_tipo );

ALTER TABLE tbl_ofertas
    ADD CONSTRAINT tbl_tipos_de_ofertas_fk FOREIGN KEY ( codigo_tipo_oferta )
        REFERENCES tbl_tipos_de_ofertas ( codigo_tipo_oferta );

ALTER TABLE tbl_proveedores
    ADD CONSTRAINT tbl_tipos_de_proveedores_fk FOREIGN KEY ( codigo_tipo )
        REFERENCES tbl_tipos_de_proveedores ( codigo_tipo );

ALTER TABLE tbl_ubicacion
    ADD CONSTRAINT tbl_ubicacion_fk FOREIGN KEY ( codigo_pais_padre )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_localizacion_de_productos
    ADD CONSTRAINT tbl_ubicacion_fkv1 FOREIGN KEY ( codigo_ubicacion )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_empresas_de_envio
    ADD CONSTRAINT tbl_ubicacion_fkv2 FOREIGN KEY ( lugar_de_trabajo )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_articulos
    ADD CONSTRAINT tbl_ubicacion_fkv3 FOREIGN KEY ( region_de_venta )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_contenidos_de_texto
    ADD CONSTRAINT tbl_ubicacion_fkv4 FOREIGN KEY ( codigo_ubicacion )
        REFERENCES tbl_ubicacion ( codigo_ubicacion );

ALTER TABLE tbl_pedidos
    ADD CONSTRAINT tbl_usuarios_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_servicios_de_ayudas
    ADD CONSTRAINT tbl_usuarios_fkv1 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_contenidos_de_texto
    ADD CONSTRAINT tbl_usuarios_fkv10 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_promociones
    ADD CONSTRAINT tbl_usuarios_fkv11 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_articulos_de_carritos
    ADD CONSTRAINT tbl_usuarios_fkv12 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_historiales
    ADD CONSTRAINT tbl_usuarios_fkv2 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_tarjetas_de_regalo
    ADD CONSTRAINT tbl_usuarios_fkv2v1 FOREIGN KEY ( usuario_destinatario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_tarjetas_de_regalo
    ADD CONSTRAINT tbl_usuarios_fkv3 FOREIGN KEY ( usuario_solicito )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_usuarios_prime
    ADD CONSTRAINT tbl_usuarios_fkv4 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_temas_de_ayuda
    ADD CONSTRAINT tbl_usuarios_fkv5 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_suscripciones_x_articulos
    ADD CONSTRAINT tbl_usuarios_fkv6 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_listas
    ADD CONSTRAINT tbl_usuarios_fkv7 FOREIGN KEY ( usuario_creador )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_listas_x_usuarios
    ADD CONSTRAINT tbl_usuarios_fkv8 FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_articulos
    ADD CONSTRAINT tbl_usuarios_fkv9 FOREIGN KEY ( codigo_usuario_publico )
        REFERENCES tbl_usuarios ( codigo_usuario );

ALTER TABLE tbl_servicios_prime
    ADD CONSTRAINT tbl_usuarios_prime_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios_prime ( codigo_usuario );

ALTER TABLE tbl_metodos_pago_usuarios
    ADD CONSTRAINT usuarios_fk FOREIGN KEY ( codigo_usuario )
        REFERENCES tbl_usuarios ( codigo_usuario );



-- Oracle SQL Developer Data Modeler Summary Report: 
-- 
-- CREATE TABLE                            64
-- CREATE INDEX                             6
-- ALTER TABLE                            139
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   2
-- WARNINGS                                 0
 create sequence SQ_CODIGO_USUARIO
  start with 11
  increment by 1
  maxvalue 99999
  minvalue 11;
  
  create sequence SQ_CODIGO_ARTICULO
  start with 11
  increment by 1
  maxvalue 99999
  minvalue 11;

  create sequence SQ_CODIGO_PEDIDO
  start with 1
  increment by 1
  maxvalue 99999
  minvalue 0; 

  commit;