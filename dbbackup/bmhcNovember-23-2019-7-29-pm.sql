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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("29","12","November 23, 2019","Salvador Latosa","59","120/50","37.5","180","80","Fever, Colds, Headache","NONE","NONE","NONE","Nov","2019","With Prescription","November 23, 2019 - 6:41 pm"); 
INSERT INTO consultation VALUES("30","29","November 23, 2019","Me","72","100/30","37.5","180","80","Fever, Headache","NONE","NONE","NONE","Nov","2019","With Prescription","November 23, 2019 - 7:28 pm"); 



DROP TABLE consultation_prescription;

CREATE TABLE `consultation_prescription` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `consultation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medicine_category` varchar(50) NOT NULL,
  `medname` varchar(50) NOT NULL,
  `6am` varchar(10) NOT NULL,
  `8am` varchar(10) NOT NULL,
  `12nn` varchar(10) NOT NULL,
  `2pm` varchar(10) NOT NULL,
  `4pm` varchar(10) NOT NULL,
  `6pm` varchar(10) NOT NULL,
  `8pm` varchar(10) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `recommendation` varchar(200) NOT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO consultation_prescription VALUES("34","29","12","27","Analgesic","Biogesic","✓","","✓","","✓","","✓","10","Drink more water"); 
INSERT INTO consultation_prescription VALUES("35","29","12","27","Antihistamines","Ceterizine","✓","","","","","","","3","NONE"); 
INSERT INTO consultation_prescription VALUES("36","30","29","27","Analgesic","Biogesic","✓","","✓","","✓","","✓","5","Drink More Water"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

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
INSERT INTO db_backup VALUES("22","182","Export","November 2, 2019","12:32 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("23","27","Export","November 5, 2019","5:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("24","27","Export","November 18, 2019","9:17 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("25","27","Export","November 19, 2019","10:45 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("26","27","Export","November 19, 2019","10:50 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("27","27","Export","November 19, 2019","10:52 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("28","27","Export","November 19, 2019","10:53 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("29","27","Export","November 19, 2019","10:54 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("30","27","Export","November 19, 2019","10:54 pm","Successfully Exported Database"); 



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
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`family_planning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("34","20","New to the Program","Pills","October 31, 2019 10:42 PM","College","Jesse Franco Latosa","August 30, 1998","College","Programmer","120000","1","Yes","For Thesis Purposes","COC, Contraceptive patch, LAM, Billings/Cervical Mucus/Ovulatino Method, Sympto-thermal","No Assessment","Nov","2019"); 
INSERT INTO family_planning VALUES("35","4","Continuing User","Pills","October 31, 2019 10:47 PM","High School","Marvin Gerose","August 13, 1974","College","Sr. Businessman","10000","7","Yes","Limiting or Spacing","IUD, BTL, VSC, LAM, SDM","No Assessment","Nov","2019"); 
INSERT INTO family_planning VALUES("36","10","New to the Program","Pills","October 31, 2019 11:09 PM","College","Ronjay Buenafuente","May 06, 1969","College","Accountant","124000","1","Yes","Try lang","Condom, IUD, BTL, LAM","No Assessment","Nov","2019"); 
INSERT INTO family_planning VALUES("37","20","Continuing User","Pills","November 02, 2019 11:25 AM","College","Franco","August 30, 2019","College","IT","30000","1","Yes","Sample","Contraceptive patch, POP, Injectable, Condom, IUD, Billings/Cervical Mucus/Ovulatino Method, Sympto-thermal","No Assessment","Nov","2019"); 
INSERT INTO family_planning VALUES("38","19","New to the Program","Pills","November 04, 2019 5:48 PM","College","Mark Panabe","June 2, 1998","College","Programmer","15000","1","No","Sample 1","LAM, SDM, BBT","No Assessment","Nov","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

INSERT INTO fp_follow_up VALUES("28","10","October 21, 2019","Pills","1Pack","Successful","Manilyn V. Jimera","October 30, 2019","Cancelled"); 
INSERT INTO fp_follow_up VALUES("29","4","October 21, 2019","Pills","1","aww ahh abi ko ","John Phillip Dela Cruz","October 29, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("30","10","October 28, 2019","Pills","1","remarks","Jesse Franco Latosa","November 1, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("31","20","November 12, 2019","Pills","3","dfd","Jesse Franco Latosa","November 1, 2019","Cancelled"); 
INSERT INTO fp_follow_up VALUES("32","4","October 30, 2019","","2","sample","Jesse Franco Latosa","November 03, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("33","10","November 20, 2019","Pills","d","3","Diana Rose S. Laput","November 3, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("34","10","November 11, 2019","Pills","3","dd","Manilyn V. Jimera","November 27, 2019","Pending"); 
INSERT INTO fp_follow_up VALUES("35","4","November 20, 2019","Pills","2","dfdf","Manilyn V. Jimera","November 28, 2019","Pending"); 
INSERT INTO fp_follow_up VALUES("36","4","November 5, 2019","Pills","3","Success","Diana Rose S. Laput","November 15, 2019","Done"); 
INSERT INTO fp_follow_up VALUES("37","4","November 20, 2019","Pills","2","2","Imelita 0. Anjao","November 27, 2019","Pending"); 
INSERT INTO fp_follow_up VALUES("38","10","November 20, 2019","Pills","2","ddf","Arian M. Garcia","November 27, 2019","Pending"); 
INSERT INTO fp_follow_up VALUES("39","4","November 1, 2019","Pills","3","3","Diana Rose S. Laput","November 20, 2019","Done"); 



DROP TABLE immunization;

CREATE TABLE `immunization` (
  `immunization_id` int(30) NOT NULL AUTO_INCREMENT,
  `child_id` int(30) NOT NULL,
  `philhealth_no` varchar(30) NOT NULL,
  `birthtime` varchar(30) NOT NULL,
  `birth_weight` varchar(30) NOT NULL,
  `cp_no` varchar(30) NOT NULL,
  `gravida` varchar(30) NOT NULL,
  `para` varchar(30) NOT NULL,
  `abortion` varchar(30) NOT NULL,
  `mother_age` varchar(30) NOT NULL,
  `father_age` varchar(30) NOT NULL,
  `place_of_prenatal` varchar(30) NOT NULL,
  `place_of_delivery` varchar(30) NOT NULL,
  `type_of_delivery` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`immunization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO immunization VALUES("9","6","38-384784848-4","4:00 PM","2.5","(09) 037373737","0","0","0","45","49","CLMMH","Labor Room","Normal","Registered","Nov","2019"); 
INSERT INTO immunization VALUES("10","3","33-483838338-3","12:00 PM","4.9","(09) 934374343","1","1","0","43","47","MHC","CHO Bacolod","Normal","Registered","Nov","2019"); 



DROP TABLE immunization_treatment;

CREATE TABLE `immunization_treatment` (
  `treatment_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `treatment_type` varchar(30) NOT NULL,
  `treatment_date` varchar(30) NOT NULL,
  `treatment_age` varchar(30) NOT NULL,
  `treatment_weight` varchar(30) NOT NULL,
  `treatment_height` varchar(30) NOT NULL,
  `treatment_temp` varchar(30) NOT NULL,
  `treatment_remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`treatment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO immunization_treatment VALUES("14","6","BCG","November 13, 2019","1 month","4.5","54","37.0",""); 
INSERT INTO immunization_treatment VALUES("15","3","BCG","November 20, 2019","1 month + 15 days","4.9","54","37.0",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

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
INSERT INTO medication_dispensation VALUES("26","9","9","Consultation","November 3, 2019","4:39 pm","Nov","2019","3","November 3, 2019 4:39 pm"); 
INSERT INTO medication_dispensation VALUES("27","8","3","Consultation","November 3, 2019","4:48 pm","Nov","2019","5","November 3, 2019 4:48 pm"); 
INSERT INTO medication_dispensation VALUES("28","8","8","Consultation","November 3, 2019","4:51 pm","Nov","2019","5","November 3, 2019 4:51 pm"); 
INSERT INTO medication_dispensation VALUES("29","18","5","TB Medicine","November 4, 2019","8:39 pm","Nov","2019","10","November 4, 2019 8:39 pm"); 
INSERT INTO medication_dispensation VALUES("30","21","7","Consultation","November 5, 2019","4:25 pm","Nov","2019","10","November 5, 2019 4:25 pm"); 
INSERT INTO medication_dispensation VALUES("31","18","4","TB Medicine","November 5, 2019","4:28 pm","Nov","2019","5","November 5, 2019 4:28 pm"); 
INSERT INTO medication_dispensation VALUES("32","9","4","TB Medicine","November 5, 2019","4:31 pm","Nov","2019","3","November 5, 2019 4:31 pm"); 
INSERT INTO medication_dispensation VALUES("33","8","7","Consultation","November 5, 2019","4:42 pm","Nov","2019","5","November 5, 2019 4:42 pm"); 
INSERT INTO medication_dispensation VALUES("34","7","1","Consultation","November 5, 2019","4:45 pm","Nov","2019","400","November 5, 2019 4:45 pm"); 
INSERT INTO medication_dispensation VALUES("35","20","1","Select","November 5, 2019","4:46 pm","Nov","2019","50","November 5, 2019 4:46 pm"); 
INSERT INTO medication_dispensation VALUES("36","20","1","Consultation","November 12, 2019","5:31 pm","Nov","2019","5","November 12, 2019 5:31 pm"); 
INSERT INTO medication_dispensation VALUES("37","9","4","TB Medicine","November 5, 2019","4:31 pm","Nov","2018","3","November 5, 2019 4:31 pm"); 
INSERT INTO medication_dispensation VALUES("38","7","1","Consultation","November 15, 2019","7:59 pm","Nov","2019","30","November 15, 2019 7:59 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_category` varchar(30) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("1","Ceterizine","Tablet","Antihistamines","25","August 3, 2019 12:46 pm"); 
INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","31","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","34","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","14","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","9","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","16","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("7","Claritin","Tablet","Antihistamines","30","October 11, 2019 - 2:04 am"); 
INSERT INTO medicine VALUES("8","Celin","Tablet","Vitamins","30","October 25, 2019 - 2:11 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Analgesic","42","October 25, 2019 - 2:14 am"); 
INSERT INTO medicine VALUES("10","Cecon 500 mg","Tablet","Vitamins","0","November 17, 2019 - 12:42 pm"); 
INSERT INTO medicine VALUES("11","Dolfenal","Tablet","Analgesic","0","November 17, 2019 - 12:44 pm"); 
INSERT INTO medicine VALUES("12","Levocetirizine","Tablet","Antihistamines","0","November 17, 2019 - 12:46 pm"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

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
INSERT INTO medicine_stocks VALUES("80","1","500","November 5, 2019 4:44 pm"); 
INSERT INTO medicine_stocks VALUES("81","9","10","November 12, 2019 4:58 pm"); 
INSERT INTO medicine_stocks VALUES("82","2","30","November 15, 2019 8:01 pm"); 
INSERT INTO medicine_stocks VALUES("83","9","30","November 15, 2019 8:01 pm"); 
INSERT INTO medicine_stocks VALUES("84","8","20","November 15, 2019 8:01 pm"); 
INSERT INTO medicine_stocks VALUES("85","3","25","November 15, 2019 8:02 pm"); 
INSERT INTO medicine_stocks VALUES("86","7","20","November 15, 2019 8:02 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Single","53","Female","#54 Area 51, Mansilingan","Kasilingan","July 20, 1966","168","78","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Marvin Gerose","(09) 073773443","Active","Sep","2019"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","#1 Area 51, Mansilingan","Katilingban","April 14, 1998","176","60","(09) 061613101","Negros Occidental","Student","34-343435343-3","Charles Go","(09) 061613101","Active","Oct","2019"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","March 10, 1970","174","174","(88) 888888888","Negros Occidental","Farmer","34-343434343-4","Erika Bermo","(30) 303030454","Active","Oct","2019"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","April 07, 1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Oct","2019"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay, Mansilingan","Gauzon","August 23, 2006","174","55","(34) 343434333","Negros Occidental","Student","33-333333333-3","Jona Alcano","(33) 333333454","Active","Oct","2019"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","July 20, 1966","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Jose Diana","(09) 073773443","Active","Sep","2019"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Active","Sep","2019"); 
INSERT INTO patient VALUES("11","Dennzel Quatchon","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Dec","2018"); 
INSERT INTO patient VALUES("12","Jesse Franco Latosa","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","67","09061613101","Negros Occidental","Student","343434564546","Salvador Latosa","93939343433","Active","Nov","2018"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","John Michael Lorizo","93939343433","Active","Aug","2019"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","25","Male","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","165","60","09051312999","Negros Occidental","BHW","88334939733434","Renzy Nono","0907377344343","Active","Jun","2019"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Married","38","Male","#51 Area 51, Mansilingan","Gauzon","April 07, 1998","165","165","09061613101","Negros Occidental","Student","343434564546","Rommy Adryx","93939343433","Active","Jul","2019"); 
INSERT INTO patient VALUES("17","Jan Mark Ballados","Single","24","Male","#3 Area 51, Mansilingan","Kasilingan","June 14, 1995","178","178","(09) 054441414","Negros Occidental","E-Jeep Driver","99-393933393-9","Mark John Ballados","(09) 333434343","Active","Oct","2019"); 
INSERT INTO patient VALUES("18","Ariane Torres","Single","33","Male","#2 Area 51, Mansilingan","Paglaum","March 19, 1986","170","170","(09) 033434343","Negros Occidental","Teacher","39-333393939-3","Ariane ","(09) 232323232","Active","Oct","2019"); 
INSERT INTO patient VALUES("19","Kizsha Lauriaga","Single","28","Female","#3 Everlasting, Mansilingan","Kahirup A","August 21, 1991","160","160","(09) 062623232","Negros Occidental","Street Vendor","30-303030303-0","Mark Panabe","(09) 334734343","Active","Oct","2019"); 
INSERT INTO patient VALUES("20","Wilma Mendez","Single","21","Female","#3 Everlasting, Mansilingan","Kahirup B","May 31, 1998","169","169","(09) 061134343","Negros Occidental","HRM","30-390393030-3","Minda Resuma","(09) 028393434","Active","Nov","2019"); 
INSERT INTO patient VALUES("21","Alvin Mananquil","Married","33","Male","#3 Area 51, Mansilingan","Kasilingan","August 20, 1986","178","178","(09) 051214334","Negros Occidental","Programmer","33-003039393-9","Alvin Mananquil","(09) 343434343","Active","Nov","2019"); 
INSERT INTO patient VALUES("22","Stay Bagagrel","Widowed","39","Female","#3 Kasilingan, Mansilingan","Paghidaet","June 10, 1980","178","178","(09) 073738343","Negros Occidental","BHW","04-303030303-0","Michael Bagagrel","(09) 484383434","Active","Nov","2019"); 
INSERT INTO patient VALUES("23","Marie Bazagrel","Single","12","Female","#5 Kasilingan, Mansilingan","Kahirup B","June 01, 2007","173","173","(09) 343434343","Negros Occidental","Student","39-393938838-4","Mama Mo","(09) 343434343","Active","Nov","2019"); 
INSERT INTO patient VALUES("24","Anne Berquist","Single","42","Female","#3 Mahimayaon, Mansilingan","Kasilingan","March 15, 1977","178","178","(09) 034343434","Negros Occidental","Nurse","33-434343434-3","John Berquist","(09) 073433434","Active","Nov","2019"); 
INSERT INTO patient VALUES("25","Anita Nelson","Widowed","43","Female","#4 Area 52, Mansilingan","Paghidaet","April 08, 1976","178","178","(09) 454545454","Negros Occidental","BHW","33-303033030-3","Willie Nelson","(09) 455454545","Active","Nov","2019"); 
INSERT INTO patient VALUES("26","Slena Wasky","Single","43","Female","#3 Tagbalayan, Mansilingan","Gauzon","August 24, 1976","176","176","(09) 348743745","Negros Occidental","BHW","43-459045454-5","Wilson Slena","(09) 454545454","Active","Nov","2019"); 
INSERT INTO patient VALUES("27","Rose Zirilli","Widowed","50","Female","#52 Area 41, Mansilingan","Katilingban","June 11, 1969","178","178","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Jimmy Zirili","(09) 454655553","Active","Nov","2019"); 
INSERT INTO patient VALUES("28","Esperanza Consolacion","Married","89","Female","#52 Area 41, Mansilingan","Katilingban","June 11, 1969","178","89","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Sergio Consolacion","(09) 454655553","Deceased","Nov","2019"); 
INSERT INTO patient VALUES("29","Markh B. Jamandre","Married","43","Male","#3 Everlasting, Mansilingan","Mabinuligon","October 14, 1976","176","176","(09) 373737337","Negross Occidental","Teacher","39-338939383-9","Ms. Olive Jamandre","(09) 373737373","Active","Nov","2019"); 



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
  `status` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","November 15, 2005","November 15, 2005","20","CLMMRH","November 29, 2005","Mabinuligon","#15 Everlasting","Registered Immunization","Nov","2019"); 
INSERT INTO patient_child VALUES("4","Jonathan Simmons","Male","Mary Ann Simmons","College","College","J.K Simmons","College","Businessman","June 13, 2007","June 13, 2007","10","CLMH","June 10, 2008","Kasilingan","#3 Sa balota","Registered","Oct","2019"); 
INSERT INTO patient_child VALUES("5","Jamie Lannister","Male","Minda Lannister","College","Medical Technologist","Tywin Lannister","College","Doctor","October 16, 2019","October 16, 2019","10","CLMH","October 31, 2019","Kasilingan","#3 Area 51","Registered","Oct","2019"); 
INSERT INTO patient_child VALUES("6","Arya Stark","Female","Catelyn Stark","College","Teacher","Eddard Stark","College","Artist","October 16, 2019","October 16, 2019","10","CLMH","October 23, 2019","Kasilingan","#3 Area 51","Registered Immunization","Oct","2019"); 
INSERT INTO patient_child VALUES("7","Sansa Stark","Female","Catelyn Stark","College","Teacher","Eddard Stark","College","Programmer","October 15, 2019","October 15, 2019","10","CLMH","October 23, 2019","Kahirup B","#3 sa balota","Registered","Oct","2019"); 



DROP TABLE prenatal;

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctors_advice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `presentation` varchar(100) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO prenatal VALUES("1","4","For CBC, urinalysis","2019-23-09","","","Nov","2019"); 
INSERT INTO prenatal VALUES("2","10","For CBC, urinalysis","2019-23-09","MICROSOFT POWERPOINT","NAGDADALANG TAE","Nov","2019"); 



DROP TABLE prenatal_follow_up;

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `follow_up_status` char(20) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO prenatal_follow_up VALUES("17","27","10","October 28, 2019 9:50 AM","For Verification","Cancelled"); 
INSERT INTO prenatal_follow_up VALUES("18","27","10","October 22, 2019 8:25 AM","Sample 2","Done"); 
INSERT INTO prenatal_follow_up VALUES("19","182","4","October 31, 2019 9:00 PM","sample 2","Done"); 
INSERT INTO prenatal_follow_up VALUES("20","27","10","October 26, 2019 8:41 PM","dfd","Pending"); 
INSERT INTO prenatal_follow_up VALUES("21","182","10","October 07, 2019 8:41 PM","dfdf","Cancelled"); 
INSERT INTO prenatal_follow_up VALUES("22","27","4","October 01, 2019 8:41 PM","dfdfd","Done"); 
INSERT INTO prenatal_follow_up VALUES("23","27","10","October 08, 2019 8:41 PM","dfdf","Done"); 
INSERT INTO prenatal_follow_up VALUES("24","27","4","November 15, 2019 8:10 PM","MS Office","Pending"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("5","October 23, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","James Reid","90","140/40","33.3","33","High Fever","Jesse Franco Latosa","ER","Oct","2019","October 26, 2019 10:12 pm"); 
INSERT INTO referral VALUES("6","November 4, 2019","Mansilingan Health Center","The Doctors Hospital","Mansilingan, Bacolod City","B.S. Aquino Drive, Bacolod","Kherrie Tejare","58","130/80","37.5","18","High Fever","Jesse Franco Latosa","Emergency Room","Nov","2019","November 4, 2019 8:33 pm"); 
INSERT INTO referral VALUES("7","November 16, 2019","Mansilingan Health Center","CLMMH","Mansilingan, Bacolod City","Lacson St.","Lolita Villarosa Gerose","68","130/50","37.5","48","High Fever","Manilyn V. Jimera","Emergency Room","Nov","2019","November 16, 2019 9:37 pm"); 
INSERT INTO referral VALUES("8","November 16, 2019","Mansilingan Health Center","CLMMH","Mansilingan, Bacolod City","Lacson St.","Kevin Durant","89","150/40","39.5","34","High Fever","Manilyn V. Jimera","Emergency Room","Nov","2019","November 16, 2019 9:40 pm"); 



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



DROP TABLE tetanus_toxoid;

CREATE TABLE `tetanus_toxoid` (
  `tetanus_toxoid_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `tt1` varchar(30) NOT NULL,
  `tt2` varchar(30) NOT NULL,
  `tt3` varchar(30) NOT NULL,
  `tt4` varchar(30) NOT NULL,
  `tt5` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  PRIMARY KEY (`tetanus_toxoid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid VALUES("2","6","November 21, 2019","November 12, 2019","November 27, 2019","January 24, 2019","March 27, 2019","August 7, 2019"); 
INSERT INTO tetanus_toxoid VALUES("3","3","","","","","",""); 



DROP TABLE tetanus_toxoid_fp;

CREATE TABLE `tetanus_toxoid_fp` (
  `tetanus_toxoid_fp_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `btl` varchar(30) NOT NULL,
  `1_year` varchar(30) NOT NULL,
  `vit_a` varchar(30) NOT NULL,
  `feso4` varchar(30) NOT NULL,
  PRIMARY KEY (`tetanus_toxoid_fp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid_fp VALUES("3","6","November 1, 2019","November 2, 2019","November 3, 2019","November 4, 2019","November 5, 2019"); 
INSERT INTO tetanus_toxoid_fp VALUES("4","3","","","","",""); 



DROP TABLE type_of_feeding;

CREATE TABLE `type_of_feeding` (
  `type_of_feeding_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `ebf` varchar(11) NOT NULL,
  `mf` varchar(11) NOT NULL,
  `bff` varchar(11) NOT NULL,
  `tof_date` varchar(30) NOT NULL,
  PRIMARY KEY (`type_of_feeding_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding VALUES("9","6","✓","","","November 22, 2019"); 
INSERT INTO type_of_feeding VALUES("10","6","","","✓","November 20, 2019"); 
INSERT INTO type_of_feeding VALUES("11","3","","✓","","November 20, 2019"); 
INSERT INTO type_of_feeding VALUES("12","3","","","✓","November 28, 2019"); 
INSERT INTO type_of_feeding VALUES("13","6","","✓","","November 28, 2019"); 



DROP TABLE type_of_feeding_2;

CREATE TABLE `type_of_feeding_2` (
  `type_of_feeding_2_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `vit_a` varchar(30) NOT NULL,
  `6_months` varchar(30) NOT NULL,
  `1_year` varchar(30) NOT NULL,
  `nbs` varchar(30) NOT NULL,
  `vit_k` varchar(30) NOT NULL,
  PRIMARY KEY (`type_of_feeding_2_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding_2 VALUES("3","6","November 5, 2019","November 11, 2019","November 11, 2019","March 13, 2019","February 13, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("4","3","November 12, 2019","","","",""); 



DROP TABLE users;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `license` char(20) NOT NULL,
  `position` char(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` char(8) NOT NULL,
  `login` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","$2y$10$yhkB7S3FyI5nm2o187mVJuYntg5VJs2tUEBSj9Ml7Z1PIrEsK1o9m","1","November 5, 2019, 3:53 pm","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","$2y$10$MDC.OKbb4X41APh3g.nJPez63/7iaepg4cSujwpt8jYLZm4W.JIeW","1","September 13, 2019, 8:43 pm","July 29, 2019","3:01 am"); 
INSERT INTO users VALUES("26","Jesse Franco Latosa","dfdfdadf","Nurse","jfranco30","$2y$10$AmErpVx3eb6EMXQjWl4/ouahb11YQvXJfjsGgSEK2.QVdNO046s.K","1","November 12, 2019, 5:26 pm","September 20, 2019","12:25 am"); 
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","$2y$10$08FnLCLTdOVSlhiJlxLDZuFBs2vt196tGyCvgyg0.u0yctd/aoscK","1","November 23, 2019, 3:03 pm","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("28","Manilyn V. Jimera","343433434","Nurse","nurse101","$2y$10$nC9iALapDw9Fq.HyO1jm3eq5w6eYmTCtFC9uaerCDkjkYip1o1LHq","1","October 11, 2019, 3:11 am","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("29","Imelita 0. Anjao","345343","Midwife","midwife101","$2y$10$U5yakieAi0iObyzb68dtTORgd0cSf82Ro72COmfZgPJv6rygNlrQy","1","","September 22, 2019","4:02 am"); 
INSERT INTO users VALUES("30","Arian M. Garcia","3487y98u9","Midwife","midwife","$2y$10$JLIAeWbBY1RY2j.KtaLGMO2byjeT6rqNWaw/FsWVQk1EC9yxiwF0m","1","","September 22, 2019","4:02 am"); 
INSERT INTO users VALUES("31","Kherrie Tejare","939389283","Medical Officer","kherrie","$2y$10$Ped3W9tvCLwQ48JoMSQPTeM2BhHIk9zw1OfaQyy87qHFl9qqGzSh.","1","November 5, 2019, 3:51 pm","November 5, 2019","2:10 pm"); 
INSERT INTO users VALUES("32","Alvin Mananquil","39393838","Nurse","alvin","$2y$10$ilYtIOT30qrBMlVQKXnMe.mEkofRMty5iQqiX7v2k6QZBY8yYncaC","1","","November 15, 2019","8:22 pm"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=910 DEFAULT CHARSET=latin1;

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
INSERT INTO users_activity_log VALUES("631","182","Successfully Backup the database","November 2, 2019, 12:32 pm"); 
INSERT INTO users_activity_log VALUES("632","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 3, 2019 - 1:43 pm"); 
INSERT INTO users_activity_log VALUES("633","27","Added a Family Planning follow-up date for Mercy Buenafuente","November 3, 2019 - 2:09 pm"); 
INSERT INTO users_activity_log VALUES("634","182","Added Rommel Adricula to Consultation","November 3, 2019 - 2:19 pm"); 
INSERT INTO users_activity_log VALUES("635","27","Added a Family Planning follow-up date for Mercy Buenafuente","November 3, 2019 - 3:26 pm"); 
INSERT INTO users_activity_log VALUES("636","182","dispensed 3 Biogesic to Margarita Diana","November 3, 2019 4:39 pm"); 
INSERT INTO users_activity_log VALUES("637","182","dispensed 5 Cefalexin 250  to Janeil Alcano","November 3, 2019 4:48 pm"); 
INSERT INTO users_activity_log VALUES("638","182","dispensed 5 Celin to Janeil Alcano","November 3, 2019 4:51 pm"); 
INSERT INTO users_activity_log VALUES("639","27","Added Kizsha Lauriaga to Family Planning","November 4, 2019 - 5:48 pm"); 
INSERT INTO users_activity_log VALUES("640","27","Added a New Individual Referral Record","November 4, 2019 8:33 pm"); 
INSERT INTO users_activity_log VALUES("641","27","dispensed 10 Isoniazid to Ariane Torres","November 4, 2019 8:39 pm"); 
INSERT INTO users_activity_log VALUES("642","27","Registered Alvin Mananquil as new Patient","November 5, 2019 - 1:02 pm"); 
INSERT INTO users_activity_log VALUES("643","57","Added Kherrie Tejare as New User","November 5, 2019 - 2:10 pm"); 
INSERT INTO users_activity_log VALUES("644","31","Updated account of Kherrie Tejare","November 5, 2019 - 3:51 pm"); 
INSERT INTO users_activity_log VALUES("645","31","Updated account of Daniel Andrew Go","November 5, 2019 - 3:53 pm"); 
INSERT INTO users_activity_log VALUES("646","23","Updated account of John Phillip Dela Cruz","November 5, 2019 - 3:54 pm"); 
INSERT INTO users_activity_log VALUES("647","23","Updated account of Jesse Franco Latosa","November 5, 2019 - 3:54 pm"); 
INSERT INTO users_activity_log VALUES("648","23","Updated account of Diana Rose S. Laput","November 5, 2019 - 3:54 pm"); 
INSERT INTO users_activity_log VALUES("649","23","Updated account of Manilyn V. Jimera","November 5, 2019 - 3:55 pm"); 
INSERT INTO users_activity_log VALUES("650","23","Updated account of Imelita 0. Anjao","November 5, 2019 - 3:55 pm"); 
INSERT INTO users_activity_log VALUES("651","23","Updated account of Arian M. Garcia","November 5, 2019 - 3:55 pm"); 
INSERT INTO users_activity_log VALUES("652","23","Updated account of Kherrie Tejare","November 5, 2019 - 3:55 pm"); 
INSERT INTO users_activity_log VALUES("653","27","Deactivated User Account","November 5, 2019 - 3:58 pm"); 
INSERT INTO users_activity_log VALUES("654","27","Activated User Account","November 5, 2019 - 3:58 pm"); 
INSERT INTO users_activity_log VALUES("655","26","Updated account of Jesse Franco Latosa","November 5, 2019 - 4:02 pm"); 
INSERT INTO users_activity_log VALUES("656","26","Updated account of Jesse Franco Latosa","November 5, 2019 - 4:03 pm"); 
INSERT INTO users_activity_log VALUES("657","27","dispensed 10 Claritin to Alvin Mananquil","November 5, 2019 4:25 pm"); 
INSERT INTO users_activity_log VALUES("658","27","dispensed 5 Rifampicin 150 mg to Ariane Torres","November 5, 2019 4:28 pm"); 
INSERT INTO users_activity_log VALUES("659","27","dispensed 3 Rifampicin 150 mg to Margarita Diana","November 5, 2019 4:31 pm"); 
INSERT INTO users_activity_log VALUES("660","27","dispensed 5 Claritin to Janeil Alcano","November 5, 2019 4:42 pm"); 
INSERT INTO users_activity_log VALUES("661","27","added 500 pieces of Ceterizine to stocks","November 5, 2019 4:44 pm"); 
INSERT INTO users_activity_log VALUES("662","27","dispensed 400 Ceterizine to John Matthew Lorizo","November 5, 2019 4:45 pm"); 
INSERT INTO users_activity_log VALUES("663","27","dispensed 50 Ceterizine to Windel Mae Nangan Resuma","November 5, 2019 4:46 pm"); 
INSERT INTO users_activity_log VALUES("664","27","Registered Stay Bagagrel as new Patient","November 5, 2019 - 5:34 pm"); 
INSERT INTO users_activity_log VALUES("665","27","Successfully Backup the database","November 5, 2019, 5:41 pm"); 
INSERT INTO users_activity_log VALUES("666","57","Edited Lolita Villarosa Gerose Patient Profile","November 5, 2019 - 6:24 pm"); 
INSERT INTO users_activity_log VALUES("667","57","Edited Daniel Andrew Go Patient Profile","November 5, 2019 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("668","57","Edited Bernard Bermo Patient Profile","November 5, 2019 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("669","57","Edited John Matthew Lorizo Patient Profile","November 5, 2019 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("670","57","Edited Janeil Alcano Patient Profile","November 5, 2019 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("671","57","Edited Margarita Diana Patient Profile","November 5, 2019 - 6:30 pm"); 
INSERT INTO users_activity_log VALUES("672","57","Edited Dennzel Quatchon Patient Profile","November 5, 2019 - 6:30 pm"); 
INSERT INTO users_activity_log VALUES("673","57","Edited Lolita Villarosa Gerose Patient Profile","November 5, 2019 - 6:31 pm"); 
INSERT INTO users_activity_log VALUES("674","57","Edited Daniel Andrew Go Patient Profile","November 5, 2019 - 6:31 pm"); 
INSERT INTO users_activity_log VALUES("675","57","Edited Hilary Ahmor Sipat Child Patient Profile","November 5, 2019 - 6:37 pm"); 
INSERT INTO users_activity_log VALUES("676","57","Edited Lolita Villarosa Gerose Patient Profile","November 5, 2019 - 6:38 pm"); 
INSERT INTO users_activity_log VALUES("677","57","Registered Marie Bazagrel as new Patient","November 5, 2019 - 6:44 pm"); 
INSERT INTO users_activity_log VALUES("678","57","Edited Windel Mae Nangan Resuma Patient Profile","November 5, 2019 - 6:57 pm"); 
INSERT INTO users_activity_log VALUES("679","57","Registered Anne Berquist as new Patient","November 5, 2019 - 7:14 pm"); 
INSERT INTO users_activity_log VALUES("680","27","Registered Anita Nelson as new Patient","November 5, 2019 - 7:17 pm"); 
INSERT INTO users_activity_log VALUES("681","27","Registered Slena Wasky as new Patient","November 5, 2019 - 7:20 pm"); 
INSERT INTO users_activity_log VALUES("682","27","Registered Rose Zirilli as new Patient","November 5, 2019 - 7:24 pm"); 
INSERT INTO users_activity_log VALUES("683","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:21 pm"); 
INSERT INTO users_activity_log VALUES("684","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:24 pm"); 
INSERT INTO users_activity_log VALUES("685","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:25 pm"); 
INSERT INTO users_activity_log VALUES("686","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:34 pm"); 
INSERT INTO users_activity_log VALUES("687","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:37 pm"); 
INSERT INTO users_activity_log VALUES("688","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:39 pm"); 
INSERT INTO users_activity_log VALUES("689","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:40 pm"); 
INSERT INTO users_activity_log VALUES("690","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:41 pm"); 
INSERT INTO users_activity_log VALUES("691","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:42 pm"); 
INSERT INTO users_activity_log VALUES("692","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:45 pm"); 
INSERT INTO users_activity_log VALUES("693","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:50 pm"); 
INSERT INTO users_activity_log VALUES("694","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:52 pm"); 
INSERT INTO users_activity_log VALUES("695","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 8:57 pm"); 
INSERT INTO users_activity_log VALUES("696","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:01 pm"); 
INSERT INTO users_activity_log VALUES("697","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:04 pm"); 
INSERT INTO users_activity_log VALUES("698","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:05 pm"); 
INSERT INTO users_activity_log VALUES("699","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:11 pm"); 
INSERT INTO users_activity_log VALUES("700","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:16 pm"); 
INSERT INTO users_activity_log VALUES("701","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:17 pm"); 
INSERT INTO users_activity_log VALUES("702","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:17 pm"); 
INSERT INTO users_activity_log VALUES("703","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:22 pm"); 
INSERT INTO users_activity_log VALUES("704","57","Added Prescription to Daniel Andrew Go","November 7, 2019 - 9:36 pm"); 
INSERT INTO users_activity_log VALUES("705","57","Added Prescription to Daniel Andrew Go","November 8, 2019 - 7:29 am"); 
INSERT INTO users_activity_log VALUES("706","57","Added Prescription to ","November 8, 2019 - 7:45 am"); 
INSERT INTO users_activity_log VALUES("707","27","Added Prescription to ","November 8, 2019 - 7:47 am"); 
INSERT INTO users_activity_log VALUES("708","27","Added Prescription to Jesse Franco Latosa","November 8, 2019 - 7:51 am"); 
INSERT INTO users_activity_log VALUES("709","27","Added Prescription to Daniel Andrew Go","November 8, 2019 - 8:13 am"); 
INSERT INTO users_activity_log VALUES("710","27","Added Prescription to Daniel Andrew Go","November 8, 2019 - 8:25 am"); 
INSERT INTO users_activity_log VALUES("711","27","Added Prescription to Jesse Franco Latosa","November 8, 2019 - 8:34 am"); 
INSERT INTO users_activity_log VALUES("712","27","Added Prescription to Daniel Andrew Go","November 8, 2019 - 8:55 am"); 
INSERT INTO users_activity_log VALUES("713","27","Added Prescription to Lolita Villarosa Gerose","November 8, 2019 - 8:56 am"); 
INSERT INTO users_activity_log VALUES("714","27","Added Prescription to Lolita Villarosa Gerose","November 8, 2019 - 8:56 am"); 
INSERT INTO users_activity_log VALUES("715","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 8:57 am"); 
INSERT INTO users_activity_log VALUES("716","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 8:58 am"); 
INSERT INTO users_activity_log VALUES("717","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:02 am"); 
INSERT INTO users_activity_log VALUES("718","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:04 am"); 
INSERT INTO users_activity_log VALUES("719","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:05 am"); 
INSERT INTO users_activity_log VALUES("720","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:06 am"); 
INSERT INTO users_activity_log VALUES("721","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:07 am"); 
INSERT INTO users_activity_log VALUES("722","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:08 am"); 
INSERT INTO users_activity_log VALUES("723","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:13 am"); 
INSERT INTO users_activity_log VALUES("724","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:18 am"); 
INSERT INTO users_activity_log VALUES("725","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:19 am"); 
INSERT INTO users_activity_log VALUES("726","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:20 am"); 
INSERT INTO users_activity_log VALUES("727","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:21 am"); 
INSERT INTO users_activity_log VALUES("728","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:22 am"); 
INSERT INTO users_activity_log VALUES("729","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:22 am"); 
INSERT INTO users_activity_log VALUES("730","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:24 am"); 
INSERT INTO users_activity_log VALUES("731","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:25 am"); 
INSERT INTO users_activity_log VALUES("732","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:27 am"); 
INSERT INTO users_activity_log VALUES("733","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:28 am"); 
INSERT INTO users_activity_log VALUES("734","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:30 am"); 
INSERT INTO users_activity_log VALUES("735","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:34 am"); 
INSERT INTO users_activity_log VALUES("736","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:35 am"); 
INSERT INTO users_activity_log VALUES("737","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:36 am"); 
INSERT INTO users_activity_log VALUES("738","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:41 am"); 
INSERT INTO users_activity_log VALUES("739","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:44 am"); 
INSERT INTO users_activity_log VALUES("740","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:44 am"); 
INSERT INTO users_activity_log VALUES("741","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:45 am"); 
INSERT INTO users_activity_log VALUES("742","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:46 am"); 
INSERT INTO users_activity_log VALUES("743","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 9:47 am"); 
INSERT INTO users_activity_log VALUES("744","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 10:11 am"); 
INSERT INTO users_activity_log VALUES("745","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 10:31 am"); 
INSERT INTO users_activity_log VALUES("746","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 10:54 am"); 
INSERT INTO users_activity_log VALUES("747","27","Added Prescription to Jesse Franco Latosa","November 8, 2019 - 10:58 am"); 
INSERT INTO users_activity_log VALUES("748","27","Added Prescription to Rommel Adricula","November 8, 2019 - 11:12 am"); 
INSERT INTO users_activity_log VALUES("749","27","Added Prescription to Rommel Adricula","November 8, 2019 - 11:12 am"); 
INSERT INTO users_activity_log VALUES("750","27","Added Prescription to Rommel Adricula","November 8, 2019 - 11:19 am"); 
INSERT INTO users_activity_log VALUES("751","27","Added Prescription to Windel Mae Nangan Resuma","November 8, 2019 - 11:24 am"); 
INSERT INTO users_activity_log VALUES("752","27","Added Prescription to Dennzel Quatchon","November 8, 2019 - 11:32 am"); 
INSERT INTO users_activity_log VALUES("753","27","Added Daniel Andrew Go to Consultation","November 8, 2019 - 11:41 am"); 
INSERT INTO users_activity_log VALUES("754","27","Added Prescription to Daniel Andrew Go","November 12, 2019 - 3:36 pm"); 
INSERT INTO users_activity_log VALUES("755","27","Added Prescription to Daniel Andrew Go","November 12, 2019 - 3:38 pm"); 
INSERT INTO users_activity_log VALUES("756","27","Added Prescription to Daniel Andrew Go","November 12, 2019 - 3:51 pm"); 
INSERT INTO users_activity_log VALUES("757","27","Added Jesse Franco Latosa to Consultation","November 12, 2019 - 4:17 pm"); 
INSERT INTO users_activity_log VALUES("758","27","Added Prescription to Jesse Franco Latosa","November 12, 2019 - 4:18 pm"); 
INSERT INTO users_activity_log VALUES("759","27","Updated the Prenatal follow-up date for Mercy Buenafuente","November 12, 2019 - 4:36 pm"); 
INSERT INTO users_activity_log VALUES("760","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 12, 2019 - 4:37 pm"); 
INSERT INTO users_activity_log VALUES("761","27","Added Marie Bazagrel to Consultation","November 12, 2019 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("762","27","Added Prescription to Marie Bazagrel","November 12, 2019 - 4:55 pm"); 
INSERT INTO users_activity_log VALUES("763","27","added 10 pieces of Biogesic to stocks","November 12, 2019 4:58 pm"); 
INSERT INTO users_activity_log VALUES("764","27","Edited Hilary Ahmor Sipat Child Patient Profile","November 12, 2019 - 5:10 pm"); 
INSERT INTO users_activity_log VALUES("765","27","dispensed 5 Ceterizine to Windel Mae Nangan Resuma","November 12, 2019 5:31 pm"); 
INSERT INTO users_activity_log VALUES("766","27","Edited Wilma Mendez Patient Profile","November 12, 2019 - 5:58 pm"); 
INSERT INTO users_activity_log VALUES("767","27","Added Wilma Mendez to Consultation","November 12, 2019 - 6:21 pm"); 
INSERT INTO users_activity_log VALUES("768","27","Added Prescription to Wilma Mendez","November 12, 2019 - 6:23 pm"); 
INSERT INTO users_activity_log VALUES("769","27","Added Wilma Mendez to Consultation","November 12, 2019 - 6:25 pm"); 
INSERT INTO users_activity_log VALUES("770","27","Added Prescription to Wilma Mendez","November 12, 2019 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("771","27","Added Jesse Franco Latosa to Consultation","November 12, 2019 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("772","27","Added Prescription to Jesse Franco Latosa","November 12, 2019 - 8:42 pm"); 
INSERT INTO users_activity_log VALUES("773","27","Added Prescription to Jesse Franco Latosa","November 12, 2019 - 8:44 pm"); 
INSERT INTO users_activity_log VALUES("774","27","Added Prescription to Jesse Franco Latosa","November 12, 2019 - 8:47 pm"); 
INSERT INTO users_activity_log VALUES("775","27","Added Prescription to Jesse Franco Latosa","November 12, 2019 - 8:48 pm"); 
INSERT INTO users_activity_log VALUES("776","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 13, 2019 - 1:51 pm"); 
INSERT INTO users_activity_log VALUES("777","27","Added Wilma Mendez to Consultation","November 13, 2019 - 2:06 pm"); 
INSERT INTO users_activity_log VALUES("778","27","Added Prescription to Wilma Mendez","November 14, 2019 - 6:48 pm"); 
INSERT INTO users_activity_log VALUES("779","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 6:51 pm"); 
INSERT INTO users_activity_log VALUES("780","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 6:53 pm"); 
INSERT INTO users_activity_log VALUES("781","27","Updated the Family Planning follow-up date for Wilma Mendez","November 14, 2019 - 6:56 pm"); 
INSERT INTO users_activity_log VALUES("782","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:02 pm"); 
INSERT INTO users_activity_log VALUES("783","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:03 pm"); 
INSERT INTO users_activity_log VALUES("784","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:04 pm"); 
INSERT INTO users_activity_log VALUES("785","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 7:06 pm"); 
INSERT INTO users_activity_log VALUES("786","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:07 pm"); 
INSERT INTO users_activity_log VALUES("787","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:08 pm"); 
INSERT INTO users_activity_log VALUES("788","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 7:09 pm"); 
INSERT INTO users_activity_log VALUES("789","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:10 pm"); 
INSERT INTO users_activity_log VALUES("790","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:11 pm"); 
INSERT INTO users_activity_log VALUES("791","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:12 pm"); 
INSERT INTO users_activity_log VALUES("792","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 7:12 pm"); 
INSERT INTO users_activity_log VALUES("793","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 7:24 pm"); 
INSERT INTO users_activity_log VALUES("794","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 7:31 pm"); 
INSERT INTO users_activity_log VALUES("795","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 7:47 pm"); 
INSERT INTO users_activity_log VALUES("796","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:39 pm"); 
INSERT INTO users_activity_log VALUES("797","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:40 pm"); 
INSERT INTO users_activity_log VALUES("798","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:40 pm"); 
INSERT INTO users_activity_log VALUES("799","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:45 pm"); 
INSERT INTO users_activity_log VALUES("800","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:46 pm"); 
INSERT INTO users_activity_log VALUES("801","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:46 pm"); 
INSERT INTO users_activity_log VALUES("802","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:47 pm"); 
INSERT INTO users_activity_log VALUES("803","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:48 pm"); 
INSERT INTO users_activity_log VALUES("804","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:49 pm"); 
INSERT INTO users_activity_log VALUES("805","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:50 pm"); 
INSERT INTO users_activity_log VALUES("806","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 14, 2019 - 8:50 pm"); 
INSERT INTO users_activity_log VALUES("807","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:51 pm"); 
INSERT INTO users_activity_log VALUES("808","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:52 pm"); 
INSERT INTO users_activity_log VALUES("809","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:53 pm"); 
INSERT INTO users_activity_log VALUES("810","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 8:53 pm"); 
INSERT INTO users_activity_log VALUES("811","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:01 pm"); 
INSERT INTO users_activity_log VALUES("812","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:03 pm"); 
INSERT INTO users_activity_log VALUES("813","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:04 pm"); 
INSERT INTO users_activity_log VALUES("814","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:05 pm"); 
INSERT INTO users_activity_log VALUES("815","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:06 pm"); 
INSERT INTO users_activity_log VALUES("816","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:06 pm"); 
INSERT INTO users_activity_log VALUES("817","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:07 pm"); 
INSERT INTO users_activity_log VALUES("818","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 14, 2019 - 9:08 pm"); 
INSERT INTO users_activity_log VALUES("819","27","dispensed 30 Ceterizine to John Matthew Lorizo","November 15, 2019 7:59 pm"); 
INSERT INTO users_activity_log VALUES("820","27","added 30 pieces of Ambroxol to stocks","November 15, 2019 8:01 pm"); 
INSERT INTO users_activity_log VALUES("821","27","added 30 pieces of Biogesic to stocks","November 15, 2019 8:01 pm"); 
INSERT INTO users_activity_log VALUES("822","27","added 20 pieces of Celin to stocks","November 15, 2019 8:01 pm"); 
INSERT INTO users_activity_log VALUES("823","27","added 25 pieces of Cefalexin 250  to stocks","November 15, 2019 8:02 pm"); 
INSERT INTO users_activity_log VALUES("824","27","added 20 pieces of Claritin to stocks","November 15, 2019 8:02 pm"); 
INSERT INTO users_activity_log VALUES("825","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 15, 2019 - 8:06 pm"); 
INSERT INTO users_activity_log VALUES("826","27","Added a Prenatal follow-up date for Lolita Villarosa Gerose","November 15, 2019 - 8:10 pm"); 
INSERT INTO users_activity_log VALUES("827","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 15, 2019 - 8:12 pm"); 
INSERT INTO users_activity_log VALUES("828","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 15, 2019 - 8:12 pm"); 
INSERT INTO users_activity_log VALUES("829","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 15, 2019 - 8:12 pm"); 
INSERT INTO users_activity_log VALUES("830","27","Updated the Family Planning follow-up date for Wilma Mendez","November 15, 2019 - 8:13 pm"); 
INSERT INTO users_activity_log VALUES("831","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 15, 2019 - 8:13 pm"); 
INSERT INTO users_activity_log VALUES("832","27","Updated the Family Planning follow-up date for Wilma Mendez","November 15, 2019 - 8:15 pm"); 
INSERT INTO users_activity_log VALUES("833","27","Added Alvin Mananquil as New User","November 15, 2019 - 8:22 pm"); 
INSERT INTO users_activity_log VALUES("834","27","Edited Hilary Ahmor Sipat Child Patient Profile","November 15, 2019 - 8:29 pm"); 
INSERT INTO users_activity_log VALUES("835","27","Edited Hilary Ahmor Sipat Child Patient Profile","November 15, 2019 - 8:29 pm"); 
INSERT INTO users_activity_log VALUES("836","27","Edited Hilary Ahmor Sipat Child Patient Profile","November 15, 2019 - 8:33 pm"); 
INSERT INTO users_activity_log VALUES("837","27","Edited Lolita Villarosa Gerose Patient Profile","November 15, 2019 - 8:33 pm"); 
INSERT INTO users_activity_log VALUES("838","27","Added a New Individual Referral Record","November 16, 2019 9:37 pm"); 
INSERT INTO users_activity_log VALUES("839","27","Added a New Individual Referral Record","November 16, 2019 9:40 pm"); 
INSERT INTO users_activity_log VALUES("840","27","Added Cecon 500 mg as new medicine","November 17, 2019 - 12:42 pm"); 
INSERT INTO users_activity_log VALUES("841","27","Added Dolfenal as new medicine","November 17, 2019 - 12:44 pm"); 
INSERT INTO users_activity_log VALUES("842","27","Added Levocetirizine as new medicine","November 17, 2019 - 12:46 pm"); 
INSERT INTO users_activity_log VALUES("843","27","Edited Slena Wasky Patient Profile","November 18, 2019 - 5:41 pm"); 
INSERT INTO users_activity_log VALUES("844","27","Edited Rose Zirilli Patient Profile","November 18, 2019 - 5:41 pm"); 
INSERT INTO users_activity_log VALUES("845","27","Added Arya Stark to Immunization","November 18, 2019 - 9:03 pm"); 
INSERT INTO users_activity_log VALUES("846","27","Added Sansa Stark to Immunization","November 18, 2019 - 9:15 pm"); 
INSERT INTO users_activity_log VALUES("847","27","Successfully Backup the database","November 18, 2019, 9:17 pm"); 
INSERT INTO users_activity_log VALUES("848","27","Added Immunization Treatment to ","November 18, 2019 - 10:44 pm"); 
INSERT INTO users_activity_log VALUES("849","27","Added Immunization Treatment to ","November 18, 2019 - 10:48 pm"); 
INSERT INTO users_activity_log VALUES("850","27","Added Immunization Treatment to ","November 18, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("851","27","Added Immunization Treatment to ","November 18, 2019 - 10:51 pm"); 
INSERT INTO users_activity_log VALUES("852","27","Added Immunization Treatment to ","November 18, 2019 - 10:54 pm"); 
INSERT INTO users_activity_log VALUES("853","27","Added Immunization Treatment to Arya Stark","November 18, 2019 - 11:02 pm"); 
INSERT INTO users_activity_log VALUES("854","27","Added Immunization Treatment to Arya Stark","November 18, 2019 - 11:08 pm"); 
INSERT INTO users_activity_log VALUES("855","27","Added Immunization Treatment to Arya Stark","November 18, 2019 - 11:19 pm"); 
INSERT INTO users_activity_log VALUES("856","27","Added Immunization Treatment to Arya Stark","November 18, 2019 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("857","27","Added Immunization Treatment to Sansa Stark","November 19, 2019 - 6:43 pm"); 
INSERT INTO users_activity_log VALUES("858","27","Added Jamie Lannister to Immunization","November 19, 2019 - 7:42 pm"); 
INSERT INTO users_activity_log VALUES("859","27","Added Immunization Treatment to Jamie Lannister","November 19, 2019 - 7:44 pm"); 
INSERT INTO users_activity_log VALUES("860","27","Added Hilary Ahmor Sipat to Immunization","November 19, 2019 - 9:11 pm"); 
INSERT INTO users_activity_log VALUES("861","27","Added Immunization Treatment to Arya Stark","November 19, 2019 - 10:10 pm"); 
INSERT INTO users_activity_log VALUES("862","27","Added Immunization Treatment to Arya Stark","November 19, 2019 - 10:10 pm"); 
INSERT INTO users_activity_log VALUES("863","27","Successfully Backup the database","November 19, 2019, 10:45 pm"); 
INSERT INTO users_activity_log VALUES("864","27","Added Arya Stark to Immunization","November 19, 2019 - 10:49 pm"); 
INSERT INTO users_activity_log VALUES("865","27","Added Immunization Treatment to Arya Stark","November 19, 2019 - 10:50 pm"); 
INSERT INTO users_activity_log VALUES("866","27","Successfully Backup the database","November 19, 2019, 10:50 pm"); 
INSERT INTO users_activity_log VALUES("867","27","Successfully Backup the database","November 19, 2019, 10:52 pm"); 
INSERT INTO users_activity_log VALUES("868","27","Successfully Backup the database","November 19, 2019, 10:53 pm"); 
INSERT INTO users_activity_log VALUES("869","27","Successfully Backup the database","November 19, 2019, 10:54 pm"); 
INSERT INTO users_activity_log VALUES("870","27","Successfully Backup the database","November 19, 2019, 10:54 pm"); 
INSERT INTO users_activity_log VALUES("871","27","Added Hilary Ahmor Sipat to Immunization","November 20, 2019 - 1:23 pm"); 
INSERT INTO users_activity_log VALUES("872","27","Added Immunization Treatment to Hilary Ahmor Sipat","November 20, 2019 - 1:25 pm"); 
INSERT INTO users_activity_log VALUES("873","27","Added Daniel Andrew Go to Consultation","November 20, 2019 - 1:39 pm"); 
INSERT INTO users_activity_log VALUES("874","27","Added Prescription to Daniel Andrew Go","November 20, 2019 - 1:40 pm"); 
INSERT INTO users_activity_log VALUES("875","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 20, 2019 - 1:46 pm"); 
INSERT INTO users_activity_log VALUES("876","27","Added a Family Planning follow-up date for Mercy Buenafuente","November 20, 2019 - 1:47 pm"); 
INSERT INTO users_activity_log VALUES("877","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 20, 2019 - 1:52 pm"); 
INSERT INTO users_activity_log VALUES("878","27","Added John Matthew Lorizo to Consultation","November 20, 2019 - 3:47 pm"); 
INSERT INTO users_activity_log VALUES("879","27","Added Lolita Villarosa Gerose to Consultation","November 20, 2019 - 3:59 pm"); 
INSERT INTO users_activity_log VALUES("880","27","Added Prescription to Lolita Villarosa Gerose","November 20, 2019 - 4:02 pm"); 
INSERT INTO users_activity_log VALUES("881","27","Added Bernard Bermo to Consultation","November 20, 2019 - 4:03 pm"); 
INSERT INTO users_activity_log VALUES("882","27","Added Prescription to Bernard Bermo","November 20, 2019 - 6:44 pm"); 
INSERT INTO users_activity_log VALUES("883","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 20, 2019 - 7:15 pm"); 
INSERT INTO users_activity_log VALUES("884","182","Added Daniel Andrew Go to Consultation","November 20, 2019 - 9:07 pm"); 
INSERT INTO users_activity_log VALUES("885","182","Added Prescription to Daniel Andrew Go","November 20, 2019 - 9:07 pm"); 
INSERT INTO users_activity_log VALUES("886","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 3:24 pm"); 
INSERT INTO users_activity_log VALUES("887","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 3:27 pm"); 
INSERT INTO users_activity_log VALUES("888","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 3:28 pm"); 
INSERT INTO users_activity_log VALUES("889","27","Added Prescription to ","November 23, 2019 - 3:28 pm"); 
INSERT INTO users_activity_log VALUES("890","27","Added Prescription to ","November 23, 2019 - 4:06 pm"); 
INSERT INTO users_activity_log VALUES("891","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 4:10 pm"); 
INSERT INTO users_activity_log VALUES("892","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 4:12 pm"); 
INSERT INTO users_activity_log VALUES("893","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 4:14 pm"); 
INSERT INTO users_activity_log VALUES("894","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 4:15 pm"); 
INSERT INTO users_activity_log VALUES("895","27","Added Daniel Andrew Go to Consultation","November 23, 2019 - 4:16 pm"); 
INSERT INTO users_activity_log VALUES("896","27","Added Prescription to Daniel Andrew Go","November 23, 2019 - 4:17 pm"); 
INSERT INTO users_activity_log VALUES("897","27","Added Jan Mark Ballados to Consultation","November 23, 2019 - 4:22 pm"); 
INSERT INTO users_activity_log VALUES("898","27","Added Prescription to Jan Mark Ballados","November 23, 2019 - 4:25 pm"); 
INSERT INTO users_activity_log VALUES("899","27","Added Janeil Alcano to Consultation","November 23, 2019 - 4:27 pm"); 
INSERT INTO users_activity_log VALUES("900","27","Added Prescription to Janeil Alcano","November 23, 2019 - 4:28 pm"); 
INSERT INTO users_activity_log VALUES("901","27","Added Prescription to Janeil Alcano","November 23, 2019 - 4:28 pm"); 
INSERT INTO users_activity_log VALUES("902","27","Added Prescription to Janeil Alcano","November 23, 2019 - 4:38 pm"); 
INSERT INTO users_activity_log VALUES("903","27","Added Prescription to Janeil Alcano","November 23, 2019 - 4:38 pm"); 
INSERT INTO users_activity_log VALUES("904","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 6:41 pm"); 
INSERT INTO users_activity_log VALUES("905","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 6:42 pm"); 
INSERT INTO users_activity_log VALUES("906","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 6:42 pm"); 
INSERT INTO users_activity_log VALUES("907","27","Registered Markh B. Jamandre as new Patient","November 23, 2019 - 7:27 pm"); 
INSERT INTO users_activity_log VALUES("908","27","Added Markh B. Jamandre to Consultation","November 23, 2019 - 7:28 pm"); 
INSERT INTO users_activity_log VALUES("909","27","Added Prescription to Markh B. Jamandre","November 23, 2019 - 7:28 pm"); 



