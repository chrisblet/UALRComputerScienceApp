{"changed":true,"filter":false,"title":"schema.sql","tooltip":"/schema.sql","value":"CREATE TABLE users ()\n    username VARCHAR(255) PRIMARY KEY\n    //password VARCHAR(255)\n);\n\nINSERT INTO users (username)\nVALUES\n    ('student1'),\n    ('student2');\n\n\nALTER TABLE table_name\n  ADD column_name column_definition;","undoManager":{"mark":-2,"position":0,"stack":[[{"start":{"row":12,"column":36},"end":{"row":12,"column":40},"action":"remove","lines":["    "],"id":71}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":36},"end":{"row":12,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"start","mode":"ace/mode/sql"}},"timestamp":1551814269448}