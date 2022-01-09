/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     9/1/2022 01:52:45                            */
/*==============================================================*/

--drop table CATEGORIA;
--drop table COMIDAS_TIPICAS;
--drop table DISTRACCION;
--drop table HOSPEDAJE;
--drop table PLAYAS;
--drop table PUBLICIDAD;
--drop table RESTAURANTES;
--drop table SITIOS_DE_INTERES;

/*==============================================================*/
/* Table: CATEGORIA                                             */
/*==============================================================*/
create table CATEGORIA (
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_CATEGORIA     VARCHAR(50)          not null,
   IMAGEN_CATEGORIA     VARCHAR(50)          not null,
   constraint PK_CATEGORIA primary key (ID_CATEGORIA)
);

/*==============================================================*/
/* Table: COMIDAS_TIPICAS                                       */
/*==============================================================*/
create table COMIDAS_TIPICAS (
   ID_COMIDA            VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_COMIDA        VARCHAR(150)         not null,
   DIRECCION_COMIDA     VARCHAR(200)         not null,
   DESCRIPCION_COMIDA   VARCHAR(2000)        not null,
   constraint PK_COMIDAS_TIPICAS primary key (ID_COMIDA)
);

/*==============================================================*/
/* Table: DISTRACCION                                           */
/*==============================================================*/
create table DISTRACCION (
   ID_DISTRACCION       VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_DISTRACCION   VARCHAR(150)         not null,
   DIRECCION_DISTRACCION VARCHAR(200)         not null,
   DESCRIPCION_DISTRACCION VARCHAR(2000)        not null,
   constraint PK_DISTRACCION primary key (ID_DISTRACCION)
);

/*==============================================================*/
/* Table: HOSPEDAJE                                             */
/*==============================================================*/
create table HOSPEDAJE (
   ID_HOSPEDAJE         VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_HOSPEDAJE     VARCHAR(150)         not null,
   DIRECCION_HOSPEDAJE  VARCHAR(200)         not null,
   DESCRIPTCION_HOSPEDAJE VARCHAR(2000)        not null
);

/*==============================================================*/
/* Table: PLAYAS                                                */
/*==============================================================*/
create table PLAYAS (
   ID_PLAYA             VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_PLAYA         VARCHAR(150)         not null,
   DIRECCION_PLAYA      VARCHAR(200)         not null,
   DESCRIPCION_PLAYA    VARCHAR(2000)        not null,
   constraint PK_PLAYAS primary key (ID_PLAYA)
);

/*==============================================================*/
/* Table: PUBLICIDAD                                            */
/*==============================================================*/
create table PUBLICIDAD (
   ID_PUBLICIDAD        VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_PUBLICIDAD    VARCHAR(150)         not null,
   DESCRIPCION_PUBLICIDAD VARCHAR(2000)        not null,
   constraint PK_PUBLICIDAD primary key (ID_PUBLICIDAD)
);

/*==============================================================*/
/* Table: RESTAURANTES                                          */
/*==============================================================*/
create table RESTAURANTES (
   ID_RESTAURANTE       VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_RESTAURANTE   VARCHAR(150)         not null,
   DIRECCION_RESTAURANTE VARCHAR(200)         not null,
   DESCRIPCION_RESTAURANTE VARCHAR(2000)        not null,
   constraint PK_RESTAURANTES primary key (ID_RESTAURANTE)
);

/*==============================================================*/
/* Table: SITIOS_DE_INTERES                                     */
/*==============================================================*/
create table SITIOS_DE_INTERES (
   ID_SITIO             VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_SITIO         VARCHAR(150)         not null,
   DIRECCION_SITIO      VARCHAR(200)         not null,
   DESCRIPCION_SITIO    VARCHAR(2000)        not null
);

alter table COMIDAS_TIPICAS
   add constraint FK_COMIDAS__RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table DISTRACCION
   add constraint FK_DISTRACC_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table HOSPEDAJE
   add constraint FK_HOSPEDAJ_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table PLAYAS
   add constraint FK_PLAYAS_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table PUBLICIDAD
   add constraint FK_PUBLICID_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table RESTAURANTES
   add constraint FK_RESTAURA_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table SITIOS_DE_INTERES
   add constraint FK_SITIOS_D_RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

