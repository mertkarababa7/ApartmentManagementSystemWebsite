-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Oca 2021, 16:12:57
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `apartment`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `head` varchar(25) NOT NULL,
  `details` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `mandatory` varchar(25) NOT NULL,
  `openedDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `announcement`
--

INSERT INTO `announcement` (`id`, `Block`, `head`, `details`, `time`, `mandatory`, `openedDate`) VALUES
(4, 'B', 'Meeting for security', 'We need to talk about sec', '18-20', 'YES', '2020-12-30'),
(5, 'A', 'Pool party', 'WE HAVE A POOL PARTY FOR ', '10-12', 'NO', '2020-12-30'),
(6, 'B', 'Meeting', 'Talk for animals', '18-20', 'YES', '2021-01-01'),
(7, 'B', 'Meeting', 'Talk for animals', '14-16', 'YES', '2021-01-02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `door_number` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `people` varchar(25) NOT NULL,
  `deposit` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `CustomerPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `surname`, `door_number`, `Block`, `date`, `email`, `phone_number`, `people`, `deposit`, `user_name`, `CustomerPassword`) VALUES
(102, 'mert2', 'mert2', 'B-5', 'B', '2021-01-04', 'mert2', '12512', '2', 'unpaid', 'merto', '$2y$10$KB8LsgM8HA3tLyeG9KLg2OtqzoYElYMIU7BxPlU0CZHZ2rBTNDgE.'),
(103, 'merve', 'merve', 'A-11', 'A', '2021-01-04', '123123', '123123', '2', 'paid', 'merto', '$2y$10$9ceV.bOaqNN.xX21mHyi0e7NB/ZNm9SVNM0mrk1fTPqJeGx67IamS'),
(104, 'berrin2', 'berrin2', 'A-9', 'A', '2021-01-05', 'berrin2@gmail.com', '0553155', '1', 'paid', 'mert', '$2y$10$umLwNXx9NqRFNEIM7ntspOGrLif/kK0Jdhrg./a3qvSqtKmvRFHBy'),
(1111, 'mert3', 'mert2 ', 'A-122', 'A', 'MERT', 'MERT ', 'M123', '5', '123', 'mert', '$2y$10$9ceV.bOaqNN.xX21mHyi0e7NB/ZNm9SVNM0mrk1fTPqJeGx67IamS'),
(1112, 'serkan', 'serkan', 'B-9', 'B', '2021-01-05', 'serkan', '05331221', '1', 'paid', 'merto', '$2y$10$jcCpGA0X/J9UoxBRzqxUm.Wo24AW6YTmczlUGGKrLmt3nOBwuwDY2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `expense` varchar(25) NOT NULL,
  `spent` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `date` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `expenses`
--

INSERT INTO `expenses` (`id`, `expense`, `spent`, `Block`, `Details`, `date`, `user_name`) VALUES
(15, '3333', '2222', 'A', 'Clean', '2021-01-01', 'mert'),
(111, '5555', '3333', 'B', 'Electric repair', '111', 'mert'),
(112, '5000', '', 'A', 'Pool repair', '2021-01-04', 'mert'),
(113, '10000', '', 'B', 'Paint', '2021-01-04', 'mert'),
(114, '1250', '250', 'B', 'Elevator repair', '2021-01-05', 'Mert');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `flathistory`
--

CREATE TABLE `flathistory` (
  `id` int(11) NOT NULL,
  `door_number` varchar(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `MoveIn` varchar(25) NOT NULL,
  `MoveOut` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `flathistory`
--

INSERT INTO `flathistory` (`id`, `door_number`, `customer_id`, `MoveIn`, `MoveOut`, `name`, `surname`, `phoneNumber`) VALUES
(2, 'A-3', '80', '2015-01-03', '2017-01-04', 'Mehmet', 'mehmetoğlu', '0554441'),
(3, 'A-3', '85', '2020-01-03', '2021-01-04', 'mert  ', 'mert  ', '12312'),
(4, 'A-3', '83', '2017-01-03', '2019-01-04', 'Derin', 'Derince', '05554474'),
(5, 'A-3', '85', '2020-01-03', '2021-01-04', 'mert   ', 'mert   ', '12312'),
(6, 'A-2', '86', '2021-01-03', '2021-01-04', '123   ', '123   ', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `flats`
--

CREATE TABLE `flats` (
  `flat_id` int(30) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `door_number` varchar(30) NOT NULL,
  `floor` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `fee` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `flats`
--

INSERT INTO `flats` (`flat_id`, `Block`, `door_number`, `floor`, `price`, `fee`) VALUES
(1, 'A   ', 'A-1', '1                          ', '2468', '125'),
(2, 'A   ', 'A-2', '1        ', '1646', '125'),
(3, 'A   ', 'A-3', '2  ', '1812', '125'),
(4, 'A   ', 'A-4', '2  ', '2992', '125'),
(5, 'A   ', 'A-5', '3 ', '1975', '125'),
(6, 'A   ', 'A-6', '3 ', '1975', '125'),
(7, 'A   ', 'A-7', '4 ', '1975', '125'),
(8, 'A   ', 'A-8', '4 ', '1975', '125'),
(9, 'A   ', 'A-9', '5 ', '1975', '125'),
(10, 'A   ', 'A-10', '5 ', '1975', '125'),
(11, 'A   ', 'A-11', '6 ', '1975', '125'),
(12, 'A   ', 'A-12', '6    ', '1975', '125'),
(20, 'B ', 'B-1', '1 ', '1320', '255'),
(21, 'B ', 'B-2', '1 ', '1320', '255'),
(22, 'B ', 'B-3', '2 ', '1320', '255'),
(23, 'B ', 'B-4', '2   ', '1500', '255'),
(24, 'B ', 'B-5', '3  ', '1500', '255'),
(31, 'A   ', 'A-15', '5', '1482', '125'),
(40, 'A   ', 'A-16', '5', '1820', '125'),
(41, 'B ', 'B-9', '4', '750', '255'),
(42, 'B ', 'B-10', '5', '1350', '255'),
(43, 'B ', 'B-12', '6', '1750', '255'),
(44, 'B ', 'B-19', '7', '255', '255');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `job` varchar(25) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL,
  `Details` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `staff`
--

INSERT INTO `staff` (`id`, `name`, `Block`, `job`, `phoneNumber`, `Details`) VALUES
(1, 'Mert', 'A', 'Security', '05555555', '08:00--18.00'),
(2, 'Ahmet', 'A', 'Security', '055444333', '18.00--24.00'),
(5, 'veli', 'A', 'security', '05555512', '24:00--08:00'),
(6, 'Muhammed', 'A', 'Cleaner', '053332211', '08--18:00'),
(7, 'Serkan', 'B', 'Cleaner', '053312', 'ALL THE TIME');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `transaction`
--

CREATE TABLE `transaction` (
  `id` int(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `door_number` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `transaction`
--

INSERT INTO `transaction` (`id`, `customer_id`, `door_number`, `date`, `amount`, `name`, `surname`, `Block`) VALUES
(560, '93', 'A-3', '2021-01-04', '1726', 'berrin', 'karababa', 'A '),
(561, '95', 'B-1', '2021-01-04', '1320', 'b mert', 'b mert', 'B '),
(562, '102', 'B-5', '2021-01-04', '1500', 'mert2', 'mert2', 'B '),
(563, '1112', 'B-9', '2021-01-05', '750', 'serkan', 'serkan', 'B '),
(564, '103', 'A-11', '2021-01-05', '1975', 'merve', 'merve', 'A   ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `transactionexpenses`
--

CREATE TABLE `transactionexpenses` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `expid` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `details` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `transactionexpenses`
--

INSERT INTO `transactionexpenses` (`id`, `customer_id`, `expid`, `date`, `amount`, `details`, `name`, `surname`, `Block`, `user_name`) VALUES
(1242, '92', '113', '2021-01-04', '2500.0000', 'Paint', 'beren', 'kotanlı', 'A', 'merto'),
(1244, '93', '112', '2021-01-04', '1250.0000', 'Repair', 'berrin', 'karababa', 'A', 'merto'),
(1247, '103', '15', '2021-01-05', '1111.0000', 'Clean', 'merve', 'merve', 'A', 'merto');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `transactionfee`
--

CREATE TABLE `transactionfee` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `Block` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `transactionfee`
--

INSERT INTO `transactionfee` (`id`, `customer_id`, `date`, `amount`, `name`, `surname`, `Block`) VALUES
(1, '74', '2020-12-30', '200', 'merto', 'merto', 'B '),
(6, '86', '2021-01-04', '33', '123', '123', 'A '),
(7, '1112', '2021-01-05', '255', 'serkan', 'serkan', 'B '),
(8, '103', '2021-01-05', '125', 'merve', 'merve', 'A   ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNumber` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `phoneNumber`, `email`) VALUES
(89, 'mert', '$2y$10$oL/gshNwgw60I5c0zCQy0uWz3qxJ/v06oEWRNzVtLY/YgL6BGMo1e', 'mert', '5333111', 'deneme@gmail'),
(90, 'merto', '$2y$10$N8cYDWP.v6ehB6P5k92MN.Wox489CAZ8tcWqhgAbkDhsxpU9oZ5QC', 'merto', '05318627750', 'mertocan661@gmail.com'),
(91, 'serkan', '$2y$10$uioLJcOqpIK/9zJVMwUQHepvFfhy7hMJezb0zj/CeMSCnj5EMPYMm', 'serkan', '055531', 'serkan@gmail');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Tablo için indeksler `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `flathistory`
--
ALTER TABLE `flathistory`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`flat_id`),
  ADD UNIQUE KEY `door_number` (`door_number`);

--
-- Tablo için indeksler `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `transactionexpenses`
--
ALTER TABLE `transactionexpenses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `transactionfee`
--
ALTER TABLE `transactionfee`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- Tablo için AUTO_INCREMENT değeri `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Tablo için AUTO_INCREMENT değeri `flathistory`
--
ALTER TABLE `flathistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `flats`
--
ALTER TABLE `flats`
  MODIFY `flat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=565;

--
-- Tablo için AUTO_INCREMENT değeri `transactionexpenses`
--
ALTER TABLE `transactionexpenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1248;

--
-- Tablo için AUTO_INCREMENT değeri `transactionfee`
--
ALTER TABLE `transactionfee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
