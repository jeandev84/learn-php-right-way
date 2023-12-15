use my_db;

drop table if exists  invoices;
create table if not exists invoices(
   id int unsigned PRIMARY KEY AUTO_INCREMENT,
   amount decimal(10, 4),
   user_id int unsigned,
   FOREIGN KEY (user_id) REFERENCES users(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

insert into invoices (amount, user_id) values (25, 1), (115.95, 1), (10500, 1);

select i.id, i.amount, u.full_name
FROM invoices i
INNER JOIN users u ON i.user_id = u.id
WHERE i.amount < 100;