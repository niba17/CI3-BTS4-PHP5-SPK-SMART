-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2022 pada 10.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot_kriteria`
--

CREATE TABLE `tabel_bobot_kriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id`, `id_kriteria`, `id_alternatif`, `bobot`) VALUES
(1063, 288, 303, 2),
(1064, 289, 303, 2),
(1065, 290, 303, 2),
(1066, 291, 303, 5),
(1067, 292, 303, 3),
(1071, 288, 304, 3),
(1072, 289, 304, 2),
(1073, 290, 304, 3),
(1074, 291, 304, 5),
(1075, 292, 304, 3),
(1078, 288, 305, 3),
(1079, 289, 305, 3),
(1080, 290, 305, 3),
(1081, 291, 305, 3),
(1082, 292, 305, 3),
(1087, 329, 303, 9),
(1088, 329, 304, 73),
(1089, 329, 305, 15),
(1132, 330, 303, 27),
(1133, 330, 304, 65),
(1134, 330, 305, 75),
(1136, 288, 312, 3),
(1137, 289, 312, 3),
(1138, 290, 312, 3),
(1139, 291, 312, 1),
(1140, 292, 312, 3),
(1141, 329, 312, 220),
(1142, 330, 312, 70),
(1143, 288, 313, 3),
(1144, 289, 313, 2),
(1145, 290, 313, 3),
(1146, 291, 313, 2),
(1147, 292, 313, 3),
(1148, 329, 313, 100),
(1149, 330, 313, 70),
(1150, 288, 314, 3),
(1151, 289, 314, 2),
(1152, 290, 314, 3),
(1153, 291, 314, 3),
(1154, 292, 314, 3),
(1155, 329, 314, 80),
(1156, 330, 314, 75),
(1157, 288, 315, 3),
(1158, 289, 315, 2),
(1159, 290, 315, 3),
(1160, 291, 315, 4),
(1161, 292, 315, 3),
(1162, 329, 315, 55),
(1163, 330, 315, 60),
(1164, 288, 316, 2),
(1165, 289, 316, 2),
(1166, 290, 316, 2),
(1167, 291, 316, 5),
(1168, 292, 316, 3),
(1169, 329, 316, 80),
(1170, 330, 316, 25),
(1171, 288, 317, 3),
(1172, 289, 317, 3),
(1173, 290, 317, 3),
(1174, 291, 317, 1),
(1175, 292, 317, 3),
(1176, 329, 317, 100),
(1177, 330, 317, 130),
(1178, 288, 318, 3),
(1179, 289, 318, 3),
(1180, 290, 318, 3),
(1181, 291, 318, 5),
(1182, 292, 318, 3),
(1183, 329, 318, 75),
(1184, 330, 318, 50),
(1185, 288, 319, 3),
(1186, 289, 319, 3),
(1187, 290, 319, 3),
(1188, 291, 319, 5),
(1189, 292, 319, 3),
(1190, 329, 319, 30),
(1191, 330, 319, 25),
(1192, 288, 320, 3),
(1193, 289, 320, 2),
(1194, 290, 320, 3),
(1195, 291, 320, 5),
(1196, 292, 320, 3),
(1197, 329, 320, 78),
(1198, 330, 320, 60),
(1199, 288, 321, 2),
(1200, 289, 321, 2),
(1201, 290, 321, 2),
(1202, 291, 321, 5),
(1203, 292, 321, 3),
(1204, 329, 321, 128),
(1205, 330, 321, 25),
(1206, 288, 322, 3),
(1207, 289, 322, 3),
(1208, 290, 322, 3),
(1209, 291, 322, 3),
(1210, 292, 322, 3),
(1211, 329, 322, 60),
(1212, 330, 322, 15),
(1213, 288, 323, 2),
(1214, 289, 323, 1),
(1215, 290, 323, 2),
(1216, 291, 323, 5),
(1217, 292, 323, 3),
(1218, 329, 323, 35),
(1219, 330, 323, 20),
(1220, 288, 324, 3),
(1221, 289, 324, 2),
(1222, 290, 324, 3),
(1223, 291, 324, 2),
(1224, 292, 324, 3),
(1225, 329, 324, 50),
(1226, 330, 324, 50),
(1227, 288, 325, 3),
(1228, 289, 325, 1),
(1229, 290, 325, 3),
(1230, 291, 325, 5),
(1231, 292, 325, 3),
(1232, 329, 325, 40),
(1233, 330, 325, 27),
(1234, 288, 326, 3),
(1235, 289, 326, 2),
(1236, 290, 326, 3),
(1237, 291, 326, 5),
(1238, 292, 326, 3),
(1239, 329, 326, 75),
(1240, 330, 326, 60),
(1241, 288, 327, 2),
(1242, 289, 327, 2),
(1243, 290, 327, 2),
(1244, 291, 327, 5),
(1245, 292, 327, 3),
(1246, 329, 327, 100),
(1247, 330, 327, 65),
(1248, 288, 328, 3),
(1249, 289, 328, 2),
(1250, 290, 328, 3),
(1251, 291, 328, 2),
(1252, 292, 328, 3),
(1253, 329, 328, 137),
(1254, 330, 328, 50),
(1255, 288, 329, 3),
(1256, 289, 329, 2),
(1257, 290, 329, 3),
(1258, 291, 329, 5),
(1259, 292, 329, 3),
(1260, 329, 329, 75),
(1261, 330, 329, 65),
(1262, 288, 330, 3),
(1263, 289, 330, 3),
(1264, 290, 330, 3),
(1265, 291, 330, 5),
(1266, 292, 330, 3),
(1267, 329, 330, 55),
(1268, 330, 330, 50),
(1269, 288, 331, 2),
(1270, 289, 331, 2),
(1271, 290, 331, 3),
(1272, 291, 331, 4),
(1273, 292, 331, 3),
(1274, 329, 331, 117),
(1275, 330, 331, 40),
(1276, 288, 332, 3),
(1277, 289, 332, 3),
(1278, 290, 332, 3),
(1279, 291, 332, 5),
(1280, 292, 332, 3),
(1281, 329, 332, 77),
(1282, 330, 332, 75),
(1283, 288, 333, 3),
(1284, 289, 333, 2),
(1285, 290, 333, 3),
(1286, 291, 333, 5),
(1287, 292, 333, 3),
(1288, 329, 333, 140),
(1289, 330, 333, 60),
(1290, 288, 334, 3),
(1291, 289, 334, 3),
(1292, 290, 334, 3),
(1293, 291, 334, 5),
(1294, 292, 334, 3),
(1295, 329, 334, 120),
(1296, 330, 334, 75),
(1297, 288, 335, 3),
(1298, 289, 335, 3),
(1299, 290, 335, 3),
(1300, 291, 335, 4),
(1301, 292, 335, 3),
(1302, 329, 335, 45),
(1303, 330, 335, 60),
(1304, 288, 336, 3),
(1305, 289, 336, 2),
(1306, 290, 336, 3),
(1307, 291, 336, 5),
(1308, 292, 336, 3),
(1309, 329, 336, 100),
(1310, 330, 336, 60),
(1311, 288, 337, 3),
(1312, 289, 337, 2),
(1313, 290, 337, 2),
(1314, 291, 337, 5),
(1315, 292, 337, 3),
(1316, 329, 337, 90),
(1317, 330, 337, 65),
(1318, 288, 338, 3),
(1319, 289, 338, 2),
(1320, 290, 338, 2),
(1321, 291, 338, 5),
(1322, 292, 338, 3),
(1323, 329, 338, 72),
(1324, 330, 338, 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_data_alternatif`
--

CREATE TABLE `tabel_data_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif` varchar(128) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kontak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_data_alternatif`
--

INSERT INTO `tabel_data_alternatif` (`id`, `alternatif`, `alamat`, `lat`, `lng`, `gambar`, `kontak`) VALUES
(303, 'Cabang Bimoku Lasiana', 'Lasiana', '-10.14405', '123.67638', 'IMG_20210427_1317101.jpg', '082147092501'),
(304, 'Bimoku', 'Jln Timor Raya', '-10.13610', '123.67533', 'IMG_20210120_1120421.jpg', '081217363636'),
(305, 'Samping Pertamina kilo 10 oesapa', 'Jln Tmor Raya', '-10.14059', '123.66273', 'IMG_20210120_120016.jpg', '081235672222'),
(312, 'Samping K24 Oesapa', 'Jln Timor Raya', '-10.14563', '123.65483', 'IMG_20210120_1211221.jpg', '081357785036'),
(313, 'Jembatan Pulau Indah', 'Jln Timor Raya', '-10.14654', '123.63026', 'IMG_20210120_1243371.jpg', '081231289660'),
(314, 'Ruko Oebobo', 'Jl W.J Lalamentik', '-10.16817', '123.60546', 'IMG_20210123_0814433.jpg', '081239230632'),
(315, 'Lampu merah BTN', 'Jln Amabi', '-10.18674', '123.61123', 'Screenshot_2021-01-25-18-25-36-45.jpg', '081238069997'),
(316, 'Belo', 'Jln R. H Koroh', '-10.22512', '123.63135', 'Screenshot_2021-04-29-14-14-45-881.png', '08113813526'),
(317, 'Pasar Oebobo', 'Jln. W. Monginsidi III', '-10.15879', '123.60859', 'IMG_20210123_0836013.jpg', '081331545678'),
(318, 'Depan Hotel Astiti', 'Jln. Jendral Sudirman', '-10.17660', '123.59505', 'IMG202204031738021.jpg', '082121812181'),
(319, 'Cabang Air', 'Jln. Bhakti karang', '-10.16691', '123.60094', 'Screenshot_2022-04-28-16-15-52-85.png', '081338433765'),
(320, 'Samping Milenium', 'Jln Timor Raya', '-10.14725', '123.61242', '16511339730113.jpg', '082235467669'),
(321, 'Penkase Oeleta', 'Penkase', '-10.19142', '123.55093', 'Screenshot_2021-01-28-17-09-11-661.png', 'facebook'),
(322, 'Samping SMP 5 Walikota', 'Jln. Frans Seda', '-10.15638', '123.62411', 'Screenshot_2021-01-28-17-08-33-112.png', 'facebook'),
(323, 'Depan ondok Indah Matani', 'Jln Claret', '-10.15987', '123.68699', 'Screenshot_2021-01-28-17-09-35-552.png', '085338027442'),
(324, 'Depan Gereja Koinonia', 'Jln. Jendral Sudirman', '-10.17117', '123.58989', 'IMG20220403174423.jpg', '0811383235'),
(325, 'Nunhila', 'Jln. Pahlawan', '-10.16664', '123.57103', 'IMG202104291515091.jpg', '081339667377'),
(326, 'Tdm', 'Jln. Tuak Daun Merah', '-10.16638', '123.62958', 'IMG20220505183150.jpg', '081314454448'),
(327, 'depan PMI', 'Jln. Veteran Oebobo', '-10.15435', '123.61086', 'IMG20220403180156.jpg', '081235672222'),
(328, 'Depan Hotel Romita', 'Jln.Perintis Kemerdekaan II', '-10.17533', '123.62546', 'IMG-20220729-WA0004.jpg', '081328033353'),
(329, 'oebufu 2', 'Jln. Perintis Kemerdekaan', '-10.17589', '123.62441', 'IMG20220505183638.jpg', '0811384460'),
(330, 'Lampu Merah Polda', 'Jln. Jendral Sudirman', '-10.17715', '123.59530', 'IMG20220403173927.jpg', '082144865638'),
(331, 'oebufu 1', 'Jln.', '-10.17787', '123.62243', 'Screenshot_2021-01-30-16-21-03-64.png', 'facebook'),
(332, 'Halte Depan Bank Mandiri', 'Jln. Urip Sumohardjo', '-10.16232', '123.58297', 'Screenshot_2021-01-30-16-23-28-691.png', '081338444999'),
(333, 'Kelapa Lima', 'Jln Samratulangi', '-10.15045', '123.62738', '', 'facebook = Andhy Soin'),
(334, 'Tofa', 'Jln. Amabi', '-10.18071', '123.61510', 'IMG20220505184106.jpg', '082118180001'),
(335, 'Depan Stadiun Merdeka', 'Jln. Ahmad Yani', '-10.15957', '123.58877', 'IMG_20220705_232928.jpg', '081338725921'),
(336, 'Pulau Indah', 'Jln Samratulangi', '-10.15107', '123.63272', 'IMG-20220729-WA0007.jpg', '085238038999'),
(337, 'Liliba 1', 'Jln. Piet A. Tallo', '-10.15704', '123.64300', 'IMG20220403171450.jpg', '08113828544'),
(338, 'Liliba 2', 'Jln Piet. A Tallo', '-10.15706', '123.64267', 'IMG-20220729-WA0005.jpg', '081339208055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id` int(128) NOT NULL,
  `kriteria` varchar(128) NOT NULL,
  `cMAX` int(128) NOT NULL,
  `cMIN` int(128) NOT NULL,
  `utility` varchar(128) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id`, `kriteria`, `cMAX`, `cMIN`, `utility`, `bobot`) VALUES
(288, 'keramaian', 3, 1, 'benefit', 20),
(289, 'fasilitas', 3, 1, 'benefit', 10),
(290, 'keamanan', 3, 1, 'benefit', 10),
(291, 'kompetitor', 5, 1, 'benefit', 10),
(292, 'perijinan', 3, 1, 'benefit', 15),
(329, 'luas', 220, 9, 'benefit', 15),
(330, 'Harga', 130, 15, 'cost', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `username`, `password`) VALUES
(9, 'randy', '163218e536c13ff2fc9a4d76e34be085'),
(10, 'ari', 'fc292bd7df071858c2d0f955545673c1'),
(34, 'aa', '2fb1c5cf58867b5bbc9a1b145a86f3a0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `tabel_data_alternatif`
--
ALTER TABLE `tabel_data_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1600;

--
-- AUTO_INCREMENT untuk tabel `tabel_data_alternatif`
--
ALTER TABLE `tabel_data_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  ADD CONSTRAINT `tabel_bobot_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tabel_kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_bobot_kriteria_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `tabel_data_alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
