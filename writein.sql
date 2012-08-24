CREATE DATABASE phonedata;

CREATE TABLE phonespecs
(
id TINYINT(3) UNSIGNED NOT NULL auto_increment,
name VARCHAR(25),
pLength FLOAT(4, 1),
pWidth FLOAT(4, 1),
pDepth FLOAT(4, 1),
pWeight FLOAT(4, 1),
reslLength SMALLINT(4) UNSIGNED,
reslWidth SMALLINT(4) UNSIGNED,
screenSize FLOAT(4, 1),
cardSize TINYINT(3),
internalStorage FLOAT(4, 1),
cameraMP FLOAT(4, 1),
ledFlash TINYINT(1) UNSIGNED,
os VARCHAR(15),
osVersion VARCHAR(15),
battery SMALLINT(4) UNSIGNED,
PRIMARY KEY (id)
);
