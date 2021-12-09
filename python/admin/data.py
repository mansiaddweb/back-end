#!/usr/bin/python3

import pymysql
import cgi,cgitb

cgitb.enable() 
form = cgi.FieldStorage()
db = pymysql.connect(host="localhost",user="root",password="",database="pythoncgi" )
cursor = db.cursor()
cursor.execute("SELECT * from student")
data = cursor.fetchall()

print ("Content-type:text/html\r\n\r\n")
print ("<html>");
print ("<head>");
print ("<title>Hello - show MYSQL CGI Program</title>");
print ("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>");
print ("</head>");
print ("<body>");
print('<h1 class="text-center mt-5 mb-5">DASHBOARD</h1>')
print ("<table class='table container'>")
print ("<thead>")
print ("<tr>")
print (" <th scope='col'>ID</th>")

print ("   <th scope='col'>Name</th>")

print ("      <th scope='col'>Email</th>")

print ("      <th scope='col'>Password</th>")
print ("      <th scope='col'>Update</th>")
print ("      <th scope='col'>Delete</th>")
print ("    </tr>")

print ("  </thead>")

print ("  <tbody>")
# print (data)
for row in data:
    id = row[0]
    name = row[1]
    email = row[2]
    password = row[3]
    print('    <tr>')
    print('     <th scope="row">%s</th>'%(id))
    print('     <td>%s</td>'%(name))
    print('   <td>%s</td>'%(email))
    print('     <td>%s</td>'%(password))
    print(' <td><a href="update.py?id=%s"> Edit</a></td>'%(id))
    print(' <td><a href="delete.py?id=%s">Delete</a></td>'%(id))
    print('    </tr>')
    # print ("<p>Id=%s,Name=%s,Email=%s,Password=%s</p>" %(id, name, email, password));
print("</table>")
print("<br/>");
print ('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>');
print ("</body>");
print ("</html>");
db.close()
