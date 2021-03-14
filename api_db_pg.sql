
CREATE TABLE IF NOT EXISTS products (
  id serial primary key,
  name varchar(32),
  description text,
  price decimal(10,0));

--
-- Dumping data for table products
--

INSERT INTO products (name, description, price) VALUES
('LG P880 4X HD', 'My first awesome phone!', '336'),
('Google Nexus 4', 'The most awesome phone of 2013!'),
('Samsung Galaxy S4', 'How about no?', '600'),
('Bench Shirt', 'The best shirt!', '29'),
('Lenovo Laptop', 'My business partner.', '399'),
('Samsung Galaxy Tab 10.1', 'Good tablet.', '259'),
('Spalding Watch', 'My sports watch.', '199'),
('Sony Smart Watch', 'The coolest smart watch!', '300'),
('Huawei Y300', 'For testing purposes.', '100'),
('Abercrombie Lake Arnold Shirt', 'Perfect as gift!', '60'),
('Abercrombie Allen Brook Shirt', 'Cool red shirt!', '70'),
('Another product Men', 'Awesome product!', '555'),
('Wallet Men', 'You can absolutely use this one!', '799'),
('Amanda Waller Shirt Men', 'New awesome shirt!', '333'),
('Nike Shoes for Men', 'Nike Shoes', '12999'),
('Bristol Shoes Men', 'Awesome shoes. Seen in movies.', '999'),
('Rolex Watch Men', 'Luxury watch.', '25000');
