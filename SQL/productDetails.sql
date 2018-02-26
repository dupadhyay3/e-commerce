    CREATE TABLE IF NOT EXISTS productDetails
    (
        pId INT(5) AUTO_INCREMENT PRIMARY KEY,
        pName VARCHAR(20),
        pSKU VARCHAR(20) NOT NULL UNIQUE,
        pPrice DECIMAL(8,2),
        pcmId INT(5),
        pcsId INT(5),
        pImage LONGBLOB,
        pStock ENUM("In Stock", "Out of Stock"),
        FOREIGN KEY (pcmId) REFERENCES pCategoryMain(pcmId),
        FOREIGN KEY (pcsId) REFERENCES pCategorySub(pcsId)
    )