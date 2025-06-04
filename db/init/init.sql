use exampledb;
CREATE TABLE users(
    username varchar(20) NOT NULL,
    password varchar(20) NOT NULL
    ) ENGINE = innodb;

CREATE TABLE posts(
    title varchar(30) NOT NULL,
    content varchar(100) NOT NULL,
    writer varchar(20) NOT NULL,
    crtime varchar(20) NOT NULL
    ) ENGINE = innodb;