
-- Dumping database structure for daily_rent
DROP DATABASE IF EXISTS `daily_rent`;
CREATE DATABASE IF NOT EXISTS `daily_rent` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `daily_rent`;

-- Dumping structure for table daily_rent.customer
DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(5) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country_id` int(1) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `pass_word` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `create_date` varchar(50) DEFAULT NULL,
  `verify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.customer: ~3 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id`, `title`, `Fname`, `Lname`, `email`, `city`, `state`, `country_id`, `Address`, `mobile`, `tel`, `pass_word`, `date`, `create_date`, `verify`) VALUES
	(1, NULL, 'gowtham', 'ravi', 'gowtham@gmail.com', 'city', 'province', 200, 'test', '0771236547', NULL, NULL, NULL, '15-02-2016', NULL),
	(2, NULL, 'gowtham', 'ravi', 'gowtham@gmail.com', 'city', 'province', 200, 'test', '0771236547', NULL, NULL, NULL, '15-02-2016', 'u3NphgUTfimLEdM4'),
	(3, NULL, 'asd', 'asd', 'gowtham@gmail.com', 'asd', 'province', 200, 'asd', '0771236547', NULL, '123456', NULL, '15-02-2016', 'PwT9tcAQXgK7bICu'),
	(4, NULL, 'asd', 'asd', 'gowtham@gmail.com', 'asd', 'asd', 200, 'asd', 'asd', NULL, 'asd', NULL, '15-02-2016', 'wRcTV0dOnhm7Dxvy');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table daily_rent.font
DROP TABLE IF EXISTS `font`;
CREATE TABLE IF NOT EXISTS `font` (
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.font: ~416 rows (approximately)
/*!40000 ALTER TABLE `font` DISABLE KEYS */;
INSERT INTO `font` (`image`) VALUES
	('fa fa-glass'),
	('fa fa-music'),
	('fa fa-search'),
	('fa fa-envelope-o'),
	('fa fa-heart'),
	('fa fa-star'),
	('fa fa-star-o'),
	('fa fa-user'),
	('fa fa-film'),
	('fa fa-th'),
	('fa fa-times'),
	('fa fa-home'),
	('fa fa-clock-o'),
	('fa fa-lock'),
	('fa fa-flag'),
	('fa fa-headphones'),
	('fa fa-print'),
	('fa fa-camera'),
	('fa fa-dedent'),
	('fa fa-outdent'),
	('fa fa-indent'),
	('fa fa-video-camera'),
	('fa fa-photo'),
	('fa fa-image'),
	('fa fa-picture-o'),
	('fa fa-pencil'),
	('fa fa-map-marker'),
	('fa fa-adjust'),
	('fa fa-tint'),
	('fa fa-edit'),
	('fa fa-pencil-square-o'),
	('fa fa-share-square-o'),
	('fa fa-check-square-o'),
	('fa fa-arrows'),
	('fa fa-step-backward'),
	('fa fa-fast-backward'),
	('fa fa-backward'),
	('fa fa-chevron-left'),
	('fa fa-chevron-right'),
	('fa fa-crosshairs'),
	('fa fa-ban'),
	('fa fa-share'),
	('fa fa-expand'),
	('fa fa-compress'),
	('fa fa-plus'),
	('fa fa-minus'),
	('fa fa-asterisk'),
	('fa fa-exclamation-circle'),
	('fa fa-gift'),
	('fa fa-leaf'),
	('fa fa-fire'),
	('fa fa-eye'),
	('fa fa-eye-slash'),
	('fa fa-warning'),
	('fa fa-exclamation-triangle'),
	('fa fa-plane'),
	('fa fa-calendar'),
	('fa fa-random'),
	('fa fa-comment'),
	('fa fa-magnet'),
	('fa fa-retweet'),
	('fa fa-shopping-cart'),
	('fa fa-key'),
	('fa fa-comments'),
	('fa fa-star-half'),
	('fa fa-heart-o'),
	('fa fa-sign-out'),
	('fa fa-thumb-tack'),
	('fa fa-external-link'),
	('fa fa-trophy'),
	('fa fa-upload'),
	('fa fa-lemon-o'),
	('fa fa-phone'),
	('fa fa-square-o'),
	('fa fa-credit-card'),
	('fa fa-rss'),
	('fa fa-hdd-o'),
	('fa fa-bullhorn'),
	('fa fa-bell'),
	('fa fa-certificate'),
	('fa fa-globe'),
	('fa fa-wrench'),
	('fa fa-tasks'),
	('fa fa-filter'),
	('fa fa-briefcase'),
	('fa fa-group'),
	('fa fa-users'),
	('fa fa-chain'),
	('fa fa-link'),
	('fa fa-cloud'),
	('fa fa-flask'),
	('fa fa-cut'),
	('fa fa-scissors'),
	('fa fa-copy'),
	('fa fa-paperclip'),
	('fa fa-navicon'),
	('fa fa-reorder'),
	('fa fa-bars'),
	('fa fa-strikethrough'),
	('fa fa-underline'),
	('fa fa-table'),
	('fa fa-magic'),
	('fa fa-truck'),
	('fa fa-money'),
	('fa fa-columns'),
	('fa fa-unsorted'),
	('fa fa-sort'),
	('fa fa-envelope'),
	('fa fa-undo'),
	('fa fa-legal'),
	('fa fa-gavel'),
	('fa fa-dashboard'),
	('fa fa-tachometer'),
	('fa fa-flash'),
	('fa fa-umbrella'),
	('fa fa-paste'),
	('fa fa-clipboard'),
	('fa fa-lightbulb-o'),
	('fa fa-exchange'),
	('fa fa-cloud-download'),
	('fa fa-cloud-upload'),
	('fa fa-user-md'),
	('fa fa-stethoscope'),
	('fa fa-suitcase'),
	('fa fa-bell-o'),
	('fa fa-coffee'),
	('fa fa-cutlery'),
	('fa fa-file-text-o'),
	('fa fa-building-o'),
	('fa fa-hospital-o'),
	('fa fa-ambulance'),
	('fa fa-medkit'),
	('fa fa-fighter-jet'),
	('fa fa-beer'),
	('fa fa-h-square'),
	('fa fa-plus-square'),
	('fa fa-desktop'),
	('fa fa-tablet'),
	('fa fa-mobile-phone'),
	('fa fa-mobile'),
	('fa fa-circle-o'),
	('fa fa-spinner'),
	('fa fa-circle'),
	('fa fa-mail-reply'),
	('fa fa-reply'),
	('fa fa-github-alt'),
	('fa fa-gamepad'),
	('fa fa-flag-checkered'),
	('fa fa-terminal'),
	('fa fa-code'),
	('fa fa-mail-reply-all'),
	('fa fa-reply-all'),
	('fa fa-star-half-empty'),
	('fa fa-star-half-full'),
	('fa fa-location-arrow'),
	('fa fa-crop'),
	('fa fa-code-fork'),
	('fa fa-unlink'),
	('fa fa-chain-broken'),
	('fa fa-question'),
	('fa fa-info'),
	('fa fa-exclamation'),
	('fa fa-superscript'),
	('fa fa-subscript'),
	('fa fa-eraser'),
	('fa fa-puzzle-piece'),
	('fa fa-microphone'),
	('fa fa-microphone-slash'),
	('fa fa-shield'),
	('fa fa-calendar-o'),
	('fa fa-fire-extinguisher'),
	('fa fa-rocket'),
	('fa fa-maxcdn'),
	('fa fa-unlock-alt'),
	('fa fa-bullseye'),
	('fa fa-ellipsis-h'),
	('fa fa-ellipsis-v'),
	('fa fa-rss-square'),
	('fa fa-play-circle'),
	('fa fa-ticket'),
	('fa fa-minus-square'),
	('fa fa-minus-square-o'),
	('fa fa-level-up'),
	('fa fa-level-down'),
	('fa fa-check-square'),
	('fa fa-pencil-square'),
	('fa fa-external-link-square'),
	('fa fa-share-square'),
	('fa fa-compass'),
	('fa fa-toggle-down'),
	('fa fa-caret-square-o-down'),
	('fa fa-toggle-up'),
	('fa fa-caret-square-o-up'),
	('fa fa-toggle-right'),
	('fa fa-caret-square-o-right'),
	('fa fa-euro'),
	('fa fa-eur'),
	('fa fa-gbp'),
	('fa fa-dollar'),
	('fa fa-usd'),
	('fa fa-rupee'),
	('fa fa-inr'),
	('fa fa-cny'),
	('fa fa-rmb'),
	('fa fa-yen'),
	('fa fa-jpy'),
	('fa fa-ruble'),
	('fa fa-rouble'),
	('fa fa-rub'),
	('fa fa-won'),
	('fa fa-krw'),
	('fa fa-bitcoin'),
	('fa fa-btc'),
	('fa fa-file'),
	('fa fa-file-text'),
	('fa fa-thumbs-up'),
	('fa fa-thumbs-down'),
	('fa fa-youtube-square'),
	('fa fa-youtube'),
	('fa fa-xing'),
	('fa fa-xing-square'),
	('fa fa-youtube-play'),
	('fa fa-dropbox'),
	('fa fa-stack-overflow'),
	('fa fa-instagram'),
	('fa fa-flickr'),
	('fa fa-adn'),
	('fa fa-bitbucket'),
	('fa fa-bitbucket-square'),
	('fa fa-tumblr'),
	('fa fa-apple'),
	('fa fa-windows'),
	('fa fa-android'),
	('fa fa-linux'),
	('fa fa-dribbble'),
	('fa fa-skype'),
	('fa fa-foursquare'),
	('fa fa-trello'),
	('fa fa-female'),
	('fa fa-male'),
	('fa fa-gittip'),
	('fa fa-gratipay'),
	('fa fa-sun-o'),
	('fa fa-moon-o'),
	('fa fa-archive'),
	('fa fa-bug'),
	('fa fa-vk'),
	('fa fa-weibo'),
	('fa fa-renren'),
	('fa fa-pagelines'),
	('fa fa-stack-exchange'),
	('fa fa-dot-circle-o'),
	('fa fa-wheelchair'),
	('fa fa-vimeo-square'),
	('fa fa-turkish-lira'),
	('fa fa-try'),
	('fa fa-plus-square-o'),
	('fa fa-space-shuttle'),
	('fa fa-slack'),
	('fa fa-envelope-square'),
	('fa fa-openid'),
	('fa fa-bank'),
	('fa fa-university'),
	('fa fa-mortar-board'),
	('fa fa-graduation-cap'),
	('fa fa-yahoo'),
	('fa fa-google'),
	('fa fa-reddit'),
	('fa fa-reddit-square'),
	('fa fa-stumbleupon-circle'),
	('fa fa-stumbleupon'),
	('fa fa-delicious'),
	('fa fa-digg'),
	('fa fa-pied-piper'),
	('fa fa-pied-piper-alt'),
	('fa fa-drupal'),
	('fa fa-joomla'),
	('fa fa-language'),
	('fa fa-fax'),
	('fa fa-building'),
	('fa fa-child'),
	('fa fa-paw'),
	('fa fa-spoon'),
	('fa fa-cube'),
	('fa fa-cubes'),
	('fa fa-behance'),
	('fa fa-behance-square'),
	('fa fa-steam'),
	('fa fa-steam-square'),
	('fa fa-recycle'),
	('fa fa-automobile'),
	('fa fa-car'),
	('fa fa-cab'),
	('fa fa-taxi'),
	('fa fa-tree'),
	('fa fa-spotify'),
	('fa fa-deviantart'),
	('fa fa-soundcloud'),
	('fa fa-database'),
	('fa fa-vine'),
	('fa fa-codepen'),
	('fa fa-jsfiddle'),
	('fa fa-life-bouy'),
	('fa fa-life-buoy'),
	('fa fa-life-saver'),
	('fa fa-support'),
	('fa fa-life-ring'),
	('fa fa-circle-o-notch'),
	('fa fa-ra'),
	('fa fa-rebel'),
	('fa fa-ge'),
	('fa fa-empire'),
	('fa fa-git-square'),
	('fa fa-git'),
	('fa fa-hacker-news'),
	('fa fa-tencent-weibo'),
	('fa fa-qq'),
	('fa fa-wechat'),
	('fa fa-weixin'),
	('fa fa-send'),
	('fa fa-paper-plane'),
	('fa fa-send-o'),
	('fa fa-paper-plane-o'),
	('fa fa-history'),
	('fa fa-genderless'),
	('fa fa-circle-thin'),
	('fa fa-header'),
	('fa fa-paragraph'),
	('fa fa-sliders'),
	('fa fa-share-alt'),
	('fa fa-share-alt-square'),
	('fa fa-bomb'),
	('fa fa-soccer-ball-o'),
	('fa fa-futbol-o'),
	('fa fa-tty'),
	('fa fa-binoculars'),
	('fa fa-plug'),
	('fa fa-slideshare'),
	('fa fa-twitch'),
	('fa fa-yelp'),
	('fa fa-newspaper-o'),
	('fa fa-wifi'),
	('fa fa-calculator'),
	('fa fa-paypal'),
	('fa fa-google-wallet'),
	('fa fa-cc-visa'),
	('fa fa-cc-mastercard'),
	('fa fa-cc-discover'),
	('fa fa-cc-amex'),
	('fa fa-cc-paypal'),
	('fa fa-cc-stripe'),
	('fa fa-bell-slash'),
	('fa fa-bell-slash-o'),
	('fa fa-trash'),
	('fa fa-copyright'),
	('fa fa-at'),
	('fa fa-eyedropper'),
	('fa fa-paint-brush'),
	('fa fa-birthday-cake'),
	('fa fa-area-chart'),
	('fa fa-pie-chart'),
	('fa fa-line-chart'),
	('fa fa-lastfm'),
	('fa fa-lastfm-square'),
	('fa fa-toggle-off'),
	('fa fa-toggle-on'),
	('fa fa-bicycle'),
	('fa fa-bus'),
	('fa fa-ioxhost'),
	('fa fa-angellist'),
	('fa fa-cc'),
	('fa fa-shekel'),
	('fa fa-sheqel'),
	('fa fa-ils'),
	('fa fa-meanpath'),
	('fa fa-buysellads'),
	('fa fa-connectdevelop'),
	('fa fa-dashcube'),
	('fa fa-forumbee'),
	('fa fa-leanpub'),
	('fa fa-sellsy'),
	('fa fa-shirtsinbulk'),
	('fa fa-simplybuilt'),
	('fa fa-skyatlas'),
	('fa fa-cart-plus'),
	('fa fa-cart-arrow-down'),
	('fa fa-diamond'),
	('fa fa-ship'),
	('fa fa-user-secret'),
	('fa fa-motorcycle'),
	('fa fa-street-view'),
	('fa fa-heartbeat'),
	('fa fa-venus'),
	('fa fa-mars'),
	('fa fa-mercury'),
	('fa fa-transgender'),
	('fa fa-transgender-alt'),
	('fa fa-venus-double'),
	('fa fa-mars-double'),
	('fa fa-venus-mars'),
	('fa fa-mars-stroke'),
	('fa fa-mars-stroke-v'),
	('fa fa-mars-stroke-h'),
	('fa fa-neuter'),
	('fa fa-facebook-official'),
	('fa fa-pinterest-p'),
	('fa fa-whatsapp'),
	('fa fa-server'),
	('fa fa-user-plus'),
	('fa fa-user-times'),
	('fa fa-hotel'),
	('fa fa-bed'),
	('fa fa-viacoin'),
	('fa fa-train'),
	('fa fa-subway'),
	('fa fa-medium');
/*!40000 ALTER TABLE `font` ENABLE KEYS */;

-- Dumping structure for table daily_rent.new_and_event
DROP TABLE IF EXISTS `new_and_event`;
CREATE TABLE IF NOT EXISTS `new_and_event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `create_date` varchar(10) DEFAULT NULL,
  `create_by` smallint(6) DEFAULT NULL,
  `status` bit(1) DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.new_and_event: ~0 rows (approximately)
/*!40000 ALTER TABLE `new_and_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `new_and_event` ENABLE KEYS */;

-- Dumping structure for table daily_rent.property
DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `property_type` int(10) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  `garages` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `home` int(1) DEFAULT NULL,
  `single_property` int(1) DEFAULT NULL,
  `star` int(1) DEFAULT '0',
  `create_date` varchar(10) DEFAULT NULL,
  `create_by` smallint(6) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table daily_rent.property: ~15 rows (approximately)
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` (`id`, `property_type`, `code`, `title`, `image`, `short`, `description`, `garages`, `location`, `city`, `phone`, `email`, `key`, `map`, `home`, `single_property`, `star`, `create_date`, `create_by`, `status`) VALUES
	(1, 1, 'PRO-1', 'Hotel Residency 1', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', 'yes', 'Mall Road, Shimla', 'colombo', '(+91) 123456789', '', 'colombo', '6.9212246,79.853072', 1, 1, 0, '08-02-2016', 1, 1),
	(2, 2, 'PRO-2', 'Hotel Residency 2', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', '', 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(3, 2, 'PRO-3', 'Hotel Residency 3', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'kandy', '(+91) 123456789', '', 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(4, 2, 'PRO-3', 'Hotel Residency4', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'jaffna', '(+91) 123456789', '', 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(5, 2, 'PRO-3', 'Hotel Residency 5', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(6, 2, 'PRO-3', 'Hotel Residency 6', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(7, 2, 'PRO-3', 'Hotel Residency 7', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(8, 2, 'PRO-3', 'Hotel Residency 8', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(9, 2, 'PRO-3', 'Hotel Residency 9', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(10, 2, 'PRO-3', 'Hotel Residency 10', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(11, 2, 'PRO-3', 'Hotel Residency 11', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(12, 2, 'PRO-3', 'Hotel Residency 12', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(13, 2, 'PRO-3', 'Hotel Residency 13', 'offer1.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(14, 2, 'PRO-3', 'Hotel Residency 14', 'offer2.jpg', 'asd', '<p>asdasdasd</p>\r\n', '2', 'Mall Road, Shimla ', 'colombo', '(+91) 123456789', NULL, 'colombo', 'https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY', 1, NULL, 0, '08-02-2016', 1, 1),
	(15, 2, 'PRO-15', 'asd', NULL, 'industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially', '', '', 'asd', '', '', '', 'colombo', 'asd', 0, NULL, 0, '16-02-2016', 1, 1);
/*!40000 ALTER TABLE `property` ENABLE KEYS */;

-- Dumping structure for table daily_rent.property_image
DROP TABLE IF EXISTS `property_image`;
CREATE TABLE IF NOT EXISTS `property_image` (
  `p_id` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.property_image: ~2 rows (approximately)
/*!40000 ALTER TABLE `property_image` DISABLE KEYS */;
INSERT INTO `property_image` (`p_id`, `image`) VALUES
	(2, 'home312.jpg'),
	(2, 'tour1.jpg');
/*!40000 ALTER TABLE `property_image` ENABLE KEYS */;

-- Dumping structure for table daily_rent.property_type
DROP TABLE IF EXISTS `property_type`;
CREATE TABLE IF NOT EXISTS `property_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `create_date` varchar(10) DEFAULT NULL,
  `create_by` smallint(6) DEFAULT NULL,
  `status` bit(1) DEFAULT b'1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.property_type: ~8 rows (approximately)
/*!40000 ALTER TABLE `property_type` DISABLE KEYS */;
INSERT INTO `property_type` (`id`, `code`, `title`, `image`, `create_date`, `create_by`, `status`) VALUES
	(1, 'PRO-1', 'beer', 'fa fa-beer', '09-02-2016', 1, b'1'),
	(2, 'PRO-2', 'wifi', 'fa fa-wifi', '09-02-2016', 1, b'1'),
	(3, 'PRO-3', 'Restaurant', 'fa fa-cutlery', '09-02-2016', 1, b'1'),
	(4, 'PRO-4', 'Coffee', 'fa fa-coffee', '09-02-2016', 1, b'1'),
	(5, 'PRO-5', 'asd', 'fa fa-glass', '17-02-2016', 1, b'1'),
	(6, 'PRO-6', 'aaaaaaaaaaaaaaaaaaaa', 'fa fa-glass', '17-02-2016', 1, b'1'),
	(7, 'PRO-7', 'ssssssssssssss', 'fa fa-glass', '17-02-2016', 1, b'1'),
	(8, 'PRO-8', 'ddddddddddddddd', 'fa fa-glass', '17-02-2016', 1, b'1');
/*!40000 ALTER TABLE `property_type` ENABLE KEYS */;

-- Dumping structure for table daily_rent.reservation
DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cus_detail` varchar(255) DEFAULT NULL,
  `tran_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.reservation: ~0 rows (approximately)
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` (`id`, `cus_detail`, `tran_id`, `order_id`, `status`) VALUES
	(1, '{"username":"Full name","country_id":"200","address":"Address","city":"City","phone":"0789654123","email":"gowtham@itmartx.com"}', NULL, 'rDqOKxQd', NULL);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Dumping structure for table daily_rent.reservation_detail
DROP TABLE IF EXISTS `reservation_detail`;
CREATE TABLE IF NOT EXISTS `reservation_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `re_id` int(10) NOT NULL DEFAULT '0',
  `r_id` int(10) DEFAULT NULL,
  `no_of_room` int(10) DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.reservation_detail: ~3 rows (approximately)
/*!40000 ALTER TABLE `reservation_detail` DISABLE KEYS */;
INSERT INTO `reservation_detail` (`id`, `re_id`, `r_id`, `no_of_room`, `start_date`, `end_date`, `price`) VALUES
	(1, 1, 2, 1, '2016-02-16', '2016-02-17', 25000),
	(2, 1, 21, 1, '2016-02-16', '2016-02-17', 25000),
	(3, 1, 8, 3, '2016-02-16', '2016-02-17', 30000);
/*!40000 ALTER TABLE `reservation_detail` ENABLE KEYS */;

-- Dumping structure for table daily_rent.rooms
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) DEFAULT NULL,
  `no_of_room` int(10) DEFAULT NULL,
  `max_allow` int(10) DEFAULT NULL,
  `child` int(10) DEFAULT NULL,
  `booked_room` int(10) DEFAULT '0',
  `price` double DEFAULT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `dil` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.rooms: ~20 rows (approximately)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `p_id`, `no_of_room`, `max_allow`, `child`, `booked_room`, `price`, `feature`, `title`, `start_date`, `end_date`, `dil`) VALUES
	(1, 1, 1, 2, 1, NULL, 5000, '1,3', '2 bed rooms', '0000-00-00', '0000-00-00', 0),
	(2, 2, 5, 2, NULL, 1, 25000, '1,2', 'Luxury room 1 ', '2016-02-14', '2016-02-18', 0),
	(3, 3, 2, 4, NULL, 0, 10000, '2,3', 'Luxury room 2', '2016-01-12', '2016-01-18', 0),
	(8, 4, 3, 3, NULL, 0, 30000, '3,4', 'Luxury room 3', '2016-01-12', '2016-01-12', 0),
	(9, 5, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(10, 6, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(11, 7, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(12, 8, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(13, 9, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(14, 10, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(15, 11, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(16, 12, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(17, 13, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(18, 14, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(19, 14, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, NULL, 0),
	(20, 14, 5, 2, NULL, 0, 25000, '1,3', 'Luxury room 4', NULL, '0000-00-00', 0),
	(21, 2, 5, 2, NULL, 0, 25000, '1,2', 'Luxury room 1 ', NULL, NULL, 0),
	(22, 1, 1, 3, 1, NULL, 5000, '1,3', '3 bed rooms', '0000-00-00', '0000-00-00', 0),
	(23, 1, 1, 4, 1, NULL, 5000, '1,3', 'king bed rooms', '0000-00-00', '0000-00-00', 0),
	(24, 15, 0, 0, NULL, NULL, 0, '1', 'asd', '0000-00-00', '0000-00-00', 0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Dumping structure for table daily_rent.slider
DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.slider: ~3 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`image`) VALUES
	('slide18.jpg'),
	('switzerland.jpg'),
	('beach.jpg');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Dumping structure for table daily_rent.subscribe
DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table daily_rent.subscribe: ~0 rows (approximately)
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
INSERT INTO `subscribe` (`id`, `email`) VALUES
	(1, 'asd@asd.com');
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;

-- Dumping structure for table daily_rent.user_tab
DROP TABLE IF EXISTS `user_tab`;
CREATE TABLE IF NOT EXISTS `user_tab` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) DEFAULT 'user0001',
  `type` tinyint(4) DEFAULT '1',
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` tinyint(4) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table daily_rent.user_tab: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_tab` DISABLE KEYS */;
INSERT INTO `user_tab` (`id`, `code`, `type`, `name`, `password`, `date`, `last_update`, `user_id`, `status`) VALUES
	(1, 'user0001', 1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2015-12-04 11:14:17', '2015-12-04 11:14:17', 0, 1);
/*!40000 ALTER TABLE `user_tab` ENABLE KEYS */;

