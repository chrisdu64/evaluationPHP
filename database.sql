DROP DATABASE IF EXISTS wf3_php_intermediaire_christophe;
CREATE DATABASE wf3_php_intermediaire_christophe CHARACTER SET utf8;
USE wf3_php_intermediaire_christophe;

CREATE TABLE wf3_php_intermediaire_christophe.advert (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (50) NOT NULL,
    description text NOT NULL,
    postal_code INT NOT NULL,
    city VARCHAR (200) NOT  NULL,
    type VARCHAR (25) NOT NULL,
    price FLOAT NOT NULL,
    reservation_message text NOT NULL
);