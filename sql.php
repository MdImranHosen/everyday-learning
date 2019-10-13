///::::::::::::::::: Mysql two table as tableOne in tableTwo s tbl_tid foreign key and primary key ::::::::::::///////////
CREATE TABLE tableOne
(
  tbl_oid  int NOT NULL AUTO_INCREMENT,
  tbl_tid int NOT NULL,
  PRIMARY KEY (tbl_oid, tbl_tid),
  FOREIGN KEY(tbl_tid) REFERENCES tableTwo(tbl_tid)
);
