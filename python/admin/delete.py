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
cursor.execute("delete from student where id=%s" %(id))
db.commit()
print("<a href='data.py'>Data Deleted</a>")

db.close()
	