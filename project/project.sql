/*
 Navicat Premium Data Transfer

 Source Server         : nus
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 22/05/2022 23:15:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bus_seat
-- ----------------------------
DROP TABLE IF EXISTS `bus_seat`;
CREATE TABLE `bus_seat`  (
  `BS_ID` int NOT NULL AUTO_INCREMENT,
  `BS_BUS_ID` int NOT NULL,
  `BS_USER_ID` int NOT NULL,
  `BS_NUMBER` int NOT NULL,
  PRIMARY KEY (`BS_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bus_seat
-- ----------------------------
INSERT INTO `bus_seat` VALUES (4, 1, 1, 33);
INSERT INTO `bus_seat` VALUES (5, 1, 2, 32);

-- ----------------------------
-- Table structure for buses
-- ----------------------------
DROP TABLE IF EXISTS `buses`;
CREATE TABLE `buses`  (
  `B_ID` int NOT NULL AUTO_INCREMENT,
  `B_S_ID` int NOT NULL,
  `B_NUMBER` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B_DEPARTURE_TIME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B_ARRIVAL_TIME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`B_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buses
-- ----------------------------
INSERT INTO `buses` VALUES (1, 1, 'NP-2547', '12.00pm', '3.00pm');
INSERT INTO `buses` VALUES (2, 1, 'NV-4578', '12.00pm', '2.00pm');
INSERT INTO `buses` VALUES (3, 2, 'NV-7895', '4.00am', '9.00am');
INSERT INTO `buses` VALUES (4, 2, 'ND-3265', '4.00pm', '8.00pm');
INSERT INTO `buses` VALUES (5, 3, 'NV-9545', '3.00am', '5.00am');
INSERT INTO `buses` VALUES (6, 3, 'NS-1112', '1.00pm', '8.00pm');
INSERT INTO `buses` VALUES (7, 4, 'NV-8523', '7.00am', '9.00am');
INSERT INTO `buses` VALUES (8, 4, 'NS-6369', '7.00pm', '10.00pm');
INSERT INTO `buses` VALUES (9, 5, 'NV-7895', '7.00am', '9.00am');
INSERT INTO `buses` VALUES (10, 5, 'NS-7895', '7.00pm', '10.00pm');
INSERT INTO `buses` VALUES (11, 6, 'NG-2225', '7.00am', '9.00am');
INSERT INTO `buses` VALUES (12, 6, 'NJ-8856', '7.00pm', '10.00pm');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `M_ID` int NOT NULL AUTO_INCREMENT,
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`M_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, 'Alex', 'alex@gmail.com', 'Hello!\r\nI had a wonderful experience when booking tickets with Bloomiz.lk');
INSERT INTO `messages` VALUES (2, 'Nuski', 'nuski@gmail.com', '');
INSERT INTO `messages` VALUES (3, 'Hiruni', 'hiruni249@gmail.com', '');

-- ----------------------------
-- Table structure for review
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review`  (
  `R_ID` int NOT NULL AUTO_INCREMENT,
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`R_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES (1, 'Tharindu', 'Excellent. I love this website, it is convenient and a great tool to book my tickets without any worries.');
INSERT INTO `review` VALUES (2, 'Lakshani', 'My experience with Bloomiz.lk has been outstanding. The only regret that I had was the refund service when cancelling the tickets.');
INSERT INTO `review` VALUES (3, 'Alex', 'Fantastic! Getting tickets booked online saves me so much time! It is more convenient me to book my ticket online by using Bloomiz website.');
INSERT INTO `review` VALUES (4, 'Piyawansha ', 'I just started to use and I would say I am in average level of knowing around booking tickets online with using Bloomiz. But this booking system made my life easier. This one is the best.');

-- ----------------------------
-- Table structure for schedule
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule`  (
  `S_ID` int NOT NULL AUTO_INCREMENT,
  `S_BUS_FROM` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `S_BUS_TO` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `S_STATUS` int NOT NULL,
  PRIMARY KEY (`S_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of schedule
-- ----------------------------
INSERT INTO `schedule` VALUES (1, 'Matara', 'Kaduwela', 1);
INSERT INTO `schedule` VALUES (2, 'Makumbura', 'Matara', 1);
INSERT INTO `schedule` VALUES (3, 'Colombo', 'Matara', 1);
INSERT INTO `schedule` VALUES (4, 'Kadawatha', 'Galle', 1);
INSERT INTO `schedule` VALUES (5, 'Colombo', 'Deniyaya', 1);
INSERT INTO `schedule` VALUES (6, 'Panadura', 'Matara', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `U_ID` int NOT NULL AUTO_INCREMENT,
  `U_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U_CONTACT` int NOT NULL,
  `U_DOB` date NOT NULL,
  `U_EMAIL` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U_ADDRESS` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U_PASSWORD` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U_STATUS` int NOT NULL,
  PRIMARY KEY (`U_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Alex', 619956421, '1990-10-06', 'alex@gmail.com', 'Canada', 'fb38c8c608161dcfaf22145a47302016a05efd13', 1);
INSERT INTO `users` VALUES (2, 'Kamal', 745894120, '1992-10-06', 'kamal@gmail.com', 'Colombo', '5cc5d8d4c7115f1c96c2983ec0d0f8a0f9dab596', 1);
INSERT INTO `users` VALUES (3, 'Nuski', 764462166, '2000-10-10', 'nuski@gmail.com', 'Kandy', '42c5ffbefb2e32d976ab2cbaa7a8d0abbf0b525d', 1);
INSERT INTO `users` VALUES (4, 'Hiruni', 711234560, '2000-05-10', 'hiruni249@gmail.com', 'Negombo, Katunayake.', '42c5ffbefb2e32d976ab2cbaa7a8d0abbf0b525d', 1);
INSERT INTO `users` VALUES (5, 'Shashin', 768474437, '1999-03-19', 'shashin@gmail.com', 'Imaduwa, Galle', '42c5ffbefb2e32d976ab2cbaa7a8d0abbf0b525d', 1);
INSERT INTO `users` VALUES (6, 'Ishini', 702460860, '2000-05-20', 'ishini@gmail.com', 'Rambukkana, Kegalle', '42c5ffbefb2e32d976ab2cbaa7a8d0abbf0b525d', 1);
INSERT INTO `users` VALUES (7, 'Sithumi', 765942168, '2000-02-01', 'sithumi@gmail.com', 'Ambalangoda, Galle', '42c5ffbefb2e32d976ab2cbaa7a8d0abbf0b525d', 1);

SET FOREIGN_KEY_CHECKS = 1;
