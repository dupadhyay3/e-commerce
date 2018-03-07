CREATE TABLE IF NOT EXISTS pCategorySub
(
    pcsId INT(5) AUTO_INCREMENT PRIMARY KEY,
    pcmId INT(5),
    pcsName VARCHAR(20),
    FOREIGN KEY (pcmId) REFERENCES pCategoryMain(pcmId)
)