CREATE TABLE IF NOT EXISTS shipAdd
(
    shipId INT(5) AUTO_INCREMENT PRIMARY KEY,
    custId INT(5),
    Address VARCHAR(50),
    City VARCHAR(20),
    State VARCHAR(20),
    Zip INT(6),
    Country VARCHAR(20),
    FOREIGN KEY (custId) REFERENCES customerDetails(custId)
)