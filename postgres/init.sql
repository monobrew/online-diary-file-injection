-- Adminer 4.8.1 PostgreSQL 16.1 (Debian 16.1-1.pgdg120+1) dump

DROP TABLE IF EXISTS "media";
DROP SEQUENCE IF EXISTS media_id_seq;
CREATE SEQUENCE media_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1 CACHE 1;

CREATE TABLE "public"."media" (
    "id" integer DEFAULT nextval('media_id_seq') NOT NULL,
    "note_id" integer NOT NULL,
    "filename" text NOT NULL,
    CONSTRAINT "media_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

DROP TABLE IF EXISTS "notes";
DROP SEQUENCE IF EXISTS notes_id_seq;
CREATE SEQUENCE notes_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 1 CACHE 1;

CREATE TABLE "public"."notes" (
    "id" integer DEFAULT nextval('notes_id_seq') NOT NULL,
    "user_id" integer NOT NULL,
    "text" text NOT NULL,
    "title" text NOT NULL,
    "date" date NOT NULL,
    CONSTRAINT "notes_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_id_seq;
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 START 3 CACHE 1;

CREATE TABLE "public"."users" (
    "id" integer DEFAULT nextval('users_id_seq') NOT NULL,
    "login" text NOT NULL,
    "password_hash" text NOT NULL,
    "status" text NOT NULL,
    "email" text NOT NULL,
    CONSTRAINT "users_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "users" ("id", "login", "password_hash", "status", "email") VALUES
(1,	'johndoe123',	'$2y$10$YIiWz0QaVn7S6vCna8hw5.iDJHLa2OlDdzpVuZthpwbBJhB5e434K',	'postgres',	'johndoe@foo.bar'),
(2,	'admin123',	'$2y$10$q8V8evoDuP8VLU9dzyHJkuoXdjN3C3FWbkVvfA7dK.4rRPr92bRiS',	'user',	'test@test.test'),
(3,	'nowy1234',	'$2y$10$TuxUnqD1pMnOAV0mvB7AVuSFH.LESCihAVA7STiY.qqUzZhrlAKwS',	'user',	'nowy@nowy.n');

-- 2023-12-06 16:24:43.758201+00
