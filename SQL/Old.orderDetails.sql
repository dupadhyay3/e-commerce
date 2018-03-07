CREATE TABLE IF NOT EXISTS orderDetails
(
    odrId INT(5) AUTO_INCREMENT PRIMARY KEY,
    custId INT(5),
    billId INT(5),
    paymentMethodId INT(5),
    shipId INT(5),
    shipMethodId INT(5),
    pId INT(5),
    pcsId INT(5),
    cartId INT(5),
    SubToatl DECIMAL(8,2),
    FOREIGN KEY (custId) REFERENCES customerDetails(custId),
    FOREIGN KEY (billId) REFERENCES billAdd(billId),
    FOREIGN KEY (paymentMethodId) REFERENCES paymentMethod(paymentMethodId),
    FOREIGN KEY (shipId) REFERENCES shipAdd(shipId),
    FOREIGN KEY (shipMethodId) REFERENCES shipMethod(shipMethodId),
    FOREIGN KEY (pId) REFERENCES productDetails(pId),
    FOREIGN KEY (pcsId) REFERENCES pCategorySub(pcsId),
    FOREIGN KEY (cartId) REFERENCES cart(cartId)
)