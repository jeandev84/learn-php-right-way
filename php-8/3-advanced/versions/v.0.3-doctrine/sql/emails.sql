use my_db;


drop table if exists emails;
create table if not exists emails (
  id int unsigned PRIMARY KEY AUTO_INCREMENT,
  subject TEXT,
  status int unsigned,
  text_body LONGTEXT,
  html_body LONGTEXT,
  meta JSON NOT NULL,
  created_at DATETIME NOT NULL,
  sent_at DATETIME DEFAULT NULL
);