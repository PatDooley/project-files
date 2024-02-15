use estore;

select *
from User
;

select name, email  -- specify the columns and the order of the columns in the result
from User
;
select name
from User
where email like '%skywalker.net'
;


from User
;
select name, address           -- columns to see in the result
    from User, Customer        -- table(s) with the columns 
where User.uid = Customer.uid  -- the rows where the uid match between the tables
;
-- example of a INNER JOIN

select name, address
    from User   
        INNER JOIN
ON  User.uid = Customer.uid
where name like '%t'
;