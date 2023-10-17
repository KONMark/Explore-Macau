/*
Navicat MySQL Data Transfer

Source Server         : System
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : project

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2022-12-04 07:59:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `scenery`
-- ----------------------------
DROP TABLE IF EXISTS `scenery`;
CREATE TABLE `scenery` (
  `id` int(11) NOT NULL,
  `scenery_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scenery
-- ----------------------------
INSERT INTO `scenery` VALUES ('1', '4');
INSERT INTO `scenery` VALUES ('2', '4');
INSERT INTO `scenery` VALUES ('3', '5');
INSERT INTO `scenery` VALUES ('4', '0');
INSERT INTO `scenery` VALUES ('5', '4');
INSERT INTO `scenery` VALUES ('6', '0');
INSERT INTO `scenery` VALUES ('7', '4');
INSERT INTO `scenery` VALUES ('8', '0');
INSERT INTO `scenery` VALUES ('9', '0');
INSERT INTO `scenery` VALUES ('10', '0');

-- ----------------------------
-- Table structure for `talk`
-- ----------------------------
DROP TABLE IF EXISTS `talk`;
CREATE TABLE `talk` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论序号',
  `account` varchar(20) NOT NULL COMMENT '用户编号',
  `scenery` int(11) NOT NULL,
  `content` varchar(100) NOT NULL COMMENT '评论内容',
  `photo` varchar(255) NOT NULL,
  `time` date DEFAULT NULL,
  `user_num` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`account`,`scenery`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of talk
-- ----------------------------
INSERT INTO `talk` VALUES ('27', '12345678', '1', ' 作为游客比必打卡的地方，澳门的标志性地标，相当于重庆的解放碑，太阳晒的人不要不要的~拍照很漂亮，周围也有很多特色小吃，作为游客，必来！最推荐优衣库那边的机位。', 'http://localhost:8081/Project/旅游景点/photo/景点-大三巴牌坊/评价2.jpg', '2022-12-03', '5', 'http://localhost:8081/Project/photo/头像/头像4.png', '樱桃小黄人');
INSERT INTO `talk` VALUES ('29', '12345678', '2', '交通位置非常便利，属于澳门的标志性建筑，环境也是富丽堂皇，金灿灿的，毕竟是赌王的酒店（因为气势太大了，从拱北口岸就能看得到。）不过近距离不好拍，一般是去东望洋山拍。', 'http://localhost:8081/Project/旅游景点/photo/景点-新葡京酒店/评价3.jpg', '2022-12-03', '4', 'http://localhost:8081/Project/photo/头像/头像4.png', '樱桃小黄人');
INSERT INTO `talk` VALUES ('30', '12345', '1', '这里不好玩！', '', '2022-12-03', '3', 'http://localhost:8081/Project/photo/头像/头像9.png', 'Luna');
INSERT INTO `talk` VALUES ('31', '12345', '3', '威尼斯人度假村是我对澳门的记忆，最早一次来的时候被它震撼，就一整个威尼斯的微缩景观，连贡多拉都被搬到了度假村里，时过境迁，很多年后再次来这里感受它的美好......', 'http://localhost:8081/Project/旅游景点/photo/景点-威尼斯人酒店/评价8.jpg', '2022-12-03', '5', 'http://localhost:8081/Project/photo/头像/头像9.png', 'Luna');
INSERT INTO `talk` VALUES ('32', '123456', '1', '多年前去过，以前真以为只是个牌坊，后来才知道是老教堂烧毁后的遗址，算是澳门最著名的景点了吧，每一次从路上走都有好多人，最近疫情倒是人少了。', 'http://localhost:8081/Project/旅游景点/photo/景点-大三巴牌坊/评价5.jpg', '2022-12-03', '4', 'http://localhost:8081/Project/photo/头像/头像12.png', '黄小羽');
INSERT INTO `talk` VALUES ('33', '123456', '7', '澳门旧城里的苏式园林，没有几个游客，倒是挺有历史，公园内有曲桥、竹林、瀑布和回廊，仿佛一幅有声有色的立体画，颇具苏州园林风格，在澳门见到了江南风光。', 'http://localhost:8081/Project/旅游景点/photo/景点-卢廉若公园/评价2.jpg', '2022-12-03', '4', 'http://localhost:8081/Project/photo/头像/头像12.png', '黄小羽');
INSERT INTO `talk` VALUES ('34', '123', '1', '很美，推荐来，澳门的标志之一！', 'http://localhost:8081/Project/旅游景点/photo/景点-大三巴牌坊/评价6.jpg', '2022-12-04', '5', 'http://localhost:8081/Project/photo/头像/头像13.png', '摄影的查理');
INSERT INTO `talk` VALUES ('35', '1234', '5', '建议收藏！一定要去～免费的摄影机位，直接导航到东望洋灯塔，推荐日落时分去，炮台上有一座灯塔及小教堂，为中国海岸第一座现代灯塔，所在位置就是澳门在世界地图上的定位！', 'http://localhost:8081/Project/旅游景点/photo/景点-东望洋炮台/评价6.jpg', '2022-12-04', '4', 'http://localhost:8081/Project/photo/头像/头像1.png', 'Mark');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `account` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `account` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12345678', '123', 'http://localhost:8081/Project/photo/头像/头像4.png', '46', '樱桃小黄人');
INSERT INTO `user` VALUES ('12345', '123', 'http://localhost:8081/Project/photo/头像/头像9.png', '47', 'Luna');
INSERT INTO `user` VALUES ('123456', '123', 'http://localhost:8081/Project/photo/头像/头像12.png', '48', '黄小羽');
INSERT INTO `user` VALUES ('123', '123', 'http://localhost:8081/Project/photo/头像/头像13.png', '49', '摄影的查理');
INSERT INTO `user` VALUES ('1234', '123', 'http://localhost:8081/Project/photo/头像/头像1.png', '50', 'Mark');
