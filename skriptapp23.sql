drop database if exists edunovapp23;
create database edunovapp23;
use edunovapp23;
create table smjer(
    sifra int,
    naziv varchar(50),
    trajanje int,
    cijena decimal(18,2),
    certifikat boolean
);

create table grupa(
    sifra int,
    naziv varchar(50),
    smjer int,
    predavac int,
    datumpocetka datetime
);

create table polaznik(
    sifra int,
    osoba int,
    brojugovora varchar(50)
);

create table predavac(
    sifra int,
    osoba int,
    iban varchar(32)
);

create table osoba (
    sifra int,
    ime varchar(50),
    prezime varchar(50),
    oib char(11),
    email varchar(100)
);

create table clan(
    grupa int,
    polaznik int
);
