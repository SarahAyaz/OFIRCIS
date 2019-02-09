--------------------------------------------------------
--  File created - Thursday-April-20-2017   
--------------------------------------------------------
DROP TABLE "OFIR"."REQUESTS" cascade constraints;
DROP TABLE "OFIR"."ADDRESSS" cascade constraints;
--------------------------------------------------------
--  DDL for Sequence REQ_ID_SEQ
--------------------------------------------------------

   CREATE SEQUENCE  "OFIR"."REQ_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 21 CACHE 20 NOORDER  NOCYCLE  NOPARTITION ;
--------------------------------------------------------
--  DDL for Table REQUESTS
--------------------------------------------------------

  CREATE TABLE "OFIR"."REQUESTS" 
   (	"SP_NAME" VARCHAR2(50 BYTE), 
	"D_ID" VARCHAR2(20 BYTE), 
	"SUBJECT" VARCHAR2(200 BYTE), 
	"ON_BEHALF_OF" VARCHAR2(200 BYTE), 
	"DETAILS" VARCHAR2(500 BYTE), 
	"R_ID" VARCHAR2(20 BYTE), 
	"SUBMIT_DATE" DATE, 
	"CREATED_AT" DATE, 
	"UPDATED_AT" DATE, 
	"POLICE_STATION" VARCHAR2(40 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ADDRESSS
--------------------------------------------------------

  CREATE TABLE "OFIR"."ADDRESSS" 
   (	"D_ID" VARCHAR2(20 CHAR), 
	"PROVINCE" VARCHAR2(50 CHAR), 
	"CITY" VARCHAR2(50 CHAR), 
	"DISTRICT" VARCHAR2(50 CHAR), 
	"CREATED_AT" DATE, 
	"UPDATED_AT" DATE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into OFIR.REQUESTS
SET DEFINE OFF;
Insert into OFIR.REQUESTS (SP_NAME,D_ID,SUBJECT,ON_BEHALF_OF,DETAILS,R_ID,SUBMIT_DATE,CREATED_AT,UPDATED_AT,POLICE_STATION) values ('Waseem Iqbal','D3','Rights to edit criminal record','Ikram Akram','edit record','5',to_date('19-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),'Gulberg PS');
Insert into OFIR.REQUESTS (SP_NAME,D_ID,SUBJECT,ON_BEHALF_OF,DETAILS,R_ID,SUBMIT_DATE,CREATED_AT,UPDATED_AT,POLICE_STATION) values ('Ikram','D5','Hello','Ahsan','Rights','1',to_date('17-APR-17','DD-MON-RR'),null,null,null);
Insert into OFIR.REQUESTS (SP_NAME,D_ID,SUBJECT,ON_BEHALF_OF,DETAILS,R_ID,SUBMIT_DATE,CREATED_AT,UPDATED_AT,POLICE_STATION) values ('Waseem Iqbal','D3','Rights','test user','My mobile was snatched and FIR was by mustakenly submittes ols del it i my jkj hjhd jkljd hkjdh','4',to_date('20-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),'GulbergPS');
Insert into OFIR.REQUESTS (SP_NAME,D_ID,SUBJECT,ON_BEHALF_OF,DETAILS,R_ID,SUBMIT_DATE,CREATED_AT,UPDATED_AT,POLICE_STATION) values ('Waseem Iqbal','D3','Rights to edit criminal record','Raja Asrar Officer','Criminal Rights have to be changed because the record has been mistakenly entered','3',to_date('19-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),to_date('19-APR-17','DD-MON-RR'),null);
--------------------------------------------------------
--  Ref Constraints for Table REQUESTS
--------------------------------------------------------

  ALTER TABLE "OFIR"."REQUESTS" ADD CONSTRAINT "REQUESTS_ADDRESSS_FK1" FOREIGN KEY ("D_ID")
	  REFERENCES "OFIR"."ADDRESSS" ("D_ID") ENABLE;
--------------------------------------------------------
--  DDL for Trigger TRG_REQ_ID
--------------------------------------------------------

  CREATE OR REPLACE EDITIONABLE TRIGGER "OFIR"."TRG_REQ_ID" 
before insert on requests
for each row
begin
select req_id_seq.nextval
into :new.R_ID
from dual;
end;
/
ALTER TRIGGER "OFIR"."TRG_REQ_ID" ENABLE;
--------------------------------------------------------
--  DDL for Synonymn DUAL
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE PUBLIC SYNONYM "DUAL" FOR "SYS"."DUAL";
