-- CREATE A QUERY TO FETCH THE TOTAL QUANTITY OF PRODUCTS ORDERED
-- AND THE TOTAL VALUE OF ALL ORDERS MADE ON THE CURRENT DATE

-- STEP 1: FILL DATABASE WITH SAMPLE DATA
INSERT INTO product (product_id, name, sku, price) VALUES (1, 'product 1', 'sku1', 100.0);
INSERT INTO product_quantity (pq_id, quantity, product_id) VALUES (5, 20, 1);
INSERT INTO customer (customer_id, name, email, order_id) VALUES (2, 'customer 1', 'customer1@gmail.com', 1);
INSERT INTO table_order (order_id, order_date, product_id, pq_id, customer_id) VALUES (1, '9', '2019-10-09',1, 5, 1);

-- STEP 2: CREATE QUERY

SELECT product_quantity.quantity, product.price FROM table_order, product, product_quantity
WHERE product.product_id = table_order.product_id
	AND product_quantity.pq_id = table_order.pq_id
	AND product_quantity.product_id = table_order.product_id
	AND table_order.order_date = CURDATE()
;

-- STEP 3: TEST QUERY

