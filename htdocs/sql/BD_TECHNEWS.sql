Create Table _news(
	id serial NOT NULL,
	title varchar NOT NULL,
	text_news varchar NOT NULL,
	autor varchar NOT NULL,
	img varchar NOT NULL,
	destaque boolean NOT NULL,
	PRIMARY KEY(id)
);

Create Table _users(
	id serial NOT NULL,
	username varchar NOT NULL,
	email varchar NOT NULL,
	senha varchar NOT NULL,
	PRIMARY KEY(id)
);