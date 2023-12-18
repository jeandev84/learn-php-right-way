use my_db;


drop table if exists  invoice_items;
create table if not exists invoice_items(
   id int unsigned PRIMARY KEY AUTO_INCREMENT,
   invoice_id int unsigned,
   description varchar(255),
   quantity integer,
   unit_price decimal(10, 2),
   FOREIGN KEY (invoice_id) REFERENCES invoices(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);







