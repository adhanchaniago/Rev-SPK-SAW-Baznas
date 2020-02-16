-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	'Wirna Lestari',	1),
(2,	'kepala',	'21232f297a57a5a743894a0e4a801fc3',	'Kepala Baznas',	2);

DROP TABLE IF EXISTS `calonbeasiswa`;
CREATE TABLE `calonbeasiswa` (
  `nik_mhs` varchar(10) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `perguruan_tinggi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nagari` varchar(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  PRIMARY KEY (`nik_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `calonbeasiswa` (`nik_mhs`, `nama_mhs`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `perguruan_tinggi`, `alamat`, `nagari`, `kecamatan`) VALUES
('36',	'Hic vel ut reiciendi',	'Perempuan',	'Fugiat fugiat magna',	'1973-03-06',	'Fugiat et sed labor',	'Quod ut est iusto co',	'Ujuang Gading',	'Sungai Aur'),
('81',	'Omnis id doloremque',	'Perempuan',	'Reprehenderit quas r',	'1987-05-17',	'Ipsam et iusto volup',	'Dolorem ut quasi eli',	'Ranah Batahan',	'Pasaman');

DROP TABLE IF EXISTS `himpunan`;
CREATE TABLE `himpunan` (
  `id_himpunan` int(5) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(5) NOT NULL,
  `namahimpunan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_himpunan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `himpunan` (`id_himpunan`, `id_kriteria`, `namahimpunan`, `nilai`, `keterangan`) VALUES
(26,	1,	'2.50 <= IPK <= 3.00',	'50',	'Cukup'),
(27,	1,	'3.00 <= IPK <= 3.50',	'75',	'Baik'),
(28,	1,	'IPK > 3.50',	'100',	'Sangat Baik'),
(29,	2,	'Rp. 0 / Tidak ada pekerjaan',	'25',	'Sangat Baik'),
(30,	2,	'Rp. 1.500.000 < Rp. 2.500.000',	'50',	'Baik'),
(31,	2,	'Rp. 2.500.000 < Rp. 5.000.000',	'75',	'Cukup'),
(32,	2,	'> Rp. 5.000.000',	'100',	'Kurang'),
(33,	3,	'Semester 1 - 2',	'25',	'Kurang'),
(34,	3,	'Semester 3 - 4',	'50',	'Cukup'),
(35,	3,	'Semester 5 - 6',	'75',	'Baik'),
(36,	3,	'Semester 7 - 8',	'100',	'Sangat Baik'),
(37,	4,	'Tidak Memiliki Keterangan Miskin',	'25',	'Tidak'),
(40,	4,	'Memiliki Keterangan Miski',	'100',	'Ada'),
(41,	5,	'> 21 Tahun',	'25',	'Kurang'),
(42,	5,	'20 - 21 Tahun',	'50',	'Cukup'),
(43,	5,	'18 - 19 Tahun',	'75',	'Baik'),
(44,	5,	'Usia < 18 Tahun',	'100',	'Sangat Baik'),
(45,	1,	'IPK <2.50',	'25',	'Kurang');

DROP TABLE IF EXISTS `klasifikasi`;
CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT,
  `nik_mhs` varchar(10) NOT NULL,
  `keterangan_miskin` double NOT NULL,
  `nilai_ipk` double NOT NULL,
  `penghasilan_ortu` double NOT NULL,
  `semester` double NOT NULL,
  `usia` double NOT NULL,
  PRIMARY KEY (`id_klasifikasi`),
  KEY `nik_mhs` (`nik_mhs`),
  CONSTRAINT `klasifikasi_ibfk_1` FOREIGN KEY (`nik_mhs`) REFERENCES `calonbeasiswa` (`nik_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `klasifikasi` (`id_klasifikasi`, `nik_mhs`, `keterangan_miskin`, `nilai_ipk`, `penghasilan_ortu`, `semester`, `usia`) VALUES
(27,	'81',	100,	100,	75,	100,	100),
(28,	'36',	100,	75,	100,	50,	100);

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,
  `namakriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kriteria` (`id_kriteria`, `namakriteria`, `atribut`) VALUES
(1,	'Nilai IPK',	'Benefit'),
(2,	'Penghasilan Ortu',	'Cost'),
(3,	'Semester',	'Benefit'),
(4,	'Keterangan Miskin',	'Benefit'),
(5,	'Usia',	'Benefit');

DROP TABLE IF EXISTS `perangkingan`;
CREATE TABLE `perangkingan` (
  `rank` int(11) NOT NULL AUTO_INCREMENT,
  `nik_mhs` varchar(10) NOT NULL,
  `nilai` varchar(11) NOT NULL,
  PRIMARY KEY (`rank`),
  KEY `nik_mhs` (`nik_mhs`),
  CONSTRAINT `perangkingan_ibfk_1` FOREIGN KEY (`nik_mhs`) REFERENCES `calonbeasiswa` (`nik_mhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `perangkingan` (`rank`, `nik_mhs`, `nilai`) VALUES
(1,	'36',	'13.5'),
(2,	'81',	'18');

-- 2020-02-16 15:10:30