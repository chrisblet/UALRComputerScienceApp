CREATE TABLE users ()
    username VARCHAR(255) PRIMARY KEY
    //password VARCHAR(255)
);

INSERT INTO users (username)
VALUES
    ('student1'),
    ('student2');


ALTER TABLE table_name
  ADD column_name column_definition;