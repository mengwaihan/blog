# Host: localhost  (Version: 5.6.17)
# Date: 2015-12-13 12:21:07
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "a_liuyan"
#

DROP TABLE IF EXISTS `a_liuyan`;
CREATE TABLE `a_liuyan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "a_liuyan"
#

INSERT INTO `a_liuyan` VALUES (2,'12342353',1449578269),(3,'1242哇塞',1449635837),(4,'123',1449636324),(5,'11',1449643217),(6,'2613\n',1449643860),(7,'124',1449664475),(8,'13245',1449750509),(9,'213232131',1449976452),(10,'213232131',1449976452),(11,'我去额为',1449980386);

#
# Structure for table "a_suibi"
#

DROP TABLE IF EXISTS `a_suibi`;
CREATE TABLE `a_suibi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `piclist` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

#
# Data for table "a_suibi"
#

INSERT INTO `a_suibi` VALUES (22,'人的心真的很难懂，就像黑洞无法探索，就连自己也许都会迷惑。我不想睡，那秋风也 不想我睡，那风吹得我刺骨也清醒，假如时间就这么匆匆过去，我该怎么办，以后自己该 怎么活，也许我已经被现在这种活法所拘束了，心也被拘束了，意识中只想活的平凡，但 现实的自己却让自己觉得连平凡都遥不可及，也许我该从现在，打开拘束，畅游心海，找 寻自我，活出新的自己。 愿寂寞孤单理我而去。','心海寻觅',1449933387,'test1/Public/suibi/20151212/566c3a4aacc4b.png'),(23,'梦的华裳褪落在秋之尽头，被寒冬悄然拾起，又被无情覆盖。指尖的不忍无奈辗转至 这一季的怆凉。总叹长路漫漫，又何惜流光易逝，始终看不到终结的繁华！路自无尽 头，从来都是来了又去,去了还来。等不来的，何曾想到，是经年那场烟雨的一别不复。','华年轻盏，淡写悲伤',1449933670,'test1/Public/suibi/20151212/566c3b6541673.png'),(24,'我把落叶捧到树的旁边，深深地埋进了土壤，让它去完成自己的诺言和生命的涅槃。','落叶',1449933714,'test1/Public/suibi/20151212/566c3b91adfe6.png'),(25,'最好的人生也不过就是这样了吧，昂起头活出自己，然后努力把嘴里说过话都活成了真实。 最好的人生是不被旁人所稀释，永远不灰心，不放弃，永远勇往直前。 好姑娘，愿你一直如钻石般熠熠生辉。 最好的人生是能自圆其说。','最好的人生，是能自圆其说',1449933767,'test1/Public/suibi/20151212/566c3bb698bc4.png,test1/Public/suibi/20151212/566c3bbdc338d.png,test1/Public/suibi/20151212/566c3bc32bd4f.png'),(26,'时光如一弯细长细长的溪流，时光又如手中沙，总是不注地穿梭而过。 直到一切都找不回最初的样子，直到自己都觉得自己陌生。看万舟竞赛 大江中，我的那一阕小舟已漂向了哪里呢？目视已企及不见，招手已挽不 回它的调头。','已过千舟，今夕何夕',1449933800,'test1/Public/suibi/20151212/566c3be77c199.png'),(28,'21313133','213',1449980373,'test1/Public/suibi/20151213/566cf1d3eb35d.png');
