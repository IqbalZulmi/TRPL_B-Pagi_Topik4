-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2023 pada 08.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(15) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama_dosen`, `email`, `username`, `foto`) VALUES
('100012', 'Ari Wibowo, ST, MT', 'wibowo@polibatam.ac.id', 'wibowo@polibatam.ac.id', 'user.png'),
('100015', 'Dr. Uuf Brajawidagda, S.T., M.T., Ph.D', 'uuf@polibatam.ac.id', 'uuf@polibatam.ac.id', 'user.png'),
('100017', 'Dr. Metta Santiputri, S.T., M.Sc, Ph.D', 'metta@polibatam.ac.id', 'metta@polibatam.ac.id', 'user.png'),
('102020', 'Hilda Widyastuti, S.T., M.T.', 'hilda@polibatam.ac.id', 'hilda@polibatam.ac.id', 'user.png'),
('103025', 'Riwinoto, ST,M.Kom', 'riwi@polibatam.ac.id', 'riwi@polibatam.ac.id', 'user.png'),
('105038', 'Andy Triwinarko, ST, M.T., Ph.D', 'andy@polibatam.ac.id', 'andy@polibatam.ac.id', 'user.png'),
('106042', 'Evaliata Br. Sembiring, S.Kom., M.Cs', 'eva@polibatam.ac.id', 'eva@polibatam.ac.id', 'user.png'),
('106044', 'Nur Cahyono Kushardianto,S.Si., M.T., M.Sc', 'anung@polibatam.ac.id', 'anung@polibatam.ac.id', 'user.png'),
('107048', 'Afdhol Dzikri, S.ST., M.T', 'afdhol@polibatam.ac.id', 'afdhol@polibatam.ac.id', 'user.png'),
('107051', 'Agus Fatulloh, S.T., M.T', 'agusf@polibatam.ac.id', 'agusf@polibatam.ac.id', 'user.png'),
('107054', 'Condra Antoni,SS, M.A', 'condra@polibatam.ac.id', 'condra@polibatam.ac.id', 'user.png'),
('109057', 'Mir\'atul Khusna Mufida,S.ST, M.Sc', 'vda@polibatam.ac.id', 'vda@polibatam.ac.id', 'user.png'),
('109064', 'Mira Chandra Kirana, S.T., M.T', 'mira@polibatam.ac.id', 'mira@polibatam.ac.id', 'user.png'),
('112086', 'Gendhy Dwi Harlyan, S.Sn.,M.Sn', 'Gendhy@polibatam.ac.id', 'Gendhy@polibatam.ac.id', 'user.png'),
('112087', 'Nur Zahrati Janah, S.Kom, M.Sc', 'nur.zahrati@polibatam.ac.id', 'nur.zahrati@polibatam.ac.id', 'user.png'),
('112092', 'Happy Yugo Prasetiya, S.Sn., M.Sn', 'yugo@polibatam.ac.id', 'yugo@polibatam.ac.id', 'user.png'),
('112093', 'Yeni Rokhayati, S.Si., M.Sc', 'yeni@polibatam.ac.id', 'yeni@polibatam.ac.id', 'user.png'),
('112094', 'Dwi Ely Kurniawan, S.Pd., M.Kom', 'dwialikhs@polibatam.ac.id', 'dwialikhs@polibatam.ac.id', 'user.png'),
('113103', 'Maria, S.ST., M.Sn.', 'maria@polibatam.ac.id', 'maria@polibatam.ac.id', 'user.png'),
('113104', 'Selly Artaty Zega, S.ST., M.Sc', 'selly@polibatam.ac.id', 'selly@polibatam.ac.id', 'user.png'),
('113105', 'Supardianto, M.Eng.', 'supardianto@polibatam.ac.id1', 'supardianto@polibatam.ac.id', 'user.png'),
('113106', 'Sandi Prasetyaningsih, S.ST., M.Media', 'sandi@polibatam.ac.id', 'sandi@polibatam.ac.id', 'user.png'),
('113110', 'Sudra Irawan, S.Pd.Si., M.Sc', 'sudra@polibatam.ac.id', 'sudra@polibatam.ac.id', 'user.png'),
('113115', 'Sartikha, S. ST., M.Eng', 'sartikha@polibatam.ac.id', 'sartikha@polibatam.ac.id', 'user.png'),
('113118', 'Liony Lumombo, S.ST., M.IDes', 'liony@polibatam.ac.id', 'liony@polibatam.ac.id', 'user.png'),
('114131', 'Arta Uly Siahaan, S.Pd, M.Pd', 'artauly@polibatam.ac.id', 'artauly@polibatam.ac.id', 'user.png'),
('115138', 'Oktavianto Gustin, S.T., M.T', 'oktavianto@polibatam.ac.id', 'oktavianto@polibatam.ac.id', 'user.png'),
('115143', 'Ahmad Hamim Thohari, S.S.T., M.T.', 'hamim@polibatam.ac.id', 'hamim@polibatam.ac.id', 'user.png'),
('115145', 'Arif Roziqin, S.Pd, M.Sc', 'arifroziqin@polibatam.ac.id', 'arifroziqin@polibatam.ac.id', 'user.png'),
('115148', 'Nelmiawati, B.CS., M.Comp.Sc', 'mia@polibatam.ac.id', 'mia@polibatam.ac.id', 'user.png'),
('116162', 'Muhammad Zainuddin Lubis, S.I.k, M.Si', 'zainuddinlubis@polibatam.ac.id', 'zainuddinlubis@polibatam.ac.id', 'user.png'),
('116163', 'Wenang Anurogo, S.Si., M.Sc.', 'wenang@polibatam.ac.id', 'wenang@polibatam.ac.id', 'user.png'),
('117173', 'Muchamad Fajri Amirul Nasrullah, S.ST., M.Sc', ' fajri@polibatam.ac.id', 'fajri@polibatam.ac.id', 'user.png'),
('117175', 'Hamdani Arif, S.Pd., M.Sc', 'hamdaniarif@polibatam.ac.id', 'hamdaniarif@polibatam.ac.id', 'user.png'),
('117192', 'Maidel Fani, S.Pd., M.Kom.', 'maidelfani@polibatam.ac.id', 'maidelfani@polibatam.ac.id', 'user.png'),
('117193', 'Dr. Fandy Neta, S.Pd., M.Pd.T.', 'fandyneta@polibatam.ac.id', 'fandyneta@polibatam.ac.id', 'user.png'),
('117196', 'Luthfiya Ratna Sari, S.Si., M.T.', 'luthfiya.ratna.s@polibatam.ac.id', 'luthfiya.ratna.s@polibatam.ac.id', 'user.png'),
('118199', 'Rina Yulius, S.Pd., M.Eng', 'rinayulius@polibatam.ac.id', 'rinayulius@polibatam.ac.id', 'user.png'),
('118201', 'Satriya Bayu Aji, S.S., M.Hum.', 'satriya@polibatam.ac.id', 'satriya@polibatam.ac.id', 'user.png'),
('118207', 'Siti Noor Chayati, S.T., M.Sc', 'sitinoorcahyati@polibatam.ac.id', 'sitinoorcahyati@polibatam.ac.id', 'user.png'),
('118208', 'Farouki Dinda Rassarandi, S.T., M.Eng.', ' farouki@polibatam.ac.id', 'farouki@polibatam.ac.id', 'user.png'),
('119221', 'Agung Riyadi, S.Si., M.Kom', 'agung@polibatam.ac.id', 'agung@polibatam.ac.id', 'user.png'),
('119222', 'Dodi Prima Resda, S.Pd., M.Kom', 'dodi.prima@polibatam.ac.id', 'dodi.prima@polibatam.ac.id', 'user.png'),
('119223', 'Fadli Suandi, S.T., M.Kom.', 'fadli.suandi@polibatam.ac.id', 'fadli.suandi@polibatam.ac.id', 'user.png'),
('119224', 'Swono Sibagariang, S.Kom., M.Kom', 'swono@polibatam.ac.id', 'swono@polibatam.ac.id', 'user.png'),
('121246', 'Siskha Handayani M.Si', 'siskha@polibatam.ac.id', 'siskha@polibatam.ac.id', 'user.png'),
('121248', 'Dwi Amalia Purnamasari, S.T., M.Cs.', 'dwiamalia@polibatam.ac.id', 'dwiamalia@polibatam.ac.id', 'user.png'),
('122258', 'Aragani Timur Kanistren. S.Sn ., M.Sn', 'Aragani@polibatam.ac.id', 'Aragani@polibatam.ac.id', 'user.png'),
('122259', 'Anis Rahmi, S.Tr. Kom., M.Sn', 'anis@polibatam.ac.id', 'anis@polibatam.ac.id', 'user.png'),
('122270', 'Feby, S.Pd, M.Pd', 'feby@polibatam.ac.id', 'feby@polibatam.ac.id', 'user.png'),
('122275', 'Ahmadi Irmansyah Lubis, S.Kom., M.Kom.', 'ahmadi@polibatam.ac.id', 'ahmadi@polibatam.ac.id', 'user.png'),
('122277', 'Noper Ardi, S.Pd., M.Eng', 'noperardi@polibatam.ac.id', 'noperardi@polibatam.ac.id', 'user.png'),
('122279', 'Alena Uperiati, S.T., M.Cs', 'alena@polibatam.ac.id', 'alena@polibatam.ac.id', 'user.png'),
('122280', 'Amirul Mu\'minin, S.Ds, M.Ds.', 'amirul@polibatam.ac.id', 'amirul@polibatam.ac.id', 'user.png'),
('211100', 'Andri Albertha Pratama, S.Tr.Kom., M.Sn', 'andri@polibatam.ac.id', 'andri@polibatam.ac.id', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboran`
--

CREATE TABLE `laboran` (
  `nidn` varchar(25) NOT NULL,
  `nama_laboran` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laboran`
--

INSERT INTO `laboran` (`nidn`, `nama_laboran`, `email`, `username`, `foto`) VALUES
('1', 'admin', 'admin@admin.com', 'admin', 'user.png'),
('2', 'Cahya Miranto, S.ST', 'cahya@polibatam.ac.id', 'cahya@polibatam.ac.id', 'user.png'),
('214190', 'Ardiman Firmanda, S.S. T', 'ardiman@polibatam.ac.id', 'ardiman@polibatam.ac.id', 'user.png'),
('215211', 'Banu Filasuf, S.Tr.', 'banu@polibatam.ac.id', 'banu@polibatam.ac.id', 'user.png'),
('215215', 'Riki, S.Tr', 'riki@polibatam.ac.id', 'riki@polibatam.ac.id', 'user.png'),
('215216', 'Alfian, S.ST.', 'alfian@polibatam.ac.id', 'alfian@polibatam.ac.id', 'user.png'),
('216252', 'Rizki Widi Pratama A.Md.K', 'rizkiwidipratama@polibatam.ac.id', 'rizkiwidipratama@polibatam.ac.id', 'user.png'),
('219306', 'Ahmad Saropi S.Tr Kom', 'saropi@polibatam.ac.id', 'saropi@polibatam.ac.id', 'user.png'),
('219310', 'Aldino Saputra, S.S. T', 'aldino@polibatam.ac.id', 'aldino@polibatam.ac.id', 'user.png'),
('219311', 'Muhammad Ghazali, A.Md.T', 'm.ghazali@polibatam.ac.id', 'm.ghazali@polibatam.ac.id', 'user.png'),
('220315', 'Hajrul Khaira, S.Tr.Kom', 'hajrul@polibatam.ac.id', 'hajrul@polibatam.ac.id', 'user.png'),
('221320', 'Muhamad Sahrul Nizan A.Md', 'nizan@polibatam.ac.id', 'nizan@polibatam.ac.id', 'user.png'),
('221323', 'Nanda Putra Perkasa S.Tr.', 'nanda@polibatam.ac.id', 'nanda@polibatam.ac.id', 'user.png'),
('222331', 'Gilang Bagus Ramadhan, A.', 'gilang@polibatam.ac.id', 'gilang@polibatam.ac.id', 'user.png'),
('222332', 'Iqbal Afif, A.Md.Kom', 'iqbal@polibatam.ac.id', 'iqbal@polibatam.ac.id', 'user.png'),
('222333', 'Widya Putri Ramadhani, S.', 'widyaputri@polibatam.ac.id', 'widyaputri@polibatam.ac.id', 'user.png'),
('3', 'Muhammad Idris, S.Tr.', 'idris@polibatam.ac.id', 'idris@polibatam.ac.id', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama_mahasiswa` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `email`, `username`, `foto`) VALUES
('4342201052', 'Rayyan Kheisar', 'sandler@gmail.com', 'rayyan', 'Logo TRPL.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_form` int(11) NOT NULL,
  `no_identitas` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anggota` varchar(25) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `kode_ruangan` varchar(25) NOT NULL,
  `dosen_penanggung_jawab` varchar(50) DEFAULT NULL,
  `hari` varchar(25) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `jam_pinjaman_awal` time NOT NULL,
  `jam_pinjaman_akhir` time NOT NULL,
  `status` enum('pending','terima','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_form`, `no_identitas`, `nama`, `anggota`, `keperluan`, `kode_ruangan`, `dosen_penanggung_jawab`, `hari`, `tanggal_peminjaman`, `jam_pinjaman_awal`, `jam_pinjaman_akhir`, `status`) VALUES
(92, '4342201052', 'Rayyan Kheisar', 'cgfgcgf', 'vhgvghg', 'GU 601', 'maria@polibatam.ac.id', 'selasa', '4333-03-12', '10:43:00', '12:43:00', 'tolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(25) NOT NULL,
  `nama_ruangan` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `nama_laboran` varchar(50) DEFAULT NULL,
  `status` enum('available','not available') NOT NULL,
  `hari` varchar(50) NOT NULL DEFAULT 'senin',
  `foto` varchar(100) NOT NULL DEFAULT 'cover.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`, `lokasi`, `nama_laboran`, `status`, `hari`, `foto`) VALUES
('GU 601', 'Lab Multimedia', 'Gedung Utama', 'nanda@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 602', 'Workspace Virtual Reality', 'Gedung Utama', 'nanda@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 604', 'Lab Multimedia', 'Gedung Utama', 'nanda@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 606', 'Workspace Rendering', 'Gedung Utama', 'aldino@polibatam.ac.id', 'available', 'senin,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 607', 'Lab Motion Capture', 'Gedung Utama', 'saropi@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 608', 'Workspace Rendering', 'Gedung Utama', 'banu@polibatam.ac.id', 'available', 'senin,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 702', 'Lab Komputer/Praktikum', 'Gedung Utama', 'admin', 'available', 'sabtu,minggu', 'R1.jpeg'),
('GU 704', 'Workspace Software Development', 'Gedung Utama', 'nizan@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 705', 'Workspace Animation Production', 'Gedung Utama', 'saropi@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 706', 'Workspace Software Development', 'Gedung Utama', 'nizan@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 707', 'Workspace Creative Art Studio', 'Gedung Utama', 'saropi@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('GU 805', 'Workspace Data Science', 'Gedung Utama', 'banu@polibatam.ac.id', 'available', 'jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 3.1', 'Studio Fotografi', 'Gedung RTF', 'alfian@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 3.2', 'Studio Broadcasting', 'Gedung RTF', 'alfian@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 4.1', 'Lab Clay Modelling', 'Gedung RTF', 'alfian@polibatam.ac.id', 'available', 'jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 4.2', 'Workspace Animation', 'Gedung RTF', 'riki@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 4.4', 'Studio Audio', 'Gedung RTF', 'aldino@polibatam.ac.id', 'available', 'selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 5.1', 'Workspace Photogrammetry', 'Gedung RTF', 'rizkiwidipratama@polibatam.ac.id', 'available', 'senin,sabtu,minggu', 'R1.jpeg'),
('RTF 5.2', 'Workspace Geography Information System', 'Gedung RTF', 'm.ghazali@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 5.4', 'Workspace Remote Sensing', 'Gedung RTF', 'm.ghazali@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('RTF 6.3', 'Workspace Hydrographic Survey', 'Gedung RTF', 'm.ghazali@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TA 10.3', 'Cyber Physical System Security Lab', 'Tower A', 'admin', 'available', 'senin,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TA 10.4', 'Workspace Attack and Defense', 'Tower A', 'gilang@polibatam.ac.id', 'available', 'selasa,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TA 11.4', 'Workspace Data Security and Privacy', 'Tower A', 'hajrul@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,sabtu,minggu', 'R1.jpeg'),
('TA 11.5', 'Workspace Cyber Forensic', 'Tower A', 'iqbal@polibatam.ac.id', 'available', 'kamis,sabtu,minggu', 'R1.jpeg'),
('TA 12.3', 'Ruang Kelas', 'Tower A', 'admin', 'available', 'senin,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TP 302', 'Mini Theater', 'Technopreneur', 'widyaputri@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TP 303', 'AS Galang - Workspace Animasi', 'Technopreneur', 'iqbal@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg'),
('TP 305', 'GDS Rempang - Workspace Multimedia', 'Technopreneur', 'gilang@polibatam.ac.id', 'available', 'senin,selasa,rabu,kamis,jumat,sabtu,minggu', 'R1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'laboran'),
('afdhol@polibatam.ac.id', 'dosen', 'dosen'),
('agung@polibatam.ac.id', 'dosen', 'dosen'),
('agusf@polibatam.ac.id', 'dosen', 'dosen'),
('ahmadi@polibatam.ac.id', 'dosen', 'dosen'),
('aldino@polibatam.ac.id', 'laboran', 'laboran'),
('alena@polibatam.ac.id', 'dosen', 'dosen'),
('alfian@polibatam.ac.id', 'laboran', 'laboran'),
('amirul@polibatam.ac.id', 'dosen', 'dosen'),
('andri@polibatam.ac.id', 'dosen', 'dosen'),
('andy@polibatam.ac.id', 'dosen', 'dosen'),
('anis@polibatam.ac.id', 'dosen', 'dosen'),
('anung@polibatam.ac.id', 'dosen', 'dosen'),
('Aragani@polibatam.ac.id', 'dosen', 'dosen'),
('ardiman@polibatam.ac.id', 'laboran', 'laboran'),
('arifroziqin@polibatam.ac.id', 'dosen', 'dosen'),
('artauly@polibatam.ac.id', 'dosen', 'dosen'),
('banu@polibatam.ac.id', 'laboran', 'laboran'),
('cahya@polibatam.ac.id', 'laboran', 'laboran'),
('condra@polibatam.ac.id', 'dosen', 'dosen'),
('dodi.prima@polibatam.ac.id', 'dosen', 'dosen'),
('dwialikhs@polibatam.ac.id', 'dosen', 'dosen'),
('dwiamalia@polibatam.ac.id', 'dosen', 'dosen'),
('eva@polibatam.ac.id', 'dosen', 'dosen'),
('fadli.suandi@polibatam.ac.id', 'dosen', 'dosen'),
('fajri@polibatam.ac.id', 'dosen', 'dosen'),
('fandyneta@polibatam.ac.id', 'dosen', 'dosen'),
('farouki@polibatam.ac.id', 'dosen', 'dosen'),
('feby@polibatam.ac.id', 'dosen', 'dosen'),
('festy@polibatam.ac.id', 'laboran', 'laboran'),
('Gendhy@polibatam.ac.id', 'dosen', 'dosen'),
('gilang@polibatam.ac.id', 'laboran', 'laboran'),
('hajrul@polibatam.ac.id', 'laboran', 'laboran'),
('hamdaniarif@polibatam.ac.id', 'dosen', 'dosen'),
('hamim@polibatam.ac.id', 'dosen', 'dosen'),
('hilda@polibatam.ac.id', 'dosen', 'dosen'),
('idris@polibatam.ac.id', 'laboran', 'laboran'),
('Iqbal', 'iqbal123', 'dosen'),
('iqbal@polibatam.ac.id', 'laboran', 'laboran'),
('liony@polibatam.ac.id', 'dosen', 'dosen'),
('luthfiya.ratna.s@polibatam.ac.id', 'dosen', 'dosen'),
('m.ghazali@polibatam.ac.id', 'laboran', 'laboran'),
('maidelfani@polibatam.ac.id', 'dosen', 'dosen'),
('maria@polibatam.ac.id', 'dosen', 'dosen'),
('metta@polibatam.ac.id', 'dosen', 'dosen'),
('mia@polibatam.ac.id', 'dosen', 'dosen'),
('mira@polibatam.ac.id', 'dosen', 'dosen'),
('nanda@polibatam.ac.id', 'laboran', 'laboran'),
('nizan@polibatam.ac.id', 'laboran', 'laboran'),
('noperardi@polibatam.ac.id', 'dosen', 'dosen'),
('nur.zahrati@polibatam.ac.id', 'dosen', 'dosen'),
('oktavianto@polibatam.ac.id', 'dosen', 'dosen'),
('rayyan', 'a', 'mahasiswa'),
('riki@polibatam.ac.id', 'laboran', 'laboran'),
('rinayulius@polibatam.ac.id', 'dosen', 'dosen'),
('riwi@polibatam.ac.id', 'dosen', 'dosen'),
('rizkiwidipratama@polibatam.ac.id', 'laboran', 'laboran'),
('sandi@polibatam.ac.id', 'dosen', 'dosen'),
('saropi@polibatam.ac.id', 'laboran', 'laboran'),
('sartikha@polibatam.ac.id', 'dosen', 'dosen'),
('satriya@polibatam.ac.id', 'dosen', 'dosen'),
('selly@polibatam.ac.id', 'dosen', 'dosen'),
('siskha@polibatam.ac.id', 'dosen', 'dosen'),
('sitinoorcahyati@polibatam.ac.id', 'dosen', 'dosen'),
('sudra@polibatam.ac.id', 'dosen', 'dosen'),
('supardianto@polibatam.ac.id', 'dosen', 'dosen'),
('swono@polibatam.ac.id', 'dosen', 'dosen'),
('uuf@polibatam.ac.id', 'dosen', 'dosen'),
('vda@polibatam.ac.id', 'dosen', 'dosen'),
('wenang@polibatam.ac.id', 'dosen', 'dosen'),
('wibowo@polibatam.ac.id', 'dosen', 'dosen'),
('widyaputri@polibatam.ac.id', 'laboran', 'laboran'),
('yeni@polibatam.ac.id', 'dosen', 'dosen'),
('yugo@polibatam.ac.id', 'dosen', 'dosen'),
('zainuddinlubis@polibatam.ac.id', 'dosen', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `laboran`
--
ALTER TABLE `laboran`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_form`),
  ADD KEY `peminjaman_ibfk_3` (`kode_ruangan`),
  ADD KEY `peminjaman_ibfk_4` (`dosen_penanggung_jawab`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`),
  ADD KEY `ruangan_ibfk_1` (`nama_laboran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `no_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laboran`
--
ALTER TABLE `laboran`
  ADD CONSTRAINT `laboran_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_4` FOREIGN KEY (`dosen_penanggung_jawab`) REFERENCES `dosen` (`username`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_ibfk_1` FOREIGN KEY (`nama_laboran`) REFERENCES `laboran` (`username`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
