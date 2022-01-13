create table Sender(
   id INT NOT NULL AUTO_INCREMENT,
   Fullname VARCHAR(200) NOT NULL,
   Address VARCHAR(410) NOT NULL,
   Email VARCHAR(200) NOT NULL,
   Phone VARCHAR(200) NOT NULL,
   Country VARCHAR(300) NOT NULL,
   Weight VARCHAR (100) NOT NULL,
   PRIMARY KEY ( id )
);


create table Receiver(
   id INT NOT NULL AUTO_INCREMENT,
   Fullname VARCHAR(200) NOT NULL,
   Address VARCHAR(410) NOT NULL,
   Email VARCHAR(200) NOT NULL,
   Phone VARCHAR(200) NOT NULL,
   Country VARCHAR(300) NOT NULL,
   Weight VARCHAR (100) NOT NULL,
   PRIMARY KEY ( id )
);
