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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("3","27","Export","September 22, 2019","11:17 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("4","26","Export","September 24, 2019","4:23 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("5","27","Export","September 25, 2019","12:50 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("6","27","Export","October 3, 2019","4:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("7","27","Export","October 4, 2019","3:23 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("8","27","Export","October 4, 2019","12:27 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("9","27","Export","October 5, 2019","1:44 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("10","27","Export","October 5, 2019","1:44 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("11","27","Export","October 11, 2019","3:07 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("12","28","Export","October 11, 2019","3:13 am","Successfully Exported Database"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("2","4","2","TB Medicine","October 1, 2019","11:56 pm","Oct","2019","3","October 1, 2019 11:56 pm"); 
INSERT INTO medication_dispensation VALUES("3","4","2","Consultation","October 3, 2019","3:09 pm","Oct","2019","3","October 3, 2019 3:09 pm"); 
INSERT INTO medication_dispensation VALUES("4","5","3","TB Medicine","October 3, 2019","3:15 pm","Oct","2019","1","October 3, 2019 3:15 pm"); 
INSERT INTO medication_dispensation VALUES("5","7","2","Consultation","October 11, 2019","1:20 am","Oct","2019","5","October 11, 2019 1:20 am"); 
INSERT INTO medication_dispensation VALUES("7","7","1","TB Medicine","October 11, 2019","1:20 am","Oct","2019","5","October 11, 2019 1:20 am"); 
INSERT INTO medication_dispensation VALUES("8","9","1","Consultation","October 11, 2019","1:32 am","Oct","2019","3","October 11, 2019 1:32 am"); 
INSERT INTO medication_dispensation VALUES("9","8","3","Consultation","October 11, 2019","1:49 am","Oct","2019","100","October 11, 2019 1:49 am"); 
INSERT INTO medication_dispensation VALUES("10","9","1","Consultation","October 11, 2019","2:37 am","Oct","2019","10","October 11, 2019 2:37 am"); 
INSERT INTO medication_dispensation VALUES("11","7","1","Consultation","October 11, 2019","2:38 am","Oct","2019","10","October 11, 2019 2:38 am"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_description` varchar(100) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Ceterizine","Tablet","","24","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("2","Ambroxol","Tablet","","24","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","","16","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","TB medicine","25","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","TB medicine","20","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Rifapentine is known as a rifamycin antibiotic. It works by stopping the growth of bacteria.","20","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("7","Claritin","Tablet","Anti Allergy","25","October 11, 2019 - 2:04 am"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("60","3","50","October 11, 2019 1:39 am"); 
INSERT INTO medicine_stocks VALUES("61","1","20","October 11, 2019 1:47 am"); 
INSERT INTO medicine_stocks VALUES("62","7","15","October 11, 2019 2:40 am"); 
INSERT INTO medicine_stocks VALUES("63","7","10","October 11, 2019 2:40 am"); 
INSERT INTO medicine_stocks VALUES("64","2","5","October 11, 2019 3:04 am"); 
INSERT INTO medicine_stocks VALUES("66","2","4","October 11, 2019 3:09 am"); 
INSERT INTO medicine_stocks VALUES("67","4","5","October 11, 2019 3:10 am"); 



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



DROP TABLE prenatal_follow_up;

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO prenatal_follow_up VALUES("3","27","4","2019-10-20","Prenatal Consultation"); 



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
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","October 11, 2019, 1:45 am","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("28","Manilyn V. Jimera","343433434","Nurse","nurse101","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj5b18b25be6c088cda0cc33754c98966b151312f6","1","October 11, 2019, 3:11 am","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("29","Imelita 0. Anjao","345343","Midwife","midwife101","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60f94e5eec92755f216e913ccb9f1851037ba194","1","","September 22, 2019","4:02 am"); 
INSERT INTO users VALUES("30","Arian M. Garcia","3487y98u9","Midwife","midwife","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjb2f3e1167949b5ee9c5b25b3894cbc542f7878c7","1","","September 22, 2019","4:02 am"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("339","27","added 20 pieces of 1 to stocks","October 11, 2019 1:47 am"); 
INSERT INTO users_activity_log VALUES("340","27","dispensed 100 Cefalexin 250  to Janeil Alcano","October 11, 2019 1:49 am"); 
INSERT INTO users_activity_log VALUES("341","27","Added Claritin as new medicine","October 11, 2019 - 2:04 am"); 
INSERT INTO users_activity_log VALUES("342","27","dispensed 10 Ceterizine to Margarita Diana","October 11, 2019 2:37 am"); 
INSERT INTO users_activity_log VALUES("343","27","dispensed 10 Ceterizine to John Matthew Lorizo","October 11, 2019 2:38 am"); 
INSERT INTO users_activity_log VALUES("344","27","added 15 pieces of 7 to stocks","October 11, 2019 2:40 am"); 
INSERT INTO users_activity_log VALUES("345","27","added 10 pieces of 7 to stocks","October 11, 2019 2:40 am"); 
INSERT INTO users_activity_log VALUES("346","27","added 5 pieces of 2 to stocks","October 11, 2019 3:04 am"); 
INSERT INTO users_activity_log VALUES("347","27","added 4 pieces of 1 to stocks","October 11, 2019 3:08 am"); 
INSERT INTO users_activity_log VALUES("348","27","added 4 pieces of  to stocks","October 11, 2019 3:09 am"); 
INSERT INTO users_activity_log VALUES("349","27","added 5 pieces of Rifampicin 150 mg to stocks","October 11, 2019 3:10 am"); 



