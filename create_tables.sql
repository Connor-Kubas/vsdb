DROP TABLE IF EXISTS cards;
CREATE TABLE cards (
	`title` VARCHAR(50),
	`version` VARCHAR(100),
	`power` VARCHAR(1000),
	`type` VARCHAR(10),
	`cost` INTEGER,
	`attack` INTEGER,
	`defense` INTEGER,
	`affiliation` VARCHAR(40),
	`mutant` VARCHAR(30),
	`flight` VARCHAR(10),
	`range` VARCHAR(10),
	`visible` VARCHAR(20));