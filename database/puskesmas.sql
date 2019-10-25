-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Desember 2018 jam 19:20
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nourut` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `berita`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nmdokter` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `almdokter` varchar(255) NOT NULL,
  `telpdokter` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dokter`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

--
-- Dumping data untuk tabel `galeri`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `namadokter` varchar(255) NOT NULL,
  `poliklinik` varchar(255) NOT NULL,
  `ruang` varchar(255) NOT NULL,
  `haripraktek` varchar(255) NOT NULL,
  `jampraktek` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jadwal`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `komentar`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telphon` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `alamat`, `no_telphon`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'ngawi', 98765432);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nopasien` varchar(255) NOT NULL,
  `namapas` varchar(255) NOT NULL,
  `jeniskelpas` varchar(255) NOT NULL,
  `almpas` varchar(255) NOT NULL,
  `tgllahirpas` date NOT NULL,
  `telppas` int(100) NOT NULL,
  `tglregistrasi` date NOT NULL,
  `ruang` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pasien`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) NOT NULL,
  `namapeg` varchar(255) NOT NULL,
  `jnskelpeg` varchar(255) NOT NULL,
  `almpeg` varchar(255) NOT NULL,
  `tgllhrpeg` date NOT NULL,
  `telppeg` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pegawai`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `no` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `pelayanan`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `namaruang` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jmlkamar` int(100) NOT NULL,
  `kamarisi` int(100) NOT NULL,
  `kamarkosong` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `ruang`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tampilandepan`
--

CREATE TABLE IF NOT EXISTS `tampilandepan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `no` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tampilandepan`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
