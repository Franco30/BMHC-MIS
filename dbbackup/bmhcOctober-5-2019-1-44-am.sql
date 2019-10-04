DROP TABLE chicks;

CREATE TABLE `chicks` (
  `chicks_id` int(11) NOT NULL AUTO_INCREMENT,
  `chicksname` varchar(30) NOT NULL,
  `fblink` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `beautypercentage` int(100) NOT NULL,
  PRIMARY KEY (`chicks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO chicks VALUES("45","Darriene Gayle Dusaran","https://www.facebook.com/darrienegayle.dusaran","https://www.instagram.com/gayle_du/","80"); 
INSERT INTO chicks VALUES("51","Kherrie Tejare","https://www.facebook.com/kherrieluchi.tejare","https://www.instagram.com/_kherriebels/","100"); 
INSERT INTO chicks VALUES("56","Franze Beatriz Caballero","https://www.facebook.com/franzefries","https://www.instagram.com/franzebeatriz/","90"); 
INSERT INTO chicks VALUES("57"," Juliana Gevela Llaguno","https://www.facebook.com/Julillaguno13","https://www.instagram.com/yanaallaguno/","90"); 
INSERT INTO chicks VALUES("58"," Zoe Dominique Gudio","https://www.facebook.com/thedarkzoe","https://www.instagram.com/zoegudio/","90"); 
INSERT INTO chicks VALUES("60","Kate Tejare","https://www.facebook.com/kristine.tejare","https://www.instagram.com/_kateypery/","95"); 
INSERT INTO chicks VALUES("61","Erika Dalucanog","None","None","96"); 



DROP TABLE consultation;

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `findings` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  PRIMARY KEY (`consultation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("1","4","fever","findings","medicine"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("3","27","Export","September 22, 2019","11:17 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("4","26","Export","September 24, 2019","4:23 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("5","27","Export","September 25, 2019","12:50 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("6","27","Export","October 3, 2019","4:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("7","27","Export","October 4, 2019","3:23 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("8","27","Export","October 4, 2019","12:27 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("9","27","Export","October 5, 2019","1:44 am","Successfully Exported Database"); 



DROP TABLE dssm_examination;

CREATE TABLE `dssm_examination` (
  `dssm_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_examined` varchar(30) NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `visual_appearance2` char(15) NOT NULL,
  `reading` varchar(30) NOT NULL,
  `reading2` char(15) NOT NULL,
  `laboratory_diagnosis` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`dssm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;

INSERT INTO dssm_examination VALUES("19","2017-11-25","1001","Salivary","","Good","Good","Positive (+)","Dr. Haro","2017-11-22","2","Nov","2017"); 
INSERT INTO dssm_examination VALUES("20","2017-12-13","1064","Salivary","Salivary","Good","Good","Negative (0)","Dr. Haro","2017-12-13","7","Dec","2017"); 
INSERT INTO dssm_examination VALUES("21","2017-12-19","12","Muco-Purulent","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-19","21","Dec","2017"); 
INSERT INTO dssm_examination VALUES("22","2017-12-13","1089","Salivary","Muco-Purulent","Good","Good","Positive (+)","Dr. Haro","2017-12-13","2","Dec","2017"); 
INSERT INTO dssm_examination VALUES("23","2018-01-17","123","Salivary","Salivary","good","","Positive (+)","Dr. Haro","2018-01-18","6","Jan","2018"); 
INSERT INTO dssm_examination VALUES("24","2018-01-17","2312","Salivary","Salivary","323","","Negative (0)","Dr. Haro","2018-01-05","7","Jan","2018"); 
INSERT INTO dssm_examination VALUES("25","2018-01-05","1065","Salivary","Salivary","Ok lng","","Positive (+)","Rommel Adricula","2018-01-07","3","Jan","2018"); 
INSERT INTO dssm_examination VALUES("26","2018-01-08","123","Salivary","Salivary","tubbol","","Positive (+)","mr.igit","2018-01-10","9","Jan","2018"); 
INSERT INTO dssm_examination VALUES("27","2018-01-12","1067","Muco-Purulent","Muco-Purulent","Good","","Positive (+)","Carl Betio","2018-01-12","2","Jan","2018"); 
INSERT INTO dssm_examination VALUES("28","2018-01-04","2211","Muco-Purulent","Muco-Purulent","Good","Good","Negative (0)","Alvin Yanson","2018-01-12","21","Jan","2018"); 
INSERT INTO dssm_examination VALUES("36","2018-01-17","12","Salivary","Salivary","good lng","good lng","Positive (+)","qweq","2018-01-10","17","Jan","2018"); 
INSERT INTO dssm_examination VALUES("37","2018-01-10","12","Salivary","Salivary","qwe","qwe","Negative (0)","Alvin Yanson","2018-01-10","18","Jan","2018"); 
INSERT INTO dssm_examination VALUES("38","0000-00-00","","","","","","","","0000-00-00","13","Jan","2018"); 
INSERT INTO dssm_examination VALUES("39","2018-01-17","90","Blood-Stained","Muco-Purulent","Good lng","Good c menard","Negative (0)","Carl Bets","2018-01-12","13","Jan","2018"); 
INSERT INTO dssm_examination VALUES("40","2018-01-10","12","Salivary","Muco-Purulent","Good lng c mark","Good lng c mark","Positive (+)","Alvin Yanson","2018-01-10","22","Jan","2018"); 
INSERT INTO dssm_examination VALUES("41","2018-01-06","34","Salivary","Salivary","Ako nisa","Ako nisa","Positive (+)","Alvin Yanson","2018-01-10","8","Jan","2018"); 
INSERT INTO dssm_examination VALUES("42","2018-01-12","1065","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-12","59","Jan","2018"); 
INSERT INTO dssm_examination VALUES("43","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Daniel Molabin","2018-01-12","60","Jan","2018"); 
INSERT INTO dssm_examination VALUES("44","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-13","63","Jan","2018"); 
INSERT INTO dssm_examination VALUES("45","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-13","58","Jan","2018"); 
INSERT INTO dssm_examination VALUES("46","2018-01-12","10","Muco-Purulent","Muco-Purulent","0","0","Negative (0)","Dr. Alec Rubiato","2018-01-13","62","Jan","2018"); 
INSERT INTO dssm_examination VALUES("47","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-13","64","Jan","2018"); 
INSERT INTO dssm_examination VALUES("48","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-01-13","37","Jan","2018"); 
INSERT INTO dssm_examination VALUES("49","2018-01-12","10","Salivary","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-13","38","Jan","2018"); 
INSERT INTO dssm_examination VALUES("50","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Erul Ubas","2018-01-13","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("51","2018-01-12","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alec Rubiato","2018-01-12","20","Jan","2018"); 
INSERT INTO dssm_examination VALUES("52","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","75","Jan","2018"); 
INSERT INTO dssm_examination VALUES("53","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","73","Jan","2018"); 
INSERT INTO dssm_examination VALUES("54","2018-01-12","11","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","67","Jan","2018"); 
INSERT INTO dssm_examination VALUES("55","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-12","72","Jan","2018"); 
INSERT INTO dssm_examination VALUES("56","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Daniel Molabin","2018-01-12","70","Jan","2018"); 
INSERT INTO dssm_examination VALUES("57","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Carl Betio","2018-01-12","68","Jan","2018"); 
INSERT INTO dssm_examination VALUES("58","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-12","74","Jan","2018"); 
INSERT INTO dssm_examination VALUES("59","2018-01-12","11","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Jaly Alvin Galoyo","2018-01-12","69","Jan","2018"); 
INSERT INTO dssm_examination VALUES("60","2018-01-12","12","Blood-Stained","Muco-Purulent","1+","1+","Positive (+)","Dr. Alec Rubiato","2018-01-12","71","Jan","2018"); 
INSERT INTO dssm_examination VALUES("61","2018-01-12","21","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","76","Jan","2018"); 
INSERT INTO dssm_examination VALUES("62","2018-01-12","12","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-12","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("63","2018-01-15","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Gabriel Banua","2018-01-15","45","Jan","2018"); 
INSERT INTO dssm_examination VALUES("64","2018-01-15","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-01-15","1","Jan","2018"); 
INSERT INTO dssm_examination VALUES("65","2018-01-24","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alson John","2018-01-24","31","Jan","2018"); 
INSERT INTO dssm_examination VALUES("66","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Vincent Suyo","2018-01-24","78","Jan","2018"); 
INSERT INTO dssm_examination VALUES("67","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","24","Jan","2018"); 
INSERT INTO dssm_examination VALUES("68","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","20","Jan","2018"); 
INSERT INTO dssm_examination VALUES("69","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","30","Jan","2018"); 
INSERT INTO dssm_examination VALUES("70","2018-01-24","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-01-24","59","Jan","2018"); 
INSERT INTO dssm_examination VALUES("71","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","34","Jan","2018"); 
INSERT INTO dssm_examination VALUES("72","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-24","33","Jan","2018"); 
INSERT INTO dssm_examination VALUES("73","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","32","Jan","2018"); 
INSERT INTO dssm_examination VALUES("74","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-01-24","36","Jan","2018"); 
INSERT INTO dssm_examination VALUES("75","2018-01-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Carl Betio","2018-01-24","29","Jan","2018"); 
INSERT INTO dssm_examination VALUES("76","2018-01-25","101","Muco-Purulent","Salivary","1+","1+","Positive (+)","Dr. Erul John Ubas","2018-01-25","73","Jan","2018"); 
INSERT INTO dssm_examination VALUES("77","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Sean Wilkins","2018-01-26","54","Jan","2018"); 
INSERT INTO dssm_examination VALUES("78","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Derrick Wagner","2018-01-26","51","Jan","2018"); 
INSERT INTO dssm_examination VALUES("79","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson Bayon-on","2018-01-26","53","Jan","2018"); 
INSERT INTO dssm_examination VALUES("80","2018-01-26","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","56","Jan","2018"); 
INSERT INTO dssm_examination VALUES("81","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","49","Jan","2018"); 
INSERT INTO dssm_examination VALUES("82","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","48","Jan","2018"); 
INSERT INTO dssm_examination VALUES("83","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","52","Jan","2018"); 
INSERT INTO dssm_examination VALUES("84","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","55","Jan","2018"); 
INSERT INTO dssm_examination VALUES("85","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","50","Jan","2018"); 
INSERT INTO dssm_examination VALUES("86","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","47","Jan","2018"); 
INSERT INTO dssm_examination VALUES("87","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","39","Jan","2018"); 
INSERT INTO dssm_examination VALUES("88","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","45","Jan","2018"); 
INSERT INTO dssm_examination VALUES("89","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","41","Jan","2018"); 
INSERT INTO dssm_examination VALUES("90","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","44","Jan","2018"); 
INSERT INTO dssm_examination VALUES("91","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","42","Jan","2018"); 
INSERT INTO dssm_examination VALUES("92","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","43","Jan","2018"); 
INSERT INTO dssm_examination VALUES("93","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","46","Jan","2018"); 
INSERT INTO dssm_examination VALUES("94","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","67","Jan","2018"); 
INSERT INTO dssm_examination VALUES("95","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","72","Jan","2018"); 
INSERT INTO dssm_examination VALUES("96","2018-01-26","10","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","83","Jan","2018"); 
INSERT INTO dssm_examination VALUES("97","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","84","Jan","2018"); 
INSERT INTO dssm_examination VALUES("98","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","80","Jan","2018"); 
INSERT INTO dssm_examination VALUES("99","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","25","Jan","2018"); 
INSERT INTO dssm_examination VALUES("100","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","70","Jan","2018"); 
INSERT INTO dssm_examination VALUES("101","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","40","Jan","2018"); 
INSERT INTO dssm_examination VALUES("102","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","81","Jan","2018"); 
INSERT INTO dssm_examination VALUES("103","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","82","Jan","2018"); 
INSERT INTO dssm_examination VALUES("104","2018-01-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-01-26","75","Jan","2018"); 
INSERT INTO dssm_examination VALUES("105","2018-02-02","10","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-02-02","90","Feb","2018"); 
INSERT INTO dssm_examination VALUES("106","2018-02-07","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin","2018-02-07","97","Feb","2018"); 
INSERT INTO dssm_examination VALUES("107","2018-02-08","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin","2018-02-08","57","Feb","2018"); 
INSERT INTO dssm_examination VALUES("108","2018-02-08","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Haro","2018-02-08","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("109","2018-02-08","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Haro","2018-02-08","92","Feb","2018"); 
INSERT INTO dssm_examination VALUES("110","2018-02-15","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-15","93","Feb","2018"); 
INSERT INTO dssm_examination VALUES("111","2018-02-16","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-15","95","Feb","2018"); 
INSERT INTO dssm_examination VALUES("112","2018-02-23","100","Muco-Purulent","Blood-Stained","1+","1+","Positive (+)","Vena Lorenzana","2018-02-23","175","Feb","2018"); 
INSERT INTO dssm_examination VALUES("113","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Maryln Kluender","2018-02-23","171","Feb","2018"); 
INSERT INTO dssm_examination VALUES("114","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Jamie Corona","2018-02-23","169","Feb","2018"); 
INSERT INTO dssm_examination VALUES("115","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Shanelle Tumlin","2018-02-23","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("116","2018-02-23","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Audrie Pappan","2018-02-23","177","Feb","2018"); 
INSERT INTO dssm_examination VALUES("117","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Cecilia Render","2018-02-23","181","Feb","2018"); 
INSERT INTO dssm_examination VALUES("118","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Sharell Rueckert","2018-02-23","174","Feb","2018"); 
INSERT INTO dssm_examination VALUES("119","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Illa Sanches","2018-02-23","179","Feb","2018"); 
INSERT INTO dssm_examination VALUES("120","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Alva Hazelwood","2018-02-23","172","Feb","2018"); 
INSERT INTO dssm_examination VALUES("121","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Garnett Bolton","2018-02-23","168","Feb","2018"); 
INSERT INTO dssm_examination VALUES("122","2018-02-23","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Kraig Villela","2018-02-23","180","Feb","2018"); 
INSERT INTO dssm_examination VALUES("123","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Doug Cutts","2018-02-23","178","Feb","2018"); 
INSERT INTO dssm_examination VALUES("124","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Vivian Big","2018-02-23","176","Feb","2018"); 
INSERT INTO dssm_examination VALUES("125","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Arcelia Difilippo","2018-02-23","173","Feb","2018"); 
INSERT INTO dssm_examination VALUES("126","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Lorelei Kelty","2018-02-23","170","Feb","2018"); 
INSERT INTO dssm_examination VALUES("127","2018-02-24","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-24","94","Feb","2018"); 
INSERT INTO dssm_examination VALUES("128","2018-02-23","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-23","99","Feb","2018"); 
INSERT INTO dssm_examination VALUES("129","2018-02-24","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alson John Bayon-on","2018-02-23","96","Feb","2018"); 
INSERT INTO dssm_examination VALUES("130","2018-02-25","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yansn","2018-02-25","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("131","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-26","182","Feb","2018"); 
INSERT INTO dssm_examination VALUES("132","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+1","Positive (+)","Dr. Elmer Haro","2018-02-26","189","Feb","2018"); 
INSERT INTO dssm_examination VALUES("133","2018-02-26","100","Salivary","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-26","184","Feb","2018"); 
INSERT INTO dssm_examination VALUES("134","2018-02-26","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Alvin Yanson","2018-02-26","184","Feb","2018"); 
INSERT INTO dssm_examination VALUES("135","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","187","Feb","2018"); 
INSERT INTO dssm_examination VALUES("136","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","191","Feb","2018"); 
INSERT INTO dssm_examination VALUES("137","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","91","Feb","2018"); 
INSERT INTO dssm_examination VALUES("138","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","75","Feb","2018"); 
INSERT INTO dssm_examination VALUES("139","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","2","Feb","2018"); 
INSERT INTO dssm_examination VALUES("140","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","73","Feb","2018"); 
INSERT INTO dssm_examination VALUES("141","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","171","Feb","2018"); 
INSERT INTO dssm_examination VALUES("142","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","89","Feb","2018"); 
INSERT INTO dssm_examination VALUES("143","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","44","Feb","2018"); 
INSERT INTO dssm_examination VALUES("144","2018-02-27","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","30","Feb","2018"); 
INSERT INTO dssm_examination VALUES("145","2018-02-27","199","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-27","172","Feb","2018"); 
INSERT INTO dssm_examination VALUES("146","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("147","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("148","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","21","Feb","2018"); 
INSERT INTO dssm_examination VALUES("149","2018-02-28","100","Muco-Purulent","Blood-Stained","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","75","Feb","2018"); 
INSERT INTO dssm_examination VALUES("150","2018-02-28","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Elmer Haro","2018-02-28","32","Feb","2018"); 
INSERT INTO dssm_examination VALUES("151","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","29","Mar","2018"); 
INSERT INTO dssm_examination VALUES("152","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("153","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("154","2018-03-01","100","Muco-Purulent","Salivary","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("155","2018-03-01","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","2018-03-01","57","Mar","2018"); 
INSERT INTO dssm_examination VALUES("156","March 12, 2018","100","Muco-Purulent","Muco-Purulent","1+","1+","Positive (+)","Dr. Leonel Entes","March 12, 2018","59","Mar","2018"); 
INSERT INTO dssm_examination VALUES("157","March 15, 2018","100","Muco-Purulent","Muco-Purulent","1_","1_","Positive (+)","Erul","March 15, 2018","194","Mar","2018"); 
INSERT INTO dssm_examination VALUES("158","March 15, 2018","100","Muco-Purulent","Muco-Purulent","1","1","Positive (+)","Dr Erul","March 15, 2018","59","Mar","2018"); 
INSERT INTO dssm_examination VALUES("159","March 15, 2018","456","Salivary","Muco-Purulent","ok","ok","Positive (+)","erul","March 15, 2018","59","Mar","2018"); 
INSERT INTO dssm_examination VALUES("160","March 15, 2018","4461","Muco-Purulent","Muco-Purulent","ok","ok","Positive (+)","erul","March 15, 2018","59","Mar","2018"); 
INSERT INTO dssm_examination VALUES("161","May 28, 2018","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Elmer T. Haro","May 28, 2018","59","May","2018"); 
INSERT INTO dssm_examination VALUES("162","August 06, 2018","100","Salivary","Salivary","1+","1+","Positive (+)","Dr. Alvin","August 06, 2018","21","Aug","2018"); 



DROP TABLE dst_examination;

CREATE TABLE `dst_examination` (
  `dst_id` int(11) NOT NULL AUTO_INCREMENT,
  `tb_culture_laboratory` varchar(30) NOT NULL,
  `dst_laboratory` varchar(30) NOT NULL,
  `date_collected` varchar(30) NOT NULL,
  `date_received` varchar(30) NOT NULL,
  `method` varchar(20) NOT NULL,
  `isoniazid` varchar(30) NOT NULL,
  `rifampicin` varchar(30) NOT NULL,
  `ethambutol` varchar(30) NOT NULL,
  `streptomycin` varchar(30) NOT NULL,
  `pyrazinamide` varchar(30) NOT NULL,
  `levofloxacin` varchar(30) NOT NULL,
  `kanamycin` varchar(30) NOT NULL,
  `amikacin` varchar(30) NOT NULL,
  `capreomycin` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`dst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO dst_examination VALUES("1","12","12","2017-12-03","2017-12-03","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Haro","2017-12-05","6","Dec","2017"); 
INSERT INTO dst_examination VALUES("2","12","12","2017-12-12","2017-12-12","Method 1","Susceptible","Resistant","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Adricula","Good","Dr. Adricula","2017-12-20","1","Dec","2017"); 
INSERT INTO dst_examination VALUES("3","12","12","2018-01-10","2018-01-03","Method 3","Resistant","Susceptible","Resistant","Resistant","Susceptible","Resistant","Susceptible","Susceptible","Resistant","Alvin Yanson","Good lng","Alvin Yanson","2018-01-10","12","Jan","2018"); 
INSERT INTO dst_examination VALUES("4","100","100","2018-02-08","2018-02-08","Method","Resistant","Resistant","Susceptible","Susceptible","Resistant","Not Done","Not Done","Not Done","Not Done","Dr. Alvin","Good","Dr. Alvin","2018-02-08","1","Feb","2018"); 
INSERT INTO dst_examination VALUES("5","100","100","2018-02-08","2018-02-08","Method 1","Resistant","Resistant","Resistant","Resistant","Resistant","Not Done","Not Done","Not Done","Not Done","Dr. Haro","Good","Dr. Haro","2018-02-08","73","Feb","2018"); 
INSERT INTO dst_examination VALUES("6","102","100","2018-02-24","2018-02-24","Method 1","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Resistant","Resistant","Resistant","Susceptible","Dr. ALvin Yanson","Resistant","Dr. Alvin","2018-02-24","59","Feb","2018"); 
INSERT INTO dst_examination VALUES("7","100","100","2018-02-27","2018-02-27","Method 1","Resistant","Resistant","Resistant","Susceptible","Susceptible","Resistant","Susceptible","Susceptible","Susceptible","Dr. Alvin Yanson","Good","Dr. Alvin Yanson","2018-02-27","69","Feb","2018"); 
INSERT INTO dst_examination VALUES("8","100","100","March 12, 2018","March 12, 2018","Method 1","Susceptible","Susceptible","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Leonel Entes","Good","Dr. Alvin Yanson","March 12, 2018","2","Mar","2018"); 
INSERT INTO dst_examination VALUES("9","100","100","March 12, 2018","March 12, 2018","Method 1","Susceptible","Susceptible","Resistant","Resistant","Resistant","Susceptible","Susceptible","Susceptible","Susceptible","Dr. Leonel Entes","Good","Dr. Alvin Yanson","March 12, 2018","2","Mar","2018"); 



DROP TABLE family_planning;

CREATE TABLE `family_planning` (
  `family_planning_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(30) NOT NULL,
  `type_of_acceptor` varchar(50) NOT NULL,
  `prev_used_method` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `patient_birthdate` varchar(30) NOT NULL,
  `patient_highest_education` varchar(100) NOT NULL,
  `patient_occupation` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `spouse_birthdate` varchar(50) NOT NULL,
  `spouse_highest_education` varchar(50) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `average_monthly_income` varchar(100) NOT NULL,
  `no_of_living_children` varchar(50) NOT NULL,
  `plan_more_children` varchar(30) NOT NULL,
  `reason_for_practicing_fp` varchar(100) NOT NULL,
  `method_accepted` varchar(100) NOT NULL,
  PRIMARY KEY (`family_planning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("1","4","New to the Program","Pills","2019-24-09","3:57 AM","1986-07-20","High School","BHW","Mansilingan, Bacolod City","Negros Occidental","Michael Gerose","1986-03-29","College Graduate","Business Administrator","10000","3","Yes","Limiting and Spacing","SDM, Billings/Cervical Mucus/Ovulation Method"); 
INSERT INTO family_planning VALUES("2","4","Continuing User","Pills","2019-01-10","12:57 PM","1986-07-20","High School","BHW","Mansilingan, Bacolod City","Negros Occidental","Michael Gerose","1986-03-29","College Graduate","Business Administrator","10000","4","Yes","Limiting and Spacing","SDM, Billings/Cervical Mucus"); 



DROP TABLE immunization;

CREATE TABLE `immunization` (
  `immunization_id` int(30) NOT NULL AUTO_INCREMENT,
  `child_id` int(30) NOT NULL,
  `4p's_no` varchar(30) NOT NULL,
  `nhts_no` varchar(30) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `birthtime` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth_weight` varchar(30) NOT NULL,
  `cp_no` varchar(30) NOT NULL,
  `gravida` varchar(30) NOT NULL,
  `para` varchar(30) NOT NULL,
  `abortion` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `mother_age` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_age` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `place_of_prenatal` varchar(30) NOT NULL,
  `place_of_delivery` varchar(30) NOT NULL,
  `type_of_delivery` varchar(30) NOT NULL,
  PRIMARY KEY (`immunization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO immunization VALUES("2","3","3343","3434","343455","Female","Single","2005-15-11","12:00 PM","Prk. Mabinuligon #15 Everlasti","49","09738838332","1","1","0","Mary Ahmor","44","BHW","Jose Manalo","45","Jeepney Driver","MHC","CHO Bacolod","Normal"); 



DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `time_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date_time_call` varchar(50) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("2","4","2","TB Medicine","October 1, 2019","11:56 pm","Oct","2019","3","October 1, 2019 11:56 pm"); 
INSERT INTO medication_dispensation VALUES("3","4","2","Consultation","October 3, 2019","3:09 pm","Oct","2019","3","October 3, 2019 3:09 pm"); 
INSERT INTO medication_dispensation VALUES("4","5","3","TB Medicine","October 3, 2019","3:15 pm","Oct","2019","1","October 3, 2019 3:15 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(100) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Ceterizine","Tablet","","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("2","Ambroxol","Tablet","","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","TB medicine","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","TB medicine","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Rifapentine is known as a rifamycin antibiotic. It works by stopping the growth of bacteria.","September 27, 2019 - 1:47 am"); 



DROP TABLE patient;

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `purok` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `region_province` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `philhealth_no` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `emergency_no` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(20) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Married","53","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Marvin Gerose","0907377344343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","Block 7, Lot 23","Lasalle Ville","April 14, 1998","176","56","09061613101","Negros Occidental","Student","343434353433","Charles Go","09061613101","Registered","Oct","2019"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","March 10, 1970","174","174","88888888888","Negros Occidental","Farmer","343434343434","Erika Bermo","303030304545","Registered","Oct","2019"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Registered","Oct","2019"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay","Gauzon","August 23, 2006","174","55","34343434333","Negros Occidental","Student","333333333333","Jona Alcano","33333333454545","Registered","Oct","2019"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Jose Diana","0907377344343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("11","Dennzel Quatchon","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Registered","Dec","2018"); 
INSERT INTO patient VALUES("12","Jesse Franco Latosa","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","67","09061613101","Negros Occidental","Student","343434564546","Salvador Latosa","93939343433","Registered","Nov","2018"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Registered","Aug","2019"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","25","Male","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Renzy Nono","0907377344343","Registered","Jun","2019"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Single","38","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","Rommy Adryx","93939343433","Registered","Jul","2019"); 



DROP TABLE patient_child;

CREATE TABLE `patient_child` (
  `child_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_education` varchar(50) NOT NULL,
  `mother_occupation` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_education` varchar(50) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `date_first_seen` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `birth_weight` varchar(50) NOT NULL,
  `place_of_delivery` varchar(50) NOT NULL,
  `birth_register_date` varchar(50) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","2005-15-11","2005-15-11","49","CLMMRH","2005-15-11","Mabinuligon","#15 Everlasting","Registered","2019"); 



DROP TABLE prenatal;

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctors_advice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `presentation` varchar(100) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO prenatal VALUES("1","4","For CBC, urinalysis","2019-23-09","",""); 



DROP TABLE tb_culture_examination;

CREATE TABLE `tb_culture_examination` (
  `tb_culture_id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(30) NOT NULL,
  `tb_culture_laboratory` char(10) NOT NULL,
  `laboratory_no` varchar(30) NOT NULL,
  `date_sample_collected` date NOT NULL,
  `date_sample_received` date NOT NULL,
  `tb_culture_result` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `reviewed_by` varchar(30) NOT NULL,
  `date_released` date NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`tb_culture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tb_culture_examination VALUES("1","Method 1","1264","1265","2017-12-05","2017-12-05","Resistant","MTB detected","Dr. Torres","Dr. Torres","2017-12-06","1","Dec","2017"); 
INSERT INTO tb_culture_examination VALUES("2","Method 1","100","100","2018-02-07","2018-02-08","Resistant","Good","Dr. Haro","Dr. Haro","2018-02-08","6","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("3","Method 1","100","100","2018-02-25","2018-02-26","Resistant","Good","Dr. Alvin","Dr. Alvin","2018-02-26","6","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("4","Method 1","100","100","2018-02-27","2018-02-27","Resistant","confirmed the laboratory reque","Dr. Leonel Entes","Dr. Leonel Entes","2018-02-28","39","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("5","Method 2","199","100","2018-02-27","2018-02-27","Resistant","Good","Dr. Elmer Haro","Dr. Elmer Haro","2018-02-27","35","Feb","2018"); 
INSERT INTO tb_culture_examination VALUES("6","Method 1","1011","1012","0000-00-00","0000-00-00","Resistant","Dr. Leonel Entes","Dr. Alvin Yanson","Dr. Leonel Entes","0000-00-00","75","Mar","2018"); 
INSERT INTO tb_culture_examination VALUES("7","Method 1","1011","1012","0000-00-00","0000-00-00","Resistant","Dr. Leonel Entes","Dr. Alvin Yanson","Dr. Leonel Entes","0000-00-00","75","Mar","2018"); 
INSERT INTO tb_culture_examination VALUES("8","Method 1","100","100","0000-00-00","0000-00-00","Resistant","Good","Dr. Leonel Entes","Dr. Leonel Entes","0000-00-00","73","Mar","2018"); 



DROP TABLE tb_follow_up;

CREATE TABLE `tb_follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO tb_follow_up VALUES("3","27","4","2019-10-20","Prenatal Consultation"); 



DROP TABLE users;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(8) NOT NULL,
  `login` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj02e0a999c50b1f88df7a8f5a04e1b76b35ea6a88","1","September 22, 2019, 4:20 am","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4","1","September 13, 2019, 8:43 pm","July 29, 2019","3:01 am"); 
INSERT INTO users VALUES("26","Jesse Franco Latosa","dfdfdadf","Nurse","doctor101","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","October 4, 2019, 2:47 am","September 20, 2019","12:25 am"); 
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","October 5, 2019, 12:56 am","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("28","Manilyn V. Jimera","343433434","Nurse","nurse101","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj5b18b25be6c088cda0cc33754c98966b151312f6","1","","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("29","Imelita 0. Anjao","345343","Midwife","midwife101","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60f94e5eec92755f216e913ccb9f1851037ba194","1","","September 22, 2019","4:02 am"); 
INSERT INTO users VALUES("30","Arian M. Garcia","3487y98u9","Midwife","midwife","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjb2f3e1167949b5ee9c5b25b3894cbc542f7878c7","1","","September 22, 2019","4:02 am"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("205","26","dispensed 4 Paracetamol to Emmanuel James Tan","September 20, 2019 11:34 am"); 
INSERT INTO users_activity_log VALUES("206","26","Registered Nathaniel Ventor as new Patient","September 20, 2019 - 2:14 pm"); 
INSERT INTO users_activity_log VALUES("207","26","Registered Jan Mark Ballados as new Patient","September 20, 2019 - 2:16 pm"); 
INSERT INTO users_activity_log VALUES("208","26","Added dfd as new medicine","September 20, 2019 - 11:02 pm"); 
INSERT INTO users_activity_log VALUES("209","26","Added dfdf as new medicine","September 20, 2019 - 11:18 pm"); 
INSERT INTO users_activity_log VALUES("210","26","Added dfdf as new medicine","September 20, 2019 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("211","26","Added dfd as new medicine","September 20, 2019 - 11:22 pm"); 
INSERT INTO users_activity_log VALUES("212","26","Added dfdfssss as new medicine","September 20, 2019 - 11:24 pm"); 
INSERT INTO users_activity_log VALUES("213","26","Added dfdaaaa as new medicine","September 20, 2019 - 11:28 pm"); 
INSERT INTO users_activity_log VALUES("214","26","Added dfd as new medicine","September 20, 2019 - 11:29 pm"); 
INSERT INTO users_activity_log VALUES("215","26","Edited Dennzel Cuachon Patient Profile","September 21, 2019 - 11:05 am"); 
INSERT INTO users_activity_log VALUES("216","57","dispensed 3 1 to Daniel Andrew Go","September 22, 2019 12:11 am"); 
INSERT INTO users_activity_log VALUES("217","57","dispensed 3 2 to Jesse Franco Latosa","September 22, 2019 12:11 am"); 
INSERT INTO users_activity_log VALUES("218","26","Added Diana Rose S. Laput as New User","September 22, 2019 - 4:01 am"); 
INSERT INTO users_activity_log VALUES("219","26","Added Manilyn V. Jimera as New User","September 22, 2019 - 4:01 am"); 
INSERT INTO users_activity_log VALUES("220","26","Added Imelita 0. Anjao as New User","September 22, 2019 - 4:02 am"); 
INSERT INTO users_activity_log VALUES("221","26","Added Arian M. Garcia as New User","September 22, 2019 - 4:02 am"); 
INSERT INTO users_activity_log VALUES("222","26","Updated account of Diana Rose S. Laput","September 22, 2019 - 4:03 am"); 
INSERT INTO users_activity_log VALUES("223","26","Updated account of Diana Rose S. Laput","September 22, 2019 - 4:05 am"); 
INSERT INTO users_activity_log VALUES("224","27","Updated account of Diana Rose S. Laput","September 22, 2019 - 4:08 am"); 
INSERT INTO users_activity_log VALUES("225","27","Updated account of Daniel Andrew Go","September 22, 2019 - 4:08 am"); 
INSERT INTO users_activity_log VALUES("226","23","Updated account of Jesse Franco Latosa","September 22, 2019 - 4:13 am"); 
INSERT INTO users_activity_log VALUES("227","23","Updated account of Jesse Franco Latosa","September 22, 2019 - 4:13 am"); 
INSERT INTO users_activity_log VALUES("228","23","Updated account of Jesse Franco Latosa","September 22, 2019 - 4:13 am"); 
INSERT INTO users_activity_log VALUES("229","26","Updated account of Daniel Andrew Go","September 22, 2019 - 4:16 am"); 
INSERT INTO users_activity_log VALUES("230","23","Updated account of Daniel Andrew Go","September 22, 2019 - 4:18 am"); 
INSERT INTO users_activity_log VALUES("231","23","Updated account of Daniel Andrew Go","September 22, 2019 - 4:19 am"); 
INSERT INTO users_activity_log VALUES("232","23","Updated account of Daniel Andrew Go","September 22, 2019 - 4:19 am"); 
INSERT INTO users_activity_log VALUES("233","27","dispensed 4 2 to Nathaniel Ventor","September 23, 2019 11:29 am"); 
INSERT INTO users_activity_log VALUES("234","26","Registered Kiszha T. Lauriaga as new Patient","September 23, 2019 - 5:22 pm"); 
INSERT INTO users_activity_log VALUES("235","26","Added Rifampicin 150 mg as new medicine","September 23, 2019 - 5:30 pm"); 
INSERT INTO users_activity_log VALUES("236","26","Added Isoniazid as new medicine","September 23, 2019 - 5:30 pm"); 
INSERT INTO users_activity_log VALUES("237","26","Registered Lolita Villarosa Gerose as new Patient","September 24, 2019 - 3:37 am"); 
INSERT INTO users_activity_log VALUES("238","26","Edited Kiszha T. Lauriaga Patient Profile","September 24, 2019 - 4:23 am"); 
INSERT INTO users_activity_log VALUES("239","26","Edited Kiszha T. Lauriaga Patient Profile","September 24, 2019 - 4:23 am"); 
INSERT INTO users_activity_log VALUES("240","27","dispensed 5 3 to Jan Mark Ballados","September 25, 2019 5:10 am"); 
INSERT INTO users_activity_log VALUES("241","27","dispensed 4 4 to Lolita Villarosa Gerose","September 25, 2019 5:50 am"); 
INSERT INTO users_activity_log VALUES("242","27","dispensed 3 4 to John Phillip Dela Cruz","September 25, 2019 5:50 am"); 
INSERT INTO users_activity_log VALUES("243","27","dispensed 3  to Jan Mark Ballados","September 25, 2019 12:56 pm"); 
INSERT INTO users_activity_log VALUES("244","27","dispensed 3  to Lolita Villarosa Gerose","September 25, 2019 12:58 pm"); 
INSERT INTO users_activity_log VALUES("245","27","dispensed 3 Ambroxol to Dennzel Cuachon","September 25, 2019 12:59 pm"); 
INSERT INTO users_activity_log VALUES("246","26","Added Rifapentine as new medicine","September 27, 2019 - 1:47 am"); 
INSERT INTO users_activity_log VALUES("247","27","Registered Lolita Villarosa Gerose as new Patient","September 30, 2019 - 12:15 pm"); 
INSERT INTO users_activity_log VALUES("248","27","Registered Lolita Villarosa Gerose as new Patient","September 30, 2019 - 12:21 pm"); 
INSERT INTO users_activity_log VALUES("249","27","Registered Lolita Villarosa Gerose as new Patient","September 30, 2019 - 12:32 pm"); 
INSERT INTO users_activity_log VALUES("250","27","Registered Sdfsg as new Patient","September 30, 2019 - 12:35 pm"); 
INSERT INTO users_activity_log VALUES("251","26","Registered Lolita Villarosa Gerose as new Patient","September 30, 2019 - 1:13 pm"); 
INSERT INTO users_activity_log VALUES("252","26","Registered Daniel Andrew Go as new Patient","September 30, 2019 - 10:07 pm"); 
INSERT INTO users_activity_log VALUES("253","26","Registered Bernard Bermo as new Patient","September 30, 2019 - 10:12 pm"); 
INSERT INTO users_activity_log VALUES("254","27","Edited Daniel Andrew Gos Patient Profile","October 1, 2019 - 2:34 am"); 
INSERT INTO users_activity_log VALUES("255","27","Edited Daniel Andrew Gos Patient Profile","October 1, 2019 - 2:34 am"); 
INSERT INTO users_activity_log VALUES("256","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:34 am"); 
INSERT INTO users_activity_log VALUES("257","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:34 am"); 
INSERT INTO users_activity_log VALUES("258","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:37 am"); 
INSERT INTO users_activity_log VALUES("259","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:37 am"); 
INSERT INTO users_activity_log VALUES("260","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:38 am"); 
INSERT INTO users_activity_log VALUES("261","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:38 am"); 
INSERT INTO users_activity_log VALUES("262","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:41 am"); 
INSERT INTO users_activity_log VALUES("263","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:41 am"); 
INSERT INTO users_activity_log VALUES("264","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:42 am"); 
INSERT INTO users_activity_log VALUES("265","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:42 am"); 
INSERT INTO users_activity_log VALUES("266","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:43 am"); 
INSERT INTO users_activity_log VALUES("267","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:43 am"); 
INSERT INTO users_activity_log VALUES("268","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:43 am"); 
INSERT INTO users_activity_log VALUES("269","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:43 am"); 
INSERT INTO users_activity_log VALUES("270","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:51 am"); 
INSERT INTO users_activity_log VALUES("271","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:51 am"); 
INSERT INTO users_activity_log VALUES("272","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:52 am"); 
INSERT INTO users_activity_log VALUES("273","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:52 am"); 
INSERT INTO users_activity_log VALUES("274","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:54 am"); 
INSERT INTO users_activity_log VALUES("275","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:54 am"); 
INSERT INTO users_activity_log VALUES("276","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:55 am"); 
INSERT INTO users_activity_log VALUES("277","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:55 am"); 
INSERT INTO users_activity_log VALUES("278","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:58 am"); 
INSERT INTO users_activity_log VALUES("279","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:58 am"); 
INSERT INTO users_activity_log VALUES("280","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:58 am"); 
INSERT INTO users_activity_log VALUES("281","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 2:58 am"); 
INSERT INTO users_activity_log VALUES("282","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:01 am"); 
INSERT INTO users_activity_log VALUES("283","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:01 am"); 
INSERT INTO users_activity_log VALUES("284","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:03 am"); 
INSERT INTO users_activity_log VALUES("285","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:03 am"); 
INSERT INTO users_activity_log VALUES("286","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:04 am"); 
INSERT INTO users_activity_log VALUES("287","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:04 am"); 
INSERT INTO users_activity_log VALUES("288","27","Edited Daniel Andrew Go9 Patient Profile","October 1, 2019 - 3:04 am"); 
INSERT INTO users_activity_log VALUES("289","27","Edited Daniel Andrew Go9 Patient Profile","October 1, 2019 - 3:04 am"); 
INSERT INTO users_activity_log VALUES("290","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:05 am"); 
INSERT INTO users_activity_log VALUES("291","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:05 am"); 
INSERT INTO users_activity_log VALUES("292","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:08 am"); 
INSERT INTO users_activity_log VALUES("293","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:08 am"); 
INSERT INTO users_activity_log VALUES("294","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:12 am"); 
INSERT INTO users_activity_log VALUES("295","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:12 am"); 
INSERT INTO users_activity_log VALUES("296","27","Edited Daniel Andrew Gos Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("297","27","Edited Daniel Andrew Gos Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("298","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("299","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("300","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("301","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:13 am"); 
INSERT INTO users_activity_log VALUES("302","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:14 am"); 
INSERT INTO users_activity_log VALUES("303","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:14 am"); 
INSERT INTO users_activity_log VALUES("304","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:16 am"); 
INSERT INTO users_activity_log VALUES("305","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:16 am"); 
INSERT INTO users_activity_log VALUES("306","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:16 am"); 
INSERT INTO users_activity_log VALUES("307","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:16 am"); 
INSERT INTO users_activity_log VALUES("308","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:20 am"); 
INSERT INTO users_activity_log VALUES("309","27","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:20 am"); 
INSERT INTO users_activity_log VALUES("310","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:26 am"); 
INSERT INTO users_activity_log VALUES("311","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 3:26 am"); 
INSERT INTO users_activity_log VALUES("312","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 1:33 pm"); 
INSERT INTO users_activity_log VALUES("313","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 1:33 pm"); 
INSERT INTO users_activity_log VALUES("314","26","Registered John Matthew Lorizo as new Patient","October 1, 2019 - 1:59 pm"); 
INSERT INTO users_activity_log VALUES("315","26","Registered Janeil Alcano as new Patient","October 1, 2019 - 2:01 pm"); 
INSERT INTO users_activity_log VALUES("316","26","Edited Janeil Alcano Patient Profile","October 1, 2019 - 2:02 pm"); 
INSERT INTO users_activity_log VALUES("317","26","Edited Janeil Alcano Patient Profile","October 1, 2019 - 2:02 pm"); 
INSERT INTO users_activity_log VALUES("318","26","dispensed 5 Rifampicin 150 mg to Bernard Bermo","October 1, 2019 11:49 pm"); 
INSERT INTO users_activity_log VALUES("319","26","dispensed 3 Ambroxol to Lolita Villarosa Gerose","October 1, 2019 11:56 pm"); 
INSERT INTO users_activity_log VALUES("320","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 11:57 pm"); 
INSERT INTO users_activity_log VALUES("321","26","Edited Daniel Andrew Go Patient Profile","October 1, 2019 - 11:57 pm"); 
INSERT INTO users_activity_log VALUES("322","26","dispensed 3 Ambroxol to Lolita Villarosa Gerose","October 3, 2019 3:09 pm"); 
INSERT INTO users_activity_log VALUES("323","26","dispensed 1 Cefalexin 250  to Daniel Andrew Go","October 3, 2019 3:15 pm"); 
INSERT INTO users_activity_log VALUES("324","27","Updated account of Diana Rose S. Laput","October 4, 2019 - 2:53 am"); 



DROP TABLE xpert_mtb_examination;

CREATE TABLE `xpert_mtb_examination` (
  `xpert_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_examined` varchar(30) NOT NULL,
  `laboratory_number` varchar(30) NOT NULL,
  `visual_appearance` varchar(30) NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `date_released` varchar(30) NOT NULL,
  `result` varchar(2) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`xpert_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO xpert_mtb_examination VALUES("1","2017-11-26","12","Good","Dr. Haro","2017-11-26","T","1","Nov","2017"); 
INSERT INTO xpert_mtb_examination VALUES("2","2017-12-06","1256","Salivary","Dr","2017-12-06","TI","19","Dec","2017"); 
INSERT INTO xpert_mtb_examination VALUES("3","2017-12-13","1065","Salivary","Dr. Haro","2017-12-13","RR","11","Dec","2017"); 
INSERT INTO xpert_mtb_examination VALUES("4","2018-01-04","1064","Salivary","Boots","2018-01-04","T","26","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("5","2018-01-06","1064","Salivary","Arianne Torres","2018-01-05","T","26","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("6","2018-01-04","1064","Salivary","Jay Alvin Galoyo","2018-01-05","T","7","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("7","2018-01-10","12","Salivary","wqeqw","2018-01-10","TI","21","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("8","2018-01-02","12","Salivary","gabriel","2018-01-02","RR","2","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("9","2018-01-12","1090","Muco-Purulent","Alvin Yanson","2018-01-09","T","3","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("10","0000-00-00","","","","0000-00-00","","9","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("11","2018-01-10","78","Salivary","Dr Hans","2018-01-17","RR","6","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("12","2018-01-12","100","Muco-Purulent","Dr. Leonel Entes","2018-01-12","T","8","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("13","2018-01-10","10","Muco-Purulent","Dr. Daniel Molabin","2018-01-10","T","57","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("14","2018-01-12","12","Muco-Purulent","Dr. Alson John Bayon-on","2018-01-12","RR","66","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("15","2018-01-12","11","Muco-Purulent","Dr. Alvin Yanson","2018-01-12","T","65","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("16","2018-01-12","10","Muco-Purulent","Dr. Carl Betio","2018-01-12","TI","61","Jan","2018"); 
INSERT INTO xpert_mtb_examination VALUES("17","2018-02-08","100","Muco-Purulent","Dr. Haro","2018-02-08","RR","1","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("18","2018-02-18","100","Muco-Purulent","Dr. Alvin","2018-02-18","T","59","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("19","2018-02-01","012345","Salivary","ewewewe@#$","2018-02-23","N","59","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("20","2018-02-24","100","Salivary","Dr. Alvin Yanson","2018-02-23","T","99","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("21","2018-02-25","100","Muco-Purulent","Dr. Elmer Haro","2018-02-23","T","61","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("22","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","186","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("23","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","185","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("24","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-27","RR","190","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("25","2018-02-27","199","Muco-Purulent","Dr. Elmer Haro","2018-02-27","T","192","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("26","2018-02-28","100","Muco-Purulent","Leonel Entes","2018-02-28","T","175","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("27","2018-02-27","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","188","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("28","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","1","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("29","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","T","73","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("30","2018-02-28","100","Muco-Purulent","Dr. Elmer Haro","2018-02-28","RR","2","Feb","2018"); 
INSERT INTO xpert_mtb_examination VALUES("31","2018-03-03","100","Muco-Purulent","Dr. Leonel Entes","2018-03-03","T","198","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("32","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","53","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("33","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-06","RR","83","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("34","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","72","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("35","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-05","T","189","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("36","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-05","RR","182","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("37","2018-03-05","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-05","RR","67","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("38","2018-03-05","100","Muco-Purulent","Dr. Leonel Entes","2018-03-06","RR","31","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("39","2018-03-06","100","Muco-Purulent","Dr. Leonel Entes","2018-03-06","T","193","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("40","2018-03-08","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-08","RR","93","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("41","2018-03-09","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-09","T","37","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("42","2018-03-09","100","Muco-Purulent","Dr. Alvin Yanson","2018-03-09","T","35","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("43","2018-03-10","100","Muco-Purulent","Dr. Leonel Entes","2018-03-10","T","32","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("44","2018-03-10","101","Muco-Purulent","Dr. Leonel Entes","2018-03-10","T","172","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("45","2018-03-10","101","Muco-Purulent","Dr. Leonel Entes","2018-03-10","RR","34","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("46","2018-03-10","101","Muco-Purulent","Dr. Leonel Entes","2018-03-10","T","42","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("47","2018-03-10","102","Muco-Purulent","Dr. Leonel Entes","2018-03-10","T","94","Mar","2018"); 
INSERT INTO xpert_mtb_examination VALUES("48","March 11, 2018","100","Muco-Purulent","Dr. Leonel Entes","March 12, 2018","T","6","Mar","2018"); 



