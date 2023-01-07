/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : ejemplo_mvc

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 07/01/2023 00:53:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NULL DEFAULT NULL,
  `apePaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `apeMaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `nombres` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `lenguaje` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fase` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `edad` int(11) NULL DEFAULT NULL,
  `comprendido` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fechInsertado` datetime(0) NULL DEFAULT current_timestamp(),
  `fechModificado` datetime(0) NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (1, 87654321, 'Garcia', 'Casas', 'Fernando', NULL, NULL, NULL, 23, NULL, '2023-01-05 20:31:00', '2023-01-07 00:52:35');
INSERT INTO `personas` VALUES (2, 87654321, 'Cardenas', 'Perez', 'Miguel', 'correo@gmail.com', '', '1', 323, '1', '2023-01-06 22:11:28', '2023-01-07 00:53:18');
INSERT INTO `personas` VALUES (4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-06 23:48:01', '2023-01-06 23:48:01');

-- ----------------------------
-- Procedure structure for sp_insertUpdate
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_insertUpdate`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertUpdate`(
IN _id INT(11), 
IN _dni INT(11), 
IN _apePaterno VARCHAR(45), 
IN _apeMaterno VARCHAR(45), 
IN _nombres VARCHAR(45), 
IN _correo VARCHAR(255), 
IN _lenguaje VARCHAR(255), 
IN _fase INT(11), 
IN _edad INT(11), 
IN _comprendido INT(11))
BEGIN
	IF _id IS NULL THEN
		INSERT INTO personas (dni, apePaterno, apeMaterno, nombres, correo, lenguaje, fase, edad, comprendido) 
		VALUES (_dni, _apePaterno, _apeMaterno, _nombres, _correo, _lenguaje, _fase, _edad, _comprendido);
	ELSE
		UPDATE personas SET
			dni = _dni, 
			apePaterno = _apePaterno,
			apeMaterno = _apeMaterno,
			nombres = _nombres, 
			correo = _correo, 
			lenguaje = _lenguaje, 
			fase = _fase, 
			edad = _edad, 
			comprendido = _comprendido
		WHERE id = _id;
	END IF;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
