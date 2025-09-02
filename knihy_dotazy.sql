CREATE DATABASE library DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;

use library;

CREATE TABLE books(
	id_book INTEGER NOT NULL auto_increment,
	ISBN VARCHAR(13) NOT NULL,
	nameAuth VARCHAR(50) NOT NULL,
	surnameAuth VARCHAR(50) NOT NULL,
	book VARCHAR(50) NOT NULL,
	bookDescription VARCHAR(1000) NOT NULL,
	PRIMARY KEY (id_book)
);

INSERT INTO `books` (`ISBN`, `nameAuth`, `surnameAuth`, `book`, `bookDescription`) VALUES
('1234567898765', 'Dick', 'Francis', 'Návrat diplomata', 'detektivka'),
('2234567898765', 'Louis', 'Bromfield', 'Když nastaly deště', 'román z Indie'),
('3234567898765', 'Umberto', 'Eco', 'Jméno růže', 'detektivní román z období středověku'),
('4234567898765',  'Dick', 'Francis', 'Vysoké sázky', 'detektivka'),
('5234567898765', 'Dick', 'Francis', 'Sport královen', 'autobiografie');

CREATE USER librarian@localhost IDENTIFIED BY '******';
GRANT SELECT, INSERT, UPDATE, DELETE ON library.* TO librarian@localhost;
