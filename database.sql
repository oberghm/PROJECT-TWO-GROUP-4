CREATE DATABASE IF NOT EXISTS db_molcurphotos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE db_molcurphotos;

CREATE TABLE tbl_blog (
  id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(400) NOT NULL,
  comment text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbl_booking (
  id int(11) NOT NULL,
  fldName varchar(50) NOT NULL,
  fldEmail varchar(150) NOT NULL,
  fldPhone varchar(15) NOT NULL,
  fldType varchar(150) NOT NULL,
  fldMessage text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbl_faq (
  id int(11) NOT NULL,
  subject varchar(50) NOT NULL,
  question text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbl_partnership (
  id int(11) NOT NULL,
  fldName varchar(150) NOT NULL,
  fldEmail varchar(150) NOT NULL,
  fldPhone varchar(15) NOT NULL,
  fldType varchar(150) NOT NULL,
  fldAccounts varchar(150) NOT NULL,
  fldMessage varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE tbl_blog
  ADD PRIMARY KEY (id);

ALTER TABLE tbl_booking
  ADD PRIMARY KEY (id);

ALTER TABLE tbl_faq
  ADD PRIMARY KEY (id);

ALTER TABLE tbl_partnership
  ADD PRIMARY KEY (id);


ALTER TABLE tbl_blog
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tbl_booking
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tbl_faq
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE tbl_partnership
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
