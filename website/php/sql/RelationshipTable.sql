CREATE TABLE Relationship (
  id_one INT NOT NULL,
  id_two INT NOT NULL,
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  location varchar(255) DEFAULT "default"
);
