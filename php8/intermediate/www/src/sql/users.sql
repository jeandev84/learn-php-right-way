use my_db;

/*
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
   id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
   email varchar(255) NOT NULL,
   full_name varchar(255) NOT NULL,
   is_active boolean DEFAULT 0 NOT NULL,
   created_at datetime NOT NULL,
   KEY `is_active`(`is_active`),
   UNIQUE KEY `email`(`email`)
);

describe users;

ALTER TABLE users
ADD COLUMN foo varchar(150),
DROP COLUMN is_active,
MODIFY full_name varchar(150);


insert into users(email, full_name, is_active, created_at)
values ('john@doe.com', 'John Doe', 1, NOW()), ('jane@doe.com', 'Jane Doe', 1, NOW());

SELECT id, email
FROM users
WHERE is_active = 0
ORDER BY created_at DESC;
*/












