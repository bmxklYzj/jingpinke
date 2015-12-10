<?php
/**
 * Created by PhpStorm.
 * User: ZLei
 * Date: 2015/10/31
 * Time: 0:50
 * 功能 ： 创建数据表
 */

require_once "Connect.php";

$create_User = "CREATE TABLE User
    (
      User_NumberID varchar(15) PRIMARY key  NOT NULL,
      User_Name varchar(20) NOT NULL ,
      User_Pass varchar(20) NOT NULL,
      User_Nickname varchar(20) NOT NULL
    )";

$create_Res_ppt = "CREATE TABLE Resource_ppt
    (
      Res_ResID INT PRIMARY KEY AUTO_INCREMENT  NOT NULL,
      Res_Resname varchar(30)  NOT NULL,
      Res_Resinst varchar(400) NOT NULL,
      Res_ResChar INT NOT NULL,
      Res_ReadTime INT NOT NULL ,
      Res_Location VARCHAR(100) not null,
      FOREIGN key(Res_ResChar) REFERENCES Catalog(Cat_Char)
    );
    ";

$create_Record_ppt = "CREATE TABLE Record_ppt
    (
      User_NumberID varchar(15) NOT NULL,
      Res_ResID INT NOT NULL,
      Rec_RecNote varchar(40) NOT NULL,
      PRIMARY key (User_NumberID, Res_ResID),
      FOREIGN key (User_NumberID) REFERENCES User(User_NumberID),
      FOREIGN key (Res_ResID) REFERENCES Resource_ppt(Res_ResID)
    )
    ";

$create_Message_ppt = "CREATE TABLE Message_ppt
    (
      Mes_MessageID INT PRIMARY key AUTO_INCREMENT NOT NULL,
      User_NumberID varchar(15) NOT NULL,
      Res_ResID INT NOT NULL,
      Mes_Message varchar(400) NOT NULL,
      Mes_MesTime DATE NOT NULL,
      FOREIGN key (User_NumberID) REFERENCES User(User_NumberID),
      FOREIGN key (Res_ResID) REFERENCES Resource_ppt(Res_ResID)
    )
    ";

$create_Res_video = "CREATE TABLE Resource_video
    (
      Res_ResID INT PRIMARY KEY AUTO_INCREMENT  NOT NULL,
      Res_Resname varchar(30)  NOT NULL,
      Res_Resinst varchar(400) NOT NULL,
      Res_ResChar INT NOT NULL,
      Res_ReadTime INT NOT NULL,
      Res_Location VARCHAR(100) not null,
      FOREIGN key(Res_ResChar) REFERENCES Catalog(Cat_Char)
    );
    ";

$create_Record_video = "CREATE TABLE Record_video
    (
      User_NumberID varchar(15) NOT NULL,
      Res_ResID INT NOT NULL,
      Rec_RecNote varchar(40) NOT NULL,
      PRIMARY key (User_NumberID, Res_ResID),
      FOREIGN key (User_NumberID) REFERENCES User(User_NumberID),
      FOREIGN key (Res_ResID) REFERENCES Resource_video(Res_ResID)
    )
    ";

$create_Message_video = "CREATE TABLE Message_video
    (
      Mes_MessageID INT PRIMARY key AUTO_INCREMENT NOT NULL,
      User_NumberID varchar(15) NOT NULL,
      Res_ResID INT NOT NULL,
      Mes_Message varchar(400) NOT NULL,
      Mes_MesTime DATE NOT NULL,
      FOREIGN key (User_NumberID) REFERENCES User(User_NumberID),
      FOREIGN key (Res_ResID) REFERENCES Resource_video(Res_ResID)
    )
    ";

$create_Catalog = "CREATE TABLE Catalog
    (
      Cat_Name VARCHAR(50) NOT Null,
      Cat_Char INT  NOT NULL  PRIMARY KEY auto_increment
    )
    ";

mysql_query($create_User,$con);
mysql_query($create_Catalog,$con);

mysql_query($create_Res_ppt,$con);
mysql_query($create_Record_ppt,$con);
mysql_query($create_Message_ppt,$con);

mysql_query($create_Res_video,$con);
mysql_query($create_Record_video,$con);
mysql_query($create_Message_video,$con);

mysql_close($con);

?>