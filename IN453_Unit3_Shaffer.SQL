-- IN453_Unit3_Shaffer.SQL

-- Create users
CREATE USER 'IN453A'@'localhost' IDENTIFIED BY 'passwordA';
CREATE USER 'IN453B'@'localhost' IDENTIFIED BY 'passwordB';
CREATE USER 'IN453C'@'localhost' IDENTIFIED BY 'passwordC';

-- Grant permissions
GRANT SELECT ON IN453.IN453a_1 TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453b_1 TO 'IN453A'@'localhost';
GRANT SELECT ON IN453.IN453c_1 TO 'IN453A'@'localhost';

GRANT SELECT ON IN453.IN453b_1 TO 'IN453B'@'localhost';

GRANT SELECT ON IN453.IN453c_1 TO 'IN453C'@'localhost';

-- Apply changes
FLUSH PRIVILEGES;
