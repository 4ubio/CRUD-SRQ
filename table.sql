create table users(
				id int auto_increment,
				name varchar(60),
				address varchar(120),
				phone numeric,
				mail varchar(120),
				comment varchar(200),
				primary key(id));

create table sneakers(
				id int auto_increment,
				name varchar(60),
				brand varchar(60),
				price numeric,
				colorway varchar(60),
				collab varchar(60),
				year numeric,
				primary key(id));				