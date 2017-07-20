DROP TABLE IF EXISTS `item`;
DROP TABLE IF EXISTS seller;


CREATE TABLE seller (

	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileActivationToken CHAR(32),
	profileAtHandle VARCHAR(32) NOT NULL,
	-- to make sure duplicate data cannot exist, create a unique index
	profileEmail VARCHAR(128) NOT NULL,
	profileHash	CHAR(128) NOT NULL,
	-- to make something optional, exclude the not null
	profilePhone VARCHAR(32),
	profileSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileAtHandle),

	PRIMARY KEY(profileId)
);

-- create the tweet entity
CREATE TABLE item (
	itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- this is for a foreign key; auto_incremented is omitted by design
	itemProfileId INT UNSIGNED NOT NULL,
	itemContent VARCHAR(140) NOT NULL,
	itemPrice DATETIME(6) NOT NULL,
	-- this creates an index before making a foreign key
	INDEX (itemProfileId),
	-- this creates the actual foreign key relation
	FOREIGN KEY(itemId) REFERENCES seller(profileId),
	-- and finally create the primary key
	PRIMARY KEY(itemProfileId)
);

-- c