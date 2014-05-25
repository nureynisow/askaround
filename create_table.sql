drop table if exists question_tag;
drop table if exists tags;
drop table if exists vote;
drop table if exists reponse;
drop table if exists question;
drop table if exists user;

create table user(
	pseudo varchar(32) primary key,
	email varchar(32) not null unique,
	nomcomplet varchar(64) not null,
	mdp varchar(16) not null
);
create table question(
	idQ integer primary key,
	dateQ date not null ,
	titre varchar(128) not null,
	question text not null,
	pseudo varchar(32) ,
		foreign key (pseudo) references user(pseudo)
);

create table reponse(
	idR integer primary key,
    idQ integer not null,
	dateR date not null,
	reponse text not null,
	pseudo varchar(32) ,
		foreign key (idQ) references question(idQ),
		foreign key (pseudo) references user(pseudo)
);

create table vote(
	 idrep integer,
	 pseudo varchar(32),
		 primary key (idrep,pseudo),
		 foreign key (idrep) references reponse(idR),
		 foreign key (pseudo) references user(pseudo)
);

 create table tags(
 	tag varchar(32) primary key
 );

 create table question_tag(
 	idQ integer not null,
 	tag varchar(32) not null,
 		primary key(idQ,tag),
 		foreign key (idQ) references question(idQ),
 		foreign key (tag) references tags(tag)
 );
