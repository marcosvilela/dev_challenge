-- CREATE DATABASES
CREATE DATABASE problem4;
USE problem4;

-- CREATE TABLES
CREATE TABLE product (
product_id int NOT NULL,
name varchar(255) NOT NULL,
sku varchar(255) NOT NULL,
price float NOT NULL,

PRIMARY KEY (product_id)
);

CREATE TABLE product_quantity (
pq_id int NOT NULL,
quantity int NOT NULL,
product_id int NOT NULL,

PRIMARY KEY (pq_id),
FOREIGN KEY (product_id) REFERENCES product (product_id)
);

CREATE TABLE table_order (
order_id int NOT NULL,
order_date date NOT NULL,
product_id int NOT NULL,
pq_id int NOT NULL,
customer_id int NOT NULL,

PRIMARY KEY (order_id),
FOREIGN KEY (product_id) REFERENCES product (product_id),
FOREIGN KEY (pq_id) REFERENCES product_quantity (pq_id)
);

CREATE TABLE customer (
customer_id int NOT NULL,
name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
order_id int NOT NULL,

PRIMARY KEY (customer_id),
FOREIGN KEY (order_id) REFERENCES table_order (order_id)
);


ALTER TABLE table_order ADD FOREIGN KEY (customer_id) REFERENCES customer (customer_id);




