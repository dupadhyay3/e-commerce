CREATE TABLE IF NOT EXISTS shipAdd
(
    shipId INT(5) AUTO_INCREMENT PRIMARY KEY,
    addId INT(5),
    FOREIGN KEY (addId) REFERENCES address(addId)
)