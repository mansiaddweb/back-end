#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 
form = cgi.FieldStorage()
print ("Content-type: text/html\r\n\r\n")
id = form.getvalue('id')

db = pymysql.connect(host="localhost",user="root",password="",database="pythoncgi" )
cursor = db.cursor()
cursor.execute("SELECT * from student where id='%s'"%(id))
data = cursor.fetchall()
print ("<html>")
print ("<head>")
print ("<title>Hello - show MYSQL CGI Program</title>")
print ("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>");
print ("</head>")
print ("<body>")
for row in data:
    id = row[0]
    sname = row[1]
    email = row[2]
    password = row[3]
# print('%s'%(id))
# print('%s'%(sname))
# print('%s'%(email))
# print('%s'%(password))
print('<h1 class="text-center text-secondary mt-3">Edit</h1>')
print('<form action="updatedd.py" method="get">')
print('<div  class="container mt-3 bg-warning p-3" style="width: 40%;">')
print ('<label class="col-form-label-lg">Enter Id:</label> <input type="text" name="id" value="%s"/ class="form-control col-4" required/><br/>'%(id))
print ('<label class="col-form-label-lg">Enter Name:</label> <input type="text" name="name" value="%s" class="form-control col-4" required/><br/>'%(sname))
print ('<label class="col-form-label-lg">Enter Email:</label> <input type="text" name="email" value="%s" class="form-control col-4"required/><br/>'%(email))
print ('<label class="col-form-label-lg">Enter Password:</label> <input type="text" name="password" value="%s" class="form-control col-4" required/><br/>'%(password))
print('<div class="text-center"> ')
print ('<input type="submit" value="Update" class="btn btn-success lg mt-3 col-4"/>')
print('</div>')
print('</div>')
print('</form>')
print ('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>');
print ("</body>")
print ("</html>")
db.close()
