/**************************************
* create the rental_database database
**************************************/

/* Drop table commands*/
drop database if exists rental_database;
drop table if exists user;
drop table if exists property;
drop table if exists renter;
drop table if exists landlord;




create database rental_database;
Use rental_database;

/*create  the tables*/

create table user (
user_id varchar(15) not null,
user_email varchar(100) not null,
user_password varchar(15) not null,
user_type varchar(15) not null,
primary key (user_id)
);


create table property(
     property_id mediumint auto_increment,
     property_type varchar(15),  /* 1 bedroom, 2 bedroom , 3 bedroom */
     property_for varchar(15) not null,  /* sale or rent*/
	 location varchar(100) not null,
     area_foot float , /* in square foot*/
	 neighbourhood varchar(100),
	 beds bigint,
	 baths decimal(4,2),
	 price decimal(10,2),
	available_date  datetime not null,
	description varchar(255),	
	pets_allowance varchar(15),
	free_heat_water varchar(15),
	housing_hour datetime,
	apt_listed_add varchar(100) not null,
	user_id varchar(15) not null,
    primary key (property_id),
    foreign key (user_id) references user (user_id)
);







create table renter(
	user_id varchar(15) not null,
    first_name varchar(100) not null,
	last_name varchar(100)not null,
	phone varchar(10) not  null,
	occupation varchar(100),
	pets_owned varchar(15),
	rental_interest varchar(100), /* */
	location varchar(100),
	min_price decimal(10,2),
	max_price decimal(10,2),
	moving_date datetime,
    primary key (user_id),
    foreign key (user_id) references user (user_id)
);





create table landlord(
	user_id varchar(15) not null,
    landlord_first_name varchar(100) not null,
	landlord_last_name varchar(100)  not null,
	landlord_phone varchar(15) not null,
	landlord_address varchar(255) not null,
	landlord_city varchar(100),
	landlord_state varchar(100),
    primary key (user_id),
    foreign key (user_id) references user (user_id)
);

/*insert into table values for testing*/

insert into user values('Avneet','avneetk2014@gmail.com','foo','renter');
insert into user values('Rocky', 'avnikaur@bu.edu','12345','renter');
insert into user values('Sparky', 'winresidential@gmail.com','greatheart','landlord');
insert into user values('Avaitor', 'neywmanandcomapny@gmail.com','kat264','landlord');
insert into user values('Simran', 'albertogomez@yahoo.com','buddies9','renter');


insert into property values(1,'loft','sale','Allston',2340,'Brighton',1,1,13000,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2014-05-07','1197 Commonwealth Avenue, Allston,Boston',6);
insert into property values(21, '1 bedroom','rent','Chelsea',2240,'Chelsea',1,2,2200,'2015-01-01','It is a beautiful place near TJs and T-station','not included','included','2014-02-06','119, Chelsea',3);
insert into property values(3, '2 bedroom','sale','Roxbury',2340,'Roxbury',2,1,23000,'2015-01-01','It is a beautiful place near CVS and T-station','included','included','2014-06-06','1197 North way. Roxbury',6);
insert into property values(4, '1 bedroom','rent','Back Bay',2340,'Back Bay',3,2,1300,'2015-01-01','It is a beautiful place near Stop and shop and T-station','included','included','2016-02-06','1197 freelance street,Back Bay ',6);
insert into property values(5, 'loft','rent','Quincy',2340,'Quincy Market',1,1,1300,'2015-01-01','It is a beautiful place near CVS and T-station','included','included','2015-06-06','1133 Quincy market,,Boston',3);
insert into property values(6, 'loft','sale','North Boston',2340,'Brighton',2,1,12000,'2015-04-12','It is a beautiful place near CVS and T-station','included','included','2016-06-06','1197 Washington street, Boston',6);
insert into property values(7, '1 bedroom','sale','Cambridge',2340,'Brighton',1,1,23000,'2015-01-01','It is a beautiful place near google center and T-station','not included','not included','2015-02-06','1133, Santa Street,Boston',6);
insert into property values(8, 'studio','rent','Cambridge',2340,'Brighton',1,1.5,1600,'2015-01-01','It is a beautiful place near Microsoft center and T-station','included','included','2015-02-06','119, Harvard Bridge, Cambridge',6);
insert into property values(9, '1 bedroom','rent','South Boston',2340,'South Boston',1,1,1300,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2013-02-06','1197 Commonwealth Avenue, Allston,Boston',6);
insert into property values(10, '1 bedroom','sale','Somerville',2340,'Medfort',1,1,6000,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2013-03-06','119 Davis Square,Somerville',6);
insert into property values(11, 'loft','sale','Allston',2340,'Brighton',1,1,11000,'2015-01-01','It is a beautiful place near CVS and T-station',' included','included','2013-02-06','1133 Commonwealth Avenue, Allston,Boston',3);
insert into property values(12, '2 bedroom','rent','Allston',2340,'Brighton',2,1,1400,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2013-05-06','1197 Linden Street, brighton',6);
insert into property values(13, 'loft','sale','Quincy',1200,'Downtown',1,1,13000,'2015-01-01','It is a beautiful place near Prudential and T-station',' included','included','2013-02-06','11 ,Traven Street, Boston',3);
insert into property values(14, '1 bedroom','sale','Hynes Convention',2100,'Downtown',1,1,23000,'2015-01-01','It is a beautiful place near Prudential tower and T-station',' not included','included','2013-02-06','119 Newbury Street,Boston',6);
insert into property values(15, '3 bedroom','sale','Allston',2340,'Brighton',3,2,43000,'2016-01-01','It is a beautiful place near CVS and T-station',' not included','included','2013-02-06','1121 Commonwealth Avenue, Allston,Boston',6);
insert into property values(16, 'loft','sale','Boylston',4320,'Downtown',4,3,13000,'2015-01-01','It is a beautiful place near Prudential and T-station','  included','included','2013-02-06','110 Boylston Street,,Boston',6);
insert into property values(17, '2 bedroom','rent','Allston',2440,'Brighton',2,2,2600,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2014-02-06','1140 Commonwealth Avenue, Allston,Boston',3);
insert into property values(18, '3 bedroom','rent','Bay Village',3300,'Bay Village',3,2,4600,'2015-01-01','It is a beautiful place near CVS and T-station',' included','included','2015-02-06','1140 Bay Village,',6);
insert into property values(19, '2 bedroom','rent','Brighton',2340,'Brighton',2,1,2500,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2015-02-06','119 Packards Corner, Brighton, Boston',3);
insert into property values(20, '1 bedroom','rent','Cambridge',1230,'Lechmere',1,1,1700,'2015-01-01','It is a beautiful place near MIT and T-station','  included','included','2015-02-06','110 Broadway, Lechmere',3);
insert into property values(22, 'loft','rent','Back Bay',1230,'Back Bay',2,2,1300,'2015-01-01','It is a beautiful place near CVS and T-station','  included','included','2014-04-05','112, Cleminton Hill,Back Bay ',6);
insert into property values(23, '2 bedroom','rent','Winscon',2200,'Winscon',2,2,4100,'2015-01-01','It is a beautiful place near CVS and T-station','  included','included','2014-05-06','11, gate way, Winscon',3);
insert into property values(24, '3 bedroom','rent','Brookline',3200,'Brookline',3,3,1500,'2015-01-01','It is a beautiful place near CVS and T-station',' not included','included','2015-02-06','1197 Common Street, Brookline',6);



insert into renter values(1,'Avneet','Kaur',2313166311,'professional','included','1 bedroom', 'Allston', 600,1300, '2015-01-01');
insert into renter values(2,'Avni','Kaur',8231314324,'professional','included','2 bedroom', 'Allston', 600,1400, '2015-01-01');
insert into renter values(7,'Alberto','Gomez',8232234131,'professional','included','3 bedroom', 'Cambridge', 600,1500, '2015-01-01');



insert into landlord values(6,'Mark','Gomez',2019384742,'Newman and company, 233, Newbury street', 'Boston','MA');
insert into landlord values(3,'Fiza','Sheehan',2019382742,'33, Washington street', 'Boston','MA');



commit;