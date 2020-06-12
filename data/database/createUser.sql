CREATE TABLE user (
    id INTEGER PRIMARY KEY,
    nom TEXT,
    prenom TEXT,
    mail TEXT NOT NULL UNIQUE,
    mdp TEXT NOT NULL,
    admin BOOLEAN DEFAULT false NOT NULL
);