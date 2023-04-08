-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 03:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(20) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `merk`, `tipe`, `deskripsi`, `harga`, `image`) VALUES
(9, 'Acer', 'Extensa EX215-52-30U', 'Acer Extensa EX215-52-30U3 adalah laptop dengan processor Intel Core i3 1005G1 , memory 4 Gb, Harddisk 1 TB , layar 15,6” dan dilengkapi  windows 10. Laptop ini memiliki numeric keypad dan didesign dengan model yang stylish dan dibuat lebih tipis agar lebih ringan.', 'Rp. 6.300.000', 'images/uPs4GsfvDQxL8JjtBxsRLCfMrs7nhV3aYJ2drUjK.jpg'),
(10, 'Acer', 'Extensa Ex215-54', 'Acer Extensa Ex215-54-54Q5 adalah laptop yang menggunakan processor Intel Core i5 generasi ke 11 yaitu Intel Core i5 1135G7 , memiliki memory DDR4 8 Gb , SSD 512 Gb , serta terintegrasi dengan grafik card Intel Iris Xe serta layar 15,6” Full HD .', 'Rp. 7.400.000', 'images/cinDVz6KDXuyk3KQZTSvBI8FijqZ4GyZOyuIZCmD.jpg'),
(11, 'Asus', 'Vivobook A1400Ea-Vips351', 'Laptop dengan processor Intel Core i3 generasi ke 11 , memory DDR4 8 Gb, SSD 512 Gb, Layar 14” Full HD IPS 1920 x 1080, dilengkapi  windows 11 home dan Microsoft office home & Student 2021 asli.', 'Rp 7.250.000', 'images/GsJVZhUrYumZyZuKJUW1CZg1TaMtAdvC1K9RH1lL.jpg'),
(14, 'Lenovo', 'Ideapad Slim 1 14AMN7', 'Lenovo Ideapad Slim 1 14AMN7 adalah laptop dengan processor AMD Ryzen 5 7520u , memory 8 Gb DDR4, SSD 512 Gb, layar 14” Full HD 1920 x 1080 , terintegrasi dengan AMD Radeon Grafik dan terdapat operating system windows 11 home asli serta microsoft office home & student 2021 asli.', 'Rp 8.600.000', 'images/c4mBxtawWAlGd5LBqugZRy9BRJwzN3NjOicmbfPQ.jpg'),
(15, 'Lenovo', 'Ideapad Slim 5-14ABA7', 'Lenovo Ideapad Slim 5-14ABA7 dengan processor AMD Ryzen 5 5625u adalah Laptop processor generasi ke 5 , yang memakai memory 16 Gb DDR4, SSD 512 Gb, layar 14” IPS Full HD 1920 x 1080 dan terdapat windows 11 home asli dan microsoft office home & student 2021 asli.', 'Rp 11.500.000', 'images/ZCgi3Q1Xk1HODxFYqekP6P6hBWjskgEGFPwTmZ6y.jpg'),
(16, 'HP', 'Pavilion x360 14-Ek0115tu', 'HP Pavilion x360 14-Ek0115tu adalah laptop 2 in 1 , yang dapat dilipat 360° dengan layar 14” Full HD Touch screen , memakai processor Intel Core i5 1235u , memory DDR4 8 Gb, SSD 512 Gb, dan dilengkapi operating system windows 11 home dan Microsoft office home & Student 2021 asli.', 'Rp 12.100.000', 'images/JXP1kVHV1Tlo0nF1UfwtxfirbVJ8xVCyCTEamRKJ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Iif Alifah', 'iifalifah08@gmail.com', '$2y$10$BeElyNs1n/OX.nrxAVtSQO31N/Ozwfk7TdxU8KV2aJEdyY4El9FNq', NULL, '2023-04-06 02:58:50', '2023-04-06 02:58:50', 1),
(3, 'Nanda', 'nanda17@gmail.com', '$2y$10$TmCjvDsFzsdKegXJDj9J1.hslxH.KSKwV1MnpH6wND2Q3tKnZWMGm', NULL, '2023-04-06 03:02:28', '2023-04-06 03:02:28', 0),
(5, 'Adel', 'adel@gmail.com', '$2y$10$Cyys/4eyLRmWFCUTRjHb5uZOeVqs.cWYn1BJ3EGMAYEmVJYZrYqIG', NULL, '2023-04-06 10:26:23', '2023-04-06 10:26:23', 0),
(6, 'Maysarah', 'Maysarah@gmail.com', '$2y$10$eXXB.GpreXfczgBnfAXGcO4ZRMYw.BRJ4r3bfblIaSp4GI6QyHK/u', NULL, NULL, NULL, 0),
(7, 'cici', 'cici1@gmail.com', '$2y$10$whyTVe97EUX7beUIhsXWA./axj9IaeegIMwS3Q..xwOTpfwpTKqKy', NULL, NULL, NULL, 0),
(8, 'Iif', 'iif@gmail.com', '$2y$10$U78gXsrDZ0n4H9MjbfeLhOaXHYWsVFG08OIAj56KMY74FjYIJuE2.', NULL, '2023-04-07 16:34:44', '2023-04-07 16:34:44', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
