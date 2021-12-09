#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 

form = cgi.FieldStorage()
print ("Content-type: text/html\r\n\r\n")
id = form.getvalue('id')
name = form.getvalue('name')
email = form.getvalue('email')
password = form.getvalue('password')
cp = form.getvalue('cpassword')
db = pymysql.connect(host="localhost",user="root",password="",database="pythoncgi" )
cursor = db.cursor()
print ("<html>")
print ("<head>")
print ("<title>Hello - Inserted MYSQL CGI Program</title>")
print ("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>");
print ("</head>")
print ("<body>")
try:
	cursor.execute("insert into student(id,name,email,password) values('%s','%s','%s','%s')" %(id,name,email,password))
	db.commit()
	print("<a href='loginn.html'>Data Inserted</a>")
except:
    db.rollback()
    print("error in Inserting")
print ('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>');
print ("</body>")
print ("</html>")
db.close()
