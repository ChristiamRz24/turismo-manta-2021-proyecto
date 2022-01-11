/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     10/1/2022 11:58:01                           */
/*==============================================================*/

--drop table CATEGORIA;
--drop table COMIDAS_TIPICAS;
--drop table DISTRACCIONES;
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
   constraint PK_CATEGORIA primary key (ID_CATEGORIA)
);

/*==============================================================*/
/* Table: COMIDAS_TIPICAS                                       */
/*==============================================================*/
create table COMIDAS_TIPICAS (
   ID_COMIDAS_TIPICAS   VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_COMIDAS_TIPICAS VARCHAR(150)         not null,
   DIRECCION_COMIDAS_TIPICAS VARCHAR(500)         not null,
   DESCRIPCION_COMIDAS_TIPICAS VARCHAR(2000)        not null,
   constraint PK_COMIDAS_TIPICAS primary key (ID_COMIDAS_TIPICAS)
);

/*==============================================================*/
/* Table: DISTRACCIONES                                         */
/*==============================================================*/
create table DISTRACCIONES (
   ID_DISTRACCIONES     VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_DISTRACCIONES VARCHAR(150)         not null,
   DIRECCION_DISTRACCIONES VARCHAR(500)         not null,
   DESCRIPCION_DISTRACCIONES VARCHAR(2000)        not null,
   constraint PK_DISTRACCIONES primary key (ID_DISTRACCIONES)
);

/*==============================================================*/
/* Table: HOSPEDAJE                                             */
/*==============================================================*/
create table HOSPEDAJE (
   ID_HOSPEDAJE         VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_HOSPEDAJE     VARCHAR(150)         not null,
   DIRECCION_HOSPEDAJE  VARCHAR(500)         not null,
   DESCRIPCION_HOSPEDAJE VARCHAR(2000)        not null
);

/*==============================================================*/
/* Table: PLAYAS                                                */
/*==============================================================*/
create table PLAYAS (
   ID_PLAYAS            VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_PLAYAS        VARCHAR(150)         not null,
   DIRECCION_PLAYAS     VARCHAR(500)         not null,
   DESCRIPCION_PLAYAS   VARCHAR(2000)        not null,
   constraint PK_PLAYAS primary key (ID_PLAYAS)
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
   ID_RESTAURANTES      VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_RESTAURANTES  VARCHAR(150)         not null,
   DIRECCION_RESTAURANTES VARCHAR(500)         not null,
   DESCRIPCION_RESTAURANTES VARCHAR(2000)        not null,
   constraint PK_RESTAURANTES primary key (ID_RESTAURANTES)
);

/*==============================================================*/
/* Table: SITIOS_DE_INTERES                                     */
/*==============================================================*/
create table SITIOS_DE_INTERES (
   ID_SITIOS_DE_INTERES VARCHAR(5)           not null,
   ID_CATEGORIA         VARCHAR(5)           not null,
   NOMBRE_SITIOS_DE_INTERES VARCHAR(150)         not null,
   DIRECCION_SITIOS_DE_INTERES VARCHAR(500)         not null,
   DESCRIPCION_SITIOS_DE_INTERES VARCHAR(2000)        not null
);

alter table COMIDAS_TIPICAS
   add constraint FK_COMIDAS__RELATIONS_CATEGORI foreign key (ID_CATEGORIA)
      references CATEGORIA (ID_CATEGORIA)
      on delete restrict on update restrict;

alter table DISTRACCIONES
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

