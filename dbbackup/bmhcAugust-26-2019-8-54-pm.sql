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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("1","22","Export","July 29, 201","2:26 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("2","182","Export","July 29, 201","2:42 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("3","22","Export","July 29, 201","2:45 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("4","22","Export","July 29, 201","2:54 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("5","22","Export","July 29, 201","2:58 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("6","22","Export","July 29, 201","3:01 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("8","22","Import","July 29, 2019","3:40 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("9","22","Export","July 29, 2019","4:17 am","Successfully Exported Database"); 



DROP TABLE follow_up_fp;

CREATE TABLE `follow_up_fp` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `nurse_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `fp_id` int(10) NOT NULL,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE follow_up_prenatal;

CREATE TABLE `follow_up_prenatal` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `nurse_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `prenatal_id` int(10) NOT NULL,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE follow_up_tb;

CREATE TABLE `follow_up_tb` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `nurse_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `tb_id` int(10) NOT NULL,
  `follow_up_date` date NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;




DROP TABLE medication_dispensation;

CREATE TABLE `medication_dispensation` (
  `dispensation_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `date_given` varchar(30) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `received_by` varchar(30) NOT NULL,
  PRIMARY KEY (`dispensation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("9","Alerta","August 12, 2019 - 11:12 pm","Aug","2019","33","Kherrie Tejare"); 
INSERT INTO medication_dispensation VALUES("10","Alerta","August 12, 2019 - 11:14 pm","Aug","2019","5","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("12","Paracetamol","August 12, 2019 - 11:27 pm","Aug","2019","6","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("13","Celine","August 15, 2019 - 11:12 pm","Aug","2019","3","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("15","Celine","August 15, 2019 - 11:30 pm","Aug","2019","4","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("17","Cherifer for Kids","August 16, 2019 - 1:40 am","Aug","2019","6","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("18","Paracetamol","August 24, 2019 - 10:18 pm","Aug","2019","4","Daniel Andrew Go"); 
INSERT INTO medication_dispensation VALUES("19","Alerta","August 25, 2019 - 3:28 pm","Aug","2019","5","Jesse Franco Latosa"); 
INSERT INTO medication_dispensation VALUES("20","Chlorpenamine","August 25, 2019 - 3:30 pm","Aug","2019","5","Jesse Franco Latosa"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(50) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Celine","Syrup","Vitamins C ","July 30, 2019 7:30 am"); 
INSERT INTO medicine VALUES("2","Cherifer for Kids","Syrup","Vitamin C for kids","July 30, 2019 7:35 am"); 
INSERT INTO medicine VALUES("8","Paracetamol","Tablet","Medicine for headache ","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("9","Cecon","Tablet","Vitamin C ","August 3, 2019 12:47 pm"); 
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
  `year` int(20) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("13","Daniel Andrew Go","21","Male","Mansilingan, Bacolod City","1998-10-12","176","09061613101","Negros Occidental","Student","6666666666","Charles Go","362-0323","Registered","2019"); 
INSERT INTO patient VALUES("15","Jesse Franco Latosa","20","Male","Rosario Heights, Bacolod City","1998-08-30","179","09061613101","Negros Occidental","Student","3334343","JFranco Latoza","43343434","Registered","2019"); 
INSERT INTO patient VALUES("16","John Phillip Dela Cruz","21","Male","Handumanan, Bacolod City","1998-01-04","175","09061613101","Negros Occidental","Student","34343434","JP ","3434343434","Registered","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("22","Diana Rose S. Laput","No License","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","August 26, 2019, 8:10 pm","July 29, 2019","2:00 am"); 
INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj1ec558a60b5dda24597816c924776716018caf8b","1","","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4","1","July 29, 2019, 11:39 am","July 29, 2019","3:01 am"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("138","22","Updated account of Diana Rose S. Laput","August 26, 2019 - 8:46 pm"); 



