CREATE TABLE roles
(name varchar(20) primary key,
used boolean not null default 0,
pos INT,
entred boolean not null default 0);

INSERT INTO roles(name) VALUES ('werewolf1');
INSERT INTO roles(name) VALUES ('werewolf2');
INSERT INTO roles(name) VALUES ('werewolf3');
INSERT INTO roles(name) VALUES ('werewolf4');
INSERT INTO roles(name) VALUES ('townsfolk1');
INSERT INTO roles(name) VALUES ('townsfolk2');
INSERT INTO roles(name) VALUES ('townsfolk3');
INSERT INTO roles(name) VALUES ('townsfolk4');
INSERT INTO roles(name) VALUES ('prophet');
INSERT INTO roles(name) VALUES ('witch');
INSERT INTO roles(name) VALUES ('savior');
INSERT INTO roles(name) VALUES ('hunter');
INSERT INTO roles(name) VALUES ('idiot');
INSERT INTO roles(name) VALUES ('cupido');
INSERT INTO roles(name) VALUES ('thief');
INSERT INTO roles(name) VALUES ('white werewolf');
