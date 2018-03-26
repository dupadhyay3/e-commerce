DELIMITER //
CREATE TRIGGER customer_login_insert AFTER
INSERT ON
  customer_details FOR EACH ROW
BEGIN
  INSERT INTO customer_login(cust_id, email, password) VALUES(NEW.cust_id, NEW.email, NEW.password);
END//
DELIMITER ;