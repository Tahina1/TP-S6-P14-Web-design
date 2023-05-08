CREATE DATABASE TP_WEB_DESIGN;
ALTER DATABASE TP_WEB_DESIGN OWNER TO admin;
\c tp_web_design admin;

CREATE TABLE article(
    ID SERIAL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    synopsis VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    picture TEXT
);


CREATE TABLE admin(
    ID SERIAL PRIMARY KEY,
    USERNAME VARCHAR(50) NOT NULL,
    PASSWORD VARCHAR(50) NOT NULL
);


INSERT INTO admin (username, password) VALUES('Tahina', 'root');



