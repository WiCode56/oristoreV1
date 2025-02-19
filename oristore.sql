-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oristore`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(101, 'notebook'),
(201, 'accessories'),
(301, 'monitor');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `namaproduct` varchar(80) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `harga` double UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `stok` int(8) UNSIGNED NOT NULL,
  `gambar` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `namaproduct`, `merk`, `harga`, `id_kategori`, `deskripsi`, `stok`, `gambar`) VALUES
(38, 'Mouse Rexus Q30', 'Rexus', 60000, 201, 'REXUS Q30 Wireless Mouse 2.4Ghz Silent Click - Black\r\nPlug & Play\r\n----------\r\nDimensi : 103.3 x 61 x 38mm\r\nFrekuensi : 2402 - 2480 Mhz\r\nJangkauan : 8 - 10 meter\r\nResolusi : 1200 DPI\r\nTipe baterai : AA (1 Buah)\r\nMode hemat daya : 3 level otomatis\r\nDaya : 1.5V DC, hingga 15mA\r\nUSB : Nano receiver', 5, 'rexus-q30.png'),
(39, 'Asus Vivobook A1404', 'Asus', 10000000, 101, '• Processor : Intel® Core™ i5-1335U Processor 1.3 GHz (12MB Cache, up to 4.6 GHz, 10 cores, 12 Threads)\r\n• Operating System : Windows 11 Home\r\n• Graphics : Intel® UHD Graphics / Intel Iris Xᵉ Graphics\r\n• Display : 14.0-inch, FHD (1920 x 1080) 16:9 aspect ratio, IPS-level Panel, LED Backlit, 60Hz refresh rate, 250nits, 100% sRGB color gamut, Anti-glare display, TÜV Rheinland-certified, Non-touch screen, (Screen-to-body ratio)82%\r\n• Memory : DDR4 8GB / 16GB 3200 MHz\r\n• Storage : 512GB M.2 NVMe™ PCIe® 4.0 SSD\r\n\r\n• I/O Ports :\r\n1x USB 2.0 Type-A\r\n1x USB 3.2 Gen 1 Type-C\r\n2x USB 3.2 Gen 1 Type-A\r\n1x HDMI 1.4\r\n1x DC-in\r\n\r\n• Keyboard & Touchpad : Backlit Chiclet Keyboard, 1.4mm Key-travel, Precision Touchpad, Support NumberPad\r\n• Camera : 720p HD camera With privacy shutter\r\n\r\n• Audio :\r\nSonicMaster\r\nBuilt-in speaker\r\nBuilt-in array microphone\r\nwith Cortana voice-recognition support\r\n\r\n• Network and Communication : Wi-Fi 6E(802.11ax) (Dual band) 1*1 + Bluetooth® 5.3 Wireless Card\r\n• Battery : 42WHrs, 3S1P, 3-cell Li-ion\r\n• Power Supply : ø4.5, 45W AC Adapter, Output: 19V DC, 2.37A, 45W, Input: 100~240V AC 50/60Hz universal\r\n• Weight : 1.40 kg (3.09 lbs)\r\n• Dimensions (W x D x H) : 32.49 x 21.39 x 1.79 ~ 1.79 cm (12.79\" x 8.42\" x 0.70\" ~ 0.70\")\r\n\r\n• Built-in Apps :\r\nMyASUS\r\nScreenXpert\r\nGlideX\r\n\r\n• ASUS Exclusive technology : ASUS Antimicrobial Guard Plus\r\n• Microsoft Office : Microsoft Office Home & Student 2021\r\n• Military Grade : US MIL-STD 810H military-grade standard\r\n\r\n• Ecolabels & Compliances :\r\nEnergy star 8.0\r\nRoHS\r\nREACH\r\n\r\n• Security :\r\nBIOS Booting User Password Protection\r\nTrusted Platform Module (Firmware TPM)\r\nBIOS setup user password\r\nMcAfee® LiveSafe™', 56, 'asus-vivobook-14-A1404.png'),
(40, 'Lenovo Ideapad Slim 5i', 'Lenovo', 15000000, 101, 'Lenovo Ideapad Slim 5i i7-13620H 16GB 512GB SSD IPS Win11+OHS\r\n\r\nIntel® Core™ i7-13620H, 10C (6P + 4E) / 16T, P-core 2.4 / 4.9GHz, E-core 1.8 / 3.6GHz, 24MB\r\nGraphics: Integrated Intel® UHD Graphics\r\nChipset: Intel® SoC Platform\r\nMemory: 16GB Soldered LPDDR5-5200\r\nMemory Slots: Memory soldered to systemboard, no slots, dual-channel (16GB models)\r\nMax Memory: 16GB soldered memory, not upgradable\r\nStorage: 512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®\r\nStorage Support: One drive, up to 1TB M.2 2242 SSD or 1TB M.2 2280 SSD\r\nStorage Slot: One M.2 2280 PCIe® 4.0 x4 slot\r\nCard Reader: microSD Card Reader\r\nAudio Chip: High Definition (HD) Audio\r\nSpeakers: Stereo speakers, 2W x2, optimized with Dolby® Audio™\r\nCamera: FHD 1080p + IR with Privacy Shutter, ToF Sensor\r\nMicrophone: 2x, Array\r\nBattery: Integrated 56.6Wh\r\nPower Adapter: 65W USB-C® (3-pin)\r\nDisplay: 14\" WUXGA (1920x1200) IPS 300nits Anti-glare, 45% NTSC, TÜV Low Blue Light\r\nTouchscreen: None\r\nKeyboard: Backlit, English\r\nSurface Treatment: Aluminium Stamping (Anodized with Sandblasting)\r\nCase Material: Aluminium (Top), Aluminium (Bottom)\r\nDimensions (WxDxH): 312 x 221 x 16.9 mm (12.28 x 8.7 x 0.67 inches)\r\nWeight: Starting at 1.46 kg (3.22 lbs)\r\nOperating System: Windows® 11 Home Single Language, English\r\nBundled Software: Office Home & Student 2021\r\nEthernet: No Onboard Ethernet\r\nWLAN + Bluetooth: Wi-Fi® 6E, 11ax 2x2 + BT5.1\r\nStandard Ports: \r\n1x USB 3.2 Gen 1\r\n1x USB 3.2 Gen 1 (Always On)\r\n2x USB-C® 3.2 Gen 1 (support data transfer, Power Delivery 3.0 and DisplayPort™ 1.4)\r\n1x HDMI® 1.4b\r\n1x microSD card reader\r\n1x Headphone / microphone combo jack (3.5mm)\r\n\r\nSecurity Chip: Firmware TPM 2.0 Enabled\r\nFingerprint Reader: None\r\nOther Security: IR camera for Windows® Hello, Camera privacy shutter\r\nTÜV Rheinland® Low Blue Light (Software Solution)\r\nMIL-STD-810H military test passed (20 test items)', 5, 'lenovo-ideapad-slim-5i new.png'),
(42, 'Rexus Daiva Mechanical ', 'Rexus', 600000, 201, 'Keyboard Rexus Daiva kini memiliki layout TKL 87 tombol dengan desain compact dan fitur unggulan. Tersedia dalam pilihan case hitam dan putih elegan, pencahayaan LED south facing, pilihan switch: Outemu Blue, Outemu Brown, dan KTT Kang White, build quality ringan dan kokoh, baterai 2500 mAh yang kuat, konektivitas triple (Bluetooth, 2.4G, kabel), keycaps PBT Double Injection, hot swappable Jwick 3 atau 5-pin), stabilizer Prelube, kenyamanan mengetik yang ditingkatkan dengan plate dan case Eva Foam, penyesuaian ketinggian dalam 2 tingkat, pencahayaan RGB 22 mode, serta mode sinkronisasi musik yang tersedia melalui perangkat lunak yang tentunya membuat keyboard ini tampil gaya, namun tetap fungsional. \r\n\r\n87-Keys TKL Layout for Compact Efficiency\r\nElegant Black and White Case\r\nDynamic South Facing LED Illumination\r\nVersatile Switch Options (Outemu Blue, Outemu Brown, and KTT Kang White)\r\nCompact, Lightweight, and Sturdy Build Quality\r\nPowerful 2500 mAh Battery\r\nTriple Connectivity for Seamless Interaction (Bluetooth, 2.4G, Cable)\r\nKeycaps PBT Double Injection Black Accent & White Accent\r\n3 or 5-Pin Hotswappable Jwick Socket\r\nStable Prelube Stabilizer\r\nBetter Typing Sound with Eva Foam Plate and Case\r\nCustomize Height in 2-step Adjuster\r\nVibrant 22 RGB LED Lighting\r\nFree Additional 4 Switches\r\nMusic Sync Mode Available by Software', 5, 'rexus-mechanical-daiva-new-white.png'),
(43, 'Acer Aspire 3 A314', 'Acer', 5000000, 101, 'Performa optimal untuk selesaikan tugas sehari-hari (Office, Email, Browsing dan Editing Visual Ringan)\r\nPenampilan baru, lebih ringkas dan ringan hanya 1,4kg\r\nDapatkan suara yang lebih jernih dengan Acer PurifiedVoice (Noise Cancellation) dan kamera lebih terang dengan teknologi Acer Temporal Noise Reduction (TNR).\r\n\r\nAspire 3 Slim (A314-36M)\r\nProcessor : Intel Core i3-N305 processor (8 Cores)\r\nOS : Windows 11 Home\r\nMemory : 8 GB LPDDR5 Memory\r\nStorage : 512 GB SSD NVMe Gen3\r\nInch, Res, Ratio, Panel : 14\" HD Acer ComfyView LED-backlit TFT LCD\r\nGraphics : Intel UHD Graphics\r\nFeatures : Acer Purified Voice (Noise Cancellation), HD Camera with Acer TNR\r\nStamp : Office Home Student 2021', 5, 'acer-aspire-3-A314.png'),
(44, 'Acer Aspire 5 A514', 'Acer', 12000000, 101, 'Acer Aspire 5 Slim (A514-56P) :\r\n\r\n- Prosesor : Intel® Core™ i5-1335U Processor 1.3 GHz (12MB Cache, up to 4.6 GHz, 10 cores, 12 Threads)\r\n- Display : 14\" WUXGA (1920x1200), IPS, Acer ComfyView\r\n- Grafis : Intel Iris Xe Graphics (80 EU)\r\n- Memori : 2x4GB (8GB) / 2x8GB (16GB) LPDDR5 Dual Channel Memory onboard\r\n- Storage : 512 GB SSD PCIe Gen4 NVMe\r\n- Konektivitas : Wi-Fi 6E 802.11ax, Bluetooth 5.2,\r\n- Keyboard : Chicklet Keyboard\r\n\r\n- Port :\r\n1x HDMI® port 2.1 with HDCP support;\r\n2x USB 3.2 Gen 1 (1x with power off charging features);\r\n1x Audio Jack\r\n\r\n- Sistem Operasi : Windows 11 Home + Microsoft Office Home and Student 2021\r\n- Webcam : HD 720p webcam with Temporal Noise Reduction\r\n- Battery : 3 Cell 50Whrs', 5, 'acer-aspire-5-A514.png'),
(45, 'Monitor BenQ Zowie', 'BenQ', 9000000, 301, 'Monitor LED BenQ Zowie XL2546K HDMI Full HD 240Hz\r\nSpesifikasi :\r\n===========\r\nMonitor Gaming BenQ ZOWIE XL2546K adalah Monitor terbaru hadir dengan fitur dan kelebihan yang berguna untuk para pro gamers:\r\n+ Full HD 24 inch 240Hz refresh rate\r\n+ 0.5 ms Response time\r\n+ TN Panel\r\n+ DyAc+ Technology – Kejernihan untuk setiap objek yang bergerak\r\n+Black eQualizer meningkatkan visibilitas area gelap tanpa overexposing area terang.\r\n+Color Vibrance untuk menyesuaikan pengaturan warna dan tone untuk membedakan target musuh dalam game.\r\n+XL Setting to Share:Bagikan pengaturan Anda sendiri dengan rekan satu tim, teman, atau penggemar Anda. Simpan profil video dengan cepat dan bagikan dengan mudah melalui interface pengguna yang sederhana.\r\n+ S switch: Perubahan user interface dan S-Switch memungkinkan Anda untuk menyesuaikan pengaturan FPS yang ingin Anda akses dengan cepat melalui quick menu, dan juga menawarkan Anda untuk akses dengan 1 klik.\r\n+ Shield\r\n+ Pengaturan ketinggian:Pivot, Swivel, Tilt, Pengaturan ketinggian hingga 155 mm\r\n+ Port: HDMI 2.0 x3 / DP 1.2 / headphone jack\r\n+Eye care: Flicker free (DyAc off), Low blue light\r\n+Vesa wallmount 10 x10 cm', 5, 'monitor-benq-zowie-xl2546k_2-1.png'),
(46, 'Hdmi', '-', 20000, 201, 'Hdmi dengan kualitas kabel yang kuat', 5, 'hdmi.png'),
(47, 'Rexus Headset Bluetooth S8', 'Rexus', 400000, 201, 'Versi Nirkabel                                              : 5.1\r\n\r\nJarak Penggunaan                                      : Hingga 10M\r\n\r\nImpedansi                                                     : 32? ± 15%\r\n\r\nDriver                                                             : 40mm\r\n\r\nFrekuensi                                                      : 20HZ – 15KHZ\r\n\r\nWaktu Penggunaan                                     : 15 jam\r\n\r\nWaktu Siaga                                                  : hingga 200 jam \r\n\r\nBaterai                                                            : 300 mAh, Lithium ion polymer yang tidak dapat diganti \r\n\r\nDaya                                                                : DC5V (± 0.25W)', 5, 'headset-rexus.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `gender` enum('Laki-laki','Perempuan','Other') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('superadmin','admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `alamat`, `notelp`, `gender`, `username`, `password`, `role`) VALUES
(1, 'I Made Wira Atmaja', 'madewira@gmail.com', '', '', 'Laki-laki', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
(2, 'Wira', 'wira@gmail.com', 'Jalan Gunung Mas', '08778132425324', 'Laki-laki', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'Atmaja', 'atmaja@gmail.com', '', '', 'Perempuan', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(4, 'Wira Web', 'Webwira@gmail.com', 'Jln gunung Semeru', '08723178313', 'Laki-laki', 'superadmin2', 'superadmin2', 'superadmin'),
(6, 'Ruina', 'Rui@gmail.com', 'Jalan Isekai', '0781737123', 'Other', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user'),
(11, 'Ariawan', 'Ariawan@gmail.com', 'Jalan Gianyar', '0887282133', 'Laki-laki', 'ari', 'fc292bd7df071858c2d0f955545673c1', 'user'),
(23, 'eda', 'eda@gmail.com', 'Jalan Gunung Andakasa', '08623842424', 'Laki-laki', 'eda', 'c1cf01e97872427ced3cc4d2b5410705', 'admin'),
(24, 'kayaoranggila', 'kaya@gmail.com', 'jalan ajalan', '09878', 'Laki-laki', 'yaka', '8db8add152dd60d338466d0868bb4e9f', 'superadmin'),
(26, 'kantra', 'kantra@gmail.com', 'Jalan Abian', '09877658436857395', 'Other', 'satria', '477054c78baea7a1242f79d898a2ca46', 'user'),
(27, 'saka', 'saka@gmail.com', 'Jalan Gunung Kasa', '08799563535', 'Laki-laki', 'saka', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(28, 'ridho', 'ridho@gmail.com', 'Jalan Gunung Agung', '0797967856', 'Laki-laki', 'ridho', '926a161c6419512d711089538c80ac70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
