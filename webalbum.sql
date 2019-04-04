-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2019 pada 18.56
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `webalbum`
--
CREATE DATABASE IF NOT EXISTS `webalbum` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webalbum`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ngadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`album_id`, `nama_album`, `keterangan`, `owner`) VALUES
(1, 'album 1', 'sasasasasa', 'bimasm'),
(2, 'album 2', 'sasasasasa', 'bimasm'),
(3, 'album 3', 'asdasdasd', 'bimasm'),
(4, 'album 4', 'sasasasasa', 'bimasm'),
(5, 'album 5', 'asdasdasd', 'bimasm'),
(6, 'album 6', 'asdasdasd', 'bimasm'),
(7, 'album 7', 'sasasasasa', 'bimasm'),
(8, 'album 8', 'sasasasasa', 'bimasm'),
(9, 'album 9', 'sasasasasa', 'bimasm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `deskripsi`, `album`) VALUES
(1, '173e9c084dec11dfaf291c1b2d6df3da.png', 'asdasd', 'album 3'),
(2, '3c3b82326e6ac1075c36dcc37ae4fff8.jpg', 'asda', 'album 2'),
(3, '9446ce816eafe2b0e42c1aa25bbd1f7c.jpg', 'asdasdasd', 'album 2'),
(4, '937fd6571bb70bd2f21479ed9b58b8a2.png', 'ddddd', 'album 2'),
(5, '26efc160173d1929fcca001acdca29f7.jpg', 'ssssss', 'album 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `notification`
--

INSERT INTO `notification` (`id_notif`, `keterangan`, `username`) VALUES
(1, 'new user', 'edinugroho'),
(4, 'new user', 'dedy'),
(5, 'new user', 'gembel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`, `no_telp`, `username`, `password`, `status`) VALUES
('Bima Susila Mukti', 'kepo.cok@gmail.com', '085204848227', 'bimasm', 'Aqua0505', 'is_active'),
('deddy corbuzier', 'dedybotak@gmail.com', '085204848230', 'dedy', 'aqua0505', 'not_active'),
('Edi Dwi Nugroho', 'lostpower6@gmail.com', '085204848228', 'edinugroho', 'aqua0505', 'not_active'),
('gembel jomblo', 'gembel@gmail.com', '085204848231', 'gembel', 'aqua0505', 'not_active'),
('Novalia Widya Popy', 'novaliapopy39@gmail.com', '085204848229', 'novaliapopy', 'aqua0505', 'is_active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
