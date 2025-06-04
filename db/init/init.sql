use exampledb;
CREATE TABLE users(
    username varchar(20) NOT NULL,
    password varchar(20) NOT NULL
    ) ENGINE = innodb;

CREATE TABLE posts(
    id tinyint(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(30) NOT NULL,
    content varchar(100) NOT NULL,
    writer varchar(20) NOT NULL,
    crtime varchar(20) NOT NULL
    ) ENGINE = innodb;