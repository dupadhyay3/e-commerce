CREATE TABLE IF NOT EXISTS admin
(
    aid int(3) AUTO_INCREMENT PRIMARY KEY,
    email varchar(50),
    password varchar(20)
);

INSERT INTO admin(email,password) VALUES("admin@e-commerce.local","Admin@123");