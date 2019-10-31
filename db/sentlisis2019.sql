-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 05:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentlisis2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE `analysis` (
  `id_analysis` int(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tweet` text NOT NULL,
  `sentiment` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id_analysis`, `topic`, `username`, `tweet`, `sentiment`, `timestamp`) VALUES
(1, 'Robusta', '`citaravinska`', '`ga lagi2 minum robusta susu sebelum makan`', 'positif', '2019-09-01 14:47:39'),
(2, 'Robusta', '`maybeitseve`', '`Dua hari minum kopi yg keras dan rata2 robusta.`', 'negatif', '2019-09-01 14:47:40'),
(3, 'Robusta', '`luc_piero`', '`@t__ant Kebanyakan disini kopi berjenis robusta`', 'positif', '2019-09-01 14:47:40'),
(4, 'Robusta', '`luc_piero`', '`@t__ant ???? jenis apa kopinya mak robusta apa arabica`', 'positif', '2019-09-01 14:47:40'),
(5, 'Robusta', '`Dewisubaryanti_`', '`RT @anggianpasaribu: nyobain ngopi di KAO cafe asik banget tempatnya apalagi dipake buat ngopi sore. aku tadi pesen japanese iced beans rob…`', 'positif', '2019-09-01 14:47:40'),
(6, 'Robusta', '`WesandriYusir`', '`ngopi senja kita Lur.. robusta Bengkulu punya... https://t.co/0R8LjDN1DL`', 'positif', '2019-09-01 14:47:40'),
(7, 'Robusta', '`dobelden`', '`Syuting untuk film dokumenter proses paska panen Robusta Temanggung, bagaimana proses kopi yang sesuai standar untu… https://t.co/0Y8vOVNxf5`', 'positif', '2019-09-01 14:47:40'),
(8, 'Robusta', '`frqnwahidinadam`', '`Belagu ni perut minum robusta langsung sakit perut`', 'negatif', '2019-09-01 14:47:40'),
(9, 'Robusta', '`oking_g_miharja`', '`Memperkenalkan Produk Kopi dengan SPESIFIKASI berikut: -Nama: Kopi Bakas.\n(Bakas=Lanang=Pria).\n-Merk: Sekala Brak.… https://t.co/YOX5ygnv4W`', 'positif', '2019-09-01 14:47:40'),
(10, 'Robusta', '`alyairdnaaa`', '`RT @RobustaCaramel: @RobustaCaramel mai pakat try kelainan Caramel Milk ???? #TamanPandan #alorstaq #Robusta #CaramelMilk #GreenTeaCaramel #Ab…`', 'positif', '2019-09-01 14:47:40'),
(19, 'Arabica', '`silmy_afiqa`', '`RT @agrofood_plant: Arabica Gayo , Dunia kopi semakin hari semakin berkembang. Para penikmat kopi kini sudah mulai bisa membedakan mana kop…`', 'negatif', '2019-09-01 14:54:42'),
(20, 'Arabica', '`agrofood_plant`', '`@Rasyeed3 Jenis Kopi umumnya dari Varian Arabica`', 'positif', '2019-09-01 14:54:42'),
(21, 'Arabica', '`agrofood_plant`', '`Arabica Gayo , Dunia kopi semakin hari semakin berkembang. Para penikmat kopi kini sudah mulai bisa membedakan mana… https://t.co/JCraa5cqvz`', 'negatif', '2019-09-01 14:54:42'),
(22, 'Arabica', '`KopiTjengkir`', '`Selamat menunaikan ibadah ngopi malam...salam dari arabica Arjuno https://t.co/LrGUHvyiY8`', 'positif', '2019-09-01 14:54:42'),
(23, 'Arabica', '`luc_piero`', '`@t__ant ???? jenis apa kopinya mak robusta apa arabica`', 'positif', '2019-09-01 14:54:42'),
(24, 'Arabica', '`ArioSimplisio`', '`Hari ini iseng2 bikin japanese iced coffee\n\nRules number one\nBeansnya harus arabica?\n\nColek kak @lailadimyati bener ga kak?????????????`', 'positif', '2019-09-01 14:54:42'),
(25, 'Arabica', '`gnsemerugc`', '`#KhilafahWillBeBack\n#MomentumHijrahSyariahKaffah\n#HijrahMenujuIslamKaffah\n#WeWantKhilafah\nNasi rawon kopi arabica https://t.co/DlTxhnnnn9`', 'positif', '2019-09-01 14:54:42'),
(26, 'Arabica', '`Gregorius_Johnz`', '`Kopi Srengseng Aceh @ Na Coffe Premium :)\n\n#nacoffe #nacoffeepremium #kopiaceh #kopisrengseng #aceh #coffe #arabica https://t.co/km1Ge1GWiI`', 'positif', '2019-09-01 14:54:42'),
(27, 'Cappucino', '`EmmalysaTyta`', '`Aku pakai pudding cokelat nutrijell... aku tambahin Gooday cappucino atau apa aja sesuka anda yha...  asal jgn kopi… https://t.co/zekMw0oEjZ`', 'positif', '2019-09-01 14:55:16'),
(28, 'Cappucino', '`kikojer`', '`Hidup di perkampungan itu enak, gue bisa makan takoyaki setiap hari, meskipun 1 nya 1000, goreng pake minyak dan is… https://t.co/9G8tRfJcQn`', 'negatif', '2019-09-01 14:55:16'),
(29, 'Cappucino', '`Hit_Cappucino`', '`Besok lagi lanjut cerita br dikumpulin foto2 dan bon nya hahaha...\n\nBaru segini dulu yg inget\nSisanya besok\n\nNite ????… https://t.co/gAfYG8D6TR`', 'positif', '2019-09-01 14:55:16'),
(30, 'Cappucino', '`MINJOOster`', '`@JUNGGOOKster Sama-sama, kak Kala! \n\nHahaha. Masih aja bahas cappucino. Enggak kok gak ngasih kopi. Permen aja biar bisa dibawa kemana mana.`', 'positif', '2019-09-01 14:55:16'),
(31, 'Cappucino', '`KalimayaBaskara`', '`#NA Ketika Kau Menyapa by @MarcellSiahaan // Pacar Rahasia by Cappucino // Magic by @LYLAINDONESIA on #IndoMostKBFM`', 'netral', '2019-09-01 14:55:16'),
(32, 'Cappucino', '`barry_cappucino`', '`RT @kompascom: Bagi Kamu yang berdomisisli di luar Aceh, tak ada salahnya mencoba mengolah memek sendiri. https://t.co/79qa9MJ8RW`', 'positif', '2019-09-01 14:55:16'),
(33, 'Cappucino', '`X1ENSANGIE`', '`@VampireYaoi Bolehlah, pesen cappucino satu ya`', 'positif', '2019-09-01 14:55:16'),
(34, 'Cappucino', '`wynnetalitha`', '`besok masuk setengah 6 pagi, asistensi praktikum , pre-test\nmalemnya ttp aja jauh² ke ungaran demi moccafloat n cappucino jelly????`', 'netral', '2019-09-01 14:55:16'),
(35, 'Cappucino', '`leadtaemin`', '`Cinta itu seperti cappucino,paling enak diminum saat panas tapi resikonya cpet abis. kalo gamau cepet abis minumnya pelan2 tapi cepet dingin`', 'positif', '2019-09-01 14:55:16'),
(36, 'Cappucino', '`Hit_Cappucino`', '`@bayu_joo Bener ugha\n\nNnt dicoba deh`', 'positif', '2019-09-01 14:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'gilang', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id_analysis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id_analysis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
