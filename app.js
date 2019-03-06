var mysql = require('mysql');

var connection = mysql.createConnection({
    host: 'connect-c9.ckrgpw7vzckl.us-east-2.rds.amazonaws.com',
    port: '3306',
    user: 'tbdUser',
    password: 'TBD_coolRanchDoritos',
    database: 'tbd_Database'
});

// connection.connect(function(err) {
//     if (err) {
//         console.error('Database connection failed ' + err.stack);
//         return;
//     }
//     console.log('Database connection successful');
// });

// To access database command prompt, use following command in bash, and enter password:
// $ mysql -h connect-c9.ckrgpw7vzckl.us-east-2.rds.amazonaws.com -P 3306 -u tbdUser -p

var q = 'SELECT * FROM users';
connection.query(q, function(err, results) {
    if (err) throw new err;
    console.log(results);
    connection.end();
});