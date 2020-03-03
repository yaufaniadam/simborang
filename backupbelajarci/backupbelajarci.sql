-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: belajarci
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ci_user_groups`
--

DROP TABLE IF EXISTS `ci_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_user_groups`
--

LOCK TABLES `ci_user_groups` WRITE;
/*!40000 ALTER TABLE `ci_user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_users`
--

DROP TABLE IF EXISTS `ci_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verify` tinyint(4) NOT NULL DEFAULT 0,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_prodi` int(4) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_users`
--

LOCK TABLES `ci_users` WRITE;
/*!40000 ALTER TABLE `ci_users` DISABLE KEYS */;
INSERT INTO `ci_users` VALUES (3,'admin','Admin Pasca','Laki-laki','admin@pascasarjana.umy.ac.id','085625634563','$2y$10$y37n4wM7DNczJq63acils.3HOS56kUdHdpSxFH0DnK4h6FDSL5kVq',1,0,1,1,'','','','2017-09-29 10:09:44','2020-01-28 00:00:00',0,'./uploads/fotoProfil/'),(72,'fitriarofiati','Fitri Arofiati, S.Kep., Ns., M','','fitriarofiati@umy.ac.id','0813','$2y$10$G245Ti2.f4UgnxBVvdtJjeRsiPrPitthj84lwPUwFvsnWB.koWkm.',1,1,1,4,'','','','2020-01-16 00:00:00','2020-01-21 00:00:00',2,'./uploads/fotoProfil/bufitri.png'),(69,'erna','Erna Rochmawati, S.Kp., MNSc.,','','erna.rochmawati@umy.ac.id','081354519149','',1,0,1,3,'','','','2020-01-15 00:00:00','2020-01-16 00:00:00',0,'./uploads/fotoProfil/buerna.png'),(73,'nurchayati','Nur Chayati, S.Kep., Ns., M.Ke','','nurchayati@umy.ac.id','0812','$2y$10$LWJSL3JB3fvQKbzgTsWcsejnPr8Qow5LuarlAbpnThZvS8zQq7ttO',1,1,1,4,'','','','2020-01-16 00:00:00','2020-01-16 00:00:00',2,''),(74,'titihhuriah','Dr. Titih Huriah, S.Kep., Ns.,','','titihhuriah@umy.ac.id','081','$2y$10$9eb6lQ6dEGusfbSBjxVxauKDJN/9dntSrk2YXqw4hyWzSr6QeUfu6',1,1,1,4,'','','','2020-01-16 00:00:00','2020-01-16 00:00:00',2,''),(75,'imanpermana','dr. Iman Permana, M.Kes., Ph.D','','imanpermana@umy.ac.id','081','$2y$10$fPjkvvXI9r5hL3NhsIvyD.j.bQxLtYSVj4NxfR44YdgkyLCrjiBdq',1,1,1,4,'','','','2020-01-16 00:00:00','2020-01-21 00:00:00',2,'./uploads/fotoProfil/'),(76,'mkep','TU Prodi M Kep','','mkep@umy.ac.id','081','$2y$10$GYiFq21AGvBM.FhYsZfHFefOKVEdd9gHrVTdkxBajuqOBLZJ5CtKO',1,1,1,2,'','','','2020-01-16 00:00:00','2020-01-28 00:00:00',2,'./uploads/fotoProfil/'),(77,'rizalyaya','Rizal Yaya, SE., Akt., M.Sc., Ph.D','','rizalyaya@umy.ac.id','081','$2y$10$3K6g532YB7O/VGJTvi2eOezWwET0Qi8Ba0zTbBNWncEI0NUiY5ahO',1,1,1,4,'','','','2020-01-16 00:00:00','2020-01-16 00:00:00',1,'./uploads/fotoProfil/pak-rizal-300x400-150x150.png');
/*!40000 ALTER TABLE `ci_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coba`
--

DROP TABLE IF EXISTS `coba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coba` (
  `id_coba` int(10) NOT NULL AUTO_INCREMENT,
  `isi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_coba`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coba`
--

LOCK TABLES `coba` WRITE;
/*!40000 ALTER TABLE `coba` DISABLE KEYS */;
INSERT INTO `coba` VALUES (34,'sss'),(35,'ddd'),(36,'fff'),(37,'ggg');
/*!40000 ALTER TABLE `coba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_apt`
--

DROP TABLE IF EXISTS `dokumen_apt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_apt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT current_timestamp(),
  `id_prodi` int(5) DEFAULT NULL,
  `id_kategori_dokumen` varchar(30) DEFAULT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_apt`
--

LOCK TABLES `dokumen_apt` WRITE;
/*!40000 ALTER TABLE `dokumen_apt` DISABLE KEYS */;
INSERT INTO `dokumen_apt` VALUES (1,'asdlkofh','osdnovs','./uploads/dokumen/AttachedImage.docx','2020-02-24 13:00:25',1,'7',2019),(11,'asdfghjk','ksdksdv','./uploads/dokumen/AttachedImage.docx','2020-02-24 14:40:28',2,'7',2018),(12,'slosdvo','ksndcsndv','./uploads/dokumen/SIM_BORANG_BPM_UMY.docx','2020-02-24 14:42:09',2,'7',2020),(13,'asldoas','slkdnvosd','./uploads/dokumen/SIM_BORANG_BPM_UMY2.docx','2020-02-24 15:22:54',0,'8',2016),(14,'kjhsdofh','lsknlfan','./uploads/dokumen/SIM_BORANG_BPM_UMY3.docx','2020-02-25 15:49:09',0,'7',2019),(15,'asdfaf;l;s;lk;sdksk//','ldknldvn','./uploads/dokumen/SIM_BORANG_BPM_UMY4.docx','2020-02-25 16:04:58',0,'8',2020),(16,'hjklnl','ldknldvn','./uploads/dokumen/SIM_BORANG_BPM_UMY5.docx','2020-02-25 16:05:21',0,'8',2020),(17,',lfn','jdsp','./uploads/dokumen/SIM_BORANG_BPM_UMY6.docx','2020-02-25 16:05:51',0,'7',2222),(18,',lfn','jdsp','./uploads/dokumen/SIM_BORANG_BPM_UMY7.docx','2020-02-25 16:21:53',0,'7',2222),(19,'doc','jhskdhfisdufi','./uploads/dokumen/SIM_BORANG_BPM_UMY8.docx','2020-02-25 16:25:12',0,'7',2020),(20,'dokumen2','msdflmdf','./uploads/dokumen/SIM_BORANG_BPM_UMY9.docx','2020-02-25 16:28:28',0,'7',2020),(21,'kldnl','LKDMCLKDSMV','./uploads/dokumen/SIM_BORANG_BPM_UMY10.docx','2020-02-25 16:28:59',0,'8',2020),(22,'lain1','lain lain','./uploads/dokumen/SIM_BORANG_BPM_UMY11.docx','2020-02-25 17:07:50',0,'14',2019),(23,'asdfghjk','ksdksdv','./uploads/dokumen/AttachedImage.docx','2020-02-24 14:40:28',2,'7',2018),(24,'kjsdnfsof','d;dld;ldd;','./uploads/dokumen/SIM_BORANG_BPM_UMY12.docx','2020-02-28 14:16:08',0,'16',2012),(25,'asdfafasdas','lmsdfodf','./uploads/dokumen/SIM_BORANG_BPM_UMY13.docx','2020-02-28 15:11:01',1,'7',2022),(26,'dokumen1','sfsfsee','./uploads/dokumen/SIM_BORANG_BPM_UMY14.docx','2020-02-28 15:11:50',6,'7',2222),(27,'sjffjp','lsmldsd\r\nsdsdf\r\nsdfsd','./uploads/dokumen/SIM_BORANG_BPM_UMY15.docx','2020-02-28 15:31:23',1,'15',2020);
/*!40000 ALTER TABLE `dokumen_apt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(50) NOT NULL,
  `singkatan` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fakultas`
--

LOCK TABLES `fakultas` WRITE;
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;
INSERT INTO `fakultas` VALUES (1,'Teknik ','ft'),(2,'Pertanian','fp'),(3,'Ekonomi dan Bisnis','feb'),(4,'Ilmu Sosial dan Ilmu Politik','fisipol'),(5,'Hukum','fh'),(6,'Agama Islam','fai'),(7,'Pendidikan Bahasa','fpb'),(8,'Vokasi','vokasi'),(9,'Kedokteran dan Ilmu Kesehatan','fkik');
/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_dokumen`
--

DROP TABLE IF EXISTS `kategori_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_dokumen` varchar(100) NOT NULL,
  `singkatan` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_dokumen` (`kategori_dokumen`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_dokumen`
--

LOCK TABLES `kategori_dokumen` WRITE;
/*!40000 ALTER TABLE `kategori_dokumen` DISABLE KEYS */;
INSERT INTO `kategori_dokumen` VALUES (7,'Evaluasi Diri','evaluasi'),(8,'Lampiran Evaluasi Diri','led'),(14,'Lain-lain','lain'),(15,'Hasil','hsl'),(16,'LKPT','lkpt'),(17,'Lampiran LKPT','llkpt');
/*!40000 ALTER TABLE `kategori_dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penelitian`
--

DROP TABLE IF EXISTS `penelitian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penelitian` (
  `id_penelitian` int(10) NOT NULL AUTO_INCREMENT,
  `judul_penelitian` varchar(200) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `id_dosen` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `date` date NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_revisi` varchar(255) NOT NULL,
  `file_akhir` varchar(255) NOT NULL,
  `id_checklist_penilaian` varchar(50) NOT NULL,
  `komentar_reviewer` text NOT NULL,
  `hasil_penilaian` int(2) NOT NULL,
  `id_prodi` int(3) NOT NULL,
  `id_pengupload` int(3) NOT NULL,
  PRIMARY KEY (`id_penelitian`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penelitian`
--

LOCK TABLES `penelitian` WRITE;
/*!40000 ALTER TABLE `penelitian` DISABLE KEYS */;
INSERT INTO `penelitian` VALUES (34,'Hubungan Antara Dukungan Keluarga dengan Pengelolaan Diri (Self Care) pada Pasien Diabetes Mellitus Tipe 2 di RSUD MM. Dunda Limboto Kab. Gorontalo','RSUD MM Dunda Limboto Gorontalo','0000-00-00',72,2,'2020-01-16','Hubungan Antara Dukungan Keluarga dengan Pengelolaan Diri (Self Care) pada Pasien Diabetes Mellitus Tipe 2 di RSUD MM. Dunda Limboto Kab. Gorontalo Hubungan Antara Dukungan Keluarga dengan Pengelolaan Diri (Self Care) pada Pasien Diabetes Mellitus Tipe 2 di RSUD MM. Dunda Limboto Kab. Gorontalo','./uploads/penelitian/HUBUNGAN_ANTARA_DUKUNGAN_KELUARGA_DENGAN_PENGELOLAAN_DIRI.docx','','','1','',1,2,3),(35,'Pengalaman Kesiapsiagaan Perawatan dalam Penatalaksanaan Aspek Psikologis Akibat Gempa Bumi di Rumah Sakit Jiwa Mutiara Sukma Provinsi Nusa Tenggara Barat','Rumah Sakit Jiwa Mutiara Sukma NTB','0000-00-00',73,0,'2020-01-16','Pengalaman Kesiapsiagaan Perawatan dalam Penatalaksanaan Aspek Psikologis Akibat Gempa Bumi di Rumah Sakit Jiwa Mutiara Sukma Provinsi Nusa Tenggara Barat Pengalaman Kesiapsiagaan Perawatan dalam Penatalaksanaan Aspek Psikologis Akibat Gempa Bumi di Rumah Sakit Jiwa Mutiara Sukma Provinsi Nusa Tenggara Barat','./uploads/penelitian/Bibliography.docx','','','0','',0,2,76),(36,'Analisis Perbandingan Kemampuan Kognitif Pada Materi Dokumentasi Keperawatan Berbasis E-Learning dan Konvensional di Program Studi Keperawatan Untan Pontianak','Untan Pontianak','0000-00-00',74,2,'2020-01-16','Analisis Perbandingan Kemampuan Kognitif Pada Materi Dokumentasi Keperawatan Berbasis E-Learning dan Konvensional di Program Studi Keperawatan Untan Pontianak Analisis Perbandingan Kemampuan Kognitif Pada Materi Dokumentasi Keperawatan Berbasis E-Learning dan Konvensional di Program Studi Keperawatan Untan Pontianak','./uploads/penelitian/Analisis_Perbandingan_Kemampuan_Kognitif_Pada_Materi_Dokumentasi_Keperawatan_Berbasis_E.docx','./uploads/penelitian/Analisis_Perbandingan_Kemampuan_Kognitif_Pada_Materi_Dokumentasi_Keperawatan_Berbasis_E.docx','','1,2','ada',2,2,76),(37,'Judul Penelitian Deskripsi Singkat','Gua Selarong','2020-05-02',72,0,'2020-01-19','test','./uploads/penelitian/01_peminjaman_tempat_FASI_2019_rev2.docx','','','0','',0,2,3);
/*!40000 ALTER TABLE `penelitian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultas` int(5) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `singkatan_prodi` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodi`
--

LOCK TABLES `prodi` WRITE;
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` VALUES (1,1,'Teknik Elektro','elektro'),(2,1,'Studi Teknik Mesin','mesin'),(3,1,'Teknik Sipil','sipil'),(4,1,'Teknik Informatika','informasi'),(5,2,'Agroteknologi','agrotek'),(6,3,'Manajemen Kelas Internasional','imabs'),(7,3,'Akuntansi Kelas Internasional','ipacc'),(8,3,'Ekonomi Pembangunan Kelas Internasional','ipief'),(9,2,'Agribisnis','agribsn'),(10,4,'Ilmu Hubungan Internasional - Reguler','ihireg'),(11,4,'Ilmu Hubungan Internasional Kelas Internas','ipirel'),(12,4,'Ilmu Pemerintahan - Reguler','ipreg'),(13,4,'Ilmu Pemerintahan Kelas Internasional','igov'),(14,4,'Ilmu Komunikasi','ik'),(15,5,'Ilmu Hukum - Reguler','ihreg'),(16,5,'Ilmu Hukum Kelas Internasional ','ipols'),(17,6,'Komunikasi dan Penyiaran Islam','kpislam'),(18,6,'Pendidikan Agama Islam','pai'),(19,6,'Ekonomi Syariah','es'),(20,7,'Pendidikan Bahasa Inggris','pbi'),(21,7,'Pendidikan Bahasa Arab','pba'),(22,7,'Pendidikan Bahasa Jepang','pbj'),(23,8,'Teknik Elektromedik','temedik'),(24,8,'Teknik Mesin ','tmesin'),(25,8,'Akuntansi ','ak'),(26,9,'Pendidikan Dokter','pdokter'),(27,9,'Kedokteran Gigi','kgigi'),(28,9,'Ilmu Keperawatan','prwt'),(29,9,'Farmasi','frms');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `umur` int(2) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `last_updated` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (4,'siswa44','1234','fffff',14,'./uploads/fotoProfil/51.PNG','2020-02-19 03:54:33'),(7,'siswa7','324','asdaf',14,'./uploads/fotoProfil/','2020-02-19 07:57:52'),(8,'siswa8','123','asdfgg',20,'','2020-02-19 07:59:37'),(9,'siswa9','2344','kkkkkk',15,'','2020-02-19 08:03:14'),(12,'siswa1','1234','sssss',16,'','2020-02-19 10:11:10'),(13,'siswa2','1234','lasdlknfkdj',16,'','2020-02-19 10:20:06'),(16,'asfaff','1412','zjdfjsdjhfh',17,'','2020-02-21 03:58:56'),(17,'hsdgu','52374','aihfueg',16,'./uploads/fotoProfil/5.PNG','2020-02-21 04:08:36'),(18,'siswa55','123','asfa',13,'./uploads/fotoProfil/','2020-02-21 05:24:04');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-29 21:50:58
