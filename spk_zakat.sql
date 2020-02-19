-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2020 pada 11.40
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_zakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Wirna Lestari', 1),
(2, 'kepala', '21232f297a57a5a743894a0e4a801fc3', 'Kepala Baznas', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonbeasiswa`
--

CREATE TABLE IF NOT EXISTS `calonbeasiswa` (
  `nik_mhs` varchar(10) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `perguruan_tinggi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nagari` varchar(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calonbeasiswa`
--

INSERT INTO `calonbeasiswa` (`nik_mhs`, `nama_mhs`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `perguruan_tinggi`, `alamat`, `nagari`, `kecamatan`) VALUES
('36', 'Hic vel ut reiciendi', 'Perempuan', 'Fugiat fugiat magna', '1973-03-06', 'Fugiat et sed labor', 'Quod ut est iusto co', 'Ujuang Gading', 'Sungai Aur'),
('81', 'Omnis id doloremque', 'Perempuan', 'Reprehenderit quas r', '1987-05-17', 'Ipsam et iusto volup', 'Dolorem ut quasi eli', 'Ranah Batahan', 'Pasaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `himpunan`
--

CREATE TABLE IF NOT EXISTS `himpunan` (
  `id_himpunan` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `namahimpunan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `himpunan`
--

INSERT INTO `himpunan` (`id_himpunan`, `id_kriteria`, `namahimpunan`, `nilai`, `keterangan`) VALUES
(26, 1, '2.50 <= IPK <= 3.00', '50', 'Cukup'),
(27, 1, '3.00 <= IPK <= 3.50', '75', 'Baik'),
(28, 1, 'IPK > 3.50', '100', 'Sangat Baik'),
(29, 2, 'Rp. 0 / Tidak ada pekerjaan', '25', 'Sangat Baik'),
(30, 2, 'Rp. 1.500.000 < Rp. 2.500.000', '50', 'Baik'),
(31, 2, 'Rp. 2.500.000 < Rp. 5.000.000', '75', 'Cukup'),
(32, 2, '> Rp. 5.000.000', '100', 'Kurang'),
(33, 3, 'Semester 1 - 2', '25', 'Kurang'),
(34, 3, 'Semester 3 - 4', '50', 'Cukup'),
(35, 3, 'Semester 5 - 6', '75', 'Baik'),
(36, 3, 'Semester 7 - 8', '100', 'Sangat Baik'),
(37, 4, 'Tidak Memiliki Keterangan Miskin', '25', 'Tidak'),
(40, 4, 'Memiliki Keterangan Miski', '100', 'Ada'),
(41, 5, '> 21 Tahun', '25', 'Kurang'),
(42, 5, '20 - 21 Tahun', '50', 'Cukup'),
(43, 5, '18 - 19 Tahun', '75', 'Baik'),
(44, 5, 'Usia < 18 Tahun', '100', 'Sangat Baik'),
(45, 1, 'IPK <2.50', '25', 'Kurang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `id_klasifikasi` int(5) NOT NULL,
  `nik_mhs` varchar(10) NOT NULL,
  `keterangan_miskin` double NOT NULL,
  `nilai_ipk` double NOT NULL,
  `penghasilan_ortu` double NOT NULL,
  `semester` double NOT NULL,
  `usia` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `nik_mhs`, `keterangan_miskin`, `nilai_ipk`, `penghasilan_ortu`, `semester`, `usia`) VALUES
(27, '81', 100, 100, 75, 100, 100),
(28, '36', 100, 75, 100, 50, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `namakriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `namakriteria`, `atribut`) VALUES
(1, 'Nilai IPK', 'Benefit'),
(2, 'Penghasilan Ortu', 'Cost'),
(3, 'Semester', 'Benefit'),
(4, 'Keterangan Miskin', 'Benefit'),
(5, 'Usia', 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkingan`
--

CREATE TABLE IF NOT EXISTS `perangkingan` (
  `rank` int(11) NOT NULL,
  `nik_mhs` varchar(10) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perangkingan`
--

INSERT INTO `perangkingan` (`rank`, `nik_mhs`, `nilai`) VALUES
(1, '36', '13.5'),
(2, '81', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `calonbeasiswa`
--
ALTER TABLE `calonbeasiswa`
  ADD PRIMARY KEY (`nik_mhs`);

--
-- Indexes for table `himpunan`
--
ALTER TABLE `himpunan`
  ADD PRIMARY KEY (`id_himpunan`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD KEY `nik_mhs` (`nik_mhs`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD PRIMARY KEY (`rank`),
  ADD KEY `nik_mhs` (`nik_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `himpunan`
--
ALTER TABLE `himpunan`
  MODIFY `id_himpunan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `perangkingan`
--
ALTER TABLE `perangkingan`
  MODIFY `rank` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `klasifikasi_ibfk_1` FOREIGN KEY (`nik_mhs`) REFERENCES `calonbeasiswa` (`nik_mhs`);

--
-- Ketidakleluasaan untuk tabel `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD CONSTRAINT `perangkingan_ibfk_1` FOREIGN KEY (`nik_mhs`) REFERENCES `calonbeasiswa` (`nik_mhs`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
