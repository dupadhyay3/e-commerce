CREATE TABLE IF NOT EXISTS cart(
    cartId INT(5) AUTO_INCREMENT PRIMARY KEY,
    custId INT(5),
    pid INT(5),
    Qty INT(5),
    FOREIGN KEY (custId) REFERENCES customerDetails(custId),
    FOREIGN KEY (pId) REFERENCES productDetails(pId)
)