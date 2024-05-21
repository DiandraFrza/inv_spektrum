-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.44 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table inv_db.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `tgl_kalibrasi` date DEFAULT NULL,
  `kondisi_alat` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table inv_db.barang: ~2 rows (approximately)
INSERT INTO `barang` (`id`, `merk`, `type`, `sn`, `tgl_pembelian`, `tgl_kalibrasi`, `kondisi_alat`, `lokasi`, `created_at`, `updated_at`) VALUES
	(1, 'sdfsafas', 'sdafsa', '123421421', '2024-05-21', '2024-05-25', '23131321', '23131321', '2024-05-20 23:54:51', '2024-05-20 23:54:51'),
	(2, 'sdfdsafsa', 'asa', 'sda', '2024-05-31', '2024-05-31', 'sdadsa', 'dasda', '2024-05-20 23:55:01', '2024-05-20 23:55:01'),
	(3, 'qwetrr', '2133w', '1324311', '2024-06-06', '2024-05-28', 'baik', 'gsgd', '2024-05-21 10:57:05', '2024-05-21 10:57:05');

-- Dumping structure for table inv_db.barang_keluar
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.barang_keluar: ~8 rows (approximately)
INSERT INTO `barang_keluar` (`id`, `id_user`, `waktu`) VALUES
	(1, 1, '2020-04-28 21:47:32'),
	(2, 1, '2020-05-01 04:41:59'),
	(3, 1, '2020-05-01 04:42:55'),
	(4, 1, '2020-05-01 04:55:48'),
	(5, 1, '2020-05-01 21:41:48'),
	(6, 1, '2020-05-01 23:06:34'),
	(7, 1, '2020-05-15 21:43:08'),
	(8, 1, '2020-05-15 23:35:52');

-- Dumping structure for table inv_db.barang_keluar_detail
CREATE TABLE IF NOT EXISTS `barang_keluar_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.barang_keluar_detail: ~10 rows (approximately)
INSERT INTO `barang_keluar_detail` (`id`, `id_barang_keluar`, `id_barang`, `qty`) VALUES
	(1, 1, 1, 5),
	(2, 2, 3, 1),
	(3, 2, 2, 3),
	(4, 3, 2, 2),
	(5, 3, 1, 1),
	(6, 4, 3, 2),
	(7, 5, 2, 870),
	(8, 6, 2, 1),
	(9, 7, 2, 2),
	(10, 8, 4, 30);

-- Dumping structure for table inv_db.barang_masuk
CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_harga` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.barang_masuk: ~11 rows (approximately)
INSERT INTO `barang_masuk` (`id`, `id_user`, `waktu`, `total_harga`) VALUES
	(1, 1, '2020-04-28 21:31:48', 810000),
	(4, 1, '2020-04-30 23:09:47', 65000),
	(5, 1, '2020-04-30 23:13:58', 90000),
	(6, 1, '2020-04-30 23:22:47', 5000),
	(7, 1, '2020-04-30 23:36:31', 50000),
	(8, 1, '2020-04-30 23:37:06', 35000),
	(9, 1, '2020-04-30 23:37:44', 105000),
	(10, 1, '2020-05-01 01:28:29', 45000),
	(11, 1, '2020-05-01 21:35:07', 27000000),
	(12, 1, '2020-05-15 21:29:37', 180000),
	(13, 1, '2020-05-15 23:30:44', 300000);

-- Dumping structure for table inv_db.barang_masuk_detail
CREATE TABLE IF NOT EXISTS `barang_masuk_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.barang_masuk_detail: ~15 rows (approximately)
INSERT INTO `barang_masuk_detail` (`id`, `id_barang_masuk`, `id_barang`, `qty`, `subtotal`) VALUES
	(1, 1, 1, 10, 450000),
	(4, 4, 1, 1, 45000),
	(5, 4, 3, 4, 20000),
	(6, 5, 1, 2, 90000),
	(7, 6, 3, 1, 5000),
	(8, 7, 1, 1, 45000),
	(9, 7, 3, 1, 5000),
	(10, 8, 2, 1, 30000),
	(11, 8, 3, 1, 5000),
	(12, 9, 2, 2, 60000),
	(13, 9, 1, 1, 45000),
	(14, 10, 1, 1, 45000),
	(15, 11, 2, 900, 27000000),
	(16, 12, 1, 4, 180000),
	(17, 13, 4, 60, 300000);

-- Dumping structure for table inv_db.keranjang_keluar
CREATE TABLE IF NOT EXISTS `keranjang_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.keranjang_keluar: ~0 rows (approximately)

-- Dumping structure for table inv_db.keranjang_masuk
CREATE TABLE IF NOT EXISTS `keranjang_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.keranjang_masuk: ~0 rows (approximately)

-- Dumping structure for table inv_db.satuan
CREATE TABLE IF NOT EXISTS `satuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `status` enum('valid','invalid') NOT NULL DEFAULT 'valid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.satuan: ~6 rows (approximately)
INSERT INTO `satuan` (`id`, `nama`, `status`) VALUES
	(1, 'Box', 'valid'),
	(2, 'sachet', 'valid'),
	(3, 'ons', 'valid'),
	(4, 'kilo gram', 'invalid'),
	(5, 'bungkus', 'invalid'),
	(6, 'Kaplet', 'valid');

-- Dumping structure for table inv_db.supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` enum('aktif','non-aktif') NOT NULL DEFAULT 'aktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.supplier: ~5 rows (approximately)
INSERT INTO `supplier` (`id`, `nama`, `email`, `telefon`, `alamat`, `status`) VALUES
	(1, 'Beji Depok', 'bejidpk@gmail.com', '5352355', 'Jawa Barat, Indonesia', 'aktif'),
	(2, 'PT Maju Mundur', 'maju.mundur@korporat.com', '08484844332', 'Jl. Medokan Asri Barat No. 42', 'aktif'),
	(3, 'PT @diandrfrzaa__', 'diandrfrzaa_@gmail.com', '09944233334', 'Singapur', 'aktif'),
	(4, 'PT Poke', 'rtoiimmortal@gmail.com', '9099944423', 'Bandung', 'non-aktif'),
	(5, 'PT Besok Libur', 'asekk@gmail.com', '2888998894', 'Madura Pride', 'aktif');

-- Dumping structure for table inv_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `status` enum('aktif','non-aktif') NOT NULL DEFAULT 'aktif',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table inv_db.user: ~3 rows (approximately)
INSERT INTO `user` (`id`, `nama`, `email`, `password`, `telefon`, `ktp`, `role`, `status`) VALUES
	(1, 'Diandra Firza Nasywan ', 'admin@easywms.com', '$2y$10$s9DCE.rfLqVWoaDdJmZUA.25RZ/mZEs7z3PLLPJ3Ehip2TT49DQ8W', '084554433445', '17081010000', 'admin', 'aktif'),
	(2, 'Azriel Rosadi', 'azriel@gmail.com', '$2y$10$hQ0yF7tGxSEU.a/bvmZKse39olcSIRl8jc7aRzCoTTQOhL/rsBmz6', '1028101821098', '2131314141', '', 'aktif'),
	(3, 'Rayya Alfareza', 'rayatest@gmail.com', '$2y$10$8mrG8G29hMIkzlPDOHzu2.bEymtVDShr5TzOlo1c767/QDE/DftJK', '2345664332', '243564532', '', 'aktif');

-- Dumping structure for trigger inv_db.kurangi_barang
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `kurangi_barang` BEFORE INSERT ON `barang_keluar_detail` FOR EACH ROW BEGIN
	UPDATE barang
	SET qty = qty - NEW.qty
	WHERE id = NEW.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger inv_db.subtotal_keranjang_masuk
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `subtotal_keranjang_masuk` BEFORE INSERT ON `keranjang_masuk` FOR EACH ROW BEGIN
	# ---- Hitung Subtotal ----
	DECLARE harga_barang INT DEFAULT 0;
	SET harga_barang = (SELECT harga FROM barang WHERE id = NEW.id_barang LIMIT 1);

	SET NEW.subtotal = NEW.qty * harga_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger inv_db.tambah_barang
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `tambah_barang` AFTER INSERT ON `barang_masuk_detail` FOR EACH ROW UPDATE barang
SET qty = qty + NEW.qty
WHERE id = NEW.id_barang//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger inv_db.total_harga_masuk
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `total_harga_masuk` AFTER INSERT ON `barang_masuk_detail` FOR EACH ROW BEGIN
	UPDATE barang_masuk
	SET total_harga = total_harga + NEW.subtotal
	WHERE id = NEW.id_barang_masuk;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
