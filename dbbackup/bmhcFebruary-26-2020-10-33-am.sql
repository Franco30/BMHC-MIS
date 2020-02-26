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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

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
INSERT INTO consultation VALUES("74","44","2019-10-08","Jason Jalandoni","79","123","132/14","32.5","114","142","Colds and Flu","Colds","Colds","Colds","Colds","20","Female","Himaya","Oct","2019","With Prescription","February 22, 2020 - 2:39 am"); 
INSERT INTO consultation VALUES("75","45","2019-09-03","Nonoy Villasis","50","121","124/67","37.1","132","125","Colds and Flu","COlds","Colds","Colds","None","49","Female","Himaya","Sep","2019","With Prescription","February 22, 2020 - 2:46 am"); 
INSERT INTO consultation VALUES("76","26","2019-10-18","Diong","12","41","124/12","51.2","98","78","Diarrhea","SAkit tiyan","Sakit Tyan","Stomach Ache ","none","43","Female","Gauzon","Oct","2019","With Prescription","February 22, 2020 - 2:58 am"); 
INSERT INTO consultation VALUES("77","15","2019-10-16","Adrix Nation","69","69","696/91","69.9","192","168","Fever","Fever","fever","fever","none","38","Male","Gauzon","Oct","2019","With Prescription","February 22, 2020 - 3:00 am"); 
INSERT INTO consultation VALUES("78","14","2019-09-04","Johnson","87","89","125/42","12.5","142","421","Colds and Flu, Headache","Slight fever with headache","sakit ulo","sakit ulo","none","53","Male","Kasilingan","Sep","2019","With Prescription","February 22, 2020 - 3:07 am"); 
INSERT INTO consultation VALUES("79","10","2019-10-24","Gentepoy","78","86","182/71","19.2","129","142","Fever","hlanat","hilanaaat","feverrr","nope","38","Female","Kasilingan","Oct","2019","With Prescription","February 22, 2020 - 3:10 am"); 
INSERT INTO consultation VALUES("80","4","2019-09-24","Lagrimas","14","12","123/51","15.2","152","512","Others","Swollen tongue","Swollen Tongue","Sakit dila","none","53","Female","Kasilingan","Sep","2019","With Prescription","February 22, 2020 - 3:13 am"); 
INSERT INTO consultation VALUES("81","17","2019-09-20","Cahil","78","197","172/89","43.7","142","142","Fever","Fever","Fever","Fever","Fever","24","Male","Kasilingan","Sep","2019","With Prescription","February 22, 2020 - 3:23 am"); 
INSERT INTO consultation VALUES("82","6","2019-12-09","Agsam Bermo","89","172","128/76","18.2","132","125","Conjunctivitis","Sakit mata","sakit mata","pula mata","None","49","Male","Gauzon","Dec","2019","With Prescription","February 22, 2020 - 3:37 am"); 
INSERT INTO consultation VALUES("83","38","2020-01-09","Dude","45","51","152/51","51.2","142","120","Fever","Hilanat","Sample Data","Hypothetical Data","none","18","Female","Kasilingan","Jan","2020","With Prescription","February 22, 2020 - 3:59 am"); 
INSERT INTO consultation VALUES("84","25","2020-01-30","Nelson","12","51","125/12","12.5","152","125","Headache","Headache","Head Ache","Ache","None","43","Female","Paghidaet","Jan","2020","With Prescription","February 22, 2020 - 4:04 am"); 
INSERT INTO consultation VALUES("85","40","2020-01-22","Silgado","12","51","512/51","51.2","781","142","Allergy, Conjunctivitis","Allergy and pula mata","Sakit mata","Pulat mata tungod sa allergy","none","15","Select","Kahirup A","Jan","2020","With Prescription","February 22, 2020 - 4:07 am"); 
INSERT INTO consultation VALUES("86","22","2020-01-30","Azazel Stygrid","152","51","152/76","45.2","142","132","Allergy, Colds and Flu","Having itchy","Itchy skin","Runny Nose","Nope","39","Female","Paghidaet","Jan","2020","With Prescription","February 22, 2020 - 4:13 am"); 
INSERT INTO consultation VALUES("87","24","2020-01-18","Antonio Foretel","42","24","152/67","36.1","142","136","Diarrhea","3 days diarrhea","After kaon sang pan-os","Lupot","Nope","42","Female","Kasilingan","Jan","2020","With Prescription","February 22, 2020 - 4:15 am"); 
INSERT INTO consultation VALUES("91","113","2020-02-21","James Reid","50","170","100/60","37.0","70","70","Allergy, Colds and Flu, Diarrhea","none","n/a","n/a","n/a","18","Female","Kahirup A","Feb","2020","With Prescription","February 22, 2020 - 2:38 pm"); 
INSERT INTO consultation VALUES("92","112","2020-02-22","AZ Reid","60","170","100/70","36.5","70","80","Fever, Headache, Stomach Ache","none","n/a","n/a","n/a","11","Male","Kasilingan","Feb","2020","With Prescription","February 22, 2020 - 2:45 pm"); 
INSERT INTO consultation VALUES("93","37","2020-02-24","Rambo Tan","57","170","100/70","37.0","80","70","Allergy, Conjunctivitis, Fever","nagkaon pagkaon nga bawal sa allergy kag na singaw kag hilanat","n/a","n/a","n/a","21","Male","Kasilingan","Feb","2020","With Prescription","February 22, 2020 - 2:52 pm"); 
INSERT INTO consultation VALUES("94","97","2020-03-03","Nico Baja","50","170","100/70","36.0","80","79","Allergy, Colds and Flu, Others","none","n/a","n/a","n/a","20","Female","Paghidaet","Mar","2020","With Prescription","February 22, 2020 - 2:58 pm"); 
INSERT INTO consultation VALUES("95","97","2020-04-03","Nico Baja","50","170","100/70","36.0","80","79","Allergy, Colds and Flu, Others","none","n/a","n/a","n/a","20","Female","Paghidaet","Apr","2020","With Prescription","February 22, 2020 - 2:58 pm"); 
INSERT INTO consultation VALUES("96","97","2020-05-03","Nico Baja","50","170","100/70","36.0","80","79","Allergy, Colds and Flu, Others","none","n/a","n/a","n/a","20","Female","Paghidaet","May","2020","With Prescription","February 22, 2020 - 2:58 pm"); 
INSERT INTO consultation VALUES("97","87","2020-02-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Feb","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("98","87","2020-03-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Mar","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("99","87","2020-04-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Apr","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("100","87","2020-05-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","May","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("101","87","2020-02-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Feb","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("102","87","2020-03-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Mar","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("103","87","2020-04-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","Apr","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("104","87","2020-05-26","Japeth Aguilar","60","170","100/60","37.0","70","70","Allergy, Colds and Flu, Conjunctivitis, Diarrhea, Fever, Headache, Stomach Ache, Others","none","none","none","none","24","Male","Matahum","May","2020","With Prescription","February 22, 2020 - 3:15 pm"); 
INSERT INTO consultation VALUES("108","111","2020-02-26","Darla Villa","50","170","100/60","37.0","79","80","Allergy","gapalangatol ang lawas after kaon sang hipon","n/a","n/a","n/a","11","Female","Kasilingan","Feb","2020","With Prescription","February 22, 2020 - 3:27 pm"); 
INSERT INTO consultation VALUES("112","112","2020-02-05","33","33","33","333/33","33.3","33","33","Colds and Flu","3","3","3","3","11","Male","Kasilingan","Feb","2020","With Prescription","February 23, 2020 - 2:06 pm"); 



DROP TABLE consultation_prescription;

CREATE TABLE `consultation_prescription` (
  `prescription_id` int(11) NOT NULL AUTO_INCREMENT,
  `consultation_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medicine_category` varchar(50) NOT NULL,
  `medname` varchar(50) NOT NULL,
  `6am` blob NOT NULL,
  `8am` blob NOT NULL,
  `12nn` blob NOT NULL,
  `2pm` blob NOT NULL,
  `4pm` blob NOT NULL,
  `6pm` blob NOT NULL,
  `8pm` blob NOT NULL,
  `qty` varchar(30) NOT NULL,
  `recommendation` varchar(200) NOT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

INSERT INTO consultation_prescription VALUES("54","45","29","27","Anti-TB Drugs","Rifampicin + isoniazid","✓","","✓","","✓","","","3","33"); 
INSERT INTO consultation_prescription VALUES("55","48","37","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","","3","dfdf"); 
INSERT INTO consultation_prescription VALUES("56","47","29","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","✓","4","4"); 
INSERT INTO consultation_prescription VALUES("57","49","30","27","Anti-TB Drugs","Rifapentine","✓","","✓","","✓","","","33","33"); 
INSERT INTO consultation_prescription VALUES("58","50","38","27","Antibiotic","Cefalexin 250 ","","✓","","✓","✓","","","3","adfasdf"); 
INSERT INTO consultation_prescription VALUES("59","62","39","27","Antipyretic","Biogesic","✓","","✓","","✓","","","33","33"); 
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
INSERT INTO consultation_prescription VALUES("76","71","43","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","","9","3 times a day for three days"); 
INSERT INTO consultation_prescription VALUES("77","74","44","27","Antipyretic","Biogesic","✓","","✓","","✓","","","6","2 days"); 
INSERT INTO consultation_prescription VALUES("78","75","45","27","Antibiotic","Cefalexin 250 ","✓","","","","","","","5","Morning only for 5 days"); 
INSERT INTO consultation_prescription VALUES("79","76","26","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","","6","Sakit tiyan"); 
INSERT INTO consultation_prescription VALUES("80","77","15","27","Vitamins","Cecon 500 mg","","✓","✓","","","","","12","Drink medies"); 
INSERT INTO consultation_prescription VALUES("81","78","14","27","Cough Preparation","Ambroxol","","","✓","✓","✓","","","5","none"); 
INSERT INTO consultation_prescription VALUES("82","79","10","27","Anti-TB Drugs","Rifapentine","","","","","","","✓","3","evening"); 
INSERT INTO consultation_prescription VALUES("83","80","4","27","Antipyretic","Biogesic","","","✓","","✓","","","4","Drink twice per day for 2 days"); 
INSERT INTO consultation_prescription VALUES("84","81","17","27","Antipyretic","Biogesic","✓","","","✓","","","","4","every 6 hours"); 
INSERT INTO consultation_prescription VALUES("85","82","6","27","Anti-TB Drugs","Rifampicin 150 mg","✓","","","✓","","","✓","15","three times per day for 5 days"); 
INSERT INTO consultation_prescription VALUES("86","83","38","27","Anti-TB Drugs","Isoniazid","","✓","","","","","","4","4 days per morning"); 
INSERT INTO consultation_prescription VALUES("87","84","25","27","Antibiotic","Cefalexin 250 ","✓","","✓","","","","","2","2"); 
INSERT INTO consultation_prescription VALUES("88","85","40","27","Anti-TB Drugs","Isoniazid","","✓","","","","✓","","4","Breakfast and dinner "); 
INSERT INTO consultation_prescription VALUES("89","86","22","27","Antibiotic","Cefalexin 250 ","✓","✓","","","","","","4","Morning only for 2 days"); 
INSERT INTO consultation_prescription VALUES("90","87","24","27","Anti-TB Drugs","Rifampicin 150 mg","","","","✓","✓","","","6","2pm and 4 pm only for 3 days"); 
INSERT INTO consultation_prescription VALUES("91","91","113","27","Antihistamine","Levoceterizine","","✓","","","","","","5","Drink if the allergy show up"); 
INSERT INTO consultation_prescription VALUES("92","91","113","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","n/a"); 
INSERT INTO consultation_prescription VALUES("93","92","112","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","every 4 hours"); 
INSERT INTO consultation_prescription VALUES("94","93","37","27","Antihistamine","Levoceterizine","","✓","","","","","","3","depende kung ano oras imnom"); 
INSERT INTO consultation_prescription VALUES("95","93","37","27","Vitamins","Cecon 500 mg","","✓","","","","","","5","depende kung ano oras imnom"); 
INSERT INTO consultation_prescription VALUES("96","94","97","27","Antihistamine","Levoceterizine","","✓","","","","","","4","none"); 
INSERT INTO consultation_prescription VALUES("97","95","97","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","none"); 
INSERT INTO consultation_prescription VALUES("98","96","97","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","n/a"); 
INSERT INTO consultation_prescription VALUES("99","97","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","none"); 
INSERT INTO consultation_prescription VALUES("100","97","87","27","Antihistamine","Levoceterizine","","✓","","","","","","2","none"); 
INSERT INTO consultation_prescription VALUES("101","98","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","none"); 
INSERT INTO consultation_prescription VALUES("102","99","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","4","none"); 
INSERT INTO consultation_prescription VALUES("103","100","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","5","none"); 
INSERT INTO consultation_prescription VALUES("104","101","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","3","none"); 
INSERT INTO consultation_prescription VALUES("105","102","87","27","Antipyretic","Biogesic","✓","","✓","","✓","","✓","4","none"); 
INSERT INTO consultation_prescription VALUES("106","103","87","27","Antibiotic","Cefalexin 250 ","","✓","","✓","","","","3","none"); 
INSERT INTO consultation_prescription VALUES("107","103","87","27","Vitamins","Cecon 500 mg","✓","","✓","","✓","","✓","5","none"); 
INSERT INTO consultation_prescription VALUES("108","104","87","27","Anti-TB Drugs","Isoniazid","✓","","✓","","","","✓","3","none"); 
INSERT INTO consultation_prescription VALUES("109","108","111","27","Antihistamine","Levoceterizine","","✓","","","","","","4","di mag inom kung wala pa gagwa ang allergy"); 
INSERT INTO consultation_prescription VALUES("110","111","66","27","Antibiotic","Cefalexin 250 ","✓","","","✓","","","✓","3","333"); 
INSERT INTO consultation_prescription VALUES("111","91","113","27","Cough Preparation","Ambroxol","✓","","✓","","✓","","","4","n/a"); 
INSERT INTO consultation_prescription VALUES("112","112","112","27","Cough Preparation","Ambroxol","✓","","✓","","✓","","✓","33","3"); 
INSERT INTO consultation_prescription VALUES("113","91","113","27","Antibiotic","Cefalexin 250 ","✓","","✓","","✓","","✓","3","none"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("46","27","Export","2020-02-08","11:07 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("47","27","Export","2020-02-08","11:12 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("48","27","Export","2020-02-08","11:14 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("49","27","Export","2020-02-16","1:41 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("50","27","Import","February 22, 2020","12:59 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("51","27","Import","February 22, 2020","1:05 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("52","27","Export","2020-02-22","1:31 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("53","27","Export","2020-02-22","4:43 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("54","27","Export","2020-02-22","6:22 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("55","27","Import","February 22, 2020","6:25 am","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("56","27","Export","2020-02-22","12:37 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("57","27","Export","2020-02-22","4:36 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("58","27","Export","2020-02-23","3:47 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("59","27","Export","2020-02-23","8:58 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("60","27","Export","2020-02-23","11:55 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("61","27","Export","2020-02-26","2:43 am","Successfully Exported Database"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO family_planning VALUES("1","4","New to the Program","None","2019/07/13 11:12 AM","Highschool","Marcelito Gerose","1976-08-05","College","Businessman","30000","7","No","limiting or spacing","COC","Kasilingan","Assessed","Jul","2019"); 
INSERT INTO family_planning VALUES("2","9","New to the Program","None","2019/06/19 10:41 PM","College","Nicolas Diana","1983-06-15","College","Businessman","35000","2","Yes","limiting and spacing","Condom","Lasalle Ville","Assessed","Jun","2019"); 
INSERT INTO family_planning VALUES("3","20","New to the Program","None","2019/06/21 9:07 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain number of children","COC","Kahirup B","Assessed","Jun","2019"); 
INSERT INTO family_planning VALUES("4","19","New to the Program","None","2019/08/14 9:44 AM","College","Mark Panabe","1990-06-13","College","Web Developer","50000","1","Yes","to maintain number of children","COC","Kahirup A","Assessed","Aug","2019"); 
INSERT INTO family_planning VALUES("5","20","Continuing User","COC","2019/09/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Sep","2019"); 
INSERT INTO family_planning VALUES("6","20","Continuing User","COC","2019/10/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Oct","2019"); 
INSERT INTO family_planning VALUES("7","20","Continuing User","IUD","2019/11/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Nov","2019"); 
INSERT INTO family_planning VALUES("8","20","Continuing User","IUD","2019/12/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Dec","2019"); 
INSERT INTO family_planning VALUES("9","38","New to the Program","None","2020/02/04 7:25 PM","College","Jemar Allan","1999-08-03","College","Marketing","15000","1","Yes","to maintain number of chidlren","COC","Kasilingan","Assessed","Feb","2020"); 
INSERT INTO family_planning VALUES("10","38","Continuing User","COC","2020/02/24 7:34 PM","College","Jemar Allan","1999-08-03","College","Businessman","15000","1","Yes","to maintain number of children","Condom","Kasilingan","Assessed","Feb","2020"); 
INSERT INTO family_planning VALUES("11","42","New to the Program","None","2020-01-14 9:00 AM","College","Juanito Sipat","1989-08-22","College","Call Center Agent","15000","1","Yes","to maintain the number of child","Condom","Mabinuligon","Assessed","Jan","2020"); 
INSERT INTO family_planning VALUES("12","42","Continuing User","Condom","2020-01-20 9:00 AM","College","Juanito Sipat","1989-08-22","College","Call Center Agent","15000","1","Yes","to maintain the number of child","IUD","Mabinuligon","Assessed","Jan","2020"); 
INSERT INTO family_planning VALUES("13","105","New to the Program","None","2020-03-18 3:14 PM","College","Xian Gaza","1990-11-28","College","Scammer","25000","3","Yes","3","Condom","Paglaum","Assessed","Mar","2020"); 
INSERT INTO family_planning VALUES("14","105","Continuing User","Condom","2020-03-18 3:14 PM","College","Xian Gaza","1990-11-28","College","Scammer","25000","3","Yes","3","IUD","Paglaum","Assessed","Mar","2020"); 
INSERT INTO family_planning VALUES("15","105","Continuing User","IUD","2020-04-18 3:14 PM","College","Xian Gaza","1990-11-28","College","Scammer","25000","3","Yes","3","Condom","Paglaum","Assessed","Apr","2020"); 
INSERT INTO family_planning VALUES("16","105","Continuing User","Condom","2020-05-18 3:14 PM","College","Xian Gaza","1990-11-28","College","Scammer","25000","3","Yes","3","COC","Paglaum","Assessed","May","2020"); 
INSERT INTO family_planning VALUES("17","20","Continuing User","COC","2020/06/18 9:53 AM","College","Shawn Mendez","1990-08-15","College","Call Center","30000","1","Yes","to maintain the number of children","IUD","Kahirup B","Assessed","Jun","2020"); 
INSERT INTO family_planning VALUES("18","38","Continuing User","COC","2020/06/18 9:53 AM","College","Jemar Allan","1999-08-03","College","Businessman","15000","1","Yes","to maintain number of children","Condom","Kasilingan","Assessed","Jun","2020"); 
INSERT INTO family_planning VALUES("19","42","Continuing User","Condom","2020/06/28 9:53 AM","College","Juanito Sipat","1989-08-22","College","Call Center Agent","15000","1","Yes","to maintain the number of child","IUD","Mabinuligon","Assessed","Jun","2020"); 
INSERT INTO family_planning VALUES("20","72","New to the Program","None","2020-01-18 3:14 PM","College","Mike Gudio","1990-11-28","College","Android Developer","25000","3","Yes","3","Condom","Gauzon","Assessed","Jan","2020"); 
INSERT INTO family_planning VALUES("21","54","New to the Program","None","2020-07-23 9:54 PM","College","Mike Ramos","1997-07-23","College","Programmer","15000","1","No","to maintain number of children","COC","Kabugwason","Assessed","Jul","2020"); 
INSERT INTO family_planning VALUES("22","54","Continuing User","COC","2020-07-23 9:54 PM","College","Mike Ramos","1997-07-23","College","Programmer","15000","1","No","to maintain number of children","Condom","Kabugwason","Assessed","Jul","2020"); 
INSERT INTO family_planning VALUES("23","24","New to the Program","None","2020-08-30 10:29 PM","College","John Berquist","1978-08-09","College","Senior Programmer","50000","3","No","to maintain the number of children","COC","Kasilingan","Assessed","Aug","2020"); 
INSERT INTO family_planning VALUES("24","24","Continuing User","COC","2020-08-31 10:29 PM","College","John Berquist","1978-08-09","College","Senior Programmer","50000","3","No","to maintain the number of children","Condom","Kasilingan","Assessed","Aug","2020"); 
INSERT INTO family_planning VALUES("25","10","New to the Program","None","2020-09-15 10:58 PM","College","Johny Buenafuente","1979-08-15","College","Salesman","10000","3","No","to maintain number of children","Condom","Kasilingan","Assessed","Sep","2020"); 
INSERT INTO family_planning VALUES("26","10","Continuing User","Condom","2020-09-21 10:58 AM","College","Johny Buenafuente","1979-08-15","College","Salesman","10000","3","No","to maintain number of children","COC","Kasilingan","Assessed","Sep","2020"); 
INSERT INTO family_planning VALUES("27","82","New to the Program","None","2020-02-17 9:15 AM","College","Dogong Bel","1994-10-10","College ","Businessman","15000","2","Yes","to maintain number of children","Condom","Kahirup B","Assessed","Feb","2020"); 
INSERT INTO family_planning VALUES("28","44","New to the Program","None","2020-02-17 11:22 AM","College","Jason Jalandoni","1999-06-07","College","Call Center","15000","1","Yes","to maintain number of children","COC","Himaya","Assessed","Feb","2020"); 
INSERT INTO family_planning VALUES("29","108","New to the Program","None","2020-02-26 10:12 AM","college","John Sia","1963-12-18","College","Programmer","15000","2","No","to maintain  number of children","COC","Kasilingan","No Assessment","Feb","2020"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO fp_follow_up VALUES("40","4","2020-01-08","Condom","4","Try kung magbusong ka or indi","Imelita 0. Anjao","2020-07-31","Done"); 
INSERT INTO fp_follow_up VALUES("41","20","2019-02-20","COC","3","none","Diana Rose S. Laput","2019-03-09","Done"); 
INSERT INTO fp_follow_up VALUES("42","20","2019-04-04","IUD","3","none","Imelita 0. Anjao","2019-03-18","Done"); 
INSERT INTO fp_follow_up VALUES("43","20","2019-04-29","IUD","3","none","Jesse Franco Latosa","2019-04-08","Done"); 
INSERT INTO fp_follow_up VALUES("44","20","2019-02-01","COC","5","none","Daniel Andrew Go","2019-02-11","Done"); 
INSERT INTO fp_follow_up VALUES("45","9","2019-01-07","Condom","3","none","Jesse Franco Latosa","2019-01-14","Done"); 
INSERT INTO fp_follow_up VALUES("46","4","2019-08-05","COC","6","none","Manilyn V. Jimera","2019-08-12","Done"); 
INSERT INTO fp_follow_up VALUES("47","19","2019-09-02","COC","5","none","Daniel Andrew Go","2019-09-09","Done"); 
INSERT INTO fp_follow_up VALUES("48","72","2020-01-18","Condom","1 pack","none","Diana Rose S. Laput","2020-01-13","Done"); 
INSERT INTO fp_follow_up VALUES("49","82","2020-02-17","Condom","1 pack","none","Imelita 0. Anjao","2020-02-27","Pending"); 
INSERT INTO fp_follow_up VALUES("50","44","2020-02-17","COC","1 vial","try if effective","Diana Rose S. Laput","2020-02-27","Pending"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO immunization VALUES("10","3","33-483838338-3","12:00 PM","4.9","(09) 934374343","1","1","0","43","47","MHC","CHO Bacolod","Normal","Kahirup B","Female","Currently in Treatment","Nov","2019","2019-01-01"); 
INSERT INTO immunization VALUES("11","8","11-025666793-2","6:05 AM","2.83","(09) 038383838","1","1","0","25","22","CHO Lying In","CHO Lying In","Normal","Kasilingan","Female","Treatment Completed","Dec","2019","2019-01-01"); 
INSERT INTO immunization VALUES("13","10","33-333333333-3","8:28 AM","3.04","","3","3","9","20","21","Taculing Health Center","CHO - Bacolod","NSVD","Paglaum","Male","Currently in Treatment","Dec","2019","2020-01-01"); 
INSERT INTO immunization VALUES("14","11","83-838389383-8","12:15 AM","2.5","(09) 100306293","2","2","0","27","22","MHC","BCHC","NSVD","Matahum","Female","Currently in Treatment","Dec","2019","2018-01-01"); 
INSERT INTO immunization VALUES("15","35","43-939393939-3","4:45 PM","4.5 kg","(09) 343434343","1","0","0","24","25","CLMMRH","CLMMRH","Normal","Kasilingan","Male","Currently in Treatment","Feb","2020","2020-02-22"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

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
INSERT INTO medical_history VALUES("9","9","38","None","None","None","None","None","None","None"); 
INSERT INTO medical_history VALUES("10","10","38","Epilepsy/Convulsion/Seizure","Shortness of breath and easy fatigability","History of gallbladder disease","Vaginal discharge","Severe varicosities","Yellowish Skin","Anemia"); 
INSERT INTO medical_history VALUES("11","11","42","Severe Headache/dizziness","None","None","None","None","Yellowish Skin","Bleeding tendencies (nose, gums, etc.)"); 
INSERT INTO medical_history VALUES("12","12","42","Epilepsy/Convulsion/Seizure","Severe chest pain","Mass in the abdomen","Mass in the uterus","Severe varicosities","None","Bleeding tendencies (nose, gums, etc.)"); 
INSERT INTO medical_history VALUES("13","13","105","None","None","None","Mass in the uterus","None","None","Drug Intake (anti-tuberculosis,
                                                                            anti-diabetic,
                                                                            anticonvulsant)"); 
INSERT INTO medical_history VALUES("14","14","105","None","None","None","","None","None","Bleeding tendencies (nose, gums, etc.)"); 
INSERT INTO medical_history VALUES("15","16","105","None","Severe chest pain","Mass in the abdomen","Mass in the uterus","Severe varicosities","None","Anemia"); 
INSERT INTO medical_history VALUES("16","15","105","None","None","None","None","None","None","None"); 
INSERT INTO medical_history VALUES("17","20","72","None","None","None","None","None","None","None"); 
INSERT INTO medical_history VALUES("18","21","54","Epilepsy/Convulsion/Seizure","None","None","Mass in the uterus","None","None","None"); 
INSERT INTO medical_history VALUES("19","22","54","None","None","None","None","None","None","Allergies"); 
INSERT INTO medical_history VALUES("20","23","24","None","Severe chest pain, Shortness of breath and easy fatigability, Breast/axillary masses","Mass in the abdomen, History of gallbladder disease, History of liver disease","Vaginal discharge, Postcoital bleeding","Severe varicosities","None","Anemia"); 
INSERT INTO medical_history VALUES("21","24","24","Epilepsy/Convulsion/Seizure","Severe chest pain","History of gallbladder disease","None","None","None","None"); 
INSERT INTO medical_history VALUES("22","25","10","None","Severe chest pain","None","Mass in the uterus","None","None","Anemia, Diabetes"); 
INSERT INTO medical_history VALUES("23","26","10","None","None","None","Vaginal discharge, Intermenstrual bleeding, Postcoital bleeding","Severe varicosities, Swelling or severe pain in the legs not
                                                                            related to
                                                                            injuries","Yellowish Skin","Anemia"); 
INSERT INTO medical_history VALUES("24","27","82","None","None","None","None","None","None","None"); 
INSERT INTO medical_history VALUES("25","28","44","None","Shortness of breath and easy fatigability, Breast/axillary masses, Nipple discharges (specify if blood or pus), Systolic of 140 & above, Diastolic of 90 & above","Mass in the abdomen","None","Severe varicosities","None","Bleeding tendencies (nose, gums, etc.)"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

INSERT INTO medication_dispensation VALUES("49","5","19","TB Medicine","2020-02-08","1:27 pm","Feb","2020","4","February 8, 2020 1:27 pm"); 
INSERT INTO medication_dispensation VALUES("50","7","19","TB Medicine","2020-02-08","2:12 pm","Feb","2020","20","February 8, 2020 2:12 pm"); 
INSERT INTO medication_dispensation VALUES("51","9","6","TB Medicine","2020-02-08","2:13 pm","Feb","2020","15","February 8, 2020 2:13 pm"); 
INSERT INTO medication_dispensation VALUES("52","5","9","Consultation","2020-02-20","1:31 pm","Feb","2020","5","February 20, 2020 1:31 pm"); 
INSERT INTO medication_dispensation VALUES("53","10","3","Consultation","2020-02-22","3:53 pm","Feb","2020","4","February 22, 2020 3:53 pm"); 
INSERT INTO medication_dispensation VALUES("54","44","9","Consultation","2020-02-22","3:58 pm","Feb","2020","2","February 22, 2020 3:58 pm"); 
INSERT INTO medication_dispensation VALUES("55","44","2","Consultation","2020-02-22","3:59 pm","Feb","2020","2","February 22, 2020 3:59 pm"); 
INSERT INTO medication_dispensation VALUES("56","112","20","Consultation","2020-02-22","3:59 pm","Feb","2020","5","February 22, 2020 3:59 pm"); 
INSERT INTO medication_dispensation VALUES("57","112","9","Consultation","2020-02-22","4:00 pm","Feb","2020","5","February 22, 2020 4:00 pm"); 
INSERT INTO medication_dispensation VALUES("58","112","9","Consultation","2020-02-22","4:00 pm","Feb","2020","5","February 22, 2020 4:00 pm"); 
INSERT INTO medication_dispensation VALUES("59","111","20","Consultation","2020-02-22","4:02 pm","Feb","2020","4","February 22, 2020 4:02 pm"); 
INSERT INTO medication_dispensation VALUES("60","97","9","Consultation","2020-02-22","4:03 pm","Feb","2020","5","February 22, 2020 4:03 pm"); 
INSERT INTO medication_dispensation VALUES("61","97","20","Consultation","2020-02-22","4:04 pm","Feb","2020","4","February 22, 2020 4:04 pm"); 
INSERT INTO medication_dispensation VALUES("62","45","3","Consultation","2020-02-22","4:05 pm","Feb","2020","5","February 22, 2020 4:05 pm"); 
INSERT INTO medication_dispensation VALUES("63","43","3","Consultation","2020-02-22","4:06 pm","Feb","2020","9","February 22, 2020 4:06 pm"); 
INSERT INTO medication_dispensation VALUES("64","43","9","Consultation","2020-02-22","4:09 pm","Feb","2020","12","February 22, 2020 4:09 pm"); 
INSERT INTO medication_dispensation VALUES("65","42","9","Consultation","2020-02-22","4:10 pm","Feb","2020","15","February 22, 2020 4:10 pm"); 
INSERT INTO medication_dispensation VALUES("66","41","9","Consultation","2020-02-22","4:11 pm","Feb","2020","6","February 22, 2020 4:11 pm"); 
INSERT INTO medication_dispensation VALUES("67","40","5","TB Medicine","2020-02-22","4:12 pm","Feb","2020","4","February 22, 2020 4:12 pm"); 
INSERT INTO medication_dispensation VALUES("68","40","9","Consultation","2020-02-22","4:13 pm","Feb","2020","4","February 22, 2020 4:13 pm"); 
INSERT INTO medication_dispensation VALUES("69","39","20","Consultation","2020-02-22","4:14 pm","Feb","2020","2","February 22, 2020 4:14 pm"); 
INSERT INTO medication_dispensation VALUES("70","38","5","TB Medicine","2020-02-22","4:15 pm","Feb","2020","4","February 22, 2020 4:15 pm"); 
INSERT INTO medication_dispensation VALUES("71","37","20","Consultation","2020-02-22","4:16 pm","Feb","2020","3","February 22, 2020 4:16 pm"); 
INSERT INTO medication_dispensation VALUES("72","37","10","Consultation","2020-02-22","4:17 pm","Feb","2020","5","February 22, 2020 4:17 pm"); 
INSERT INTO medication_dispensation VALUES("73","30","15","TB Medicine","2020-02-22","4:17 pm","Feb","2020","8","February 22, 2020 4:17 pm"); 
INSERT INTO medication_dispensation VALUES("74","29","9","Consultation","2020-02-22","4:19 pm","Feb","2020","9","February 22, 2020 4:19 pm"); 
INSERT INTO medication_dispensation VALUES("75","27","9","Consultation","2020-02-22","4:20 pm","Feb","2020","6","February 22, 2020 4:20 pm"); 
INSERT INTO medication_dispensation VALUES("76","26","3","Consultation","2020-02-22","4:21 pm","Feb","2020","6","February 22, 2020 4:21 pm"); 
INSERT INTO medication_dispensation VALUES("77","25","3","Consultation","2020-02-22","4:22 pm","Feb","2020","2","February 22, 2020 4:22 pm"); 
INSERT INTO medication_dispensation VALUES("78","24","4","TB Medicine","2020-02-22","4:22 pm","Feb","2020","6","February 22, 2020 4:22 pm"); 
INSERT INTO medication_dispensation VALUES("79","22","3","Consultation","2020-02-22","4:23 pm","Feb","2020","4","February 22, 2020 4:23 pm"); 
INSERT INTO medication_dispensation VALUES("80","17","9","Consultation","2020-02-22","4:24 pm","Feb","2020","4","February 22, 2020 4:24 pm"); 
INSERT INTO medication_dispensation VALUES("81","15","10","Consultation","2020-02-22","4:25 pm","Feb","2020","12","February 22, 2020 4:25 pm"); 
INSERT INTO medication_dispensation VALUES("82","14","2","Consultation","2020-02-22","4:26 pm","Feb","2020","5","February 22, 2020 4:26 pm"); 
INSERT INTO medication_dispensation VALUES("83","10","6","TB Medicine","2020-02-22","4:29 pm","Feb","2020","3","February 22, 2020 4:29 pm"); 
INSERT INTO medication_dispensation VALUES("84","10","3","Consultation","2020-02-22","4:29 pm","Feb","2020","4","February 22, 2020 4:29 pm"); 
INSERT INTO medication_dispensation VALUES("85","6","13","Select","2020-02-22","4:31 pm","Feb","2020","15","February 22, 2020 4:31 pm"); 
INSERT INTO medication_dispensation VALUES("86","4","9","Consultation","2020-02-22","4:31 pm","Feb","2020","4","February 22, 2020 4:31 pm"); 



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

INSERT INTO medicine VALUES("2","Ambroxol","Tablet","Cough Preparation","27","August 11, 2019 11:42 pm"); 
INSERT INTO medicine VALUES("3","Cefalexin 250 ","Tablet","Antibiotic","27","August 11, 2019 11:44 pm"); 
INSERT INTO medicine VALUES("4","Rifampicin 150 mg","Tablet","Anti-TB Drugs","11","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("5","Isoniazid","Tablet","Anti-TB Drugs","21","September 23, 2019 - 5:30 pm"); 
INSERT INTO medicine VALUES("6","Rifapentine","Tablet","Anti-TB Drugs","22","September 27, 2019 - 1:47 am"); 
INSERT INTO medicine VALUES("9","Biogesic","Tablet","Antipyretic","28","October 25, 2019 - 2:14 am"); 
INSERT INTO medicine VALUES("10","Cecon 500 mg","Tablet","Vitamins","33","November 17, 2019 - 12:42 pm"); 
INSERT INTO medicine VALUES("13","Rifampicin + isoniazid","Tablet","Anti-TB Drugs","5","November 27, 2019 - 2:49 pm"); 
INSERT INTO medicine VALUES("15","Rifampicin + isoniazid + Pyrazinamide + Ethambutol","Tablet","Anti-TB Drugs","17","November 27, 2019 - 2:50 pm"); 
INSERT INTO medicine VALUES("16","Calcium Carbonate (Calcimate)","Tablet","Antibiotic","25","November 27, 2019 - 2:51 pm"); 
INSERT INTO medicine VALUES("17","Ferrous Sulphate + Folic Acid","Tablet","Vitamins","20","November 27, 2019 - 2:54 pm"); 
INSERT INTO medicine VALUES("18","Vitamin B Complex","Tablet","Vitamins","20","December 3, 2019 - 11:38 pm"); 
INSERT INTO medicine VALUES("19","Celecoxib 200 mg","Capsule","Analgesic","31","December 3, 2019 - 11:42 pm"); 
INSERT INTO medicine VALUES("20","Levoceterizine","Tablet","Antihistamine","27","February 22, 2020 - 1:13 am"); 



DROP TABLE medicine_stocks;

CREATE TABLE `medicine_stocks` (
  `medicine_stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medicine_id` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`medicine_stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

INSERT INTO medicine_stocks VALUES("100","19","20","2020-02-08 1:22 pm"); 
INSERT INTO medicine_stocks VALUES("101","13","20","2020-02-08 1:51 pm"); 
INSERT INTO medicine_stocks VALUES("102","19","20","2020-02-08 2:13 pm"); 
INSERT INTO medicine_stocks VALUES("103","6","20","2020-02-08 2:14 pm"); 
INSERT INTO medicine_stocks VALUES("104","5","20","2020-02-20 1:31 pm"); 
INSERT INTO medicine_stocks VALUES("105","20","25","2020-02-22 1:13 am"); 
INSERT INTO medicine_stocks VALUES("106","20","20","2020-02-22 4:07 pm"); 
INSERT INTO medicine_stocks VALUES("107","9","40","2020-02-22 4:07 pm"); 
INSERT INTO medicine_stocks VALUES("108","10","30","2020-02-22 4:18 pm"); 
INSERT INTO medicine_stocks VALUES("109","9","40","2020-02-22 4:18 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

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
INSERT INTO obstetrical_history VALUES("9","9","38","1","0","0","0","1","2019-06-19 ","normal ","2017","2018","none","None"); 
INSERT INTO obstetrical_history VALUES("10","10","38","1","0","0","0","1","2019-12-11 ","normal ","2018","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("11","11","42","1","0","0","0","0","2019-12-03 ","normal ","2019","2019","1 hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("12","12","42","1","0","0","0","0","2019-04-10 ","normal ","2019","2019","none","None"); 
INSERT INTO obstetrical_history VALUES("13","13","105","1","0","0","0","1","2019-12-10 ","normal ","2019","2019","1","None"); 
INSERT INTO obstetrical_history VALUES("14","14","105","0","0","0","0","0","2020-01-14 ","normal ","2019","2019","1","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("15","16","105","1","1","1","0","1","2019-02-25 ","normal ","2019","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("16","15","105","0","0","0","0","0","2019-06-10 ","normal ","2019","2019","1","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("17","20","72","1","0","0","0","0","2018-03-14 ","normal ","2018","2019","1 hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("18","21","54","1","0","0","0","1","2020-01-14 ","normal ","2019","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("19","22","54","1","0","0","0","0","2020-01-13 ","normal ","2019","2019","1","None"); 
INSERT INTO obstetrical_history VALUES("20","23","24","1","0","0","0","3","2019-12-12 ","normal ","3","3","3","Ectopetic pregnancy"); 
INSERT INTO obstetrical_history VALUES("21","24","24","3","0","0","0","3","2019-09-01 ","normal ","2019","2019","1 hour","Hydatidiform mole (within the last 12
                                                                    months)"); 
INSERT INTO obstetrical_history VALUES("22","25","10","3","0","0","0","3","1984-06-27 ","normal ","2019","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("23","26","10","3","0","0","0","3","2019-11-03 ","normal ","2019","2019","none","None"); 
INSERT INTO obstetrical_history VALUES("24","27","82","2","0","0","0","2","2013-05-21 ","normal ","2018","2019","1 hour","None"); 
INSERT INTO obstetrical_history VALUES("25","28","44","1","0","0","0","1","2019-10-08 ","normal ","2018","2019","1 hour","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

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
INSERT INTO patient VALUES("39","Jesse Franco Latosa","Single","21","Male","#3 Area 51, Mansilingan","Mabinuligon","1998-08-30","178","178","(09) 061613101","Negros Occidental","Graphic Designer","39-383930030-3","Jesse Latosa","(09) 061613101","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("40","Jose Ignacio Silga","Single","15","Male","#3 Area 45, Mansilingan","Kahirup A","2004-11-11","174","174","(09) 389348348","Negros Occidental","","93-849484894-9","Margaret Silga","(09) 484848383","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("41","Domingo Jose Carlos","Single","9","Male","#3 Pahayan, Mansilingan","Kasilingan","2010-02-23","162","162","(09) 383737387","Negros Occidental","n/a","93-883839939-3","Minda Carlos","(09) 343838388","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("42","Mary Ann Sipat","Married","30","Female","#3 Everlasting, Mansilingan","Mabinuligon","1989-04-19","142","142","(09) 957383434","Negros Occidental","Sales Lady","39-038438493-4","Juanito Sipat","(09) 584336343","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("43","Audrey Faith Villasis","Single","21","Female","Blk 2, l 21, Bangga patuo sa ika apat , Mansilingan","Katilingban","1998-04-27","119","119","(09) 088964402","Bacolod","Admitting Staff","49-215552921-2","Daniel Andrew Go","(09) 088964402","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("44","Katherine Jalandoni","Married","20","Female","72, 23,66, Mansilingan","Himaya","2000-02-03","108","108","(09) 482735591","Bacolod","Student","10-295188205-0","Jason Jalandoni","(09) 182754201","Active","Apr","2020","2020-04-23"); 
INSERT INTO patient VALUES("45","Jerhod Kyan Ricabo","Single","21","Male","#3 Everlasting, Mansilingan","Kahirup B","1998-04-22","176","176","(09) 272343434","Negros Occidental","Driver","30-343834393-4","Mary Ricabo","(09) 347348343","Active","Nov","2020","2020-11-22"); 
INSERT INTO patient VALUES("46","Alvaro Morata","Single","24","Male","#4 Bangga Patyo, Mansilingan","Kahirup A","1995-10-12","170","170","(09) 091101901","Negros Occidental","Programmer","39-343838493-4","Mardy Morata","(09) 873473473","Active","Nov","2020","2020-11-22"); 
INSERT INTO patient VALUES("47","Angelo Garcia","Single","24","Male","#1 Everlasting, Mansilingan","Kahirup B","1995-09-10","165","165","(09) 389343434","Negros Occidental","Driver","39-343848349-3","Bangs Garcia","(09) 343434343","Active","Nov","2020","2020-11-22"); 
INSERT INTO patient VALUES("48","Vince Pomar","Single","23","Male","#3 Everlasting, Mansilingan","Paghidaet","1996-12-12","170","170","(09) 383838389","Negros Occidental","Businessman","83-893903939-0","Marisse Pomar","(09) 347387434","Active","Nov","2020","2020-11-22"); 
INSERT INTO patient VALUES("49","Thomas Salazar","Married","79","Male","#3 bangga tres, Mansilingan","Paghidaet","04-24-1940","170","170","(09) 383483483","Negros Occidental","Driver","39-348394394-9","Mary Salazar","(09) 893939434","Deceased","Nov","2020","2020-11-22"); 
INSERT INTO patient VALUES("50","Sweet Manhuyod","Married","39","Female","none, Mansilingan","Kasilingan","1980-07-16","160","160","(09) 343743743","Negros Occidental","Sales Lady","93-838993939-3","Jan Manhuyod","(09) 343435343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("51","Shane Dy","Single","24","Female","#3 everlasting, Mansilingan","Paglaum","1995-09-12","170","170","(09) 343734734","Negros Occidental","Sales Lady","03-893839493-4","Van Dy","(09) 348348384","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("52","Renz Cui","Single","23","Male","none, Mansilingan","Mabinuligon","1996-07-01","170","170","(09) 343434343","Negros Occidental","Driver","38-930034834-8","Manny Cui","(09) 383883434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("53","Shanky Lizaran","Married","25","Female","block 1 Lot 10, Mansilingan","Katilingban","1995-01-02","178","178","(09) 348738738","Negros Occidental","Street vendor","93-883939393-9","Johnny Lizaran","(09) 334374374","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("54","Michelle Ramos","Single","21","Female","none, Mansilingan","Kabugwason","1998-03-18","170","170","(09) 374387387","Negros Occidental","Student","93-838384384-8","Mike Ramos","(09) 343434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("55","Precious De Guzman","Married","26","Female","#3 Everlasting, Mansilingan","Himaya","1993-09-06","170","170","(09) 373737434","Negros Occidental","Call Center Agent","93-837387383-8","Christian De Guzman","(09) 387438434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("56","Raina Reyes","Married","25","Female","none, Mansilingan","Paglaum","1995-01-23","170","170","(09) 343434343","Negros Occidental","Housewife","38-938383838-3","Jay R Reyes","(09) 343434343","Active","Jul","2020","2020-07-22"); 
INSERT INTO patient VALUES("57","Michelle Gumabao","Married","31","Female","none, Mansilingan","Matahum","1988-06-17","180","180","(09) 434343434","Negros Occidental","Street Vendor","49-333889494-9","Michael Gumabao","(03) 934343434","Active","Jul","2020","2020-07-22"); 
INSERT INTO patient VALUES("58","Kenneth Cayetano","Single","31","Male","n/a, Mansilingan","Kasilingan","1988-06-22","178","178","(09) 343434343","Negros Occidental","Programmer ","98-383838383-8","Ryan Cayetano","(03) 943434343","Active","Jul","2020","2020-07-22"); 
INSERT INTO patient VALUES("59","Kurt Dela Torre","Single","23","Male",", Mansilingan","Gauzon","1996-04-24","170","170","(90) 934343434","Negros Occidental","E-Jeep Driver","94-848748484-8","Moira Dela Torre","(09) 343434343","Active","Jul","2020","2020-07-22"); 
INSERT INTO patient VALUES("60","Justin Jaudines","Single","23","Female","#3 everlasting, Mansilingan","Himaya","1996-04-17","170","170","(09) 232323232","Negros Occidental","Sales Lady","38-938383838-3","Manny Jaudines","(03) 934343434","Active","Jul","2020","2020-07-22"); 
INSERT INTO patient VALUES("61","Kobe Bryant","Married","43","Male",", Mansilingan","Paghidaet","1976-08-21","180","180","(09) 343434343","Negros Occidental","Driver","83-873738383-8","Josefa Bryant","(09) 343434343","Active","Oct","2020","2020-10-11"); 
INSERT INTO patient VALUES("62","Nikka Clarito","Married","28","Female",", Mansilingan","Mabinuligon","1991-08-14","160","160","(09) 343434343","Negros Occidental","Teacher","83-838383838-3","John Artem Aguillon","(09) 343434343","Active","Oct","2020","2020-10-11"); 
INSERT INTO patient VALUES("63","John Artem Aguillon","Married","28","Male",", Mansilingan","Paghidaet","1991-08-29","178","178","(09) 343434343","Negros Occidental","Lawyer","89-383838938-3","Nikka Clarito","(09) 343434343","Active","Oct","2020","2020-10-11"); 
INSERT INTO patient VALUES("64","Justin Diana","Single","22","Female",", Mansilingan","Katilingban","1997-06-18","170","170","(09) 343434343","Negros Occidental","Student","93-838383838-3","John Wick","(09) 343434343","Active","Oct","2020","2020-10-11"); 
INSERT INTO patient VALUES("65","Keith Peterson Sacayle","Single","22","Male","Bangga patyo, Mansilingan","Kahirup A","1997-06-12","178","178","(09) 343434343","Negros Occidental","Driver","93-939383838-3","Michael Sacayle","(09) 343434343","Active","Oct","2020","2020-10-11"); 
INSERT INTO patient VALUES("66","Michael Callejas","Married","23","Male",", Mansilingan","Paghidaet","1996-04-24","179","179","(09) 343434343","Negros Occidental","Salesman","93-833838938-3","Ryan Callejas","(09) 343434343","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("67","Dyniel Keith Catalu?a","Single","20","Male",", Mansilingan","Matahum","1999-08-11","160","160","(09) 343434343","Negros Occidental","Programmer","03-938884848-4","Mena Catalu?a","(09) 343434343","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("68","Gaebriel Ditchon","Single","20","Male",", Mansilingan","Mabinuligon","1999-08-20","170","170","(09) 373738383","Negros Occidental","Salesman","89-383838393-8","Gabriel Ditchon","(09) 343434343","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("69","Elmer Haro","Married","54","Male","bangga patyo, Mansilingan","Paghidaet","1965-05-17","179","179","(09) 343434343","Negros Occidental","Teacher","49-483839393-9","Jimmy Haro","(03) 934343434","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("70","Tisha Lyn Sugar Barco","Single","23","Female","bangga 3, Mansilingan","Paghidaet","1996-04-16","178","178","(09) 483838388","Negros Occidental","Sales Lady","38-938738438-3","Jm Barco","(03) 934343434","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("71","Francine Caballero","Single","16","Female","bangga, Mansilingan","Kabugwason","2003-07-29","178","178","(09) 343434343","Negros Occidental","Student","38-383873838-3","Rodel Caballero","(03) 933434343","Active","Aug","2020","2020-08-23"); 
INSERT INTO patient VALUES("72","May Gudio","Single","16","Female",", Mansilingan","Kasilingan","2003-06-10","178","178","(09) 343434343","Negros Occidental","Student","38-939383838-3","Mike Gudio","(09) 334343434","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("73","Grechelle Faelmarin","Single","16","Female",", Mansilingan","Paglaum","2003-09-12","178","178","(09) 343434343","Negros Occidental","Student","38-983838389-3","Michael Faelmarin","(03) 943434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("74","Bon Jovi","Married","46","Male","#3 Everlasting, Mansilingan","Gauzon","1973-04-14","278","278","(09) 343434343","Negros Occidental","HRM","93-838738383-8","Margaret Len","(09) 343434343","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("75","Blessyl Garlan","Single","21","Female","tumpok st, Mansilingan","Kahirup A","1998-07-20","178","178","(21) 412412412","Negros Occidental","technical support","31-231231231-2","carla garlan","(12) 312312312","Active","Feb","2020","2020-02-22"); 
INSERT INTO patient VALUES("76","Alyanna Marie Esada","Single","21","Female","felisa st, Mansilingan","Paglaum","1998-06-18","178","178","(12) 312312312","Bacolod","sales marketing assistant","31-231231231-2","lorna esada","(21) 312312312","Active","Dec","2020","2020-12-22"); 
INSERT INTO patient VALUES("77","Katrine Baldonado","Single","21","Female","NGO, Mansilingan","Kahirup B","1998-06-04","176","176","(12) 312312312","Bacolod","Teacher","12-312321312-3","annie baldonado","(21) 312312312","Active","Dec","2020","2020-12-22"); 
INSERT INTO patient VALUES("78","Lara Mae Banate","Married","21","Female","was ag st, Mansilingan","Kahirup B","1999-02-03","162","162","(12) 132131231","Bacolod","sales head","12-313123123-1","Carl Banate","(21) 312312321","Active","Dec","2020","2020-12-22"); 
INSERT INTO patient VALUES("79","Kyla Estrada","Single","8","Female","sesami st, Mansilingan","Kahirup B","2011-03-01","175","175","(12) 312312312","Bacolod City","actress","12-312312321-3","Daniel Estrada","(12) 314513421","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("80","John Go","Married","23","Male","1st st, Mansilingan","Kahirup A","1996-04-03","192","192","(12) 312312312","Negros Occidental","Sales Boy","12-312312312-3","Denise Go","(12) 312312312","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("81","Denise Go","Married","23","Female","2nd st, Mansilingan","Kasilingan","1996-04-09","178","178","(12) 312312313","Negros Occidental","Sales Lady","21-312313123-1","John Go","(12) 312312312","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("82","Jesse Bel","Married","23","Female","Sea St, Mansilingan","Kahirup B","1996-05-18","198","198","(12) 312312312","Negros Island Region","Swimmer","12-312312321-4","Dogong Bel","(12) 312412421","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("83","Gammy Ber ","Single","22","Male","7th St, Mansilingan","Kabugwason","1997-03-22","192","192","(21) 451251251","Negros Occidental","factory Worker","12-314124124-1","Ganny Ber","(41) 241212412","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("84","Angelica Yap","Single","21","Female","Vlog st, Mansilingan","Paghidaet","1998-06-24","182","182","(12) 312312312","Negros Occidental","Vlogger","12-312312441-4","James Yap","(24) 214214141","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("85","Wendell Jadulos","Single","21","Male","villamaria st, Mansilingan","Kasilingan","1998-06-17","181","181","(12) 512412431","Negros Occidental","Call Center Agent","12-312412412-4","Sheila Jadulos","(12) 412412412","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("86","Jordan Metran","Single","21","Male","matahum st, Mansilingan","Matahum","1998-06-26","175","175","(12) 312312312","Negros Occidental ","Sales Boy","12-412124124-2","Minda Metran","(21) 414124124","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("87","Joshua Aguilar","Married","24","Male","mahuyumun st, Mansilingan","Matahum","1995-06-15","198","198","(12) 314124124","Bacolod City","Sales agent","12-312412412-4","Emelia Aguilar","(12) 521512512","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("88","James Cerdan","Single","24","Male","zone street, Mansilingan","Kahirup B","1995-10-05","178","178","(12) 312412412","Bacolod City","sales agent","12-421412512-5","Ana Cerdan","(21) 412563242","Active","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("89","Melton Dairo","Single","23","Male","kawayanan st, Mansilingan","Paghidaet","1996-08-23","199","199","(12) 312512521","Bacolod City","Sales Agent","12-415125312-3","Ramelo Dairo","(12) 414125124","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("90","Prince Kenneth Jadulos","Single","22","Male","villia maria, Mansilingan","Kahirup B","1997-07-04","189","189","(12) 314512414","Bacolod City","Sales Agent","52-161414121-2","Wendell Jadulos","(12) 451251243","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("91","Frank Borongan","Single","22","Male","5th st, Mansilingan","Paghidaet","1997-07-16","165","165","(12) 451241241","Bacolod City","Driver","14-512412312-3","Carlito Borongan","(21) 412412412","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("92","Rachel Labrador","Single","22","Female","sesami st, Mansilingan","Kahirup B","1997-10-16","189","189","(12) 312312312","Bacolod City","Graphic Designer","12-214124124-2","Dodong Labrador","(12) 412412412","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("93","Johnly Sapalaran","Married","21","male","camella St, Mansilingan","Kahirup B","1998-04-02","178","178","(12) 312421312","Bacolod City","Waiter","12-412581273-8","King Sapalaran","(23) 521312312","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("94","Parisha Joy Legaspi","Single","21","Female","Phase 3 st, Mansilingan","Paghidaet","1998-04-16","169","169","(12) 312412412","Bacolod City","Architect ","14-124124124-1","Anna Legaspi","(12) 512412412","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("95","Ana Mae Jadulos","Single","20","Female","sesami st, Mansilingan","Kahirup B","1999-03-05","178","178","(12) 412421412","Bacolod City","Business Entrepreneur ","21-421412412-4","Prince Jadulos","(21) 341231235","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("96","Archie Barrios","Single","20","Male","phase 4 st, Mansilingan","Gauzon","1999-03-18","176","176","(21) 312312312","Bacolod City","Technician","21-412412412-4","Marie Barrios","(14) 124124124","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("97","Erika Baja","Single","20","Female","st zone , Mansilingan","Paghidaet","1999-03-25","169","169","(12) 415124124","Bacolod City","OFW ","12-451251312-3","Mark Baja","(12) 412412412","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("98","Tricia Yee","Single","20","Female","himaya st, Mansilingan","Kabugwason","1999-06-08","156","156","(12) 215213123","Bacolod City","OFW ","21-412312123-1","Terry Yee","(12) 412312312","Active","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("99","John Valencia","Widowed","19","Male","widow st, Mansilingan","Paghidaet","2000-03-21","199","199","(21) 412412412","Bacolod","","22-141241241-2","Rj Valencia","(51) 252151252","Active","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("100","Tj Torre","Single","18","Male","9th st, Mansilingan","Paglaum","2002-01-16","189","189","(21) 312342141","Bacolod City","Game Developer","14-124121241-2","Rj Torre","(12) 415123123","Active","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("101","Reysa Servando","Married","18","Female","5th st, Mansilingan","Matahum","2002-01-12","160","160","(15) 124121241","Bacolod City","Vendor","21-412412412-4","Eva Servando","(12) 412412434","Active","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("102","Lovely Lee","Single","18","Female","Unlove st, Mansilingan","Kahirup A","2001-04-03","188","188","(12) 312312312","Bacolod City","Nurse","21-412412412-4","Jet Lee","(12) 421312321","Active","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("103","Nina  Uy","Single","9","Female","3rd st, Mansilingan","Kahirup B","2010-04-06","189","189","(21) 412412512","Bacolod City","Fish Vendor","12-421412412-4","Malou Uy","(12) 351241241","Active","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("104","Kate Tee","Single","18","Female","6th st, Mansilingan","Paglaum","2002-02-12","190","190","(12) 412412412","Bacolod City","Developer","12-412412412-4","Put Tee","(24) 112412412","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("105","Marjane Xia","Single","25","Female","8th st, Mansilingan","Paglaum","1994-10-19","189","189","(12) 412412412","Bacolod City","Agriculturer","12-424214141-2","Mae Ann Xia","(14) 121241231","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("106","Mae Ann Xia","Married","25","Female","6th st, Mansilingan","Paglaum","1994-10-17","189","189","(12) 512312312","Bacolod City","Street Vendor","12-412312312-3","Marjane Xia","(12) 412313213","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("107","Char Lee","Single","15","Male","8th st, Mansilingan","Paglaum","2004-05-04","167","167","(12) 412214124","Bacolod City","Singer","12-412412414-1","Boo Lee","(23) 131231231","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("108","Julian Denise Sia","Single","15","Female","cadiz st, Mansilingan","Kasilingan","2004-05-06","167","167","(12) 312312321","Negros Occidental","Artist","12-412124124-1","Sherry Endrina","(12) 412314124","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("109","Sherry Endrina","Single","15","Female","35 st, Mansilingan","Paglaum","2004-05-19","176","176","(12) 414144112","Negros Occidental","Artist","12-352131231-3","Julian Denise Sia","(21) 412414124","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("110","Darlene Joy Villajere","Single","9","Female","grand st, Mansilingan","Kahirup B","2010-04-10","178","178","(12) 412412412","Negros Occidental","singer","12-312381246-7","Darlo Villajere","(12) 412412412","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("111","Darla Villa","Married","11","Female","semasimi st, Mansilingan","Kasilingan","2009-02-03","165","165","(12) 412412412","Negros Occidental","Actress","41-241241241-2","Carla Villa","(21) 412412412","Active","Mar","2020","2020-03-23"); 
INSERT INTO patient VALUES("112","James Reid","Single","11","Male","way forever st, Mansilingan","Kasilingan","2009-01-20","167","167","(12) 412412412","Negros Occidental ","E-Jeep Driver","52-342352352-3","Nadine Lustre","(12) 431452151","Active","Mar","2020","2020-03-22"); 
INSERT INTO patient VALUES("113","Nadine Lustre","Single","18","Female","road st, Mansilingan","Kahirup A","2002-01-07","189","189","(21) 451231231","Negros Occidental","Barker","21-412412441-2","James Reid","(12) 423523252","Active","Mar","2020","2020-03-22"); 
INSERT INTO patient VALUES("114","Josefa Escobar","Widowed","74","Female","bangga likoan, Mansilingan","Kahirup B","1945-06-27","160","160","(09) 433434343","Negros Occidental","none","90-383838383-8","Mary Lim","(09) 343434343","Deceased","Sep","2020","2020-09-22"); 
INSERT INTO patient VALUES("115","Romina Velasco","Married","74","Female",", Mansilingan","Gauzon","1945-06-13","160","160","(09) 343434343","Negros Occidental","none","39-383873883-3","Vilma Velasco","(09) 343445354","Deceased","Sep","2020","2020-09-22"); 
INSERT INTO patient VALUES("116","Veronica Wanita","Widowed","76","Female","bangga patyo, Mansilingan","Paghidaet","1943-03-11","170","170","(09) 347347347","Negros Occidental","none","93-837383838-3","Vilma Togonon","(09) 343434343","Deceased","Sep","2020","2020-09-22"); 
INSERT INTO patient VALUES("117","Solicidad Birtuso","Married","85","Female","banga patyo, Mansilingan","Kasilingan","1934-06-08","160","160","(09) 343434343","Negros Occidental","none","33-939393993-9","Valentine Birtuso","(09) 454545454","Deceased","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("118","Bimbol Roco","Married","85","Male","#3, Mansilingan","Matahum","1934-06-19","176","176","(09) 343483883","Negros Occidental","none","39-393839939-3","Ricci Roco","(09) 343434343","Deceased","Jan","2020","2020-01-22"); 
INSERT INTO patient VALUES("119","Rodrigo Roa","Single","85","Male",", Mansilingan","Kasilingan","1934-05-15","170","170","(09) 343434343","Negros Occidental","none","39-383743848-3","Jon Roa","(09) 334333434","Deceased","Mar","2020","2020-03-22"); 
INSERT INTO patient VALUES("120","Manny Sergio","Married","80","Male","bangga, Mansilingan","Paglaum","1939-03-31","170","170","(09) 343388833","Negros Occidental","none","39-383888383-8","Marry Estafe","(09) 343434343","Deceased","May","2020","2020-05-22"); 
INSERT INTO patient VALUES("121","Alexandro Ponterafo","Single","65","Male","bangga pwertahan, Mansilingan","Katilingban","1954-04-21","170","170","(09) 343483483","Negros Occidental","none","90-383893838-3","Michael Dixon","(09) 343434334","Deceased","Jun","2020","2020-06-22"); 
INSERT INTO patient VALUES("122","Pontifico Magno","Single","65","Male","bangga pwertahan, Mansilingan","Katilingban","1954-04-21","170","170","(09) 343483483","Negros Occidental","none","90-383893838-3","Michael Dixon","(09) 343434334","Deceased","Jul","2020","2020-07-11"); 
INSERT INTO patient VALUES("123","Marcelo Mardonome","Single","91","Male","bangga pwertahan, Mansilingan","Katilingban","1928-04-21","170","170","(09) 343483483","Negros Occidental","none","90-383893838-3","Michael Dixon","(09) 343434334","Deceased","May","2020","2020-05-11"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO patient_child VALUES("3","Hilary Ahmor Sipat","Female","Mary Ann Sipat","High School Graduate","BHW","Hilario Dorimon","College Graduate","Sr. Salesman","06/01/2007","06/01/2007","20","CLMMRH","11/29/2005","Kahirup B","#15 Everlasting","Registered Immunization","Nov","2019","2019-11-01"); 
INSERT INTO patient_child VALUES("8","Zemira Anndrey Torrecarion Sabordo","Female","Mae Ann Torrecarion Sabordo","None","None","Renante Hanon Dulce","College","Calibration Technician","11/08/2018","11/08/2018","2.83","CHO","12/12/2018","Kasilingan","Hyacinth I, Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("10","Klyde Parar Ramos","Male","Novelyn Tupas Parar","College","None","Christian Efren Ramos","High School","Driver","07/24/2019","07/24/2019","3.04","CHO","08/14/2019","Paglaum","n/a, Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("11","Leanne Mandolado Tacdoro","Female","Roxanne Jabonete Mandolado","College","None","Lester John Gelito Tacdoro","College","Factory Worker","09/03/2019","09/03/2019","2.5","MHC","12/19/2019","Matahum","Cottage Rd., Mansilingan","Registered Immunization","Dec","2019","2019-12-01"); 
INSERT INTO patient_child VALUES("12","Freya Allan","Female","asdf","afa","dfdf","sdfd","dfsd","adfdasf","2020-01-15","January 07, 2020","22","zdfd","2020-01-13","Kahirup B","dfadf, Mansilingan","Registered","Jan","2020","2020-01-01"); 
INSERT INTO patient_child VALUES("16","Andrea Brillantes","Female","Andrea","Elementary Grad","OFW","Brillantes","Highschool Grad","House Husband","2020-02-04","2020-01-13","3 ","Riverside","2020-02-01","Gauzon","b7, l23, Mansilingan","Registered","Jul","2020","2020-07-11"); 
INSERT INTO patient_child VALUES("17","Ugandan Knuckles","Male","Pinkie Sanchez","College Grad","CPA","Leeroy Jenkins","College Grad","CPA","2020-02-06","2019-12-09","3.5","Sanitarium","2020-01-14","Kasilingan","Sa ikatatlo nga banga sa likod, Mansilingan","Registered","Jul","2020","2020-07-11"); 
INSERT INTO patient_child VALUES("18","Winston Churchil","Male","Siquenta","Elementary","Tindera","Freiter","College","CPA","2020-02-11","2020-01-08","3","Riverside","2020-02-06","Gauzon","B7, Mansilingan","Registered","Jun","2020","2020-06-24"); 
INSERT INTO patient_child VALUES("19","Daniel Alba","Male","Daniella","College","Chef","Albay","Doctorate","Programmer","2020-02-13","2020-01-01","2","Provincial Hospital","2020-02-12","Gauzon","NA, Mansilingan","Registered","Jun","2020","2020-06-24"); 
INSERT INTO patient_child VALUES("20","Jane Madein","Female","Dinisia Madein","Elementary","OFW","Offeinda ","College Grad","Seaman","2020-01-29","2020-02-03","12","Doctor\'s Hospital","2020-02-18","Himaya","NA, Mansilingan","Registered","Jun","2020","2020-06-24"); 
INSERT INTO patient_child VALUES("21","Heather Firn","Female","Lazada","Highschool","Vendor","Shoppee","Highschool","Vendor","2020-01-02","2019-12-13","4","Doctor\'s Hospital","2020-02-04","Himaya","NA, Mansilingan","Registered","Jan","2020","2020-01-22"); 
INSERT INTO patient_child VALUES("22","Cheena","Female","Manuela","College Grad","OFW","Romar","College Grad","OFW","2020-02-19","2019-12-03","2","Riverside","2020-01-06","Kahirup A","NA, Mansilingan","Registered","Jan","2020","2020-01-22"); 
INSERT INTO patient_child VALUES("23","Leonard Santonio","Male","Neena","None","Housewife","Senior Leonard","None","Jeep Driver","2020-02-05","2019-10-23","5","House","2020-01-07","Matahum","NA, Mansilingan","Registered","Feb","2020","2020-02-22"); 
INSERT INTO patient_child VALUES("24","Janelle Salvarino","Female","Jane Salvarino","College Grad","Car Broker","Someniba Salvarino","College Grad","Sea man","2020-02-04","2019-12-18","3","Sanitarium","2020-01-16","Kasilingan","B3, Mansilingan","Registered","May","2020","2020-05-22"); 
INSERT INTO patient_child VALUES("25","Yuppie Neo","Male","Marrona Fiva","College Grad","Military Informant","Yuppito Neo","College Grad","Military Informant","2020-02-13","2019-12-08","3","Riverside","2020-01-21","Matahum","B24, Mansilingan","Registered","May","2020","2020-05-22"); 
INSERT INTO patient_child VALUES("26","Faye Granada","Female","Ale Granada","Highschool Grad","OFW","Timothy","College Grad","Engineer","2020-02-05","2019-10-07","2","Doctors Hospital","2020-01-10","Kahirup A","Lasalleville, Mansilingan","Registered","May","2020","2020-05-22"); 
INSERT INTO patient_child VALUES("27","Timothy Marin","Male","Nana Marin","College Grad","Business Woman","Nono Marin","College Grad","Civil Eng","2020-01-15","2019-10-11","4","Provincial Hospital","2020-01-13","Kabugwason","Banga Basta Sa Kilid, Mansilingan","Registered","Feb","2020","2020-02-22"); 
INSERT INTO patient_child VALUES("28","Adhine Daclizon","Female","Freya Aldo","College Grad","OFW","Odin Aldo","College Grad","Viking","2019-06-05","2019-07-02","3","Provincial Hospital","2019-06-05","Himaya","Banga, Mansilingan","Registered","Apr","2020","2020-04-21"); 
INSERT INTO patient_child VALUES("29","Tyrone Caraig","Male","Althi Caraig","Highschool ","OFW","Louther","Highschool ","OFW ","2020-02-05","2020-02-03","2.5","Riverside","2020-02-04","Kahirup A","Banga sa wala, Mansilingan","Registered","Apr","2020","2020-04-21"); 
INSERT INTO patient_child VALUES("30","Alethea Pampora","Female","Althea Espanola","College Grad","College Prof","Letho Pampora","COllege Grad","Pastor","2020-02-07","2020-02-06","3","Riverside ","2020-02-10","Himaya","sa kilid sang pandesalan, Mansilingan","Registered","Apr","2020","2020-04-21"); 
INSERT INTO patient_child VALUES("31","Fareyt Ondar","Male","Fareyt ","Elementary ","Housewife","Fondar","Elementary","OFW","2020-02-14","2020-02-14","3","Doctor\'s Hospital","2020-02-19","Kahirup A","Banga Pepsi, Mansilingan","Registered","Mar","2020","2020-03-32"); 
INSERT INTO patient_child VALUES("32","Ken Calvo","Select","Kennie","Elementary","Bantay ","Calvo","High School","Sea Man","2020-02-06","2019-12-23","2","Riverside","2020-02-10","Kabugwason","NA, Mansilingan","Registered","Mar","2020","2020-03-32"); 
INSERT INTO patient_child VALUES("33","Ryan Delarmente","Male","Geraldhine","College Grad","OFW","Andrew Go","College Grad","Pilot","2020-02-06","2020-02-03","2.45","Provincial Hospital","2020-02-19","Kabugwason","Block 5, Mansilingan","Registered","Mar","2020","2020-03-32"); 
INSERT INTO patient_child VALUES("34","Andre Garganza","Male","Area ","Highschool ","OFW","Ragantua","College","OFW","2020-02-07","2020-02-11","3.1","Riverside","2020-01-27","Kabugwason","Banga Benilde, Mansilingan","Registered","Feb","2020","2020-02-22"); 
INSERT INTO patient_child VALUES("35","Ricardo Barcelona","Male","Loraine Barcelona","College","Bank Teller","Rango Barcelona","College","Bank Teller","2020-02-13","2020-02-05","4.8","Riverside","2020-02-11","Kasilingan","Banga Lasalleville, Mansilingan","Registered Immunization","Feb","2020","2020-02-22"); 
INSERT INTO patient_child VALUES("36","Nikki Gulapa","Female","Jenny Gulapa","College","Sales Lady","Dante Gulapa","College","Programmer","2020-04-14","2020-04-13","4","CLMMRH","2020-02-29","Himaya","bangga patyo, Mansilingan","Registered","Aug","2020","2020-08-26"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO pelvic_examination VALUES("1","1","4","Warts","Bartholin cyst","Discharge","Soft","Anteflexed","Small","Yes","3","Mass"); 
INSERT INTO pelvic_examination VALUES("2","2","9","Warts","Congested","Erosion","Firm","Anteflexed","Normal","Yes","10","Mass"); 
INSERT INTO pelvic_examination VALUES("3","3","20","Warts","Bartholin cyst","Discharge","Soft","Mid","Normal","None","13","Mass"); 
INSERT INTO pelvic_examination VALUES("4","4","19","Warts","Warts","Erosion","Firm","Mid","None","None","12","None"); 
INSERT INTO pelvic_examination VALUES("5","5","20","Scars","Congested","None","None","Mid","Normal","None","5","None"); 
INSERT INTO pelvic_examination VALUES("6","8","20","None","None","None","None","None","Normal","Yes","13","None"); 
INSERT INTO pelvic_examination VALUES("7","7","20","Scars","None","None","None","None","None","None","10","None"); 
INSERT INTO pelvic_examination VALUES("8","6","20","Scars","None","None","None","None","None","None","5","None"); 
INSERT INTO pelvic_examination VALUES("9","9","38","None","","None","None","None","Normal","None","5","None"); 
INSERT INTO pelvic_examination VALUES("10","10","38","None","None","None","None","None","None","None","5","None"); 
INSERT INTO pelvic_examination VALUES("11","11","42","None","None","None","None","None","Small","Yes","4","None"); 
INSERT INTO pelvic_examination VALUES("12","12","42","Warts","Congested","None","Firm","None","Normal","None","5","None"); 
INSERT INTO pelvic_examination VALUES("13","13","105","Scars","Congested","None","Soft","None","Small","None","3","None"); 
INSERT INTO pelvic_examination VALUES("14","14","105","None","Congested","Congested","Soft","Mid","Normal","None","5","None"); 
INSERT INTO pelvic_examination VALUES("15","16","105","Scars","None","Congested","Soft","Mid","Small","Yes","3","Mass"); 
INSERT INTO pelvic_examination VALUES("16","15","105","None","None","None","None","None","Normal","None","3","None"); 
INSERT INTO pelvic_examination VALUES("17","20","72","Scars","None","Congested","None","Mid","Normal","Yes","1","None"); 
INSERT INTO pelvic_examination VALUES("18","21","54","None","None","None","None","Anteflexed","Normal","Yes","1","None"); 
INSERT INTO pelvic_examination VALUES("19","22","54","Warts, Reddish","Congested, Warts","Congested, Erosion","Soft","Anteflexed","Small","None","1","None"); 
INSERT INTO pelvic_examination VALUES("20","23","24","Warts","Bartholin cyst","Congested","Firm","Mid","Small","None","1","Mass"); 
INSERT INTO pelvic_examination VALUES("21","24","24","Warts, Reddish","Bartholin cyst, Warts","Congested, Discharge","Soft","Mid","Small","None","1","Mass"); 
INSERT INTO pelvic_examination VALUES("22","25","10","None","None","None","Firm","Mid","Small","Yes","1","Mass"); 
INSERT INTO pelvic_examination VALUES("23","26","10","Reddish","Bartholin cyst, Warts","Erosion, Discharge","Firm","Mid, Anteflexed","Small","Yes","1","Mass"); 
INSERT INTO pelvic_examination VALUES("24","27","82","Scars, Warts","Bartholin cyst","Congested","Soft","None","None","None","1","None"); 
INSERT INTO pelvic_examination VALUES("25","28","44","Scars, Warts","Congested, Bartholin cyst","None","Firm","Mid","Normal","None","1","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO physical_examination VALUES("1","1","4","110/70","52","150","78","Pale","Enlarged thyroid","Mass, Nipple discharge","Abnormal breath sounds/respiratory rate","","Edema"); 
INSERT INTO physical_examination VALUES("2","2","9","110/70","52","150","78","Pale","Enlarged thyroid","Skin - orange peel or dimpling","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("3","3","20","110/70","52","150","78","Pale","Enlarged lymph nodes","Nipple discharge","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("4","4","19","110/70","52","150","78","Yellowish","None","Nipple discharge","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("5","5","20","110/70","54","150","78","None","None","Mass","None","None","Edema"); 
INSERT INTO physical_examination VALUES("6","8","20","111/70","55","170","70","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("7","7","20","100/50","58","160","78","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("8","6","20","100/10","57","170","78","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("9","9","38","100/70","56","160","90","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("10","10","38","100/50","54","178","50","Pale","Enlarged thyroid","None","None","None","None"); 
INSERT INTO physical_examination VALUES("11","11","42","100/50","56","170","50","None","None","Nipple discharge","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("12","12","42","100/60","56","170","79","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("13","13","105","100/05","50","170","50","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("14","14","105","100/60","50","170","80","Pale","Enlarged lymph nodes","None","None","None","None"); 
INSERT INTO physical_examination VALUES("15","16","105","100/50","50","170","60","None","None","None","None","None","Edema"); 
INSERT INTO physical_examination VALUES("16","15","105","100/60","56","170","78","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("17","20","72","100/60","56","170","80","None","None","Mass","Abnormal heart sounds/cardiac rate","None","Edema"); 
INSERT INTO physical_examination VALUES("18","21","54","100/60","57","170","80","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("19","22","54","100/60","56","170","60","None","None","Mass","Abnormal heart sounds/cardiac rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("20","23","24","100/50","50","270","78","None","Enlarged lymph nodes","Mass","Abnormal breath sounds/respiratory rate","Enlarged liver","None"); 
INSERT INTO physical_examination VALUES("21","24","24","100/60","50","175","80","Pale","Enlarged thyroid","Mass","Abnormal breath sounds/respiratory rate","Enlarged liver","Edema"); 
INSERT INTO physical_examination VALUES("22","25","10","100/50","55","170","80","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("23","26","10","100/60","56","170","80","Pale","Enlarged thyroid","Mass","Abnormal heart sounds/cardiac rate","Enlarged liver, Tenderness","Edema"); 
INSERT INTO physical_examination VALUES("24","27","82","100/60","56","176","80","None","None","None","None","None","None"); 
INSERT INTO physical_examination VALUES("25","28","44","100/50","56","170","80","None","Enlarged lymph nodes","None","Abnormal heart sounds/cardiac rate","None","Edema"); 



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

INSERT INTO prenatal_follow_up VALUES("32","27","9","2020-02-06 1:03 PM","Prenatal Checkup","Done"); 
INSERT INTO prenatal_follow_up VALUES("33","27","22","2020-02-04 1:03 PM","Prenatal Checkup","Done"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

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
INSERT INTO referral VALUES("31","2020-01-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Michael Moreno","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Male","Jan","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("32","2020-03-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Renz Jay Quillo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Mar","2020","June 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("33","2020-04-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Janeil Alcano","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Apr","2020","April 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("34","2020-05-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Tisha Golez","59","100/60","38.0","34","High Fever","Manilyn V. Jimera","Female","May","2020","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("35","2020-06-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Michael Aglubat","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Jun","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("36","2020-07-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Mecy Dolina","59","100/60","38.0","34","High Fever","Manilyn V. Jimera","Female","Jul","2020","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("37","2020-08-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Juan Marquez","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Aug","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("38","2020-09-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jun Mar Fajardo","67","100/50","38.0","24","High Fever","Manilyn V. Jimera","Male","Sep","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("39","2020-11-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Francis Meno","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Nov","2020","October 11, 2020 2:38 am"); 
INSERT INTO referral VALUES("40","2020-10-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jayson Aglubat","56","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Oct","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("41","2020-12-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Freya Allan","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Dec","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("42","2020-01-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Danilo Gascon","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Jan","2020","April 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("43","2020-03-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Nica Montalina","57","100/50","37.0","33","Fractured Leg","Manilyn V. Jimera","Female","Jun","2020","June 15, 2019 8:52 am"); 
INSERT INTO referral VALUES("44","2020-02-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Gina Rosales","59","100/60","38.0","43","High Fever","Manilyn V. Jimera","Female","Feb","2020","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("45","2020-03-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Myka Santamena","59","100/60","38.0","23","High Fever","Manilyn V. Jimera","Female","Mar","2020","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("46","2020-04-23","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Roel Lopez","57","100/50","37.0","43","Stomach Ache","Manilyn V. Jimera","Male","Apr","2019","October 23, 2019 7:33 am"); 
INSERT INTO referral VALUES("47","2020-04-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Gina Rosales","57","100/50","37.0","33","Fractured Leg","Manilyn V. Jimera","Female","Apr","2020","June 15, 2019 8:52 am"); 
INSERT INTO referral VALUES("48","2020-05-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jayson Diana","55","100/60","36.5","34","Gunshot","John Phillip Dela Cruz","Male","May","2020","August 11, 2019 8:19 am"); 
INSERT INTO referral VALUES("49","2020-01-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Allan Kenka","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Male","Jan","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("50","2020-01-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Minda Huele","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Jan","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("51","2020-01-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jenna Marie Villamor","55","100/50","37.0","34","Injured arm","Jesse Franco Latosa","Female","Dec","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("52","2020-11-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Nico Montalvo","57","100/50","37.0","21","Fractured Leg","Manilyn V. Jimera","Male","Nov","2020","June 15, 2019 8:52 am"); 
INSERT INTO referral VALUES("53","2020-10-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Juan Marquez","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Oct","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("54","2020-09-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Freya Allan","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Sep","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("55","2020-08-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Michael Aguillon","67","100/50","38.0","23","High Fever","Manilyn V. Jimera","Male","Aug","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("56","2020-07-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Joshua Tamona","56","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Jul","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("57","2020-02-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Georgina Torres","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Feb","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("58","2020-03-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","JF Villar","55","100/50","37.0","21","Injured arm","Jesse Franco Latosa","Male","Mar","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("59","2020-11-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Kyan Ricabo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Nov","2020","April 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("60","2020-10-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Mark Jagonoy","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Oct","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("61","2020-07-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Renz Jay Quillo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Jul","2020","June 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("62","2020-05-17","Mansilingan Health Center","Doctors Hospital","Mansilingan, Bacolod City","Shopping","Ricci Rivera","59","100/60","38.0","34","High Fever","Manilyn V. Jimera","Male","May","2020","July 17, 2019 8:10 am"); 
INSERT INTO referral VALUES("63","2020-01-15","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Nico Gamon","57","100/50","37.0","21","Fractured Leg","Manilyn V. Jimera","Male","Jan","2020","June 15, 2019 8:52 am"); 
INSERT INTO referral VALUES("64","2020-05-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jayson Castro","56","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","May","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("65","2020-08-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Renz Jay Quillo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Aug","2020","June 06, 2019 10:09 pm"); 
INSERT INTO referral VALUES("66","2020-08-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Dapat Allan","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Male","Aug","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("67","2020-09-12","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Josh Mbenga","55","100/50","37.0","20","Injured arm","Jesse Franco Latosa","Female","Sep","2020","February 1, 2020 9:11 pm"); 
INSERT INTO referral VALUES("68","2020-04-11","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Oscar Delahoya","67","100/50","38.0","21","High Fever","Manilyn V. Jimera","Male","Apr","2020","November 11, 2019 2:38 am"); 
INSERT INTO referral VALUES("69","2020-12-01","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson Street","Emmanuel James Tan","80","110/00","37.0","21","fractured arm","Manilyn V. Jimera","Male","Sep","2020","December 9, 2019 4:51 pm"); 
INSERT INTO referral VALUES("70","2020-03-19","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Renz Jay Quillo","55","100/50","37.0","21","Fractured arm, due to motorcycle accident","Manilyn V. Jimera","Male","Apr","2020","June 06, 2019 10:09 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO referral_prenatal VALUES("20","2020-02-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Stay Bagagrel","56","120/50","36.5","35","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Feb","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("21","2020-01-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Michaela Dela Torre","56","100/50","37.0","25","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jan","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("22","2020-03-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Basha Gonzaga","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Mar","2020","March 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("23","2020-04-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Beatriz Osorio","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Apr","2020","April 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("24","2020-05-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Ricka Gonzalez","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","May","2020","May 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("25","2020-06-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Vicky Moralez","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jun","2020","June 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("26","2020-07-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Vicky Morja","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jul","2020","July 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("27","2020-08-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Minda Huele","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Aug","2020","August 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("28","2020-09-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Ericka Aguillon","56","100/50","37.0","37","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Sep","2020","September 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("29","2020-10-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Marian Rivera","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Oct","2020","October 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("30","2020-11-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Maricris Santos","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Nov","2020","November 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("31","2020-12-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Vilma Santos","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Dec","2020","December 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("32","2020-12-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Franz Lagdamen","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Dec","2020","December 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("33","2020-01-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Moira Dela Torre","56","100/50","37.0","33","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jan","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("34","2020-01-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Kristine Dela Torre","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jan","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("35","2020-01-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Michaela Santos","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Jan","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("36","2020-02-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Sofia Andres","56","120/50","36.5","45","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Feb","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("37","2020-02-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Georgina Torres","56","120/50","36.5","45","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Feb","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("38","2020-02-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Krystal Diana","56","120/50","36.5","45","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Feb","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("39","2020-03-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Sherry Endrina","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Mar","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("40","2020-04-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Sherry Reyes","56","100/50","37.0","41","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Apr","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("41","2020-04-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Micah Gonzaga","56","100/50","37.0","41","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Apr","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("42","2020-06-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Kizsha Martinez","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Jun","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("43","2020-09-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Nikka Clavel","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Sep","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("44","2020-11-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Vivian Santos","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Nov","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("45","2020-07-21","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Kera Martus","56","100/50","37.0","31","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Jul","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("46","2020-10-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Sofia Andres","56","120/50","36.5","45","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Oct","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("47","2020-05-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Rica Torres","56","120/50","36.5","45","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","May","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("48","2020-08-30","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Jackie Rice","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Aug","2020","December 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("49","2020-03-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Cora Mindana","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Mar","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("50","2020-05-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Berta Magno","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","May","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("51","2020-10-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Hailey Baldy","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Oct","2020","June 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("52","2020-11-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Merla Mona","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Nov","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("53","2020-09-21","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Queenie Panisales","56","100/50","37.0","31","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Sep","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("54","2020-09-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Kathleen Clavel","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Sep","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("55","2020-12-21","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Denise Miranda","56","100/50","37.0","28","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","Dec","2020","August 21, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("56","2020-07-06","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Krystal Lorena","56","120/50","36.5","27","stomach ache","0","0","32","34","TT 2","2020-02-04","John Phillip Dela Cruz","Jul","2020","February 8, 2020 1:54 pm"); 
INSERT INTO referral_prenatal VALUES("57","2020-08-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Yolanda Marina","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Aug","2020","February 26, 2020 1:07 am"); 
INSERT INTO referral_prenatal VALUES("58","2020-05-01","Mansilingan Health Center","City Health","Mansilingan, Bacolod City","BBB St, Bacolod","Lorena Legarda","56","100/50","37.0","33","stomach ache","0","0","27 cm","120","TT 1","2008-06-17","Manilyn V. Jimera","May","2020","January 01, 2020 10:43 am"); 
INSERT INTO referral_prenatal VALUES("59","2020-04-18","Mansilingan Health Center","CLMMRH","Mansilingan, Bacolod City","Lacson St.","Jolina Magdangal","56","100/50","37.0","25","1 hour aching of stomach","0","0","120 cm","50","TT 3","2015-06-17","Manilyn V. Jimera","Apr","2020","February 26, 2020 1:07 am"); 



DROP TABLE risk_for_vaw;

CREATE TABLE `risk_for_vaw` (
  `risk_for_vaw_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `risks` varchar(500) NOT NULL,
  `referred_to` varchar(500) NOT NULL,
  PRIMARY KEY (`risk_for_vaw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO risk_for_vaw VALUES("1","1","4","Unpleasant relationship with partner","NGOs - "); 
INSERT INTO risk_for_vaw VALUES("2","2","9","Unpleasant relationship with partner","WCPU - "); 
INSERT INTO risk_for_vaw VALUES("3","3","20","Partner does not approve of the visit to FP Clinic","WCPU - "); 
INSERT INTO risk_for_vaw VALUES("4","4","19","None","DSWD - "); 
INSERT INTO risk_for_vaw VALUES("5","5","20","None","None - "); 
INSERT INTO risk_for_vaw VALUES("6","8","20","None","None - "); 
INSERT INTO risk_for_vaw VALUES("7","7","20","History of domestic violence or VAW","None - "); 
INSERT INTO risk_for_vaw VALUES("8","6","20","None","None - "); 
INSERT INTO risk_for_vaw VALUES("9","9","38","None","None - "); 
INSERT INTO risk_for_vaw VALUES("10","10","38","History of domestic violence or VAW","None - "); 
INSERT INTO risk_for_vaw VALUES("11","11","42","None","None - "); 
INSERT INTO risk_for_vaw VALUES("12","12","42","None","None - "); 
INSERT INTO risk_for_vaw VALUES("13","13","105","None","None - "); 
INSERT INTO risk_for_vaw VALUES("14","14","105","None","None - "); 
INSERT INTO risk_for_vaw VALUES("15","16","105","Unpleasant relationship with partner","None - "); 
INSERT INTO risk_for_vaw VALUES("16","15","105","None","None - "); 
INSERT INTO risk_for_vaw VALUES("17","20","72","None","None - "); 
INSERT INTO risk_for_vaw VALUES("18","21","54","None","None - "); 
INSERT INTO risk_for_vaw VALUES("19","22","54","None","None - "); 
INSERT INTO risk_for_vaw VALUES("20","23","24","None","None - "); 
INSERT INTO risk_for_vaw VALUES("21","24","24","None","None - "); 
INSERT INTO risk_for_vaw VALUES("22","25","10","None","None - "); 
INSERT INTO risk_for_vaw VALUES("23","26","10","None","None - "); 
INSERT INTO risk_for_vaw VALUES("24","27","82","None","None - "); 
INSERT INTO risk_for_vaw VALUES("25","28","44","None","None - "); 



DROP TABLE sti_risks;

CREATE TABLE `sti_risks` (
  `sti_risks_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `sti_risk` varchar(100) NOT NULL,
  `forwomen` varchar(500) NOT NULL,
  `formen` varchar(500) NOT NULL,
  PRIMARY KEY (`sti_risks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO sti_risks VALUES("1","1","4","None","Pain or burning sensation","Swollen testicles or penis"); 
INSERT INTO sti_risks VALUES("2","2","9","None","Unusual discharge from vagina","Open sores anywhere in genital area, Pus corning from penis"); 
INSERT INTO sti_risks VALUES("3","3","20","With history of multiple partners","Pain or burning sensation","Swollen testicles or penis"); 
INSERT INTO sti_risks VALUES("4","4","19","None","None","None"); 
INSERT INTO sti_risks VALUES("5","5","20","None","None","None"); 
INSERT INTO sti_risks VALUES("6","8","20","None","None","None"); 
INSERT INTO sti_risks VALUES("7","7","20","None","None","None"); 
INSERT INTO sti_risks VALUES("8","6","20","None","None","None"); 
INSERT INTO sti_risks VALUES("9","9","38","None","None","None"); 
INSERT INTO sti_risks VALUES("10","10","38","With history of multiple partners","Itching or sores in or around vagina","Pus corning from penis"); 
INSERT INTO sti_risks VALUES("11","11","42","With history of multiple partners","None","None"); 
INSERT INTO sti_risks VALUES("12","12","42","None","None","Open sores anywhere in genital area"); 
INSERT INTO sti_risks VALUES("13","13","105","None","Unusual discharge from vagina","Pus corning from penis"); 
INSERT INTO sti_risks VALUES("14","14","105","None","Itching or sores in or around vagina","Open sores anywhere in genital area"); 
INSERT INTO sti_risks VALUES("15","16","105","None","Itching or sores in or around vagina","None"); 
INSERT INTO sti_risks VALUES("16","15","105","None","Unusual discharge from vagina","Pus corning from penis"); 
INSERT INTO sti_risks VALUES("17","20","72","None","None","None"); 
INSERT INTO sti_risks VALUES("18","21","54","None","None","None"); 
INSERT INTO sti_risks VALUES("19","22","54","None","None","None"); 
INSERT INTO sti_risks VALUES("20","23","24","None","Unusual discharge from vagina","Open sores anywhere in genital area"); 
INSERT INTO sti_risks VALUES("21","24","24","None","None","None"); 
INSERT INTO sti_risks VALUES("22","25","10","None","None","None"); 
INSERT INTO sti_risks VALUES("23","26","10","None","Unusual discharge from vagina, Itching or sores in or around vagina","Pus corning from penis, Swollen testicles or penis"); 
INSERT INTO sti_risks VALUES("24","27","82","None","None","None"); 
INSERT INTO sti_risks VALUES("25","28","44","None","None","None"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid VALUES("3","3","","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("4","8","2019-07-10","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("5","9","December 28, 2017","January 25, 2018","June 13, 2019","","",""); 
INSERT INTO tetanus_toxoid VALUES("6","10","2016-01-13","2016-06-08","2019-05-27","","",""); 
INSERT INTO tetanus_toxoid VALUES("7","11","","","","","",""); 
INSERT INTO tetanus_toxoid VALUES("8","35","","","","","",""); 



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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO tetanus_toxoid_fp VALUES("4","3","2019-11-13","2019-10-29","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("5","8","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("6","9","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("7","10","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("8","11","","","","",""); 
INSERT INTO tetanus_toxoid_fp VALUES("9","35","","","","",""); 



DROP TABLE type_of_feeding;

CREATE TABLE `type_of_feeding` (
  `type_of_feeding_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `ebf` varchar(11) NOT NULL,
  `mf` varchar(11) NOT NULL,
  `bff` varchar(11) NOT NULL,
  `tof_date` varchar(30) NOT NULL,
  PRIMARY KEY (`type_of_feeding_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding VALUES("11","3","","?","","2019-11-20"); 
INSERT INTO type_of_feeding VALUES("12","3","","","?","2019-11-28"); 
INSERT INTO type_of_feeding VALUES("14","8","?","","","2019-12-01"); 
INSERT INTO type_of_feeding VALUES("15","8","?","","","2019-12-10"); 
INSERT INTO type_of_feeding VALUES("16","8","?","","","2019-12-25"); 
INSERT INTO type_of_feeding VALUES("17","8","?","","","2019-12-31"); 
INSERT INTO type_of_feeding VALUES("18","8","?","","","2019-11-19"); 
INSERT INTO type_of_feeding VALUES("25","8","","?","","2020-01-08"); 
INSERT INTO type_of_feeding VALUES("26","3","?","","","2020-02-19"); 
INSERT INTO type_of_feeding VALUES("27","35","","?","","2020-02-12"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO type_of_feeding_2 VALUES("4","3","2019-11-12","","","",""); 
INSERT INTO type_of_feeding_2 VALUES("5","8","","2019-05-15","2019-11-20","2019-11-09","2019-11-08"); 
INSERT INTO type_of_feeding_2 VALUES("6","9","","","","September 4, 2019","September 3, 2019"); 
INSERT INTO type_of_feeding_2 VALUES("7","10","","","","2019-07-25","2019-07-24"); 
INSERT INTO type_of_feeding_2 VALUES("8","11","","","","",""); 
INSERT INTO type_of_feeding_2 VALUES("9","35","","","","",""); 



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
INSERT INTO users VALUES("27","Diana Rose S. Laput","123456789","Medical Officer","admin","$2y$10$xdDjYSYJFksfk9PbNV98WO54PHxAt4mGImSA/.V3x.u9oXTWb5BRS","1","February 26, 2020, 10:09 am","September 22, 2019","4:01 am"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=1613 DEFAULT CHARSET=latin1;

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
INSERT INTO users_activity_log VALUES("1400","27","Successfully Backup the database","2020-02-22, 4:43 am"); 
INSERT INTO users_activity_log VALUES("1401","27","Registered Kurt Dela Torre as new Patient","February 22, 2020 - 4:46 am"); 
INSERT INTO users_activity_log VALUES("1402","27","Registered Justin Jaudines as new Patient","February 22, 2020 - 4:50 am"); 
INSERT INTO users_activity_log VALUES("1403","27","Registered Kobe Bryant as new Patient","February 22, 2020 - 4:52 am"); 
INSERT INTO users_activity_log VALUES("1404","27","Registered Nikka Clarito as new Patient","February 22, 2020 - 4:54 am"); 
INSERT INTO users_activity_log VALUES("1405","27","Registered John Artem Aguillon as new Patient","February 22, 2020 - 4:55 am"); 
INSERT INTO users_activity_log VALUES("1406","27","Registered Justin Diana as new Patient","February 22, 2020 - 4:57 am"); 
INSERT INTO users_activity_log VALUES("1407","27","Registered Keith Peterson Sacayle as new Patient","February 22, 2020 - 4:59 am"); 
INSERT INTO users_activity_log VALUES("1408","27","Registered Michael Callejas as new Patient","February 22, 2020 - 5:00 am"); 
INSERT INTO users_activity_log VALUES("1409","27","Registered Dyniel Keith Catalu?a as new Patient","February 22, 2020 - 5:01 am"); 
INSERT INTO users_activity_log VALUES("1410","27","Registered Gaebriel Ditchon as new Patient","February 22, 2020 - 5:02 am"); 
INSERT INTO users_activity_log VALUES("1411","27","Registered Elmer Haro as new Patient","February 22, 2020 - 5:03 am"); 
INSERT INTO users_activity_log VALUES("1412","27","Registered Tisha Lyn Sugar Barco as new Patient","February 22, 2020 - 5:07 am"); 
INSERT INTO users_activity_log VALUES("1413","27","Registered Franze Caballero as new Patient","February 22, 2020 - 5:13 am"); 
INSERT INTO users_activity_log VALUES("1414","27","Registered Zoe Gudio as new Patient","February 22, 2020 - 5:15 am"); 
INSERT INTO users_activity_log VALUES("1415","27","Registered Grechelle Faelmarin as new Patient","February 22, 2020 - 5:16 am"); 
INSERT INTO users_activity_log VALUES("1416","27","Registered Bon Jovi as new Patient","February 22, 2020 - 5:17 am"); 
INSERT INTO users_activity_log VALUES("1417","27","Registered Blessyl Garlan as new Patient","February 22, 2020 - 5:21 am"); 
INSERT INTO users_activity_log VALUES("1418","27","Registered Alyanna Marie Esada as new Patient","February 22, 2020 - 5:22 am"); 
INSERT INTO users_activity_log VALUES("1419","27","Registered Katrine Baldonado as new Patient","February 22, 2020 - 5:24 am"); 
INSERT INTO users_activity_log VALUES("1420","27","Edited Alyanna Marie Esada Patient Profile","February 22, 2020 - 5:24 am"); 
INSERT INTO users_activity_log VALUES("1421","27","Edited Alyanna Marie Esada Patient Profile","February 22, 2020 - 5:24 am"); 
INSERT INTO users_activity_log VALUES("1422","27","Edited Blessyl Garlan Patient Profile","February 22, 2020 - 5:25 am"); 
INSERT INTO users_activity_log VALUES("1423","27","Edited Blessyl Garlan Patient Profile","February 22, 2020 - 5:25 am"); 
INSERT INTO users_activity_log VALUES("1424","27","Registered Lara Mae Banate as new Patient","February 22, 2020 - 5:27 am"); 
INSERT INTO users_activity_log VALUES("1425","27","Edited Alyanna Marie Esada Patient Profile","February 22, 2020 - 5:28 am"); 
INSERT INTO users_activity_log VALUES("1426","27","Edited Alyanna Marie Esada Patient Profile","February 22, 2020 - 5:28 am"); 
INSERT INTO users_activity_log VALUES("1427","27","Edited Blessyl Garlan Patient Profile","February 22, 2020 - 5:28 am"); 
INSERT INTO users_activity_log VALUES("1428","27","Edited Blessyl Garlan Patient Profile","February 22, 2020 - 5:28 am"); 
INSERT INTO users_activity_log VALUES("1429","27","Edited Katrine Baldonado Patient Profile","February 22, 2020 - 5:29 am"); 
INSERT INTO users_activity_log VALUES("1430","27","Edited Katrine Baldonado Patient Profile","February 22, 2020 - 5:29 am"); 
INSERT INTO users_activity_log VALUES("1431","27","Registered Kyla Estrada as new Patient","February 22, 2020 - 5:31 am"); 
INSERT INTO users_activity_log VALUES("1432","27","Registered John Go as new Patient","February 22, 2020 - 5:32 am"); 
INSERT INTO users_activity_log VALUES("1433","27","Registered Denise Go as new Patient","February 22, 2020 - 5:34 am"); 
INSERT INTO users_activity_log VALUES("1434","27","Registered Jesse Bel as new Patient","February 22, 2020 - 5:35 am"); 
INSERT INTO users_activity_log VALUES("1435","27","Registered Gammy Ber  as new Patient","February 22, 2020 - 5:36 am"); 
INSERT INTO users_activity_log VALUES("1436","27","Registered Angelica Yap as new Patient","February 22, 2020 - 5:38 am"); 
INSERT INTO users_activity_log VALUES("1437","27","Registered Wendell Jadulos as new Patient","February 22, 2020 - 5:39 am"); 
INSERT INTO users_activity_log VALUES("1438","27","Registered Jordan Metran as new Patient","February 22, 2020 - 5:40 am"); 
INSERT INTO users_activity_log VALUES("1439","27","Registered Joshua Aguilar as new Patient","February 22, 2020 - 5:42 am"); 
INSERT INTO users_activity_log VALUES("1440","27","Registered James Cerdan as new Patient","February 22, 2020 - 5:43 am"); 
INSERT INTO users_activity_log VALUES("1441","27","Registered Melton Dairo as new Patient","February 22, 2020 - 5:44 am"); 
INSERT INTO users_activity_log VALUES("1442","27","Registered Prince Kenneth Jadulos as new Patient","February 22, 2020 - 5:45 am"); 
INSERT INTO users_activity_log VALUES("1443","27","Registered Frank Borongan as new Patient","February 22, 2020 - 5:46 am"); 
INSERT INTO users_activity_log VALUES("1444","27","Registered Rachel Labrador as new Patient","February 22, 2020 - 5:48 am"); 
INSERT INTO users_activity_log VALUES("1445","27","Registered Johnly Sapalaran as new Patient","February 22, 2020 - 5:49 am"); 
INSERT INTO users_activity_log VALUES("1446","27","Registered Parisha Joy Legaspi as new Patient","February 22, 2020 - 5:51 am"); 
INSERT INTO users_activity_log VALUES("1447","27","Registered Ana Mae Jadulos as new Patient","February 22, 2020 - 5:53 am"); 
INSERT INTO users_activity_log VALUES("1448","27","Registered Archie Barrios as new Patient","February 22, 2020 - 5:54 am"); 
INSERT INTO users_activity_log VALUES("1449","27","Registered Erika Baja as new Patient","February 22, 2020 - 5:55 am"); 
INSERT INTO users_activity_log VALUES("1450","27","Registered Tricia Yee as new Patient","February 22, 2020 - 5:56 am"); 
INSERT INTO users_activity_log VALUES("1451","27","Registered John Valencia as new Patient","February 22, 2020 - 5:58 am"); 
INSERT INTO users_activity_log VALUES("1452","27","Registered Tj Torre as new Patient","February 22, 2020 - 6:00 am"); 
INSERT INTO users_activity_log VALUES("1453","27","Registered Reysa Servando as new Patient","February 22, 2020 - 6:02 am"); 
INSERT INTO users_activity_log VALUES("1454","27","Registered Lovely Lee as new Patient","February 22, 2020 - 6:03 am"); 
INSERT INTO users_activity_log VALUES("1455","27","Registered Nina  Uy as new Patient","February 22, 2020 - 6:05 am"); 
INSERT INTO users_activity_log VALUES("1456","27","Registered Kate Tee as new Patient","February 22, 2020 - 6:07 am"); 
INSERT INTO users_activity_log VALUES("1457","27","Registered Marjane Xia as new Patient","February 22, 2020 - 6:09 am"); 
INSERT INTO users_activity_log VALUES("1458","27","Registered Mae Ann Xia as new Patient","February 22, 2020 - 6:10 am"); 
INSERT INTO users_activity_log VALUES("1459","27","Registered Char Lee as new Patient","February 22, 2020 - 6:11 am"); 
INSERT INTO users_activity_log VALUES("1460","27","Registered Julian Denise Sia as new Patient","February 22, 2020 - 6:13 am"); 
INSERT INTO users_activity_log VALUES("1461","27","Registered Sherry Endrina as new Patient","February 22, 2020 - 6:14 am"); 
INSERT INTO users_activity_log VALUES("1462","27","Registered Darlene Joy Villajere as new Patient","February 22, 2020 - 6:15 am"); 
INSERT INTO users_activity_log VALUES("1463","27","Registered Darla Villa as new Patient","February 22, 2020 - 6:17 am"); 
INSERT INTO users_activity_log VALUES("1464","27","Registered James Reid as new Patient","February 22, 2020 - 6:18 am"); 
INSERT INTO users_activity_log VALUES("1465","27","Registered Nadine Lustre as new Patient","February 22, 2020 - 6:20 am"); 
INSERT INTO users_activity_log VALUES("1466","27","Successfully Backup the database","2020-02-22, 6:22 am"); 
INSERT INTO users_activity_log VALUES("1467","27","Edited Leanne Mandolado Tacdoro Child Patient Profile","February 22, 2020 - 6:34 am"); 
INSERT INTO users_activity_log VALUES("1468","27","Successfully Backup the database","2020-02-22, 12:37 pm"); 
INSERT INTO users_activity_log VALUES("1469","27","Added Nadine Lustre to Consultation","February 22, 2020 - 2:38 pm"); 
INSERT INTO users_activity_log VALUES("1470","27","Added Prescription to Nadine Lustre","February 22, 2020 - 2:39 pm"); 
INSERT INTO users_activity_log VALUES("1471","27","Added Prescription to Nadine Lustre","February 22, 2020 - 2:40 pm"); 
INSERT INTO users_activity_log VALUES("1472","27","Added James Reid to Consultation","February 22, 2020 - 2:45 pm"); 
INSERT INTO users_activity_log VALUES("1473","27","Added Prescription to James Reid","February 22, 2020 - 2:46 pm"); 
INSERT INTO users_activity_log VALUES("1474","27","Added Emmanuel James Tan to Consultation","February 22, 2020 - 2:52 pm"); 
INSERT INTO users_activity_log VALUES("1475","27","Added Prescription to Emmanuel James Tan","February 22, 2020 - 2:54 pm"); 
INSERT INTO users_activity_log VALUES("1476","27","Added Prescription to Emmanuel James Tan","February 22, 2020 - 2:55 pm"); 
INSERT INTO users_activity_log VALUES("1477","27","Added Erika Baja to Consultation","February 22, 2020 - 2:58 pm"); 
INSERT INTO users_activity_log VALUES("1478","27","Added Prescription to Erika Baja","February 22, 2020 - 3:11 pm"); 
INSERT INTO users_activity_log VALUES("1479","27","Added Prescription to Erika Baja","February 22, 2020 - 3:11 pm"); 
INSERT INTO users_activity_log VALUES("1480","27","Added Prescription to Erika Baja","February 22, 2020 - 3:12 pm"); 
INSERT INTO users_activity_log VALUES("1481","27","Added Joshua Aguilar to Consultation","February 22, 2020 - 3:15 pm"); 
INSERT INTO users_activity_log VALUES("1482","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:19 pm"); 
INSERT INTO users_activity_log VALUES("1483","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:19 pm"); 
INSERT INTO users_activity_log VALUES("1484","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:20 pm"); 
INSERT INTO users_activity_log VALUES("1485","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:21 pm"); 
INSERT INTO users_activity_log VALUES("1486","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:21 pm"); 
INSERT INTO users_activity_log VALUES("1487","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:22 pm"); 
INSERT INTO users_activity_log VALUES("1488","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:22 pm"); 
INSERT INTO users_activity_log VALUES("1489","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:23 pm"); 
INSERT INTO users_activity_log VALUES("1490","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:23 pm"); 
INSERT INTO users_activity_log VALUES("1491","27","Added Prescription to Joshua Aguilar","February 22, 2020 - 3:23 pm"); 
INSERT INTO users_activity_log VALUES("1492","27","Added Darla Villa to Consultation","February 22, 2020 - 3:27 pm"); 
INSERT INTO users_activity_log VALUES("1493","27","Added Prescription to Darla Villa","February 22, 2020 - 3:47 pm"); 
INSERT INTO users_activity_log VALUES("1494","27","dispensed 4 Cefalexin 250  to Mercy Buenafuente","February 22, 2020 3:53 pm"); 
INSERT INTO users_activity_log VALUES("1495","27","dispensed 2 Biogesic to Katherine Jalandoni","February 22, 2020 3:58 pm"); 
INSERT INTO users_activity_log VALUES("1496","27","dispensed 2 Ambroxol to Katherine Jalandoni","February 22, 2020 3:59 pm"); 
INSERT INTO users_activity_log VALUES("1497","27","dispensed 5 Levoceterizine to James Reid","February 22, 2020 3:59 pm"); 
INSERT INTO users_activity_log VALUES("1498","27","dispensed 5 Biogesic to James Reid","February 22, 2020 4:00 pm"); 
INSERT INTO users_activity_log VALUES("1499","27","dispensed 5 Biogesic to James Reid","February 22, 2020 4:00 pm"); 
INSERT INTO users_activity_log VALUES("1500","27","dispensed 4 Levoceterizine to Darla Villa","February 22, 2020 4:02 pm"); 
INSERT INTO users_activity_log VALUES("1501","27","dispensed 5 Biogesic to Erika Baja","February 22, 2020 4:03 pm"); 
INSERT INTO users_activity_log VALUES("1502","27","dispensed 4 Levoceterizine to Erika Baja","February 22, 2020 4:04 pm"); 
INSERT INTO users_activity_log VALUES("1503","27","dispensed 5 Cefalexin 250  to Jerhod Kyan Ricabo","February 22, 2020 4:05 pm"); 
INSERT INTO users_activity_log VALUES("1504","27","dispensed 9 Cefalexin 250  to Audrey Faith Villasis","February 22, 2020 4:06 pm"); 
INSERT INTO users_activity_log VALUES("1505","27","added 20 pieces of Levoceterizine to stocks","February 22, 2020 4:07 pm"); 
INSERT INTO users_activity_log VALUES("1506","27","added 40 pieces of Biogesic to stocks","February 22, 2020 4:07 pm"); 
INSERT INTO users_activity_log VALUES("1507","27","dispensed 12 Biogesic to Audrey Faith Villasis","February 22, 2020 4:09 pm"); 
INSERT INTO users_activity_log VALUES("1508","27","dispensed 15 Biogesic to Mary Ann Sipat","February 22, 2020 4:10 pm"); 
INSERT INTO users_activity_log VALUES("1509","27","dispensed 6 Biogesic to Domingo Jose Carlos","February 22, 2020 4:11 pm"); 
INSERT INTO users_activity_log VALUES("1510","27","dispensed 4 Isoniazid to Jose Ignacio Silga","February 22, 2020 4:12 pm"); 
INSERT INTO users_activity_log VALUES("1511","27","dispensed 4 Biogesic to Jose Ignacio Silga","February 22, 2020 4:13 pm"); 
INSERT INTO users_activity_log VALUES("1512","27","dispensed 2 Levoceterizine to Jesse Franco Latosa","February 22, 2020 4:14 pm"); 
INSERT INTO users_activity_log VALUES("1513","27","dispensed 4 Isoniazid to Freya Allan","February 22, 2020 4:15 pm"); 
INSERT INTO users_activity_log VALUES("1514","27","dispensed 3 Levoceterizine to Emmanuel James Tan","February 22, 2020 4:16 pm"); 
INSERT INTO users_activity_log VALUES("1515","27","dispensed 5 Cecon 500 mg to Emmanuel James Tan","February 22, 2020 4:17 pm"); 
INSERT INTO users_activity_log VALUES("1516","27","dispensed 8 Rifampicin + isoniazid + Pyrazinamide + Ethambutol to Lagrimas Casabuena Campa","February 22, 2020 4:17 pm"); 
INSERT INTO users_activity_log VALUES("1517","27","added 30 pieces of Cecon 500 mg to stocks","February 22, 2020 4:18 pm"); 
INSERT INTO users_activity_log VALUES("1518","27","added 40 pieces of Biogesic to stocks","February 22, 2020 4:18 pm"); 
INSERT INTO users_activity_log VALUES("1519","27","dispensed 9 Biogesic to Markh B. Jamandre","February 22, 2020 4:19 pm"); 
INSERT INTO users_activity_log VALUES("1520","27","dispensed 6 Biogesic to Rose Zirilli","February 22, 2020 4:20 pm"); 
INSERT INTO users_activity_log VALUES("1521","27","dispensed 6 Cefalexin 250  to Slena Wasky","February 22, 2020 4:21 pm"); 
INSERT INTO users_activity_log VALUES("1522","27","dispensed 2 Cefalexin 250  to Anita Nelson","February 22, 2020 4:22 pm"); 
INSERT INTO users_activity_log VALUES("1523","27","dispensed 6 Rifampicin 150 mg to Anne Berquist","February 22, 2020 4:22 pm"); 
INSERT INTO users_activity_log VALUES("1524","27","dispensed 4 Cefalexin 250  to Stay Bagagrel","February 22, 2020 4:23 pm"); 
INSERT INTO users_activity_log VALUES("1525","27","dispensed 4 Biogesic to Jan Mark Ballados","February 22, 2020 4:24 pm"); 
INSERT INTO users_activity_log VALUES("1526","27","dispensed 12 Cecon 500 mg to Rommel Adricula","February 22, 2020 4:25 pm"); 
INSERT INTO users_activity_log VALUES("1527","27","dispensed 5 Ambroxol to Renzo Nono","February 22, 2020 4:26 pm"); 
INSERT INTO users_activity_log VALUES("1528","27","dispensed 3 Rifapentine to Mercy Buenafuente","February 22, 2020 4:29 pm"); 
INSERT INTO users_activity_log VALUES("1529","27","dispensed 4 Cefalexin 250  to Mercy Buenafuente","February 22, 2020 4:29 pm"); 
INSERT INTO users_activity_log VALUES("1530","27","dispensed 15 Rifampicin + isoniazid to Bernard Bermo","February 22, 2020 4:31 pm"); 
INSERT INTO users_activity_log VALUES("1531","27","dispensed 4 Biogesic to Lolita Villarosa Gerose","February 22, 2020 4:31 pm"); 
INSERT INTO users_activity_log VALUES("1532","27","Added Ricardo Barcelona to Immunization","2020-02-22"); 
INSERT INTO users_activity_log VALUES("1533","27","Updated Immunization Treatment Status for ","February 22, 2020 - 4:34 pm"); 
INSERT INTO users_activity_log VALUES("1534","27","Successfully Backup the database","2020-02-22, 4:36 pm"); 
INSERT INTO users_activity_log VALUES("1535","27","Added a Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:45 pm"); 
INSERT INTO users_activity_log VALUES("1536","27","Updated the Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:45 pm"); 
INSERT INTO users_activity_log VALUES("1537","27","Added a Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:45 pm"); 
INSERT INTO users_activity_log VALUES("1538","27","Added a Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:46 pm"); 
INSERT INTO users_activity_log VALUES("1539","27","Updated the Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:46 pm"); 
INSERT INTO users_activity_log VALUES("1540","27","Updated the Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:46 pm"); 
INSERT INTO users_activity_log VALUES("1541","27","Added a Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("1542","27","Updated the Family Planning follow-up date for Wilma Mendez","February 22, 2020 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("1543","27","Added a Family Planning follow-up date for Margarita Diana","February 22, 2020 - 4:51 pm"); 
INSERT INTO users_activity_log VALUES("1544","27","Updated the Family Planning follow-up date for Margarita Diana","February 22, 2020 - 4:51 pm"); 
INSERT INTO users_activity_log VALUES("1545","27","Added a Family Planning follow-up date for Lolita Villarosa Gerose","February 22, 2020 - 4:53 pm"); 
INSERT INTO users_activity_log VALUES("1546","27","Updated the Family Planning follow-up date for Lolita Villarosa Gerose","February 22, 2020 - 4:53 pm"); 
INSERT INTO users_activity_log VALUES("1547","27","Added a Family Planning follow-up date for Kizsha Lauriaga","February 22, 2020 - 4:54 pm"); 
INSERT INTO users_activity_log VALUES("1548","27","Updated the Family Planning follow-up date for Kizsha Lauriaga","February 22, 2020 - 4:54 pm"); 
INSERT INTO users_activity_log VALUES("1549","27","Edited Stay Bagagrel Prenatal Referral Record","February 22, 2020 5:04 pm"); 
INSERT INTO users_activity_log VALUES("1550","27","Registered Josefa Escobar as new Patient","February 22, 2020 - 5:13 pm"); 
INSERT INTO users_activity_log VALUES("1551","27","Registered Romina Velasco as new Patient","February 22, 2020 - 5:26 pm"); 
INSERT INTO users_activity_log VALUES("1552","27","Registered Veronica Wanita as new Patient","February 22, 2020 - 5:27 pm"); 
INSERT INTO users_activity_log VALUES("1553","27","Edited Josefa Escobar Patient Profile","February 22, 2020 - 5:28 pm"); 
INSERT INTO users_activity_log VALUES("1554","27","Edited Veronica Wanita Patient Profile","February 22, 2020 - 5:29 pm"); 
INSERT INTO users_activity_log VALUES("1555","27","Edited Romina Velasco Patient Profile","February 22, 2020 - 5:29 pm"); 
INSERT INTO users_activity_log VALUES("1556","27","Edited Thomas Salazar Patient Profile","February 22, 2020 - 5:57 pm"); 
INSERT INTO users_activity_log VALUES("1557","27","Registered Solicidad Birtuso as new Patient","February 22, 2020 - 6:07 pm"); 
INSERT INTO users_activity_log VALUES("1558","27","Registered Bimbol Roco as new Patient","February 22, 2020 - 6:09 pm"); 
INSERT INTO users_activity_log VALUES("1559","27","Registered Rodrigo Roa as new Patient","February 22, 2020 - 6:16 pm"); 
INSERT INTO users_activity_log VALUES("1560","27","Registered Manny Sergio as new Patient","February 22, 2020 - 6:27 pm"); 
INSERT INTO users_activity_log VALUES("1561","27","Registered Alexandro Ponterafo as new Patient","February 22, 2020 - 6:37 pm"); 
INSERT INTO users_activity_log VALUES("1562","27","Added Freya Allan to Family Planning","February 22, 2020 - 7:30 pm"); 
INSERT INTO users_activity_log VALUES("1563","27","Added Freya Allan to Family Planning Assessment","February 22, 2020 - 7:33 pm"); 
INSERT INTO users_activity_log VALUES("1564","27","Added Freya Allan to Family Planning","February 22, 2020 - 7:35 pm"); 
INSERT INTO users_activity_log VALUES("1565","27","Added Freya Allan to Family Planning Assessment","February 22, 2020 - 7:36 pm"); 
INSERT INTO users_activity_log VALUES("1566","27","Updated the Prenatal follow-up date for Stay Bagagrel","February 23, 2020 - 11:33 am"); 
INSERT INTO users_activity_log VALUES("1567","27","Updated the Prenatal follow-up date for Stay Bagagrel","February 23, 2020 - 11:34 am"); 
INSERT INTO users_activity_log VALUES("1568","27","Updated the Prenatal follow-up date for Margarita Diana","February 23, 2020 - 11:35 am"); 
INSERT INTO users_activity_log VALUES("1569","27","Added Mary Ann Sipat to Family Planning","February 23, 2020 - 12:03 pm"); 
INSERT INTO users_activity_log VALUES("1570","27","Added Mary Ann Sipat to Family Planning Assessment","February 23, 2020 - 12:56 pm"); 
INSERT INTO users_activity_log VALUES("1571","27","Added Mary Ann Sipat to Family Planning Assessment","February 23, 2020 - 1:11 pm"); 
INSERT INTO users_activity_log VALUES("1572","27","Added Michael Callejas to Consultation","February 23, 2020 - 1:24 pm"); 
INSERT INTO users_activity_log VALUES("1573","27","Added Prescription to Michael Callejas","February 23, 2020 - 1:24 pm"); 
INSERT INTO users_activity_log VALUES("1574","27","Edited Michael Callejas Patient Profile","February 23, 2020 - 1:25 pm"); 
INSERT INTO users_activity_log VALUES("1575","27","Added Prescription to Nadine Lustre","February 23, 2020 - 1:28 pm"); 
INSERT INTO users_activity_log VALUES("1576","27","Added James Reid to Consultation","February 23, 2020 - 2:06 pm"); 
INSERT INTO users_activity_log VALUES("1577","27","Added Prescription to James Reid","February 23, 2020 - 2:14 pm"); 
INSERT INTO users_activity_log VALUES("1578","27","Added Marjane Xia to Family Planning","February 23, 2020 - 3:31 pm"); 
INSERT INTO users_activity_log VALUES("1579","27","Added Marjane Xia to Family Planning Assessment","February 23, 2020 - 3:39 pm"); 
INSERT INTO users_activity_log VALUES("1580","27","Added Marjane Xia to Family Planning Assessment","February 23, 2020 - 3:42 pm"); 
INSERT INTO users_activity_log VALUES("1581","27","Added Marjane Xia to Family Planning Assessment","February 23, 2020 - 3:43 pm"); 
INSERT INTO users_activity_log VALUES("1582","27","Added Marjane Xia to Family Planning Assessment","February 23, 2020 - 3:44 pm"); 
INSERT INTO users_activity_log VALUES("1583","27","Successfully Backup the database","2020-02-23, 3:47 pm"); 
INSERT INTO users_activity_log VALUES("1584","27","Added Zoe Gudio to Family Planning Assessment","February 23, 2020 - 4:00 pm"); 
INSERT INTO users_activity_log VALUES("1585","27","Added a Family Planning follow-up date for Zoe Gudio","February 23, 2020 - 4:02 pm"); 
INSERT INTO users_activity_log VALUES("1586","27","Updated the Family Planning follow-up date for Zoe Gudio","February 23, 2020 - 4:02 pm"); 
INSERT INTO users_activity_log VALUES("1587","27","Edited May Gudio Patient Profile","February 23, 2020 - 4:10 pm"); 
INSERT INTO users_activity_log VALUES("1588","27","Edited Francine Caballero Patient Profile","February 23, 2020 - 4:11 pm"); 
INSERT INTO users_activity_log VALUES("1589","27","Successfully Backup the database","2020-02-23, 8:58 pm"); 
INSERT INTO users_activity_log VALUES("1590","27","Added Michelle Ramos to Family Planning","February 23, 2020 - 10:02 pm"); 
INSERT INTO users_activity_log VALUES("1591","27","Added Michelle Ramos to Family Planning Assessment","February 23, 2020 - 10:13 pm"); 
INSERT INTO users_activity_log VALUES("1592","27","Added Michelle Ramos to Family Planning Assessment","February 23, 2020 - 10:25 pm"); 
INSERT INTO users_activity_log VALUES("1593","27","Added Anne Berquist to Family Planning","February 23, 2020 - 10:31 pm"); 
INSERT INTO users_activity_log VALUES("1594","27","Added Anne Berquist to Family Planning Assessment","February 23, 2020 - 10:40 pm"); 
INSERT INTO users_activity_log VALUES("1595","27","Added Anne Berquist to Family Planning Assessment","February 23, 2020 - 10:42 pm"); 
INSERT INTO users_activity_log VALUES("1596","27","Added Mercy Buenafuente to Family Planning","February 23, 2020 - 11:07 pm"); 
INSERT INTO users_activity_log VALUES("1597","27","Added Mercy Buenafuente to Family Planning Assessment","February 23, 2020 - 11:11 pm"); 
INSERT INTO users_activity_log VALUES("1598","27","Added Mercy Buenafuente to Family Planning Assessment","February 23, 2020 - 11:13 pm"); 
INSERT INTO users_activity_log VALUES("1599","27","Added Jesse Bel to Family Planning","February 23, 2020 - 11:17 pm"); 
INSERT INTO users_activity_log VALUES("1600","27","Added Jesse Bel to Family Planning Assessment","February 23, 2020 - 11:19 pm"); 
INSERT INTO users_activity_log VALUES("1601","27","Added a Family Planning follow-up date for Jesse Bel","February 23, 2020 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("1602","27","Updated the Family Planning follow-up date for Jesse Bel","February 23, 2020 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("1603","27","Added Katherine Jalandoni to Family Planning","February 23, 2020 - 11:52 pm"); 
INSERT INTO users_activity_log VALUES("1604","27","Added Katherine Jalandoni to Family Planning Assessment","February 23, 2020 - 11:54 pm"); 
INSERT INTO users_activity_log VALUES("1605","27","Added a Family Planning follow-up date for Katherine Jalandoni","February 23, 2020 - 11:55 pm"); 
INSERT INTO users_activity_log VALUES("1606","27","Successfully Backup the database","2020-02-23, 11:55 pm"); 
INSERT INTO users_activity_log VALUES("1607","27","Added a New Prenatal Referral Record","February 25, 2020 10:43 pm"); 
INSERT INTO users_activity_log VALUES("1608","27","Added a New Prenatal Referral Record","February 26, 2020 1:07 am"); 
INSERT INTO users_activity_log VALUES("1609","27","Successfully Backup the database","2020-02-26, 2:43 am"); 
INSERT INTO users_activity_log VALUES("1610","27","Added Prescription to Nadine Lustre","February 26, 2020 - 2:48 am"); 
INSERT INTO users_activity_log VALUES("1611","27","Registered Nikki Gulapa as new Child Patient","February 26, 2020 - 4:32 am"); 
INSERT INTO users_activity_log VALUES("1612","27","Added Julian Denise Sia to Family Planning","February 26, 2020 - 10:12 am"); 



