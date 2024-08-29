SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS attachments;

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `form_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `file_type` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `file_group` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS file_groups;

CREATE TABLE `file_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO file_groups VALUES("1","استراتژی ها");
INSERT INTO file_groups VALUES("2","پروفایل ها");
INSERT INTO file_groups VALUES("3","پروپوزال ها");
INSERT INTO file_groups VALUES("4","پلان ها");



DROP TABLE IF EXISTS plan_quarter;

CREATE TABLE `plan_quarter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `quarter_id` int(11) NOT NULL,
  `totalexpense_af` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `totalexpense_usd` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `totalexpense_euro` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `development_percentage` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `project_description` text COLLATE utf8_persian_ci NOT NULL,
  `tadiat` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`,`plan_id`,`year_id`,`quarter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS plan_year;

CREATE TABLE `plan_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`plan_id`,`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=740 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO plan_year VALUES("1","1","3");
INSERT INTO plan_year VALUES("2","2","3");
INSERT INTO plan_year VALUES("3","3","3");
INSERT INTO plan_year VALUES("4","4","3");
INSERT INTO plan_year VALUES("5","5","3");
INSERT INTO plan_year VALUES("6","6","3");
INSERT INTO plan_year VALUES("7","7","3");
INSERT INTO plan_year VALUES("8","8","3");
INSERT INTO plan_year VALUES("9","9","3");
INSERT INTO plan_year VALUES("10","10","3");
INSERT INTO plan_year VALUES("11","11","3");
INSERT INTO plan_year VALUES("12","12","3");
INSERT INTO plan_year VALUES("13","13","3");
INSERT INTO plan_year VALUES("14","14","3");
INSERT INTO plan_year VALUES("15","15","3");
INSERT INTO plan_year VALUES("16","16","3");
INSERT INTO plan_year VALUES("17","17","3");
INSERT INTO plan_year VALUES("18","18","3");
INSERT INTO plan_year VALUES("19","19","3");
INSERT INTO plan_year VALUES("20","20","3");
INSERT INTO plan_year VALUES("21","21","3");
INSERT INTO plan_year VALUES("22","22","3");
INSERT INTO plan_year VALUES("23","23","3");
INSERT INTO plan_year VALUES("24","24","3");
INSERT INTO plan_year VALUES("25","25","3");
INSERT INTO plan_year VALUES("26","26","3");
INSERT INTO plan_year VALUES("27","27","3");
INSERT INTO plan_year VALUES("28","28","3");
INSERT INTO plan_year VALUES("29","29","3");
INSERT INTO plan_year VALUES("30","30","3");
INSERT INTO plan_year VALUES("31","31","3");
INSERT INTO plan_year VALUES("32","32","3");
INSERT INTO plan_year VALUES("33","33","3");
INSERT INTO plan_year VALUES("34","34","3");
INSERT INTO plan_year VALUES("35","35","3");
INSERT INTO plan_year VALUES("36","36","3");
INSERT INTO plan_year VALUES("37","37","3");
INSERT INTO plan_year VALUES("38","38","3");
INSERT INTO plan_year VALUES("39","39","3");
INSERT INTO plan_year VALUES("40","40","3");
INSERT INTO plan_year VALUES("41","41","3");
INSERT INTO plan_year VALUES("42","42","3");
INSERT INTO plan_year VALUES("43","43","3");
INSERT INTO plan_year VALUES("44","44","3");
INSERT INTO plan_year VALUES("45","45","3");
INSERT INTO plan_year VALUES("46","46","3");
INSERT INTO plan_year VALUES("47","47","3");
INSERT INTO plan_year VALUES("48","48","3");
INSERT INTO plan_year VALUES("49","49","3");
INSERT INTO plan_year VALUES("50","50","3");
INSERT INTO plan_year VALUES("51","51","3");
INSERT INTO plan_year VALUES("52","52","3");
INSERT INTO plan_year VALUES("53","53","3");
INSERT INTO plan_year VALUES("54","54","3");
INSERT INTO plan_year VALUES("55","55","3");
INSERT INTO plan_year VALUES("56","56","3");
INSERT INTO plan_year VALUES("57","57","3");
INSERT INTO plan_year VALUES("58","58","3");
INSERT INTO plan_year VALUES("59","59","3");
INSERT INTO plan_year VALUES("60","60","3");
INSERT INTO plan_year VALUES("61","61","3");
INSERT INTO plan_year VALUES("62","62","3");
INSERT INTO plan_year VALUES("63","63","3");
INSERT INTO plan_year VALUES("64","64","3");
INSERT INTO plan_year VALUES("65","65","3");
INSERT INTO plan_year VALUES("66","66","3");
INSERT INTO plan_year VALUES("67","67","3");
INSERT INTO plan_year VALUES("68","68","3");
INSERT INTO plan_year VALUES("69","69","3");
INSERT INTO plan_year VALUES("70","70","3");
INSERT INTO plan_year VALUES("71","71","3");
INSERT INTO plan_year VALUES("72","72","3");
INSERT INTO plan_year VALUES("73","73","3");
INSERT INTO plan_year VALUES("74","74","3");
INSERT INTO plan_year VALUES("75","75","3");
INSERT INTO plan_year VALUES("76","76","3");
INSERT INTO plan_year VALUES("77","77","3");
INSERT INTO plan_year VALUES("78","78","3");
INSERT INTO plan_year VALUES("79","79","3");
INSERT INTO plan_year VALUES("80","80","3");
INSERT INTO plan_year VALUES("81","81","3");
INSERT INTO plan_year VALUES("82","82","3");
INSERT INTO plan_year VALUES("83","83","3");
INSERT INTO plan_year VALUES("84","84","3");
INSERT INTO plan_year VALUES("85","85","3");
INSERT INTO plan_year VALUES("86","86","3");
INSERT INTO plan_year VALUES("87","87","3");
INSERT INTO plan_year VALUES("88","88","3");
INSERT INTO plan_year VALUES("89","89","3");
INSERT INTO plan_year VALUES("90","90","3");
INSERT INTO plan_year VALUES("91","91","3");
INSERT INTO plan_year VALUES("92","92","3");
INSERT INTO plan_year VALUES("93","93","3");
INSERT INTO plan_year VALUES("94","94","3");
INSERT INTO plan_year VALUES("95","95","3");
INSERT INTO plan_year VALUES("96","96","3");
INSERT INTO plan_year VALUES("97","97","3");
INSERT INTO plan_year VALUES("98","98","3");
INSERT INTO plan_year VALUES("99","99","3");
INSERT INTO plan_year VALUES("100","100","3");
INSERT INTO plan_year VALUES("101","101","3");
INSERT INTO plan_year VALUES("102","102","3");
INSERT INTO plan_year VALUES("103","103","3");
INSERT INTO plan_year VALUES("104","104","3");
INSERT INTO plan_year VALUES("105","105","3");
INSERT INTO plan_year VALUES("106","106","3");
INSERT INTO plan_year VALUES("107","107","3");
INSERT INTO plan_year VALUES("108","108","3");
INSERT INTO plan_year VALUES("109","109","3");
INSERT INTO plan_year VALUES("110","110","3");
INSERT INTO plan_year VALUES("111","111","3");
INSERT INTO plan_year VALUES("112","112","3");
INSERT INTO plan_year VALUES("113","113","3");
INSERT INTO plan_year VALUES("114","114","3");
INSERT INTO plan_year VALUES("115","115","3");
INSERT INTO plan_year VALUES("116","116","3");
INSERT INTO plan_year VALUES("117","117","3");
INSERT INTO plan_year VALUES("118","118","3");
INSERT INTO plan_year VALUES("119","119","3");
INSERT INTO plan_year VALUES("120","120","3");
INSERT INTO plan_year VALUES("121","121","3");
INSERT INTO plan_year VALUES("122","122","3");
INSERT INTO plan_year VALUES("123","123","3");
INSERT INTO plan_year VALUES("124","124","3");
INSERT INTO plan_year VALUES("125","125","3");
INSERT INTO plan_year VALUES("126","126","3");
INSERT INTO plan_year VALUES("127","127","3");
INSERT INTO plan_year VALUES("128","128","3");
INSERT INTO plan_year VALUES("129","129","3");
INSERT INTO plan_year VALUES("130","130","3");
INSERT INTO plan_year VALUES("131","131","3");
INSERT INTO plan_year VALUES("132","132","3");
INSERT INTO plan_year VALUES("133","133","3");
INSERT INTO plan_year VALUES("134","134","3");
INSERT INTO plan_year VALUES("135","135","3");
INSERT INTO plan_year VALUES("136","136","3");
INSERT INTO plan_year VALUES("137","137","3");
INSERT INTO plan_year VALUES("138","138","3");
INSERT INTO plan_year VALUES("139","139","3");
INSERT INTO plan_year VALUES("140","140","3");
INSERT INTO plan_year VALUES("141","141","3");
INSERT INTO plan_year VALUES("142","142","3");
INSERT INTO plan_year VALUES("143","143","3");
INSERT INTO plan_year VALUES("144","144","3");
INSERT INTO plan_year VALUES("145","145","3");
INSERT INTO plan_year VALUES("146","146","3");
INSERT INTO plan_year VALUES("147","147","3");
INSERT INTO plan_year VALUES("148","148","3");
INSERT INTO plan_year VALUES("149","149","3");
INSERT INTO plan_year VALUES("150","150","3");
INSERT INTO plan_year VALUES("151","151","3");
INSERT INTO plan_year VALUES("152","152","3");
INSERT INTO plan_year VALUES("153","153","3");
INSERT INTO plan_year VALUES("154","154","3");
INSERT INTO plan_year VALUES("155","155","3");
INSERT INTO plan_year VALUES("156","156","3");
INSERT INTO plan_year VALUES("157","157","3");
INSERT INTO plan_year VALUES("158","158","3");
INSERT INTO plan_year VALUES("159","159","3");
INSERT INTO plan_year VALUES("160","160","3");
INSERT INTO plan_year VALUES("161","161","3");
INSERT INTO plan_year VALUES("162","162","3");
INSERT INTO plan_year VALUES("163","163","3");
INSERT INTO plan_year VALUES("164","164","3");
INSERT INTO plan_year VALUES("165","165","3");
INSERT INTO plan_year VALUES("166","166","3");
INSERT INTO plan_year VALUES("167","167","3");
INSERT INTO plan_year VALUES("168","168","3");
INSERT INTO plan_year VALUES("169","169","3");
INSERT INTO plan_year VALUES("170","170","3");
INSERT INTO plan_year VALUES("171","171","3");
INSERT INTO plan_year VALUES("172","172","3");
INSERT INTO plan_year VALUES("173","173","3");
INSERT INTO plan_year VALUES("174","174","3");
INSERT INTO plan_year VALUES("175","175","3");
INSERT INTO plan_year VALUES("176","176","3");
INSERT INTO plan_year VALUES("177","177","3");
INSERT INTO plan_year VALUES("178","178","3");
INSERT INTO plan_year VALUES("179","179","3");
INSERT INTO plan_year VALUES("180","180","3");
INSERT INTO plan_year VALUES("181","181","3");
INSERT INTO plan_year VALUES("182","182","3");
INSERT INTO plan_year VALUES("183","183","3");
INSERT INTO plan_year VALUES("184","184","3");
INSERT INTO plan_year VALUES("185","185","3");
INSERT INTO plan_year VALUES("186","186","3");
INSERT INTO plan_year VALUES("187","187","3");
INSERT INTO plan_year VALUES("188","188","3");
INSERT INTO plan_year VALUES("189","189","3");
INSERT INTO plan_year VALUES("190","190","3");
INSERT INTO plan_year VALUES("191","191","3");
INSERT INTO plan_year VALUES("192","192","3");
INSERT INTO plan_year VALUES("193","193","3");
INSERT INTO plan_year VALUES("194","194","3");
INSERT INTO plan_year VALUES("195","195","3");
INSERT INTO plan_year VALUES("196","196","3");
INSERT INTO plan_year VALUES("197","197","3");
INSERT INTO plan_year VALUES("198","198","3");
INSERT INTO plan_year VALUES("199","199","3");
INSERT INTO plan_year VALUES("200","200","3");
INSERT INTO plan_year VALUES("201","201","3");
INSERT INTO plan_year VALUES("202","202","3");
INSERT INTO plan_year VALUES("203","203","3");
INSERT INTO plan_year VALUES("204","204","3");
INSERT INTO plan_year VALUES("205","205","3");
INSERT INTO plan_year VALUES("206","206","3");
INSERT INTO plan_year VALUES("207","207","3");
INSERT INTO plan_year VALUES("208","208","3");
INSERT INTO plan_year VALUES("209","209","3");
INSERT INTO plan_year VALUES("210","210","3");
INSERT INTO plan_year VALUES("211","211","3");
INSERT INTO plan_year VALUES("212","212","3");
INSERT INTO plan_year VALUES("213","213","3");
INSERT INTO plan_year VALUES("214","214","3");
INSERT INTO plan_year VALUES("215","215","3");
INSERT INTO plan_year VALUES("216","216","3");
INSERT INTO plan_year VALUES("217","217","3");
INSERT INTO plan_year VALUES("218","218","3");
INSERT INTO plan_year VALUES("219","219","3");
INSERT INTO plan_year VALUES("220","220","3");
INSERT INTO plan_year VALUES("221","221","3");
INSERT INTO plan_year VALUES("222","222","3");
INSERT INTO plan_year VALUES("223","223","3");
INSERT INTO plan_year VALUES("224","224","3");
INSERT INTO plan_year VALUES("225","225","3");
INSERT INTO plan_year VALUES("226","226","3");
INSERT INTO plan_year VALUES("227","227","3");
INSERT INTO plan_year VALUES("228","228","3");
INSERT INTO plan_year VALUES("229","229","3");
INSERT INTO plan_year VALUES("230","230","3");
INSERT INTO plan_year VALUES("231","231","3");
INSERT INTO plan_year VALUES("232","232","3");
INSERT INTO plan_year VALUES("233","233","3");
INSERT INTO plan_year VALUES("234","234","3");
INSERT INTO plan_year VALUES("235","235","3");
INSERT INTO plan_year VALUES("236","236","3");
INSERT INTO plan_year VALUES("237","237","3");
INSERT INTO plan_year VALUES("238","238","3");
INSERT INTO plan_year VALUES("239","239","3");
INSERT INTO plan_year VALUES("240","240","3");
INSERT INTO plan_year VALUES("241","241","3");
INSERT INTO plan_year VALUES("242","242","3");
INSERT INTO plan_year VALUES("243","243","3");
INSERT INTO plan_year VALUES("244","244","3");
INSERT INTO plan_year VALUES("245","245","3");
INSERT INTO plan_year VALUES("246","246","3");
INSERT INTO plan_year VALUES("247","247","3");
INSERT INTO plan_year VALUES("248","248","3");
INSERT INTO plan_year VALUES("249","249","3");
INSERT INTO plan_year VALUES("250","250","3");
INSERT INTO plan_year VALUES("251","251","3");
INSERT INTO plan_year VALUES("252","252","3");
INSERT INTO plan_year VALUES("253","253","3");
INSERT INTO plan_year VALUES("254","254","3");
INSERT INTO plan_year VALUES("255","255","3");
INSERT INTO plan_year VALUES("256","256","3");
INSERT INTO plan_year VALUES("257","257","3");
INSERT INTO plan_year VALUES("258","258","3");
INSERT INTO plan_year VALUES("259","259","3");
INSERT INTO plan_year VALUES("260","260","3");
INSERT INTO plan_year VALUES("261","261","3");
INSERT INTO plan_year VALUES("262","262","3");
INSERT INTO plan_year VALUES("263","263","3");
INSERT INTO plan_year VALUES("264","264","3");
INSERT INTO plan_year VALUES("265","265","3");
INSERT INTO plan_year VALUES("266","266","3");
INSERT INTO plan_year VALUES("267","267","3");
INSERT INTO plan_year VALUES("268","268","3");
INSERT INTO plan_year VALUES("269","269","3");
INSERT INTO plan_year VALUES("270","270","3");
INSERT INTO plan_year VALUES("271","271","3");
INSERT INTO plan_year VALUES("272","272","3");
INSERT INTO plan_year VALUES("273","273","3");
INSERT INTO plan_year VALUES("274","274","3");
INSERT INTO plan_year VALUES("275","275","3");
INSERT INTO plan_year VALUES("276","276","3");
INSERT INTO plan_year VALUES("277","277","3");
INSERT INTO plan_year VALUES("278","278","3");
INSERT INTO plan_year VALUES("279","279","3");
INSERT INTO plan_year VALUES("280","280","3");
INSERT INTO plan_year VALUES("281","281","3");
INSERT INTO plan_year VALUES("282","282","3");
INSERT INTO plan_year VALUES("283","283","3");
INSERT INTO plan_year VALUES("284","284","3");
INSERT INTO plan_year VALUES("285","285","3");
INSERT INTO plan_year VALUES("286","286","3");
INSERT INTO plan_year VALUES("287","287","3");
INSERT INTO plan_year VALUES("288","288","3");
INSERT INTO plan_year VALUES("289","289","3");
INSERT INTO plan_year VALUES("290","290","3");
INSERT INTO plan_year VALUES("291","291","3");
INSERT INTO plan_year VALUES("292","292","3");
INSERT INTO plan_year VALUES("293","293","3");
INSERT INTO plan_year VALUES("294","294","3");
INSERT INTO plan_year VALUES("295","295","3");
INSERT INTO plan_year VALUES("296","296","3");
INSERT INTO plan_year VALUES("297","297","3");
INSERT INTO plan_year VALUES("298","298","3");
INSERT INTO plan_year VALUES("299","299","3");
INSERT INTO plan_year VALUES("300","300","3");
INSERT INTO plan_year VALUES("301","301","3");
INSERT INTO plan_year VALUES("302","302","3");
INSERT INTO plan_year VALUES("303","303","3");
INSERT INTO plan_year VALUES("304","304","3");
INSERT INTO plan_year VALUES("305","305","3");
INSERT INTO plan_year VALUES("306","306","3");
INSERT INTO plan_year VALUES("307","307","3");
INSERT INTO plan_year VALUES("308","308","3");
INSERT INTO plan_year VALUES("309","309","3");
INSERT INTO plan_year VALUES("310","310","3");
INSERT INTO plan_year VALUES("311","311","3");
INSERT INTO plan_year VALUES("312","312","3");
INSERT INTO plan_year VALUES("313","313","3");
INSERT INTO plan_year VALUES("314","314","3");
INSERT INTO plan_year VALUES("315","315","3");
INSERT INTO plan_year VALUES("316","316","3");
INSERT INTO plan_year VALUES("317","317","3");
INSERT INTO plan_year VALUES("318","318","3");
INSERT INTO plan_year VALUES("319","319","3");
INSERT INTO plan_year VALUES("320","320","3");
INSERT INTO plan_year VALUES("321","321","3");
INSERT INTO plan_year VALUES("322","322","3");
INSERT INTO plan_year VALUES("323","323","3");
INSERT INTO plan_year VALUES("324","324","3");
INSERT INTO plan_year VALUES("325","325","3");
INSERT INTO plan_year VALUES("326","326","3");
INSERT INTO plan_year VALUES("327","327","3");
INSERT INTO plan_year VALUES("328","328","3");
INSERT INTO plan_year VALUES("329","329","3");
INSERT INTO plan_year VALUES("330","330","3");
INSERT INTO plan_year VALUES("331","331","3");
INSERT INTO plan_year VALUES("332","332","3");
INSERT INTO plan_year VALUES("333","333","3");
INSERT INTO plan_year VALUES("334","334","3");
INSERT INTO plan_year VALUES("335","335","3");
INSERT INTO plan_year VALUES("336","336","3");
INSERT INTO plan_year VALUES("337","337","3");
INSERT INTO plan_year VALUES("338","338","3");
INSERT INTO plan_year VALUES("339","339","3");
INSERT INTO plan_year VALUES("340","340","3");
INSERT INTO plan_year VALUES("341","341","3");
INSERT INTO plan_year VALUES("342","342","3");
INSERT INTO plan_year VALUES("343","343","3");
INSERT INTO plan_year VALUES("344","344","3");
INSERT INTO plan_year VALUES("345","345","3");
INSERT INTO plan_year VALUES("346","346","3");
INSERT INTO plan_year VALUES("347","347","3");
INSERT INTO plan_year VALUES("348","348","3");
INSERT INTO plan_year VALUES("349","349","3");
INSERT INTO plan_year VALUES("350","350","3");
INSERT INTO plan_year VALUES("351","351","3");
INSERT INTO plan_year VALUES("352","352","3");
INSERT INTO plan_year VALUES("353","353","3");
INSERT INTO plan_year VALUES("354","354","3");
INSERT INTO plan_year VALUES("355","355","3");
INSERT INTO plan_year VALUES("356","356","3");
INSERT INTO plan_year VALUES("357","357","3");
INSERT INTO plan_year VALUES("358","358","3");
INSERT INTO plan_year VALUES("359","359","3");
INSERT INTO plan_year VALUES("360","360","3");
INSERT INTO plan_year VALUES("361","361","3");
INSERT INTO plan_year VALUES("362","362","3");
INSERT INTO plan_year VALUES("363","363","3");
INSERT INTO plan_year VALUES("364","364","3");
INSERT INTO plan_year VALUES("365","365","3");
INSERT INTO plan_year VALUES("366","366","3");
INSERT INTO plan_year VALUES("367","367","3");
INSERT INTO plan_year VALUES("368","368","3");
INSERT INTO plan_year VALUES("369","369","3");
INSERT INTO plan_year VALUES("370","370","3");
INSERT INTO plan_year VALUES("371","371","3");
INSERT INTO plan_year VALUES("372","372","3");
INSERT INTO plan_year VALUES("373","373","3");
INSERT INTO plan_year VALUES("374","374","3");
INSERT INTO plan_year VALUES("375","375","3");
INSERT INTO plan_year VALUES("376","376","3");
INSERT INTO plan_year VALUES("377","377","3");
INSERT INTO plan_year VALUES("378","378","3");
INSERT INTO plan_year VALUES("379","379","3");
INSERT INTO plan_year VALUES("380","380","3");
INSERT INTO plan_year VALUES("381","381","3");
INSERT INTO plan_year VALUES("382","382","3");
INSERT INTO plan_year VALUES("383","383","3");
INSERT INTO plan_year VALUES("384","384","3");
INSERT INTO plan_year VALUES("385","385","3");
INSERT INTO plan_year VALUES("386","386","3");
INSERT INTO plan_year VALUES("387","387","3");
INSERT INTO plan_year VALUES("388","388","3");
INSERT INTO plan_year VALUES("389","389","3");
INSERT INTO plan_year VALUES("390","390","3");
INSERT INTO plan_year VALUES("391","391","3");
INSERT INTO plan_year VALUES("392","392","3");
INSERT INTO plan_year VALUES("393","393","3");
INSERT INTO plan_year VALUES("394","394","3");
INSERT INTO plan_year VALUES("395","395","3");
INSERT INTO plan_year VALUES("396","396","3");
INSERT INTO plan_year VALUES("397","397","3");
INSERT INTO plan_year VALUES("398","398","3");
INSERT INTO plan_year VALUES("399","399","3");
INSERT INTO plan_year VALUES("400","400","3");
INSERT INTO plan_year VALUES("401","401","3");
INSERT INTO plan_year VALUES("402","402","3");
INSERT INTO plan_year VALUES("403","403","3");
INSERT INTO plan_year VALUES("404","404","3");
INSERT INTO plan_year VALUES("405","405","3");
INSERT INTO plan_year VALUES("406","406","3");
INSERT INTO plan_year VALUES("407","407","3");
INSERT INTO plan_year VALUES("408","408","3");
INSERT INTO plan_year VALUES("409","409","3");
INSERT INTO plan_year VALUES("410","410","3");
INSERT INTO plan_year VALUES("411","411","3");
INSERT INTO plan_year VALUES("412","412","3");
INSERT INTO plan_year VALUES("413","413","3");
INSERT INTO plan_year VALUES("414","414","3");
INSERT INTO plan_year VALUES("415","415","3");
INSERT INTO plan_year VALUES("416","416","3");
INSERT INTO plan_year VALUES("417","417","3");
INSERT INTO plan_year VALUES("418","418","3");
INSERT INTO plan_year VALUES("419","419","3");
INSERT INTO plan_year VALUES("420","420","3");
INSERT INTO plan_year VALUES("421","421","3");
INSERT INTO plan_year VALUES("422","422","3");
INSERT INTO plan_year VALUES("423","423","3");
INSERT INTO plan_year VALUES("424","424","3");
INSERT INTO plan_year VALUES("425","425","3");
INSERT INTO plan_year VALUES("426","426","3");
INSERT INTO plan_year VALUES("427","427","3");
INSERT INTO plan_year VALUES("428","428","3");
INSERT INTO plan_year VALUES("429","429","3");
INSERT INTO plan_year VALUES("430","430","3");
INSERT INTO plan_year VALUES("431","431","3");
INSERT INTO plan_year VALUES("432","432","3");
INSERT INTO plan_year VALUES("433","433","3");
INSERT INTO plan_year VALUES("434","434","3");
INSERT INTO plan_year VALUES("435","435","3");
INSERT INTO plan_year VALUES("436","436","3");
INSERT INTO plan_year VALUES("437","437","3");
INSERT INTO plan_year VALUES("438","438","3");
INSERT INTO plan_year VALUES("439","439","3");
INSERT INTO plan_year VALUES("440","440","3");
INSERT INTO plan_year VALUES("441","441","3");
INSERT INTO plan_year VALUES("442","442","3");
INSERT INTO plan_year VALUES("443","443","3");
INSERT INTO plan_year VALUES("444","444","3");
INSERT INTO plan_year VALUES("445","445","3");
INSERT INTO plan_year VALUES("446","446","3");
INSERT INTO plan_year VALUES("447","447","3");
INSERT INTO plan_year VALUES("448","448","3");
INSERT INTO plan_year VALUES("449","449","3");
INSERT INTO plan_year VALUES("450","450","3");
INSERT INTO plan_year VALUES("451","451","3");
INSERT INTO plan_year VALUES("452","452","3");
INSERT INTO plan_year VALUES("453","453","3");
INSERT INTO plan_year VALUES("454","454","3");
INSERT INTO plan_year VALUES("455","455","3");
INSERT INTO plan_year VALUES("456","456","3");
INSERT INTO plan_year VALUES("457","457","3");
INSERT INTO plan_year VALUES("458","458","3");
INSERT INTO plan_year VALUES("459","459","3");
INSERT INTO plan_year VALUES("460","460","3");
INSERT INTO plan_year VALUES("461","461","3");
INSERT INTO plan_year VALUES("462","462","3");
INSERT INTO plan_year VALUES("463","463","3");
INSERT INTO plan_year VALUES("464","464","3");
INSERT INTO plan_year VALUES("465","465","3");
INSERT INTO plan_year VALUES("466","466","3");
INSERT INTO plan_year VALUES("467","467","3");
INSERT INTO plan_year VALUES("468","468","3");
INSERT INTO plan_year VALUES("469","469","3");
INSERT INTO plan_year VALUES("470","470","3");
INSERT INTO plan_year VALUES("471","471","3");
INSERT INTO plan_year VALUES("472","472","3");
INSERT INTO plan_year VALUES("473","473","3");
INSERT INTO plan_year VALUES("474","474","3");
INSERT INTO plan_year VALUES("475","475","3");
INSERT INTO plan_year VALUES("476","476","3");
INSERT INTO plan_year VALUES("477","477","3");
INSERT INTO plan_year VALUES("478","478","3");
INSERT INTO plan_year VALUES("479","479","3");
INSERT INTO plan_year VALUES("480","480","3");
INSERT INTO plan_year VALUES("481","481","3");
INSERT INTO plan_year VALUES("482","482","3");
INSERT INTO plan_year VALUES("483","483","3");
INSERT INTO plan_year VALUES("484","484","3");
INSERT INTO plan_year VALUES("485","485","3");
INSERT INTO plan_year VALUES("486","486","3");
INSERT INTO plan_year VALUES("487","487","3");
INSERT INTO plan_year VALUES("488","488","3");
INSERT INTO plan_year VALUES("489","489","3");
INSERT INTO plan_year VALUES("490","490","3");
INSERT INTO plan_year VALUES("491","491","3");
INSERT INTO plan_year VALUES("492","492","3");
INSERT INTO plan_year VALUES("493","493","3");
INSERT INTO plan_year VALUES("494","494","3");
INSERT INTO plan_year VALUES("495","495","3");
INSERT INTO plan_year VALUES("496","496","3");
INSERT INTO plan_year VALUES("497","497","3");
INSERT INTO plan_year VALUES("498","498","3");
INSERT INTO plan_year VALUES("499","499","3");
INSERT INTO plan_year VALUES("500","500","3");
INSERT INTO plan_year VALUES("501","501","3");
INSERT INTO plan_year VALUES("502","502","3");
INSERT INTO plan_year VALUES("503","503","3");
INSERT INTO plan_year VALUES("504","504","3");
INSERT INTO plan_year VALUES("505","505","3");
INSERT INTO plan_year VALUES("506","506","3");
INSERT INTO plan_year VALUES("507","507","3");
INSERT INTO plan_year VALUES("508","508","3");
INSERT INTO plan_year VALUES("509","509","3");
INSERT INTO plan_year VALUES("510","510","3");
INSERT INTO plan_year VALUES("511","511","3");
INSERT INTO plan_year VALUES("512","512","3");
INSERT INTO plan_year VALUES("513","513","3");
INSERT INTO plan_year VALUES("514","514","3");
INSERT INTO plan_year VALUES("515","515","3");
INSERT INTO plan_year VALUES("516","516","3");
INSERT INTO plan_year VALUES("517","517","3");
INSERT INTO plan_year VALUES("518","518","3");
INSERT INTO plan_year VALUES("519","519","3");
INSERT INTO plan_year VALUES("520","520","3");
INSERT INTO plan_year VALUES("521","521","3");
INSERT INTO plan_year VALUES("522","522","3");
INSERT INTO plan_year VALUES("523","523","3");
INSERT INTO plan_year VALUES("524","524","3");
INSERT INTO plan_year VALUES("525","525","3");
INSERT INTO plan_year VALUES("526","526","3");
INSERT INTO plan_year VALUES("527","527","3");
INSERT INTO plan_year VALUES("528","528","3");
INSERT INTO plan_year VALUES("529","529","3");
INSERT INTO plan_year VALUES("530","530","3");
INSERT INTO plan_year VALUES("531","531","3");
INSERT INTO plan_year VALUES("532","532","3");
INSERT INTO plan_year VALUES("533","533","3");
INSERT INTO plan_year VALUES("534","534","3");
INSERT INTO plan_year VALUES("535","535","3");
INSERT INTO plan_year VALUES("536","536","3");
INSERT INTO plan_year VALUES("537","537","3");
INSERT INTO plan_year VALUES("538","538","3");
INSERT INTO plan_year VALUES("539","539","3");
INSERT INTO plan_year VALUES("540","540","3");
INSERT INTO plan_year VALUES("541","541","3");
INSERT INTO plan_year VALUES("542","542","3");
INSERT INTO plan_year VALUES("543","543","3");
INSERT INTO plan_year VALUES("544","544","3");
INSERT INTO plan_year VALUES("545","545","3");
INSERT INTO plan_year VALUES("546","546","3");
INSERT INTO plan_year VALUES("547","547","3");
INSERT INTO plan_year VALUES("548","548","3");
INSERT INTO plan_year VALUES("549","549","3");
INSERT INTO plan_year VALUES("550","550","3");
INSERT INTO plan_year VALUES("551","551","3");
INSERT INTO plan_year VALUES("552","552","3");
INSERT INTO plan_year VALUES("553","553","3");
INSERT INTO plan_year VALUES("554","554","3");
INSERT INTO plan_year VALUES("555","555","3");
INSERT INTO plan_year VALUES("556","556","3");
INSERT INTO plan_year VALUES("557","557","3");
INSERT INTO plan_year VALUES("558","558","3");
INSERT INTO plan_year VALUES("559","559","3");
INSERT INTO plan_year VALUES("560","560","3");
INSERT INTO plan_year VALUES("561","561","3");
INSERT INTO plan_year VALUES("562","562","3");
INSERT INTO plan_year VALUES("563","563","3");
INSERT INTO plan_year VALUES("564","564","3");
INSERT INTO plan_year VALUES("565","565","3");
INSERT INTO plan_year VALUES("566","566","3");
INSERT INTO plan_year VALUES("567","567","3");
INSERT INTO plan_year VALUES("568","568","3");
INSERT INTO plan_year VALUES("569","569","3");
INSERT INTO plan_year VALUES("570","570","3");
INSERT INTO plan_year VALUES("571","571","3");
INSERT INTO plan_year VALUES("572","572","3");
INSERT INTO plan_year VALUES("573","573","3");
INSERT INTO plan_year VALUES("574","574","3");
INSERT INTO plan_year VALUES("575","575","3");
INSERT INTO plan_year VALUES("576","576","3");
INSERT INTO plan_year VALUES("577","577","3");
INSERT INTO plan_year VALUES("578","578","3");
INSERT INTO plan_year VALUES("579","579","3");
INSERT INTO plan_year VALUES("580","580","3");
INSERT INTO plan_year VALUES("581","581","3");
INSERT INTO plan_year VALUES("582","582","3");
INSERT INTO plan_year VALUES("583","583","3");
INSERT INTO plan_year VALUES("584","584","3");
INSERT INTO plan_year VALUES("585","585","3");
INSERT INTO plan_year VALUES("586","586","3");
INSERT INTO plan_year VALUES("587","587","3");
INSERT INTO plan_year VALUES("588","588","3");
INSERT INTO plan_year VALUES("589","589","3");
INSERT INTO plan_year VALUES("590","590","3");
INSERT INTO plan_year VALUES("591","591","3");
INSERT INTO plan_year VALUES("592","592","3");
INSERT INTO plan_year VALUES("593","593","3");
INSERT INTO plan_year VALUES("594","594","3");
INSERT INTO plan_year VALUES("595","595","3");
INSERT INTO plan_year VALUES("596","596","3");
INSERT INTO plan_year VALUES("597","597","3");
INSERT INTO plan_year VALUES("598","598","3");
INSERT INTO plan_year VALUES("599","599","3");
INSERT INTO plan_year VALUES("600","600","3");
INSERT INTO plan_year VALUES("601","601","3");
INSERT INTO plan_year VALUES("602","602","3");
INSERT INTO plan_year VALUES("603","603","3");
INSERT INTO plan_year VALUES("604","604","3");
INSERT INTO plan_year VALUES("605","605","3");
INSERT INTO plan_year VALUES("606","606","3");
INSERT INTO plan_year VALUES("607","607","3");
INSERT INTO plan_year VALUES("608","608","3");
INSERT INTO plan_year VALUES("609","609","3");
INSERT INTO plan_year VALUES("610","610","3");
INSERT INTO plan_year VALUES("611","611","3");
INSERT INTO plan_year VALUES("612","612","3");
INSERT INTO plan_year VALUES("613","613","3");
INSERT INTO plan_year VALUES("614","614","3");
INSERT INTO plan_year VALUES("615","615","3");
INSERT INTO plan_year VALUES("616","616","3");
INSERT INTO plan_year VALUES("617","617","3");
INSERT INTO plan_year VALUES("618","618","3");
INSERT INTO plan_year VALUES("619","619","3");
INSERT INTO plan_year VALUES("620","620","3");
INSERT INTO plan_year VALUES("621","621","3");
INSERT INTO plan_year VALUES("622","622","3");
INSERT INTO plan_year VALUES("623","623","3");
INSERT INTO plan_year VALUES("624","624","3");
INSERT INTO plan_year VALUES("625","625","3");
INSERT INTO plan_year VALUES("626","626","3");
INSERT INTO plan_year VALUES("627","627","3");
INSERT INTO plan_year VALUES("628","628","3");
INSERT INTO plan_year VALUES("629","629","3");
INSERT INTO plan_year VALUES("630","630","3");
INSERT INTO plan_year VALUES("631","631","3");
INSERT INTO plan_year VALUES("632","632","3");
INSERT INTO plan_year VALUES("633","633","3");
INSERT INTO plan_year VALUES("634","634","3");
INSERT INTO plan_year VALUES("635","635","3");
INSERT INTO plan_year VALUES("636","636","3");
INSERT INTO plan_year VALUES("637","637","3");
INSERT INTO plan_year VALUES("638","638","3");
INSERT INTO plan_year VALUES("639","639","3");
INSERT INTO plan_year VALUES("640","640","3");
INSERT INTO plan_year VALUES("641","641","3");
INSERT INTO plan_year VALUES("642","642","3");
INSERT INTO plan_year VALUES("643","643","3");
INSERT INTO plan_year VALUES("644","644","3");
INSERT INTO plan_year VALUES("645","645","3");
INSERT INTO plan_year VALUES("646","646","3");
INSERT INTO plan_year VALUES("647","647","3");
INSERT INTO plan_year VALUES("648","648","3");
INSERT INTO plan_year VALUES("649","649","3");
INSERT INTO plan_year VALUES("650","650","3");
INSERT INTO plan_year VALUES("651","651","3");
INSERT INTO plan_year VALUES("652","652","3");
INSERT INTO plan_year VALUES("653","653","3");
INSERT INTO plan_year VALUES("654","654","3");
INSERT INTO plan_year VALUES("655","655","3");
INSERT INTO plan_year VALUES("656","656","3");
INSERT INTO plan_year VALUES("657","657","3");
INSERT INTO plan_year VALUES("658","658","3");
INSERT INTO plan_year VALUES("659","659","3");
INSERT INTO plan_year VALUES("660","660","3");
INSERT INTO plan_year VALUES("661","661","3");
INSERT INTO plan_year VALUES("662","662","3");
INSERT INTO plan_year VALUES("663","663","3");
INSERT INTO plan_year VALUES("664","664","3");
INSERT INTO plan_year VALUES("665","665","3");
INSERT INTO plan_year VALUES("666","666","3");
INSERT INTO plan_year VALUES("667","667","3");
INSERT INTO plan_year VALUES("668","668","3");
INSERT INTO plan_year VALUES("669","669","3");
INSERT INTO plan_year VALUES("670","670","3");
INSERT INTO plan_year VALUES("671","671","3");
INSERT INTO plan_year VALUES("672","672","3");
INSERT INTO plan_year VALUES("673","673","3");
INSERT INTO plan_year VALUES("674","674","3");
INSERT INTO plan_year VALUES("675","675","3");
INSERT INTO plan_year VALUES("676","676","3");
INSERT INTO plan_year VALUES("677","677","3");
INSERT INTO plan_year VALUES("678","678","3");
INSERT INTO plan_year VALUES("679","679","3");
INSERT INTO plan_year VALUES("680","680","3");
INSERT INTO plan_year VALUES("681","681","3");
INSERT INTO plan_year VALUES("682","682","3");
INSERT INTO plan_year VALUES("683","683","3");
INSERT INTO plan_year VALUES("684","684","3");
INSERT INTO plan_year VALUES("685","685","3");
INSERT INTO plan_year VALUES("686","686","3");
INSERT INTO plan_year VALUES("687","687","3");
INSERT INTO plan_year VALUES("688","688","3");
INSERT INTO plan_year VALUES("689","689","3");
INSERT INTO plan_year VALUES("690","690","3");
INSERT INTO plan_year VALUES("691","691","3");
INSERT INTO plan_year VALUES("692","692","3");
INSERT INTO plan_year VALUES("693","693","3");
INSERT INTO plan_year VALUES("694","694","3");
INSERT INTO plan_year VALUES("695","695","3");
INSERT INTO plan_year VALUES("696","696","3");
INSERT INTO plan_year VALUES("697","697","3");
INSERT INTO plan_year VALUES("698","698","3");
INSERT INTO plan_year VALUES("699","699","3");
INSERT INTO plan_year VALUES("700","700","3");
INSERT INTO plan_year VALUES("701","701","3");
INSERT INTO plan_year VALUES("702","702","3");
INSERT INTO plan_year VALUES("703","703","3");
INSERT INTO plan_year VALUES("704","704","3");
INSERT INTO plan_year VALUES("705","705","3");
INSERT INTO plan_year VALUES("706","706","3");
INSERT INTO plan_year VALUES("707","707","3");
INSERT INTO plan_year VALUES("708","708","3");
INSERT INTO plan_year VALUES("709","709","3");
INSERT INTO plan_year VALUES("710","710","3");
INSERT INTO plan_year VALUES("711","711","3");
INSERT INTO plan_year VALUES("712","712","3");
INSERT INTO plan_year VALUES("713","713","3");
INSERT INTO plan_year VALUES("714","714","3");
INSERT INTO plan_year VALUES("715","715","3");
INSERT INTO plan_year VALUES("716","716","3");
INSERT INTO plan_year VALUES("717","717","3");
INSERT INTO plan_year VALUES("718","718","3");
INSERT INTO plan_year VALUES("719","719","3");
INSERT INTO plan_year VALUES("720","720","3");
INSERT INTO plan_year VALUES("721","721","3");
INSERT INTO plan_year VALUES("722","722","3");
INSERT INTO plan_year VALUES("723","723","3");
INSERT INTO plan_year VALUES("724","724","3");
INSERT INTO plan_year VALUES("725","725","3");
INSERT INTO plan_year VALUES("726","726","3");
INSERT INTO plan_year VALUES("727","727","3");
INSERT INTO plan_year VALUES("728","728","3");
INSERT INTO plan_year VALUES("729","729","3");
INSERT INTO plan_year VALUES("730","730","3");
INSERT INTO plan_year VALUES("731","731","3");
INSERT INTO plan_year VALUES("732","732","3");
INSERT INTO plan_year VALUES("733","733","3");
INSERT INTO plan_year VALUES("734","734","3");
INSERT INTO plan_year VALUES("735","735","3");
INSERT INTO plan_year VALUES("736","736","3");
INSERT INTO plan_year VALUES("737","737","3");
INSERT INTO plan_year VALUES("738","738","3");
INSERT INTO plan_year VALUES("739","739","3");



DROP TABLE IF EXISTS tblattachments;

CREATE TABLE `tblattachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS tblcompanies;

CREATE TABLE `tblcompanies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS tblcounties;

CREATE TABLE `tblcounties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblcounties VALUES("4","انجیل","12");
INSERT INTO tblcounties VALUES("5","گذره","12");
INSERT INTO tblcounties VALUES("6","شیندند","12");
INSERT INTO tblcounties VALUES("7","کشک رباط سنگی","12");
INSERT INTO tblcounties VALUES("8","کشک کهنه","12");
INSERT INTO tblcounties VALUES("9","فارسی","12");
INSERT INTO tblcounties VALUES("10","ادرسکن","12");
INSERT INTO tblcounties VALUES("11","اوبه","12");
INSERT INTO tblcounties VALUES("12","زنده جان","12");
INSERT INTO tblcounties VALUES("13","غوریان","12");
INSERT INTO tblcounties VALUES("14","کرخ","12");
INSERT INTO tblcounties VALUES("15","پشتون زرغون","12");
INSERT INTO tblcounties VALUES("16","چشت شریف","12");
INSERT INTO tblcounties VALUES("17","کهسان","12");
INSERT INTO tblcounties VALUES("18","گلران","12");
INSERT INTO tblcounties VALUES("19","مرکز شهر","12");
INSERT INTO tblcounties VALUES("20","چهار ولسوالی","12");



DROP TABLE IF EXISTS tbldonors;

CREATE TABLE `tbldonors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS tblorganizations;

CREATE TABLE `tblorganizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `sector_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblorganizations VALUES("19","داخله(قوماندانی امنیه)","6");
INSERT INTO tblorganizations VALUES("20","آمریت ملکی میدان هوائی","6");
INSERT INTO tblorganizations VALUES("21","ریاست امور خارجه","6");
INSERT INTO tblorganizations VALUES("22","ریاست امنیت ملی","6");
INSERT INTO tblorganizations VALUES("23","دفاع ملی (نماینده قول اردو یا فرقه )","6");
INSERT INTO tblorganizations VALUES("24","مدیریت محابس","6");
INSERT INTO tblorganizations VALUES("25","مدیریت عمومی ثبت احوال نفوس","6");
INSERT INTO tblorganizations VALUES("26","مقام ولایت","7");
INSERT INTO tblorganizations VALUES("27","شورای ولایتی","7");
INSERT INTO tblorganizations VALUES("28","ریاست خدمات تخنیکی-سکتوری","7");
INSERT INTO tblorganizations VALUES("29","اداره حارنوالی","7");
INSERT INTO tblorganizations VALUES("30","محاکم","7");
INSERT INTO tblorganizations VALUES("31","ریاست عدلیه","7");
INSERT INTO tblorganizations VALUES("32","ریاست حج و اوقاف","7");
INSERT INTO tblorganizations VALUES("33","کمیسیون مستقل اصلاحات اداری و خدمات ملکی","7");
INSERT INTO tblorganizations VALUES("34","کمیسیون مستقل انتخابات","7");
INSERT INTO tblorganizations VALUES("35","ریاست حوزه فرعی دریائی هریرود پایینی","8");
INSERT INTO tblorganizations VALUES("36","ریاست فواید عامه","8");
INSERT INTO tblorganizations VALUES("37","وزارت انرژی و آب","8");
INSERT INTO tblorganizations VALUES("38","شاروالی","8");
INSERT INTO tblorganizations VALUES("39","ریاست مخابرات","8");
INSERT INTO tblorganizations VALUES("40","ریاست هرات برشنا موسسه","8");
INSERT INTO tblorganizations VALUES("41","ریاست شرکت آبرسانی","8");
INSERT INTO tblorganizations VALUES("42","ریاست معادن","8");
INSERT INTO tblorganizations VALUES("43","ریاست ترانسپورت","8");
INSERT INTO tblorganizations VALUES("44","ریاست انکشاف شهری","8");
INSERT INTO tblorganizations VALUES("45","اداره جیودیزی و کارتوگرافی (کدستر)","8");
INSERT INTO tblorganizations VALUES("46","ریاست معارف","9");
INSERT INTO tblorganizations VALUES("47","تربیه معلم","9");
INSERT INTO tblorganizations VALUES("48","ریاست پوهنتون (تحصیلات عالی)","9");
INSERT INTO tblorganizations VALUES("49","آمریت رادیو و تلویزیون","9");
INSERT INTO tblorganizations VALUES("50","ریاست اطلاعات و فرهنگ","9");
INSERT INTO tblorganizations VALUES("51","آمریت تربیت بدنی (سپورت)","9");
INSERT INTO tblorganizations VALUES("52","آکادمی علوم","9");
INSERT INTO tblorganizations VALUES("53","صحت عامه","10");
INSERT INTO tblorganizations VALUES("54","ریاست زراعت و آبیاری","11");
INSERT INTO tblorganizations VALUES("55","ریاست احیا و انکشاف دهات","11");
INSERT INTO tblorganizations VALUES("56","ریاست کار و امور اجتماعی شهدا و معلولین","12");
INSERT INTO tblorganizations VALUES("57","ریاست عودت مهاجرین","12");
INSERT INTO tblorganizations VALUES("58","ریاست امور زنان","12");
INSERT INTO tblorganizations VALUES("59","هلال احمر","12");
INSERT INTO tblorganizations VALUES("60","ریاست سرحدات","12");
INSERT INTO tblorganizations VALUES("61","ریاست مبارزه با حوادث","12");
INSERT INTO tblorganizations VALUES("62","آمریت عمومی کوچی ها","12");
INSERT INTO tblorganizations VALUES("63","ریاست اقتصاد","13");
INSERT INTO tblorganizations VALUES("64","مستوفیت","13");
INSERT INTO tblorganizations VALUES("65","ریاست تجارت و صنایع","13");
INSERT INTO tblorganizations VALUES("66","ریاست اتاق های تجارت","13");
INSERT INTO tblorganizations VALUES("67","ریاست کنترول و تفتیش","13");
INSERT INTO tblorganizations VALUES("68","اداره مستقل نورم و استندرد","13");
INSERT INTO tblorganizations VALUES("69","محیط زیست","13");
INSERT INTO tblorganizations VALUES("70","اداره احصائیه","13");
INSERT INTO tblorganizations VALUES("71","اداره آیسا","13");
INSERT INTO tblorganizations VALUES("72","ریاست گمرک","13");



DROP TABLE IF EXISTS tblplan;

CREATE TABLE `tblplan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `project_type` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `village_district` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `primary_situation` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `active_situation` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `land_exists` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `estimated_project_time` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `project_directbeneficiaries` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `project_indirectbeneficiaries` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `priority` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `estimated_project_price_af` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `estimated_project_price_usd` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `estimated_project_price_euro` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `related_organization` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `relation_ands` text COLLATE utf8_persian_ci NOT NULL,
  `plan_description` text COLLATE utf8_persian_ci NOT NULL,
  `start_date` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `end_date` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `project_estimated_price_main` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `af_price` double NOT NULL,
  `usd_price` double NOT NULL,
  `euro_price` double NOT NULL,
  `donor_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `invest_year` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=740 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblplan VALUES("1","اعمار بلاک اداری برای دفاتر قرار گاه قوماندانی امنیه","ساختمانی","داخل قرار گاه قومانددانی","","","no","هفت ماه","تمام همشهریان","","1","","300000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("2","اعمار تعمیر اداری برای مدیریت ترافیک","ساختمانی","شمال شهر","","","no","هفت ماه","تمام همشهریان","","2","","300000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("3","اعمار تعمیر قوماندانی امنیه","ساختمانی","مرکز ولسوالی","","مخروبه","yes","یکسال","","","1","","300000","","19","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("4","اعمار بلاک برای شعبات اداری","ساختمانی","قوماندانی امنیه","","کمبود","yes","ده ماه","","","2","","250000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("5","اعمار مرکز صحی ","ساختمانی","قوماندانی امنیه","","کمبود","yes","شش ماه","","","2","","100000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("6","اعمار نظارت خانه اناث","ساختمانی","","","عدم","yes","ده ماه","","","1","","120000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("7","اعمار ذخایر روغنیات","ساختمانی","داخل مدیریت تخنیک","","","yes","شش ماه","","","1","","80000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("8","اعمار تعمیر برای حوزه هفتم","ساختمانی","","","","no","شش ماه","","","2","","150000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("9","اعمار تعمیر برای حوزه ششم","ساختمانی","نوآباد","","","yes","شش ماه","","","1","","150000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("10","اعمار تعمر برای حوزه هشتم","ساختمانی","کاریزک","","","yes","شش ماه","","","1","","150000","","19","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("11","اعمار تعمیر برای حوزه چهارم","ساختمانی","","","","no","شش ماه","","","1","","150000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("12","اعمار تعمیر اداری خارنوالی پولیس","ساختمانی","","","مخروبه","yes","هشت ماه","","","1","","250000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("13","ترمیمات اساسی برای تعمیر حوزه دهم","ساختمانی","","اسکلیت دارد","","yes","شش ماه","","","1","","100000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("14","اعمار تعمیر حوزه یازدهم","ساختمانی","","","","no","","","","1","","180000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("15","مرکز سواد آموزی محبس منزل دوم","ساختمانی","ناحیه اول","","","yes","سه ماه","1000","","2","","60000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("16","تعمیر برای قوماندانی امینه ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","","","2","","300000","","19","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("17","ترمیمات اساسی برای تعمیر مهمانخانه واقع باغ ملت","ساختمانی","","","","yes","شش ماه","","","2","","300000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("18","نظارت خانه اناثیه","ساختمانی","","","","yes","شش ماه","","","2","","200000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("19","اعمار بلاک رهایشی پیش روی مهمانخانه قبلی","ساختمانی","","","","yes","شش ماه","","","2","","250000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("20","تهیه و اکمال کانتیرنر رهایشی ","ساختمانی","","","","yes","شش ماه","","","2","","60000","","19","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("21","اعمار پسته یک اطاقه","ساختمانی","","","","yes","شش ماه","","","2","","100000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("22","اعمار حوزه امنیتی در ساحه اسلام قلعه","ساختمانی","","","","yes","شش ماه","","","2","","60000","","19","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("23","اعمار حوزه امنیتی در ساحه تورغندی","ساختمانی","","","","yes","شش ماه","","","2","","600000","","19","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("24","ترمیم اساسی بلاک های داخل قرار گاه قوماندانی امنیه","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","40000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("25","ترمیات اسال تعمیر دومنزله مدیریت مواد مخدره","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","20000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("26","ترمیمات اسای مدیریت اطفایئه ","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","60000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("27","ترمیمات مهمانخانه","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","20000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("28","ترمیمات اسای مدیریت تخنیک","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","40000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("29","ترمیمات اساسی تعمیر نظارتخانه","ساختمانی","مرکز شهر","","","yes","2ماه","","","2","","20000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("30","نیاز مندی شدید به ترانس 400 KVA","نیازمندی ","میدان هوائی","","","no","1ماه","","","2","","40000","","20","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("31","اعمار تعمیر اداری ریاست امور سرحدات","ساختمانی","","","","no","","","","2","","150000","","19","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("32","اعمار یک باب هنگر عصری و استندرد ","ساختمانی","محوطه ولایت","","","yes","شش ماه","","","2","","150000","","26","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("33","اعمار دیوار احاطه و تعمیر کشک کهنه","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","","","1","","250000","","26","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("34","اعمار ولسوالی ","ساختمانی","مرکزولسوالی","","","yes","شش ماه","کارمندان","تمام ولسوالی","2","","250000","","26","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("35","اعمار دیوار ولسوالی فارسی","ساختمانی","مرکزولسوالی","","","yes","3ماه","کارمندان","تمام ولسوالی","2","","50000","","26","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("36","بازسازی و نوسازی سیستم کانالیزواسیون، ریاست شرکت آبرسانی و باسازی (رنگمالی و سیستم اطفائیه)تعمیر ات مقام ولایت","ساختمانی","محوطه ولایت","","","yes","3ماه","کارمندان","کارمندان","2","","100000","","26","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("37","بازسازی سیستم برق رسانی داخل باغ آزادی","ساختمانی","باغ آزادی","","","yes","3ماه","کارمندان","کارمندان","2","","50000","","26","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("38","ایجاد سیستم sound، تهویه هوا و وسایل اطفاء حریق سالون مولانا جلالدین بلخی ","تخنیکی","ناحیه اول","","","yes","3ماه","","","2","","80000","","26","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("39","اکمال کار ساختمان تعمیرات 
ولسوالی های کهسان وگلران","ساختمانی","","","","no","","","","1","","100000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("40","احداث ساختمان ولسوالی 
فارسی","ساختمانی","","","","no","","","","1","","150000","","26","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("41","اسفالت صحن ولایت با اطراف آن","ساختمانی","","","","no","","","","1","","50000","","26","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("42","اعمار تعمیر ولسوالی ","ساختمانی","مرکزولسوالی","","","yes","شش ماه","","","1","","260000","","26","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("43","اعمار تعمیرات جدید برای تمام شاروالی های پانزده گانه ولایت هرات","ساختمانی","","","","no","","","","1","","450000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("44","حفر چاه عمیق","ساختمانی","مرکز ولسوالی ","","","no","","","","1","","10000","","26","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("45","تعمیر ریاست اقتصاد","ساختمانی","","","","no","","","","1","","200000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("46","اعمار یک سالون جلسات مردمی با دو طبقه مهمان خانه شورای ولایتی","ساختمانی","","","","no","","","","1","","300000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("47","بازسازی و میناتوری سالن نگارستان ","ساختمانی","مرکزشهر","","","no","","","","2","","50000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("48","بازسازی پشت بام سالن نگارستان ","ساختمانی","مرکزشهر","","","no","","","","2","","20000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("49","تجهیز و بازسازی مرکز رسانه ها","ساختمانی","مرکزشهر","","","no","","","","2","","20000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("50","اعمار تعمیر برای شورای انکشافی","ساختمانی","مرکز ولسوالی","","","no","","","","2","","50000","","26","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("51","اعمار يك باب مهمان خانه براي ولسوالي","ساختمانی","مركز ولسوالي","","","no","","","","2","","50000","","26","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("52","اعمار تعمير براي شواري زنان","ساختمانی","مركزولسوالي","","","no","","","","2","","50000","","26","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("53","ترميم تعمير سابقه ولسوالي","ساختمانی","چشت شریف","","","no","","","","2","","20000","","26","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("54","دیوار احاطه تعمیر ولسوالی ","ساختمانی","","","","no","","","","2","","30000","","26","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("55","اعمار یک سالون جلسات عمومی شورای ولایتی","ساختمانی","","","","no","","","","2","","","","27","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("56","اعمار تعمیر برای15 مدیریت حقوقی","ساختمانی","","","","yes","یکسال","","","2","","900000","","31","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("57","تعمیرریاست عدلیه","ساختمانی","","","","no","","","","2","","150000","","31","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("58","تعمیر کمپلکس مرکز آموزشی مامورین خدمات ملکی با تجهیزات آن","ساختمانی","","","","yes","8ماه","5000مامور","6000مامور","2","","300000","","33","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("59","بازسازی تاسیسات بندر تورغندی","ساختمانی","تورغندی","","","no","","","","2","","4000000","","32","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("60","اعمار یک باب مسجد جامع ","ساختمانی","مرکز ولسوالی","","","yes","8ماه","","","2","","200000","","32","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("61","اعمار یک باب مسجد جامع ","ساختمانی","مرکز ولسوالی","","","yes","8ماه","","","2","","200000","","32","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("62","اعمار یک باب مسجد جامع ","ساختمانی","مرکز ولسوالی","","","yes","8ماه","","","2","","200000","","32","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("63","اعمار یک باب مسجد جامع ","ساختمانی","مرکز ولسوالی","","","yes","8ماه","","","2","","200000","","32","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("64","اعمار یک باب مسجد  ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","","","2","","150000","","32","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("65","اعمار یک باب مسجد  ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","","","2","","150000","","32","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("66","اعمار چهار باب محراب مسجد","ساختمانی","","","","no","","","","1","","40000","","32","","","","","","0","0","0","0","0","12","20","","plan");
INSERT INTO tblplan VALUES("67","اعمار یک باب مسجد  ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","","","2","","150000","","32","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("68","اسفالت سرکها 40کیلومتر","ساختمانی","نواحی شهر","","","no","سه ماه","500000","2000000","2","","8000000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("69","اعمار 12کیلومتر کانال فاضلاب","ساختمانی","نواحی شهر","","خندق","yes","یکسال","100000","300000","2","","1000000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("70","اعمار کانال نو آباد فرقه (225متر)","ساختمانی","","","","no","","","","2","","100000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("71","اعمار کانال گوالیان(240)","ساختمانی","نواحی شهر","","","no","","","","1","","75000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("72","اعمار کانال به طول 450 متر ","ساختمانی","ناحیه 11","","","no","","","","1","","200000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("73","اعمار کانال فاضلاب مکتب جبلی الی کانال عمومی","ساختمانی","مکتب جبلی","","","no","","","","2","","30000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("74","اعمار کانال فاضلاب بطول 500متر","ساختمانی","جاده کوثر وفرهنگ ناحیه ششم","","","no","","","","2","","30000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("75","اسفالت 700متر جاده های فرعی جنوب غرب زیارت سلطان آقا","ساختمانی","","","","no","","","","2","","150000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("76","اعمار کانال فاضلاب به طول 600 جنوب غرب سلطلن آقا","ساختمانی","","","","no","","","","2","","100000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("77","اعمار سرک هاشمی به طول 1200متر","ساختمانی","","","","no","","","","2","","130000","","38","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("78","اعمار کانال ( طول410متروعرض1/80متر) فیروز آباد","ساختمانی","ناحیه دهم","","","no","","","","2","","70000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("79","کانال آبرده و شالبافان و خانها و کوچه توکلی 2700متر","ساختمانی","ناحیه هفتم ","ابتدایی","ابتدایی","yes","","","","1","","350000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("80","کانال به مقطع کوچک 1500متر","ساختمانی","ناحیه ششم","ابتدایی","ابتدایی","yes","","","","2","","180000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("81","اسفالت جاده ها بطول 12 کیلو متر","ساختمانی","نواحی 15 گانه","ابتدایی","ابتدایی","yes","","","","2","","2800000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("82","اعمار کانال فاضلاب پایان آب به طول 60متر وعرض1.8متر و ارتفاع 1.35 متر ","ساختمانی","ناحیه دهم","","","no","","","","2","","10000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("83","بازسازی کانال بیت الامان(700متر)","ساختمانی","ناحیه اول","","","no","","","","2","","80000","","38","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("84","اعمار پسته خانه","ساختمانی","دوآب","","","yes","یکسال","مشترکین","اهالی منطقه","2","","60000","","39","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("85","اعمار پسته خانه","ساختمانی","بازار ولسوای","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","60000","","39","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("86","انتقال کیبل فبر نوری به ولسوالی ها","ساختمانی","بازار ولسوای","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","75000","","39","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("87","اعمار پسته خانه","ساختمانی","","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","60000","","39","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("88","انتقال کیبل فبر نوری به ولسوالی ها","ساختمانی","","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","25000","","39","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("89","اعمار دیوار احاطه 1جریت ملکیت ریاست مخابرات","ساختمانی","","","","yes","سه ماه","","","2","","30000","","39","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("90","اعمار پست خانه","ساختمانی","","","","yes","1سال","مشترکین","اهالی منطقه","2","","60000","","39","","اولویت اول ","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("91","اعمار پست خانه ","ساختمانی","بازار ولسوای","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","60000","","39","","اولویت اول ","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("92","اعمار پست خانه ","ساختمانی","","","","yes","شش ماه","مشترکین","اهالی منطقه","2","","60000","","39","","اولویت اول ","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("93","اعمار تعمير مديريت ریاست مخابرات (زمين موجود است)","ساختمانی","مركز ولسواي","","","no","","","","2","","50000","","39","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("94","اعمار سیلبرد","ساختمانی","قلعه جمال","","","no","هشت ماه","800 فامیل","1200 فامیل","2","","210000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("95","اعمار سربند","ساختمانی","برناآباد","","","no","نه ماه","970 فامیل","2000 فامیل","1","","280000","","35","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("96","اعمار دیوار استنادی ","ساختمانی","شمس آباد","","","yes","هشت ماه","1200","3000","2","      ","200000","","35","","500متر طول دیوار","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("97","اعمار دیوار استنادی ","ساختمانی","ده سرخ ده پده","","","yes","نه ماه","3600","5400","1","","500000","","35","","2.5کیلومتر طول دیوار","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("98","اعمار سربند","ساختمانی","روزنک و دهران","","","yes","هفت ماه","7200","12000","2","","1200000","","35","","اعمارسربند جوی","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("99","اعمار سربند","ساختمانی","کلاته قاضی","","","yes","پنج ماه","1350","2400","2","","600000","","35","","اعمارسربند جوی","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("100","اعمار سربند","ساختمانی","سبول و کلاه دراز","","","yes","هشت ماه","3000","4200","2","","1000000","","35","","اعمارسربند جوی","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("101","دیوار استنادی400m","ساختمانی","هفت چاه","","","no","","","","2","","120000","","","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("102","دیوار استنادی500m","ساختمانی","جنگان","","","no","","","","2","","150000","","","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("103","اعمارسربند","ساختمانی","دوپشته و زنگ صبا","","","yes","یازده ماه","2400","3600","2","","900000","","35","","اعمارسربند جوی","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("104","اعمار سربند","ساختمانی","ده گرگان و روشنان","","","yes","ده ماه","4300","6000","2","","1100000","","35","","اعمارسربند جوی","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("105","اعمار دیوار استنادی ","ساختمانی","تورغندی","","","yes","هفت ماه","7800","12000","1","","700000","","35","","200متر دیوار به داخل دریای کشک","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("106","اعمار دیوار استنادی ","ساختمانی","منزل خواجه ها و محل صاحب زاده","","","yes","نه ماه","3000","4200","1","","800000","","35","","600متر دیوار","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("107","اعمار دیوار استنادی بین جوی انجیل و هفت قلب","ساختمانی","45قریه","خامه","تخریب","yes","یکسال","18750فامیل","22672","2","","150000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("108","اعمار و بازسازی ساختمان های جوی النجان","ساختمانی","20 قریه","پخته","فرسوده","yes","یکسال","5220فامیل","6740","2","","850000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("109","اعمار و بازسازی ساختمان های جوی سفیدروان","ساختمانی","17قریه","پخته","فرسوده","yes","یکسال","2760فامل","3500","2","","670000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("110","اعمار و بازسازی ساختمان های جوی هفت قلب","ساختمانی","7 قریه","پخته","فرسوده","yes","هشت ماه","1720فامیل","2350","2","","350000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("111","اعمار و بازسازی ساختمان های جوی تیزان","ساختمانی","22قریه","پخته","فرسوده","yes","یکسال","2900فامیل","5730","2","","850000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("112","اعمار و بازسازی ساختمان های جوی ادوان","ساختمانی","25قریه","پخته","فرسوده","yes","یکسال","3700فامیل","6950","2","","1850000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("113","اعمار و بازسازی ساختمان های جوی میرعسه","ساختمانی","20قریه","پخته","فرسوده","yes","یکسال","2800فامیل","5200","2","","1750000","","35","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("114","اعمار و باز سازی سربند جوی تلاب","ساختمانی","تلاب","خامه","تخریب","yes","شش ماه","800فامیل","1050","2","","230000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("115","اعمار و باز سزی ساختمان های جوی عزت ","ساختمانی","عزت","خامه","تخریب","yes","شش ماه","1100فامیل","1200","2","","120000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("116","اعمار و بازسازی ساختمان های جوی زرین","ساختمانی","5قریه","خامه","تخریب","yes","شش ماه","850فامیل","970","2","","110000","","35","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("117","اعمار و بازسازی ساختمان های جوی دمجوی","ساختمانی","6قریه","خامه","تخریب","yes","یکسال","1850فامیل","2360","2","","270000","","35","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("118","اعمار و باسازی وپاک کاری کاریز قریه غمخوار","ساختمانی","5قریه","خامه","تخریب","yes","شش ماه","565فامیل","1740","2","","80000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("119","اعمار و باز سازی سربند جوی غمدوان","ساختمانی","8قریه","خامه","تخریب","yes","هشت ماه","1000فامیل","1200","2","","120000","","35","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("120","اعمار دیوار استنادی در جوار رودشار (شرندک)","ساختمانی","20قریه","خامه","تخریب","yes","یکسال","2300فامیل","3700","2","","250000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("121","اعمار و بازسازی و پاک کاری کاریز قریه ده شفیع","ساختمانی","شیندند","خامه","تخریب","yes","شش ماه","105فامیل","210","2","","80000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("122","اعمار300متر دیوار استنادی جوی انجیل قریه تریاک","ساختمانی","تریاک","خامه","درحالتخریب","yes","شش ماه","ولسوالی انجیل","مردم هرات","2","","100000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("123","اعمار دیوار محافظتی از سیل برد ","ساختمانی","جوی قاضی","","","no","","","","2","","30000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("124","اعمار دیوار محافظتی از سیل برد ","ساختمانی","قریه نور آباد","","","no","","","","2","","30000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("125","اعمار دیوار استنادی ","ساختمانی","خم نوکرزایی","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("126","اعمار سیلبرد هفت قلب","ساختمانی","تریاک ، اودران","","","no","","","","1","","350000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("127","اعمار تراز خواجه نوح","ساختمانی","کورت نشین","","","no","","","","1","","450000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("128","اعمار دیوار استنادی (60متر)","ساختمانی","شرق پل مرکز","","","no","","","","2","","40000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("129","اعمار دیوار استنادی به طول 800متر ","ساختمانی","","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("130","اعمار دیوار استنادی دریا هریرود","ساختمانی","سیروان تاجیکی","","درحال تخریب","yes","شش ماه","اهالی ولسوالی","","2","","200000","","35","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("131","اعمار دیوا استنادی","ساختمانی","جوی قاضی","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("132","اعمار دیوا استنادی","ساختمانی","رباط سرکفته","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("133","اعمار دیوا استنادی","ساختمانی","باغ رباط ","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("134","اعمار دیوا استنادی","ساختمانی","نورآباد","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("135","پخته کاری جوی کاریز ","ساختمانی","علاف","","","no","","","","2","","30000","","35","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("136","اعمار تخ و دیوار استنادی کنار آن خم صاحب خان و تخ نوکورزایی","ساختمانی","خم صاحب خان","","","no","","","","2","","20000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("137","ترمیم جوی کانال ","ساختمانی","بیشه و ده زبر","","","no","","","","2","","20000","","35","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("138","اعمار دیوار استنادی","ساختمانی","خم مزار","","","no","","","","1","","30000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("139","اعمار جوی ابکلان ","ساختمانی","ابکلان","","","no","","","","2","","30000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("140","اعمار دیوار استنادی ","ساختمانی","قلعه رود فشگان","","","no","","","","1","","30000","","35","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("141","دیوار استنادی به طول 200متر ","ساختمانی","مرکز ولسوالی در کنار جنگل و پل عمومی ","","","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("142","دیوار محافظوی قریه جات","ساختمانی","جایه","","","no","","","","2","","228000","","35","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("143","تحکیم سواحل ","گابیون کاری","کاریز قلعه عمر","","خراب ","no","","","","2","","50000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("144","تحکیم سواحل ","کانال انحرافی و گابیونی ","شمال قریه های کورت و سیوشان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("145","تحکیم سواحل ","کانال انحرافی ","مرکز کهسان","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("146","تحکیم سواحل ","کندن کاری و گابیون ","سای دوم مجغندک","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("147","تحکیم سواحل ","کندن کاری و گابیون ","یکه توت","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("148","تحکیم سواحل ","کندن کاری و گابیون ","سرآسیاب مجغندک","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("149","تحکیم سواحل ","کندن کاری و گابیون ","شصت کهف","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("150","تحکیم سواحل ","کندن کاری و گابیون ","عزیز رود","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("151","تحکیم سواحل ","گابیون کاری","سید آباد ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("152","تحکیم سواحل ","گابیون کاری","پارنجان","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("153","تحکیم سواحل ","گابیون کاری","سیروان تاجیکی","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("154","تحکیم سواحل ","گابیون کاری","سر بند جوی لال محمد قریه ناب","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("155","تحکیم سواحل ","پر جاوه های گابیونی ","سر بند جوی سافلان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("156","تحکیم سواحل ","گابیون کاری","جوی نو شرق حسن آباد ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("157","تحکیم سواحل ","گابیون کاری","سبند جوی علیا قریه چهار باغجه","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("158","تحکیم سواحل ","گابیون کاری","شصت نیک سیفون جوی علیا","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("159","تحکیم سواحل ","گابیون کاری","خم مستک اسفرز","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("160","تحکیم سواحل ","گابیون کاری","کشک سیروان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("161","تحکیم سواحل ","گابیون کاری","پل پده ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("162","تحکیم سواحل ","گابیون کاری","قهستان","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("163","تحکیم سواحل ","گابیون کاری","رباط غوثی","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("164","تحکیم سواحل ","گابیون کاری","ده لته ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("165","تحکیم سواحل ","گابیون کاری","رباط سلیمان","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("166","تحکیم سواحل ","گابیون کاری","ده شکر","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("167","تحکیم سواحل ","گابیون کاری","سرآب","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("168","تحکیم سواحل ","گابیون کاری","سربند جوی ماراآباد","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("169","تحکیم سواحل ","دکه های گابیونی","چورچی","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("170","تحکیم سواحل ","دکه های گابیونی","سر بند جوی رباط سلیمان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("171","تحکیم سواحل ","دکه های گابیونی","حسن آباد ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("172","تحکیم سواحل ","دیوار استنادی گابیونی ","سید آباد ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("173","تحکیم سواحل ","دیوار استنادی  ","تگاب سونی ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("174","تحکیم سواحل ","دیوار گابیونی ","خار زار","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("175","تحکیم سواحل ","دیوار گابیونی ","دره تخت","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("176","تحکیم سواحل ","دیوار گابیونی ","سلما","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("177","تحکیم سواحل ","دکه های گابیونی","وردک ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("178","تحکیم سواحل ","دکه های گابیونی","بیشه غزه","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("179","تحکیم سواحل ","جالهای گابیونی ","بیشه ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("180","تحکیم سواحل ","جالهای گابیونی ","خم تهویچ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("181","تحکیم سواحل ","دیوار استنادی گابیونی ","شاه نطره بلخیان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("182","تحکیم سواحل ","دیوار استنادی ","تگاب سور","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("183","تحکیم سواحل ","دیوار های گابیونی ","رغواجه","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("184","تحکیم سواحل ","جالهای گابیونی ","جوی چنارک ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("185","تحکیم سواحل ","جالهای گابیونی ","کبوتر خان ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("186","تحکیم سواحل ","دکه های گابیونی","خم چنار زیل ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("187","تحکیم سواحل ","دیوار گابیونی ","سر تگاب ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("188","تحکیم سواحل ","دکه های گابیونی","ارویج","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("189","تحکیم سواحل ","25000کندنکاری و دیوار گابیونی","صبیره (قلعه مرتضی)","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("190","تحکیم سواحل ","دکه های گابیونی","ترک آباد","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("191","تحکیم سواحل ","دیوار استنادی ","جوی سراپرده قریه قوجوغه","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("192","تحکیم سواحل ","دیوارهای گابیونی ","جوی علیا قریه سراپرده ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("193","تحکیم سواحل ","100متر دیوار گابیونی ","جوی قندوران قریه سراپرده ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("194","تحکیم سواحل ","دکه های گابیونی","دریابان مرکز ولسوالی ","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("195","تحکیم سواحل ","انجیل ","قریه سپولک کارته محل ساروانها","","","no","","","","2","","50000","","35","","اسکج واحجام کاری ضمیمه است ","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("196","اعمار سربند دهن درزک (چکدیم )","ساختمانی","پنج بوزي، خليفه رحمت، قلعه گردك","","","no","","100000","120000","2","","100000","","37","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("197","اعمار بند آب گردان (چیک دیم )","ساختمانی","قریه همروده","","","no","","48000","10000","2","","100000","","37","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("198","اعماربند آبگردان 500 مترمكعب","ساختمانی","كاريز كريمداد زيارتجا","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("199","اعمار بند آبگردان 350 مترمكعب","ساختمانی","گورگي شرق ولسوالي","","","no","","","","2","","150000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("200","اعمار بند آبگردان 400مترمكعب","ساختمانی","رباط سفچه","","","no","","","","2","","180000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("201","اعمار بند آبگردان300 مترمكعب","ساختمانی","گله چاه ،چاه شهيد","","","no","","","","2","","150000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("202","ايجاد ديوار استنادي 800 متر","ساختمانی","کانال عمومی زیارتجاه الی قریه جویان","","","no","","","","2","","240000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("203","ایجاد دیوار استنادی 700 متر","ساختمانی","گوشان الی قریه زاهدان","","","no","","","","2","","210000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("204","ایجاد دیوار استنادی 500متر","ساختمانی","کانال عمومی بین قریه خلچان","","","no","","","","2","","150000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("205","ایجاد دیوار ستنادی 200 متر","ساختمانی","کانال عمومی قریه صمد خان","","","no","","","","2","","60000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("206","ایجاد دیوار استنادی 2کیلومتر","ساختمانی","قلعه قندهاری ها و محل صاحب زاده","","","no","","","","2","","600000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("207","ایجاد دیوار ستنادی1 کیلومتر","ساختمانی","جوی تیزان دوکان ایوب خان محل [ندان","","","no","","","","2","","300000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("208","ایجاد دیوار ستنادی 300 متر","ساختمانی","قریه حاجی عبدل وههاب کنار بلوک کالان","","","no","","","","2","","70000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("209","ایجاد دیوار استنادی ولایروبی کاریز","ساختمانی","قریه رباط سفچه","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("210","ایجاد دیوار استنادی 600 متر","ساختمانی","چاه چشمه و شیدا","","","no","","","","2","","60000","","35","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("211","بند آب گردان ","ساختمانی","چارتاق","","","no","","","","2","","2000000","","35","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("212","بند آب گردان ","ساختمانی","تنگي زرد","","","no","","","","2","","1000000","","35","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("213","ديوار استنادي ","ساختمانی","پهلوان پيري و سرآب مجغندك","","","no","","","","2","","500000","","35","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("214","اعمار بند آبگردان","ساختمانی","جوی حصار نغاره خانه","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("215","اعمار بند آبگردان","ساختمانی","جوی میوند","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("216","اعمار بند آبگردان","ساختمانی","جوی سرخ بغند علیا","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("217","اعمار بند آبگردان","ساختمانی","جوی سرکاری تیک","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("218","اعمار بند آبگردان","ساختمانی","جوی فرهاد","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("219","اعمار بند آبگردان","ساختمانی","جوی ارمینه ارخ","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("220","اعمار بند آبگردان","ساختمانی","جوی قلندر","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("221","اعمار بند آبگردان","ساختمانی","جوی چپ رود بفنند سفلی","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("222","اعمار بند آبگردان","ساختمانی","جوی سفی","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("223","اعمار بند آبگردان","ساختمانی","جوی سفیدان","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("224","اعمار بند آبگردان","ساختمانی","جوی برپل","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("225","اعمار دیوار استنادی","ساختمانی","برپل دره امید","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("226","اعمار دیوار استنادی","ساختمانی","ارخ از آبچه ","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("227","اعمار دیوار استنادی","ساختمانی","آب ماهی","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("228","اعمار دیوار استنادی","ساختمانی","شوپحک","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("229","اعمار دیوار استنادی","ساختمانی","سید آباد ","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("230","اعمار دیوار استنادی","ساختمانی","ارخ رباط نی","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("231","اعمار دیوار استنادی","ساختمانی","دشک دو آب","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("232","اعمار دیوار استنادی","ساختمانی","سر ششیال","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("233","اعمار دیوار استنادی","ساختمانی","پای بید علیا","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("234","اعمار دیوار استنادی","ساختمانی","بعند وسط","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("235","اعمار دیوار استنادی","ساختمانی","پای حصار لشکر راه","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("236","اعمار ديوار استنادي","ساختمانی","احمد آباد","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("237","اعمار ديوار استنادي درياي هريرود","ساختمانی","شصت ها حصوصآ شصت ني يك","","","no","","","","2","","1000000","","35","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("238","اعمار بند ذخيره آب ","ساختمانی","سرپل","","","no","","","","2","","300000","","35","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("239","ساختن پل پياده رو بالاي درياي هريرود ","ساختمانی","سرپل،جنوا و رباط آخندا","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("240","ديوار استنادي 2كيلومتر ","ساختمانی","رباط افغانها","","","no","","","","2","","800000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("241","ديوار استنادي 1 كيلومتر ","ساختمانی","مركز ولسوالي ","","","no","","","","2","","400000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("242","اعمار پل روي درياي شكيبان و تاجيكي","ساختمانی","مركز ولسوالي","","","no","","","","2","","1000000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("243","سيل گردان رود ترسونه بطول يك كيلومتر","ساختمانی","رباط پريان رباط افغانها و هريرود","","","no","","","","2","","400000","","35","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("244","اعمار يك پايه پل اساسي بروي دريا","ساختمانی","بين دنه الي كلاته نظر","","","no","","","","2","","150000","","35","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("245","ديوار محافظوي بطول 30 متر","","دوغي سبزكي","","","no","","","","2","","6000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("246","اعمار 3 ديوار محافظوي  بطول 500 متر ","","نعيم جان،  حاجي سيد ، شاه اعلم","","","no","","","","2","","300000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("247","اعمار 3 ديوار محافظوي بطول 100 متر","","نور آباد، حقابه خرم،  رباط سنگي","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("248","اعمار 3 ديوار محافظوي بطول 80 متر ","","خلوك،  باغچه ،  تلختان","","","no","","","","2","","400000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("249","اعمار سربند","","سيد شاه، شاه اعلم ، لبي، شوراب، خليفه رحمت","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("250","اعمار سربند","","تورغندي ، يكه توت، سنگپير ،برجنك ، خواج جبر ،چهل دختر","","","no","","","","2","","200000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("251","بند آبگردان بطول 100 متر و ارتفاع 50 متر","","لوكه سنگ","","","no","","","","2","","4000000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("252","بند آبگردان بطول 150 متر وارتقاع 100 متر","","قلعه قوچي","","","no","","","","2","","5000000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("253","ايجاد و اعمار سربند","","سنگر هفت و سفلي، خودروان، كمرزرد","","","no","","","","2","","500000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("254","اعمار 3 ديوار محافظوي بطول 100 متر","","خليفه رحمت، قنات وكيل، دو آب عليا ","","","no","","","","2","","100000","","35","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("255","حفرو تجهیز یک حلقه چاه عمیق همراه با سویچ برد وغیره ضروریات","","جنوب شرق صوفی آباد ","","","no","","","","1","","100000","","41","","","","","","0","0","0","0","0","0","0","","plan");
INSERT INTO tblplan VALUES("256","شبکه ریاست شرکت ریاست شرکت آبرسانی ","ساختمانی","نوآباد","","","no","","","","2","","100000","","41","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("257","اعمار دیوار احاطه، ساختمان جناتور خانه ، اتاق کلورینشن با گارد","","جنوب شرق صوفی آباد ","","","no","","","","1","","38000","","41","","","","","","0","0","0","0","0","0","0","","plan");
INSERT INTO tblplan VALUES("258","شبکه ریاست شرکت آبرسانی ","ساختمانی","قریه کمانه ","","","no","","","","2","","300000","","41","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("259","تمديد پروژه آبرساني قريه سروستان","ساختمانی","سروستان","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("260","ايجاد شبكه آبرساني","ساختمانی","اردوباغ،قلب ناظر،ناگهان و آخندان","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("261","ايجاد شبكه آبرساني","ساختمانی","گواشان و شكورخانه","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("262","ايجاد شبكه آبرساني","ساختمانی","پل سنگي","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("263","ايجاد شبكه آبرساني","ساختمانی","محل شراف الدين و محل دشت زيارتجاه","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("264","ايجاد شبكه آبرساني","ساختمانی","قريه تيزان","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("265","ايجاد شبكه آبرساني","ساختمانی","قلعه دانشاباد سرآسياب","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("266","ايجاد شبكه آبرساني","ساختمانی","قلعه هاي بختياري ها","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("267","ايجاد شبكه آبرساني","ساختمانی","سلطان پير سرخ سرنان و محل چهار درختي","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("268","ايجاد شبكه آبرساني","ساختمانی","قريه فرجائي","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("269","نل كشي آب آشاميدني صحي","ساختمانی","رباط سنگي ،ابولخنيفه شرقي و غربي","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("270","نل كشي آب آشاميدني صحي","ساختمانی","جعفربيك  ","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("271","نل کشی اب اشامیدنی صحی","ساختمانی","گندمنه","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("272","نل کشی اب اشامیدنی صحی","ساختمانی","کلاته قاضی ","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("273","نل کشی اب اشامیدنی صحی","ساختمانی","میاندیجو","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("274","نل کشی اب اشامیدنی صحی","ساختمانی","ننگ ابد","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("275","نل کشی اب اشامیدنی صحی","ساختمانی","گزه ","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("276","نل کشی اب اشامیدنی صحی","ساختمانی","عنجان","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("277","نل كشي چشمه هاي آب ","ساختمانی","قريجات شرق ولسوالي","","","no","","","","2","","200000","","41","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("278","اعمار تعمیر ریاست شرکت آبرسانی و نل کشی داخل بازار","ساختمانی","مرکز ولسوالی ","","","no","","","","2","","50000","","41","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("279","اعمار پل کوکلند","ساختمانی","مرکز ولسوالی","","","yes","9 ماه","","","1","","300000","","36","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("280","اسفالت و اعمار  سرک ولسوای کشک کهنه بطول 51کیلومتر","ساختمانی","","","","yes","یکسال","50000نفر","80000نفر","2","","15300000","","36","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("281","زیرسازی و اسفالت اندازی سرک ولسوای گلران بطول 50کیلومتر","ساختمانی","","","","yes","یکسال","50000نفر","100000نفر","2","","15000000","","36","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("282","اعمار پل روی دریای هریرود ","ساختمانی","مورغچه ","","","no","","","","2","","1000000","","36","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("283","اسفالت سرک هرات الی ولسوالی فارسی بطول 110کیلومتر","ساختمانی","","","","yes","یکسال","","","2","","27500000","","36","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("284","اسفالت سرک جغاره یک کیلومتر","ساختمانی","جغاریه","","","yes","3ماه","","","2","","200000","","36","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("285","اعمار سرک اسفرز الی احه دای ولسوالی تولک به طول 30 کیلومتر","ساختمانی","","","","yes","یک سال","","","2","","200000","","36","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("286","در رابطه به اعمار پل بلالی دریای گز درسکن","ساختمانی","زرادلوگک وهمجوار","","","no","","","","2","","100000","","36","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("287","اعمار پل روی دریای چشت ","ساختمانی","توت فخرالدین","","","no","","","","2","","80000","","36","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("288","اعمار واسفالت سرک ( اسلام قلعه رباط پریان الی سرک تورغندی خوشرود) به طول 20 کیلو متر ","ساختمانی","","","","no","","","","2","","8000000","","36","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("289","اعمار پل مواصلاتی کرخ(60متر)","ساختمانی","دهن غار","","","no","","100000","5000","2","","100000","","36","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("290","اعمار یک پل ","ساختمانی","قریه دهن آب ","","","no","","500","5000","2","","50000","","36","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("291","اعمار یک پایه بل","ساختمانی","دوآب","","","no","","50000","10000","1","","300000","","36","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("292","اسفالت سرک 95 کیلومتر","ساختمانی","عزیز آّباد شیندند الی مرکز فارسی","","","no","","","","2","","30000000","","36","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("293","قير ريزي سكرك بطول تقريبي 25 كيلومتر","ساختمانی","زاول الي ولسوالي","","","no","","","","2","","2000000","","36","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("294","اسفالت سرك به طول 20 كيلومتر","ساختمانی","مرکز ولسوالی","","","no","","","","2","","3000000","","36","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("295","اسفالت داخل بازار","ساختمانی","مرکز ولسوالی","","","no","","","","2","","200000","","36","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("296","اسفالت نمودن سرك اوبه الي هرات","ساختمانی","","","","no","","","","2","","50000000","","36","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("297","ساختمان سب استیشن 220/20 کیلو ول به ظرفیت80 میگاولت امپیر","ساختمانی","","","","yes","یکسال","400000","مردم هرات","2","","5000000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("298","ایجاد لابراتوار تست لوازم برقی و میتر های برق","ساختمانی","ریاست برشنا","","","yes","9 ماه","مردم هرات","مردم هرات","2","","20000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("299","ساختمان تعمیر اداری حوزه برق هرات در سال 1388 به حجم 50 %","ساختمانی","ریاست برشنا","","","yes","یکسال","مردم هرات","مردم هرات","2","","1000000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("300","ساختمان تعمیر اداری آمریت برق","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","مردم ولسوالی","مردم هرات","2","","70000","","40","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("301","ساختمان تعمیر اداری آمریت برق","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","مردم ولسوالی","مردم هرات","2","","70000","","40","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("302","ساختمان تعمیر اداری آمریت برق اسلام قلعه","ساختمانی","اسلام قلعه","","","yes","شش ماه","مردم ولسوالی","مردم هرات","2","","70000","","40","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("303","ساختمان تعمیر اداری آمریت برق ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","مردم ولسوالی","مردم هرات","2","","70000","","40","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("304","ساختمان سب استیشن 11/20کیلوولت به ظرفیت 30میگاولت آمپیر","ساختمانی","مرکز ولسوالی","","","yes","یکسال","مردم ولسوالی","مردم هرات","2","","2500000","","40","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("305","اعمار 65 پایه تاوری لین ترکمنستان","ساختمانی","","","","no","","","","2","","","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("306","ساختمان سب استیشن 220/110/20 کیلو ول به ظرفیت80* 2میگاولت امپیر","ساختمانی","","","","yes","یکسال","400000","مردم هرات","2","","8000000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("307","ایجاد لابراتوار تست لوازم برقی و میتر های برق","ساختمانی","ریاست برشنا","","","yes","9 ماه","مردم هرات","مردم هرات","2","","20000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("308","ساختمان تعمیر اداری حوزه برق هرات در سال 1392 به حجم 50 %","ساختمانی","ریاست برشنا","","","yes","یکسال","مردم هرات","مردم هرات","2","","1000000","","40","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("309","ساختمان تعمیر اداری آمریت برق انجیل","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","مردم ولسوالی","مردم هرات","2","","200000","","40","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("310","ساختمان تعمیر اداری آمریت برق زنده جان","ساختمانی","مرکز ولسوالی","","","no","شش ماه","مردم ولسوالی","مردم هرات","2","","100000","","40","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("311","ساختمان تعمیر اداری آمریت برق کهسان","ساختمانی","اسلام قلعه","","","no","شش ماه","مردم ولسوالی","مردم هرات","2","","60000","","40","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("312","ساختمان تعمیر اداری آمریت برق رباط
سنگی","ساختمانی","مرکز ولسوالی","","","no","شش ماه","مردم ولسوالی","مردم هرات","2","","60000","","40","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("313","ساختمان سب استیشن 110/20کیلوولت
 به ظرفیت 10میگاولت آمپیر","ساختمانی","مرکز ولسوالی","","","yes","یکسال","مردم ولسوالی","مردم هرات","2","","3000000","","40","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("314","ایجاد سب استیشن 110/20 کیلوولت به ظرفیت 10 میگاورت","ساختمانی","مرکز ولسوالی","","","yes","یکسال","مردم ولسوالی","","2","","3000000","","40","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("315","ایجاد سب استیشن 110/20 کیلوولت به ظرفیت 10 میگاورت","ساختمانی","مرکز ولسوالی","","","yes","یکسال","مردم ولسوالی","","2","","3000000","","40","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("316","اعمار تعمیر اداری ","ساختمانی","ناحیه اول","","","yes","8 ماه","کارمندان ","","2","","200000","","45","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("317","مکتب 8 صنفی","ساختمانی","خوگیانی","","","yes","شش ماه","546","2736","1","","200000","","46","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("318","اعمار مکتب 8 صنفی ","ساختمانی","کمرزرد","","","no","","","","1","","160000","","46","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("319","مکتب 30 صنفی","ساختمانی","ناحیه اول","","","yes","شش ماه","7032","35160","2","","550000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("320","مکتب 8 صنفی","ساختمانی","خوارزار","","","yes","شش ماه","495","2475","1","","200000","","46","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("321","مکتب 12 صنفی ","ساختمانی","جوی نو","","","yes","شش ماه","190","950","1","","260000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("322","اعمار مکتب 16 صنفی نسوان","ساختمانی","قدوس آباد","","","yes","شش ماه","3950","19750","1","","280000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("323","اعمار مکتب 6 صنفی زینب","ساختمانی","سرکالا","","","yes","شش ماه","120","600","2","","120000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("324","اعمار مکتب 8 صنفی ","ساختمانی","جایه","","","yes","شش ماه","331","1655","1","","200000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("325","اعمار مکتب 8 صنفی ابوریحان بیرونی","ساختمانی","گرازان","","","yes","شش ماه","141","705","1","","200000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("326","اعمار مکتب 8 صنفی امیر حسین","ساختمانی","ملادان","","","yes","شش ماه","565","2845","1","","200000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("327","اعمار مکتب 8 صنفی خاتم الانبیا","ساختمانی","خاتم الانبیا","","","yes","شش ماه","299","1495","1","","200000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("328","اعمار مکتب 8 صنفی ابو لیث","ساختمانی","خنجک منه","","","yes","شش ماه","795","3975","1","","200000","","46","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("329","اعمار مدرسه دینی12 صنفی سید قلندرشاه ","ساختمانی","مرکز ولسوالی","","","yes","شش ماه","101","505","1","","240000","","46","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("330","اعمار مکتب 8 صنفی دوپشته","ساختمانی","دو پشته","","","yes","شش ماه","239","1195","1","","200000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("331","اعمار مکتب 8 صنفی نسوان بی بی پارسا","ساختمانی","استونان","","","yes","شش ماه","393","1965","1","","200000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("332","اعمار متب 8 صنفی نسوان نور","ساختمانی","روزنک","","","yes","شش ماه","413","2065","1","","200000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("333","اعمار مکتب 8 صنفی ","ساختمانی","رباط ادهم","","","yes","شش ماه","324","1620","1","","200000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("334","اعمار مکتب ه8 صنفی","ساختمانی","ده شیخ","","","yes","شش ماه","324","1620","1","","200000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("335","اعمار مکتب 8 صنفی","ساختمانی","بوریا باف","","","yes","شش ماه","569","2845","1","","200000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("336","اعمار مکتب 8 صنفی","ساختمانی","خواجه سبز پوش","","","yes","شش ماه","299","1495","1","","200000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("337","اعمار مکتب 8 صنفی","ساختمانی","چپ قل","","","yes","شش ماه","386","1930","1","","200000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("338","اعمار مکتب 10 صنفی الحاقیه نسوان اسفرزه","ساختمانی","اسفرزه","","","yes","شش ماه","601","3005","1","","220000","","46","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("339","اعمار مکتب 8 صنفی دو اب","ساختمانی","دوآب","","","yes","شش ماه","615","375","1","","200000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("340","اعمار مکتب 6 صنفی","ساختمانی","ده خار","","","yes","شش ماه","102","510","1","","120000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("341","اعمار مکتب 8 صنفی","ساختمانی","هومیش","","","yes","شش ماه","138","690","1","","200000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("342","اعمار مکتب 10 صنفی  ","ساختمانی","شیخ کمان","","","yes","شش ماه","102","510","1","","220000","","46","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("343","اعمار مکتب 8 صنفی","ساختمانی","کالسگ","","","yes","شش ماه","538","2690","1","","200000","","46","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("344","اعمار تعمیر 50 اتاقه ریاست ریاست معارف","ساختمانی","ریاست ریاست معارف","","","yes","نه ماه","","","1","","350000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("345","اعمار تعمیر دو طبقه کتابخانه ریاست ریاست معارف","ساختمانی","ریاست ریاست معارف","","","yes","نه ماه","","","1","","260000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("346","اعمار مكتب 12 صنفي گناه آباد","ساختمانی","گنا ه اباد","","","no","","","","1","","250000","","46","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("347","اعمار مكتب 16 صنفي ابوالوليد","ساختمانی","ابولوليد","","","no","","","","1","","280000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("348","اعمار مكتب 10 صنفي رباط ميرزا","ساختمانی","رباط ميرزا","","","no","","","","1","","220000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("349","اعمار مکتب 12 صنفی حضرت علی","ساختمانی","سبول","","","no","","","","1","","250000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("350","لیسه اناث باباجی","ساختمانی","ناحیه 9","","","yes","10ماه","2521","","2","","270000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("351","لیسه بابا زنگی عطاء","ساختمانی","ناحیه 9","","","yes","10ماه","1986","","2","","380000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("352","متوسطه خواجه سربر","ساختمانی","خواجه سربر","","","yes","10ماه","101","","2","","240000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("353","ابتدائی آب جلیل","ساختمانی","آب جلیل","","","yes","10ماه","279","","2","","240000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("354","متوسطه دستگرد","ساختمانی","دستگرد","","","yes","8ماه","318","","2","","210000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("355","مدرسه علوم دینی حضرت یاسر","ساختمانی","سیوشان","","","yes","10ماه","595","","2","","200000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("356","متوسطه ترک آباد","ساختمانی","ترکآباد","","","yes","10","577","","2","","270000","","46","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("357","متوسطه ناب","ساختمانی","ناب","","","yes","8ماه","704","","2","","250000","","46","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("358","متوسطه ارویچ مختلط","ساختمانی","ارویچ","","","yes","8ماه","500","","2","","200000","","46","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("359","خواجه برهنه","ساختمانی","خواجه برهنه","","","yes","8ماه","418","","2","","200000","","46","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("360","متوسطه ذکور معلومه","ساختمانی","معلومه","","","yes","10ماه","512","","2","","240000","","46","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("361","لیسه میرزابهار","ساختمانی","میرزابهار","","","yes","9ماه","385","","2","","220000","","46","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("362","متوسطه لرسرخ","ساختمانی","لرسرخ ","","","yes","9ماه","626","","2","","220000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("363","متوسطه دره جبال","ساختمانی","قیجان","","","yes","8ماه","481","","2","","210000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("364","متوسطه آب گذشت","ساختمانی","آب گذشت","","","yes","8ماه","418","","2","","210000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("365","متوسطه خواجه گلبید","ساختمانی","خواجه گلبید","","","yes","8ماه","309","","2","","200000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("366","متوسطه خواجه تلخان","ساختمانی","خواجه تلخان","","","yes","8ماه","442","","2","","200000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("367","ابتدائیه آب باریک","ساختمانی","آب باریک","","","yes","8ماه","291","","2","","200000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("368","متوسطه سر تخت","ساختمانی","سرتخت","","","yes","8ماه","295","","2","","210000","","46","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("369","لیسه داشک","ساختمانی","داشک","","","yes","8ماه","808","","2","","210000","","46","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("370","لیسه آسیادیو","ساختمانی","آسادیو","","","yes","8","706","","2","","210000","","46","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("371","متوسطه غزل اسلام","ساختمانی","غزل اسلام","","","yes","10ماه","477","","2","","200000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("372","ابتدائیه خم ملک","ساختمانی","خم ملک","","","yes","9ماه","182","","2","","220000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("373","ابتدائیه تیرپل","ساختمانی","تیرپل","","","yes","8ماه","249","","2","","180000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("374","مدرسه علوم دینی مرکز","ساختمانی","مرکززندهجان","","","yes","10ماه","182","","2","","220000","","46","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("375","ابتدائیه ذکور چهار باغ","ساختمانی","چهارباغ","","","yes","8ماه","328","","2","","190000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("376","ابتدائیه کوثر","ساختمانی","خواجه کوثر","","","yes","8ماه","133","","2","","190000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("377","متوسطه چاه جت","ساختمانی","شوره","","","yes","8ماه","561","","2","","200000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("378","متوسطه جهان خان","ساختمانی","چهان خان","","","yes","8ماه","898","","2","","200000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("379","متوسطه غلام کشته","ساختمانی","غلام کشته","","","yes","8ماه","200","","2","","200000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("380","متوسطه خیفان","ساختمانی","خیفان","","","yes","8ماه","1170","","2","","200000","","46","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("381","ابتدائیه غودالان","ساختمانی","غودالان","","","yes","8ماه","290","","2","","200000","","46","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("382","ابتدائیه جاک مختلط","ساختمانی","جاک","","","yes","8ماه","276","","2","","200000","","46","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("383","لیسه ذکور مرکز","ساختمانی","تحت مرکز","","","yes","10ماه","409","","2","","270000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("384","لیسه ذکور مرکز دوآب","ساختمانی","کشک","","","yes","10ماه","214","","2","","270000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("385","متوسطه پاحصار","ساختمانی","پای حصار","","","yes","8ماه","312","","2","","220000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("386","ابتدائیه لنگر مختلط","ساختمانی","لنگر","","","yes","8ماه","160","","2","","200000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("387","ابتدایئه سفیدان مختلط","ساختمانی","سفیدان","","","yes","8ماه","536","","2","","200000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("388","اعمار مکتب 8 صنفی سلیمان","ساختمانی","سلیمان","","","no","6ماه","","","1","","180000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("389","اعمار مکتب 8 صنفی ","ساختمانی","غوریا ","","","no","","","","2","","180000","","46","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("390","اعمار مکتب 8 صنفی ","ساختمانی","","","","no","","","","2","","180000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("391","اعمار مکتب 8 صنفی ","ساختمانی","","","","no","","","","2","","180000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("392","اعمار تعمیر 12 صنفی تورغندی","ساختمانی","تورغندی","","","yes","8ماه","2486","","2","","180000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("393","اعمار دیوار احاطه مکتب صالح آباد غرب سرک","ساختمانی","صالح اباد غرب سرک","","","yes","3ماه","","","2","","240000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("394","اعمار دیوار احاطه مکتب صالح آباد شرق سرک","ساختمانی","نیسان","","","no","","","","2","","240000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("395","اعمار تعمیر برای مدرسه جامع شریف ","ساختمانی","","","","no","","","","2","","200000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("396","اعمار کتابخانه دارالعلوم غیاثیه ","ساختمانی","دارالعلوم غیاثیه","","","no","","","","1","","180000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("397","اعمار مکتب ","ساختمانی","وحدت","","","no","","","","2","","200000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("398","دیوار احاطه مکتب اناث کورت سفلی","ساختمانی","کورت سفلی","","","no","","","","1","","180000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("399","اعمار مکتب نسوان هاشمی ","ساختمانی","","","","no","","","","2","","160000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("400","اعمار یک باب تعمیر برای مکتب داشخانه","ساختمانی","داشخانه","","","no","","","","2","","180000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("401","اعمار مکتب خلفتی","ساختمانی","قریه خلفتی","","","no","","","","1","","180000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("402","اعمار تعمیر برای تربیه معلم  غوریان","ساختمانی","غوریان","","","no","","","","2","","150000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("403","ساختمان 6 صنفی فرعی (در لیسه امیر علی شیر نوایی)","ساختمانی","مرکز شهر","","","no","","","","2","","160000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("404","اعمار تعمیرمکتب سنگ سیاه (12صنفه)","ساختمانی","سنگ سیاه","","","no","","500","1000","2","","240000","","46","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("405","اعمار تعمیر دارالمعلمین(12صنفه)","ساختمانی","شهرک تورغندی","","","no","","750","2000","2","","240000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("406","اعمار مکتب نسوان مرکز","ساختمانی","دره تخت","","","no","","300","2000","2","","200000","","46","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("407","اعمار مدرسه دینی حضرت یاسر","ساختمانی","سیوشان","","","no","","400","600","2","","200000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("408","ایجاد و اعمار یک باب مکتب ابتدایی(یک باب هشت صنفی )","ساختمانی","محل عارفان و رباط ها ","","","no","","500","35000","2","","80000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("409","اعمار تعمیر مکتب متوسطه میر شمس الدین (12صنفه)","ساختمانی","کرشک","","","yes","","1800","2500","2","","140000","","46","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("410","اعمار مکتب ابتدایی (12صنفه)","ساختمانی","نهرآب ","","","yes","","2000","9000","2","","140000","","46","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("411","اعمار تعمیر لیسه بی بی پارسا (16صنفی )","ساختمانی","استانون","","","no","","1200","1200","2","","160000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("412","اعمار تعمیر 16صنفی علوم دینی بامع لیلیه ","ساختمانی","مرکز کهسان ","","","no","","750","2000","2","","160000","","46","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("413","اعمار تعمیر مدریت ریاست معارف","ساختمانی","مرکز ولسوالی","","","yes","","351","16050","2","","50000","","46","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("414","اعمار تعمیر مکتب قریه گوشک (12صنفه)","ساختمانی","قریه گوشک","","","no","","750","750","2","","140000","","46","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("415","اعمار تعمیر 12 اتاقه مدیریت ریاست معارف ","ساختمانی","مرکز ولسوالی","","","yes","","475","18000","2","","140000","","46","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("416","اعمار یک باب لیسه (12صنفه)","ساختمانی","کوکلم","","","yes","","5000","2000","2","","140000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("417","اعمار یک باب مکتب متوسطه (نه صنفه )","ساختمانی","تخت میرزا ","","","yes","","1000","500","2","","80000","","46","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("418","اعمار تعمیر لیسه پایحصار(12اتاقه)","ساختمانی","بایحصار","","","yes","","500","1200","2","","140000","","46","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("419","اعمار احاطه مكتب متوسطه","ساختمانی","زرشك","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("420","اعمار احاطه مكتب  ","ساختمانی","فرك","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("421","اعمار احاطه مكتب ","ساختمانی","نوين سفلي","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("422","اعمار احاطهليسه نسوان امام شش نور","ساختمانی","امام شش نور","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("423","اعمار احاطه مكتب","ساختمانی","شبيران","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("424","اعمار احاطه مكتب","ساختمانی","اردوخان","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("425","ترميم اساسي مكتب و ديوار احاطوي","ساختمانی","گوشمير","","","no","","","","2","","50000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("426","اعمار ديوار احاطوي","ساختمانی","مكتب قلعه بختيار","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("427","اعمار اساسي ديوار احاطوي","ساختمانی","مكتب ابتدائيه طقجي","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("428","اعمار ديوار احاطوي مكتب نسوان","ساختمانی","كورت آقاخان","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("429","اعمار ديوار احاطوي","ساختمانی","كرت شالي خانه","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("430","اعمار ديوار احاطوي","ساختمانی","قريه رباط سفچه","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("431","اعمار ديوار احاطوي مكتب نسوان","ساختمانی","كورت آقاخان","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("432","اعمار ديوار احاطوي","ساختمانی","چه و قچنك","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("433","اعمار ديوار احاطوي","ساختمانی","شمس آباد","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("434","اعمار ديوار احاطوي","ساختمانی","پشت كوه ملاياسين","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("435","اعمار ديوار احاطوي","ساختمانی","خواجه شهاب الدين","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("436","اعمار ديوار احاطوي وايزوگام مكتب","ساختمانی","زنگان","","","no","","","","2","","40000","","46","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("437","اعمار ديوار مكتب بطول 800 متر","ساختمانی","دوآب سفلي","","","no","","","","2","","50000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("438","اعمار ديوار مكتب بطول 800 متر","ساختمانی","چيغل، ","","","no","","","","2","","50000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("439","اعمار ديوار مكتب بطول 800 متر","ساختمانی","خليفه رحمت ","","","no","","","","2","","50000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("440","اعمار احاطه مکتب8صنفی","ساختمانی","دهگرگان  ","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("441","اعمار احاطه مکتب8صنفی","ساختمانی","استانون","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("442","اعمار ديوار مكتب بطول 800 متر","ساختمانی","خليفه رحمت ","","","no","","","","2","","50000","","46","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("443","اعمار کتابخانه ","ساختمانی","مرکز ولسوالی","","","yes","یک سال","","","2","","1500000","","","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("444","اعمار دیوار های اطراف مصلی هرات","ترمیماتی","ناحیه9","","مخروبه","yes","","","","2","","60000","","","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("445","اعمار خانقاه بابا حسین ابدال ترک","ترمیماتی","ناحیه 5","","مخروبه","yes","","","","2","","45000","","","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("446","اعمار آرامگاه سیدعبدالله مختار(رح)","ترمیماتی","ناحیه9","","درحال تخریب","yes","","","","2","","46000","","","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("447","اعمار خانقاه قادریه شریف سیاوشان","ترمیماتی","سیاوشان","","درحال تخریب","yes","","","","2","","30000","","","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("448","اعمار ارامگاه امام فخر الدین رازی(رح)","ترمیماتی","ناحیه9","","درحال تخریب","yes","","","","2","","40000","","","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("449","اعمار خانقاه و مسجد خواجه محمد کنجان(رح)","ترمیماتی","سیوشان","","درحال تخریب","yes","","","","2","","40000","","","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("450","اعمار آرامگاه خواجه محمد قاضی","ترمیماتی","قلعه نو","","درحال تخریب","yes","","","","2","","70000","","","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("451","اعمال پل تاریخی تیرپل","ترمیماتی","تیرپل","","درحال تخریب","yes","","","","2","","130000","","","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("452","مسجد جامع شیخ الاسلام کرخ","ترمیماتی","مرکزولسوالی","","درحال تخریب","yes","","","","2","","74000","","50","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("453","اعمار مسجد جامع زیارتجاه","ترمیماتی","زیارتجاه","","درحال تخریب","yes","","","","2","","180000","","50","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("454","اعمار کامپلکس زیارت چشت شریف ","ترمیماتی","","","","no","","","","1","","500000","","50","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("455","اعمار کتابخانه الکترونیکی ","ساختمانی","اطلاعات وفرهنگ","","","no","","","","2","","","","50","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("456","اعمار یک باب جمنازیوم","ساختمانی","","","","yes","شش ماه","","","1","","250000","","51","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("457","تبدیل چمن طبیعی به چمن مصنوعی استدیوم ورزشی هرات","ساختمانی","","","","yes","سه ماه","","","1","","100000","","51","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("458","اعمار یک باب تعمیر اداری","ساختمانی","","","","yes","پنج ماه","","","1","","120000","","51","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("459","اعمار جمنازیم ورزشی برای بخش اناث","ساختمانی","","","","yes","شش ماه","","","2","","500000","","51","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("460","اعمار استدیوم ورزشی","ساختمانی","شهرک صنعتی","","","no","","","","1","","800000","","51","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("461","اعمار فرش جیمنازیوم","ساختمانی","","","","no","","","","1","","52000","","51","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("462","اعمار مسجد شریف  واقع در کمپلکس ریاست پوهنتون (تحصیلات عالی) هرات ","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","تمام محصلان","تمام محصلان","2","","350000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("463","تکمیل تعمیر نمیه تمام کودکستان واقع کامپلکس جدید ریاست پوهنتون (تحصیلات عالی)","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","400000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("464","اعمار تعمیر لیله ذکور واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی)","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","1500000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("465","اعمار تعمر تدریسی پوهنحی حکومتداری واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی) هرات","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","3000000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("466","اعمار تعمیر تدریسی پوهنحی ساینس واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی) هرات","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","3000000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("467","اعمار تعمیر کتابخانه مرکزی ریاست پوهنتون (تحصیلات عالی) واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی)","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","1000000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("468","اعمارتعمیر مرکز تحقیقات علمی ریاست پوهنتون (تحصیلات عالی) واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی) ","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","1500000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("469","اعمار جمنازیم ورزشی واقع کامپس جدید ریاست پوهنتون (تحصیلات عالی) هرات","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","1500000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("470","اعمار تعمیر شفاخانه کدری برای پوهنحی طب در زمین مربوطه واقع غرب سرک گازرگاه","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","1","","3000000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("471","ساختن زمین فوتبال و تجهیزات مربوطه آن مطابق ماستر پلان ریاست پوهنتون (تحصیلات عالی)","ساختمانی","کامپلکس ریاست پوهنتون (تحصیلات عالی)","","","yes","یک سال","","تمام محصلان","2","","1000000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("472","اعمار یک تعمیر کتابخانه برای پوهنحی تعلیم تربیه  به وسعت 500متر مربع","ساختمانی","","","","no","","","","1","","200000","","48","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("473","اعمار تعمیر کتابخانه تربیه معلم","ساختمانی","","","","no","","","","1","","20000","","47","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("474","اعمار تعمیر برای لابراتوار","ساختمانی","ناحیه8","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("475","اعمار جمنازیوم","ساختمانی","ناحیه8","","","no","","","","2","","200000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("476","اعمار ادیتوریم","ساختمانی","ناحیه8","","","no","","","","2","","200000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("477","اعمار کودکستان","ساختمانی","ناحیه8","","","no","","","","2","","30000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("478","جدول  کشی و سرک کشی  صحن  تربیه معلم","ساختمانی","ناحیه8","","","no","","","","2","","10000","","46","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("479","اعمار لیلیه تربیه معلم","ساختمانی","","","","no","","","","2","","140000","","46","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("480","اعمار تعمیر 12اتاقه دار المعلمین شهرک تورغندی","ساختمانی","شهرک تورغندی ","","","no","","200","50000","2","","140000","","46","","10%اهدای زمین","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("481","اعمار تالار 200 نفری برای برگزاری محافل","ساختمانی","ناحیه8","","","yes","یک سال","","","2","","300000","","49","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("482","تعمیر لابراتوار کنترول کیفیت مواد غذایی و ادویه","ساختمانی","صحت عامه","","","yes","شش ماه","ولایت هرات","حوزه غرب","1","","120000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("483","توسعه و تجهیز تعمیر انستیتوت علوم صحی هرات","ساختمانی","شفاخانه حوزوی","","","yes","دوازده ماه","ولایت هرات","حوزه غرب","2","","300000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("484","اعمار تعمیر بخش ایزولیشن","ساختمانی","شیدائی","","","yes","شش ماه","ولایت هرات","حوزه غرب","1","","200000","","53","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("485","تعیمر دیوار احاطوی طوطیچی","ساختمانی","طوسیپی","","","yes","4 ماه","20000","30000","1","","12000","","53","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("486","تعمیر دیوار احاطوی هفت چاه","ساختمانی","هفت چاه","","","yes","4ماه","20000","30000","1","","12000","","53","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("487","تعمیر دیوار احاطوی مرکز صحی چاهریگ","ساختمانی","چاه ریگ","","","yes","4ماه","20000","30000","1","","12000","","53","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("488","اعمار احاطه مرکز صحی سبول","ساختمانی","سبول","","","yes","4ماه","20000","30000","1","","12000","","53","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("489","اعمار احاطه مرکز صحی شیرزاد","ساختمانی","شیرزاد","","","yes","4ماه","20000","30000","1","","12000","","53","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("490","اعمار شفاخانه ولسوالی غوریان","ساختمانی","مرکز ولسوالی","","","yes","18ماه","","","2","","1000000","","53","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("491","اعمار کلینیک جامع بابای برق","ساختمانی","ناحیه7","","","yes","شش ماه","45000","60000","1","","120000","","53","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("492","اعمار مرکز آموزشی صحت عامه","ساختمانی","ناحیه6","","","yes","شش ماه","کارمندان ","ولایت","2","","100000","","53","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("493","اعمار تعمیر اساسی کلینیک سنگ کوتل","ساختمانی","سنگ کوتل","","","yes","شش ماه","5000","15000","2","","80000","","53","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("494","اعمار تعمیر جامع برای کلینیک منارها","ساختمانی","ناحیه5","","","yes","شش ماه","40000","60000","1","","120000","","53","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("495","اعمار تعمیر اساسی کیلینیک پهره","ساختمانی","پهره","","","yes","شش ماه","15000","30000","2","","80000","","53","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("496","اعمار تعمیر اساسی کینیک نقره","ساختمانی","نقره","","","yes","شش ماه","15000","30000","2","","80000","","53","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("497","اعمار تعمیر کلینیک جامع بابای برق (CHC)","ساختمانی","ناحیه هفتم ","","","yes","شش ماه","45000","60000","2","","143000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("498","اعمار مرکز صحی (BHC)","ساختمانی","کاریز پده","","","yes","شش ماه","10000","20000","1","","117000","","53","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("499","اعمار مرکز صحی جامع منارها (CHC)","ساختمانی","ناحیه پنجم","","","no","","40000","60000","2","","143000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("500","اعمار تعمیر اساسی کلینیک پهره","ساختمانی","پهره","","","no","شش ماه","15000","30000","1","","117000","","53","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("501","اعمار کلینیک ","ساختمانی","وحدت","","","no","","","","2","","100000","","53","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("502","اسفالت سرک انستیتوت علوم صحی داخل شفاخانه(به طول 4.6متر وعرض8.5متر)","ساختمانی","","","","no","","","","1","","50000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("503","اعمار تعمیر کلینیک جامع شکیبان","ساختمانی","قریه شکیبان ","","","no","شش ماه","","","1","","120000","","53","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("504","اعمار تعمیر اساسی کلینیک اجریم ها ","ساختمانی","اجریم ها","","","no","شش ماه","","","1","","80000","","53","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("505","اعمار کلینیک اساسی کله  چغر","ساختمانی","گله چغر","","","no","شش ماه","","","1","","80000","","53","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("506","اعمار مرکز رهایشی کلینیک جامع فارسی","ساختمانی","مرکز ولسوالی","","","no","شش ماه","","","1","","70000","","53","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("507","اعمار شفاخانه 50 بستر معتادین","ساختمانی","","","","no","شش ماه","","","1","","140000","","53","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("508","اعمار یک باب کلینیک BHC","ساختمانی","جنوا","","","yes","","2000","13000","2","","100000","","53","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("509","تعمیر کلینیک BHC","ساختمانی","سنگ کوتل ","","","yes","","3000","1500","2","","100000","","53","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("510","اعمار یک باب کلینیک فرعی ","ساختمانی","قریه مرغه ","","","yes","","2000","8000","2","","60000","","53","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("511","اعمار تعمیر و ارتقأ شفاخانه از 50بستر به 100بستر","ساختمانی","مرکز ولسوالی ","","","yes","","324000","428000","2","","60000","","53","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("512","ارتقأ کلینک CHC به شفاخانه 50 بستر","ساختمانی","اسلام قلعه ","","","yes","","150000","160000","2","","80000","","53","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("513","اعمار یک باب کلنیکBHC","ساختمانی","قریه خواجه قلندر(ع)","","","yes","","10000","5000","2","","60000","","53","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("514","اعمار وایجاد کلینک ","ساختمانی","واخل سید ","","","yes","","21000","30000","2","","80000","","53","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("515","تعمیر لابرتوار خاکشناسی","ساختمانی","اردوخان","","","no","یک سال","","","2","","240000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("516","اعمار بند آب گردان ","ساختمانی","تگاب ","","","no","18ماه","1500فامیل","30000فامیل","2","","500000","","54","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("517","ایجاد مغازه های استهلاکی به کوپراتیف","ساختمانی","150قریه","","","no","6ماه","4500نفر","15000نفر","2","","90000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("518","اعمار گدام","ساختمانی","مرکز ولسوالیها","","","no","یکسال","3750نفر","4500نفر","2","","1500000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("519","توزیع قطعات نمایشی زعفران به کوپراتیف شامل کود کیمیاوی برای کوپراتیف های 10 ولسوالی 400قطعه","انکشافی","","","","no","شش ماه","400نفر","4000نفر","2","","280000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("520","اعمار یک باب تعمیر اداری مع صالون کانفرانس","ساختمانی","","","","no","شش ماه","پرسونل مدیریت","تمام کوپراتیف","2","","100000","","54","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("521","اعمار  احاطه فارم تحقیقات","ساختمانی","اردوخان","","","no","2سال","تمام دهاقین","تمام دهاقین","2","","300000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("522"," اعمار یک باب تعمیر ","ساختمانی","اردوخان","","","no","یکسال","پرسونل فارم","دهاقین","2","","400000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("523","پخته کاری جوی های عمومی فارم","ساختمانی","اردوخان","","","no","یکسال","اداره زراعت ","دهاقین","2","","500000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("524","اعمار ورکشاپ ثابت مدرن با تجهیزات عصری","خدماتی","","","","no","یکسال","اداره زراعت ","دهاقین","2","","150000","","54","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("525","لابراتوار بیولوژیآفات نباتی","ساختمانی","","","","no","شش ماه","باغدارن ","مردم هرات","2","","125000","","54","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("526","کمپاین ادویه پاشی زمستانی برای تاک","خدماتی","","","","no","دوماه","باغدارن ","مردم هرات","2","","500000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("527","فومگشن  هوز مرکزی","ساختمانی","","","","no","شش ماه","تجار صادر کننده محصولات زراعتی","مردم هرات","2","","240000","","54","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("528","اعمار تعمیر ترویج","ساختمانی","مرکز ولسوالی","","","no","هشت ماه","540نفر","دهاقین","2","","160000","","54","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("529","اعمار تعیمر ترویج","ساختمانی","مرکز ولسوالی","","","no","هشت ماه","540نفر","دهاقین","2","","160000","","54","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("530","اعمار تعمیر ترویج","ساختمانی","مرکز ولسوالی","","","no","هشت ماه","540نفر","دهاقین","2","","160000","","54","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("531","تعمیر اداری 30 اتاقه برای ریاست زراعت","ساختمانی","ناحیهسوم ","","","no","یکسال","اداره زراعت ","مراجعین","2","","800000","","54","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("532","تست بروسلوز در گاو های شیری فارمها","خدماتی","مرکز ولسوالی","","","no","یکسال","900نفر","80000نفر","2","","500000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("533","ایجاد فارم تحقیقات مالداری","مالداری","فارم اردوخان","","","no","دوامدار","1500نفر","12000نفر","2","","200000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("534","ایجاد دستگاه تولید نایتروجن دستگاه منجمد ساختن اسپرم","مالداری","استیشن القاح مصنوعی","","","no","دوامدار","30000تفر","100000نفر","2","","300000","","54","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("535","فینس گرفتن ساحه تپه ارغوان به وسعت 80 جریب","ساختمانی","ناحیه اول ","","","no","شش ماه","","","1","","100000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("536","مرکز ترنینگ ساحوی زراعتی ","","ناحیه اول تپه ارغوان","","","no","شش ماه","","","2","","250000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("537","شلتر واسایط","","ریاست زراعت","","","no","سه ماه","","","1","","50000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("538","اعمار چهار باب تحویل خانه استندرد ","ساختمانی","ریاست زراعت","","","no","شش ماه","","","2","","80000","","54","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("539","اعمار خانه پروسس زعفران ","ساختمانی","گلمیر","","","no","","","","2","","30000","","54","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("540","اعمار بند آب گردان (150 متر طول )","ساختمانی","زیارت بابای فرق","","","no","","2000","1000","2","","200000","","54","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("541","اعمار کلنیک حیوانی (یک باب) ","ساختمانی","چاه آبگری ","","","yes","","5000","1000","2","","20000","","54","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("542","ایجاد واعمار کلینک حیوانی و نباتی","ساختمانی","قریه شکیبان ","","","no","","86000","2000","2","","20000","","54","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("543","ایجاد و اعمار کلینک حیوانی و نباتی ","ساختمانی","سفیدان","","","yes","","25000","2000","2","","20000","","54","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("544","بازسازي تعمير اداري مديريت خدمات زراعتي","ساختمانی","مرکز ولسوالی","","","no","","","","2","","20000","","54","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("545","اعمار کلینیک حیوانی","ساختمانی","تیک","","","no","","","","2","","30000","","54","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("546","تعمیر 30 اتاقه اداری","ساختمانی","ریاست زراعت","","","no","","","","2","","200000","","54","","","","","","0","0","0","0","0","12","19","","plan");
INSERT INTO tblplan VALUES("547","اسفالت سرک سیوشان بطول 8کیلومتر به عرض 7 متر","ساختمانی","سیوشان","","","no","شش ماه","30000","40000","1","","2000000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("548","اسفالت سرک کبابیان2 کیلومتر","ساختمانی","کبابیان","","","no","سه ماه","باشنده گان ولسوالی","مردم هرات","1","","600000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("549","اعمار پل روی دریای هریرود","ساختمانی","مرغچه","","","yes","یک سال","باشنده گان ولسوالی","مردم هرات","2","","1500000","","55","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("550","اعمار پل بالای دریای کرخ","ساختمانی","مرکز ولسوالی،به سمت قریه جات جنوبی","","","yes","یک سال","باشنده گان ولسوالی","مردم هرات","2","","500000","","55","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("551","جغل اندازی 7 کیلومتر سرک با ساختمانهای مربوطه","ساختمانی","","","","no","یکسال","باشنده گان ولسوالی","مردم هرات","2","","160000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("552","ایجاد شبکه ریاست شرکت آبرسانی","ساختمانی","بدلو","","","no","6ماه","باشنده گان ولسوالی","مردم هرات","2","","120000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("553","اعمار سربند","ساختمانی","شورآب","","","no","6ماه","باشنده گان ولسوالی","مردم هرات","2","","150000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("554","ترمیم 5رشته کاریز","ساختمانی","چاه مجید و دوشاخ","","","no","6ماه","باشنده گان ولسوالی","مردم هرات","2","","100000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("555","جغل اندازی سرک ها","ساختمانی","قریه جات مختلف","","","no","1سال","باشنده گان ولسوالی","مردم هرات","2","","200000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("556","اعمار سربند ، پل و کاریز","ساختمانی","خوله مرغ و یکه توت","","","no","یکسال","باشنده گان ولسوالی","مردم هرات","2","","300000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("557","اعمار مرکز اجتماعی","ساختمانی","جلال آباد، انگاره، احمد آباد","","","no","یکسال","باشنده گان ولسوالی","مردم هرات","2","","60000","","55","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("558","ترمیم سرک","ساختمانی","مختلف","","","no","شش ماه","باشنده گان ولسوالی","مردم هرات","2","","85000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("559","ترمیم سرک قریجات اوغه،ماموری،قلعه نظام خان، چاه ساول","ساختمانی","مختلف","","","no","شش ماه","باشنده گان ولسوالی","مردم هرات","2","","90000","","55","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("560","ترمیم سرک","ساختمانی","مختلف","","","no","شش ماه","باشنده گان ولسوالی","مردم هرات","2","","70000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("561","ترمیم 40کیلومتر سرک وساخت ساختمان های سرک ولسوالی کشک کهنه الی ولسوالی کرخ ","ساختمانی","مختلف","","","no","8ماه","باشنده گان ولسوالی","مردم هرات","2","","150000","","55","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("562","تهیه تانکر بزرگ آب اشامیدنی","ریاست شرکت آبرسانی","شهرک شهدا","","","no","1ماه","باشنده گان شهرک","","1","","25000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("563","شبکه ریاست شرکت آبرسانی","ریاست شرکت آبرسانی","نوآباد","","","no","","","","2","","60000","","55","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("564","اعمار پلچک","ساختمانی","تاقچه","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("565","اعمار پلچک ها و جغله اندازی سرک","ساختمانی","کشکک","","","no","","","","2","","20000","","55","","م.خدمات سکتوری","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("566","شبکه ریاست شرکت آبرسانی","ساختمانی","وحدت","","","no","","","","2","","60000","","55","","م.خدمات سکتوری","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("567","جغل اندازی سرک های کشک کهنه","ساختمانی","مختلف","","","no","","","","2","","100000","","55","","م-ولسوالی ","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("568","حفر چاه عمیق","ساختمانی","مرکز ولسوالی","","","no","","","","2","","30000","","55","","م- ولسوالی","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("569","اعمار پل ","ساختمانی","دره تخت","","","no","","","","1","","60000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("570","اسفالت سرک 9 کیلو متر","ساختمانی","کلاته ها الی دهنه ذلفغار","","","no","","","","2","","1800000","","55","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("571","دیوار استنادی ","ساختمانی","درودی","","","no","","100فامیل","","2","","77009","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("572","شبکه ریاست شرکت آبرسانی","ساختمانی","رباط ویسی","","","no","","213فامیل","","2","","100817","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("573","پلچک و دیوار استنادی ","ساختمانی","نوین","","","no","","500فامیل","","2","","81900","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("574","دیوار استنادی ","ساختمانی","بگل","","","no","","25فامیل","","2","","117000","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("575","پل کانکریتی","ساختمانی","کارته ","","","no","","50000فامل","","2","","109035","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("576","دیوار محافظوی ","ساختمانی","آبستان 1","","","no","","1300فامیل","","2","","136847","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("577","بازسازی کاریز","ساختمانی","کاریز تپه","","","no","","500فامیل","","2","","64602","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("578","بازسازی کاریز","ساختمانی","کانال زنجیر","","","no","","350فامیل","","2","","54822","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("579","پل کانکریتی","ساختمانی","باغچه عبدالحکیم","","","no","","210فامیل","","2","","40358","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("580","جغل اندازی سرک","ساختمانی","دهن شاری","","","no","","","","2","","700000","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("581","500متر کانال و2 سیفون","ساختمانی","معلومه","","","no","","700فامیل","","2","","90348","","55","","در پروگرام SARD ثبت شده است","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("582","1330متر مربع ایزوگام بام های تعمیرات و لسوالی چشت شریف","ساختمانی","","","","no","","","","2","","15000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("583","اعمار دیوار اطراف ولسوالی کشک کهنه (300متر طول)","ساختمانی","مرکز ولسوالی","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("584","اسفالت جاده جنوب نساجی به طول 2/5کیلومتر","ساختمانی","جمعه خان،سیرگل،و خاتم النبیا","","","no","","","","2","","500000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("585","حفر دو حلقه چاه","ساختمانی","کوه بابا","","","no","","","","2","","40000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("586","حفر چاه عمیق","ساختمانی","","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("587","اسفالت 2 کیلومتر مرکز ولسوالی گلران ","ساختمانی","","","","no","","","","2","","400000","","55","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("588","اعمار پل روی دریای چشت شریف","ساختمانی","توت فخرالدین","","","no","","","","1","","50000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("589","اعمار پل بالای رود در منطقه  زرد الوگک","ساختمانی","زرد الوگک برغنک، خم زیارت ، اب باریک ","","","no","","","","2","","60000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("590","پخته کاری جوی کاریز ","ساختمانی","علاف حاجی نیاز ","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("591","پانزده تا پل و پلچک ","ساختمانی","","","","no","","","","2","","100000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("592","ترمیم و پاک کاری کاریز ها ی کهنه ، جمعه خان ، شور و دشت ","ساختمانی","جوار قریه سر کرو","","","no","","","","2","","100000","","55","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("593","یک کیلو متر سرک غیبتان","ساختمانی","از ختم اسفالت غیبتان الی تقاطع سرک پوران ملادان ","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("594","اسفالت سرک ملاسیان 1200متر","ساختمانی","ملاسیان","","","no","","","","2","","150000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("595","پاک کاری کاریز حاجی غلام و حاجی شیر علی ","","جوی قاضی","","","no","","","","2","","10000","","55","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("596","اعمار سرک از سروستان الی پل ساوه و تریاک(5کیلومتر)","ساختمانی","سروستان","","","no","","","","1","","750000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("597","اسفالت راه های مواصلاتی قریه جات(اردوغان، چهار برجک،تلاث، صفی آباد، بندآب،رباط سنوگرد، منزل خواجه ها، سرآسیاب، دانش آباد، قصر یحیی)(10کیلو متر)","ساختمانی","اردوغان، چهار برجک،تلاث، صفی آباد، بندآب،رباط سنوگرد، منزل خواجه ها، سرآسیاب، دانش آباد، قصر یحیی","","","no","","","","2","","1500000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("598","اسفالت سرک به طول (11 کیلو متر) ","ساختمانی","قریه جغتی الی مرکز اسلام قلعه ","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("599","اسفالت سرک ملدان رباط غلق، غیبتان(2.5کیلومتر)","ساختمانی","ملدان، رباط غلق،غیبتان","","","no","","","","2","","500000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("600","حفر چاه های عیمق آب آشامیدنی ","ساختمانی","شهرک صنعت قالین","","","no","","","","2","","60000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("601","اسفالت سرک های اصلی و فرعی (10کیلومتر)","ساختمانی","شهرک صنعت قالین","","","no","","","","2","","1000000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("602","اسفالت سرک سیوشان(2 کیلو متر)","ساختمانی","سیوشان","","","no","","","","2","","400000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("603","اسفالت سرک (2 کیلو متر)","ساختمانی","بهارستان","","","no","","","","2","","400000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("604","اسفالت سرک از قریه زمان اباد الی سر آسیاب  (به طول 10 کیلومتر)","ساختمانی","زمان آباد","","","no","","","","2","","1500000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("605","اسفالت و اعمار ساختمان سرک از شالبافان الی صالح آباد و جغر آباد(5کیلو متر)","ساختمانی","از شالبافان الی صالح آباد","","","no","","","","2","","750000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("606","اسفالت سرک از پل منار دار الی توه بریان (5 کیلومتر)","ساختمانی","از پل منار دار الی تو بریان","","","no","","","","2","","750000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("607","اسفالت و اعمار ساختمان سرک از قبول دراز الی رباط درویش میر حیدر(5کیلومتر)","ساختمانی","از قبول دراز الی رباط درویش","","","no","","","","2","","750000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("608","اسفالت واعمار سرک از هندوان الی ادران (5کیلو متر)","ساختمانی","از هندوان الی ادران","","","no","","","","2","","750000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("609","اسفالت و اعمار ساختمان سرک از حوض کرباس الی آب جلیل(جاده ابریشم )3 کیلومتر","ساختمانی","از حوض کرباس الی آب جلیل","","","no","","","","2","","450000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("610","اعمار سربند با سایر ساختمان های جوی تلاب(35متر فی بند)","ساختمانی","اول کوچه گلبافان","","","no","","20000","80000","2","","50000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("611","اعمار شبکه آب رسانی (3کیلومتر)","ساختمانی","بند بنفش ","","","no","","1600فامیل","500نفر","2","","60000","","55","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("612","اعمار پل بالای رود خانه (45متر طول)","ساختمانی","فضل آباد","","","no","","","","2","","100000","","55","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("613","اعمار پل بالای رود خانه (65متر طول)","ساختمانی","قره باغ مرکز ولسوالی ","","","no","","20000","50000","2","","120000","","55","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("614","اعمار بند ذخیره آب(20متر)","ساختمانی","قریه سیاه آب","","","no","","15000نفر","5000نفر","2","","30000","","55","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("615","اعمار پل مواصلاتی(40متر)","ساختمانی","میرزا بهار","","","no","","5000 نفر","1000 نفر","2","","100000","","55","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("616","اعمار سربند جوی با سایرضرویات آن(200متر)","ساختمانی","قریه اغواجه","","","no","","2000","5000","2","","100000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("617","اعمار سربند جوی با سایرضرویات آن(150متر)","ساختمانی","قریه تگاب غزه","","","no","","1500","5000","2","","700000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("618","ایجاد و اعمار پایپ اسکیم (3کیلو متر)","ساختمانی","قریه بیشه ","","","no","","1000","2000","2","","60000","","55","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("619","اعمار سربند جوی نی نواز (500متر)","ساختمانی","قریه کلاته قاضی ","","","no","","3000","5000","2","","200000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("620","اعمار سربند جوی شهر خلیل (250متر)","ساختمانی","دهن چهارده","","","no","","1000","500","2","","100000","","55","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("621","اعمار پل قنات وکیل(30 متر)","ساختمانی","قنات وکیل ","","","no","","100000","10000","2","","30000","","55","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("622","اعمار سربند دهن درزک (چکدیم )","ساختمانی","درزک ","","","no","","100000","120000","2","","100000","","55","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("623","اعمار هفت پایه پلچک (7متر)","ساختمانی","قریه تیر پل و خم میلک ","","","no","","5000","10000","2","","70000","","55","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("624","اعمار پل دهن رخه (50متر)","ساختمانی","درقریه دهن رخه","","","no","","25000","10000","2","","100000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("625","اعمار پل امروده (60متر)","ساختمانی","تنگی امروده ","","","no","","25000","10000","2","","200000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("626","تکمیل 50% باقی مانده پروژه شبکه ریاست شرکت آبرسانی ","","مرکز ولسوالی ","","","no","","7000","1000","1","","30000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("627","اسفالت سرک جغاره یک کیلومتر","ساختمانی","جغاریه","","","yes","3ماه","","","1","","200000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("628","ساختمان پل محمود خواجه سرمق","ساختمانی","جغاره","","","no","","","","1","","26000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("629","اعمار پل بالای دریای گز ادرسکن","ساختمانی","","","","no","","","","1","","100000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("630","اسفالت سرک غیبتان بطول 2 کیلومتر و عرض 4.5","ساختمانی","غیبتان","","","no","","","","1","","196000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("631","اعمار سیل برد قریه کشک سروان (50متر)","ساختمانی","قریه گیم","","","no","","50000","40000","2","","5000","","55","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("632","اغمار پانزده پایه پلچک ","ساختمانی","قریه سراب ","","","no","","4000","1000","2","","30000","","55","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("633","اعمار بند آب گردان ذخیره آب ","ساختمانی","دهنه غلام نبی خان ","","","no","","20000","2000","2","","500000","","55","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("634","ایجاد شبکه ریاست شرکت آبرسانی(80 کیلو متر)","ساختمانی","","","","no","","4000","4000","2","","100000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("635","اعمار پل","ساختمانی","بالای کان محله در جوار دیوار قریه قندهاریها","","","no","","1000","10000","2","","30000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("636","بند اب گردان دره گله چقر محل خواجه قلندر (150متر)","ساختمانی","محل خواجه قلندر(ع)","","","no","","50000","15000","2","","150000","","55","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("637","اعمار دیوار استنادی (400متر)","ساختمانی","از آبچه ارخ ","","","no","","2000","500","2","","80000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("638","اعمار دیوار استنادی (400متر)","ساختمانی","آب ماهی","","","no","","1200","400","2","","80000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("639","اعمار بند آب گردان (500متر)","ساختمانی","جوی سرکاری تیک","","","no","","2000","300","2","","500000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("640","ترمیم اساسی بند آبگردان سور در محل بارتخت ","ساختمانی","در محل بارتخت ترمیم بند جوی سور","","","no","","8000","20000","2","","100000","","55","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("641","ترمیم اساسی بند آبگردان  ","ساختمانی","در محله علی آباد ","","","no","","2000","30000","2","","100000","","55","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("642","اعمار پل بالاي كانال قريه فرك  و نوبادام ","ساختمانی","فرك","","","no","","","","2","","50000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("643","اعمار پل بالاي جوي چهار باغ فيروزه","ساختمانی","چهارباغ فيروزه","","","no","","","","2","","10000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("644","اعمار كانال زير سرك بطول 40 متر","ساختمانی","نوين سفلي","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("645","اسفالت سرك35 كيلومتر(به طول 50 کیلو متر)","ساختمانی","ازسركال الي پروژه سمنت","","","no","","","","2","","20000000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("646","اعمار ديوار احاطوي","ساختمانی","چه و قچنك","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("647","اعمار ديوار احاطوي","ساختمانی","شمس آباد","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("648","اعمار ديوار احاطوي","ساختمانی","پشت كوه ملاياسين","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("649","اعمار ديوار احاطوي","ساختمانی","خواجه شهاب الدين","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("650","ترميم اساسي جوي عمومي3 كيلومتر","ساختمانی","هم ميدانگل محمد خان","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("651","ایجاد بند خاکی","ساختمانی","بند میان کوه و کاریز ملا کریمداد","","","no","","","","2","","100000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("652","اعمار ده پایه پلچک ","ساختمانی","داخل قریه محل احد خان و محل شیرعلی خان","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("653","اعمار ده پایه پلچک ","ساختمانی","بالامحله کارآباد قعه مستوفی وسرای پائین","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("654","اعمار ده پایه پلچک ","ساختمانی","سرک داخل قریه جات بازارچه الی کلاته خلیل","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("655","اعمار پلچک","ساختمانی","کانال ده نو و قریه چات مهچوار","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("656","اعمار دو پایه پلچک","ساختمانی","خم زیارت","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("657","اعمار ده پایه پلچک ","ساختمانی","محل بازاچه و محل شیرعلی خان واحد خان","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("658","اعمار پل ","ساختمانی","پشتان ،معلومه ، ميرزابهار","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("659","اسفالت جاده هاي ماسترپلان شهري","ساختمانی","مركزولسوالي","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("660","نل كشي چشمه هاي آب ","ساختمانی","قريجات شرق ولسوالي","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("661","اعمار يك پلچك بالاي تخت رود","ساختمانی","چاه سنگي","","","no","","","","2","","10000","","55","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("662","اعمار بند برق","ساختمانی","منطقه ارخ","","","no","","","","2","","500000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("663","اعمار بند برق","ساختمانی","برپل چشمه دیوانه","","","no","","","","2","","500000","","55","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("664","اعمار يك پلچك ","ساختمانی","تخ همروده","","","no","","","","2","","10000","","55","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("665","ترميم و قير ريزي سرك و اعمار پلچها 40 كيلومتر","ساختمانی","","","","no","","","","2","","2000000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("666","ترميم و قير ريزي سرك و اعمار پلچها 50 كيلومتر","ساختمانی","رباط سنگي الي شيخ بهلول","","","no","","","","2","","15000000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("667","اعمار 3 پايه پل  به طول 20 متر","ساختمانی","قنات وكيل الي دهن درزك","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("668","ترميم و قير ريزي سرك  4 كيلومتر","ساختمانی","يكه درخت،  دروزي ،جعفر بيك","","","no","","","","2","","1000000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("669","پخته كاري كانال 800 متر","ساختمانی","بازار رباط سنگي","","","no","","","","2","","200000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("670","اعمار 3 پايه پلچك ","ساختمانی","چیغل، چاه،تلخ،سیاه گمرک","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("671","اعمار 3 پايه پلچك ","ساختمانی","باغچه ها، سير زار ، رباط ميرزا","","","no","","","","2","","20000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("672","اعمار 4 پايه پلچك","ساختمانی","كله خور، كاريز سبز، قلعه سفيد ، خود روان","","","no","","","","2","","40000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("673","اعمار 3 پايه پلچك ","ساختمانی","خواجه گلبيد، ايوبي ، بقر چر","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("674","اعمار 3 پايه پلچك ","ساختمانی","جلال آباد، انگاره، احمد آباد","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("675","اعمار 3 پايه پلچك بطو 8 متر","ساختمانی","پنج بوزي، خليفه رحمت، قلعه گردك","","","no","","","","2","","30000","","55","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("676","اعمار 10 پایه پلچک","ساختمانی","دهران","","","no","","","","2","","50000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("677","اعمار 5 پایه پلچک","ساختمانی","میاندیجو","","","no","","","","2","","25000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("678","اعمار 8 پایه پلچک","ساختمانی","برناباد","","","no","","","","2","","40000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("679","اعمار 15 پایه پلچک","ساختمانی","عنجان سرآسیاب","","","no","","","","2","","75000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("680","اعمار 13 پایه لچک","ساختمانی","فاقدان و قیسان ","","","no","","","","2","","65000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("681","اعمار 7 پایه پلجک","ساختمانی","هلنگ و شیرخانی ها","","","no","","","","2","","35000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("682","اعمار 14 پایه پلچک","ساختمانی","روج و ننگ آباد","","","no","","","","2","","70000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("683","اعماری 13 پایه پلچک","ساختمانی","کلاته قاضی و زنگی ضباح","","","no","","","","2","","65000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("684","اعمار 10 پایه پلچک","ساختمانی","روشنان و قلعه جوهر","","","no","","","","2","","50000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("685","اعمار 16 پایه پلچک","ساختمانی","گزه و استونان","","","no","","","","2","","80000","","55","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("686","اعمار تعمیر اطفال خیابانی","ساختمانی","مرکز شهر","","","no","شش ماه","","","2","","120000","","56","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("687","اعمار کودکستان","ساختمانی","","","","no","پنج ماه","400","2400","2","","200000","","56","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("688","اعمار تعمر ریاست کار و امور اجتماعی","ساختمانی","","","","yes","هشت ماه","10 کارمند","تمام مراجعین","2","","400000","","56","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("689","اعمار تعمر آسایشگاه معلولین","ساختمانی","","","","yes","شش ماه","100 معلول","3000","1","","200000","","56","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("690","اعمار کودکستان","ساختمانی","","","","yes","پنج ماه","100 طفل","1800","2","","150000","","56","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("691","اعمار کودکستان","ساختمانی","","","","yes","پنج ماه","150 طفل","1800","2","","150000","","56","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("692","اعمار یک باب کودکستان ","","ناحیه پنجم","","","no","شش ماه","طفل1000","100فامیل","1","","100000","","56","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("693","اعمار پل هوایی","ساختمانی","میدان هوایی","","","no","شش ماه","10000طفل","10000فامیل ","2","","80000","","56","","اولویت دوم","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("694","اعمار مرکز فنی وحرفوی ","ساختمانی","مرکز ولسوالی","","","no","شش ماه","10000طفل","10000فامیل ","1","","100000","","56","","اولویت دوم","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("695","اعمار مرکز فنی وحرفوی ولسوالی کرخ ","ساختمانی","مرکز ولسوالی ","","","no","شش ماه","10000طفل","10000فامیل ","1","","100000","","56","","اولویت اول","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("696","اعمار مرکز فنی وحرفوی ولسوالی زنده جان ","ساختمانی","مرکز ولسوالی","","","no","شش ماه","10000طفل","10000فامیل ","1","","100000","","56","","اولویت دوم","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("697","اعمار آشپزخانه برای پرورشگاه ","ساختمانی","شهرک مجاهدین","","","no","دوماه","110نفر","200","1","","14000","","56","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("698","اعمار دوازده نمره حمام برای پرورشگاه ","ساختمانی","شهرک مجاهدین","","","no","دوماه","110نفر","200","1","","40000","","56","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("699","سالون کنفرانس ","ساختمانی","سرک سی متره","","","no","شش ماه","300نفر","600نفر","2","","200000","","56","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("700","طبقه سوم کودکستان سمیه ","ساختمانی","سرک سی متره","","","no","شش ماه","300نفر","600نفر","1","","100000","","56","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("701","اعمار یک باب مجتمع فرهنگی","ساختمانی","در مرکز ولسوالی","","","no","","7000","700","2","","50000","","56","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("702","احاطه دیوار مجتمع فرهنگی خواهران","ساختمانی","غیزان سنگر","","","no","","","","2","","40000","","56","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("703","اعمار یک باب مجتمع فرهنگی خواهران","ساختمانی","مرکز ولسوالی","","","no","","","","2","","30000","","56","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("704","اعماريك باب مجتمع ","ساختمانی","مركزولسوالي","","","no","","","","2","","50000","","56","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("705","اعمار مرکز فن و حرفه","ساختمانی","مركزولسوالي","","","no","","","","2","","70000","","56","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("706","اعمار مرکز فن و حرفه","ساختمانی","مركزولسوالي","","","no","","","","2","","70000","","56","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("707","اعمار مرکز فن و حرفه","ساختمانی","مركزولسوالي","","","no","","","","2","","70000","","56","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("708","خط اندازی سرک نمرات رهایشی فاز سوم و چهارم","ساختمانی","شهرک سعادت","","","yes","سه ماه","","","2","","12500","","57","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("709","احداث فضای سبز و نهال شانی","ساختمانی","شهرک سعادت","","","yes","شش ماه","","","2","","6000","","57","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("710","اعمار مکتب ذکور واناث ","ساختمانی","شهرک سعادت","","","no","شش ماه","","","1","","102000","","57","","اولویت دوم","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("711","خط اندازی و سرک کشی به طول 14 کیلومتر پیپ اسکن فاز دوم","ساختمانی","شهرک سعادت","","","no","","","","2","","60000","","57","","اولویت اول ","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("712","اعمار مرکز تولید صنایع دستی برای زنان","ساختمانی","","","","yes","یک سال","200","عموم مردم","2","","300000","","58","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("713","اعمار سالون کنفرانس و اطاق کودک","ساختمانی","ناحیه هشتم","","","yes","یک سال","500","عموم مردم","2","","400000","","58","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("714","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","4","","plan");
INSERT INTO tblplan VALUES("715","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","5","","plan");
INSERT INTO tblplan VALUES("716","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","6","","plan");
INSERT INTO tblplan VALUES("717","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","10","","plan");
INSERT INTO tblplan VALUES("718","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","11","","plan");
INSERT INTO tblplan VALUES("719","اعمار تعمی با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","16","","plan");
INSERT INTO tblplan VALUES("720","اعمار تعمی با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","15","","plan");
INSERT INTO tblplan VALUES("721","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","14","","plan");
INSERT INTO tblplan VALUES("722","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","18","","plan");
INSERT INTO tblplan VALUES("723","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","8","","plan");
INSERT INTO tblplan VALUES("724","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","7","","plan");
INSERT INTO tblplan VALUES("725","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","13","","plan");
INSERT INTO tblplan VALUES("726","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","12","","plan");
INSERT INTO tblplan VALUES("727","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","9","","plan");
INSERT INTO tblplan VALUES("728","اعمار تعمیر با ملحقات آن برای شورای زنان ","ساختمانی","مرکزولسوالی","","","yes","8ماه","","تمام ولسوالی","2","","80000","","58","","","","","","0","0","0","0","0","12","17","","plan");
INSERT INTO tblplan VALUES("729","اعمار یک باب تعمیر با ملحقاات آن جهت کار گاه شیرینی پزی براین خانم ها ","ساختمانی","مرکز شهر","","","yes","8ماه","","","2","","90000","","58","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("730","اسفالت جاده باغ زنانه ","ساختمانی","داخل باغ زنانه","","","no","2ماه","20","تمام مراجعین ","1","","200000","","58","","اولویت دوم ","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("731","جیمنازیوم ورزشی داخل باغ شمیره","ساختمانی","داخل باغ زنانه","","","no","1ماه","200","تمام خواهران","1","","300000","","58","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("732","سونا با تمام وسایل و امکانات ","ساختمانی","داخل باغ زنانه","","","no","1سال ","15نفر","تمام مستفیدین","1","","300000","","58","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("733","ایجاد خانه های امن با تمام وسایل و امکانات ","ساختمانی","داخل شهر ","","","no","1سال ","30نفر","عموم مردم ","1","","450000","","58","","اولویت دوم","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("734","اعمار سالون کنفرانس و اطاق کودک","ساختمانی","ناحیه هشتم","","","yes","یک سال","500","عموم مردم","1","","400000","","58","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("735","اعمار تعمیر کلوپ","ساختمانی","ناحیه هشتم","","","no","شش ماه","","","2","","150000","","59","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("736","اعمار 20 صنف درسی","ساختمانی","ناحیه هشتم","","","no","شش ماه","","","2","","150000","","59","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("737","اعمار تعمیر دارالمجانین","ساختمانی","ناحیه هشتم","","","no","شش ماه","","","1","","250000","","59","","اولویت اول","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("738","اعمار تعمیر آمریت احصائیه","ساختمانی","ناحیه هشتم","","","no","8ماه","","","2","","250000","","70","","","","","","0","0","0","0","0","12","0","","plan");
INSERT INTO tblplan VALUES("739","تعمیراداری  حفاظت محیط زیست ","ساختمانی ","","","","no","1سال ","مامورین و مهاجرین ","","1","","380000","","69","","","","","","0","0","0","0","0","12","19","","plan");



DROP TABLE IF EXISTS tblprovinces;

CREATE TABLE `tblprovinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `province_code` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblprovinces VALUES("1","بدخشان","BDK");
INSERT INTO tblprovinces VALUES("2","بادغیس","BDG");
INSERT INTO tblprovinces VALUES("3","بغلان","BGL");
INSERT INTO tblprovinces VALUES("4","بلخ","BLK");
INSERT INTO tblprovinces VALUES("5","بامیان","BMY");
INSERT INTO tblprovinces VALUES("6","دایکندی","DYK");
INSERT INTO tblprovinces VALUES("7","فراه","FRH");
INSERT INTO tblprovinces VALUES("8","فاریاب","FRY");
INSERT INTO tblprovinces VALUES("9","غزنی","GHZ");
INSERT INTO tblprovinces VALUES("10","غور","GHR");
INSERT INTO tblprovinces VALUES("11","هلمند","HLM");
INSERT INTO tblprovinces VALUES("12","هرات","HRT");
INSERT INTO tblprovinces VALUES("13","جوزجان","JWZ");
INSERT INTO tblprovinces VALUES("14","کابل","KBU");
INSERT INTO tblprovinces VALUES("15","کندهار","KND");
INSERT INTO tblprovinces VALUES("16","کاپیسا","KPS");
INSERT INTO tblprovinces VALUES("17","خوست","KST");
INSERT INTO tblprovinces VALUES("18","کنر","KNR");
INSERT INTO tblprovinces VALUES("19","کندوز","KNZ");
INSERT INTO tblprovinces VALUES("20","لغمان","LGM");
INSERT INTO tblprovinces VALUES("21","لوگر","LGR");
INSERT INTO tblprovinces VALUES("22","ننگرهار","NGR");
INSERT INTO tblprovinces VALUES("23","نیمروز","NMZ");
INSERT INTO tblprovinces VALUES("24","نورستان","NRS");
INSERT INTO tblprovinces VALUES("25","پکتیا","PKT");
INSERT INTO tblprovinces VALUES("26","پکتیکا","PKK");
INSERT INTO tblprovinces VALUES("27","پنجشیر","PJS");
INSERT INTO tblprovinces VALUES("28","پروان","PRN");
INSERT INTO tblprovinces VALUES("29","سمنگان","SMG");
INSERT INTO tblprovinces VALUES("30","سره پل","SRP");
INSERT INTO tblprovinces VALUES("31","تخار","");
INSERT INTO tblprovinces VALUES("32","اروزگان","");
INSERT INTO tblprovinces VALUES("33","وردک","");
INSERT INTO tblprovinces VALUES("34","زابل","");



DROP TABLE IF EXISTS tblquarters;

CREATE TABLE `tblquarters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblquarters VALUES("1","ربع اول");
INSERT INTO tblquarters VALUES("2","ربع دوم");
INSERT INTO tblquarters VALUES("3","ربع سوم");
INSERT INTO tblquarters VALUES("4","ربع چهارم");



DROP TABLE IF EXISTS tblsectors;

CREATE TABLE `tblsectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(140) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblsectors VALUES("6","امنیت");
INSERT INTO tblsectors VALUES("7","حکومت داری، حاکمیت قانون و حقوق بشر");
INSERT INTO tblsectors VALUES("8","زیر بناء و منابع طبیعی ");
INSERT INTO tblsectors VALUES("9","تعلیم و تربیه");
INSERT INTO tblsectors VALUES("10","صحت");
INSERT INTO tblsectors VALUES("11","زراعت و انکشاف دهات");
INSERT INTO tblsectors VALUES("12","مصئونیت اجتماعی ");
INSERT INTO tblsectors VALUES("13","اداره اقتصاد و انکشاف سکتور خصوصی");



DROP TABLE IF EXISTS tblusers;

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblusers VALUES("1","dfsfsd","admin","admin","admin","inactive");
INSERT INTO tblusers VALUES("2","kk","kk","kk","limited","active");



DROP TABLE IF EXISTS tblyears;

CREATE TABLE `tblyears` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO tblyears VALUES("1","1390");
INSERT INTO tblyears VALUES("2","1391");
INSERT INTO tblyears VALUES("3","1392");
INSERT INTO tblyears VALUES("4","1393");
INSERT INTO tblyears VALUES("5","1394");
INSERT INTO tblyears VALUES("6","1395");
INSERT INTO tblyears VALUES("7","1396");
INSERT INTO tblyears VALUES("8","1397");
INSERT INTO tblyears VALUES("9","1398");



SET FOREIGN_KEY_CHECKS=1; 
