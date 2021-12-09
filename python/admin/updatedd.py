#!/usr/bin/python3

import pymysql
import cgi, cgitb

cgitb.enable() 
form=cgi.FieldStorage()
db=pymysql.connect(host="localhost",user="root",password="",database="pythoncgi")
cursor=db.cursor()
print ("Content-type: text/html\r\n\r\n")
id= form.getvalue('id')
name = form.getvalue('name')
email = form.getvalue('email')
password = form.getvalue('password')
try:
    cursor.execute("update student set name='%s',email='%s',password='%s' where id='%s'" %(name,email,password,id))
    db.commit()
    print("<a href='data.py'>Data Updated</a>")
except:
    db.rollback()
    print("error in updating")
db.close()
	