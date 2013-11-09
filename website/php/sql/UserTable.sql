CREATE TABLE Users (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  guid varchar(50) NOT NULL,
  first_name varchar(50) NOT NULL,
  last_name varchar(50) NOT NULL,
  email varchar(255) NOT NULL,
  position varchar(255) DEFAULT "",
  company varchar(255) DEFAULT "",
  address varchar(255) DEFAULT "",
  url varchar(255) DEFAULT "",
  phone varchar(20) DEFAULT "",
  description  varchar(255) DEFAULT ""
);
