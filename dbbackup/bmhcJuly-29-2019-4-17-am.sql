
CREATE TABLE `chicks` (
  `chicks_id` int(11) NOT NULL AUTO_INCREMENT,
  `chicksname` varchar(30) NOT NULL,
  `fblink` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `beautypercentage` int(100) NOT NULL,
  PRIMARY KEY (`chicks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

INSERT INTO chicks VALUES("45","Darriene Gayle Dusaran","https://www.facebook.com/darrienegayle.dusaran","https://www.instagram.com/gayle_du/","80"); 
INSERT INTO chicks VALUES("46","Danielle Gwen Dusaran","https://www.facebook.com/gwenyydusaran","https://www.instagram.com/dsrn_/","80"); 
INSERT INTO chicks VALUES("51","Kherrie Tejare","https://www.facebook.com/kherrieluchi.tejare","https://www.instagram.com/_kherriebels/","100"); 
INSERT INTO chicks VALUES("56","Franze Beatriz Caballero","https://www.facebook.com/franzefries","https://www.instagram.com/franzebeatriz/","90"); 
INSERT INTO chicks VALUES("57"," Juliana Gevela Llaguno","https://www.facebook.com/Julillaguno13","https://www.instagram.com/yanaallaguno/","90"); 
INSERT INTO chicks VALUES("58"," Zoe Dominique Gudio","https://www.facebook.com/thedarkzoe","https://www.instagram.com/zoegudio/","90"); 





CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("8","22","Import","July 29, 2019","3:40 am","Successfully Imported Database"); 




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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO users VALUES("21","Kherrie Tejare","Coming Soon","Medical Officer","kherrie","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj6cbed987e46bd7dc15cb13cbd1d2d5f445e41514","1","July 29, 2019, 2:00 am","July 29, 2019","1:58 am"); 
INSERT INTO users VALUES("22","Jesse Franco Latosa","No License","Medical Officer","admin","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagjd033e22ae348aeb5660fc2140aec35850c4da997","1","July 29, 2019, 4:15 am","July 29, 2019","2:00 am"); 
INSERT INTO users VALUES("23","Daniel Andrew Go","Drivers License","Midwife","daniel","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj1ec558a60b5dda24597816c924776716018caf8b","1","","July 29, 2019","3:00 am"); 
INSERT INTO users VALUES("24","John Phillip Dela Cruz","Mothers License","Nurse","jp","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4","1","","July 29, 2019","3:01 am"); 




CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("43","22","Updated account of Kherrie Tejare","July 29, 2019 - 3:00 am"); 
INSERT INTO users_activity_log VALUES("44","22","Added Daniel Andrew Go as New User","July 29, 2019 - 3:00 am"); 
INSERT INTO users_activity_log VALUES("45","22","Added John Phillip Dela Cruz as New User","July 29, 2019 - 3:01 am"); 
INSERT INTO users_activity_log VALUES("46","22","Deactivated User Account","July 29, 2019 - 3:51 am"); 
INSERT INTO users_activity_log VALUES("47","22","Activated User Account","July 29, 2019 - 3:52 am"); 



