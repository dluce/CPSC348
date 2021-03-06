/* database.sql - CPSC 348 */

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	troop_number VARCHAR(7) PRIMARY KEY NOT NULL,
	scout_master_name VARCHAR(50) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	email VARCHAR(30) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(40) NOT NULL,
	current_time_slot VARCHAR(80) DEFAULT ''
);

DROP TABLE IF EXISTS locations;
CREATE TABLE locations (
	id INTEGER(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(40) NOT NULL
);

/*each location will have two rows in this table. One for saturday, */
/*and one for sunday in order to tell apart the days. */
DROP TABLE IF EXISTS times;
CREATE TABLE times(
	location_id INTEGER(11), 
	day_of ENUM('Saturday', 'Sunday'),
	time1 BOOLEAN DEFAULT 0,
	time2 BOOLEAN DEFAULT 0,
	time3 BOOLEAN DEFAULT 0,
	time4 BOOLEAN DEFAULT 0,
	time5 BOOLEAN DEFAULT 0,
	troop_number1 INTEGER(7),
	troop_number2 INTEGER(7),
	troop_number3 INTEGER(7),
	troop_number4 INTEGER(7),
	troop_number5 INTEGER(7),
	CONSTRAINT locations_id_fk
	FOREIGN KEY (location_id)
	REFERENCES locations(id)
);

/*puts an admin account in the users table */
INSERT INTO users VALUES ('0000', 'Administrator', '7033400810', 'dluce@mail.umw.edu', 
	'admin', SHA('gurren5'), '');
	
/* puts the locations into the 'locations' table */
INSERT INTO locations (name) VALUES ('Candyland');
INSERT INTO locations (name) VALUES ('Mordor');
INSERT INTO locations (name) VALUES ('RuneScape');
INSERT INTO locations (name) VALUES ('Atlantis');
INSERT INTO locations (name) VALUES ('1701 College Avenue');


/*initializes the 'times' table with two days for each preset location. */
INSERT INTO times (location_id, day_of) VALUES (1, 'Saturday');
INSERT INTO times (location_id, day_of) VALUES (2, 'Saturday');
INSERT INTO times (location_id, day_of) VALUES (3, 'Saturday');
INSERT INTO times (location_id, day_of) VALUES (4, 'Saturday');
INSERT INTO times (location_id, day_of) VALUES (5, 'Saturday');
INSERT INTO times (location_id, day_of) VALUES (1, 'Sunday');
INSERT INTO times (location_id, day_of) VALUES (2, 'Sunday');
INSERT INTO times (location_id, day_of) VALUES (3, 'Sunday');
INSERT INTO times (location_id, day_of) VALUES (4, 'Sunday');
INSERT INTO times (location_id, day_of) VALUES (5, 'Sunday');