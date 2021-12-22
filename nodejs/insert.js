var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "org"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO student (id, Name, email, password, mobile, address) VALUES ('1', 'Kumar', 'ks@gmail.com','123', '9879870987', 'Allahabad')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
}); 
})