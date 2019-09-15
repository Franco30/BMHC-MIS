DROP TABLE chicks;

CREATE TABLE `chicks` (
  `chicks_id` int(11) NOT NULL AUTO_INCREMENT,
  `chicksname` varchar(30) NOT NULL,
  `fblink` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `beautypercentage` int(100) NOT NULL,
  PRIMARY KEY (`chicks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO chicks VALUES("45","Darriene Gayle Dusaran","https://www.facebook.com/darrienegayle.dusaran","https://www.instagram.com/gayle_du/","80"); 
INSERT INTO chicks VALUES("51","Kherrie Tejare","https://www.facebook.com/kherrieluchi.tejare","https://www.instagram.com/_kherriebels/","100"); 
INSERT INTO chicks VALUES("56","Franze Beatriz Caballero","https://www.facebook.com/franzefries","https://www.instagram.com/franzebeatriz/","90"); 
INSERT INTO chicks VALUES("57"," Juliana Gevela Llaguno","https://www.facebook.com/Julillaguno13","https://www.instagram.com/yanaallaguno/","90"); 
INSERT INTO chicks VALUES("58"," Zoe Dominique Gudio","https://www.facebook.com/thedarkzoe","https://www.instagram.com/zoegudio/","90"); 
INSERT INTO chicks VALUES("60","Kate Tejare","https://www.facebook.com/kristine.tejare","https://www.instagram.com/_kateypery/","95"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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



DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `time_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date_time_call` varchar(50) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("34","13","Chlorpenamine","September 7, 2019","7:43 pm","Sep","2019","5","September 7, 2019 7:43 pm"); 
INSERT INTO medication_dispensation VALUES("35","15","Cecon","September 7, 2019","7:43 pm","Sep","2019","3","September 7, 2019 7:43 pm"); 
INSERT INTO medication_dispensation VALUES("36","16","Celine","September 7, 2019","7:43 pm","Sep","2019","3","September 7, 2019 7:43 pm"); 
INSERT INTO medication_dispensation VALUES("37","13","Cherifer for Kids","September 8, 2019","8:54 pm","Sep","2019","5","September 8, 2019 8:54 pm"); 
INSERT INTO medication_dispensation VALUES("38","17","Paracetamol","September 8, 2019","11:21 pm","Sep","2019","4","September 8, 2019 11:21 pm"); 
INSERT INTO medication_dispensation VALUES("39","18","Claritin","September 15, 2019","4:40 pm","Sep","2019","3","September 15, 2019 4:40 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("8","Paracetamol","Tablet","Medicine for headache","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("14","Claritin","Tablet","Anti Allergy","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("15","Chlorpenamine","Tablet","Anti Allergy","August 11, 2019 11:44 pm"); 



DROP TABLE patient;

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `height` int(10) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("13","Daniel Andrew Go","21","Male","Mansilingan, Bacolod City","1998-10-12","176","09061613101","Negros Occidental","Student","6666666666","Charles Go","362-0323","Registered","Jun","2019"); 
INSERT INTO patient VALUES("15","Jesse Franco Latosa","21","Male","Rosario Heights, Bacolod City","1998-08-30","179","09061613101","Negros Occidental","Student","11111","JFranco Latoza","43343434","Registered","Aug","2019"); 
INSERT INTO patient VALUES("16","John Phillip Dela Cruz","21","Male","Handumanan, Bacolod City","1998-01-04","175","09061613101","Negros Occidental","Student","34343434","JP ","3434343434","Registered","Jul","2019"); 
INSERT INTO patient VALUES("17","Joshua Caesar Villarin","24","Male","Taculing, Bacolod City","1995-06-12","176","09061613101","Negros Occidental","Student","343434634353434","Imong Mama","343453543343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("18","Dennzel Cuachon","23","Male","Libertad, Bacolod City","1996-11-01","175","454654545","Negros Occidental","Student","4535444545","Iyang Mama","3444565545","Registered","Sep","2018"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO tb_follow_up VALUES("1","22","15","2019-08-30","Balik di "); 
INSERT INTO tb_follow_up VALUES("2","22","15","2019-08-31","Balik di "); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("22","Diana Rose S. Laput","No License","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","September 15, 2019, 4:36 pm","July 29, 2019","2:00 am"); 
INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj1ec558a60b5dda24597816c924776716018caf8b","1","September 13, 2019, 8:34 pm","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4","1","September 13, 2019, 8:43 pm","July 29, 2019","3:01 am"); 
INSERT INTO users VALUES("25","Alvin Yanson","3434343","BHW","alvin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjdbfae182325f28d02fd58d5db753e12dce2e7fe9","1","September 7, 2019, 11:24 am","September 7, 2019","11:23 am"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("138","22","Updated account of Diana Rose S. Laput","August 26, 2019 - 8:46 pm"); 
INSERT INTO users_activity_log VALUES("139","22","Updated account of Diana Rose S. Laput","September 2, 2019 - 12:33 pm"); 
INSERT INTO users_activity_log VALUES("140","22","dispensed 8 Paracetamol to Daniel Andrew Go","September 2, 2019 - 12:39 pm"); 
INSERT INTO users_activity_log VALUES("141","22","dispensed 5 Paracetamol to Daniel Andrew Go","September 4, 2019 - 8:46 pm"); 
INSERT INTO users_activity_log VALUES("142","22","Deactivated User Account","September 4, 2019 - 8:57 pm"); 
INSERT INTO users_activity_log VALUES("143","22","Activated User Account","September 4, 2019 - 8:58 pm"); 
INSERT INTO users_activity_log VALUES("144","22","Added dfdfdf as new medicine","September 4, 2019 - 9:04 pm"); 
INSERT INTO users_activity_log VALUES("145","22","Registered bvbv as new patient","September 4, 2019 - 10:07 pm"); 
INSERT INTO users_activity_log VALUES("146","22","Registered dfdf as new Patient","September 4, 2019 - 11:03 pm"); 
INSERT INTO users_activity_log VALUES("147","22","Edited Jesse Franco Latosa Profile","September 5, 2019 - 10:28 pm"); 
INSERT INTO users_activity_log VALUES("148","22","Edited Jesse Franco Latosa Profile","September 5, 2019 - 10:28 pm"); 
INSERT INTO users_activity_log VALUES("149","22","Edited Alvin Yanson Profile","September 5, 2019 - 10:29 pm"); 
INSERT INTO users_activity_log VALUES("150","22","Edited Jesse Franco Latosa Profile","September 5, 2019 - 10:31 pm"); 
INSERT INTO users_activity_log VALUES("151","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:43 pm"); 
INSERT INTO users_activity_log VALUES("152","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:43 pm"); 
INSERT INTO users_activity_log VALUES("153","22","Edited Jesse Francvcvc Patient Profile","September 5, 2019 - 10:44 pm"); 
INSERT INTO users_activity_log VALUES("154","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:45 pm"); 
INSERT INTO users_activity_log VALUES("155","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:45 pm"); 
INSERT INTO users_activity_log VALUES("156","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:46 pm"); 
INSERT INTO users_activity_log VALUES("157","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:48 pm"); 
INSERT INTO users_activity_log VALUES("158","22","Edited Jesse Franco Latosaererer Patient Profile","September 5, 2019 - 10:48 pm"); 
INSERT INTO users_activity_log VALUES("159","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:48 pm"); 
INSERT INTO users_activity_log VALUES("160","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("161","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("162","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("163","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("164","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:51 pm"); 
INSERT INTO users_activity_log VALUES("165","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:54 pm"); 
INSERT INTO users_activity_log VALUES("166","22","Edited Jesse Franco Latosa Patient Profile","September 5, 2019 - 10:55 pm"); 
INSERT INTO users_activity_log VALUES("167","22","Edited Daniel Andrew Go Patient Profile","September 5, 2019 - 10:56 pm"); 
INSERT INTO users_activity_log VALUES("168","22","Edited Daniel Andrew Go Patient Profile","September 5, 2019 - 11:01 pm"); 
INSERT INTO users_activity_log VALUES("169","22","Edited Daniel Andrew Go Patient Profile","September 5, 2019 - 11:01 pm"); 
INSERT INTO users_activity_log VALUES("170","22","Edited Daniel Andrew Go Patient Profile","September 5, 2019 - 11:02 pm"); 
INSERT INTO users_activity_log VALUES("171","22","Updated account of Daniel Andrew Go","September 5, 2019 - 11:03 pm"); 
INSERT INTO users_activity_log VALUES("172","23","dispensed 5 Celine to John Phillip Dela Cruz","September 5, 2019 - 11:10 pm"); 
INSERT INTO users_activity_log VALUES("173","22","dispensed 5 Paracetamol to Daniel Andrew Go","September 6, 2019 - 12:05 pm"); 
INSERT INTO users_activity_log VALUES("174","22","Edited Daniel Andrew Go Patient Profile","September 7, 2019 - 10:40 am"); 
INSERT INTO users_activity_log VALUES("175","22","Updated account of Diana Rose S. Laput","September 7, 2019 - 11:14 am"); 
INSERT INTO users_activity_log VALUES("176","22","Added Alvin Yanson as New User","September 7, 2019 - 11:23 am"); 
INSERT INTO users_activity_log VALUES("177","22","dispensed 3 Paracetamol to 13","September 7, 2019 - 11:36 am"); 
INSERT INTO users_activity_log VALUES("178","22","dispensed 5 Cherifer for Kids to 15","September 7, 2019 - 11:46 am"); 
INSERT INTO users_activity_log VALUES("179","22","dispensed 1 Paracetamol to 15","September 7, 2019 - 5:19 pm"); 
INSERT INTO users_activity_log VALUES("180","22","dispensed 5 Celine to 16","September 7, 2019 - 5:33 pm"); 
INSERT INTO users_activity_log VALUES("181","22","dispensed 10 Claritin to 15","September 7, 2019 - 6:28 pm"); 
INSERT INTO users_activity_log VALUES("182","22","dispensed 4 Celine to 13","September 7, 2019 - 7:04 pm"); 
INSERT INTO users_activity_log VALUES("183","22","dispensed 3 Cherifer for Kids to 13","September 7, 2019 - 7:30 pm"); 
INSERT INTO users_activity_log VALUES("184","22","dispensed 3 Celine to 13","September 7, 2019 - 7:36 pm"); 
INSERT INTO users_activity_log VALUES("185","22","dispensed 3 Paracetamol to 13","2019-09-07 7:40:09 pm"); 
INSERT INTO users_activity_log VALUES("186","22","dispensed 5 Chlorpenamine to 13","September 7, 2019 7:43 pm"); 
INSERT INTO users_activity_log VALUES("187","22","dispensed 3 Cecon to 15","September 7, 2019 7:43 pm"); 
INSERT INTO users_activity_log VALUES("188","22","dispensed 3 Celine to 16","September 7, 2019 7:43 pm"); 
INSERT INTO users_activity_log VALUES("189","57","Edited Daniel Andrew Go Patient Profile","September 7, 2019 - 7:53 pm"); 
INSERT INTO users_activity_log VALUES("190","22","dispensed 5 Cherifer for Kids to 13","September 8, 2019 8:54 pm"); 
INSERT INTO users_activity_log VALUES("191","22","Registered Joshua Caesar Villarin as new Patient","September 8, 2019 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("192","22","dispensed 4 Paracetamol to 17","September 8, 2019 11:21 pm"); 
INSERT INTO users_activity_log VALUES("193","22","Registered Dennzel Cuachon as new Patient","September 8, 2019 - 11:43 pm"); 
INSERT INTO users_activity_log VALUES("194","22","Edited Dennzel Cuachon Patient Profile","September 8, 2019 - 11:46 pm"); 
INSERT INTO users_activity_log VALUES("195","22","Deactivated User Account","September 13, 2019 - 8:42 pm"); 
INSERT INTO users_activity_log VALUES("196","22","Activated User Account","September 13, 2019 - 8:42 pm"); 
INSERT INTO users_activity_log VALUES("197","22","dispensed 3 Claritin to 18","September 15, 2019 4:40 pm"); 



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



