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
  `date` varchar(30) NOT NULL,
  `head_of_the_family` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `pe_findings` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `lab_request` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`consultation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("1","4","October 24, 2019","Tatay","78","130/50","37.50","28","80","Reklamo","Nag P.E kag nag Findings","bulong","requst sa property kung mayu ulo mo","Oct","2019","No Prescription","October 24, 2019 - 09:34 am"); 
INSERT INTO consultation VALUES("2","4","October 24, 2019","Tatay","78","130/50","37.50","28","80","Reklamo","Nag P.E kag nag Findings","bulong","requst sa property kung mayu ulo mo","Oct","2019","With Prescription","October 24, 2019 - 09:34 am"); 
INSERT INTO consultation VALUES("3","4","October 20, 2019","Tatay","78","130/50","37.50","28","80","Reklamo","Nag P.E kag nag Findings","bulong","requst sa property kung mayu ulo mo","Oct","2019","With Prescription","October 24, 2019 - 09:34 am"); 
INSERT INTO consultation VALUES("5","12","October 24, 2019","Salvador Latosa","58","130/50","37.5","28","80","Sakit Tiyan","NONE","NONE","NONE","Oct","2019","No Prescription","October 24, 2019 - 09:34 am"); 
INSERT INTO consultation VALUES("6","5","October 24, 2019","Daddy","60","130/80","37.5","28","89","Allergy","NONE","NONE","NONE","Oct","2019","No Prescription","October 24, 2019 - 09:34 am"); 
INSERT INTO consultation VALUES("7","11","October 25, 2019","Mommy Cuachon","80","170/80","37.5","28","80","Sakit Itlog","NONE","NONE","NONE","Oct","2019","No Prescription","October 25, 2019 - 11:34 am"); 
INSERT INTO consultation VALUES("8","20","November 02, 2019","Franco","60","120/80","45.3","100","200","Sex","Sex","Sex","Sex","Nov","2019","No Prescription","November 2, 2019 - 11:52 am"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
INSERT INTO db_backup VALUES("13","28","Export","October 11, 2019","3:17 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("14","27","Import","October 24, 2019","6:13 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("15","27","Export","October 26, 2019","11:43 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("16","27","Export","October 26, 2019","12:44 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("17","27","Export","October 26, 2019","3:02 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("18","27","Export","October 26, 2019","4:54 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("19","27","Export","October 26, 2019","8:36 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("20","27","Import","October 27, 2019","9:15 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("21","182","Export","November 2, 2019","12:32 pm","Successfully Exported Database"); 



DROP TABLE family_planning;

CREATE TABLE `family_planning` (
  `family_planning_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(30) NOT NULL,
  `type_of_acceptor` varchar(50) NOT NULL,
  `prev_used_method` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `patient_highest_education` varchar(100) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `spouse_birthdate` varchar(50) NOT NULL,
  `spouse_highest_education` varchar(50) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `average_monthly_income` varchar(100) NOT NULL,
  `no_of_living_children` varchar(50) NOT NULL,
  `plan_more_children` varchar(30) NOT NULL,
  `reason_for_practicing_fp` varchar(100) NOT NULL,
  `method_accepted` varchar(200) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`family_planning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("34","20","New to the Program","Pills","October 31, 2019 10:42 PM","College","Jesse Franco Latosa","August 30, 1998","College","Programmer","120000","1","Yes","For Thesis Purposes","COC, Contraceptive patch, LAM, Billings/Cervical Mucus/Ovulatino Method, Sympto-thermal","Nov","2019"); 
INSERT INTO family_planning VALUES("35","4","Continuing User","Pills","October 31, 2019 10:47 PM","High School","Marvin Gerose","August 13, 1974","College","Sr. Businessman","10000","7","Yes","Limiting or Spacing","IUD, BTL, VSC, LAM, SDM","Nov","2019"); 
INSERT INTO family_planning VALUES("36","10","New to the Program","Pills","October 31, 2019 11:09 PM","College","Ronjay Buenafuente","May 06, 1969","College","Accountant","124000","1","Yes","Try lang","Condom, IUD, BTL, LAM","Nov","2019"); 
INSERT INTO family_planning VALUES("37","20","Continuing User","Pills","November 02, 2019 11:25 AM","College","Franco","August 30, 2019","College","IT","30000","1","Yes","Sample","Contraceptive patch, POP, Injectable, Condom, IUD, Billings/Cervical Mucus/Ovulatino Method, Sympto-thermal","Nov","2019"); 



DROP TABLE fp_follow_up;

CREATE TABLE `fp_follow_up` (
  `fp_follow_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `date_service_given` varchar(50) NOT NULL,
  `method_brand` varchar(50) NOT NULL,
  `no_of_units` varchar(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `name_of_provider` varchar(50) NOT NULL,
  `next_service_date` varchar(50) NOT NULL,
  `follow_up_status` char(30) NOT NULL,
  PRIMARY KEY (`fp_follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO fp_follow_up VALUES("28","10","October 21, 2019","Pills","1Pack","Successful","Manilyn V. Jimera","October 30, 2019","Cancelled"); 
INSERT INTO fp_follow_up VALUES("29","4","October 21, 2019","DILDO KAG KALAPTAN SANG HUSAY","1","aww ahh abi ko ","John Phillip Dela Cruz","October 29, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("30","10","October 28, 2019","Hair Brush Handle","1","NA GWAAN","Jesse Franco Latosa","November 1, 2019","Pending"); 
INSERT INTO fp_follow_up VALUES("31","20","November 12, 2019","dfd","3","dfd","Jesse Franco Latosa","November 1, 2019","Pending"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("2","4","2","TB Medicine","October 1, 2019","11:56 pm","Oct","2019","3","October 1, 2019 11:56 pm"); 
INSERT INTO medication_dispensation VALUES("3","4","2","Consultation","October 3, 2019","3:09 pm","Oct","2019","3","October 3, 2019 3:09 pm"); 
INSERT INTO medication_dispensation VALUES("4","5","3","TB Medicine","October 3, 2019","3:15 pm","Oct","2019","1","October 3, 2019 3:15 pm"); 
INSERT INTO medication_dispensation VALUES("5","7","2","Consultation","October 11, 2019","1:20 am","Oct","2019","5","October 11, 2019 1:20 am"); 
INSERT INTO medication_dispensation VALUES("7","7","1","TB Medicine","October 11, 2019","1:20 am","Oct","2019","5","October 11, 2019 1:20 am"); 
INSERT INTO medication_dispensation VALUES("8","9","1","Consultation","October 11, 2019","1:32 am","Oct","2019","3","October 11, 2019 1:32 am"); 
INSERT INTO medication_dispensation VALUES("9","8","3","Consultation","October 11, 2019","1:49 am","Oct","2019","100","October 11, 2019 1:49 am"); 
INSERT INTO medication_dispensation VALUES("10","9","1","Consultation","October 11, 2019","2:37 am","Oct","2019","10","October 11, 2019 2:37 am"); 
INSERT INTO medication_dispensation VALUES("11","7","1","Consultation","October 11, 2019","2:38 am","Oct","2019","10","October 11, 2019 2:38 am"); 
INSERT INTO medication_dispensation VALUES("12","9","3","Consultation","October 15, 2019","1:11 am","Oct","2019","2","October 15, 2019 1:11 am"); 
INSERT INTO medication_dispensation VALUES("13","14","6","TB Medicine","October 15, 2019","11:00 pm","Oct","2019","14","October 15, 2019 11:00 pm"); 
INSERT INTO medication_dispensation VALUES("15","8","6","Select","October 16, 2019","8:52 am","Oct","2019","4","October 16, 2019 8:52 am"); 
INSERT INTO medication_dispensation VALUES("16","9","6","TB Medicine","October 16, 2019","9:06 am","Oct","2019","2","October 16, 2019 9:06 am"); 
INSERT INTO medication_dispensation VALUES("17","0","6","TB Medicine","October 16, 2019","1:27 pm","Oct","2019","12","October 16, 2019 1:27 pm"); 
INSERT INTO medication_dispensation VALUES("18","8","6","TB Medicine","October 16, 2019","1:42 pm","Oct","2019","13","October 16, 2019 1:42 pm"); 
INSERT INTO medication_dispensation VALUES("19","14","1","Consultation","October 24, 2019","10:30 pm","Oct","2019","25","October 24, 2019 10:30 pm"); 
INSERT INTO medication_dispensation VALUES("20","0","3","Consultation","October 31, 2019","6:25 pm","Oct","2019","5","October 31, 2019 6:25 pm"); 
INSERT INTO medication_dispensation VALUES("21","9","5","Family Planning","October 31, 2019","6:26 pm","Oct","2019","4","October 31, 2019 6:26 pm"); 
INSERT INTO medication_dispensation VALUES("22","8","4","Prenatal","October 31, 2019","6:26 pm","Oct","2019","3","October 31, 2019 6:26 pm"); 
INSERT INTO medication_dispensation VALUES("23","9","8","Consultation","October 31, 2019","6:40 pm","Oct","2019","5","October 31, 2019 6:40 pm"); 
INSERT INTO medication_dispensation VALUES("24","7","6","Prenatal","November 1, 2019","10:56 pm","Nov","2019","3","November 1, 2019 10:56 pm"); 
INSERT INTO medication_dispensation VALUES("25","5","2","Consultation","November 2, 2019","12:29 pm","Nov","2019","23","November 2, 2019 12:29 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_category` varchar(30) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Ceterizine","Tablet","Antihistamines","10","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","1","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","14","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","22","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","19","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","16","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("7","Claritin","Tablet","Antihistamines","25","October 11, 2019 - 2:04 am"); 
INSERT INTO medicine VALUES("8","Celin","Tablet","Vitamins","15","October 25, 2019 - 2:11 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Analgesic","5","October 25, 2019 - 2:14 am"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("60","3","50","October 11, 2019 1:39 am"); 
INSERT INTO medicine_stocks VALUES("61","1","20","October 11, 2019 1:47 am"); 
INSERT INTO medicine_stocks VALUES("62","7","15","October 11, 2019 2:40 am"); 
INSERT INTO medicine_stocks VALUES("63","7","10","October 11, 2019 2:40 am"); 
INSERT INTO medicine_stocks VALUES("64","2","5","October 11, 2019 3:04 am"); 
INSERT INTO medicine_stocks VALUES("66","2","4","October 11, 2019 3:09 am"); 
INSERT INTO medicine_stocks VALUES("67","4","5","October 11, 2019 3:10 am"); 
INSERT INTO medicine_stocks VALUES("68","3","2","October 15, 2019 1:12 am"); 
INSERT INTO medicine_stocks VALUES("69","1","4","October 15, 2019 10:46 pm"); 
INSERT INTO medicine_stocks VALUES("70","1","30","October 16, 2019 8:51 am"); 
INSERT INTO medicine_stocks VALUES("71","6","13","October 16, 2019 1:20 pm"); 
INSERT INTO medicine_stocks VALUES("72","6","13","October 16, 2019 1:29 pm"); 
INSERT INTO medicine_stocks VALUES("73","6","13","October 16, 2019 1:43 pm"); 
INSERT INTO medicine_stocks VALUES("74","6","5","October 24, 2019 10:05 pm"); 
INSERT INTO medicine_stocks VALUES("75","1","5","October 24, 2019 10:30 pm"); 
INSERT INTO medicine_stocks VALUES("76","5","3","October 31, 2019 6:23 pm"); 
INSERT INTO medicine_stocks VALUES("77","3","3","October 31, 2019 6:25 pm"); 
INSERT INTO medicine_stocks VALUES("78","9","5","October 31, 2019 6:39 pm"); 
INSERT INTO medicine_stocks VALUES("79","8","20","October 31, 2019 6:40 pm"); 



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
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Single","53","Female","#54 Area 51, Mansilingan","Kasilingan","July 20, 1966","168","78","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Marvin Gerose","(09) 073773443","Registered","Sep","2019"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","#1 Area 51, Mansilingan","Katilingban","April 14, 1998","176","60","(09) 061613101","Negros Occidental","Student","34-343435343-3","Charles Go","(09) 061613101","Registered","Oct","2019"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","March 10, 1970","174","174","(88) 888888888","Negros Occidental","Farmer","34-343434343-4","Erika Bermo","(30) 303030454","Registered","Oct","2019"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Registered","Oct","2019"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay, Mansilingan","Gauzon","August 23, 2006","174","55","34343434333","Negros Occidental","Student","333333333333","Jona Alcano","33333333454545","Registered","Oct","2019"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Jose Diana","0907377344343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Registered","Sep","2019"); 
INSERT INTO patient VALUES("11","Dennzel Quatchon","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Registered","Dec","2018"); 
INSERT INTO patient VALUES("12","Jesse Franco Latosa","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","67","09061613101","Negros Occidental","Student","343434564546","Salvador Latosa","93939343433","Registered","Nov","2018"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Registered","Aug","2019"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","25","Male","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Renzy Nono","0907377344343","Registered","Jun","2019"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Married","38","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","Rommy Adryx","93939343433","Registered","Jul","2019"); 
INSERT INTO patient VALUES("17","Jan Mark Ballados","Single","24","Male","#3 Area 51, Mansilingan","Kasilingan","June 14, 1995","178","178","(09) 054441414","Negros Occidental","E-Jeep Driver","99-393933393-9","Mark John Ballados","(09) 333434343","Registered","Oct","2019"); 
INSERT INTO patient VALUES("18","Ariane Torres","Single","33","Male","#2 Area 51, Mansilingan","Paglaum","March 19, 1986","170","170","(09) 033434343","Negros Occidental","Teacher","39-333393939-3","Ariane ","(09) 232323232","Registered","Oct","2019"); 
INSERT INTO patient VALUES("19","Kizsha Lauriaga","Single","28","Female","#3 Everlasting, Mansilingan","Kahirup A","August 21, 1991","160","160","(09) 062623232","Negros Occidental","Street Vendor","30-303030303-0","Mark Panabe","(09) 334734343","Registered","Oct","2019"); 
INSERT INTO patient VALUES("20","Windel Mae Nangan Resuma","Single","21","Female","#3 Everlasting, Mansilingan","Kahirup B","May 31, 1998","169","169","(09) 061134343","Negros Occidental","HRM","30-390393030-3","Minda Resuma","(09) 028393434","Registered","Nov","2019"); 



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
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","November 15, 2005","November 15, 2005","4.9","CLMMRH","November 29, 2005","Mabinuligon","#15 Everlasting","Registered","","2019"); 
INSERT INTO patient_child VALUES("4","Jonathan Simmons","Male","Mary Ann Simmons","College","College","J.K Simmons","College","Businessman","June 13, 2007","June 13, 2007","10","CLMH","June 10, 2008","Kasilingan","#3 Sa balota","Registered","Oct","2019"); 
INSERT INTO patient_child VALUES("5","Jamie Lannister","Male","Minda Lannister","College","Medical Technologist","Tywin Lannister","College","Doctor","October 16, 2019","October 16, 2019","10","CLMH","October 31, 2019","Kasilingan","#3 Area 51","Registered","Oct","2019"); 
INSERT INTO patient_child VALUES("6","Arya Stark","Female","Catelyn Stark","College","Teacher","Eddard Stark","College","Artist","October 16, 2019","October 16, 2019","10","CLMH","October 23, 2019","Kasilingan","#3 Area 51","Registered","Oct","2019"); 
INSERT INTO patient_child VALUES("7","Sansa Stark","Female","Catelyn Stark","College","Teacher","Eddard Stark","College","Programmer","October 15, 2019","October 15, 2019","10","CLMH","October 23, 2019","Kahirup B","#3 sa balota","Registered","Oct","2019"); 



DROP TABLE prenatal;

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctors_advice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `presentation` varchar(100) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO prenatal VALUES("1","4","For CBC, urinalysis","2019-23-09","",""); 
INSERT INTO prenatal VALUES("2","10","For CBC, urinalysis","2019-23-09","MICROSOFT POWERPOINT","NAGDADALANG TAE"); 



DROP TABLE prenatal_follow_up;

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `follow_up_status` char(20) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO prenatal_follow_up VALUES("17","27","10","October 28, 2019 9:50 AM","For Verification ang bilat","Cancelled"); 
INSERT INTO prenatal_follow_up VALUES("18","27","10","October 22, 2019 8:25 AM","Sample 2","Done"); 
INSERT INTO prenatal_follow_up VALUES("19","182","4","October 31, 2019 9:00 PM","sample 2","Done"); 
INSERT INTO prenatal_follow_up VALUES("20","27","10","October 26, 2019 8:41 PM","dfd","Pending"); 
INSERT INTO prenatal_follow_up VALUES("21","182","10","October 07, 2019 8:41 PM","dfdf","Cancelled"); 
INSERT INTO prenatal_follow_up VALUES("22","27","4","October 01, 2019 8:41 PM","dfdfd","Done"); 
INSERT INTO prenatal_follow_up VALUES("23","27","10","October 08, 2019 8:41 PM","dfdf","Done"); 



DROP TABLE referral;

CREATE TABLE `referral` (
  `referral_id` int(11) NOT NULL AUTO_INCREMENT,
  `referral_date` varchar(50) NOT NULL,
  `from_clinic` varchar(100) NOT NULL,
  `to_hospital` varchar(100) NOT NULL,
  `origin_address` varchar(100) NOT NULL,
  `destination_address` varchar(100) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `referred_by` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("1","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St, Bacolod, 6100 Negros Occidental","LeBron James","98","180/90","37.5","37","Sakit tiyan, kagat ka ayam, bilatan man","Kawhi Leonard","Sa Tangkal ka Baboy","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral VALUES("2","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St, Bacolod, 6100 Negros Occidental","Anthony Davis","98","180/90","37.5","37","Sakit tiyan, kagat ka ayam, bilatan man","Kawhi Leonard","Sa Tangkal ka Baboy","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral VALUES("4","October 26, 2019","Mansilingan Health Center","Riverside Hospital","Mansilingan, Bacolod City","Lacson St.","Johnny Sins","90","130/50","36.4","38","Sakit itlog kag naga katol ang itlog horny ba","Manilyn V. Jimera","Super Emergency Room","Oct","2019","October 26, 2019 10:10 pm"); 
INSERT INTO referral VALUES("5","October 23, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","James Reid","90","140/40","33.3","33","High Fever","Jesse Franco Latosa","ER","Oct","2019","October 26, 2019 10:12 pm"); 



DROP TABLE referral_prenatal;

CREATE TABLE `referral_prenatal` (
  `referral_id` int(11) NOT NULL AUTO_INCREMENT,
  `referral_date` varchar(50) NOT NULL,
  `from_clinic` varchar(100) NOT NULL,
  `to_hospital` varchar(100) NOT NULL,
  `origin_address` varchar(100) NOT NULL,
  `destination_address` varchar(100) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `gravida` varchar(50) NOT NULL,
  `para` varchar(50) NOT NULL,
  `fh` varchar(50) NOT NULL,
  `fhb` varchar(50) NOT NULL,
  `tt` varchar(50) NOT NULL,
  `given` varchar(50) NOT NULL,
  `referred_by` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO referral_prenatal VALUES("8","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson st.","Kherrie Tejare","50","130/40","37.5","18","Fever","1","1","2","2","TT3","October 22, 2019","Jesse Franco Latosa","Hospital ehh syempre","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral_prenatal VALUES("9","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson st.","Kherrie Tejare","50","130/40","37.5","18","Fever","1","1","2","2","TT3","October 22, 2019","Jesse Franco Latosa","Hospital ehh syempre","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral_prenatal VALUES("10","October 23, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","Franze Beatriz Caballero","78","150/55","37.6","17","Fever","1","1","1","1","TT1","October 22, 2019","Jesse Franco Latosa","E.R.","Oct","2019","October 26, 2019 11:19 pm"); 
INSERT INTO referral_prenatal VALUES("15","October 24, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","Franze Beatriz Caballero","66","150/55","36.6","17","Fever","0","1","1","1","TT3","October 23, 2019","Jesse Franco Latosa","S.R.","Oct","2019","October 26, 2019 11:27 pm"); 



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
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","November 2, 2019, 11:14 am","September 22, 2019","4:01 am"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=631 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("532","27","Edited  Patient Profile","October 28, 2019 - 11:23 pm"); 
INSERT INTO users_activity_log VALUES("533","27","Edited  Patient Profile","October 28, 2019 - 11:36 pm"); 
INSERT INTO users_activity_log VALUES("534","27","Edited  Patient Profile","October 28, 2019 - 11:41 pm"); 
INSERT INTO users_activity_log VALUES("535","27","Edited  Patient Profile","October 28, 2019 - 11:41 pm"); 
INSERT INTO users_activity_log VALUES("536","27","Edited  Patient Profile","October 28, 2019 - 11:41 pm"); 
INSERT INTO users_activity_log VALUES("537","27","Edited  Patient Profile","October 28, 2019 - 11:44 pm"); 
INSERT INTO users_activity_log VALUES("538","27","Edited Hilary Ahmor Sipat Child Patient Profile","October 28, 2019 - 11:47 pm"); 
INSERT INTO users_activity_log VALUES("539","27","Edited Hilary Ahmor Sipat3 Child Patient Profile","October 28, 2019 - 11:48 pm"); 
INSERT INTO users_activity_log VALUES("540","27","Edited Hilary Ahmor Sipat Child Patient Profile","October 28, 2019 - 11:50 pm"); 
INSERT INTO users_activity_log VALUES("541","27","Edited Arya Stark Child Patient Profile","October 28, 2019 - 11:51 pm"); 
INSERT INTO users_activity_log VALUES("542","27","Edited Jamie Lannister Child Patient Profile","October 28, 2019 - 11:52 pm"); 
INSERT INTO users_activity_log VALUES("543","27","Edited Jonathan Simmons Child Patient Profile","October 28, 2019 - 11:53 pm"); 
INSERT INTO users_activity_log VALUES("544","27","Edited Jonathan Simmons Child Patient Profile","October 28, 2019 - 11:56 pm"); 
INSERT INTO users_activity_log VALUES("545","27","Edited Lolita Villarosa Gerose Patient Profile","October 28, 2019 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("546","27","Edited Lolita Villarosa Gerose Patient Profile","October 28, 2019 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("547","27","Edited Lolita Villarosa Gerose Patient Profile","October 28, 2019 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("548","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:00 am"); 
INSERT INTO users_activity_log VALUES("549","27","Edited Dennzel Quatchons Patient Profile","October 29, 2019 - 12:02 am"); 
INSERT INTO users_activity_log VALUES("550","27","Edited Dennzel Quatchons Patient Profile","October 29, 2019 - 12:02 am"); 
INSERT INTO users_activity_log VALUES("551","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:04 am"); 
INSERT INTO users_activity_log VALUES("552","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:04 am"); 
INSERT INTO users_activity_log VALUES("553","27","Edited Daniel Andrew Go Patient Profile","October 29, 2019 - 12:04 am"); 
INSERT INTO users_activity_log VALUES("554","27","Edited Dennzel Quatchon Patient Profile","October 29, 2019 - 12:04 am"); 
INSERT INTO users_activity_log VALUES("555","27","Edited Dennzel Quatchonssssssss Patient Profile","October 29, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("556","27","Edited Dennzel Quatchon Patient Profile","October 29, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("557","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("558","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:06 am"); 
INSERT INTO users_activity_log VALUES("559","27","Edited Janeil Alcano Patient Profile","October 29, 2019 - 12:06 am"); 
INSERT INTO users_activity_log VALUES("560","27","Edited Dennzel Quatchon Patient Profile","October 29, 2019 - 12:07 am"); 
INSERT INTO users_activity_log VALUES("561","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:09 am"); 
INSERT INTO users_activity_log VALUES("562","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:14 am"); 
INSERT INTO users_activity_log VALUES("563","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:20 am"); 
INSERT INTO users_activity_log VALUES("564","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:20 am"); 
INSERT INTO users_activity_log VALUES("565","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:25 am"); 
INSERT INTO users_activity_log VALUES("566","27","Edited Rommel Adricula Patient Profile","October 29, 2019 - 12:25 am"); 
INSERT INTO users_activity_log VALUES("567","27","Edited Rommel Adricula Patient Profile","October 29, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("568","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("569","27","Edited Lolita Villarosa Gerose Patient Profile","October 29, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("570","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:35 am"); 
INSERT INTO users_activity_log VALUES("571","27","Edited Arya Stark Child Patient Profile","October 29, 2019 - 12:37 am"); 
INSERT INTO users_activity_log VALUES("572","27","Edited Kizsha Lauriaga Patient Profile","October 29, 2019 - 12:44 am"); 
INSERT INTO users_activity_log VALUES("573","27","Updated the Prenatal follow-up date for Lolita Villarosa Gerose","October 30, 2019 - 9:00 pm"); 
INSERT INTO users_activity_log VALUES("574","27","Updated the Prenatal follow-up date for Mercy Buenafuente","October 30, 2019 - 9:00 pm"); 
INSERT INTO users_activity_log VALUES("575","27","Updated the Prenatal follow-up date for Mercy Buenafuente","October 30, 2019 - 9:00 pm"); 
INSERT INTO users_activity_log VALUES("576","27","Deactivated User Account","October 30, 2019 - 9:08 pm"); 
INSERT INTO users_activity_log VALUES("577","27","Activated User Account","October 30, 2019 - 9:08 pm"); 
INSERT INTO users_activity_log VALUES("578","27","Deactivated User Account","October 31, 2019 - 5:19 pm"); 
INSERT INTO users_activity_log VALUES("579","27","Deactivated User Account","October 31, 2019 - 5:23 pm"); 
INSERT INTO users_activity_log VALUES("580","27","Deactivated User Account","October 31, 2019 - 5:23 pm"); 
INSERT INTO users_activity_log VALUES("581","27","Activated User Account","October 31, 2019 - 5:24 pm"); 
INSERT INTO users_activity_log VALUES("582","27","Edited Kizsha Lauriaga Patient Profile","October 31, 2019 - 5:40 pm"); 
INSERT INTO users_activity_log VALUES("583","27","added 3 pieces of Isoniazid to stocks","October 31, 2019 6:23 pm"); 
INSERT INTO users_activity_log VALUES("584","27","dispensed 5 Cefalexin 250  to ","October 31, 2019 6:25 pm"); 
INSERT INTO users_activity_log VALUES("585","27","added 3 pieces of Cefalexin 250  to stocks","October 31, 2019 6:25 pm"); 
INSERT INTO users_activity_log VALUES("586","27","dispensed 4 Isoniazid to Margarita Diana","October 31, 2019 6:26 pm"); 
INSERT INTO users_activity_log VALUES("587","27","dispensed 3 Rifampicin 150 mg to Janeil Alcano","October 31, 2019 6:26 pm"); 
INSERT INTO users_activity_log VALUES("588","27","added 5 pieces of Biogesic to stocks","October 31, 2019 6:39 pm"); 
INSERT INTO users_activity_log VALUES("589","27","added 20 pieces of Celin to stocks","October 31, 2019 6:40 pm"); 
INSERT INTO users_activity_log VALUES("590","27","dispensed 5 Celin to Margarita Diana","October 31, 2019 6:40 pm"); 
INSERT INTO users_activity_log VALUES("591","27","Registered Windel Mae Nangan Resuma as new Patient","October 31, 2019 - 6:50 pm"); 
INSERT INTO users_activity_log VALUES("592","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 8:51 pm"); 
INSERT INTO users_activity_log VALUES("593","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 8:58 pm"); 
INSERT INTO users_activity_log VALUES("594","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:02 pm"); 
INSERT INTO users_activity_log VALUES("595","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:14 pm"); 
INSERT INTO users_activity_log VALUES("596","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:32 pm"); 
INSERT INTO users_activity_log VALUES("597","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:40 pm"); 
INSERT INTO users_activity_log VALUES("598","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:42 pm"); 
INSERT INTO users_activity_log VALUES("599","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:43 pm"); 
INSERT INTO users_activity_log VALUES("600","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:46 pm"); 
INSERT INTO users_activity_log VALUES("601","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:50 pm"); 
INSERT INTO users_activity_log VALUES("602","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 9:54 pm"); 
INSERT INTO users_activity_log VALUES("603","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:05 pm"); 
INSERT INTO users_activity_log VALUES("604","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:09 pm"); 
INSERT INTO users_activity_log VALUES("605","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:14 pm"); 
INSERT INTO users_activity_log VALUES("606","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:17 pm"); 
INSERT INTO users_activity_log VALUES("607","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:23 pm"); 
INSERT INTO users_activity_log VALUES("608","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:24 pm"); 
INSERT INTO users_activity_log VALUES("609","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:27 pm"); 
INSERT INTO users_activity_log VALUES("610","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:30 pm"); 
INSERT INTO users_activity_log VALUES("611","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:33 pm"); 
INSERT INTO users_activity_log VALUES("612","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:34 pm"); 
INSERT INTO users_activity_log VALUES("613","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:35 pm"); 
INSERT INTO users_activity_log VALUES("614","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:35 pm"); 
INSERT INTO users_activity_log VALUES("615","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:36 pm"); 
INSERT INTO users_activity_log VALUES("616","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:37 pm"); 
INSERT INTO users_activity_log VALUES("617","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:37 pm"); 
INSERT INTO users_activity_log VALUES("618","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:39 pm"); 
INSERT INTO users_activity_log VALUES("619","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:41 pm"); 
INSERT INTO users_activity_log VALUES("620","27","Added Windel Mae Nangan Resuma to Family Planning","October 31, 2019 - 10:43 pm"); 
INSERT INTO users_activity_log VALUES("621","27","Added Lolita Villarosa Gerose to Family Planning","October 31, 2019 - 10:47 pm"); 
INSERT INTO users_activity_log VALUES("622","27","Added Mercy Buenafuente to Family Planning","October 31, 2019 - 11:09 pm"); 
INSERT INTO users_activity_log VALUES("623","27","Added a Family Planning follow-up date for Windel Mae Nangan Resuma","November 1, 2019 - 9:20 pm"); 
INSERT INTO users_activity_log VALUES("624","27","dispensed 3 Rifapentine to John Matthew Lorizo","November 1, 2019 10:56 pm"); 
INSERT INTO users_activity_log VALUES("625","27","Added Windel Mae Nangan Resuma to Family Planning","November 2, 2019 - 11:26 am"); 
INSERT INTO users_activity_log VALUES("626","182","Updated the Prenatal follow-up date for Lolita Villarosa Gerose","November 2, 2019 - 11:47 am"); 
INSERT INTO users_activity_log VALUES("627","184","Added Windel Mae Nangan Resuma to Consultation","November 2, 2019 - 11:52 am"); 
INSERT INTO users_activity_log VALUES("628","182","Updated the Prenatal follow-up date for Mercy Buenafuente","November 2, 2019 - 12:25 pm"); 
INSERT INTO users_activity_log VALUES("629","182","dispensed 23 Ambroxol to Daniel Andrew Go","November 2, 2019 12:29 pm"); 
INSERT INTO users_activity_log VALUES("630","182","Successfully Backup the database","November 2, 2019, 12:32 pm"); 



