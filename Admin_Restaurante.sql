
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `usuario_reserva_banquetes` (
  `Bbid` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `razon_reserva` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `extra_services` varchar(250) NOT NULL,
  `factura_total` int(12) NOT NULL,
  `pago_pendiente` int(12) NOT NULL,
  `status` int(2) NOT NULL,
  `n_ranuras` int(10) NOT NULL,
  `mbid` int(10) NOT NULL,
  `end_time` time NOT NULL,
  `person` int(12) NOT NULL,
  `menu_plan` int(12) NOT NULL,
  `fecha_reserva` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `banquete_instalación` (
  `Bid` int(10) NOT NULL,
  `Reserva_id` int(10) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `importe_pago` int(10) NOT NULL,
  `fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `banquet_menu` (
  `reserva_id` int(10) NOT NULL,
  `detalles` varchar(2000) NOT NULL,
  `precio` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `banquet_menu` (`reserva_id`, `detalles`, `precio`, `description`) VALUES
(191, '                        Drink-1    Starter        Veggies-1    Paneer(Special)  Kadhi  Pulav  Roti Naan     Ice-Cream_With_Two_Sauce    Soup    Butter-Milk Special-Sweet                        ', 250, ''),
(192, '                            Starter  Salad-2 Farsan  Baked-Dish         Kadhi   Biryani     Paratha      Soup     Special-Sweet                        ', 210, 'Customized Plan'),
(192, '                        Selected Items Here                        ', 210, ''),
(192, '                        Drink-1     Salad-1   Snacks Baked-Dish       Paneer(Special)    Pulav       Sweet(Regular)  Ice-Cream_With_Three_Sauce                                ', 220, ''),
(192, '                        Selected Items Here                        ', 210, ''),
(192, '                        Selected Items Here                        ', 190, ''),
(192, '                        Selected Items Here                        ', 100, ''),
(192, '                        Selected Items Here                        ', 200, ''),
(193, '                        Drink-1    Starter    Snacks    Veggies-1   Paneer Paneer(Special) Dal  Rice                 Butter-Milk                         ', 200, ''),
(193, '                         Drink-2 Soup-1   Salad-1    Baked-Dish   Veggies-1    Paneer(Special) Dal  Rice    Naan     Ice-Cream_With_Two_Sauce      Tea/Coffee                           ', 250, ''),
(193, '                         Drink-2   Starter    Snacks    Veggies-1    Paneer(Special) Dal  Rice   Roti  Tawa-Roti    Ice-Cream_With_Two_Sauce       Chaat  Special-Sweet                        ', 250, ''),
(196, '                        Drink-1    Starter    Snacks    Veggies-1   Paneer Paneer(Special) Dal  Rice                                          ', 200, ''),
(203, '                        Selected Items Here                        ', 260, '');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_menu_plan`
--

CREATE TABLE `banquet_menu_plan` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `menu` varchar(2000) NOT NULL,
  `precio` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_menu_plan`
--

INSERT INTO `banquet_menu_plan` (`id`, `name`, `menu`, `precio`) VALUES
(1, 'Plan 1', 'Any One Soup, One Starter, Greeen Salad, Two Subji(ONE Punjabi, ONE VEG.), DAL, RICE, TWO TYPES OF ROTIES, ONE PLAIN ICE-CREAM, ACCOMPANIMENTS, PAPAD, PICKLE, CHUTNEY', 250),
(2, 'Plan 2', 'Any One Welcome Drink, Choice Of any  Soup, Green Salad, One Farsan, One Sweet(Regular), One Paneer(Special), One Veg.(Special), Dal/Kadhi, Rice/Pulav/Biryani, Two Types Of Roti, Plain Ice-cream, Accompaniments, Papad, Pickle, Chutney', 300),

-- --------------------------------------------------------

--
-- Table structure for table `banquet_plans`
--

CREATE TABLE `banquet_plans` (
  `mbid` int(10) NOT NULL,
  `lista_caracteristicas` varchar(150) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquet_plans`
--

INSERT INTO `banquet_plans` (`mbid`, `lista_caracteristicas`, `plan_name`, `precio`, `img`) VALUES
(3, 'Wedding Sofa, Fulll Decoration', 'Design - 7', 21000, 'plan_image/Rs. 21000.jpeg'),
(10, 'Birhday Decoration', 'Design - 2', 8000, 'plan_image/Rs - 8000.jpeg'),

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `categoria` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `categoria` (`cid`, `name`, `img`) VALUES
(1, 'Soup & Chinese Shorba', 'menu_img/'),


CREATE TABLE `comentario` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `comentarios` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `foid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `mid` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `tipo_orden` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--


--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `priority` int(10) NOT NULL,
  `restaurant_show` varchar(10) NOT NULL,
  `ver_pedido` varchar(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `name`, `image`, `description`, `priority`, `restaurant_show`, `ver_pedido`, `precio`, `tipo`) VALUES
(18, 'Tomato Soup', '', '', 2, 'YES', 'YES', 90, 1),
(213, 'Mineral Water', '', '', 2, 'YES', 'YES', 20, 23),
(214, 'Cold Drink 200ml.', '', '', 2, 'YES', 'YES', 20, 23),
(215, 'Fix Thaali', '', '2 Subji, 3 Butter Roti, Dal Fry, Jeera Rice, Roasted Papad, Butter Milk', 2, 'YES', 'YES', 120, 25),
(216, 'Special Thaali', '', 'Paneer Subji, Veg. Subji, Butter Roti 3 / Tawa Roti 4 / Tandoori Roti 3, Dal Fry, Jeera Rice & Pulao, Sweet, Roasted Papad, Butter Milk, Onion & Pickle', 2, 'YES', 'YES', 140, 25);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_user`
--

CREATE TABLE `restaurant_user` (
  `uid` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `foid` int(10) NOT NULL,
  `factura_total` int(12) NOT NULL,
  `date` date NOT NULL,
  `table_no` varchar(10) NOT NULL,
  `order_delivered` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `takeaway_user`
--

CREATE TABLE `pedido_user` (
  `id_pedido` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL,
  `factura_total` int(12) NOT NULL,
  `status` int(2) NOT NULL,
  `time_of_delivery` time NOT NULL,
  `modo_pago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banquet_booking_user`
--
ALTER TABLE `usuario_reserva_banquetes`
  ADD PRIMARY KEY (`Bbid`),
  ADD KEY `mbid` (`mbid`);

--
-- Indexes for table `banquet_installment`
--
ALTER TABLE `banquete_instalación`
  ADD PRIMARY KEY (`Bid`),
  ADD KEY `reserva` (`reserva_id`);

--
-- Indexes for table `banquet_menu`
--
ALTER TABLE `banquet_menu`
  ADD KEY `reserva_id` (`reserva_id`);

--
-- Indexes for table `banquet_menu_plan`
--
ALTER TABLE `banquet_menu_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banquet_plans`
--
ALTER TABLE `banquet_plans`
  ADD PRIMARY KEY (`mbid`);

--
-- Indexes for table `category`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`foid`),
  ADD KEY `user` (`userid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `categoria` (`tipo`);

--
-- Indexes for table `restaurant_user`
--
ALTER TABLE `restaurant_user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `food` (`foid`);

--
-- Indexes for table `takeaway_user`
--
ALTER TABLE `pedido_user`
  ADD PRIMARY KEY (`tuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banquet_booking_user`
--
ALTER TABLE `usuario_reserva_banquetes`
  MODIFY `Bbid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `banquet_installment`
--
ALTER TABLE `banquete_instalación`
  MODIFY `Bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `banquet_menu_plan`
--
ALTER TABLE `banquet_menu_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banquet_plans`
--
ALTER TABLE `banquet_plans`
  MODIFY `mbid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `categoria`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `comentario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `foid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `restaurant_user`
--
ALTER TABLE `restaurant_user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `takeaway_user`
--
ALTER TABLE `pedido_user`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario_reserva_banquetes`
--
ALTER TABLE `usuario_reserva_banquetes`
  ADD CONSTRAINT `mbid` FOREIGN KEY (`mbid`) REFERENCES `banquet_plans` (`mbid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banquet_installment`
--
ALTER TABLE `banquete_instalación`
  ADD CONSTRAINT `reserva` FOREIGN KEY (`reserva_id`) REFERENCES `usuario_reserva_banquetes` (`Bbid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banquet_menu`
--
ALTER TABLE `banquet_menu`
  ADD CONSTRAINT `reserva_id` FOREIGN KEY (`reserva_id`) REFERENCES `usuario_reserva_banquetes` (`Bbid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `mid` FOREIGN KEY (`mid`) REFERENCES `menu` (`mid`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `pedido_user` (`tuid`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`tipo`) REFERENCES `categoria` (`cid`);

--
-- Constraints for table `restaurant_user`
--
ALTER TABLE `restaurant_user`
  ADD CONSTRAINT `food` FOREIGN KEY (`foid`) REFERENCES `food_order` (`foid`);
COMMIT;

