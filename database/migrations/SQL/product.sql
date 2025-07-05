/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : teman_gorden

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 09/01/2025 10:18:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `type` int NULL DEFAULT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'Blackout', 'Test Edit', 1, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, '2025-01-09 02:37:42', NULL);
INSERT INTO `product` VALUES (2, 'Blackout', 'Test Edit Gambar', 1, 'https://images.renos.id/assets/portal-assets/1194/product/images/ocuOC0g6zw.jpeg', NULL, '2025-01-09 02:38:02', NULL);
INSERT INTO `product` VALUES (3, 'Blackout', 'Test Edit Type', 2, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, '2025-01-09 02:38:36', NULL);
INSERT INTO `product` VALUES (4, 'Green Curtain', 'Test Edit Name', 1, 'https://images.renos.id/assets/portal-assets/1194/product/images/tDuT0l3qEm.jpeg', NULL, '2025-01-09 02:40:06', NULL);
INSERT INTO `product` VALUES (6, 'Product 6', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 2, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, '2025-01-09 02:58:23', NULL);
INSERT INTO `product` VALUES (7, 'Product 7', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 2, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (8, 'Product 8', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 2, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (9, 'Product 9', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 3, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (10, 'Product 10', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 3, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (11, 'Product 11', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 3, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (12, 'Product 12', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 3, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (13, 'Product 13', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora perspiciatis accusantium reiciendis et repudiandae corrupti impedit, sunt error atque optio odio? Placeat magnam non amet ducimus, consequatur pariatur nesciunt eveniet.', 1, 'https://rajagorden.co.id/wp-content/uploads/2018/11/Jual-Gorden-Blackout.jpg', NULL, NULL, NULL);
INSERT INTO `product` VALUES (14, 'Orange Cozy', 'Orange Cozy Curtain', 3, 'https://images.renos.id/assets/portal-assets/1194/product/images/h46CBBTQFz.jpeg', '#', '2025-01-09 02:47:11', '2025-01-09 02:47:11');

SET FOREIGN_KEY_CHECKS = 1;
