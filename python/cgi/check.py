#!/usr/bin/python3

import cgi, cgitb 
cgitb.enable()
form = cgi.FieldStorage() 


if form.getvalue('maths'):
   math_flag = "ON"
else:
   math_flag = "OFF"

if form.getvalue('physics'):
   physics_flag = "ON"
else:
   physics_flag = "OFF"

print ("Content-type:text/html\r\n\r\n")
print ("<html>");
print ("<head>");
print ("<title>Checkbox - Third CGI Program</title>");
print ("</head>");
print ("<body>");
print ("<h2> CheckBox Maths is : %s</h2><h2> CheckBox Physics is : %s</h2>" %(math_flag, physics_flag));

print ("</body>");
print ("</html>");
