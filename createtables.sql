CREATE TABLE users (
    user_id int (11) NOT NULL AUTO_INCREMENT,
    email varchar (40),
    password varchar (40),
    telephone varchar (15),
    PRIMARY KEY (user_id)
    );

CREATE TABLE business(
    bus_id int (11) NOT NULL AUTO_INCREMENT,
    bus_nme varchar (45) NOT NULL,
    e_mail varchar (40) NOT NULL,
    bus_site varchar (40) NOT NULL,
    pst_cd varchar (10) NOT NULL,
    ser_cat varchar (20) NOT NULL,
    pho_num varchar (15) NOT NULL,
    web varchar (100) NULL,
    PRIMARY KEY (bus_id)
    );

CREATE TABLE category (
    cat_id int (11) NOT NULL AUTO_INCREMENT,
    ser_cat varchar (20) NOT NULL,
    PRIMARY KEY (cat_id)
    );