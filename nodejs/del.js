var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "org"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "DELETE FROM student WHERE address = 'Delhi'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("Number of records deleted: " + result.affectedRows);  
});  
}); 
