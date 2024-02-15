use estore;
drop table if exists User;
-- Relational Data requires each row to be uniquely identified
-- Use the PRIMARY KEY phrase on column or columns that should be uniquely indentify a row

-- PRIMARY KEY tells the DBMS to use this olumn to uniquely a row in the table
-- AUTO INCREMENT tells the DBMS to automatically generate a sequential value for the column
--      this is the easiest way to generate 
-- These are typically used together in tables to create a unique way to specify rows 
create table User (
    uid     int PRIMARY KEY AUTO_INCREMENT, -- have the DBMS automatically generate a uid value
    name    varchar(256),
    phone   varchar(256),
    email   varchar(256)
);
show tables;
describe User;