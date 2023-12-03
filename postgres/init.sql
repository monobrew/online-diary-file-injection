-- Adminer 4.8.1 PostgreSQL 16.1 (Debian 16.1-1.pgdg120+1) dump

DROP TABLE IF EXISTS "notes";
DROP SEQUENCE IF EXISTS notes_id_seq;
CREATE SEQUENCE notes_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."notes" (
    "id" integer DEFAULT nextval('notes_id_seq') NOT NULL,
    "user_id" integer NOT NULL,
    "text" text NOT NULL,
    "title" text NOT NULL,
    "date" date NOT NULL,
    CONSTRAINT "notes_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "notes" ("id", "user_id", "text", "title", "date") VALUES
(1,	1,	'To jest cośctam',	'Hej',	'2023-12-03'),
(2,	1,	'To jest trochę inna opowiastka. ŁAŁ',	'Dobry :)',	'2023-12-03'),
(3,	1,	'To jest inny artykuł.',	':)',	'2023-12-03');

DROP TABLE IF EXISTS "users";
CREATE TABLE "public"."users" (
    "id" integer NOT NULL,
    "login" text NOT NULL,
    "password_hash" text NOT NULL,
    "status" text NOT NULL,
    CONSTRAINT "users_id" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "users" ("id", "login", "password_hash", "status") VALUES
(1,	'admin',	'admin',	'admin');

-- 2023-12-03 20:56:35.052205+00
