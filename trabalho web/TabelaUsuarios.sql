CREATE TABLE usuarios(
    ID INT UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
    login VARCHAR(30),
    senha VARCHAR(30),
    email VARCHAR(60),
    genero CHAR(1),
    Primary key (ID))
     ENGINE = MyISAM;
     

