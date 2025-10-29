/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/13/2025 7:08:05 PM                        */
/*==============================================================*/


drop table if exists BOOKS;

drop table if exists SERIES;

/*==============================================================*/
/* Table: BOOKS                                                 */
/*==============================================================*/
create table BOOKS
(
   BOOKID               int not null auto_increment,
   SERIESID             int,
   BOOKTITLE            char(255),
   YEARPUBLISHED        char(255),
   primary key (BOOKID)
);

/*==============================================================*/
/* Table: SERIES                                                */
/*==============================================================*/
create table SERIES
(
   SERIESID             int not null auto_increment,
   SERIESDESCRIPTION    char(255),
   primary key (SERIESID)
);

alter table BOOKS add constraint FK_SERIESBUKU foreign key (SERIESID)
      references SERIES (SERIESID) on delete restrict on update restrict;

