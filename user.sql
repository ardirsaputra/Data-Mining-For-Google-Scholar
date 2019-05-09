-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2019 pada 15.51
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `affiliation` varchar(255) NOT NULL,
  `total_cites` int(11) NOT NULL,
  `h_index` int(11) NOT NULL,
  `i10_index` int(11) NOT NULL,
  `fields` varchar(255) NOT NULL,
  `homepage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `affiliation`, `total_cites`, `h_index`, `i10_index`, `fields`, `homepage`) VALUES
('1hvHmw0AAAAJ', 'David Maxwell', 'Universitas Indonesia', 4697, 34, 76, 'verified email at staff.ui.ac.id', NULL),
('1_3WGxIAAAAJ', 'Iwan Jaya Azis', 'Universitas Indonesia', 1832, 21, 41, 'verified email at staff.ui.ac.id', NULL),
('2RirDyEAAAAJ', 'Sylvia Veronica Siregar', 'Universitas Indonesia', 1496, 14, 17, 'verified email at ui.ac.id', NULL),
('3wQdAXgAAAAJ', 'Sukirno', 'Universitas Indonesia', 7247, 23, 27, 'verified email at staff.ui.ac.id', NULL),
('48aspzAAAAAJ', 'Sofjan Assauri', 'Universitas Indonesia', 5422, 20, 28, 'verified email at staff.ui.ac.id', NULL),
('6Eb1FpsAAAAJ', 'Roby Muhamad', 'Faculty of Psychology, University of Indonesia', 1334, 4, 4, 'verified email at ui.ac.id', NULL),
('6LOMLkYAAAAJ', 'Jatna Supriatna', 'Professor  of Biology, Faculty of Mathematics and Natural Sciences, Universitas Indonesia', 3314, 30, 50, 'verified email at rccc.ui.ac.id - homepage', 'http://www.rccc.ui.ac.id'),
('8bjW7A4AAAAJ', 'Sidharta Utama', 'Professor of Accounting, University of Indonesia', 1516, 15, 21, 'verified email at ui.ac.id', NULL),
('8yUiyckAAAAJ', 'Tri Krianto Karjoso', 'Lektor Kepala Promosi Kesehatan, Fakultas Kesehatan Masyarakat, Universitas Indonesia', 1202, 3, 1, 'verified email at ui.ac.id - homepage', 'http://staff.blog.ui.ac.id/tkriantol'),
('aygm-fQAAAAJ', 'Eko A Meinarno', 'Universitas Indonesia', 1631, 7, 6, 'verified email at ui.ac.id', NULL),
('bh2_NlAAAAAJ', 'Rosari Saleh', 'Universitas Indonesia', 1596, 20, 30, 'verified email at ui.ac.id', NULL),
('bIoUNggAAAAJ', 'Sutanto Priyo Hastono', 'Universitas Indonesia', 1377, 13, 14, 'verified email at staff.ui.ac.id', NULL),
('buNtmFwAAAAJ', 'Ari Kuncoro', 'Professor of Economics University of Indonesia', 3175, 14, 14, 'verified email at ui.ac.id', NULL),
('cAocFcsAAAAJ', 'Budi Utomo Utomo', 'University of Indonesia', 1452, 17, 27, 'verified email at ui.ac.id', NULL),
('cFenRT4AAAAJ', 'Munir Machmud Ali', 'universitas indonesia', 17550, 66, 210, 'verified email at staff.ui.ac.id', NULL),
('DcVSP2wAAAAJ', 'Terry Mart', 'Professor of Physics, Universitas Indonesia', 3091, 23, 50, 'verified email at sci.ui.ac.id - homepage', 'http;:staff.fisika.ui.ac.id/tmart/'),
('En3_A0gAAAAJ', 'Zulkifli Amin', 'Pulmonologist, Universitas Indonesia', 1181, 12, 15, 'verified email at ui.ac.id', NULL),
('eXEccP4AAAAJ', 'Evy Yunihastuti', 'Faculty of Medicine Universitas Indonesia', 1272, 17, 25, 'verified email at ui.ac.id', NULL),
('Ey_9mpIAAAAJ', 'topo Santoso', 'university of indonesia', 1410, 18, 31, 'verified email at ui.ac.id', NULL),
('FMOZzmEAAAAJ', 'Budi Anna Keliat', 'Faculty of Nursing Universitas Indonesia', 1295, 19, 24, 'verified email at ui.ac.id - homepage', 'http://budiannakeliat.com'),
('gWv-VB0AAAAJ', 'Azwar Manaf', 'Univeristas Indonesia', 1387, 12, 13, 'verified email at sci.ui.ac.id', NULL),
('Hdt7B-YAAAAJ', 'Endang Achadi', 'Universitas Indonesia', 2862, 25, 40, 'verified email at ui.ac.id', NULL),
('I0T0cPMAAAAJ', 'Yusuf Wibisono', 'universitas indonesia', 1217, 12, 13, 'verified email at staff.ui.ac.id', NULL),
('I6e272EAAAAJ', 'Tjandra Yoga Aditama', 'Universitas Indonesia', 1557, 20, 33, 'verified email at staff.ui.ac.id', NULL),
('iJKRnI8AAAAJ', 'M Malik', 'universitas indonesia', 39108, 84, 320, 'verified email at staff.ui.ac.id', NULL),
('INnE42kAAAAJ', 'Wisnu Jatmiko', 'Professor, Faculty Computer Science University of Indonesia', 1298, 20, 38, 'verified email at cs.ui.ac.id - homepage', 'http://staff.ui.ac.id/wisnuj'),
('JKUpQDYAAAAJ', 'Pradana Soewondo', 'Universitas Indonesia', 1344, 18, 26, 'verified email at ui.ac.id', NULL),
('LXBn-8oAAAAJ', 'Rinaldi Lesmana', 'Universitas Indonesia', 1585, 14, 16, 'verified email at ui.ac.id', NULL),
('m8E9GkIAAAAJ', 'Indah S Widyahening', 'Faculty of Medicine Universitas Indonesia', 3123, 10, 10, 'verified email at ui.ac.id', NULL),
('mhlc5VwAAAAJ', 'Melani Budianta', 'Professor at Faculty of Humanities, University of Indonesia', 1966, 13, 17, 'verified email at ui.ac.id - homepage', 'http://wacana.ui.ac.id/'),
('pYjfPacAAAAJ', 'Murdani Abdullah, MD. PhD. FACG. FASGE', 'Professor of Medicine, Division of Gastroenterology, Faculty of Medicine, University of Indonesia', 1668, 18, 29, 'verified email at ui.ac.id', NULL),
('q8kQaQIAAAAJ', 'Jimly Asshiddique', 'Universitas Indonesia', 6565, 30, 46, 'verified email at staff.ui.ac.id', NULL),
('ql6gP9QAAAAJ', 'Idrus Alwi', 'Profesor in Internal Medicine, University of Indonesia', 1603, 15, 23, 'verified email at ui.ac.id', NULL),
('rCOO4P4AAAAJ', 'Lina Miftahul Jannah', 'Faculty of Administrative Science, Universitas Indonesia', 1677, 8, 8, 'verified email at ui.ac.id - homepage', 'http://linamjannah.wordpress.com/'),
('slJPkvwAAAAJ', 'Agnes Kurniawan', 'University of Indonesia', 1865, 21, 26, 'verified email at ui.ac.id', NULL),
('tj_Q1AcAAAAJ', 'Nachrowi Djalal Nachrowi', 'Professor Of Economics Faculty of Economics and Business Universitas Indonesia', 1320, 10, 10, 'verified email at ui.ac.id - homepage', 'http://staff.ui.ac.id/nachrowi?referrer=search_user'),
('tpzw4SgAAAAJ', 'Zainal A. Hasibuan', 'Professor of Computer Science, University of Indonesia', 1203, 16, 27, 'verified email at cs.ui.ac.id - homepage', 'http://dl2.cs.ui.ac.if/v4/'),
('TTVIc6cAAAAJ', 'I Adi', 'FISIP, Universitas Indonesia', 1586, 9, 9, 'verified email at ui.ac.id', NULL),
('VARh7fMAAAAJ', 'Dwi Martani', 'Professor of Accounting, University Indonesia', 1351, 18, 35, 'verified email at ui.ac.id - homepage', 'http://staf.blog.ui.ac.id/martani'),
('vAYxYCEAAAAJ', 'Nandy Putra', 'Professor Heat Transfer, University of Indonesia', 5609, 17, 25, 'verified email at eng.ui.ac.id', NULL),
('vTzQ64IAAAAJ', 'Keba Moto', 'Universitas Indonesia', 1251, 11, 11, 'verified email at staff.ui.ac.id', NULL),
('vxmNDIkAAAAJ', 'Mustafa Edwin Nasution', 'Universitas Indonesia', 1341, 11, 11, 'verified email at staff.ui.ac.id', NULL),
('vzfKrdAAAAAJ', 'Aru Sudoyo', 'Department of Internal Medicine, Faculty of Medicine Universitas Indonesia', 1767, 17, 23, 'verified email at ui.ac.id', NULL),
('VZmX3RkAAAAJ', 'Elizabeth Kristi Poerwandari', 'Universitas Indonesia', 1616, 10, 11, 'verified email at ui.ac.id', NULL),
('WDXN5sUAAAAJ', 'Inge Sutanto', 'Universitas Indonesia', 1164, 20, 26, 'verified email at staff.ui.ac.id', NULL),
('Ya8scsoAAAAJ', 'Rambat Lupiyoadi', 'universitas indonesia', 5659, 11, 11, 'verified email at staff.ui.ac.id', NULL),
('YqabAYwAAAAJ', 'Rino Alvani Gani', 'Universitas Indonesia', 1793, 17, 21, 'verified email at ui.ac.id', NULL),
('ZLC8oXgAAAAJ', 'Tribidasari A. Ivandini', 'University of Indonesia', 1843, 24, 35, 'verified email at sci.ui.ac.id - homepage', 'http://www.chem.ui.ac.id/staff/kbi-kimia-fisik/ivandini-tribidasari-a'),
('_cU5eIUAAAAJ', 'Yuditiya Purwosunu', 'Dept Obstetrics Gynaecology University of Indonesia', 1375, 24, 31, 'verified email at ui.ac.id - homepage', 'https://aboutme.google.com/u/0/?referer=gpuls'),
('_g36jpkAAAAJ', 'Marcellus Simadibrata', 'Department of Internal Medicine, Faculty of Medicine Universitas Indonesia', 2194, 18, 24, 'verified email at ui.ac.id', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
