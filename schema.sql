CREATE TABLE admins(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50) UNIQUE,

password VARCHAR(255),

email VARCHAR(100),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE customers(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50) UNIQUE,

password VARCHAR(255),

fullname VARCHAR(100),

email VARCHAR(100),

status ENUM('active','expired','suspended')

DEFAULT 'active',

expiry_date DATE,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE settings(

id INT AUTO_INCREMENT PRIMARY KEY,

site_name VARCHAR(100),

timezone VARCHAR(50),

currency VARCHAR(10)

);
