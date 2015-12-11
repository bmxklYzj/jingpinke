<?php
/**
 * Created by PhpStorm.
 * User: yzj
 * Date: 2015/12/10
 * Time: 16:51
 */
require_once "../connect.php";
$admin="
create table user
(
  name char(100),
  password char(100),
  PRIMARY KEY(name)
);";

$user="
create table user
(
   user_id              int not null AUTO_INCREMENT,
   xuehao               int,
   username             varchar(100),
   nicheng              varchar(100),
   password             varchar(100),
   primary key (user_id)
);";

$video="
create table video
(
   video_id             int not null AUTO_INCREMENT,
   title                varchar(300),
   info                 varchar(3000),
   location             varchar(200),
   commentid            int,
   orderbyid            int,
   clicktime            int,
   charpter_id int,
   FOREIGN key(charpter_id) REFERENCES charpter(charpter_id),
   primary key (video_id)
);";

$uservideo="
create table uservideo
(
    videouser_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id int ,
    video_id int,
    video_lastwatchtime DECIMAL(12,7) DEFAULT 0,
    video_totwatchtime DECIMAL(15, 7) DEFAULT 0,
    video_progress DOUBLE DEFAULT 0,
    video_click int DEFAULT 0,
    FOREIGN KEY(user_id) REFERENCES user(user_id),
    FOREIGN KEY(video_id) REFERENCES video(video_id)
);";

$comment="
create table usercomment
(
  usercomment_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  content varchar(500),
  user_id int,
  video_id int,
  FOREIGN KEY(user_id) REFERENCES user(user_id),
  FOREIGN KEY(video_id) REFERENCES video(video_id)
);";

$charpter="
create table charpter(
  charpter_id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  title char(200)
);";
mysql_query($user);
mysql_query($admin);
mysql_query($video);
mysql_query($uservideo);
mysql_query($comment);
mysql_query($charpter);