use my_db;


drop table if exists tickets;
create table if not exists tickets (
  id int unsigned PRIMARY KEY AUTO_INCREMENT,
  title varchar(255),
  content longtext,
  user_id int unsigned,
  template_id int unsigned,
  created_at datetime not null,
  updated_at datetime not null,
  FOREIGN KEY (user_id) REFERENCES users(id)
  ON DELETE SET NULL
  ON UPDATE CASCADE
);