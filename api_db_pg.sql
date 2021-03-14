

CREATE TABLE IF NOT EXISTS categories (
  id serial primary key,
  name varchar(256) NOT NULL,
  description text NOT NULL
);

--
-- Dumping data for table categories
--

INSERT INTO categories (id, name, description, created, modified) VALUES
(1, 'Fashion', 'Category for anything related to fashion.'),
(2, 'Electronics', 'Gadgets, drones and more.'),
(3, 'Motors', 'Motor sports and more'),
(5, 'Movies', 'Movie products.'),
(6, 'Books', 'Kindle books, audio books and more.'),
(13, 'Sports', 'Drop into new winter gear.'),
(20, 'Home', 'Category for home and garden products!');

CREATE TABLE IF NOT EXISTS products (
  id serial primary key,
  name varchar(32) NOT NULL,
  description text NOT NULL,
  price decimal(10,0) NOT NULL,
  category_id int NOT NULL
);

--
-- Dumping data for table products
--

INSERT INTO products (id, name, description, price, category_id, created, modified) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', '336', 3),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!',2),
(3, 'Samsung Galaxy S4', 'How about no?', '600', 3),
(6, 'Bench Shirt', 'The best shirt!', '29', 1),
(7, 'Lenovo Laptop', 'My business partner.', '399', 2),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', '259', 2),
(9, 'Spalding Watch', 'My sports watch.', '199', 1),
(10, 'Sony Smart Watch', 'The coolest smart watch!', '300', 2),
(11, 'Huawei Y300', 'For testing purposes.', '100', 2),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', '60', 1),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', '70',9),
(26, 'Another product Men', 'Awesome product!', '555', 2),
(28, 'Wallet Men', 'You can absolutely use this one!', '799', 6),
(31, 'Amanda Waller Shirt Men', 'New awesome shirt!', '333', 1),
(42, 'Nike Shoes for Men', 'Nike Shoes', '12999', 3),
(48, 'Bristol Shoes Men', 'Awesome shoes. Seen in movies.', '999', 5),
(60, 'Rolex Watch Men', 'Luxury watch.', '25000', 1);
