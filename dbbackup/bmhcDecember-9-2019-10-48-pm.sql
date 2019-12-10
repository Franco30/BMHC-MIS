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
  `date` varchar(30) NOT NULL,
  `head_of_the_family` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `temp` varchar(30) NOT NULL,
  `rr` varchar(30) NOT NULL,
  `pr` varchar(30) NOT NULL,
  `complaints` varchar(100) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("43","30","December 3, 2019","Jesus","58.1","154.5","110/70","36.0","30","70","Sakit hawak kag ulo","n/a","T/C Musculoskeletal D/O; HPN; T/C Error of Refract","For ophthalmological consult","65","Female","Kahirup A","Dec","2019","With Prescription","December 3, 2019 - 11:31 pm"); 
INSERT INTO consultation VALUES("44","29","December 4, 2019","Mark Jamandre","89","176","111/40","36.5","180","90","Sakit ang likod kag kilid","None","None","None","43","Male","Mabinuligon","Dec","2019","With Prescription","December 4, 2019 - 2:03 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO consultation_prescription VALUES("34","29","12","27","Analgesic","Biogesic","✓","","✓","","✓","","✓","10","Drink more water"); 
INSERT INTO consultation_prescription VALUES("35","29","12","27","Antihistamines","Ceterizine","✓","","","","","","","3","NONE"); 
INSERT INTO consultation_prescription VALUES("36","30","29","27","Analgesic","Biogesic","✓","","✓","","✓","","✓","5","Drink More Water"); 
INSERT INTO consultation_prescription VALUES("37","31","12","27","Antihistamines","Levocetirizine","","✓","","","","","","2","NONE"); 
INSERT INTO consultation_prescription VALUES("38","32","4","27","Analgesic","Biogesic","✓","","✓","","","✓","","5","NONE"); 
INSERT INTO consultation_prescription VALUES("39","33","11","27","Analgesic","Biogesic","✓","","✓","","✓","","","4","4"); 
INSERT INTO consultation_prescription VALUES("40","33","11","27","Antihistamines","Levocetirizine","✓","","✓","","✓","","","3","3"); 
INSERT INTO consultation_prescription VALUES("41","34","8","27","Analgesic","Biogesic","✓","","✓","","✓","","","3","none"); 
INSERT INTO consultation_prescription VALUES("42","36","6","27","Analgesic","Dolfenal","","✓","","","","","","2","NONE"); 
INSERT INTO consultation_prescription VALUES("43","29","12","27","Anti-TB Drugs","Isoniazid","✓","","✓","","","","","3","e3"); 
INSERT INTO consultation_prescription VALUES("44","29","12","27","Antibiotic","Cefalexin 250 ","✓","","✓","","","","","3","ee"); 
INSERT INTO consultation_prescription VALUES("45","29","12","27","Analgesic","Dolfenal","✓","","✓","","","","","2","2"); 
INSERT INTO consultation_prescription VALUES("46","37","8","27","Analgesic","Dolfenal","","","✓","","","","","2","nice one"); 
INSERT INTO consultation_prescription VALUES("47","38","5","27","Analgesic","Dolfenal","✓","","✓","","✓","","✓","4","4"); 
INSERT INTO consultation_prescription VALUES("50","41","10","27","Analgesic","Dolfenal","","✓","","","","","","2","N/A"); 
INSERT INTO consultation_prescription VALUES("51","42","5","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","8","NONE"); 
INSERT INTO consultation_prescription VALUES("52","43","30","27","Vitamins","Vitamin B Complex","","✓","","","","","","3","AM+o 10 mg tab OP"); 
INSERT INTO consultation_prescription VALUES("53","44","29","27","Antibiotic","Calcium Carbonate (Calcimate)","","✓","","✓","","✓","","5","None"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

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
INSERT INTO db_backup VALUES("31","27","Export","November 23, 2019","7:29 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("32","27","Export","November 24, 2019","4:36 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("33","27","Export","November 27, 2019","5:25 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("34","27","Export","November 28, 2019","8:15 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("35","27","Export","November 29, 2019","9:27 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("36","27","Export","November 29, 2019","11:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("37","27","Export","December 4, 2019","12:43 pm","Successfully Exported Database"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("44","4","New to the Program","None","November 27, 2019 8:37 PM","College","Marvin Gerose","May 16, 1974","College","Businessman","15000","3","No","Sex Drive","Condom","Kasilingan","Assessed","Nov","2019"); 
INSERT INTO family_planning VALUES("45","20","New to the Program","None","December 04, 2019 1:12 PM","College","James Mendez","August 4, 1986","College","Businessman","15000","2","No","To prevent the chance of having a child","COC","Kahirup B","Assessed","Dec","2019"); 



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

INSERT INTO fp_follow_up VALUES("40","4","12-02-2019","Condom","4","Try kung magbusong ka or indi","Imelita 0. Anjao","12-23-2019","Done"); 



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

INSERT INTO immunization VALUES("10","3","33-483838338-3","12:00 PM","4.9","(09) 934374343","1","1","0","43","47","MHC","CHO Bacolod","Normal","Kahirup B","Female","Registered","Nov","2019",""); 
INSERT INTO immunization VALUES("11","8","11-025666793-2","6:05 AM","2.83","(09) 038383838","1","1","0","25","22","CHO Lying In","CHO Lying In","Normal","Kasilingan","Female","Registered","Dec","2019",""); 
INSERT INTO immunization VALUES("13","10","33-333333333-3","8:28 AM","3.04","","3","3","9","20","21","Taculing Health Center","CHO - Bacolod","NSVD","Paglaum","Male","Registered","Dec","2019",""); 
INSERT INTO immunization VALUES("14","11","83-838389383-8","12:15 AM","2.5","(09) 100306293","2","2","0","27","22","MHC","BCHC","NSVD","Matahum","Female","Registered","Dec","2019","December 9, 2019 - 12:09 am"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO medical_history VALUES("31","44","4","Epilepsy/Convulsion/Seizure","Severe chest pain","Mass in the abdomen","Mass in the uterus","Severe varicosities","Yellowish Skin","Diabetes"); 
INSERT INTO medical_history VALUES("32","45","20","Epilepsy/Convulsion/Seizure, Severe Headache/dizziness","Severe chest pain, Shortness of breath and easy fatigability","Mass in the abdomen","Mass in the uterus, Vaginal discharge","Severe varicosities","Yellowish Skin","Smoking, Drug Intake (anti-tuberculosis,
                                                                            anti-diabetic,
                                                                            anticonvulsant)"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("47","5","19","Consultation","12-08-19","5:56 pm","Dec","2019","2","December 8, 2019 5:56 pm"); 
INSERT INTO medication_dispensation VALUES("48","27","19","Consultation","12-08-19","6:04 pm","Dec","2019","5","December 8, 2019 6:04 pm"); 



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_type` varchar(10) NOT NULL,
  `medicine_category` varchar(30) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `date_time_call` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","31","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","25","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","14","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","9","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","20","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Antipyretic","30","October 25, 2019 - 2:14 am"); 
INSERT INTO medicine VALUES("10","Cecon 500 mg","Tablet","Vitamins","20","November 17, 2019 - 12:42 pm"); 
INSERT INTO medicine VALUES("13","Rifampicin + isoniazid","Tablet","Anti-TB Drugs","0","November 27, 2019 - 2:49 pm"); 
INSERT INTO medicine VALUES("15","Rifampicin + isoniazid + Pyrazinamide + Ethambutol","Tablet","Anti-TB Drugs","25","November 27, 2019 - 2:50 pm"); 
INSERT INTO medicine VALUES("16","Calcium Carbonate (Calcimate)","Tablet","Antibiotic","25","November 27, 2019 - 2:51 pm"); 
INSERT INTO medicine VALUES("17","Ferrous Sulphate + Folic Acid","Tablet","Vitamins","20","November 27, 2019 - 2:54 pm"); 
INSERT INTO medicine VALUES("18","Vitamin B Complex","Tablet","Vitamins","20","December 3, 2019 - 11:38 pm"); 
INSERT INTO medicine VALUES("19","Celecoxib 200 mg","Capsule","Analgesic","15","December 3, 2019 - 11:42 pm"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("94","10","20","12-08-19 5:59 pm"); 
INSERT INTO medicine_stocks VALUES("95","18","5","12-08-19 6:01 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO obstetrical_history VALUES("31","44","4","1","2","3","0","3","November 11, 2019 ","Normal ","3","3","1 Hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("32","45","20","1","2","1","0","2","May 22, 2018 ","Normal ","2","1","30 mins","Hydatidiform mole (within the last 12
                                                                    months)"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Single","53","Female","#54 Area 51, Mansilingan","Kasilingan","July 20, 1966","168","78","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Marvin Gerose","(09) 073773443","Active","Sep","2019"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","#1 Area 51, Mansilingan","Katilingban","April 14, 1998","176","60","(09) 061613101","Negros Occidental","Student","34-343435343-3","Charles Go","(09) 061613101","Active","Oct","2019"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","03-10-1970","174","174","(88) 888888888","Negros Occidental","Farmer","34-343434343-4","Erika Bermo","(30) 303030454","Active","Oct","2019"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","April 07, 1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Oct","2019"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay, Mansilingan","Gauzon","August 23, 2006","174","55","(34) 343434333","Negros Occidental","Student","33-333333333-3","Jona Alcano","(33) 333333454","Active","Oct","2019"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","July 20, 1966","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Jose Diana","(09) 073773443","Active","Sep","2019"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","July 20, 1966","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Active","Sep","2019"); 
INSERT INTO patient VALUES("11","Dennzel Quatchon","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","04-07-1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Dec","2018"); 
INSERT INTO patient VALUES("12","Jesse Franco Latosa","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","August 30, 1998","165","67","(09) 061613101","Negros Occidental","Student","34-343456454-6","Salvador Latosa","(93) 939343433","Active","Nov","2018"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","04-07-1998","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Aug","2019"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","53","Male","#3 Everlasting, Mansilingan","Kasilingan","07-20-1966","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Renzy Nono","(09) 073773443","Active","Jun","2019"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Married","38","Male","#51 Area 51, Mansilingan","Gauzon","04-07-1981","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","Rommy Adryx","(93) 939343433","Active","Jul","2019"); 
INSERT INTO patient VALUES("17","Jan Mark Ballados","Single","24","Male","#3 Area 51, Mansilingan","Kasilingan","06-14-1995","178","178","(09) 054441414","Negros Occidental","E-Jeep Driver","99-393933393-9","Mark John Ballados","(09) 333434343","Active","Oct","2019"); 
INSERT INTO patient VALUES("18","Ariane Torres","Single","33","Male","#2 Area 51, Mansilingan","Paglaum","03-19-1986","170","170","(09) 033434343","Negros Occidental","Teacher","39-333393939-3","Ariane ","(09) 232323232","Active","Oct","2019"); 
INSERT INTO patient VALUES("19","Kizsha Lauriaga","Single","28","Female","#3 Everlasting, Mansilingan","Kahirup A","08-21-1991","160","160","(09) 062623232","Negros Occidental","Street Vendor","30-303030303-0","Mark Panabe","(09) 334734343","Active","Oct","2019"); 
INSERT INTO patient VALUES("20","Wilma Mendez","Single","21","Female","#3 Everlasting, Mansilingan","Kahirup B","05-31-1998","169","169","(09) 061134343","Negros Occidental","HRM","30-390393030-3","Minda Resuma","(09) 028393434","Active","Nov","2019"); 
INSERT INTO patient VALUES("22","Stay Bagagrel","Widowed","39","Female","#3 Kasilingan, Mansilingan","Paghidaet","06-10-1980","178","178","(09) 073738343","Negros Occidental","BHW","04-303030303-0","Michael Bagagrel","(09) 484383434","Active","Nov","2019"); 
INSERT INTO patient VALUES("23","Marie Bazagrel","Single","12","Female","#5 Kasilingan, Mansilingan","Kahirup B","06-01-2007","173","173","(09) 343434343","Negros Occidental","Student","39-393938838-4","Mama Mo","(09) 343434343","Active","Nov","2019"); 
INSERT INTO patient VALUES("24","Anne Berquist","Single","42","Female","#3 Mahimayaon, Mansilingan","Kasilingan","03-15-1977","178","178","(09) 034343434","Negros Occidental","Nurse","33-434343434-3","John Berquist","(09) 073433434","Active","Nov","2019"); 
INSERT INTO patient VALUES("25","Anita Nelson","Widowed","43","Female","#4 Area 52, Mansilingan","Paghidaet","April 08, 1976","178","178","(09) 454545454","Negros Occidental","BHW","33-303033030-3","Willie Nelson","(09) 455454545","Active","Nov","2019"); 
INSERT INTO patient VALUES("26","Slena Wasky","Single","43","Female","#3 Tagbalayan, Mansilingan","Gauzon","08-24-1976","176","176","(09) 348743745","Negros Occidental","BHW","43-459045454-5","Wilson Slena","(09) 454545454","Active","Nov","2019"); 
INSERT INTO patient VALUES("27","Rose Zirilli","Widowed","50","Female","#52 Area 41, Mansilingan","Katilingban","06-11-1969","178","178","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Jimmy Zirili","(09) 454655553","Active","Nov","2019"); 
INSERT INTO patient VALUES("28","Esperanza Consolacion","Married","89","Female","#52 Area 41, Mansilingan","Katilingban","June 11, 1969","178","89","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Sergio Consolacion","(09) 454655553","Deceased","Nov","2019"); 
INSERT INTO patient VALUES("29","Markh B. Jamandre","Married","43","Male","#3 Everlasting, Mansilingan","Mabinuligon","10-14-1976","176","176","(09) 373737337","Negross Occidental","Teacher","39-338939383-9","Ms. Olive Jamandre","(09) 373737373","Active","Nov","2019"); 
INSERT INTO patient VALUES("30","Lagrimas Casabuena Campa","Married","65","Female","Arceo, Mansilingan","Kahirup A","12-20-1953","154","154","(09) 061613101","Negros Occidental","None","39-033883938-3","Jesus Campa","(09) 038373737","Active","Dec","2019"); 
INSERT INTO patient VALUES("37","Emmanuel James Tan","Single","21","Male","#3 Everlasting, Mansilingan","Kasilingan","04-14-1998","175","175","(09) 061613101","Negros Occidental","Student","84-849439393-9","Rambo Tan","(09) 027338383","Active","Dec","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","06/01/2007","06/01/2007","20","CLMMRH","11/29/2005","Kahirup B","#15 Everlasting","Registered Immunization","Nov","2019"); 
INSERT INTO patient_child VALUES("8","Zemira Anndrey Torrecarion Sabordo","Female","Mae Ann Torrecarion Sabordo","None","None","Renante Hanon Dulce","College","Calibration Technician","11/08/2018","11/08/2018","2.83","CHO","12/12/2018","Kasilingan","Hyacinth I, Mansilingan","Registered Immunization","Dec","2019"); 
INSERT INTO patient_child VALUES("10","Klyde Parar Ramos","Male","Novelyn Tupas Parar","College","None","Christian Efren Ramos","High School","Driver","07/24/2019","07/24/2019","3.04","CHO","08/14/2019","Paglaum","n/a, Mansilingan","Registered Immunization","Dec","2019"); 
INSERT INTO patient_child VALUES("11","Leanne Mandolado Tacdoro","Female","Roxanne Jabonete Mandolado","College","None","Lester John Gelito Tacdoro","College","Factory Worker","09/03/2019","09/03/2019","2.5","MHC","12/19/2019","Matahum","Cottage Rd., Mansilingan","Registered Immunization","Dec","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO pelvic_examination VALUES("41","44","4","Scars","Congested, Bartholin cyst","Congested, Erosion","Firm, Soft","Anteflexed, Retroflexed","Normal, Small","Yes","50","Mass"); 
INSERT INTO pelvic_examination VALUES("42","45","20","Warts","Congested","Discharge","Firm","Anteflexed","Small","Yes","10","Mass"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO physical_examination VALUES("31","44","4","120/50","89","178","90","Pale","Enlarged thyroid","Mass","Abnormal heart sounds/cardiac rate, Abnormal breath sounds/respiratory rate","Enlarged liver, Mass","Edema"); 
INSERT INTO physical_examination VALUES("32","45","20","111/11","89","175","90","Pale","Enlarged thyroid","Mass","Abnormal breath sounds/respiratory rate","Enlarged liver","Varicosities"); 



DROP TABLE prenatal;

CREATE TABLE `prenatal` (
  `prenatal_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `husband` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `menstrual_hx` varchar(30) NOT NULL,
  `menarch` varchar(30) NOT NULL,
  `cycle` varchar(30) NOT NULL,
  `flow` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `dysmenorrhea` varchar(30) NOT NULL,
  `obgynehx` varchar(500) NOT NULL,
  `past_medical_hx` varchar(500) NOT NULL,
  `bloodtype` varchar(30) NOT NULL,
  `tt1` varchar(30) NOT NULL,
  `tt2` varchar(30) NOT NULL,
  `tt3` varchar(30) NOT NULL,
  `tt4` varchar(30) NOT NULL,
  `tt5` varchar(30) NOT NULL,
  `purok` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO prenatal VALUES("5","10","Ron Jay Buenafe","November 28, 2019","None","12","Regular/Monthly","moderate","3 days","None","Prenatal c/o Dr. Legislador 10/15/16","None","O","November 16, 2016","November 16, 2019","","","","Kasilingan","Nov","2019"); 
INSERT INTO prenatal VALUES("6","10","Ron Jay Buenafe","November 28, 2018","None","12","Regular/Monthly","moderate","3 days","None","Prenatal c/o Dr. Legislador 10/15/16","None","O","November 16, 2016","November 16, 2019","December 16, 2019","","","Kasilingan","Nov","2018"); 
INSERT INTO prenatal VALUES("8","22","Jesper Bagagrel","October 31, 2019","None","12","Regular/Monthly","Moderate","3 days","None","Prenatal c/o Dr. Legislador 10/15/16","None","A+","November 18, 2019","","","","","Paghidaet","Oct","2019"); 
INSERT INTO prenatal VALUES("9","9","Wilson Diana","December 4, 2019","0","12","Regular/Monthly","Moderate","3 days","None","Prenatal c/o Dr. Legislador 10/15/16","None","B+","November 16, 2016","November 26, 2019","","","","Kasilingan","Dec","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO prenatal_consultation VALUES("6","8","22","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","March 20, 2019","1","1","1","1","0","3","November 28, 2019","3","3","November 12, 2019","120/50","37.0","89","170","1 year","sample presentation","sample complaints","first"); 
INSERT INTO prenatal_consultation VALUES("9","5","10","NONE","December 2, 2019","1","1","1","1","1","1","December 2, 2019","3","3","December 2, 2019","120/50","37.5","89","170","12 months","NONE","NONE","first"); 
INSERT INTO prenatal_consultation VALUES("10","5","10","Nice","December 4, 2019","","","","","","","","3","4","","120/50","","38","","12 months","bakod","none",""); 
INSERT INTO prenatal_consultation VALUES("11","9","9","For CBC, Urinalysis, HBSag
VDRL
FesO4 2 bottles (once a day)
Pre - mature MTV (once a day)","December 4, 2019","1","1","1","1","1","1","February 2, 2019","4","2","November 9, 2019","111/11","36.0","55","175","3 months","","","first"); 
INSERT INTO prenatal_consultation VALUES("12","9","9","VDRL","January 15, 2020","","","","","","","","3","4","","111/11","","89","","8 months","None","None",""); 



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

INSERT INTO prenatal_follow_up VALUES("32","27","9","11/13/2019 4:26 PM","d","Done"); 
INSERT INTO prenatal_follow_up VALUES("33","27","22","12/09/2019 4:27 PM","dfd","Pending"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("15","12-08-2019","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","John Michael Aguillon","80","110/30","37.5","21","Broken leg, due to motorcycle accident","Jesse Franco Latosa","Male","Dec","2019","December 8, 2019 5:32 pm"); 
INSERT INTO referral VALUES("16","12/09/2019","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","Emmanuel James Tan","80","110/00","37.0","21","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:51 pm"); 
INSERT INTO referral VALUES("17","12/10/2019","Mansilingan Health Center","CLLMRH","Mansilingan, Bacolod City","Lacson st.","Sherlock","79","100/50","36.5","19","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:53 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO referral_prenatal VALUES("8","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson st.","Kherrie Tejare","50","130/40","37.5","18","Fever","1","1","2","2","TT3","October 22, 2019","Jesse Franco Latosa","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral_prenatal VALUES("9","October 21, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson st.","Kherrie Tejare","50","130/40","37.5","18","Fever","1","1","2","2","TT3","October 22, 2019","Jesse Franco Latosa","Oct","2019","October 26, 2019 9:00 AM"); 
INSERT INTO referral_prenatal VALUES("10","October 23, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","Franze Beatriz Caballero","78","150/55","37.6","17","Fever","1","1","1","1","TT1","October 22, 2019","Jesse Franco Latosa","Oct","2019","October 26, 2019 11:19 pm"); 
INSERT INTO referral_prenatal VALUES("15","October 24, 2019","Mansilingan Health Center","CLMH","Mansilingan, Bacolod City","Lacson St.","Franze Beatriz Caballero","66","150/55","36.6","17","Fever","0","1","1","1","TT3","October 23, 2019","Jesse Franco Latosa","Oct","2019","October 26, 2019 11:27 pm"); 
INSERT INTO referral_prenatal VALUES("16","November 25, 2019","Mansilingan Health Center","City Health Center","Mansilingan, Bacolod City","Shopping","Marian Guadalupe","89","130/50","36.5","39","Stomach Ache","0","0","0","0","TT1","November 23, 2019","Manilyn V. Jimera","Nov","2019","November 25, 2019 8:35 pm"); 
INSERT INTO referral_prenatal VALUES("17","November 28, 2019","Mansilingan Health Center","CHO","Mansilingan, Bacolod City","Shopping Lasalle","Barbie Imperial","90","120/50","37.5","28","Gasakit ang tiyan 1 hour","1","1","3","30","TT 1","November 20, 2019","Jesse Franco Latosa","Nov","2019","November 28, 2019 7:08 pm"); 
INSERT INTO referral_prenatal VALUES("19","November 28, 2019","Mansilingan Health Center","CHO","Mansilingan, Bacolod City","Lacson St.","Wilma Mendez","90","103/50","37.5","30","Gasakit ang tiyan isa na ka oras pero wala man gabatyag nga manuguwa na ang bata","1","1","3","40","TT 4","October 15, 2019","Manilyn V. Jimera","Nov","2019","November 28, 2019 7:15 pm"); 



DROP TABLE risk_for_vaw;

CREATE TABLE `risk_for_vaw` (
  `risk_for_vaw_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `risks` varchar(500) NOT NULL,
  `referred_to` varchar(500) NOT NULL,
  PRIMARY KEY (`risk_for_vaw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO risk_for_vaw VALUES("23","44","4","Partner does not approve of the visit to FP Clinic","Others - BDO"); 
INSERT INTO risk_for_vaw VALUES("24","45","20","Unpleasant relationship with partner","DSWD - "); 



DROP TABLE sti_risks;

CREATE TABLE `sti_risks` (
  `sti_risks_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `sti_risk` varchar(100) NOT NULL,
  `forwomen` varchar(500) NOT NULL,
  `formen` varchar(500) NOT NULL,
  PRIMARY KEY (`sti_risks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO sti_risks VALUES("31","44","4","With history of multiple partners","Treated for STIs in the past","Treated for STIs in the past"); 
INSERT INTO sti_risks VALUES("32","45","20","With history of multiple partners","Pain or burning sensation, Treated for STIs in the past","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding VALUES("11","3","","✓","","November 20, 2019"); 
INSERT INTO type_of_feeding VALUES("12","3","","","✓","November 28, 2019"); 
INSERT INTO type_of_feeding VALUES("14","8","✓","","","December 1, 2019"); 
INSERT INTO type_of_feeding VALUES("15","8","✓","","","December 10, 2019"); 
INSERT INTO type_of_feeding VALUES("16","8","✓","","","December 25, 2019"); 
INSERT INTO type_of_feeding VALUES("17","8","✓","","","December 31, 2019"); 
INSERT INTO type_of_feeding VALUES("18","8","✓","","","November 19, 2019"); 
INSERT INTO type_of_feeding VALUES("19","8","✓","","","November 30, 2019"); 
INSERT INTO type_of_feeding VALUES("20","9","✓","","","November 3, 2019"); 
INSERT INTO type_of_feeding VALUES("21","9","✓","","","December 3, 2019"); 
INSERT INTO type_of_feeding VALUES("22","10","✓","","","October 8, 2019"); 
INSERT INTO type_of_feeding VALUES("23","10","","","✓","November 12, 2019"); 
INSERT INTO type_of_feeding VALUES("24","10","","","✓","December 25, 2019"); 



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
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","$2y$10$T4nILnvIaeVNdCqbGCzqsuZ0Dff2.v3w8DzZ0XjL8SZXm.tdNoXw6","1","December 9, 2019, 9:32 am","September 22, 2019","4:01 am"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=1170 DEFAULT CHARSET=latin1;

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
INSERT INTO users_activity_log VALUES("910","27","Successfully Backup the database","November 23, 2019, 7:29 pm"); 
INSERT INTO users_activity_log VALUES("911","27","Added Jesse Franco Latosa to Consultation","November 23, 2019 - 8:16 pm"); 
INSERT INTO users_activity_log VALUES("912","27","Added Prescription to Jesse Franco Latosa","November 23, 2019 - 8:17 pm"); 
INSERT INTO users_activity_log VALUES("913","27","Added Lolita Villarosa Gerose to Consultation","November 24, 2019 - 3:11 pm"); 
INSERT INTO users_activity_log VALUES("914","27","Added Prescription to Lolita Villarosa Gerose","November 24, 2019 - 3:12 pm"); 
INSERT INTO users_activity_log VALUES("915","27","Added Dennzel Quatchon to Consultation","November 24, 2019 - 3:19 pm"); 
INSERT INTO users_activity_log VALUES("916","27","Added Prescription to Dennzel Quatchon","November 24, 2019 - 3:19 pm"); 
INSERT INTO users_activity_log VALUES("917","27","Added Prescription to Dennzel Quatchon","November 24, 2019 - 3:20 pm"); 
INSERT INTO users_activity_log VALUES("918","27","Edited Hilary Ahmor Sipat Child Patient Profile","November 24, 2019 - 3:24 pm"); 
INSERT INTO users_activity_log VALUES("919","27","Updated the Prenatal follow-up date for Lolita Villarosa Gerose","November 24, 2019 - 4:33 pm"); 
INSERT INTO users_activity_log VALUES("920","27","Successfully Backup the database","November 24, 2019, 4:36 pm"); 
INSERT INTO users_activity_log VALUES("921","27","Added Janeil Alcano to Consultation","November 25, 2019 - 4:26 pm"); 
INSERT INTO users_activity_log VALUES("922","27","Added Prescription to Janeil Alcano","November 25, 2019 - 4:28 pm"); 
INSERT INTO users_activity_log VALUES("923","27","Updated the Prenatal follow-up date for Lolita Villarosa Gerose","November 25, 2019 - 4:39 pm"); 
INSERT INTO users_activity_log VALUES("924","27","Added a New Individual Referral Record","November 25, 2019 8:22 pm"); 
INSERT INTO users_activity_log VALUES("925","27","Added a New Prenatal Referral Record","November 25, 2019 8:35 pm"); 
INSERT INTO users_activity_log VALUES("926","27","Added Markh B. Jamandre to Consultation","November 25, 2019 - 9:09 pm"); 
INSERT INTO users_activity_log VALUES("927","27","Added Bernard Bermo to Consultation","November 25, 2019 - 9:12 pm"); 
INSERT INTO users_activity_log VALUES("928","27","Added Prescription to Bernard Bermo","November 25, 2019 - 9:12 pm"); 
INSERT INTO users_activity_log VALUES("929","27","Added Prescription to Jesse Franco Latosa","November 26, 2019 - 12:22 am"); 
INSERT INTO users_activity_log VALUES("930","27","Added Prescription to Jesse Franco Latosa","November 26, 2019 - 12:22 am"); 
INSERT INTO users_activity_log VALUES("931","27","Added Prescription to Jesse Franco Latosa","November 26, 2019 - 12:22 am"); 
INSERT INTO users_activity_log VALUES("932","27","Added Margarita Diana to Family Planning","November 26, 2019 - 10:53 pm"); 
INSERT INTO users_activity_log VALUES("933","27","Added Margarita Diana to Family Planning","November 26, 2019 - 11:09 pm"); 
INSERT INTO users_activity_log VALUES("934","27","Added Lolita Villarosa Gerose to Family Planning Assessment","November 26, 2019 - 11:24 pm"); 
INSERT INTO users_activity_log VALUES("935","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 10:47 am"); 
INSERT INTO users_activity_log VALUES("936","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 10:47 am"); 
INSERT INTO users_activity_log VALUES("937","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 10:48 am"); 
INSERT INTO users_activity_log VALUES("938","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 11:39 am"); 
INSERT INTO users_activity_log VALUES("939","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 11:42 am"); 
INSERT INTO users_activity_log VALUES("940","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 11:44 am"); 
INSERT INTO users_activity_log VALUES("941","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 11:46 am"); 
INSERT INTO users_activity_log VALUES("942","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 11:46 am"); 
INSERT INTO users_activity_log VALUES("943","27","Added Rifampicin + isoniazid as new medicine","November 27, 2019 - 2:49 pm"); 
INSERT INTO users_activity_log VALUES("944","27","Added Rifampicin + isoniazid + Pyrazinamide + Ethambutol as new medicine","November 27, 2019 - 2:49 pm"); 
INSERT INTO users_activity_log VALUES("945","27","Added Rifampicin + isoniazid + Pyrazinamide + Ethambutol as new medicine","November 27, 2019 - 2:50 pm"); 
INSERT INTO users_activity_log VALUES("946","27","Added Calcium Carbonate (Calcimate) as new medicine","November 27, 2019 - 2:51 pm"); 
INSERT INTO users_activity_log VALUES("947","27","Added Ferrous Sulphate + Folic Acid as new medicine","November 27, 2019 - 2:54 pm"); 
INSERT INTO users_activity_log VALUES("948","27","Added Mercy Buenafuente to Family Planning Assessment","November 27, 2019 - 5:21 pm"); 
INSERT INTO users_activity_log VALUES("949","27","Successfully Backup the database","November 27, 2019, 5:25 pm"); 
INSERT INTO users_activity_log VALUES("950","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 27, 2019 - 5:38 pm"); 
INSERT INTO users_activity_log VALUES("951","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 27, 2019 - 5:38 pm"); 
INSERT INTO users_activity_log VALUES("952","27","Updated the Family Planning follow-up date for Mercy Buenafuente","November 27, 2019 - 5:38 pm"); 
INSERT INTO users_activity_log VALUES("953","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 27, 2019 - 5:46 pm"); 
INSERT INTO users_activity_log VALUES("954","27","Added Lolita Villarosa Gerose to Family Planning","November 27, 2019 - 6:19 pm"); 
INSERT INTO users_activity_log VALUES("955","27","Added Lolita Villarosa Gerose to Family Planning","November 27, 2019 - 6:25 pm"); 
INSERT INTO users_activity_log VALUES("956","27","Added Lolita Villarosa Gerose to Family Planning","November 27, 2019 - 6:45 pm"); 
INSERT INTO users_activity_log VALUES("957","27","Added Lolita Villarosa Gerose to Family Planning Assessment","November 27, 2019 - 6:49 pm"); 
INSERT INTO users_activity_log VALUES("958","27","Added Kizsha Lauriaga to Family Planning","November 27, 2019 - 6:50 pm"); 
INSERT INTO users_activity_log VALUES("959","27","Added Wilma Mendez to Family Planning","November 27, 2019 - 6:54 pm"); 
INSERT INTO users_activity_log VALUES("960","27","Added Janeil Alcano to Consultation","November 27, 2019 - 8:13 pm"); 
INSERT INTO users_activity_log VALUES("961","27","Added Prescription to Janeil Alcano","November 27, 2019 - 8:15 pm"); 
INSERT INTO users_activity_log VALUES("962","27","Added Daniel Andrew Go to Consultation","November 27, 2019 - 8:34 pm"); 
INSERT INTO users_activity_log VALUES("963","27","Added Prescription to Daniel Andrew Go","November 27, 2019 - 8:35 pm"); 
INSERT INTO users_activity_log VALUES("964","27","Added Lolita Villarosa Gerose to Family Planning","November 27, 2019 - 8:37 pm"); 
INSERT INTO users_activity_log VALUES("965","27","Added Lolita Villarosa Gerose to Family Planning Assessment","November 27, 2019 - 8:40 pm"); 
INSERT INTO users_activity_log VALUES("966","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","November 27, 2019 - 9:53 pm"); 
INSERT INTO users_activity_log VALUES("967","27","Added a New Individual Referral Record","November 28, 2019 6:43 pm"); 
INSERT INTO users_activity_log VALUES("968","27","Added a New Individual Referral Record","November 28, 2019 6:52 pm"); 
INSERT INTO users_activity_log VALUES("969","27","Added a New Individual Referral Record","November 28, 2019 6:57 pm"); 
INSERT INTO users_activity_log VALUES("970","27","Added a New Individual Referral Record","November 28, 2019 7:00 pm"); 
INSERT INTO users_activity_log VALUES("971","27","Added a New Prenatal Referral Record","November 28, 2019 7:08 pm"); 
INSERT INTO users_activity_log VALUES("972","27","Added a New Prenatal Referral Record","November 28, 2019 7:12 pm"); 
INSERT INTO users_activity_log VALUES("973","27","Added a New Prenatal Referral Record","November 28, 2019 7:15 pm"); 
INSERT INTO users_activity_log VALUES("974","27","Deactivated User Account","November 28, 2019 - 7:26 pm"); 
INSERT INTO users_activity_log VALUES("975","27","Activated User Account","November 28, 2019 - 7:27 pm"); 
INSERT INTO users_activity_log VALUES("976","27","Successfully Backup the database","November 28, 2019, 8:15 pm"); 
INSERT INTO users_activity_log VALUES("977","27","Added Mercy Buenafuente to Prenatal","November 28, 2019 - 10:57 pm"); 
INSERT INTO users_activity_log VALUES("978","27","Added Kizsha Lauriaga to Prenatal","November 29, 2019 - 12:58 am"); 
INSERT INTO users_activity_log VALUES("979","27","Added Stay Bagagrel to Prenatal","November 29, 2019 - 1:02 am"); 
INSERT INTO users_activity_log VALUES("980","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","November 29, 2019 - 6:13 pm"); 
INSERT INTO users_activity_log VALUES("981","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:23 pm"); 
INSERT INTO users_activity_log VALUES("982","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:23 pm"); 
INSERT INTO users_activity_log VALUES("983","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:24 pm"); 
INSERT INTO users_activity_log VALUES("984","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:25 pm"); 
INSERT INTO users_activity_log VALUES("985","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:26 pm"); 
INSERT INTO users_activity_log VALUES("986","27","Updated account of Diana Rose S. Laput","November 29, 2019 - 7:26 pm"); 
INSERT INTO users_activity_log VALUES("987","27","added 20 pieces of Ferrous Sulphate + Folic Acid to stocks","November 29, 2019 8:01 pm"); 
INSERT INTO users_activity_log VALUES("988","27","added 25 pieces of Rifampicin + isoniazid + Pyrazinamide + Ethambutol to stocks","November 29, 2019 8:02 pm"); 
INSERT INTO users_activity_log VALUES("989","27","added 25 pieces of Calcium Carbonate (Calcimate) to stocks","November 29, 2019 8:02 pm"); 
INSERT INTO users_activity_log VALUES("990","27","added 10 pieces of Rifapentine to stocks","November 29, 2019 8:03 pm"); 
INSERT INTO users_activity_log VALUES("991","27","Added Mercy Buenafuente to Prenatal Consultation","November 29, 2019 - 8:47 pm"); 
INSERT INTO users_activity_log VALUES("992","27","Successfully Backup the database","November 29, 2019, 9:27 pm"); 
INSERT INTO users_activity_log VALUES("993","27","Added Mercy Buenafuente to Prenatal Consultation","November 29, 2019 - 10:15 pm"); 
INSERT INTO users_activity_log VALUES("994","27","Added Stay Bagagrel to Prenatal Consultation","November 29, 2019 - 10:58 pm"); 
INSERT INTO users_activity_log VALUES("995","27","Added Stay Bagagrel to Prenatal Consultation","November 29, 2019 - 11:27 pm"); 
INSERT INTO users_activity_log VALUES("996","27","Successfully Backup the database","November 29, 2019, 11:41 pm"); 
INSERT INTO users_activity_log VALUES("997","27","Added Mercy Buenafuente to Prenatal Consultation","November 29, 2019 - 11:55 pm"); 
INSERT INTO users_activity_log VALUES("998","27","Added Mercy Buenafuente to Prenatal Consultation","November 30, 2019 - 7:33 pm"); 
INSERT INTO users_activity_log VALUES("999","27","Added Mercy Buenafuente to Prenatal Consultation","November 30, 2019 - 7:37 pm"); 
INSERT INTO users_activity_log VALUES("1000","27","Added Lolita Villarosa Gerose to Consultation","November 30, 2019 - 8:09 pm"); 
INSERT INTO users_activity_log VALUES("1001","27","Added Prescription to Lolita Villarosa Gerose","November 30, 2019 - 8:10 pm"); 
INSERT INTO users_activity_log VALUES("1002","27","Added Janeil Alcano to Consultation","November 30, 2019 - 8:20 pm"); 
INSERT INTO users_activity_log VALUES("1003","27","Added Prescription to Janeil Alcano","November 30, 2019 - 8:20 pm"); 
INSERT INTO users_activity_log VALUES("1004","27","Added Mercy Buenafuente to Prenatal Consultation","December 2, 2019 - 12:25 pm"); 
INSERT INTO users_activity_log VALUES("1005","27","Added Mercy Buenafuente to Prenatal Consultation","December 2, 2019 - 12:26 pm"); 
INSERT INTO users_activity_log VALUES("1006","27","Added Mercy Buenafuente to Consultation","December 2, 2019 - 12:29 pm"); 
INSERT INTO users_activity_log VALUES("1007","27","Added Prescription to Mercy Buenafuente","December 2, 2019 - 12:29 pm"); 
INSERT INTO users_activity_log VALUES("1008","27","dispensed 5 Biogesic to Dennzel Quatchon","December 2, 2019 4:41 pm"); 
INSERT INTO users_activity_log VALUES("1009","27","Added Daniel Andrew Go to Consultation","December 2, 2019 - 4:58 pm"); 
INSERT INTO users_activity_log VALUES("1010","27","Added Prescription to Daniel Andrew Go","December 2, 2019 - 4:59 pm"); 
INSERT INTO users_activity_log VALUES("1011","27","Updated the Prenatal follow-up date for Mercy Buenafuente","December 2, 2019 - 10:58 pm"); 
INSERT INTO users_activity_log VALUES("1012","27","Registered Lagrimas Casabuena Campa as new Patient","December 3, 2019 - 11:27 pm"); 
INSERT INTO users_activity_log VALUES("1013","27","Added Lagrimas Casabuena Campa to Consultation","December 3, 2019 - 11:31 pm"); 
INSERT INTO users_activity_log VALUES("1014","27","Added Vitamin B Complex as new medicine","December 3, 2019 - 11:38 pm"); 
INSERT INTO users_activity_log VALUES("1015","27","Added Celecoxib 200mg as new medicine","December 3, 2019 - 11:42 pm"); 
INSERT INTO users_activity_log VALUES("1016","27","added 20 pieces of Celecoxib 200mg to stocks","December 3, 2019 11:43 pm"); 
INSERT INTO users_activity_log VALUES("1017","27","added 20 pieces of Vitamin B Complex to stocks","December 3, 2019 11:46 pm"); 
INSERT INTO users_activity_log VALUES("1018","27","Added Prescription to Lagrimas Casabuena Campa","December 3, 2019 - 11:48 pm"); 
INSERT INTO users_activity_log VALUES("1019","27","Registered Zemira Anndrey Torrecarion Sabordo as new Child Patient","December 3, 2019 - 11:58 pm"); 
INSERT INTO users_activity_log VALUES("1020","27","Registered Leanne Mandolado Tacdoro as new Child Patient","December 4, 2019 - 12:00 am"); 
INSERT INTO users_activity_log VALUES("1021","27","Registered Klyde Parar Ramos as new Child Patient","December 4, 2019 - 12:02 am"); 
INSERT INTO users_activity_log VALUES("1022","27","Added Zemira Anndrey Torrecarion Sabordo to Immunization","December 4, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("1023","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:15 am"); 
INSERT INTO users_activity_log VALUES("1024","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:17 am"); 
INSERT INTO users_activity_log VALUES("1025","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:18 am"); 
INSERT INTO users_activity_log VALUES("1026","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:19 am"); 
INSERT INTO users_activity_log VALUES("1027","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:23 am"); 
INSERT INTO users_activity_log VALUES("1028","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:23 am"); 
INSERT INTO users_activity_log VALUES("1029","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:24 am"); 
INSERT INTO users_activity_log VALUES("1030","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:25 am"); 
INSERT INTO users_activity_log VALUES("1031","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:25 am"); 
INSERT INTO users_activity_log VALUES("1032","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:25 am"); 
INSERT INTO users_activity_log VALUES("1033","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("1034","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("1035","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:27 am"); 
INSERT INTO users_activity_log VALUES("1036","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:27 am"); 
INSERT INTO users_activity_log VALUES("1037","27","Added Immunization Treatment to Zemira Anndrey Torrecarion Sabordo","December 4, 2019 - 12:31 am"); 
INSERT INTO users_activity_log VALUES("1038","27","Added Leanne Mandolado Tacdoro to Immunization","December 4, 2019 - 12:37 am"); 
INSERT INTO users_activity_log VALUES("1039","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:37 am"); 
INSERT INTO users_activity_log VALUES("1040","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:38 am"); 
INSERT INTO users_activity_log VALUES("1041","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:39 am"); 
INSERT INTO users_activity_log VALUES("1042","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:40 am"); 
INSERT INTO users_activity_log VALUES("1043","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:40 am"); 
INSERT INTO users_activity_log VALUES("1044","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:40 am"); 
INSERT INTO users_activity_log VALUES("1045","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:41 am"); 
INSERT INTO users_activity_log VALUES("1046","27","Added Immunization Treatment to Leanne Mandolado Tacdoro","December 4, 2019 - 12:41 am"); 
INSERT INTO users_activity_log VALUES("1047","27","Added Klyde Parar Ramos to Immunization","December 4, 2019 - 12:45 am"); 
INSERT INTO users_activity_log VALUES("1048","27","Added Immunization Treatment to Klyde Parar Ramos","December 4, 2019 - 12:45 am"); 
INSERT INTO users_activity_log VALUES("1049","27","Added Immunization Treatment to Klyde Parar Ramos","December 4, 2019 - 12:46 am"); 
INSERT INTO users_activity_log VALUES("1050","27","Added Immunization Treatment to Klyde Parar Ramos","December 4, 2019 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("1051","27","Added Immunization Treatment to Klyde Parar Ramos","December 4, 2019 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("1052","27","Added Immunization Treatment to Klyde Parar Ramos","December 4, 2019 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("1053","27","dispensed 5 Vitamin B Complex to Lagrimas Casabuena Campa","December 4, 2019 1:00 am"); 
INSERT INTO users_activity_log VALUES("1054","27","dispensed 3 Celecoxib 200 mg to Lagrimas Casabuena Campa","December 4, 2019 1:00 am"); 
INSERT INTO users_activity_log VALUES("1055","27","Successfully Backup the database","December 4, 2019, 12:43 pm"); 
INSERT INTO users_activity_log VALUES("1056","27","Added Wilma Mendez to Family Planning","December 4, 2019 - 1:14 pm"); 
INSERT INTO users_activity_log VALUES("1057","27","Added Wilma Mendez to Family Planning Assessment","December 4, 2019 - 1:19 pm"); 
INSERT INTO users_activity_log VALUES("1058","27","Added Margarita Diana to Prenatal","December 4, 2019 - 1:28 pm"); 
INSERT INTO users_activity_log VALUES("1059","27","Added Margarita Diana to Prenatal Consultation","December 4, 2019 - 1:34 pm"); 
INSERT INTO users_activity_log VALUES("1060","27","Added Margarita Diana to Prenatal Consultation","December 4, 2019 - 1:36 pm"); 
INSERT INTO users_activity_log VALUES("1061","27","Added Markh B. Jamandre to Consultation","December 4, 2019 - 2:03 pm"); 
INSERT INTO users_activity_log VALUES("1062","27","Added Prescription to Markh B. Jamandre","December 4, 2019 - 2:07 pm"); 
INSERT INTO users_activity_log VALUES("1063","27","Added a New Individual Referral Record","December 4, 2019 2:14 pm"); 
INSERT INTO users_activity_log VALUES("1064","182","Registered Itot as new Patient","December 5, 2019 - 6:58 pm"); 
INSERT INTO users_activity_log VALUES("1065","182","Registered James Yap as new Patient","December 5, 2019 - 7:00 pm"); 
INSERT INTO users_activity_log VALUES("1066","182","Registered Nathaniel Ventor as new Patient","December 5, 2019 - 7:13 pm"); 
INSERT INTO users_activity_log VALUES("1067","27","Registered James Yap as new Patient","December 5, 2019 - 7:21 pm"); 
INSERT INTO users_activity_log VALUES("1068","27","Registered Franze Beatriz Caballero as new Patient","December 5, 2019 - 7:25 pm"); 
INSERT INTO users_activity_log VALUES("1069","27","Registered Itot as new Patient","December 5, 2019 - 7:45 pm"); 
INSERT INTO users_activity_log VALUES("1070","27","Registered Emmanuel James Tan as new Patient","December 5, 2019 - 8:11 pm"); 
INSERT INTO users_activity_log VALUES("1071","27","Registered Franze Beatriz Caballero as new Patient","December 5, 2019 - 8:13 pm"); 
INSERT INTO users_activity_log VALUES("1072","27","Registered Danielle Gwen Dusaran as new Patient","December 5, 2019 - 8:19 pm"); 
INSERT INTO users_activity_log VALUES("1073","27","Registered 3 as new Child Patient","December 5, 2019 - 8:33 pm"); 
INSERT INTO users_activity_log VALUES("1074","27","Edited Jesse Franco Latosa Patient Profile","December 6, 2019 - 5:45 pm"); 
INSERT INTO users_activity_log VALUES("1075","27","Edited Emmanuel James Tan Patient Profile","December 6, 2019 - 5:53 pm"); 
INSERT INTO users_activity_log VALUES("1076","27","Edited Lagrimas Casabuena Campa Patient Profile","December 6, 2019 - 5:54 pm"); 
INSERT INTO users_activity_log VALUES("1077","27","Edited Markh B. Jamandre Patient Profile","December 6, 2019 - 5:55 pm"); 
INSERT INTO users_activity_log VALUES("1078","27","Edited Rose Zirilli Patient Profile","December 6, 2019 - 5:56 pm"); 
INSERT INTO users_activity_log VALUES("1079","27","Edited Slena Wasky Patient Profile","December 6, 2019 - 5:57 pm"); 
INSERT INTO users_activity_log VALUES("1080","27","Edited Klyde Parar Ramos Child Patient Profile","December 6, 2019 - 5:58 pm"); 
INSERT INTO users_activity_log VALUES("1081","27","Edited Anne Berquist Patient Profile","December 6, 2019 - 6:09 pm"); 
INSERT INTO users_activity_log VALUES("1082","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 6, 2019 - 6:10 pm"); 
INSERT INTO users_activity_log VALUES("1083","27","Edited Marie Bazagrel Patient Profile","December 6, 2019 - 6:10 pm"); 
INSERT INTO users_activity_log VALUES("1084","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 6, 2019 - 6:11 pm"); 
INSERT INTO users_activity_log VALUES("1085","27","Edited Stay Bagagrel Patient Profile","December 6, 2019 - 6:12 pm"); 
INSERT INTO users_activity_log VALUES("1086","27","Edited Wilma Mendez Patient Profile","December 6, 2019 - 6:12 pm"); 
INSERT INTO users_activity_log VALUES("1087","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 6, 2019 - 6:13 pm"); 
INSERT INTO users_activity_log VALUES("1088","27","Edited Kizsha Lauriaga Patient Profile","December 6, 2019 - 6:13 pm"); 
INSERT INTO users_activity_log VALUES("1089","27","Edited Ariane Torres Patient Profile","December 6, 2019 - 6:14 pm"); 
INSERT INTO users_activity_log VALUES("1090","27","Edited Hilary Ahmor Sipat Child Patient Profile","December 6, 2019 - 6:15 pm"); 
INSERT INTO users_activity_log VALUES("1091","27","Edited Jan Mark Ballados Patient Profile","December 6, 2019 - 6:15 pm"); 
INSERT INTO users_activity_log VALUES("1092","27","Edited Rommel Adricula Patient Profile","December 6, 2019 - 6:16 pm"); 
INSERT INTO users_activity_log VALUES("1093","27","Edited Renzo Nono Patient Profile","December 6, 2019 - 6:18 pm"); 
INSERT INTO users_activity_log VALUES("1094","27","Edited Maria Cafra Patient Profile","December 6, 2019 - 6:18 pm"); 
INSERT INTO users_activity_log VALUES("1095","27","Edited Bernard Bermo Patient Profile","December 6, 2019 - 6:20 pm"); 
INSERT INTO users_activity_log VALUES("1096","27","Edited Dennzel Quatchon Patient Profile","December 6, 2019 - 6:23 pm"); 
INSERT INTO users_activity_log VALUES("1097","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 6, 2019 - 6:28 pm"); 
INSERT INTO users_activity_log VALUES("1098","27","Edited Hilary Ahmor Sipat Child Patient Profile","December 6, 2019 - 6:30 pm"); 
INSERT INTO users_activity_log VALUES("1099","27","dispensed 6 Rifapentine to Daniel Andrew Go","December 6, 2019 6:42 pm"); 
INSERT INTO users_activity_log VALUES("1100","27","dispensed 4 Cefalexin 250  to Bernard Bermo","December 6, 2019 6:44 pm"); 
INSERT INTO users_activity_log VALUES("1101","27","Added 3 as new medicine","December 6, 2019 - 6:44 pm"); 
INSERT INTO users_activity_log VALUES("1102","27","dispensed 5 Cefalexin 250  to Lolita Villarosa Gerose","December 6, 2019 6:45 pm"); 
INSERT INTO users_activity_log VALUES("1103","27","dispensed 2 Biogesic to Janeil Alcano","December 6, 2019 6:55 pm"); 
INSERT INTO users_activity_log VALUES("1104","27","dispensed 5 Biogesic to Margarita Diana","December 6, 2019 6:58 pm"); 
INSERT INTO users_activity_log VALUES("1105","27","Added a New Individual Referral Record","December 8, 2019 5:32 pm"); 
INSERT INTO users_activity_log VALUES("1106","27","Added a Prenatal follow-up date for Stay Bagagrel","December 8, 2019 - 5:39 pm"); 
INSERT INTO users_activity_log VALUES("1107","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","December 8, 2019 - 5:49 pm"); 
INSERT INTO users_activity_log VALUES("1108","27","Added a Prenatal follow-up date for Margarita Diana","December 8, 2019 - 5:50 pm"); 
INSERT INTO users_activity_log VALUES("1109","27","Updated the Prenatal follow-up date for Margarita Diana","December 8, 2019 - 5:50 pm"); 
INSERT INTO users_activity_log VALUES("1110","27","Added a Prenatal follow-up date for Stay Bagagrel","December 8, 2019 - 5:50 pm"); 
INSERT INTO users_activity_log VALUES("1111","27","Added a Prenatal follow-up date for Mercy Buenafuente","December 8, 2019 - 5:50 pm"); 
INSERT INTO users_activity_log VALUES("1112","27","Updated the Prenatal follow-up date for Margarita Diana","December 8, 2019 - 5:51 pm"); 
INSERT INTO users_activity_log VALUES("1113","27","Updated the Prenatal follow-up date for Stay Bagagrel","December 8, 2019 - 5:51 pm"); 
INSERT INTO users_activity_log VALUES("1114","27","dispensed 2 Celecoxib 200 mg to Daniel Andrew Go","December 8, 2019 5:56 pm"); 
INSERT INTO users_activity_log VALUES("1115","27","added 5 pieces of Celecoxib 200 mg to stocks","December 8, 2019 5:58 pm"); 
INSERT INTO users_activity_log VALUES("1116","27","added 20 pieces of Cecon 500 mg to stocks","December 8, 2019 5:59 pm"); 
INSERT INTO users_activity_log VALUES("1117","27","added 5 pieces of Vitamin B Complex to stocks","December 8, 2019 6:01 pm"); 
INSERT INTO users_activity_log VALUES("1118","27","dispensed 5 Celecoxib 200 mg to Rose Zirilli","December 8, 2019 6:04 pm"); 
INSERT INTO users_activity_log VALUES("1119","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:02 pm"); 
INSERT INTO users_activity_log VALUES("1120","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:03 pm"); 
INSERT INTO users_activity_log VALUES("1121","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:03 pm"); 
INSERT INTO users_activity_log VALUES("1122","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:03 pm"); 
INSERT INTO users_activity_log VALUES("1123","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:05 pm"); 
INSERT INTO users_activity_log VALUES("1124","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:05 pm"); 
INSERT INTO users_activity_log VALUES("1125","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:06 pm"); 
INSERT INTO users_activity_log VALUES("1126","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:06 pm"); 
INSERT INTO users_activity_log VALUES("1127","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:07 pm"); 
INSERT INTO users_activity_log VALUES("1128","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:07 pm"); 
INSERT INTO users_activity_log VALUES("1129","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:08 pm"); 
INSERT INTO users_activity_log VALUES("1130","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:09 pm"); 
INSERT INTO users_activity_log VALUES("1131","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:09 pm"); 
INSERT INTO users_activity_log VALUES("1132","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:09 pm"); 
INSERT INTO users_activity_log VALUES("1133","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:10 pm"); 
INSERT INTO users_activity_log VALUES("1134","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:10 pm"); 
INSERT INTO users_activity_log VALUES("1135","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:11 pm"); 
INSERT INTO users_activity_log VALUES("1136","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:12 pm"); 
INSERT INTO users_activity_log VALUES("1137","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:14 pm"); 
INSERT INTO users_activity_log VALUES("1138","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:21 pm"); 
INSERT INTO users_activity_log VALUES("1139","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:22 pm"); 
INSERT INTO users_activity_log VALUES("1140","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:22 pm"); 
INSERT INTO users_activity_log VALUES("1141","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:29 pm"); 
INSERT INTO users_activity_log VALUES("1142","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:31 pm"); 
INSERT INTO users_activity_log VALUES("1143","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:31 pm"); 
INSERT INTO users_activity_log VALUES("1144","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:32 pm"); 
INSERT INTO users_activity_log VALUES("1145","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 8, 2019 - 7:32 pm"); 
INSERT INTO users_activity_log VALUES("1146","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:44 pm"); 
INSERT INTO users_activity_log VALUES("1147","27","Edited Klyde Parar Ramos Child Patient Profile","December 8, 2019 - 7:44 pm"); 
INSERT INTO users_activity_log VALUES("1148","27","Edited Zemira Anndrey Torrecarion Sabordo Child Patient Profile","December 8, 2019 - 7:44 pm"); 
INSERT INTO users_activity_log VALUES("1149","27","Edited Emmanuel James Tan Patient Profile","December 8, 2019 - 7:58 pm"); 
INSERT INTO users_activity_log VALUES("1150","27","Edited Lagrimas Casabuena Campa Patient Profile","December 8, 2019 - 8:14 pm"); 
INSERT INTO users_activity_log VALUES("1151","27","Edited Hilary Ahmor Sipat Child Patient Profile","December 8, 2019 - 8:51 pm"); 
INSERT INTO users_activity_log VALUES("1152","27","Edited Hilary Ahmor Sipat Child Patient Profile","December 8, 2019 - 11:11 pm"); 
INSERT INTO users_activity_log VALUES("1153","27","Registered Leanne Mandolado Tacdoro as new Child Patient","December 9, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("1154","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 9, 2019 - 12:05 am"); 
INSERT INTO users_activity_log VALUES("1155","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","December 9, 2019 - 12:06 am"); 
INSERT INTO users_activity_log VALUES("1156","27","Added Leanne Mandolado Tacdoro to Immunization","December 9, 2019 - 12:09 am"); 
INSERT INTO users_activity_log VALUES("1157","27","Added a Prenatal follow-up date for Stay Bagagrel","December 9, 2019 - 4:08 pm"); 
INSERT INTO users_activity_log VALUES("1158","27","Added a Prenatal follow-up date for Mercy Buenafuente","December 9, 2019 - 4:18 pm"); 
INSERT INTO users_activity_log VALUES("1159","27","Added a Prenatal follow-up date for Stay Bagagrel","December 9, 2019 - 4:19 pm"); 
INSERT INTO users_activity_log VALUES("1160","27","Updated the Prenatal follow-up date for Stay Bagagrel","December 9, 2019 - 4:20 pm"); 
INSERT INTO users_activity_log VALUES("1161","27","Updated the Prenatal follow-up date for Mercy Buenafuente","December 9, 2019 - 4:20 pm"); 
INSERT INTO users_activity_log VALUES("1162","27","Updated the Prenatal follow-up date for Mercy Buenafuente","December 9, 2019 - 4:22 pm"); 
INSERT INTO users_activity_log VALUES("1163","27","Updated the Prenatal follow-up date for Mercy Buenafuente","December 9, 2019 - 4:22 pm"); 
INSERT INTO users_activity_log VALUES("1164","27","Updated the Prenatal follow-up date for Mercy Buenafuente","December 9, 2019 - 4:22 pm"); 
INSERT INTO users_activity_log VALUES("1165","27","Added a Prenatal follow-up date for Margarita Diana","December 9, 2019 - 4:27 pm"); 
INSERT INTO users_activity_log VALUES("1166","27","Updated the Prenatal follow-up date for Margarita Diana","December 9, 2019 - 4:27 pm"); 
INSERT INTO users_activity_log VALUES("1167","27","Added a Prenatal follow-up date for Stay Bagagrel","December 9, 2019 - 4:27 pm"); 
INSERT INTO users_activity_log VALUES("1168","27","Added a New Individual Referral Record","December 9, 2019 4:51 pm"); 
INSERT INTO users_activity_log VALUES("1169","27","Added a New Individual Referral Record","December 9, 2019 4:53 pm"); 



