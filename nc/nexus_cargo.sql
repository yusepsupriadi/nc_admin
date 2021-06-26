/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : nexus_cargo

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 26/06/2021 11:58:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Yusep Supriadi', 'user.jpg');

-- ----------------------------
-- Table structure for booking
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking`  (
  `Id` int(11) NOT NULL,
  `BookingId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CollectionName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CollectionAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CollectionContactNo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TotalPkgs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DeliveryName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DeliveryAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `DeliveryContactNo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `EmailNotif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `StatusBooking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of booking
-- ----------------------------
INSERT INTO `booking` VALUES (1, 'NC2162300001', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'RESERVED', 'tes', '2021-06-23 13:30:48');
INSERT INTO `booking` VALUES (2, 'NC2162300002', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'RESERVED', 'tes', '2021-06-23 13:30:53');
INSERT INTO `booking` VALUES (3, 'NC2162300003', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'VOID', 'tes', '2021-06-23 13:30:54');
INSERT INTO `booking` VALUES (4, 'NC2162300004', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'VOID', 'tes', '2021-06-23 13:30:56');
INSERT INTO `booking` VALUES (5, 'NC2162300005', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'CANCELLED', 'tes', '2021-06-23 13:30:58');
INSERT INTO `booking` VALUES (6, 'NC2162300006', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'CANCELLED', 'tes', '2021-06-23 13:31:00');
INSERT INTO `booking` VALUES (7, 'NC2162300007', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'DRAFT', 'tes', '2021-06-23 13:31:01');
INSERT INTO `booking` VALUES (8, 'NC2162300008', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'DRAFT', 'tes', '2021-06-23 13:31:03');
INSERT INTO `booking` VALUES (9, 'NC2162300009', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'DRAFT', 'tes', '2021-06-23 13:31:06');
INSERT INTO `booking` VALUES (10, 'NC2162300010', 'Yusep', 'Indonesia', '08996221131', 'Baju', '20 Kg', 'Bambang', 'Malaysia', '08996221131', 'yusepit@gmail.com', 'DRAFT', 'tes', '2021-06-23 13:31:08');

-- ----------------------------
-- Table structure for kelamin
-- ----------------------------
DROP TABLE IF EXISTS `kelamin`;
CREATE TABLE `kelamin`  (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelamin
-- ----------------------------
INSERT INTO `kelamin` VALUES (1, 'Laki laki');
INSERT INTO `kelamin` VALUES (2, 'Perempuan');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES (1, 'Malangtt');
INSERT INTO `kota` VALUES (3, 'Blitar');
INSERT INTO `kota` VALUES (4, 'Tulungagung');
INSERT INTO `kota` VALUES (17, 'Jakarta');
INSERT INTO `kota` VALUES (21, 'Surabaya');
INSERT INTO `kota` VALUES (22, 'Paris');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `BookingId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CollectionName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CollectionAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CollectionContactNo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `DeliveryName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `DeliveryAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `DeliveryContactNo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ItemDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PiecesNo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Value` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TotalPackages` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Weigth` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `AmountPayble` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_date` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `updated_date` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 'NC2162300001', 'NC2162300001', 'Yusep', 'Indonesia', '08996221131', 'Bambang', 'Malaysia', '08996221131', 'Baju', '20', '2000000', '2', '20 kg', 'yusepiT@gmail.com', '1000000', 'On Process', 'yusep', '2021-06-25 10:06:53', NULL, NULL);
INSERT INTO `orders` VALUES (2, 'NC2162300007', 'NC2162300007', 'Yusep', 'Indonesia', '08996221131', 'Bambang', 'Malaysia', '08996221131', 'Baju', 'sd', 'sdf', '20 Kg', 'asda', 'asdas', 'asdas', 'On Process', 'yusep', '2021-06-25 10:49:57', NULL, NULL);
INSERT INTO `orders` VALUES (3, 'NC2162300007', 'NC2162300007', 'Yusep', 'Indonesia', '08996221131', 'Bambang', 'Malaysia', '08996221131', 'Baju', 'sd', 'sdf', '20 Kg', 'asda', 'asdas', 'asdas', 'On Process', 'yusep', '2021-06-25 10:49:57', NULL, NULL);

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai`  (
  `id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kota` int(11) NULL DEFAULT NULL,
  `id_kelamin` int(1) NULL DEFAULT NULL,
  `id_posisi` int(11) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('10', 'Antony Febriansyah Hartono', '082199568540', 1, 1, 1, 1);
INSERT INTO `pegawai` VALUES ('11', 'Hafizh Asrofil Al Banna', '087859615271', 1, 1, 1, 1);
INSERT INTO `pegawai` VALUES ('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1);
INSERT INTO `pegawai` VALUES ('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1);
INSERT INTO `pegawai` VALUES ('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 1, 1, 2, 1);
INSERT INTO `pegawai` VALUES ('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1);
INSERT INTO `pegawai` VALUES ('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1);
INSERT INTO `pegawai` VALUES ('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1);
INSERT INTO `pegawai` VALUES ('9', 'Redika Angga Pratama', '083834657395', 1, 1, 3, 1);
INSERT INTO `pegawai` VALUES ('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1);
INSERT INTO `pegawai` VALUES ('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1);

-- ----------------------------
-- Table structure for posisi
-- ----------------------------
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE `posisi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posisi
-- ----------------------------
INSERT INTO `posisi` VALUES (1, 'IT');
INSERT INTO `posisi` VALUES (2, 'HRD');
INSERT INTO `posisi` VALUES (3, 'Keuangan');
INSERT INTO `posisi` VALUES (4, 'Produk');
INSERT INTO `posisi` VALUES (5, 'Web Developer');

SET FOREIGN_KEY_CHECKS = 1;
