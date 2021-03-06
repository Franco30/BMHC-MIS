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
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO consultation VALUES("57","7","2020-02-01","333","33","33","333/33","33.3","333","333","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","adfa","af","asdfadf","asf","21","Male","Gauzon","Feb","2020","With Prescription","February 1, 2020 - 9:25 pm"); 
INSERT INTO consultation VALUES("58","37","2020-02-01","Manuel Tan","58","170","100/50","36.0","80","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache","none","none","none","none","21","Male","Kasilingan","Feb","2020","With Prescription","February 1, 2020 - 9:27 pm"); 
INSERT INTO consultation VALUES("59","27","2020-02-01","33aEFADF","33","33","333/33","33.3","33","33","Stomach Ache","ADF","ASDF","ASDF","ASDF","50","Female","Katilingban","Feb","2020","With Prescription","February 1, 2020 - 9:28 pm"); 
INSERT INTO consultation VALUES("60","7","2020-02-01","333","33","33","333/33","33.3","333","333","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","adfa","af","asdfadf","asf","21","Male","Gauzon","Jan","2020","With Prescription","February 1, 2020 - 9:25 pm"); 
INSERT INTO consultation VALUES("61","5","2020-02-01","33","33","33","333/33","33.3","33","33","Conjunctivitis","343","3434","343","34","21","Male","Katilingban","Feb","2020","With Prescription","February 1, 2020 - 9:32 pm"); 
INSERT INTO consultation VALUES("62","39","2020-02-02","Salvador Latosa","60","178","120/50","36.9","80","60","Colds and Flu, Fever, Headache","samp;le text","`1!@#$%^&*","!@~!@#$%^&*(","sdfaddf","21","Male","Mabinuligon","Feb","2020","With Prescription","February 2, 2020 - 1:31 pm"); 
INSERT INTO consultation VALUES("63","42","2019-06-28","Julius Freto Sipat","75","123","110/70","39.8","20","90","Fever","3 day fever since rainy season ","Fever due to rain and lack of sleep","Fever and Lack of sleep, needs more vitamin C","DOes not need a laboratory request","30","Female","Mabinuligon","Jun","2019","With Prescription","June 28, 2019 - 10:37 pm"); 
INSERT INTO consultation VALUES("64","41","2019-07-18","Charles Tingos Carlos","80","142","120/80","36.7","90","140","Diarrhea","Ang tiyan, apat ka adlaw gasakit ang tiyan ","Gastric Acid","Needs medicine to calm the gastric acid","none","9","Male","Kasilingan","Jul","2019","With Prescription","February 21, 2020 - 10:58 pm"); 
INSERT INTO consultation VALUES("65","29","2019-08-21","Markh B. Jamandre","69","132","120/70","37.6","180","165","Headache","Gasakit ang ulo kada tiyempo may ara sip-on","Headache due to sipon","Sipon","No","43","Male","Mabinuligon","Aug","2019","With Prescription","August 21, 2019 - 11:12 pm"); 
INSERT INTO consultation VALUES("66","30","2019-09-13","Franco Dela Cruz","45","120","150/76","36.2","120","150","Allergy","Pangalatul ang lawas samtang ara sa banyo","Allergies due to dust and unclean surfaces","Rashes to skin","no","65","Female","Kahirup A","Sep","2019","With Prescription","February 21, 2020 - 11:28 pm"); 
INSERT INTO consultation VALUES("67","40","2019-10-12","Pedro Ignacio SIlga","50","107","123/87","33.2","120","140","Stomach Ache","Gasakit ang tiyan sang halin sa baybay","Nakainom sang tubig dagat","drink medicine to cure stomach ache","no","15","Select","Kahirup A","Oct","2019","With Prescription","February 21, 2020 - 11:47 pm"); 
INSERT INTO consultation VALUES("68","10","2019-08-17","Ignacio Drew Buenafuente","43","99","120/76","36.6","120","122","Conjunctivitis","Eyes are itchy and red","Conjunctivitis","Duetodust and bacteria that is on the eye","none","38","Female","Kasilingan","Aug","2019","With Prescription","February 21, 2020 - 11:55 pm"); 
INSERT INTO consultation VALUES("69","27","2019-12-02","Kiloy Zirili","70","186","152/34","37.6","152","155","Colds and Flu","Nagsulay sa ulan kag nahilanat kag na sipon","nag sipon tungod sa ulan kag katugnaw","Nasal Drippings due to colds","none","50","Female","Katilingban","Dec","2019","With Prescription","February 21, 2020 - 11:59 pm"); 
INSERT INTO consultation VALUES("70","43","2019-06-12","Nonoy VIllasis","49","119","125/75","37.7","151","122","Fever","After night shift na hilanat","Trangkaso","Needs More rest ","no","21","Female","Katilingban","Jun","2019","With Prescription","February 22, 2020 - 12:12 am"); 
INSERT INTO consultation VALUES("71","43","2019-11-26","Nonoy Villasis","50","120","120/80","76.2","120","120","Headache","Na sipon for 2 weeks kag nag sakit ulo","Headache is due to sipon","Nasal Drippings and needs medicine","none","21","Female","Katilingban","Nov","2019","With Prescription","February 22, 2020 - 12:35 am"); 
INSERT INTO consultation VALUES("72","44","2019-11-05","Jason Jalandoni","88","120","152/59","43.1","120","120","Fever","Fever ","Fever ","Fever","none","20","Female","Himaya","Nov","2019","With Prescription","February 22, 2020 - 12:47 am"); 
INSERT INTO consultation VALUES("73","39","2020-01-09","Salvador Latosa","55","178","100/50","36.0","80","70","Allergy","nagkaon manok nagtubo allergy","none","drink anti allergy","none","21","Male","Mabinuligon","Jan","2020","With Prescription","February 22, 2020 - 1:12 am"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO consultation_prescription VALUES("54","45","29","27","Anti-TB Drugs","Rifampicin + isoniazid","✓","","✓","","✓","","","3","33"); 
INSERT INTO consultation_prescription VALUES("55","48","37","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","","3","dfdf"); 
INSERT INTO consultation_prescription VALUES("56","47","29","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","✓","4","4"); 
INSERT INTO consultation_prescription VALUES("57","49","30","27","Anti-TB Drugs","Rifapentine","✓","","✓","","✓","","","33","33"); 
INSERT INTO consultation_prescription VALUES("58","50","38","27","Antibiotic","Cefalexin 250 ","","✓","","✓","✓","","","3","adfasdf"); 
INSERT INTO consultation_prescription VALUES("59","62","39","27","Antipyretic","Biogesic","✓","","✓","","✓","","","33","33"); 
INSERT INTO consultation_prescription VALUES("60","58","37","27","Anti-TB Drugs","Rifampicin 150 mg","✓","","✓","","✓","","","33","eee"); 
INSERT INTO consultation_prescription VALUES("61","61","5","27","Vitamins","Cecon 500 mg","✓","","✓","","✓","","✓","4","fdadfdfdf"); 
INSERT INTO consultation_prescription VALUES("62","59","27","27","Anti-TB Drugs","Rifampicin 150 mg","✓","","✓","","✓","","✓","3","dfdf"); 
INSERT INTO consultation_prescription VALUES("63","63","42","27","Antipyretic","Biogesic","","✓","","✓","","✓","","15","3 times a day for five days"); 
INSERT INTO consultation_prescription VALUES("64","64","41","27","Antipyretic","Biogesic","✓","","✓","","✓","","","6","3 tablets for 2 days"); 
INSERT INTO consultation_prescription VALUES("65","65","29","27","Antipyretic","Biogesic","","✓","","✓","","✓","","9","Drink Biogesic 3 times for 3 days"); 
INSERT INTO consultation_prescription VALUES("66","69","27","27","Antipyretic","Biogesic","","✓","","","","✓","","6","Breakfast and dinner lang ang pag-ino sang bulong for 3 days"); 
INSERT INTO consultation_prescription VALUES("67","68","10","27","Antibiotic","Cefalexin 250 ","✓","","","","","","✓","4","drink after Breakfast and Dinner for two days"); 
INSERT INTO consultation_prescription VALUES("68","70","43","27","Antipyretic","Biogesic","✓","","✓","","✓","✓","","9","3 times a day br, lnch, dnr for 3 days"); 
INSERT INTO consultation_prescription VALUES("69","71","43","27","Antipyretic","Biogesic","✓","","✓","","✓","","","12","3 times a day for 4 days"); 
INSERT INTO consultation_prescription VALUES("70","72","44","27","Cough Preparation","Ambroxol","✓","","","","","","","2","every morning 2 days"); 
INSERT INTO consultation_prescription VALUES("71","67","40","27","Antipyretic","Biogesic","","","✓","","✓","","","4","mid day and afternoon"); 
INSERT INTO consultation_prescription VALUES("72","66","30","27","Anti-TB Drugs","Rifampicin + isoniazid + Pyrazinamide + Ethambutol","✓","","✓","","","","","8","morning and ugto for four days"); 
INSERT INTO consultation_prescription VALUES("73","57","7","27","Anti-TB Drugs","Rifampicin 150 mg","","✓","","✓","","✓","","14","Drink meds"); 
INSERT INTO consultation_prescription VALUES("74","60","7","27","Anti-TB Drugs","Rifampicin 150 mg","✓","","✓","","✓","","","12","Basta "); 
INSERT INTO consultation_prescription VALUES("75","73","39","27","Antihistamine","Levoceterizine","","✓","","","","","","2","none"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("46","27","Export","2020-02-08","11:07 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("47","27","Export","2020-02-08","11:12 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("48","27","Export","2020-02-08","11:14 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("49","27","Export","2020-02-16","1:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("50","27","Import","February 22, 2020","12:59 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("51","27","Import","February 22, 2020","1:05 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("52","27","Export","2020-02-22","1:31 am","Successfully Exported Database"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("1","4","New to the Program","None","2019/07/13 11:12 AM","Highschool","Marcelito Gerose","1976-08-05","College","Businessman","30000","7","No","limiting or spacing","COC","Kasilingan","Assessed","Jul","2019"); 
INSERT INTO family_planning VALUES("2","9","New to the Program","None","2019/06/19 10:41 PM","College","Nicolas Diana","1983-06-15","College","Businessman","35000","2","Yes","limiting and spacing","Condom","Lasalle Ville","Assessed","Jun","2019"); 
INSERT INTO family_planning VALUES("3","20","New to the Program","None","2019/06/21 9:07 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain number of children","COC","Kahirup B","Assessed","Jun","2019"); 
INSERT INTO family_planning VALUES("4","19","New to the Program","None","2019/08/14 9:44 AM","College","Mark Panabe","1990-06-13","College","Web Developer","50000","1","Yes","to maintain number of children","COC","Kahirup A","Assessed","Aug","2019"); 
INSERT INTO family_planning VALUES("5","20","Continuing User","COC","2019/09/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Sep","2019"); 
INSERT INTO family_planning VALUES("6","20","Continuing User","COC","2019/10/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Oct","2019"); 
INSERT INTO family_planning VALUES("7","20","Continuing User","IUD","2019/11/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Nov","2019"); 
INSERT INTO family_planning VALUES("8","20","Continuing User","IUD","2019/12/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Dec","2019"); 



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

INSERT INTO immunization VALUES("10","3","33-483838338-3","12:00 PM","4.9","(09) 934374343","1","1","0","43","47","MHC","CHO Bacolod","Normal","Kahirup B","Female","Currently in Treatment","Nov","2019","2019-01-01"); 
INSERT INTO immunization VALUES("11","8","11-025666793-2","6:05 AM","2.83","(09) 038383838","1","1","0","25","22","CHO Lying In","CHO Lying In","Normal","Kasilingan","Female","Currently in Treatment","Dec","2019","2019-01-01"); 
INSERT INTO immunization VALUES("13","10","33-333333333-3","8:28 AM","3.04","","3","3","9","20","21","Taculing Health Center","CHO - Bacolod","NSVD","Paglaum","Male","Currently in Treatment","Dec","2019","2020-01-01"); 
INSERT INTO immunization VALUES("14","11","83-838389383-8","12:15 AM","2.5","(09) 100306293","2","2","0","27","22","MHC","BCHC","NSVD","Matahum","Female","Currently in Treatment","Dec","2019","2018-01-01"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO immunization_treatment VALUES("15","3","BCG","2019-11-20","1 month + 15 days","4.9","54","37.0",""); 
INSERT INTO immunization_treatment VALUES("16","8","BCG","2018-11-18","","","","",""); 
INSERT INTO immunization_treatment VALUES("17","8","HEPA B","2018-11-08","","","","",""); 
INSERT INTO immunization_treatment VALUES("18","8","PHIB 1"," 2019-01-01","9 weeks and 6 days","4.7","54","36.2","Hrm 13"); 
INSERT INTO immunization_treatment VALUES("19","8","PHIB 2","2019-02-06","","5.5","55","46.6",""); 
INSERT INTO immunization_treatment VALUES("20","8","PHIB 3","2019-03-06","","6.3","60","36.3","14.8"); 
INSERT INTO immunization_treatment VALUES("21","8","OPV 1","2019-01-09","","","","",""); 
INSERT INTO immunization_treatment VALUES("22","8","OPV 2","2019-02-06","","","","",""); 
INSERT INTO immunization_treatment VALUES("23","8","OPV 3","2019-03-06","","","","",""); 
INSERT INTO immunization_treatment VALUES("24","8","IPV","2019-03-06","","","","",""); 
INSERT INTO immunization_treatment VALUES("25","8","PCV 1","2019-01-09","","","","",""); 
INSERT INTO immunization_treatment VALUES("26","8","PCV 2","2019-02-06","","","","",""); 
INSERT INTO immunization_treatment VALUES("27","8","PCV 3","2019-03-06","","","","",""); 
INSERT INTO immunization_treatment VALUES("28","8","MVO(6 mos.)","2019-05-05","","6.9","61","36.7",""); 
INSERT INTO immunization_treatment VALUES("29","8","MV(9 mos.)","2019-08-14","39 weeks","8","64","36.8",""); 
INSERT INTO immunization_treatment VALUES("30","8","MMR","2019-11-19","53 weeks","8.2","68.5","36.1",""); 
INSERT INTO immunization_treatment VALUES("31","9","BCG","2019-09-04","","","","",""); 
INSERT INTO immunization_treatment VALUES("32","9","HEPA B","2019-09-03","","","","",""); 
INSERT INTO immunization_treatment VALUES("33","9","PHIB 1","2019-11-23","7 weeks 1 day","4","53","36.4",""); 
INSERT INTO immunization_treatment VALUES("34","9","PHIB 2","2019-11-20","11 weeks","4.5","54.1","36.8",""); 
INSERT INTO immunization_treatment VALUES("35","9","OPV 1","2019-10-23","","","","",""); 
INSERT INTO immunization_treatment VALUES("36","9","OPV 2","2019-11-20","","","","",""); 
INSERT INTO immunization_treatment VALUES("37","9","PCV 1","2019-11-23","","","","",""); 
INSERT INTO immunization_treatment VALUES("38","9","PCV 2","2019-11-20","","","","",""); 
INSERT INTO immunization_treatment VALUES("39","10","BCG","2019-07-25","","","","",""); 
INSERT INTO immunization_treatment VALUES("40","10","HEPA B","2019-07-24","","","","",""); 
INSERT INTO immunization_treatment VALUES("41","10","PHIB 1","2019-11-13","16 weeks","8.7","61.5","36.7",""); 
INSERT INTO immunization_treatment VALUES("42","10","OPV 1","2019-11-13","","","","",""); 
INSERT INTO immunization_treatment VALUES("43","10","PCV 1","2019-11-13","","","","",""); 
INSERT INTO immunization_treatment VALUES("44","3","HEPA B","2019-02-05","2 months","45","13","37.0",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO medical_history VALUES("1","1","4","Yellowish conjunctiva","","Mass in the abdomen","Intermenstrual bleeding","","None",""); 
INSERT INTO medical_history VALUES("2","2","9","Severe Headache/dizziness, Yellowish conjunctiva","Shortness of breath and easy fatigability, Breast/axillary masses, Nipple discharges (specify if blood or pus)","Mass in the abdomen, History of liver disease","Mass in the uterus, Vaginal discharge","Severe varicosities","Yellowish Skin","Drug Intake (anti-tuberculosis,
                                                                            anti-diabetic,
                                                                            anticonvulsant), Anemia"); 
INSERT INTO medical_history VALUES("3","3","20","Epilepsy/Convulsion/Seizure, Yellowish conjunctiva","Breast/axillary masses, Nipple discharges (specify if blood or pus), Diastolic of 90 & above","Mass in the abdomen, History of gallbladder disease","Mass in the uterus, Vaginal discharge, Postcoital bleeding","Swelling or severe pain in the legs not
                                                                            related to
                                                                            injuries","Yellowish Skin","Bleeding tendencies (nose, gums, etc.), Anemia"); 
INSERT INTO medical_history VALUES("4","4","19","Severe Headache/dizziness","Breast/axillary masses","Mass in the abdomen","Mass in the uterus","Severe varicosities","Yellowish Skin",""); 
INSERT INTO medical_history VALUES("5","5","20","None, Epilepsy/Convulsion/Seizure","None","None","None","None","None","None"); 
INSERT INTO medical_history VALUES("6","8","20","Severe Headache/dizziness","Severe chest pain","None","None","None","Yellowish Skin",""); 
INSERT INTO medical_history VALUES("7","7","20","None","None","None","None","None","None","Allergies"); 
INSERT INTO medical_history VALUES("8","6","20","None","None","None","None","None","None","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("49","5","19","TB Medicine","2020-02-08","1:27 pm","Feb","2020","4","February 8, 2020 1:27 pm"); 
INSERT INTO medication_dispensation VALUES("50","7","19","TB Medicine","2020-02-08","2:12 pm","Feb","2020","20","February 8, 2020 2:12 pm"); 
INSERT INTO medication_dispensation VALUES("51","9","6","TB Medicine","2020-02-08","2:13 pm","Feb","2020","15","February 8, 2020 2:13 pm"); 
INSERT INTO medication_dispensation VALUES("52","5","9","Consultation","2020-02-20","1:31 pm","Feb","2020","5","February 20, 2020 1:31 pm"); 



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

INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","34","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","61","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","17","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","29","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","25","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Antipyretic","25","October 25, 2019 - 2:14 am"); 
INSERT INTO medicine VALUES("10","Cecon 500 mg","Tablet","Vitamins","20","November 17, 2019 - 12:42 pm"); 
INSERT INTO medicine VALUES("13","Rifampicin + isoniazid","Tablet","Anti-TB Drugs","20","November 27, 2019 - 2:49 pm"); 
INSERT INTO medicine VALUES("15","Rifampicin + isoniazid + Pyrazinamide + Ethambutol","Tablet","Anti-TB Drugs","25","November 27, 2019 - 2:50 pm"); 
INSERT INTO medicine VALUES("16","Calcium Carbonate (Calcimate)","Tablet","Antibiotic","25","November 27, 2019 - 2:51 pm"); 
INSERT INTO medicine VALUES("17","Ferrous Sulphate + Folic Acid","Tablet","Vitamins","20","November 27, 2019 - 2:54 pm"); 
INSERT INTO medicine VALUES("18","Vitamin B Complex","Tablet","Vitamins","20","December 3, 2019 - 11:38 pm"); 
INSERT INTO medicine VALUES("19","Celecoxib 200 mg","Capsule","Analgesic","31","December 3, 2019 - 11:42 pm"); 
INSERT INTO medicine VALUES("20","Levoceterizine","Tablet","Antihistamine","25","February 22, 2020 - 1:13 am"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("100","19","20","2020-02-08 1:22 pm"); 
INSERT INTO medicine_stocks VALUES("101","13","20","2020-02-08 1:51 pm"); 
INSERT INTO medicine_stocks VALUES("102","19","20","2020-02-08 2:13 pm"); 
INSERT INTO medicine_stocks VALUES("103","6","20","2020-02-08 2:14 pm"); 
INSERT INTO medicine_stocks VALUES("104","5","20","2020-02-20 1:31 pm"); 
INSERT INTO medicine_stocks VALUES("105","20","25","2020-02-22 1:13 am"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO obstetrical_history VALUES("1","1","4","7","7","0","0","7","2015-03-21 ","Normal ","NSVD","NSVD","10 ","Ectopetic pregnancy"); 
INSERT INTO obstetrical_history VALUES("2","2","9","1","0","0","0","2","1998-08-26 ","normal ","last 26 months","2018","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("3","3","20","2","30","0","0","3","2019-08-20 ","normal ","last 3 months","2018","1 hour","Ectopetic pregnancy"); 
INSERT INTO obstetrical_history VALUES("4","4","19","1","0","0","0","1","2013-06-26 ","normal ","2019","2019","1 hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("5","5","20","1","1","0","0","1","2019-09-18 ","normal ","2018","2018","1 hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("6","8","20","0","0","0","0","0","2020-02-12 ","3 ","2018","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("7","7","20","1","0","0","0","0","2019-10-16 ","normal ","2018","2018","2 hours","None"); 
INSERT INTO obstetrical_history VALUES("8","6","20","3","3","3","0","1","2020-02-12 ","3 ","2019","2019","1 hour","Hydatidiform mole (within the last 12
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
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("4","Lolita Villarosa Gerose","Single","53","Female","#54 Area 51, Mansilingan","Kasilingan","1996-07-06","168","78","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Marvin Gerose","(09) 073773443","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("5","Daniel Andrew Go","Single","21","Male","#1 Area 51, Mansilingan","Katilingban","1998-04-14","176","60","(09) 061613101","Negros Occidental","Student","34-343435343-3","Charles Go","(09) 061613101","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("6","Bernard Bermo","Married","49","Male","#1n Sebastian, Mansilingan","Gauzon","1970-03-10","174","174","(88) 888888888","Negros Occidental","Farmer","34-343434343-4","Erika Bermo","(30) 303030454","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("7","John Matthew Lorizo","Single","21","Male","#51 Area 52, Mansilingan","Gauzon","1998-04-07","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("8","Janeil Alcano","Single","13","Male","#3 Magsaysay, Mansilingan","Gauzon","2006-08-23","174","55","(34) 343434333","Negros Occidental","Student","33-333333333-3","Jona Alcano","(33) 333333454","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("9","Margarita Diana","Married","43","Female","Block 17 Lot 19, Mansilingan","Lasalle Ville","1966-07-20","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Jose Diana","(09) 073773443","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("10","Mercy Buenafuente","Married","38","Female","#3 Everlasting, Mansilingan","Kasilingan","1966-07-20","177","60","09051312999","Negros Occidental","BHW","88334939733434","Johny Buenafuente","0907377344343","Active","Sep","2019","2019-09-01"); 
INSERT INTO patient VALUES("13","Maria Cafra","Single","21","Male","#51 Area 51, Mansilingan","Gauzon","1998-04-07","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","John Michael Lorizo","(93) 939343433","Active","Aug","2019","2019-08-01"); 
INSERT INTO patient VALUES("14","Renzo Nono","Married","53","Male","#3 Everlasting, Mansilingan","Kasilingan","1966-07-20","165","60","(09) 051312999","Negros Occidental","BHW","88-334939733-4","Renzy Nono","(09) 073773443","Active","Jun","2019","2019-06-01"); 
INSERT INTO patient VALUES("15","Rommel Adricula","Married","38","Male","#51 Area 51, Mansilingan","Gauzon","1981-04-07","165","165","(09) 061613101","Negros Occidental","Student","34-343456454-6","Rommy Adryx","(93) 939343433","Active","Jul","2019","2019-07-01"); 
INSERT INTO patient VALUES("17","Jan Mark Ballados","Single","24","Male","#3 Area 51, Mansilingan","Kasilingan","1995-06-14","178","178","(09) 054441414","Negros Occidental","E-Jeep Driver","99-393933393-9","Mark John Ballados","(09) 333434343","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("18","Ariane Torres","Single","33","Male","#2 Area 51, Mansilingan","Paglaum","1986-03-19","170","170","(09) 033434343","Negros Occidental","Teacher","39-333393939-3","Ariane ","(09) 232323232","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("19","Kizsha Lauriaga","Single","28","Female","#3 Everlasting, Mansilingan","Kahirup A","1991-08-21","160","160","(09) 062623232","Negros Occidental","Street Vendor","30-303030303-0","Mark Panabe","(09) 334734343","Active","Oct","2019","2019-10-01"); 
INSERT INTO patient VALUES("20","Wilma Mendez","Single","21","Female","#3 Everlasting, Mansilingan","Kahirup B","1998-05-31","169","169","(09) 061134343","Negros Occidental","HRM","30-390393030-3","Minda Resuma","(09) 028393434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("22","Stay Bagagrel","Widowed","39","Female","#3 Kasilingan, Mansilingan","Paghidaet","1980-06-10","178","178","(09) 073738343","Negros Occidental","BHW","04-303030303-0","Michael Bagagrel","(09) 484383434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("23","Marie Bazagrel","Single","12","Female","#5 Kasilingan, Mansilingan","Kahirup B","2007-06-01","173","173","(09) 343434343","Negros Occidental","Student","39-393938838-4","Mama Mo","(09) 343434343","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("24","Anne Berquist","Single","42","Female","#3 Mahimayaon, Mansilingan","Kasilingan","1977-03-15","178","178","(09) 034343434","Negros Occidental","Nurse","33-434343434-3","John Berquist","(09) 073433434","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("25","Anita Nelson","Widowed","43","Female","#4 Area 52, Mansilingan","Paghidaet","976-04-08","178","178","(09) 454545454","Negros Occidental","BHW","33-303033030-3","Willie Nelson","(09) 455454545","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("26","Slena Wasky","Single","43","Female","#3 Tagbalayan, Mansilingan","Gauzon","1976-08-24","176","176","(09) 348743745","Negros Occidental","BHW","43-459045454-5","Wilson Slena","(09) 454545454","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("27","Rose Zirilli","Widowed","50","Female","#52 Area 41, Mansilingan","Katilingban","1969-06-11","178","178","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Jimmy Zirili","(09) 454655553","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("28","Esperanza Consolacion","Married","89","Female","#52 Area 41, Mansilingan","Katilingban","1969-06-11","178","89","(09) 387383838","Negros Occidental","Teacher","94-394848484-8","Sergio Consolacion","(09) 454655553","Deceased","Nov","2019","2019-10-01"); 
INSERT INTO patient VALUES("29","Markh B. Jamandre","Married","43","Male","#3 Everlasting, Mansilingan","Mabinuligon","1976-10-14","176","176","(09) 373737337","Negross Occidental","Teacher","39-338939383-9","Ms. Olive Jamandre","(09) 373737373","Active","Nov","2019","2019-11-01"); 
INSERT INTO patient VALUES("30","Lagrimas Casabuena Campa","Married","65","Female","Arceo, Mansilingan","Kahirup A","1953-12-20","154","154","(09) 061613101","Negros Occidental","None","39-033883938-3","Jesus Campa","(09) 038373737","Active","Dec","2019","2019-12-01"); 
INSERT INTO patient VALUES("37","Emmanuel James Tan","Single","21","Male","#3 Everlasting, Mansilingan","Kasilingan","1998-04-14","175","175","(09) 061613101","Negros Occidental","Student","84-849439393-9","Rambo Tan","(09) 027338383","Active","Dec","2019","2019-12-01"); 
INSERT INTO patient VALUES("38","Freya Allan","Single","18","Female","#3 Area 51, Mansilingan","Kasilingan","2001-07-25","178","178","(09) 061613101","Negros Occidental","Student","94-393874930-3","Jemar Allan","(09) 383334343","Active","Jan","2020","2020-01-20"); 
INSERT INTO patient VALUES("39","Jesse Franco Latosa","Single","21","Male","#3 Area 51, Mansilingan","Mabinuligon","1998-08-30","178","178","(09) 061613101","Negros Occidental","Graphic Designer","39-383930030-3","Jesse Latosa","(09) 061613101","Active","Feb","2020","2020-02-02"); 
INSERT INTO patient VALUES("40","Jose Ignacio Silga","Single","15","Select","#3 Area 45, Mansilingan","Kahirup A","2004-11-11","174","174","(09) 389348348","Negros Occidental","","93-849484894-9","Margaret Silga","(09) 484848383","Active","Feb","2020","2020-02-08"); 
INSERT INTO patient VALUES("41","Domingo Jose Carlos","Single","9","Male","#3 Pahayan, Mansilingan","Kasilingan","2010-02-23","162","162","(09) 383737387","Negros Occidental","n/a","93-883839939-3","Minda Carlos","(09) 343838388","Active","Feb","2020","2020-02-08"); 
INSERT INTO patient VALUES("42","Mary Ann Sipat","Married","30","Female","#3 Everlasting, Mansilingan","Mabinuligon","1989-04-19","142","142","(09) 957383434","Negros Occidental","Sales Lady","39-038438493-4","Juanito Sipat","(09) 584336343","Active","Feb","2020","2020-02-20"); 
INSERT INTO patient VALUES("43","Audrey Faith Villasis","Single","21","Female","Blk 2, l 21, Bangga patuo sa ika apat , Mansilingan","Katilingban","1998-04-27","119","119","(09) 088964402","Bacolod","Admitting Staff","49-215552921-2","Daniel Andrew Go","(09) 088964402","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("44","Katherine Jalandoni","Married","20","Female","72, 23,66, Mansilingan","Himaya","2000-02-03","108","108","(09) 482735591","Bacolod","Student","10-295188205-0","Jason Jalandoni","(09) 182754201","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("45","Jerhod Kyan Ricabo","Single","21","Male","#3 Everlasting, Mansilingan","Kahirup B","1998-04-22","176","176","(09) 272343434","Negros Occidental","Driver","30-343834393-4","Mary Ricabo","(09) 347348343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("46","Alvaro Morata","Single","24","Male","#4 Bangga Patyo, Mansilingan","Kahirup A","1995-10-12","170","170","(09) 091101901","Negros Occidental","Programmer","39-343838493-4","Mardy Morata","(09) 873473473","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("47","Angelo Garcia","Single","24","Male","#1 Everlasting, Mansilingan","Kahirup B","1995-09-10","165","165","(09) 389343434","Negros Occidental","Driver","39-343848349-3","Bangs Garcia","(09) 343434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("48","Vince Pomar","Single","23","Male","#3 Everlasting, Mansilingan","Paghidaet","1996-12-12","170","170","(09) 383838389","Negros Occidental","Businessman","83-893903939-0","Marisse Pomar","(09) 347387434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("49","Thomas Salazar","Married","39","Male","#3 bangga tres, Mansilingan","Paghidaet","1980-08-16","170","170","(09) 383483483","Negros Occidental","Driver","39-348394394-9","Mary Salazar","(09) 893939434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("50","Sweet Manhuyod","Married","39","Female","none, Mansilingan","Kasilingan","1980-07-16","160","160","(09) 343743743","Negros Occidental","Sales Lady","93-838993939-3","Jan Manhuyod","(09) 343435343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("51","Shane Dy","Single","24","Female","#3 everlasting, Mansilingan","Paglaum","1995-09-12","170","170","(09) 343734734","Negros Occidental","Sales Lady","03-893839493-4","Van Dy","(09) 348348384","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("52","Renz Cui","Single","23","Male","none, Mansilingan","Mabinuligon","1996-07-01","170","170","(09) 343434343","Negros Occidental","Driver","38-930034834-8","Manny Cui","(09) 383883434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("53","Shanky Lizaran","Married","25","Female","block 1 Lot 10, Mansilingan","Katilingban","1995-01-02","178","178","(09) 348738738","Negros Occidental","Street vendor","93-883939393-9","Johnny Lizaran","(09) 334374374","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("54","Michelle Ramos","Single","21","Female","none, Mansilingan","Kabugwason","1998-03-18","170","170","(09) 374387387","Negros Occidental","Student","93-838384384-8","Mike Ramos","(09) 343434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("55","Precious De Guzman","Married","26","Female","#3 Everlasting, Mansilingan","Himaya","1993-09-06","170","170","(09) 373737434","Negros Occidental","Call Center Agent","93-837387383-8","Christian De Guzman","(09) 387438434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("56","Raina Reyes","Married","25","Female","none, Mansilingan","Paglaum","1995-01-23","170","170","(09) 343434343","Negros Occidental","Housewife","38-938383838-3","Jay R Reyes","(09) 343434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("57","Michelle Gumabao","Married","31","Female","none, Mansilingan","Matahum","1988-06-17","180","180","(09) 434343434","Negros Occidental","Street Vendor","49-333889494-9","Michael Gumabao","(03) 934343434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("58","Kenneth Cayetano","Single","31","Male","n/a, Mansilingan","Kasilingan","1988-06-22","178","178","(09) 343434343","Negros Occidental","Programmer ","98-383838383-8","Ryan Cayetano","(03) 943434343","Active","Feb","2020","2020-02-22"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO pelvic_examination VALUES("1","1","4","Warts","Bartholin cyst","Discharge","Soft","Anteflexed","Small","Yes","3","Mass"); 
INSERT INTO pelvic_examination VALUES("2","2","9","Warts","Congested","Erosion","Firm","Anteflexed","Normal","Yes","10","Mass"); 
INSERT INTO pelvic_examination VALUES("3","3","20","Warts","Bartholin cyst","Discharge","Soft","Mid","Normal","None","13","Mass"); 
INSERT INTO pelvic_examination VALUES("4","4","19","Warts","Warts","Erosion","Firm","Mid","None","None","12","None"); 
INSERT INTO pelvic_examination VALUES("5","5","20","Scars","Congested","None","None","Mid","Normal","None","5","None"); 
INSERT INTO pelvic_examination VALUES("6","8","20","None","None","None","None","None","Normal","Yes","13","None"); 
INSERT INTO pelvic_examination VALUES("7","7","20","Scars","None","None","None","None","None","None","10","None"); 
INSERT INTO pelvic_examination VALUES("8","6","20","Scars","None","None","None","None","None","None","5","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO physical_examination VALUES("1","1","4","110/70","52","150","78","Pale","Enlarged thyroid","Mass, Nipple discharge","Abnormal breath sounds/respiratory rate","","Edema"); 
INSERT INTO physical_examination VALUES("2","2","9","110/70","52","150","78","Pale","Enlarged thyroid","Skin - orange peel or dimpling","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("3","3","20","110/70","52","150","78","Pale","Enlarged lymph nodes","Nipple discharge","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("4","4","19","110/70","52","150","78","Yellowish","None","Nipple discharge","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("5","5","20","110/70","54","150","78","None","None","Mass","None","None","Edema"); 
INSERT INTO physical_examination VALUES("6","8","20","111/70","55","170","70","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("7","7","20","100/50","58","160","78","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("8","6","20","100/10","57","170","78","None","None","None","None","None","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO prenatal VALUES("1","42","Juanito Sipat","2019-06-16","1","12","Regular/Monthly","moderate","3 days","negative","Prenatal c/o Dr. Legislador 2016-10-15","n/a","O","2016-11-16","2019-12-16","","","","Mabinuligon","Feb","2019"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO prenatal_consultation VALUES("1","1","42","For CBC, urinalysis, HBSag VDRLFeso4 2 bottles - once a dayPre-mature MTV - once a day","2019-09-23","1","0","0","0","0","n/a","2019-02-02","0","0","2019-11-09","100/60","46.0","55","142.3","2 months","n/a","none","first"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("15","2019-12-01","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","John Michael Aguillon","80","110/30","37.5","21","Broken leg, due to motorcycle accident","Jesse Franco Latosa","Male","Dec","2019","December 8, 2019 5:32 pm"); 
INSERT INTO referral VALUES("16","2019-12-01","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","Emmanuel James Tan","80","110/00","37.0","21","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:51 pm"); 
INSERT INTO referral VALUES("17","2019-12-01","Mansilingan Health Center","CLLMRH","Mansilingan, Bacolod City","Lacson st.","Sherlock Finch","79","100/50","36.5","19","fractured arm","Manilyn V. Jimera","Male","Dec","2019","December 9, 2019 4:53 pm"); 
INSERT INTO referral VALUES("19","2020-02-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Freya Allan","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Feb","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("20","2019-06-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Renz Jay Quillo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Jun","2019","June 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("21","2019-06-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Mico Mamigo","57","100/50","37.0","21","Fractured Leg","Manilyn V. Jimera","Male","Jun","2019","February 22, 2019 1:52 am"); 
INSERT INTO referral VALUES("22","2019-06-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Nico Montalvo","57","100/50","37.0","21","Fractured Leg","Manilyn V. Jimera","Male","Jun","2019","June 15, 2019 8:52 am"); 
INSERT INTO referral VALUES("23","2019-07-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Renzo Nono","59","100/60","38.0","21","High Fever","Manilyn V. Jimera","Male","Jul","2019","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("24","2019-07-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Michael Moreno","59","100/60","38.0","21","High Fever","Manilyn V. Jimera","Male","Jul","2019","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("25","2019-08-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Eric Jude Bornales","55","100/60","36.5","21","Gunshot","John Phillip Dela Cruz","Male","Aug","2019","August 11, 2019 8:19 am"); 
INSERT INTO referral VALUES("26","2019-09-17","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Slena Wasky","68","100/50","36.0","43","Dogbite","John Phillip Dela Cruz","Female","Sep","2019","September 17, 2019 2:30 am"); 
INSERT INTO referral VALUES("27","2019-10-23","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Rommel Adricula","57","100/50","37.0","38","Stomach Ache","Manilyn V. Jimera","Male","Oct","2019","October 23, 2019 7:33 am"); 
INSERT INTO referral VALUES("28","2019-11-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","John David Monteroso","56","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Nov","2019","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("29","2019-11-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Joshua Aglubat","56","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Nov","2019","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("30","2019-11-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Michael Aglubat","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Nov","2019","November 11, 2019 2:38 am"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO risk_for_vaw VALUES("1","1","4","Unpleasant relationship with partner","NGOs - "); 
INSERT INTO risk_for_vaw VALUES("2","2","9","Unpleasant relationship with partner","WCPU - "); 
INSERT INTO risk_for_vaw VALUES("3","3","20","Partner does not approve of the visit to FP Clinic","WCPU - "); 
INSERT INTO risk_for_vaw VALUES("4","4","19","None","DSWD - "); 
INSERT INTO risk_for_vaw VALUES("5","5","20","None","None - "); 
INSERT INTO risk_for_vaw VALUES("6","8","20","None","None - "); 
INSERT INTO risk_for_vaw VALUES("7","7","20","History of domestic violence or VAW","None - "); 
INSERT INTO risk_for_vaw VALUES("8","6","20","None","None - "); 



DROP TABLE sti_risks;

CREATE TABLE `sti_risks` (
  `sti_risks_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `sti_risk` varchar(100) NOT NULL,
  `forwomen` varchar(500) NOT NULL,
  `formen` varchar(500) NOT NULL,
  PRIMARY KEY (`sti_risks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO sti_risks VALUES("1","1","4","None","Pain or burning sensation","Swollen testicles or penis"); 
INSERT INTO sti_risks VALUES("2","2","9","None","Unusual discharge from vagina","Open sores anywhere in genital area, Pus corning from penis"); 
INSERT INTO sti_risks VALUES("3","3","20","With history of multiple partners","Pain or burning sensation","Swollen testicles or penis"); 
INSERT INTO sti_risks VALUES("4","4","19","None","None","None"); 
INSERT INTO sti_risks VALUES("5","5","20","None","None","None"); 
INSERT INTO sti_risks VALUES("6","8","20","None","None","None"); 
INSERT INTO sti_risks VALUES("7","7","20","None","None","None"); 
INSERT INTO sti_risks VALUES("8","6","20","None","None","None"); 



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
INSERT INTO tetanus_toxoid VALUES("4","8","2019-07-10","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("5","9","December 28, 2017","January 25, 2018","June 13, 2019","","",""); 
INSERT INTO tetanus_toxoid VALUES("6","10","2016-01-13","2016-06-08","2019-05-27","","",""); 
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

INSERT INTO tetanus_toxoid_fp VALUES("4","3","2019-11-13","2019-10-29","","",""); 
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding VALUES("11","3","","✓","","2019-11-20"); 
INSERT INTO type_of_feeding VALUES("12","3","","","✓","2019-11-28"); 
INSERT INTO type_of_feeding VALUES("14","8","✓","","","2019-12-01"); 
INSERT INTO type_of_feeding VALUES("15","8","✓","","","2019-12-10"); 
INSERT INTO type_of_feeding VALUES("16","8","✓","","","2019-12-25"); 
INSERT INTO type_of_feeding VALUES("17","8","✓","","","2019-12-31"); 
INSERT INTO type_of_feeding VALUES("18","8","✓","","","2019-11-19"); 
INSERT INTO type_of_feeding VALUES("25","8","","✓","","2020-01-08"); 
INSERT INTO type_of_feeding VALUES("26","3","✓","","","2020-02-19"); 



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

INSERT INTO type_of_feeding_2 VALUES("4","3","2019-11-12","","","",""); 
INSERT INTO type_of_feeding_2 VALUES("5","8","","2019-05-15","2019-11-20","2019-11-09","2019-11-08"); 
INSERT INTO type_of_feeding_2 VALUES("6","9","","","","September 4, 2019","September 3, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("7","10","","","","2019-07-25","2019-07-24"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","$2y$10$yhkB7S3FyI5nm2o187mVJuYntg5VJs2tUEBSj9Ml7Z1PIrEsK1o9m","1","November 5, 2019, 3:53 pm","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","$2y$10$MDC.OKbb4X41APh3g.nJPez63/7iaepg4cSujwpt8jYLZm4W.JIeW","1","September 13, 2019, 8:43 pm","July 29, 2019","3:01 am"); 
INSERT INTO users VALUES("26","Jesse Franco Latosa","dfdfdadf","Nurse","jfranco30","$2y$10$0fSDoFtbQj81BURQu07CS.y7NlIBddrKSgCBrpwYtdazhpBsQqFny","1","February 15, 2020, 6:01 pm","September 20, 2019","12:25 am"); 
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","$2y$10$xdDjYSYJFksfk9PbNV98WO54PHxAt4mGImSA/.V3x.u9oXTWb5BRS","1","February 22, 2020, 12:08 am","September 22, 2019","4:01 am"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=1400 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("1316","27","Successfully Backup the database","2020-02-08, 11:14 pm"); 
INSERT INTO users_activity_log VALUES("1317","27","Added Prescription to Daniel Andrew Go","February 9, 2020 - 12:26 pm"); 
INSERT INTO users_activity_log VALUES("1318","27","Updated account of Jesse Franco Latosa","February 15, 2020 - 6:00 pm"); 
INSERT INTO users_activity_log VALUES("1319","26","Updated account of Jesse Franco Latosa","February 15, 2020 - 6:01 pm"); 
INSERT INTO users_activity_log VALUES("1320","27","Added Prescription to Rose Zirilli","February 16, 2020 - 1:11 pm"); 
INSERT INTO users_activity_log VALUES("1321","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:18 pm"); 
INSERT INTO users_activity_log VALUES("1322","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:20 pm"); 
INSERT INTO users_activity_log VALUES("1323","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:20 pm"); 
INSERT INTO users_activity_log VALUES("1324","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:23 pm"); 
INSERT INTO users_activity_log VALUES("1325","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:24 pm"); 
INSERT INTO users_activity_log VALUES("1326","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:25 pm"); 
INSERT INTO users_activity_log VALUES("1327","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:27 pm"); 
INSERT INTO users_activity_log VALUES("1328","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:28 pm"); 
INSERT INTO users_activity_log VALUES("1329","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:34 pm"); 
INSERT INTO users_activity_log VALUES("1330","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:35 pm"); 
INSERT INTO users_activity_log VALUES("1331","27","Updated Immunization Treatment Status for ","February 16, 2020 - 1:37 pm"); 
INSERT INTO users_activity_log VALUES("1332","27","Successfully Backup the database","2020-02-16, 1:41 pm"); 
INSERT INTO users_activity_log VALUES("1333","27","Added Lolita Villarosa Gerose to Family Planning","February 20, 2020 - 11:14 am"); 
INSERT INTO users_activity_log VALUES("1334","27","Added Lolita Villarosa Gerose to Family Planning Assessment","February 20, 2020 - 11:19 am"); 
INSERT INTO users_activity_log VALUES("1335","27","added 20 pieces of Isoniazid to stocks","February 20, 2020 1:31 pm"); 
INSERT INTO users_activity_log VALUES("1336","27","dispensed 5 Biogesic to Daniel Andrew Go","February 20, 2020 1:31 pm"); 
INSERT INTO users_activity_log VALUES("1337","27","Registered Mary Ann Sipat as new Patient","February 20, 2020 - 8:06 pm"); 
INSERT INTO users_activity_log VALUES("1338","27","Added Mary Ann Sipat to Prenatal","February 20, 2020 - 8:09 pm"); 
INSERT INTO users_activity_log VALUES("1339","27","Added Mary Ann Sipat to Prenatal Consultation","February 20, 2020 - 8:18 pm"); 
INSERT INTO users_activity_log VALUES("1340","27","Edited Sherlock Finch Referral Record","February 20, 2020 10:08 pm"); 
INSERT INTO users_activity_log VALUES("1341","27","Added a New Individual Referral Record","February 20, 2020 10:09 pm"); 
INSERT INTO users_activity_log VALUES("1342","27","Added Mary Ann Sipat to Consultation","February 21, 2020 - 10:37 pm"); 
INSERT INTO users_activity_log VALUES("1343","27","Added Prescription to Mary Ann Sipat","February 21, 2020 - 10:51 pm"); 
INSERT INTO users_activity_log VALUES("1344","27","Added Domingo Jose Carlos to Consultation","February 21, 2020 - 10:58 pm"); 
INSERT INTO users_activity_log VALUES("1345","27","Added Prescription to Domingo Jose Carlos","February 21, 2020 - 11:00 pm"); 
INSERT INTO users_activity_log VALUES("1346","27","Added Markh B. Jamandre to Consultation","February 21, 2020 - 11:12 pm"); 
INSERT INTO users_activity_log VALUES("1347","27","Added Prescription to Markh B. Jamandre","February 21, 2020 - 11:23 pm"); 
INSERT INTO users_activity_log VALUES("1348","27","Added Lagrimas Casabuena Campa to Consultation","February 21, 2020 - 11:28 pm"); 
INSERT INTO users_activity_log VALUES("1349","27","Added Jose Ignacio Silga to Consultation","February 21, 2020 - 11:47 pm"); 
INSERT INTO users_activity_log VALUES("1350","27","Added Mercy Buenafuente to Consultation","February 21, 2020 - 11:55 pm"); 
INSERT INTO users_activity_log VALUES("1351","27","Added Rose Zirilli to Consultation","February 21, 2020 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("1352","27","Added Prescription to Rose Zirilli","February 22, 2020 - 12:00 am"); 
INSERT INTO users_activity_log VALUES("1353","27","Added Prescription to Mercy Buenafuente","February 22, 2020 - 12:04 am"); 
INSERT INTO users_activity_log VALUES("1354","27","Registered Audrey Faith Villasis as new Patient","February 22, 2020 - 12:11 am"); 
INSERT INTO users_activity_log VALUES("1355","27","Added Audrey Faith Villasis to Consultation","February 22, 2020 - 12:12 am"); 
INSERT INTO users_activity_log VALUES("1356","27","Added Prescription to Audrey Faith Villasis","February 22, 2020 - 12:14 am"); 
INSERT INTO users_activity_log VALUES("1357","27","Registered Andrea Daniella V. Go as new Child Patient","February 22, 2020 - 12:21 am"); 
INSERT INTO users_activity_log VALUES("1358","27","Registered Phoebe Golez as new Child Patient","February 22, 2020 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("1359","27","Registered Daniel Jp Villa Franco as new Child Patient","February 22, 2020 - 12:28 am"); 
INSERT INTO users_activity_log VALUES("1360","27","Added Audrey Faith Villasis to Consultation","February 22, 2020 - 12:35 am"); 
INSERT INTO users_activity_log VALUES("1361","27","Added Prescription to Audrey Faith Villasis","February 22, 2020 - 12:36 am"); 
INSERT INTO users_activity_log VALUES("1362","27","Registered Katherine Jalandoni as new Patient","February 22, 2020 - 12:45 am"); 
INSERT INTO users_activity_log VALUES("1363","27","Added Katherine Jalandoni to Consultation","February 22, 2020 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("1364","27","Added Prescription to Katherine Jalandoni","February 22, 2020 - 12:48 am"); 
INSERT INTO users_activity_log VALUES("1365","27","Added Prescription to Jose Ignacio Silga","February 22, 2020 - 12:49 am"); 
INSERT INTO users_activity_log VALUES("1366","27","Added Prescription to Lagrimas Casabuena Campa","February 22, 2020 - 12:49 am"); 
INSERT INTO users_activity_log VALUES("1367","27","Added Prescription to John Matthew Lorizo","February 22, 2020 - 12:51 am"); 
INSERT INTO users_activity_log VALUES("1368","27","Added Prescription to John Matthew Lorizo","February 22, 2020 - 12:52 am"); 
INSERT INTO users_activity_log VALUES("1369","27","Successfully Backup the database","2020-02-22, 12:53 am"); 
INSERT INTO users_activity_log VALUES("1370","27","Added a New Individual Referral Record","February 22, 2020 12:59 am"); 
INSERT INTO users_activity_log VALUES("1371","27","Added Jesse Franco Latosa to Consultation","February 22, 2020 - 1:12 am"); 
INSERT INTO users_activity_log VALUES("1372","27","Added Levoceterizine as new medicine","February 22, 2020 - 1:13 am"); 
INSERT INTO users_activity_log VALUES("1373","27","added 25 pieces of Levoceterizine to stocks","February 22, 2020 1:13 am"); 
INSERT INTO users_activity_log VALUES("1374","27","Added Prescription to Jesse Franco Latosa","February 22, 2020 - 1:14 am"); 
INSERT INTO users_activity_log VALUES("1375","27","Edited  Consultation Form","February 22, 2020 - 1:19 am"); 
INSERT INTO users_activity_log VALUES("1376","27","Successfully Backup the database","2020-02-22, 1:31 am"); 
INSERT INTO users_activity_log VALUES("1377","27","Edited Freya Allan Referral Record","February 22, 2020 1:46 am"); 
INSERT INTO users_activity_log VALUES("1378","27","Added a New Individual Referral Record","February 22, 2020 1:52 am"); 
INSERT INTO users_activity_log VALUES("1379","27","Edited Mico Mamigo Referral Record","February 22, 2020 1:53 am"); 
INSERT INTO users_activity_log VALUES("1380","27","Added a New Individual Referral Record","February 22, 2020 2:10 am"); 
INSERT INTO users_activity_log VALUES("1381","27","Added a New Individual Referral Record","February 22, 2020 2:19 am"); 
INSERT INTO users_activity_log VALUES("1382","27","Added a New Individual Referral Record","February 22, 2020 2:30 am"); 
INSERT INTO users_activity_log VALUES("1383","27","Added a New Individual Referral Record","February 22, 2020 2:33 am"); 
INSERT INTO users_activity_log VALUES("1384","27","Added a New Individual Referral Record","February 22, 2020 2:38 am"); 
INSERT INTO users_activity_log VALUES("1385","27","Registered Jerhod Kyan Ricabo as new Patient","February 22, 2020 - 3:25 am"); 
INSERT INTO users_activity_log VALUES("1386","27","Added Immunization Treatment to Hilary Ahmor Sipat","February 22, 2020 - 4:00 am"); 
INSERT INTO users_activity_log VALUES("1387","27","Registered Alvaro Morata as new Patient","February 22, 2020 - 4:06 am"); 
INSERT INTO users_activity_log VALUES("1388","27","Registered Angelo Garcia as new Patient","February 22, 2020 - 4:10 am"); 
INSERT INTO users_activity_log VALUES("1389","27","Registered Vince Pomar as new Patient","February 22, 2020 - 4:13 am"); 
INSERT INTO users_activity_log VALUES("1390","27","Registered Thomas Salazar as new Patient","February 22, 2020 - 4:18 am"); 
INSERT INTO users_activity_log VALUES("1391","27","Registered Sweet Manhuyod as new Patient","February 22, 2020 - 4:21 am"); 
INSERT INTO users_activity_log VALUES("1392","27","Registered Shane Dy as new Patient","February 22, 2020 - 4:23 am"); 
INSERT INTO users_activity_log VALUES("1393","27","Registered Renz Cui as new Patient","February 22, 2020 - 4:24 am"); 
INSERT INTO users_activity_log VALUES("1394","27","Registered Shanky Lizaran as new Patient","February 22, 2020 - 4:27 am"); 
INSERT INTO users_activity_log VALUES("1395","27","Registered Michelle Ramos as new Patient","February 22, 2020 - 4:30 am"); 
INSERT INTO users_activity_log VALUES("1396","27","Registered Precious De Guzman as new Patient","February 22, 2020 - 4:32 am"); 
INSERT INTO users_activity_log VALUES("1397","27","Registered Raina Reyes as new Patient","February 22, 2020 - 4:34 am"); 
INSERT INTO users_activity_log VALUES("1398","27","Registered Michelle Gumabao as new Patient","February 22, 2020 - 4:37 am"); 
INSERT INTO users_activity_log VALUES("1399","27","Registered Kenneth Cayetano as new Patient","February 22, 2020 - 4:43 am"); 



