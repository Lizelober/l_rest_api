
CREATE TABLE IF NOT EXISTS products (
  id serial primary key,
  name varchar(32) NOT NULL,
  description text NOT NULL,
  price decimal(10,0) NOT NULL

--
-- Dumping data for table products
--

INSERT INTO products (id, name, description, price) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', '336'),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!'),
(3, 'Samsung Galaxy S4', 'How about no?', '600'),
(6, 'Bench Shirt', 'The best shirt!', '29'),
(7, 'Lenovo Laptop', 'My business partner.', '399'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', '259'),
(9, 'Spalding Watch', 'My sports watch.', '199'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', '300'),
(11, 'Huawei Y300', 'For testing purposes.', '100'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', '60'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', '70'),
(26, 'Another product Men', 'Awesome product!', '555'),
(28, 'Wallet Men', 'You can absolutely use this one!', '799'),
(31, 'Amanda Waller Shirt Men', 'New awesome shirt!', '333'),
(42, 'Nike Shoes for Men', 'Nike Shoes', '12999'),
(48, 'Bristol Shoes Men', 'Awesome shoes. Seen in movies.', '999'),
(60, 'Rolex Watch Men', 'Luxury watch.', '25000');
