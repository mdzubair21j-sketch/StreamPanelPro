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
CREATE TABLE packages(

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),

duration_days INT,

price DECIMAL(10,2),

max_connections INT DEFAULT 1

);



CREATE TABLE subscriptions(

id INT AUTO_INCREMENT PRIMARY KEY,

customer_id INT,

package_id INT,

start_date DATE,

expiry_date DATE,

status ENUM(

'active',
'expired',
'suspended'

)

);



CREATE TABLE resellers(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(255),

credits DECIMAL(10,2)

);
CREATE TABLE activity_logs(

id INT AUTO_INCREMENT PRIMARY KEY,

user_id INT,

action TEXT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
CREATE TABLE reseller_customers(

id INT AUTO_INCREMENT PRIMARY KEY,

reseller_id INT,

customer_id INT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
CREATE TABLE tickets(

id INT AUTO_INCREMENT PRIMARY KEY,

customer_id INT,

subject VARCHAR(255),

status ENUM(

'open',

'closed'

)

DEFAULT 'open',

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE ticket_messages(

id INT AUTO_INCREMENT PRIMARY KEY,

ticket_id INT,

sender VARCHAR(20),

message TEXT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
CREATE TABLE notifications(

id INT AUTO_INCREMENT PRIMARY KEY,

user_id INT,

message TEXT,

seen TINYINT DEFAULT 0,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
