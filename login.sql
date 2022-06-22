USE dbhotel;

CREATE TABLE adminlog (
   id             INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username       VARCHAR(25) NOT NULL,
   pass           VARCHAR(25) NOT NULL
);

INSERT INTO adminlog (username, pass) VALUES
('admin', 'root');