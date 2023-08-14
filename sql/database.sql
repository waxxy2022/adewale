--
-- Database: `live-search`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `slug`, `image`) VALUES
(1, 'vegetable-Carrot', ' Allergy-hypersensitivity', 'image/pancake.jpg'),
(2, 'grape', 'Citrus allergy', 'image/pancakejpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text ,
  `category_id` int(11) ,
  `featured` varchar(255) ,
  `create_at` timestamp  DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_code`, `name`, `slug`, `description`, `image`, `category_id`, `featured`, `create_at`) VALUES
(1, 'Vegetable',	'Potato', 'Yam', 'Potato Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(2, 'Dairy',	'Dairy', 'Yogurt', 'Milk allergy Lactose intolerance', 'image/pancake.jpg' , 2, '1', '2023-05-06 05:27:29'), 
(3,' Nut and seed', 'Oil seed',	'Almond',	'Nut Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(4,	'Vegetable', 'Composite vegetable',	'Artichoke'	, 'Insulin Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(5, 'Vegetable', 	'Liliaceous vegetable',	'Asparagus'	, 'Allium Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(6,	'Fruit' ,'Tropical fruit',	'Avocado',	'Oral Allergy Syndrome', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(7,	'Vegetable',	'Miscellaneous vegetable',	'Bamboo shoot',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(8,	'Fruit',	'Tropical fruit',	'Banana',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(9,	'Cereal grain and pulse',	'Cereal grain',	'Barley',	'Gluten Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(10, 'Cereal grain and pulse',	'Pulse',	'Bean',	'Legume Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(11,	'Fruit', 'Berry',	'Blackberry',' Salicylate Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(12,	'Cereal grain and pulse',	'Pulse',	'Black-eyed bean', 'Legume Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(13, 'Aquatic animal', '	Fish',	'Bonito',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(14, 'Cereal grain and pulse', 'Pulse',	'Broad bean',	'Legume Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(15,	'Dairy', 	'Dairy',	'Butter',	'Milk allergy / Lactose intolerance',  'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(16, 'Poultry',	'Offal'	, 'Chicken',	'Poultry Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29' ),
(17, 'fruit', 'Stone fruit',	'Cherry', 'Stone Fruit Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(18, 'Poultry',	'Offal'	,'Chicken',	'Poultry Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(19, 'Vegetable',	'Composite vegetable',	'Chicory',	'Insulin Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(20, 'Vegetable',	'Cruciferous vegetable',	'Chinese cabbage',	'Cruciferous Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(21, 'Nut and seed', 'Beverage seed',	'Coffee bean',	'	Ochratoxin Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(22, 'Cereal grain and pulse',	'Cereal grain	Corn',	'Corn',	'	Corn Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(23, 'Nut and seed',	'Oil seed',	'Cotton seed',	'Seed Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(24, 'Fruit',	'Berry',	'Cranberry',	'Salicylate Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(25, 'Dairy',	'Dairy',	'Cream',	'Milk allergy / Lactose intolerance', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(26, 'Aquatic animal',	'Shellfish',	'Crustaceans',	'Shellfish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(27, 'Dairy',	'Dairy',	'Custard', 'Milk allergy / Lactose intolerance', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(28, 'Fruit',	'Tropical fruit',	'Date',	'Oral Allergy Syndrome','image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'),
(29, 'Terrestrial mammal',	'Offal',	'Deer',	'Alpha-gal Syndrome', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'),
(30, 'Poultry',	'Offal',	'Duck',	'Poultry Allergy', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'),
(31, 'Aquatic animal',	'Fish',	'Eel',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(32, 'Vegetable',	'Solanceous vegetable',	'Egg plant',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(33, 'Poultry',	'Egg',	'Eggs',	'Fish Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'),
(34, 'Vegetable',	'Composite vegetable',	'Endive',	'Fish Allergy', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'), 
(35, 'Vegetable',	'Sugar source',	'Fructose',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(35, 'Vegetable',	'Liliaceous vegetable',	'Garlic',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(36, 'Vegetable',	'Miscellaneous vegetable',	'Ginger',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(37, 'Nut and seed',	'Oil seed',	'Ginkgo nut',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(38, 'Aquatic animal',	'Fish',	'Globfish',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(39, 'Vegetable',	'Sugar source',	'Glucose',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(40, 'Terrestrial mammal',	'Offal',	'Goat',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(41, 'Fruit',	'Grape',	'Grape',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(42, 'Fruit',	'Citrus fruit / citric acid',	'Grapefruit',	'Histamine Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(43, 'Vegetable',	'Legumes vegetable',	'Green soybean',	'Legume Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(44, 'Fruit',	'Tropical fruit',	'Guava',	'Oral Allergy Syndrome', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(45, 'Bee product',	'Bee product',	'Honey',	'Honey Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(46, 'Hop',	'Hop', 'Hop',	'Beer Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(47, 'Terrestrial mammal',	'Offal', 'Horse',	'Alpha-gal Syndrome', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(48, 'Aquatic animal',	'Fish', 'Horse Mackerel',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(49, 'Vegetable',	'Cruciferous vegetable', 'Horseradish',	'Fish Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(50, 'Fruit',	'Berry', 'Huckleberry',	'Salicylate Allergy', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'), 
(51, 'Dairy',	'Dairy', 'Ice cream',	'Milk allergy / Lactose intolerance', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(52, 'Fruit',	'Pome fruit', 'Japanese pear',	'Oral Allergy Syndrome', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(53, 'Fruit',	'Stone fruit', 'Japanese plum',	'Stone Fruit Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(54, 'Vegetable',	'Cruciferous vegetable', 'Kale',	'Cruciferous Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(54, 'Vegetable',	'Legumes vegetable', 'Kidney bean',	'Legume Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(55, 'Fruit',	'Tropical fruit', 'Kiwi',	'Oral Allergy Syndrome', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(55, 'Vegetable',	'Potato', 'Konjac',	'Potato Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(56, 'Vegetable',	'Cruciferous vegetable', 'Kyona',	'Cruciferous Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(57, 'Vegetable',	'Sugar source', 'Lactose',	'Lactose Intolerance','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(58, 'Vegetable',	'Liliaceous vegetable', 'Leek',	'Allium Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(59, 'Fruit',	'Citrus fruit / citric acid', 'Lemon',	'Citrus Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(60, 'Cereal grain and pulse',	'Pulse', 'Lentil',	'Legume Allergy', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29'), 
(61, 'Vegetable',	'Composite vegetable', 'Lettuce ',	'LTP Allergy', 'image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(62, 'Cereal grain and pulse',	'Pulse', 'Lima bean ',	'Legume Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(63, 'Fruit', 'Citrus fruit / citric acid', 'Lime',	'Citrus Allergy','image/pancake.jpg', 2, '1', '2023-05-06 05:27:29'), 
(64, 'Fruit', 'Pome fruit', 'Loquat',	'Oral Allergy Syndrome', 'image/pancake.jpg' ,2, '1', '2023-05-06 05:27:29');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
