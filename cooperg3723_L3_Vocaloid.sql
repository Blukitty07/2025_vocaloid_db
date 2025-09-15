-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: cooperg3723_L3_Vocaloid
-- ------------------------------------------------------
-- Server version 	8.0.43-0ubuntu0.22.04.1
-- Date: Mon, 15 Sep 2025 23:31:42 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `characters`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `characters` VALUES (1,''),(2,'Akita Neru'),(3,'Avanna'),(4,'Camui Gackpo'),(5,'CASE'),(6,'CYBER DIVA'),(7,'Daina'),(8,'Dex'),(9,'flower'),(10,'Fukase'),(11,'Gumi'),(12,'Hatsune Miku'),(13,'Hibiki Koto'),(14,'IA'),(15,'Kaai Yuki'),(16,'Kagamine Len'),(17,'Kagamine Rin'),(18,'Kaito'),(19,'Kasane Teto'),(20,'Lily'),(21,'Mayu'),(22,'Megurine Luka'),(23,'Meiko'),(24,'OLIVER'),(25,'Otomachi Una'),(26,'SeeU'),(27,'Tone Rion'),(28,'Utatane Piko'),(29,'Yuma'),(30,'V3 Harmony'),(43,'random');
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `characters` with 31 row(s)
--

--
-- Table structure for table `producer`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producer` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producer`
--

LOCK TABLES `producer` WRITE;
/*!40000 ALTER TABLE `producer` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `producer` VALUES (1,'*Luna'),(2,'2進P'),(3,'3-P'),(4,'Akuno-P'),(6,'CircusP'),(7,'Creep-P'),(8,'Crusher'),(9,'Daniwell'),(10,'DATEKEN'),(11,'DECO*27'),(12,'Doublelen'),(13,'FamirockP'),(14,'Fushi'),(15,'GHOST'),(16,'GloopBloop'),(17,'Guchiry'),(18,'Haraguchi Sasuke'),(19,'Hiirangi Mangnetite'),(20,'Hitoshizuku-P'),(21,'Ho-ong-i'),(22,'inabakumori'),(23,'Iroha(sasaki)'),(24,'Jesus-P'),(25,'JUNKY'),(26,'Kairiki Bear'),(27,'kemu'),(28,'Kikuo'),(29,'KIRA'),(30,'KurageP'),(31,'Kurousa-P'),(32,'LamazeP'),(33,'Live-P'),(34,'Mafumafu'),(35,'MARETU'),(36,'mathru'),(37,'Mcki Robyns-P'),(38,'Merazooma-P'),(39,'Mitchie M'),(40,'momocashew'),(41,'mothy'),(42,'Narushima takashi'),(43,'Neru'),(44,'niki'),(45,'noripy'),(46,'Nunununununununununununununununu'),(47,'OwataP'),(48,'PinocchioP'),(49,'Porter robinson'),(50,'rerulili'),(51,'Rohi'),(52,'ryo'),(53,'samfree'),(54,'Satsuki'),(55,'SAWTOWNE'),(56,'Sendra'),(57,'ShuujinP'),(58,'siinamota'),(59,'SmilyBruh'),(60,'Toraboruta-P'),(61,'Vane'),(62,'Wada Takeaki'),(63,'Yasuo'),(64,'YogarasuP'),(65,'Yoshida Yasei'),(66,'Yukopi'),(67,'yuukiss'),(79,'Moe Shop');
/*!40000 ALTER TABLE `producer` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `producer` with 67 row(s)
--

--
-- Table structure for table `songs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `songs` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `song_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `song_jpn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vocaloid` tinyint(1) NOT NULL,
  `character_1` int NOT NULL,
  `character_2` int NOT NULL,
  `producer` int NOT NULL,
  `year` int NOT NULL,
  `minutes` int NOT NULL,
  `seconds` int NOT NULL,
  `theme_1` int NOT NULL,
  `theme_2` int NOT NULL,
  `veiws` int NOT NULL,
  `yt_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songs`
--

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `songs` VALUES (1,'Hate it. Hate it. JIGAHIDAI!','キライ・キライ・ジガヒダイ！',1,25,1,30,2016,3,34,22,12,17000000,'https://www.youtube.com/watch?v=0c9958OoTL8'),(2,'A Crows trial','',1,11,8,61,2020,3,34,35,1,780000,'https://www.youtube.com/watch?v=qIH72j7s6rA'),(3,'Abnormality Dancin\' Girl','アブノーマリティ･ダンシンガール',1,9,1,17,2021,3,29,9,36,25000000,'https://www.youtube.com/watch?v=SDt2OOdWR-Y'),(4,'Again','',1,11,1,8,2017,4,4,5,1,16000000,'https://www.youtube.com/watch?v=jdQWia3fwMU'),(5,'Akage','',0,19,1,59,2025,2,19,12,1,9500000,'https://www.youtube.com/watch?v=D50L4EeBHOs'),(6,'Alluring Secret Black Vow','秘蜜〜黒の誓い〜',1,16,17,20,2010,4,16,22,35,10000000,'https://www.youtube.com/watch?v=zrdSQrxRKgw'),(7,'Amygdala\'s Rag Doll','',1,24,1,15,2016,4,40,2,41,24000000,'https://www.youtube.com/watch?v=P7vRNY7Vsy4'),(8,'Binomi','ビノミ',1,12,1,35,2024,3,3,7,32,20000000,'https://www.youtube.com/watch?v=fGizrX4JjPg'),(9,'Butterfly on your right shoulder','右肩の蝶',1,16,1,45,2009,4,29,17,32,81000,'https://www.youtube.com/watch?v=DgmPyanqjbA'),(10,'Candle Queen','',1,11,1,15,2017,2,33,23,1,33000000,'https://www.youtube.com/watch?v=EPMhkIiapIA'),(11,'cantarella','カンタレラ',1,18,12,31,2008,3,2,26,22,8600000,'https://www.youtube.com/watch?v=H0EtICId6mI&pp=ygUQY2FudGFyZWxsYSBrYWl0bw%3D%3D'),(12,'Case by Case','',0,5,12,16,2025,2,8,20,41,467000,'https://youtu.be/XIkuXXeBaQY'),(13,'Cause I\'m A Liar','',1,10,1,37,2017,4,43,35,42,20000000,'https://www.youtube.com/watch?v=e4d_i41zmSc'),(14,'Chronophobia ','クロノフォビア',1,17,12,2,2010,4,0,36,1,681000,'https://www.youtube.com/watch?v=42aqCLyQekw&pp=ygURY2hyb25vcGhvYmlhIHNvbmc%3D'),(15,'Coin Locker Baby','コインロッカーベイビー',1,12,11,35,2013,4,27,2,43,9600000,'https://www.youtube.com/watch?v=QA5zuzc1WYA'),(16,'Computer Insane Love Girl','電脳狂愛ガール',1,17,11,26,2013,3,20,26,22,305000,'https://www.youtube.com/watch?v=BzXshcsMAyg'),(17,'Confession Sensation','告白センセーション',1,17,1,33,2010,4,19,22,12,74000,'https://www.youtube.com/watch?v=Btfj-yfMlTo'),(18,'Confessions of a Rotten Girl','',1,12,1,55,2025,3,28,32,30,21000000,'https://www.youtube.com/watch?v=sV2H712ldOI'),(19,'Conquerer','',1,14,1,56,2019,4,4,16,1,6100000,'https://www.youtube.com/watch?v=C3E5fb39xcs'),(20,'Copycat','',1,11,1,6,2016,4,44,20,1,42000000,'https://www.youtube.com/watch?v=Q_QEPrkwZ-Q'),(21,'Corpse dance','しかばねの踊り',1,12,1,28,2013,3,42,36,44,25000000,'https://www.youtube.com/watch?v=O9eHRiaTuL4'),(22,'Dancing☆Samurai','ンシング☆サムライ',1,4,1,36,2008,3,9,4,35,890000,'https://www.youtube.com/watch?v=jJdWOlup5Lk'),(23,'Darling','ダーリン',1,12,1,35,2017,3,45,2,22,21000000,'https://www.youtube.com/watch?v=YFg48Ai1SSo'),(24,'Demon Girlfriend','鬼彼女\"',1,17,1,13,2010,4,16,24,1,108000,'https://www.youtube.com/watch?v=LSQfg5R9Iy4'),(25,'Disappearance Addiction','イナイイナイ依存症',1,17,11,26,2014,3,40,6,43,3800000,'https://www.youtube.com/watch?v=iP0Pi-JdJyM'),(26,'Echo','',1,11,1,8,2014,4,4,20,12,114000000,'https://www.youtube.com/watch?v=cQKGUgOfD8U'),(27,'Ego rock','エゴロック',1,16,1,3,2021,2,50,20,1,51000000,'https://www.youtube.com/watch?v=zi7-jk4LdX0'),(28,'Electric Angel','えれくとりっく・えんじぇぅ',1,12,1,63,2007,3,17,12,35,1300000,'https://www.youtube.com/watch?v=jVp91z9fEMo'),(29,'Exorcism','',1,6,1,7,2016,4,57,27,1,16000000,'https://www.youtube.com/watch?v=g-NIUGNlRQY'),(30,'Fate of Soul','ピリオドの向こうの闇',1,17,1,53,2010,5,22,10,1,245000,'https://www.youtube.com/watch?v=eooCBLDrFzg'),(31,'Francisca','フランシスカ',1,17,1,38,2011,2,44,22,35,65000,'https://www.youtube.com/watch?v=KtDxJ_eQWuA&pp=ygUSZnJhbmNpc2NhIHZvY2Fsb2lk'),(32,'Francisca and her unreliable master','フランシスカと頼りない御主人様',1,17,16,38,2012,3,36,8,35,1900,'https://www.youtube.com/watch?v=Dw8l8ZSNozE'),(33,'Goodbye to a world','',1,3,1,49,2014,5,30,17,5,71000000,'https://www.youtube.com/watch?v=W2TE0DjdNqI'),(34,'Gothic and Loneliness ','',1,17,1,42,2011,5,1,26,35,744000,'https://www.youtube.com/watch?v=QSx5ZYrH-70'),(35,'Hao','ハオ',1,12,1,11,2024,3,1,22,12,7500000,'https://www.youtube.com/watch?v=3GzRDW3hZ1k'),(36,'Happy Halloween','',1,17,1,25,2014,4,3,19,1,21000000,'https://www.youtube.com/watch?v=1DcgczDzQPk'),(37,'Here and there','彼方此方',1,17,1,10,2013,3,34,22,12,138000,'https://www.youtube.com/watch?v=4-Ix-fHabtA'),(38,'Hide and seek','숨바꼭질',1,26,1,21,2012,2,31,39,35,2200000,'https://www.youtube.com/watch?v=r-C2lQ9jt4g&pp=ygUUY2FoaWRlIGFuZCBzZWVrIHNlZXU%3D'),(39,'Hito Mania','人マニア',1,19,1,18,2023,2,7,21,12,47000000,'https://www.youtube.com/watch?v=HTxwOxFt5d4'),(40,'Holy Lance explosion boy','聖槍爆裂ボーイ',1,16,1,50,2013,3,29,32,1,31000000,'https://www.youtube.com/watch?v=MqNmKnCNLyM'),(41,'Honey I\'m home','',1,8,1,15,2019,3,41,30,35,17000000,'https://www.youtube.com/watch?v=xHffjNbWmig'),(42,'Housewife Radio','',1,11,1,15,2014,3,53,31,12,13000000,'https://www.youtube.com/watch?v=8R-1PTZ-Xx4'),(43,'Isolation ≡  Thanatos','隔絶≡タナトス',1,17,1,51,2013,3,38,6,1,198000,'https://www.youtube.com/watch?v=8iTJRQ7-Pxg'),(44,'Jigsaw Puzzle','ジグソーパズル',1,16,1,34,2018,3,29,36,1,5600000,'https://www.youtube.com/watch?v=ta9zslmSRqg'),(45,'Jump!!','',1,16,1,12,2020,4,13,13,45,3500,'https://www.youtube.com/watch?v=X37DlaOdWXg'),(46,'Junky down','ジャンキーダウン',1,13,1,14,2024,3,24,3,1,476000,'https://www.youtube.com/watch?v=oLy53kSy_n4'),(47,'Junky night town orchestra','ジャンキーナイトタウンオーケストラ',1,16,1,3,2019,3,33,21,1,23000000,'https://www.youtube.com/watch?v=E1PGiyRjqkU'),(48,'Karma','',1,17,1,6,2016,3,55,12,2,18000000,'https://www.youtube.com/watch?v=cMkJDPvJxdk'),(49,'Kokoro ','ココロ',1,17,1,60,2008,4,49,35,12,1500000,'https://www.youtube.com/watch?v=7IoseIkhAg0'),(50,'Kyoufuu All Back','強風オールバック',1,15,1,66,2023,2,16,40,35,106000000,'https://www.youtube.com/watch?v=D6DVTLvOupE'),(51,'Lets go to heaven','天国へ行こう',1,12,1,28,2011,4,39,36,1,5800000,'https://www.youtube.com/watch?v=y808S-awM2E'),(52,'Lost Umbrella','ロストアンブレラ',1,15,1,22,2018,3,22,22,12,74000000,'https://www.youtube.com/watch?v=DeKLpgzh-qQ'),(53,'Love Logic','',1,21,1,9,2012,3,47,22,12,1900000,'https://www.youtube.com/watch?v=-6oxY-quTOA'),(54,'Love me, Love me, Love me','愛して愛して愛して',1,12,1,28,2015,4,10,37,12,107000000,'https://www.youtube.com/watch?v=NTrm_idbhUk'),(55,'Lucky Me','',1,29,1,37,2023,4,10,35,42,2000000,'https://www.youtube.com/watch?v=IZW99GWmjA4'),(56,'luka luka night fever','ルカルカ★ナイトフィーバー',1,22,1,53,2009,4,1,12,46,34000000,'https://www.youtube.com/watch?v=ScSW9C3DF18'),(57,'M@GICAL☆CURE! LOVE SHOT!','',1,12,1,55,2023,3,37,12,47,24000000,'https://www.youtube.com/watch?v=LaEgpNBt-bQ'),(58,'Machine Gun','',1,11,1,29,2018,3,45,39,1,15000000,'https://www.youtube.com/watch?v=TAjrPYzqs2w'),(59,'Medicine','イガク',0,19,1,18,2024,2,0,20,1,36000000,'https://www.youtube.com/watch?v=F38EuG2dAyM'),(60,'Melancholic ','メランコリック',1,17,1,25,2010,3,39,24,1,13000000,'https://www.youtube.com/watch?v=86_kvUqhY-A'),(61,'Meltdown','炉心融解',1,17,1,23,2008,5,30,36,20,26000000,'https://www.youtube.com/watch?v=jrldXNpoaac&pp=ygUMbWVsdGRvd24gcmlu'),(62,'Mesmerizer','メズマライザー',1,12,19,54,2024,2,36,27,35,134000000,'https://www.youtube.com/watch?v=19y8YTbvri8'),(63,'Miku','ミク',1,12,1,5,2016,3,58,20,1,68000000,'https://www.youtube.com/watch?v=NocXEwsJGOQ'),(64,'Mimukauwa Nice Try','みむかｩわナイストライ',1,12,1,46,2024,3,38,15,1,48000000,'https://www.youtube.com/watch?v=Ljr2wMSBHqU'),(65,'Mind Brand','マインドブランド',1,12,1,35,2020,4,19,29,1,17000000,'https://www.youtube.com/watch?v=YAgdOXlWw4A'),(66,'Mischievous Function','おちゃめ機能',0,19,1,32,2010,4,6,22,12,9700000,'https://www.youtube.com/watch?v=yr3k-Ok9GE4'),(67,'Monitoring','モニタリング',1,12,1,11,2024,2,56,34,32,51000000,'https://www.youtube.com/watch?v=kbNdx0yqbZE&vl=en'),(68,'Monster','',1,11,1,29,2017,3,37,39,6,35000000,'https://www.youtube.com/watch?v=HNIypYrVlkA'),(69,'My R','わたしのアール',1,12,1,62,2015,3,34,36,1,13000000,'https://www.youtube.com/watch?v=ocAKhyWuawo'),(70,'Nobody makes sense','ぼくらはみんな意味不明',1,12,1,48,2017,3,50,9,12,11000000,'https://www.youtube.com/watch?v=LtSNzPyo0lA'),(71,'nostalogic','',1,23,1,67,2008,4,0,25,12,3800000,'https://www.youtube.com/watch?v=HzGXGjt-JAY'),(72,'Override','オーバーライド',0,19,1,65,2023,2,18,14,8,70000000,'https://www.youtube.com/watch?v=LLjfal8jCYI'),(73,'Paper Airplane','紙飛行機',1,17,16,57,2009,7,33,35,22,1300000,'https://www.youtube.com/watch?v=LfPKTzq0LRM'),(74,'Paraphilia','パラフィリア',1,17,1,64,2010,4,56,26,48,101000,'https://www.youtube.com/watch?v=fYs7lsBb1X4'),(75,'Piko Piko Legend of the Night','ピコピコ☆レジェンドオブザナイト',1,28,1,53,2010,4,2,12,1,407000,'https://www.youtube.com/watch?v=-iDOBo8hN8w'),(76,'Pokkan Color','ぽっかんカラー\"',1,27,1,28,2012,3,22,4,49,2200000,'https://www.youtube.com/watch?v=RWj1BV3oDR8'),(77,'PoPiPo','ぽっぴっぽー',1,12,1,32,2009,1,45,38,1,10000000,'https://www.youtube.com/watch?v=mco3UX9SqDA'),(78,'Pulse of the Meteor','流星のパルス',1,16,1,1,2021,4,45,12,1,2700000,'https://www.youtube.com/watch?v=8Zds1FvEtKw'),(79,'Rabbit hole','ラビットホール',1,12,1,11,2023,2,42,32,1,89000000,'https://www.youtube.com/watch?v=eSW2LVbPThw'),(80,'Regret Message','リグレットメッセージ',1,17,16,41,2008,4,57,17,35,4000000,'https://www.youtube.com/watch?v=R4shMkF0ymk'),(81,'Reincarnation','リンカーネイション',1,17,11,27,2013,3,38,16,35,6600000,'https://www.youtube.com/watch?v=1EXGjYk_xXk'),(82,'remote control','リモコン',1,16,17,24,2011,5,11,35,1,9800000,'https://www.youtube.com/watch?v=1st0XSY0VKQ'),(83,'Rotary Dial','',1,7,1,15,2016,5,5,35,2,5300000,'https://www.youtube.com/watch?v=M3aWodUSyZg'),(84,'Seraphim on the Ring','リングの熾天使',1,17,12,39,2019,3,48,33,1,12000000,'https://www.youtube.com/watch?v=lWuJRRCTHrg'),(85,'Servant of evil','悪ノ召使',1,16,17,4,2008,5,14,8,35,2500000,'https://www.youtube.com/watch?v=Jo7z60aJqNA'),(86,'SIU','しう',1,12,1,35,2019,4,38,2,50,24000000,'https://www.youtube.com/watch?v=LCOItseOsFE'),(87,'Soundless voice','',1,16,1,20,2012,5,20,22,1,561000,'https://www.youtube.com/watch?v=sH92A1du050'),(88,'Stop nagging me!','ゴチャゴチャうるせー！',0,2,12,47,2010,2,41,12,1,8100000,'https://www.youtube.com/watch?v=-bt0IP16PZI'),(89,'Tarantula','',1,24,1,40,2013,3,38,11,1,4000000,'https://www.youtube.com/watch?v=HcWEJWzjdTo'),(90,'Telecaster B boy','テレキャスタービーボーイ',1,16,1,3,2020,2,44,20,1,56000000,'https://www.youtube.com/watch?v=i-DZukWFR64'),(91,'tetoris','テトリス',0,19,1,19,2024,2,22,36,12,63000000,'https://www.youtube.com/watch?v=Soy4jGPHr3g'),(92,'The world is mine','ワールドイズマイン',1,12,1,52,2008,4,13,22,35,30000000,'https://www.youtube.com/watch?v=EuJ6UR_pD5s'),(93,'The Worst Carnival','最悪のカーニバル',1,17,1,33,2011,3,54,24,1,464000,'https://www.youtube.com/watch?v=zC6c8rhxja8 '),(94,'Thousand Cherry Blossoms','千本桜',1,12,1,31,2011,4,4,18,44,71000000,'https://www.youtube.com/watch?v=shs0rAiwsGQ'),(95,'Tokyo Teddy bear','東京テディベア',1,17,1,43,2017,3,13,28,51,25000000,'https://www.youtube.com/watch?v=eSI7RsjZy1E'),(96,'Vampire\'s ∞ Pathos','',1,16,1,20,2019,3,40,35,9,15000000,'https://www.youtube.com/watch?v=R0CRCP0DPyM'),(97,'Venom','ベノム\"',1,9,1,26,2018,3,23,36,1,66000000,'https://www.youtube.com/watch?v=oRJBwaZ59fQ'),(98,'Wave','',1,20,1,44,2012,3,15,14,12,3400000,'https://www.youtube.com/watch?v=Tjoq6bhKyHg'),(99,'Young Girl A','少女A',1,17,1,58,2013,4,2,20,1,145000000,'https://www.youtube.com/watch?v=AqI97zHMoQw '),(100,'You\'re a Useless Child','君はできない子',1,12,1,28,2013,4,21,2,1,30000000,'https://www.youtube.com/watch?v=nPF7lit7Z00'),(121,'Static','',1,12,1,61,2025,4,4,5,11,13000000,'https://www.youtube.com/watch?v=KlTNKOnfXFk'),(124,'Love Taste','',1,11,1,79,2016,2,57,22,63,30000000,'https://www.youtube.com/watch?v=sWbD5q769Ms');
/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `songs` with 102 row(s)
--

--
-- Table structure for table `theme`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theme` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `theme` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theme`
--

LOCK TABLES `theme` WRITE;
/*!40000 ALTER TABLE `theme` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `theme` VALUES (1,'n/a'),(2,'Abuse'),(3,'Addiction'),(4,'Art'),(5,'Attachement'),(6,'Bullying'),(7,'Cannabilism'),(8,'Decisions'),(9,'Expectations'),(10,'Fate'),(11,'Fears'),(12,'feelings'),(13,'Fun'),(14,'Future'),(15,'Gaming'),(16,'Goals'),(17,'Grief'),(18,'History'),(19,'Holiday'),(20,'Identity'),(21,'Internet'),(22,'Love'),(23,'Manipulation'),(24,'Negative Feelings'),(25,'Nostalgia'),(26,'Obsessive'),(27,'Possesion'),(28,'Pressures'),(29,'Rape'),(30,'Religion'),(31,'Sanity'),(32,'Sexual'),(33,'Sport'),(34,'Stalking'),(35,'Story'),(36,'Suicide'),(37,'Valdation'),(38,'Vegetable Juice'),(39,'Violence'),(40,'Weather'),(41,'Control'),(42,'Fandom'),(43,'Murder'),(44,'Death'),(45,'Memories'),(46,'Escape'),(47,'Sacrifice'),(48,'Harm'),(49,'Life'),(50,'Ignorance'),(51,'Mental Health'),(62,'school'),(63,'Toxic'),(64,'Education');
/*!40000 ALTER TABLE `theme` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `theme` with 54 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (1,'admin','$2y$08$SHDPcZm67yBx46A0k3qbV.jhVJn9gu7c06YTMeIC8M6lkD86/VOim');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 15 Sep 2025 23:31:42 +0000
