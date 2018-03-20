DELIMITER //
CREATE TRIGGER customer_login_update BEFORE
UPDATE ON
  customer_details FOR EACH ROW
BEGIN
  UPDATE customer_login SET email = NEW.email, password = NEW.password WHERE cust_id = OLD.cust_id;
END//
DELIMITER ;