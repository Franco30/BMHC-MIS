DROP TABLE brothers_and_sisters;

CREATE TABLE `brothers_and_sisters` (
  `bs_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  PRIMARY KEY (`bs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO brothers_and_sisters VALUES("1","3","John Michael Sipat","Male","August 30, 1998"); 
INSERT INTO brothers_and_sisters VALUES("2","3","Michaela Sipat","Female","June 25, 1998"); 
INSERT INTO brothers_and_sisters VALUES("3","3","Desmond Sipat","Male","April 21, 1994"); 
INSERT INTO brothers_and_sisters VALUES("4","6","Sansa Stark","Female","April 14, 2010"); 



DROP TABLE consultation;

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `consultation_date` varchar(50) NOT NULL,
  `head_of_the_family` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `complaints` varchar(600) NOT NULL,
  `complaints_description` varchar(300) NOT NULL,
  `pe_findings` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `lab_request` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`consultation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("57","7","2020-02-01","333","33","33","333/33","33.3","333","333","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","adfa","af","asdfadf","asf","21","Male","Gauzon","Feb","2020","No Prescription","February 1, 2020 - 9:25 pm"); 
INSERT INTO consultation VALUES("58","37","2020-02-01","3333","333","33","333/33","33.3","33","33","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache","asdf","asdf","asdf","asdf","21","Male","Kasilingan","Feb","2020","With Prescription","February 1, 2020 - 9:27 pm"); 
INSERT INTO consultation VALUES("59","27","2020-02-01","33aEFADF","33","33","333/33","33.3","33","33","Stomach Ache","ADF","ASDF","ASDF","ASDF","50","Female","Katilingban","Feb","2020","No Prescription","February 1, 2020 - 9:28 pm"); 
INSERT INTO consultation VALUES("60","7","2020-02-01","333","33","33","333/33","33.3","333","333","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","adfa","af","asdfadf","asf","21","Male","Gauzon","Jan","2020","No Prescription","February 1, 2020 - 9:25 pm"); 
INSERT INTO consultation VALUES("61","5","2020-02-01","33","33","33","333/33","33.3","33","33","Conjunctivitis","343","3434","343","34","21","Male","Katilingban","Feb","2020","No Prescription","February 1, 2020 - 9:32 pm"); 
INSERT INTO consultation VALUES("62","39","2020-02-02","Salvador Latosa","60","178","120/50","36.9","80","60","Colds and Flu, Fever, Headache","samp;le text","`1!@#$%^&*","!@~!@#$%^&*(","sdfaddf","21","Male","Mabinuligon","Feb","2020","With Prescription","February 2, 2020 - 1:31 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO consultation_prescription VALUES("54","45","29","27","Anti-TB Drugs","Rifampicin + isoniazid","?","","?","","?","","","3","33"); 
INSERT INTO consultation_prescription VALUES("55","48","37","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","","3","dfdf"); 
INSERT INTO consultation_prescription VALUES("56","47","29","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","✓","4","4"); 
INSERT INTO consultation_prescription VALUES("57","49","30","27","Anti-TB Drugs","Rifapentine","✓","","✓","","✓","","","33","33"); 
INSERT INTO consultation_prescription VALUES("58","50","38","27","Antibiotic","Cefalexin 250 ","","✓","","✓","✓","","","3","adfasdf"); 
INSERT INTO consultation_prescription VALUES("59","62","39","27","Antipyretic","Biogesic","✓","","✓","","✓","","","33","33"); 
INSERT INTO consultation_prescription VALUES("60","58","37","27","Anti-TB Drugs","Rifampicin 150 mg","✓","","✓","","✓","","","33","eee"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("46","27","Export","2020-02-08","11:07 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("47","27","Export","2020-02-08","11:12 pm","Successfully Exported Database"); 



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
  `purok` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`family_planning_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO fp_follow_up VALUES("40","4","2020-01-08","Condom","4","Try kung magbusong ka or indi","Imelita 0. Anjao","2020-07-31","Done"); 



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
  `purok` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`immunization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO immunization VALUES("10","3","33-483838338-3","12:00 PM","4.9","(09) 934374343","1","1","0","43","47","MHC","CHO Bacolod","Normal","Kahirup B","Female","Registered","Nov","2019","2019-01-01"); 
INSERT INTO immunization VALUES("11","8","11-025666793-2","6:05 AM","2.83","(09) 038383838","1","1","0","25","22","CHO Lying In","CHO Lying In","Normal","Kasilingan","Female","Registered","Dec","2019","2019-01-01"); 
INSERT INTO immunization VALUES("13","10","33-333333333-3","8:28 AM","3.04","","3","3","9","20","21","Taculing Health Center","CHO - Bacolod","NSVD","Paglaum","Male","Registered","Dec","2019","2020-01-01"); 
INSERT INTO immunization VALUES("14","11","83-838389383-8","12:15 AM","2.5","(09) 100306293","2","2","0","27","22","MHC","BCHC","NSVD","Matahum","Female","Registered","Dec","2019","2018-01-01"); 



DROP TABLE immunization_consultation;

CREATE TABLE `immunization_consultation` (
  `ic_id` int(11) NOT NULL AUTO_INCREMENT,
  `immunization_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  `nutritional_status` varchar(50) NOT NULL,
  `medical_history` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `rr` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `plan_of_action` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`ic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO immunization_consultation VALUES("7","10","3","SAMPLE 1 ","SAMPLE 2","November 27, 2019","35.0","90","140/40","30","SAMPLE 3","SAMPLE 5","SAMPLE 6","SAMPLE 7"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO immunization_treatment VALUES("15","3","BCG","November 20, 2019","1 month + 15 days","4.9","54","37.0",""); 
INSERT INTO immunization_treatment VALUES("16","8","BCG","November 18, 2018","","","","",""); 
INSERT INTO immunization_treatment VALUES("17","8","HEPA B","November 8, 2018","","","","",""); 
INSERT INTO immunization_treatment VALUES("18","8","PHIB 1","January 1, 2019","9 weeks and 6 days","4.7","54","36.2","Hrm 13"); 
INSERT INTO immunization_treatment VALUES("19","8","PHIB 2","February 6, 2019","","5.5","55","46.6",""); 
INSERT INTO immunization_treatment VALUES("20","8","PHIB 3","March 6, 2019","","6.3","60","36.3","14.8"); 
INSERT INTO immunization_treatment VALUES("21","8","OPV 1","January 9, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("22","8","OPV 2","February 6, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("23","8","OPV 3","March 6, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("24","8","IPV","March 6, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("25","8","PCV 1","January 9, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("26","8","PCV 2","February 6, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("27","8","PCV 3","March 6, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("28","8","MVO(6 mos.)","May 15, 2019","","6.9","61","36.7",""); 
INSERT INTO immunization_treatment VALUES("29","8","MV(9 mos.)","August 14, 2019","39 weeks","8","64","36.8",""); 
INSERT INTO immunization_treatment VALUES("30","8","MMR","November 19, 2019","53 weeks","8.2","68.5","36.1",""); 
INSERT INTO immunization_treatment VALUES("31","9","BCG","September 4, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("32","9","HEPA B","September 3, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("33","9","PHIB 1","November 23, 2019","7 weeks 1 day","4","53","36.4",""); 
INSERT INTO immunization_treatment VALUES("34","9","PHIB 2","November 20, 2019","11 weeks","4.5","54.1","36.8","
"); 
INSERT INTO immunization_treatment VALUES("35","9","OPV 1","October 23, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("36","9","OPV 2","November 20, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("37","9","PCV 1","November 23, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("38","9","PCV 2","November 20, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("39","10","BCG","July 25, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("40","10","HEPA B","July 24, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("41","10","PHIB 1","November 13, 2019","16 weeks","8.7","61.5","36.7",""); 
INSERT INTO immunization_treatment VALUES("42","10","OPV 1","November 13, 2019","","","","",""); 
INSERT INTO immunization_treatment VALUES("43","10","PCV 1","November 13, 2019","","","","",""); 



DROP TABLE medical_history;

CREATE TABLE `medical_history` (
  `medical_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `heent` varchar(500) NOT NULL,
  `chest_heart` varchar(500) NOT NULL,
  `abdomen` varchar(500) NOT NULL,
  `genital` varchar(500) NOT NULL,
  `extremities` varchar(500) NOT NULL,
  `skin` varchar(500) NOT NULL,
  `history` varchar(500) NOT NULL,
  PRIMARY KEY (`medical_history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("47","5","19","Consultation","12-08-19","5:56 pm","Dec","2019","2","December 8, 2019 5:56 pm"); 
INSERT INTO medication_dispensation VALUES("48","27","19","Consultation","12-08-19","6:04 pm","Dec","2019","5","December 8, 2019 6:04 pm"); 
INSERT INTO medication_dispensation VALUES("49","5","19","TB Medicine","2020-02-08","1:27 pm","Feb","2020","4","February 8, 2020 1:27 pm"); 
INSERT INTO medication_dispensation VALUES("50","7","19","TB Medicine","2020-02-08","2:12 pm","Feb","2020","20","February 8, 2020 2:12 pm"); 
INSERT INTO medication_dispensation VALUES("51","9","6","TB Medicine","2020-02-08","2:13 pm","Feb","2020","15","February 8, 2020 2:13 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_category` varchar(30) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","34","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","61","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","17","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","9","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","25","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Antipyretic","30","October 25, 2019 - 2:14 am"); 
INSERT INTO medicine VALUES("10","Cecon 500 mg","Tablet","Vitamins","20","November 17, 2019 - 12:42 pm"); 
INSERT INTO medicine VALUES("13","Rifampicin + isoniazid","Tablet","Anti-TB Drugs","20","November 27, 2019 - 2:49 pm"); 
INSERT INTO medicine VALUES("15","Rifampicin + isoniazid + Pyrazinamide + Ethambutol","Tablet","Anti-TB Drugs","25","November 27, 2019 - 2:50 pm"); 
INSERT INTO medicine VALUES("16","Calcium Carbonate (Calcimate)","Tablet","Antibiotic","25","November 27, 2019 - 2:51 pm"); 
INSERT INTO medicine VALUES("17","Ferrous Sulphate + Folic Acid","Tablet","Vitamins","20","November 27, 2019 - 2:54 pm"); 
INSERT INTO medicine VALUES("18","Vitamin B Complex","Tablet","Vitamins","20","December 3, 2019 - 11:38 pm"); 
INSERT INTO medicine VALUES("19","Celecoxib 200 mg","Capsule","Analgesic","31","December 3, 2019 - 11:42 pm"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("100","19","20","2020-02-08 1:22 pm"); 
INSERT INTO medicine_stocks VALUES("101","13","20","2020-02-08 1:51 pm"); 
INSERT INTO medicine_stocks VALUES("102","19","20","2020-02-08 2:13 pm"); 
INSERT INTO medicine_stocks VALUES("103","6","20","2020-02-08 2:14 pm"); 



DROP TABLE obstetrical_history;

CREATE TABLE `obstetrical_history` (
  `obstetrical_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `num_of_pregnancies` varchar(30) NOT NULL,
  `full_term` varchar(30) NOT NULL,
  `premature` varchar(30) NOT NULL,
  `abortions` varchar(30) NOT NULL,
  `living_children` varchar(30) NOT NULL,
  `dateoflastdelivery` varchar(30) NOT NULL,
  `typeoflastdelivery` varchar(100) NOT NULL,
  `pastmenstrualperiod` varchar(200) NOT NULL,
  `lastmenstrualperiod` varchar(200) NOT NULL,
  `dcmenstrualbleeding` varchar(200) NOT NULL,
  `history` varchar(500) NOT NULL,
  PRIMARY KEY (`obstetrical_history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;




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
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Single","53","Female","#54 Area 51, Mansilingan","Kasilingan","July 20, 1966","168","78","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Marvin Gerose","(09) 073773443","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","#1 Area 51, Mansilingan","Katilingban","April 14, 1998","176","60","(09) 061613101","Negros Occidental","Student","34-343435343-3","Charles Go","(09) 061613101","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","03-10-1970","174","174","(88) 888888888","Negros Occidental","Farmer","34-343434343-4","Erika Bermo","(30) 303030454","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","April 07, 1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay, Mansilingan","Gauzon","August 23, 2006","174","55","(34) 343434333","Negros Occidental","Student","33-333333333-3","Jona Alcano","(33) 333333454","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","July 20, 1966","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Jose Diana","(09) 073773443","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","04-07-1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Aug","2019","2019-08-01"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","53","Male","#3 Everlasting, Mansilingan","Kasilingan","07-20-1966","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Renzy Nono","(09) 073773443","Active","Jun","2019","2019-06-01"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Married","38","Male","#51 Area 51, Mansilingan","Gauzon","04-07-1981","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","Rommy Adryx","(93) 939343433","Active","Jul","2019","2019-07-01"); 
INSERT INTO patient VALUES("17","Jan Mark Ballados","Single","24","Male","#3 Area 51, Mansilingan","Kasilingan","06-14-1995","178","178","(09) 054441414","Negros Occidental","E-Jeep Driver","99-393933393-9","Mark John Ballados","(09) 333434343","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("18","Ariane Torres","Single","33","Male","#2 Area 51, Mansilingan","Paglaum","03-19-1986","170","170","(09) 033434343","Negros Occidental","Teacher","39-333393939-3","Ariane ","(09) 232323232","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("19","Kizsha Lauriaga","Single","28","Female","#3 Everlasting, Mansilingan","Kahirup A","08-21-1991","160","160","(09) 062623232","Negros Occidental","Street Vendor","30-303030303-0","Mark Panabe","(09) 334734343","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("20","Wilma Mendez","Single","21","Female","#3 Everlasting, Mansilingan","Kahirup B","05-31-1998","169","169","(09) 061134343","Negros Occidental","HRM","30-390393030-3","Minda Resuma","(09) 028393434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("22","Stay Bagagrel","Widowed","39","Female","#3 Kasilingan, Mansilingan","Paghidaet","06-10-1980","178","178","(09) 073738343","Negros Occidental","BHW","04-303030303-0","Michael Bagagrel","(09) 484383434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("23","Marie Bazagrel","Single","12","Female","#5 Kasilingan, Mansilingan","Kahirup B","06-01-2007","173","173","(09) 343434343","Negros Occidental","Student","39-393938838-4","Mama Mo","(09) 343434343","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("24","Anne Berquist","Single","42","Female","#3 Mahimayaon, Mansilingan","Kasilingan","03-15-1977","178","178","(09) 034343434","Negros Occidental","Nurse","33-434343434-3","John Berquist","(09) 073433434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("25","Anita Nelson","Widowed","43","Female","#4 Area 52, Mansilingan","Paghidaet","April 08, 1976","178","178","(09) 454545454","Negros Occidental","BHW","33-303033030-3","Willie Nelson","(09) 455454545","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("26","Slena Wasky","Single","43","Female","#3 Tagbalayan, Mansilingan","Gauzon","08-24-1976","176","176","(09) 348743745","Negros Occidental","BHW","43-459045454-5","Wilson Slena","(09) 454545454","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("27","Rose Zirilli","Widowed","50","Female","#52 Area 41, Mansilingan","Katilingban","06-11-1969","178","178","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Jimmy Zirili","(09) 454655553","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("28","Esperanza Consolacion","Married","89","Female","#52 Area 41, Mansilingan","Katilingban","June 11, 1969","178","89","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Sergio Consolacion","(09) 454655553","Deceased","Nov","2019","2019-10-01"); 
INSERT INTO patient VALUES("29","Markh B. Jamandre","Married","43","Male","#3 Everlasting, Mansilingan","Mabinuligon","10-14-1976","176","176","(09) 373737337","Negross Occidental","Teacher","39-338939383-9","Ms. Olive Jamandre","(09) 373737373","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("30","Lagrimas Casabuena Campa","Married","65","Female","Arceo, Mansilingan","Kahirup A","12-20-1953","154","154","(09) 061613101","Negros Occidental","None","39-033883938-3","Jesus Campa","(09) 038373737","Active","Dec","2019","2019-12-01"); 
INSERT INTO patient VALUES("37","Emmanuel James Tan","Single","21","Male","#3 Everlasting, Mansilingan","Kasilingan","04-14-1998","175","175","(09) 061613101","Negros Occidental","Student","84-849439393-9","Rambo Tan","(09) 027338383","Active","Dec","2019","2019-12-01"); 
INSERT INTO patient VALUES("38","Freya Allan","Single","18","Female","#3 Area 51, Mansilingan","Kasilingan","07-25-2001","178","178","(09) 061613101","Negros Occidental","Student","94-393874930-3","Jemar Allan","(09) 383334343","Active","Jan","2020","2020-01-20"); 
INSERT INTO patient VALUES("39","Jesse Franco Latosa","Single","21","Male","#3 Area 51, Mansilingan","Mabinuligon","08-30-1998","178","178","(09) 061613101","Negros Occidental","Graphic Designer","39-383930030-3","Jesse Latosa","(09) 061613101","Active","Feb","2020","2020-02-02"); 
INSERT INTO patient VALUES("40","Jose Ignacio Silga","Single","15","Select","#3 Area 45, Mansilingan","Kahirup A","2004-11-11","174","174","(09) 389348348","Negros Occidental","","93-849484894-9","Margaret Silga","(09) 484848383","Active","Feb","2020","2020-02-08"); 
INSERT INTO patient VALUES("41","Domingo Jose Carlos","Single","9","Male","#3 Pahayan, Mansilingan","Kasilingan","2010-02-23","162","162","(09) 383737387","Negros Occidental","n/a","93-883839939-3","Minda Carlos","(09) 343838388","Active","Feb","2020","2020-02-08"); 



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
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","06/01/2007","06/01/2007","20","CLMMRH","11/29/2005","Kahirup B","#15 Everlasting","Registered Immunization","Nov","2019","2019-11-01"); 
INSERT INTO patient_child VALUES("8","Zemira Anndrey Torrecarion Sabordo","Female","Mae Ann Torrecarion Sabordo","None","None","Renante Hanon Dulce","College","Calibration Technician","11/08/2018","11/08/2018","2.83","CHO","12/12/2018","Kasilingan","Hyacinth I, Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("10","Klyde Parar Ramos","Male","Novelyn Tupas Parar","College","None","Christian Efren Ramos","High School","Driver","07/24/2019","07/24/2019","3.04","CHO","08/14/2019","Paglaum","n/a, Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("11","Leanne Mandolado Tacdoro","Female","Roxanne Jabonete Mandolado","College","None","Lester John Gelito Tacdoro","College","Factory Worker","09/03/2019","09/03/2019","2.5","MHC","12/19/2019","Matahum","Cottage Rd., Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("12","Freya Allan","Female","asdf","afa","dfdf","sdfd","dfsd","adfdasf","2020-01-15","January 07, 2020","22","zdfd","2020-01-13","Kahirup B","dfadf, Mansilingan","Registered","Jan","2020","2020-01-01"); 



DROP TABLE pelvic_examination;

CREATE TABLE `pelvic_examination` (
  `pelvic_examination_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `perineum` varchar(500) NOT NULL,
  `vagina` varchar(500) NOT NULL,
  `cervix` varchar(500) NOT NULL,
  `consistency` varchar(500) NOT NULL,
  `uterus_position` varchar(500) NOT NULL,
  `uterus_size` varchar(500) NOT NULL,
  `uterus_mass` varchar(500) NOT NULL,
  `uterine_depth` varchar(500) NOT NULL,
  `adnexa` varchar(500) NOT NULL,
  PRIMARY KEY (`pelvic_examination_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;




DROP TABLE physical_examination;

CREATE TABLE `physical_examination` (
  `physical_examination_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `conjunctiva` varchar(200) NOT NULL,
  `neck` varchar(200) NOT NULL,
  `breast` varchar(200) NOT NULL,
  `thorax` varchar(200) NOT NULL,
  `abdomen` varchar(200) NOT NULL,
  `extremities` varchar(200) NOT NULL,
  PRIMARY KEY (`physical_examination_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;




DROP TABLE prenatal;

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `husband` varchar(50) NOT NULL,
  `prenatal_date` varchar(50) NOT NULL,
  `menstrual_hx` varchar(30) NOT NULL,
  `menarch` varchar(30) NOT NULL,
  `cycle` varchar(30) NOT NULL,
  `flow` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `dysmenorrhea` varchar(30) NOT NULL,
  `obgynehx` varchar(500) NOT NULL,
  `past_medical_hx` varchar(500) NOT NULL,
  `bloodtype` varchar(30) NOT NULL,
  `tt1` varchar(50) NOT NULL,
  `tt2` varchar(50) NOT NULL,
  `tt3` varchar(50) NOT NULL,
  `tt4` varchar(50) NOT NULL,
  `tt5` varchar(50) NOT NULL,
  `purok` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;




DROP TABLE prenatal_consultation;

CREATE TABLE `prenatal_consultation` (
  `prenatal_consultation_id` int(11) NOT NULL AUTO_INCREMENT,
  `prenatal_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctors_order_advice` varchar(500) NOT NULL,
  `date` varchar(30) NOT NULL,
  `g` varchar(30) NOT NULL,
  `p` varchar(30) NOT NULL,
  `ft` varchar(30) NOT NULL,
  `pt` varchar(30) NOT NULL,
  `a` varchar(30) NOT NULL,
  `lb` varchar(30) NOT NULL,
  `lmp` varchar(30) NOT NULL,
  `fh` varchar(30) NOT NULL,
  `fhb` varchar(30) NOT NULL,
  `edc` varchar(30) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `aog` varchar(30) NOT NULL,
  `presentation` varchar(500) NOT NULL,
  `complaints` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`prenatal_consultation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;




DROP TABLE prenatal_follow_up;

CREATE TABLE `prenatal_follow_up` (
  `follow_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `follow_up_date_time` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `follow_up_status` char(20) NOT NULL,
  PRIMARY KEY (`follow_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO prenatal_follow_up VALUES("32","27","9","2020/02/06 1:03 PM","Prenatal Checkup","Done"); 
INSERT INTO prenatal_follow_up VALUES("33","27","22","2020/02/04 1:03 PM","Prenatal Checkup","Done"); 



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
  `gender` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("15","2019-12-01","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","John Michael Aguillon","80","110/30","37.5","21","Broken leg, due to motorcycle accident","Jesse Franco Latosa","Male","Dec","2019","December 8, 2019 5:32 pm"); 
INSERT INTO referral VALUES("16","2019-12-01","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","Emmanuel James Tan","80","110/00","37.0","21","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:51 pm"); 
INSERT INTO referral VALUES("17","2019-12-01","Mansilingan Health Center","CLLMRH","Mansilingan, Bacolod City","Lacson st.","Sherlock","79","100/50","36.5","19","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:53 pm"); 
INSERT INTO referral VALUES("19","2020-02-12","Mansilingan Health Center","555","Mansilingan, Bacolod City","55","Freya Allan","55","555/55","55.5","55","555","Jesse Franco Latosa","Female","Feb","2020","February 1, 2020 9:11 pm"); 



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
  `month` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO referral_prenatal VALUES("20","2020-02-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Stay Bagagrel","56","120/50","36.5","24","GG","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Feb","2020","February 8, 2020 1:54 pm"); 



DROP TABLE risk_for_vaw;

CREATE TABLE `risk_for_vaw` (
  `risk_for_vaw_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `risks` varchar(500) NOT NULL,
  `referred_to` varchar(500) NOT NULL,
  PRIMARY KEY (`risk_for_vaw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;




DROP TABLE sti_risks;

CREATE TABLE `sti_risks` (
  `sti_risks_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `sti_risk` varchar(100) NOT NULL,
  `forwomen` varchar(500) NOT NULL,
  `formen` varchar(500) NOT NULL,
  PRIMARY KEY (`sti_risks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid VALUES("3","3","","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("4","8","July 10, 2019","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("5","9","December 28, 2017","January 25, 2018","June 13, 2019","","",""); 
INSERT INTO tetanus_toxoid VALUES("6","10","January 13, 2016","June 8, 2016","May 27, 2019","","",""); 
INSERT INTO tetanus_toxoid VALUES("7","11","","","","","",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid_fp VALUES("4","3","November 13, 2019","October 29, 2019","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("5","8","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("6","9","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("7","10","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("8","11","","","","",""); 



DROP TABLE type_of_feeding;

CREATE TABLE `type_of_feeding` (
  `type_of_feeding_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `ebf` varchar(11) NOT NULL,
  `mf` varchar(11) NOT NULL,
  `bff` varchar(11) NOT NULL,
  `tof_date` varchar(30) NOT NULL,
  PRIMARY KEY (`type_of_feeding_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding VALUES("11","3","","?","","November 20, 2019"); 
INSERT INTO type_of_feeding VALUES("12","3","","","?","November 28, 2019"); 
INSERT INTO type_of_feeding VALUES("14","8","?","","","December 1, 2019"); 
INSERT INTO type_of_feeding VALUES("15","8","?","","","December 10, 2019"); 
INSERT INTO type_of_feeding VALUES("16","8","?","","","December 25, 2019"); 
INSERT INTO type_of_feeding VALUES("17","8","?","","","December 31, 2019"); 
INSERT INTO type_of_feeding VALUES("18","8","?","","","November 19, 2019"); 
INSERT INTO type_of_feeding VALUES("25","8","","✓","","2020-01-08"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding_2 VALUES("4","3","November 12, 2019","","","",""); 
INSERT INTO type_of_feeding_2 VALUES("5","8","","May 15, 2019","November 20, 2019","November 9, 2019","November 8, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("6","9","","","","September 4, 2019","September 3, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("7","10","","","","July 25, 2019","July 24, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("8","11","","","","",""); 



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
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","$2y$10$xdDjYSYJFksfk9PbNV98WO54PHxAt4mGImSA/.V3x.u9oXTWb5BRS","1","February 8, 2020, 5:28 pm","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("28","Manilyn V. Jimera","343433434","Nurse","nurse101","$2y$10$nC9iALapDw9Fq.HyO1jm3eq5w6eYmTCtFC9uaerCDkjkYip1o1LHq","1","October 11, 2019, 3:11 am","September 22, 2019","4:01 am"); 
INSERT INTO users VALUES("29","Imelita 0. Anjao","345343","Midwife","midwife101","$2y$10$U5yakieAi0iObyzb68dtTORgd0cSf82Ro72COmfZgPJv6rygNlrQy","1","","September 22, 2019","4:02 am"); 
INSERT INTO users VALUES("30","Arian M. Garcia","3487y98u9","Midwife","midwife","$2y$10$JLIAeWbBY1RY2j.KtaLGMO2byjeT6rqNWaw/FsWVQk1EC9yxiwF0m","1","","September 22, 2019","4:02 am"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1316 DEFAULT CHARSET=latin1;




