CREATE DATABASE phonedata;

CREATE TABLE phonespecs
(
id TINYINT(3) UNSIGNED NOT NULL auto_increment,
name VARCHAR(25),
pLength FLOAT(5, 3),
pWidth FLOAT(5, 3),
pDepth FLOAT(5, 3),
pWeight FLOAT(5, 3),
reslLength SMALLINT(4) UNSIGNED,
reslWidth SMALLINT(4) UNSIGNED,
screenSize FLOAT(5, 3),
internalStorage FLOAT(5, 3),
cardSize FLOAT(5, 3)
cameraMP FLOAT(5, 3),
ledFlash VARCHAR(3),
os VARCHAR(15),
osVersion VARCHAR(10),
battery SMALLINT(5) UNSIGNED,
PRIMARY KEY (id)
);
