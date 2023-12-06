-- Adminer 4.8.1 PostgreSQL 16.1 (Debian 16.1-1.pgdg120+1) dump

DROP TABLE IF EXISTS "media";
DROP SEQUENCE IF EXISTS media_id_seq;
CREATE SEQUENCE media_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."media" (
    "id" integer DEFAULT nextval('media_id_seq') NOT NULL,
    "note_id" integer NOT NULL,
    "filename" text NOT NULL,
    CONSTRAINT "media_pkey" PRIMARY KEY ("id")
) WITH (oids = false);


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
(nextval('notes_id_seq'),	1,	'To jest cośctam',	'Hej',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'To jest trochę inna opowiastka. ŁAŁ',	'Dobry :)',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'To jest inny artykuł.',	':)',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'asd',	'Tytuł',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'asd',	'Tytuł',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'haertar',	'TytułeF',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'haertar',	'TytułeF',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'asd',	'Tytuł',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'ttasrthbsdfghsrtyhjndfgfdg',	'hdfg',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar elementum integer enim neque volutpat ac tincidunt. Lectus quam id leo in vitae turpis. Molestie nunc non blandit massa enim. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis. Diam sollicitudin tempor id eu nisl. Amet volutpat consequat mauris nunc congue. Nunc sed id semper risus in. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Ac ut consequat semper viverra nam libero. Erat velit scelerisque in dictum non. Sed turpis tincidunt id aliquet risus feugiat in. Quam elementum pulvinar etiam non quam lacus.

Phasellus egestas tellus rutrum tellus. Semper auctor neque vitae tempus quam pellentesque nec. Leo in vitae turpis massa sed elementum tempus. Feugiat scelerisque varius morbi enim nunc faucibus a. Purus gravida quis blandit turpis. Scelerisque varius morbi enim nunc faucibus a pellentesque. Malesuada proin libero nunc consequat. Ac ut consequat semper viverra nam libero justo laoreet sit. Sed libero enim sed faucibus turpis in eu mi bibendum. Tellus molestie nunc non blandit massa enim nec dui. Eu ultrices vitae auctor eu augue ut lectus arcu. At lectus urna duis convallis. Integer vitae justo eget magna fermentum. Interdum posuere lorem ipsum dolor sit.

Dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. In ornare quam viverra orci sagittis eu volutpat. Pellentesque elit eget gravida cum sociis natoque. Neque laoreet suspendisse interdum consectetur libero id faucibus. Turpis cursus in hac habitasse platea. Morbi quis commodo odio aenean sed adipiscing diam donec. Sed vulputate mi sit amet mauris commodo. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Interdum velit euismod in pellentesque massa placerat duis ultricies lacus. Turpis cursus in hac habitasse. Volutpat blandit aliquam etiam erat. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Duis tristique sollicitudin nibh sit.

Nec nam aliquam sem et tortor consequat. Orci nulla pellentesque dignissim enim. Aliquet nec ullamcorper sit amet risus nullam. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Tristique risus nec feugiat in. Velit egestas dui id ornare. Est sit amet facilisis magna etiam. Consequat interdum varius sit amet mattis vulputate enim nulla. Convallis posuere morbi leo urna molestie. Diam vulputate ut pharetra sit amet. Luctus accumsan tortor posuere ac. Viverra nibh cras pulvinar mattis nunc sed blandit libero. Ut pharetra sit amet aliquam id diam maecenas. Consequat semper viverra nam libero. Vitae aliquet nec ullamcorper sit amet risus nullam eget.

Sagittis purus sit amet volutpat consequat mauris nunc. Nisl pretium fusce id velit ut. Elementum nibh tellus molestie nunc non blandit. Enim sed faucibus turpis in eu mi bibendum neque. Lectus urna duis convallis convallis. Gravida dictum fusce ut placerat. Vivamus at augue eget arcu dictum varius duis at. Blandit cursus risus at ultrices mi. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Sagittis vitae et leo duis. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Risus feugiat in ante metus dictum at. Ultrices gravida dictum fusce ut. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus.',	'Tytuł',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar elementum integer enim neque volutpat ac tincidunt. Lectus quam id leo in vitae turpis. Molestie nunc non blandit massa enim. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis. Diam sollicitudin tempor id eu nisl. Amet volutpat consequat mauris nunc congue. Nunc sed id semper risus in. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Ac ut consequat semper viverra nam libero. Erat velit scelerisque in dictum non. Sed turpis tincidunt id aliquet risus feugiat in. Quam elementum pulvinar etiam non quam lacus.








Phasellus egestas tellus rutrum tellus. Semper auctor neque vitae tempus quam pellentesque nec. Leo in vitae turpis massa sed elementum tempus. Feugiat scelerisque varius morbi enim nunc faucibus a. Purus gravida quis blandit turpis. Scelerisque varius morbi enim nunc faucibus a pellentesque. Malesuada proin libero nunc consequat. Ac ut consequat semper viverra nam libero justo laoreet sit. Sed libero enim sed faucibus turpis in eu mi bibendum. Tellus molestie nunc non blandit massa enim nec dui. Eu ultrices vitae auctor eu augue ut lectus arcu. At lectus urna duis convallis. Integer vitae justo eget magna fermentum. Interdum posuere lorem ipsum dolor sit.

Dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. In ornare quam viverra orci sagittis eu volutpat. Pellentesque elit eget gravida cum sociis natoque. Neque laoreet suspendisse interdum consectetur libero id faucibus. Turpis cursus in hac habitasse platea. Morbi quis commodo odio aenean sed adipiscing diam donec. Sed vulputate mi sit amet mauris commodo. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Interdum velit euismod in pellentesque massa placerat duis ultricies lacus. Turpis cursus in hac habitasse. Volutpat blandit aliquam etiam erat. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Duis tristique sollicitudin nibh sit.

Nec nam aliquam sem et tortor consequat. Orci nulla pellentesque dignissim enim. Aliquet nec ullamcorper sit amet risus nullam. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Tristique risus nec feugiat in. Velit egestas dui id ornare. Est sit amet facilisis magna etiam. Consequat interdum varius sit amet mattis vulputate enim nulla. Convallis posuere morbi leo urna molestie. Diam vulputate ut pharetra sit amet. Luctus accumsan tortor posuere ac. Viverra nibh cras pulvinar mattis nunc sed blandit libero. Ut pharetra sit amet aliquam id diam maecenas. Consequat semper viverra nam libero. Vitae aliquet nec ullamcorper sit amet risus nullam eget.

Sagittis purus sit amet volutpat consequat mauris nunc. Nisl pretium fusce id velit ut. Elementum nibh tellus molestie nunc non blandit. Enim sed faucibus turpis in eu mi bibendum neque. Lectus urna duis convallis convallis. Gravida dictum fusce ut placerat. Vivamus at augue eget arcu dictum varius duis at. Blandit cursus risus at ultrices mi. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Sagittis vitae et leo duis. Dolor sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Risus feugiat in ante metus dictum at. Ultrices gravida dictum fusce ut. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus.',	'Tytuł',	'2023-12-03'),
(nextval('notes_id_seq'),	1,	'XD',	'XD',	'2023-12-04'),
(nextval('notes_id_seq'),	1,	'asd',	'Tytuł',	'2023-12-04'),
(nextval('notes_id_seq'),	1,	'asd',	'Tytuł',	'2023-12-04');

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
