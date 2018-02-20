CREATE TABLE IF NOT EXISTS productDetails
(
    pid INT(5) AUTO_INCREMENT PRIMARY KEY,
    pName VARCHAR(20),
    pSKU VARCHAR(20) NOT NULL UNIQUE,
    pPrice DECIMAL(8,2),
    pcsId INT(5),
    pImage LONGBLOB,
    pStock ENUM("In Stock", "Out of Stock"),
    FOREIGN KEY (pcsId) REFERENCES pCategorySub(pcsId)
)