# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.25)
# Database: study2excell
# Generation Time: 2013-05-30 23:56:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aAdmin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aAdmin`;

CREATE TABLE `aAdmin` (
  `aAdminID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aAdminUser` varchar(20) NOT NULL DEFAULT '',
  `aAdminPass` varchar(32) NOT NULL DEFAULT '',
  `aAdminSalt` char(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`aAdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aAdmin` WRITE;
/*!40000 ALTER TABLE `aAdmin` DISABLE KEYS */;

INSERT INTO `aAdmin` (`aAdminID`, `aAdminUser`, `aAdminPass`, `aAdminSalt`)
VALUES
	(1,'s2eadmin','3c0935cc644b5097c170b270f2cd9ed1','ff8400');

/*!40000 ALTER TABLE `aAdmin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aArticle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aArticle`;

CREATE TABLE `aArticle` (
  `aArticlID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aArticleDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  `aArticleTitle` varchar(40) NOT NULL DEFAULT '',
  `aArticleContent` text NOT NULL,
  PRIMARY KEY (`aArticlID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aArticle` WRITE;
/*!40000 ALTER TABLE `aArticle` DISABLE KEYS */;

INSERT INTO `aArticle` (`aArticlID`, `aArticleDate`, `aArticleType`, `aArticleTitle`, `aArticleContent`)
VALUES
	(8,'2013-05-28 21:06:29','COL','Online or Traditional?','Choosing whether to go to college online or to go as a traditional student is becoming a hotbed topic. Typically continuing education students prefer online classes because they have fulltime jobs, or they have a family and can\'t afford the time it takes to attend class. Traditional students are typically younger, single and want the college experience. Each choice is comparable as more accredited degree programs are avaliable online. So it comes down to again how do you learn. What style will benifit your learning style.');

/*!40000 ALTER TABLE `aArticle` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aCollegePage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aCollegePage`;

CREATE TABLE `aCollegePage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aMainTitle` varchar(40) NOT NULL DEFAULT '',
  `aMainContent` varchar(1200) NOT NULL DEFAULT '',
  `aSubTitle1` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle1Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle2` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle2Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle3` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle3Content` varchar(600) NOT NULL DEFAULT '',
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aArticleType` (`aArticleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aCollegePage` WRITE;
/*!40000 ALTER TABLE `aCollegePage` DISABLE KEYS */;

INSERT INTO `aCollegePage` (`id`, `aMainTitle`, `aMainContent`, `aSubTitle1`, `aSubTitle1Content`, `aSubTitle2`, `aSubTitle2Content`, `aSubTitle3`, `aSubTitle3Content`, `aArticleType`)
VALUES
	(1,'Getting Ready for Grad School?','By now you are used to the commitment required to study for college level courses. Grad school is no different. Time is the overall element that has to be managed if your to be successful in grad school. Grad classes are more study and work intensive. Ensure that you meet all of the prerequisites for your degree program. Having to take classes to meet prerequisites will cost you more money and slow your process. Get to know the instructor and students in your chosen program they can be an invaluable asset when your trying to find information. ','Online or Traditional?','Choosing whether to go to college online or to go as a traditional student is becoming a hotbed topic. Typically continuing education students prefer online classes because they have fulltime jobs, or they have a family and can?t afford the time it takes to attend class. Traditional students are typically younger, single and want the college experience. Each choice is comparable as more accredited degree programs are available online. So it comes down to again how do you learn. What style will benefit your learning style.','GMAT Preps','There are many programs out there to help you prepare for the GMAT. Take advantage of these resources, because they are very helpful. This test is still key for acceptance into any masters programs. Take the time out starting from the end of your Junior year to begin studying for this test. Break each section apart and over the last 2 years of high school you will have a good understanding of what to expect f rom this test. Make sure you take many past Year GMAT tests for practice. ','Staying Focused','There are still a ton of personal distractions at this stage in your educational dvelopment. WOrk to remove distractions while studying and come up with a plan to tackle your work. get as much sleep as you can, and remember to stay ahead of your work. getting behind in college is a daunting if not impossible task to get back on track. Take your study sessions seriously have a goal and track your progress to find your weak areas. Self Discipline is the key to staying focused.Keep yourself in check and you will reap the benifits of great grades. ','COL');

/*!40000 ALTER TABLE `aCollegePage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aHighschoolPage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aHighschoolPage`;

CREATE TABLE `aHighschoolPage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aMainTitle` varchar(40) NOT NULL DEFAULT '',
  `aMainContent` varchar(1200) NOT NULL DEFAULT '',
  `aSubTitle1` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle1Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle2` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle2Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle3` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle3Content` varchar(600) NOT NULL DEFAULT '',
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aArticleType` (`aArticleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aHighschoolPage` WRITE;
/*!40000 ALTER TABLE `aHighschoolPage` DISABLE KEYS */;

INSERT INTO `aHighschoolPage` (`id`, `aMainTitle`, `aMainContent`, `aSubTitle1`, `aSubTitle1Content`, `aSubTitle2`, `aSubTitle2Content`, `aSubTitle3`, `aSubTitle3Content`, `aArticleType`)
VALUES
	(1,'Gettting Ready for College?','Just like from Middle School to High School, college takes a huge leap in expectations from a student. There is more material to cover than ever before and the pace is fast. you need some advanced study techniques to be successful. The key to studying in college is really SELF DISCIPLINE, are you willing to do what it takes to succeed. a second key is to talk with your instructors. go to their office hours for a little 1 on 1 time or go to their assistants for help. There are campus resources, study groups, and library aids to help you study use them all to your advantage. And remember the first step to finding information is to ASK for it.','Math is your friend','Teenagers, yes YOU! Seem to think that math is not very important or is just too hard, as they get through high school. But remember we live in a technologically advanced society, everything we do, touch, and see has had some person behind the scenes doing some calculations to make it all possible. In your daily life will need to understand how to balance a bidget, invest, and evaluate costs of things. Understanding math makes these day to day things easier. It is also key in many of the higher paying career jobs. So don\'t think of math as a bd thing. Remember math is your friend.','SAT Prep','There are many programs out there to help you prepare for the SAT. Take advantage of these resources, because they are very helpful. This test is like a key to the master lock. Do well and it will open many doors. Do poorly and it will only open a few. Take the time out starting from the end of your sophomore year to begin studying for this test. Break each section apart and over the last 2 years of high school you will have a good understanding of what to expect f rom this test. Make sure you take many past Year SAT tests for practice. ','Staying Focused','Being focused in high school where there is typically lots of extracirricular activities like sports, acting, music lessong ect.. can be hard. But if you can study a little each day and review daily you can succeed with flying colors. Start your studying in 15 to 20 min blocks of time. Remove all distractions like phones, tv, and music. Have a plan of attack. 15min vocabulary, 5min break. 15min review past assignments, vocab, notes. Make flash cards. 5min break. 15 min review todays notes and concepts. Before bed, 5min Play through flashcards. Done!','HS');

/*!40000 ALTER TABLE `aHighschoolPage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aHomePage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aHomePage`;

CREATE TABLE `aHomePage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aMainTitle` varchar(40) NOT NULL DEFAULT '',
  `aMainContent` varchar(300) NOT NULL DEFAULT '',
  `aFeaturedTitle` varchar(40) NOT NULL DEFAULT '',
  `aFeaturedContent` varchar(1200) NOT NULL DEFAULT '',
  `aQuickTitle` varchar(20) NOT NULL DEFAULT '',
  `aQuickContent` varchar(600) NOT NULL DEFAULT '',
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `aArticleType` (`aArticleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aHomePage` WRITE;
/*!40000 ALTER TABLE `aHomePage` DISABLE KEYS */;

INSERT INTO `aHomePage` (`id`, `aMainTitle`, `aMainContent`, `aFeaturedTitle`, `aFeaturedContent`, `aQuickTitle`, `aQuickContent`, `aArticleType`)
VALUES
	(1,'Study2excell welcomes you!','You can get started on study2excell right away.  Get good study <a href=\"http://localhost:8888/index.php/s2e/tips\">tips</a>, find your <a href=\"http://localhost:8888/index.php/s2e/howdoyoulearn\">learning style</a>, then <a href=\"http://localhost:8888/index.php/s2e/strack\">track</a> your studies.<br ','Ask the Question','From the time we learn to talk we start asking questions. Many parents talk about the times in their child\'s lives where the only thing they asked was \"why\".  As we grow older we start to ask tougher questions and responses from our inquisitiveness becomes impatience, indifference, or even callousness.  And at this time asking questions becomes embarrassing and can cause anxiety or fear due to response behaviors.  However in a learning environment it is still crucial to ask the question.  Figuring it out on your own is not very effective especially when an answer to one question can put you back on track.</p><br /><p>Remember if you don\'t know ask. Utilize the teachers that you have and ask them to explain the information to you in a manner that you can understand.  That\'s what they are paid to do.  They don\'t know you need help until they test your knowledge. Remember your education is for YOU to succeed. If you don\'t understand something only you can tell the instructor. So Just ask.','Study Tools','Flashcards are still a good tool for studying. And now you can take them with you. <a href=\"http://www.studyblue.com\"> Studyblue.com</a> has a neat way to create flashcards online and you can view them at home or even on your phone.</p><br /><p>Also if you have not checked it out yet <a href=\"http://www.khanacademy.org\">Kahn Academy</a> is a great resource if your stuck and trying to remember how a math concept works or  how do you balance that chemical formula.  Check them out!','HOME');

/*!40000 ALTER TABLE `aHomePage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aMiddleschoolPage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aMiddleschoolPage`;

CREATE TABLE `aMiddleschoolPage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aMainTitle` varchar(40) NOT NULL DEFAULT '',
  `aMainContent` varchar(1200) NOT NULL DEFAULT '',
  `aSubTitle1` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle1Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle2` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle2Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle3` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle3Content` varchar(600) NOT NULL DEFAULT '',
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aArticleType` (`aArticleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aMiddleschoolPage` WRITE;
/*!40000 ALTER TABLE `aMiddleschoolPage` DISABLE KEYS */;

INSERT INTO `aMiddleschoolPage` (`id`, `aMainTitle`, `aMainContent`, `aSubTitle1`, `aSubTitle1Content`, `aSubTitle2`, `aSubTitle2Content`, `aSubTitle3`, `aSubTitle3Content`, `aArticleType`)
VALUES
	(1,'Getting Ready for High School?','High School is your next big step in your education.  Getting prepared for high school is much more than a new set of clothes and a cool new backpack.  High school is the first time where you will actually need to develop some study skills to get very good grades. Here are a few things that are important to remember.  The classroom syllabus is your roadmap to success. If your teachers use rubrics make sure you have a copy.  If you study everything in the rubric you will pass the class.  If you don\'t know ask, ask, ask. Lastly every school has some form of school access online. If you have forgotten an assignment, need to ask the teacher a question, or need to look at your grades you can probably find it online. ','Studying Math','All students learn math differently, but once you understand a concept it\'s all the same. Repetition... repetition... repetition...  The key to learning math is understanding the concept being taught, and then solve problems with that concept in as many ways possible.  Make sure that you manipulate the problem in all of its forms and practice solving for all values, not just the values that are given as examples.  Most of the \"hard\" problem you see on a test use a typical math problem manipulated in a format that is not typically seen.','Testing Tips','Get a good night sleep before any test.  Drink Orange Juice or have an orange for breakfast. The vitamin c keeps you more alert during the day. Remember a test is NOT about how fast you get done. but it\'s ALL about getting the most answers correct.  Read every question TWICE. Answer every question. REVIEW your answers and ensure the answer makes sense to the question asked. Show all of your work. (Math) If you don\'t know the answer right away Skip that question and come back to it later.','Staying Focused','Making sure that all homework is done and turned in on time. Keep copies of your homework so that you can review.  Make sure to correct all wrong answers form homework and tests.  Make sure you keep all distractions away when you study and do homework. No TV, Phones, or music to distract you.  Remember study in short timeslots of 10 - 15 min This will help you stay focused.','MS');

/*!40000 ALTER TABLE `aMiddleschoolPage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aStudySession
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aStudySession`;

CREATE TABLE `aStudySession` (
  `aStudySessionID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aStudyDate` varchar(10) NOT NULL DEFAULT '',
  `aStudyTime` int(4) unsigned NOT NULL,
  `aCurrentGrade` double unsigned NOT NULL,
  `aUserID` int(11) NOT NULL,
  `aSubjectID` int(11) NOT NULL,
  `aStudyGoal` text NOT NULL,
  `aUpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aStudySessionID`),
  KEY `aUserID` (`aUserID`),
  KEY `aSubjectID` (`aSubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aStudySession` WRITE;
/*!40000 ALTER TABLE `aStudySession` DISABLE KEYS */;

INSERT INTO `aStudySession` (`aStudySessionID`, `aStudyDate`, `aStudyTime`, `aCurrentGrade`, `aUserID`, `aSubjectID`, `aStudyGoal`, `aUpdateTime`)
VALUES
	(6,'05/12/2013',0,78,14,22,'Raise from 78 to 90','2013-05-21 03:55:05'),
	(7,'0000-00-00',0,82,14,23,'Raise from 82 to 90','2013-05-16 18:58:09'),
	(8,'0000-00-00',0,82,14,24,'Raise from 82 to 90','2013-05-16 18:58:09'),
	(13,'05/12/2013',0,82,14,27,'Raise from 82 to 90','2013-05-16 18:58:09'),
	(14,'05/12/2013',0,82,14,28,'Raise from 82 to 90','2013-05-16 18:58:09'),
	(21,'05/08/2013',0,70,14,21,'raise form 70 - 80','2013-05-16 19:11:57'),
	(28,'05/16/2013',0,88,14,30,'raise from 88 to 95','2013-05-20 00:48:29'),
	(32,'05/16/2013',0,78,14,34,'raise from 78 to 90','2013-05-20 00:55:33'),
	(33,'05/16/2013',0,78,14,35,'raise from 78 to 90','2013-05-20 00:56:25'),
	(34,'05/16/2013',0,72,14,36,'raise from 72 to 80','2013-05-20 01:02:30'),
	(35,'05/16/2013',0,72,14,37,'raise from 72 to 80','2013-05-20 01:03:27'),
	(55,'05/16/2013',15,85,14,28,'','2013-05-20 04:57:57'),
	(57,'05/18/2013',40,88,14,28,'','2013-05-20 05:00:54'),
	(58,'05/19/2013',35,80,14,30,'','2013-05-20 17:01:55'),
	(59,'05/20/2013',30,87,14,28,'','2013-05-20 17:05:44'),
	(60,'05/20/2013',45,89,14,28,'','2013-05-20 17:46:48'),
	(61,'05/19/2013',50,88,14,23,'','2013-05-20 18:22:07'),
	(62,'05/20/2013',60,90,14,23,'','2013-05-20 18:28:56'),
	(68,'05/19/2013',55,88,14,28,'','2013-05-20 18:36:20'),
	(76,'05/21/2013',20,90,14,30,'','2013-05-20 20:45:39'),
	(77,'05/21/2013',20,90,14,30,'','2013-05-20 20:46:00'),
	(78,'05/21/2013',20,90,14,30,'','2013-05-20 20:46:14'),
	(79,'05/21/2013',20,90,14,30,'','2013-05-20 20:46:30'),
	(80,'05/21/2013',20,90,14,30,'','2013-05-20 20:47:20'),
	(81,'05/21/2013',20,90,14,30,'','2013-05-20 20:54:39'),
	(82,'05/21/2013',20,90,14,30,'','2013-05-20 20:55:40'),
	(83,'05/21/2013',20,90,14,30,'','2013-05-20 20:57:13'),
	(84,'05/21/2013',20,90,14,30,'','2013-05-20 20:57:52'),
	(85,'05/21/2013',20,90,14,30,'','2013-05-20 20:58:08'),
	(86,'05/21/2013',20,90,0,30,'','2013-05-21 00:55:29'),
	(106,'05/21/2013',25,93,14,28,'','2013-05-21 01:28:16'),
	(117,'05/21/2013',25,93,14,28,'','2013-05-21 02:03:04'),
	(118,'05/21/2013',25,93,14,28,'','2013-05-21 02:15:01'),
	(119,'05/21/2013',25,93,14,28,'','2013-05-21 02:18:40'),
	(120,'05/21/2013',25,93,14,28,'','2013-05-21 02:19:19'),
	(121,'05/13/2013',60,82,14,27,'Flashcards, reading aloud','2013-05-21 02:21:17'),
	(122,'05/22/2013',40,95,14,28,'flash cards','2013-05-21 02:39:46'),
	(123,'05/22/2013',40,95,14,28,'flash cards','2013-05-21 02:40:26'),
	(124,'05/21/2013',30,77,14,23,'practice problems','2013-05-21 02:41:27'),
	(125,'05/21/2013',60,81,14,24,'','2013-05-21 02:43:52'),
	(126,'05/23/2013',55,97,14,28,'','2013-05-21 03:30:18'),
	(127,'05/23/2013',55,97,14,28,'','2013-05-21 03:33:28'),
	(128,'05/23/2013',55,97,14,28,'','2013-05-21 03:34:51'),
	(129,'05/21/2013',120,75,14,24,'read aloud text, flash cards','2013-05-21 03:36:29'),
	(130,'05/14/2013',30,73,14,21,'math problems','2013-05-21 03:37:43'),
	(132,'05/21/2013',120,75,14,24,'read aloud text, flash cards','2013-05-21 03:41:40'),
	(136,'05/17/2013',35,81,14,21,'flash cards','2013-05-21 03:51:13'),
	(137,'05/17/2013',35,81,14,21,'flash cards','2013-05-21 03:54:12'),
	(138,'05/13/2013',30,80,14,22,'Had a quiz the flashcards helped and so did the timeline.','2013-05-21 03:57:00'),
	(139,'05/14/2013',40,82,14,22,'timeline really worked, reading aloud worked too','2013-05-21 03:59:40'),
	(140,'05/14/2013',40,82,14,22,'timeline really worked, reading aloud worked too','2013-05-21 04:16:47'),
	(141,'05/14/2013',40,82,14,22,'timeline really worked, reading aloud worked too','2013-05-21 04:17:34'),
	(142,'05/21/2013',0,77,14,38,'raise to 80%','2013-05-21 04:45:58'),
	(143,'05/21/2013',0,86,14,39,'raise to 95%','2013-05-21 05:04:39'),
	(144,'05/23/2013',40,80,14,27,'used memory game','2013-05-21 06:36:11'),
	(145,'05/21/2013',0,67,14,40,'Raise to passing 75','2013-05-21 14:55:34'),
	(146,'05/21/2013',0,70,14,41,'Raise to passing 85','2013-05-21 15:04:29'),
	(147,'05/24/2013',60,98,14,28,'','2013-05-21 15:06:12'),
	(148,'05/21/2013',0,88,14,42,'Raise grade','2013-05-21 15:09:07'),
	(149,'05/21/2013',0,88,14,43,'Raise grade','2013-05-21 15:15:32'),
	(150,'05/21/2013',0,88,14,44,'Raise grade','2013-05-21 15:16:44'),
	(151,'05/21/2013',0,79,14,45,'Raise to 95','2013-05-21 15:25:39'),
	(152,'05/22/2013',60,77,14,40,'Studied and partied','2013-05-21 15:26:44'),
	(153,'05/22/2013',60,77,14,40,'Studied and partied','2013-05-21 15:27:23'),
	(154,'05/22/2013',60,77,14,40,'Studied and partied','2013-05-21 15:34:08'),
	(155,'05/25/2013',45,84,14,22,'I really really want to get an A but if I can\'t I\'ll settle for a B, but if i studied really really','2013-05-21 15:37:40'),
	(156,'05/25/2013',45,84,14,22,'I really really want to get an A but if I can\'t I\'ll settle for a B, but if i studied really really','2013-05-21 15:38:51'),
	(157,'05/22/2013',0,67,14,46,'get to passing grade 78','2013-05-22 00:31:46'),
	(158,'05/22/2013',0,80,20,47,'raise grade to 90','2013-05-22 01:07:01'),
	(159,'05/23/2013',15,83,0,22,'','2013-05-23 03:28:34'),
	(160,'05/23/2013',15,83,0,22,'','2013-05-23 03:38:46'),
	(161,'05/23/2013',0,81,19,48,'Raise to 90','2013-05-23 03:48:21'),
	(162,'05/24/2013',35,77,22,21,'','2013-05-24 06:01:39'),
	(163,'05/24/2013',46,37,23,21,'jkashdfljs','2013-05-24 06:04:17'),
	(164,'05/28/2013',30,70,14,22,'tanked my test','2013-05-28 19:27:58'),
	(165,'05/28/2013',60,86,14,37,'uggh','2013-05-28 20:31:51');

/*!40000 ALTER TABLE `aStudySession` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aSubject
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aSubject`;

CREATE TABLE `aSubject` (
  `aSubjectID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aSubjectName` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`aSubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aSubject` WRITE;
/*!40000 ALTER TABLE `aSubject` DISABLE KEYS */;

INSERT INTO `aSubject` (`aSubjectID`, `aSubjectName`)
VALUES
	(21,'math'),
	(22,'history'),
	(23,'calculus'),
	(24,'english'),
	(25,'chemistry'),
	(26,'biology'),
	(27,'spanish'),
	(28,'french'),
	(29,'algebra 2'),
	(30,'trigonometry'),
	(31,'world history'),
	(32,'american history'),
	(33,'agri science'),
	(34,'world literature'),
	(35,'physics'),
	(36,'organic chemistry'),
	(37,'statistics'),
	(38,'economics'),
	(39,'fluid dynamics'),
	(40,'java'),
	(41,'drawing'),
	(42,'art'),
	(43,'psychology'),
	(44,'physiology'),
	(45,'sociology'),
	(46,'philosophy'),
	(47,'logic'),
	(48,'law');

/*!40000 ALTER TABLE `aSubject` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aTipsPage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aTipsPage`;

CREATE TABLE `aTipsPage` (
  `aTipsID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aTipsDate` date NOT NULL,
  `aMainTitle` varchar(40) NOT NULL DEFAULT '',
  `aMainContent` varchar(1200) NOT NULL DEFAULT '',
  `aSubTitle1` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle1Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle2` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle2Content` varchar(600) NOT NULL DEFAULT '',
  `aSubTitle3` varchar(40) NOT NULL DEFAULT '',
  `aSubTitle3Content` varchar(600) NOT NULL DEFAULT '',
  `aArticleType` varchar(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`aTipsID`),
  UNIQUE KEY `aArticleType` (`aArticleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aTipsPage` WRITE;
/*!40000 ALTER TABLE `aTipsPage` DISABLE KEYS */;

INSERT INTO `aTipsPage` (`aTipsID`, `aTipsDate`, `aMainTitle`, `aMainContent`, `aSubTitle1`, `aSubTitle1Content`, `aSubTitle2`, `aSubTitle2Content`, `aSubTitle3`, `aSubTitle3Content`, `aArticleType`)
VALUES
	(1,'0000-00-00','Tip of the Day','Today\'s tip is useful to all, but especially to the auditory learner. As you are reviewing your notes, reading your textbook or just doing homework, do one additional thing... \"Read everything out loud\" Auditory learners need to listen to information to get better memory recall and understanding. Remember the more you hear the same information the easier it will be for you to recall that information.','Noteworthy Tips','Flashcards are old and antiquated, but they still work.  Whatever type of learner you are flashcards can fulfill all the necessary stimuli that each type of learner needs.  A visual learner can see the information on the cards and keeps the picture as their memory. The auditory learner can sound out the cards as well as the answers. The physical learner has something to hold on to and shuffle around also the writing of the cards is helpful for him or her. So don\'t forget this old but essential tool in your study toolbox.','Lets Play Memory','Physical learners need something to feel, touch or do to remember information. Playing a memory game can help to improve your memory recall. Memory Timeline is a great game to play to help memory recall in subjects where the order of information is important. Organize cards or objects to represent information and place the information in a row on the table or a floor. Label each item appropriately in the correct order. To play just remove the items shuffle them around and see if you can put them back in the right place. ','Staying Focused','Three bullets on keeping focused. First, know yourself. Second, know your goal. Third, eliminate personal distractions.  These 3 keys go hand in hand.  Be true to yourself and know your strengths and weaknesses.  Keep your goal S.M.A.R.T. Specific, Measurable, Achievable, Realistic, and Timely.  Schedule your study time and break it apart. (i.e. 1hr = (3) 20 min sessions with breaks between). Keep what\'s important in front of you. Turn off TV\'s, Smart Phones, Video Games, Music and whatever else you know that distracts you while studying. Make those minutes count.','TIP');

/*!40000 ALTER TABLE `aTipsPage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aUser
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aUser`;

CREATE TABLE `aUser` (
  `aUserID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aUserName` varchar(30) NOT NULL DEFAULT '',
  `aUserEmail` varchar(30) NOT NULL DEFAULT '',
  `aUserPass` varchar(32) NOT NULL DEFAULT '',
  `aUserLogin` tinyint(1) NOT NULL,
  PRIMARY KEY (`aUserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aUser` WRITE;
/*!40000 ALTER TABLE `aUser` DISABLE KEYS */;

INSERT INTO `aUser` (`aUserID`, `aUserName`, `aUserEmail`, `aUserPass`, `aUserLogin`)
VALUES
	(1,'jimmyd','j@hotmail.com','053b30d039ee50610307ff83add5cd5f',0),
	(2,'Bobbyj','b@excite.com','62d75a5e94d843b468ffe5f81d0ba9d4',0),
	(3,'Haroldk','h@hotmail.com','9d2faeac24a51fe9f7f853af787d0f95',0),
	(4,'arthurf','a@excite.com','e946ee28a4f492827664fb901a0a86d8',0),
	(5,'bunnie','br@hotmail.com','89f9066afccf9daa18c4cc4c4a878e7a',0),
	(6,'leoniy','l@excite.com','af37220bcbafc01e9c4410b6e4b59adc',0),
	(7,'yuccam','y@hotmail.com','1f8b3985c2a98b75deb9dcc5132156b5',0),
	(8,'kaylin','kk@live.com','2f15166424c23392fb2c35e0e1c08e7d',0),
	(9,'ollieo','o@gmail.com','8737054dcd7bc1be67e64b9a1625eed6',0),
	(10,'illian','i@gmail.com','a53a20305a506aceb4f56ad5d8f49623',0),
	(11,'uganda','u@gmail.com','2fc29586cf347d984b3c3652fe1636f0',0),
	(12,'missie','m@excite.com','c0b51cb55a89fdae17ea09eb7eadaf2f',0),
	(13,'giggly','g@gmail.com','afd25a3b14ecb0df8c41e4a1b73e097e',0),
	(14,'knuckles','kn@gmail.com','c726698620762d88f738be4a294fae79',0),
	(17,'Nelson123','n@gmail.com','ee5c35ce3d081da90622a10d2272ed5e',0),
	(18,'people34','bjewels@hotmail.com','0cb85dc04947c12c25f7ab5d965651a9',0),
	(19,'popeye','p@gmail.com','cc009593635c6dad840a31a4688fc662',0),
	(20,'Brutus','brutus@gmail.com','0d7aae5daf5495682e97c52e258c94ab',0),
	(21,'houdini','hh@excite.com','4c4999ac17adcef1a5a75fab71e5c857',0),
	(22,'frankenstein','frank@gmail.com','7b6f29316a81a40388345e1e74b7c6ef',0),
	(23,'zelda1','z@gmail.com','f261be1681afb9500f02973f86f758f6',0),
	(24,'wolfman','w@gmail.com','eb1828ba61b644286691ca311274422d',0);

/*!40000 ALTER TABLE `aUser` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
