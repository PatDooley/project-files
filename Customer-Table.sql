-- Switch to the database we want table to be in
use estore;
drop table if exists Customer;
-- remove any existing cop of table so we can recreate ut
create table Customer (
    cid   int,
    name  varchar(256),
    phone varchar(16),
    email varchar(256)
);
show tables; -- display tables in database
describe Customer; -- display all the attributes of the Customer table