CREATE TABLE IF NOT EXISTS customerLogin
(
    custId INT(5),
    Email VARCHAR(50),
    Pwd VARCHAR(20),
    FOREIGN KEY (custId) REFERENCES customerDetails(custId)
)