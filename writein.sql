CREATE DATABASE phonedata;

CREATE TABLE phonespecs
(
id TINYINT(3) UNSIGNED NOT NULL auto_increment,
name VARCHAR(25),
pLength FLOAT(, 2),
pWidth FLOAT(6, 2),
pDepth FLOAT(6, 2),
pWeight FLOAT(6, 2),
reslLength SMALLINT(4) UNSIGNED,
reslWidth SMALLINT(4) UNSIGNED,
screenSize FLOAT(6, 3),
internalStorage FLOAT(8, 3),
cardSize FLOAT(8, 3),
cameraMP FLOAT(8, 3),
ledFlash VARCHAR(3),
os VARCHAR(15),
osVersion VARCHAR(10),
battery SMALLINT(5) UNSIGNED,
PRIMARY KEY (id)
);
