/* database.sql */

USE s12-CPSC348_dluce;

CREATE TABLE users (
	troupe_number INTEGER(7) PRIMARY KEY NOT NULL,
	scout_master_name VARCHAR(50) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(40) NOT NULL
);

CREATE TABLE locations (
	id INTEGER(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(40) NOT NULL,
);

CREATE TABLE times(
	location_id INTEGER(11), 
	time1 BOOLEAN DEFAULT 0,
	time1 BOOLEAN DEFAULT 0,
	time1 BOOLEAN DEFAULT 0,
	time1 BOOLEAN DEFAULT 0,
	time1 BOOLEAN DEFAULT 0,
	time1 BOOLEAN DEFAULT 0,
	CONSTRAINT locations_id_fk
	FOREIGN KEY (location_id)
	REFERENCES locations(id)
);