/* database.sql - CPSC 348 */

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	troupe_number INTEGER(7) PRIMARY KEY NOT NULL,
	scout_master_name VARCHAR(50) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(40) NOT NULL
);

DROP TABLE IF EXISTS locations;
CREATE TABLE locations (
	id INTEGER(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(40) NOT NULL
);

DROP TABLE IF EXISTS days;
CREATE TABLE days(
	location_id INTEGER(11), 
	day_of ENUM('Saturday', 'Sunday'),
	CONSTRAINT locations_id_fk
	FOREIGN KEY (location_id)
	REFERENCES locations(id)
);

DROP TABLE IF EXISTS times;
CREATE TABLE times(
	daytime ENUM('Saturday', 'Sunday'),
	time1 BOOLEAN DEFAULT 0,
	time2 BOOLEAN DEFAULT 0,
	time3 BOOLEAN DEFAULT 0,
	time4 BOOLEAN DEFAULT 0,
	time5 BOOLEAN DEFAULT 0,
	time6 BOOLEAN DEFAULT 0
);



/*initializes the 'times' table to have all parts of the schedule free */
INSERT INTO times VALUES ('Saturday', 0, 0, 0, 0, 0, 0);
INSERT INTO times VALUES ('Sunday', 0, 0, 0, 0, 0, 0);