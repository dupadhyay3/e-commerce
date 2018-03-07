CREATE TABLE IF NOT EXISTS customerDetails
(
    custId INT(5) AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(20),
    LastName VARCHAR(20),
    Email VARCHAR(50),
    MobNo VARCHAR(10),
    Gender ENUM("M","F"),
    Pwd VARCHAR(20)
);