-- Add some files to the user table

-- The SQL INSERT statement is how you add rows to a table

-- Insert into table (columns-in-the-table-you-have-data-for)
--      Values(list-of-values-for-the-columns)

-- Note: order of the values must match the order of the number of columns
use estore; 

insert into User
    (name, phone, email)
    Values
    ('Pat', '123-456-7890', 'patdooley@outlook.com'),
    ('liv', '123-456-7890', 'liv@gmail.com');

    select * from User; -- display all rows and columns in User table

