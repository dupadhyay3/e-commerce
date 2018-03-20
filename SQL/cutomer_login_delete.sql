DELIMITER //
CREATE TRIGGER customer_login_delete BEFORE
DELETE ON
  customer_details FOR EACH ROW
BEGIN
  DELETE FROM customer_login WHERE cust_id = OLD.cust_id;
END//
DELIMITER ;