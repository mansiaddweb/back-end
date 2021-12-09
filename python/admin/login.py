#!/usr/bin/python3

import pymysql
import cgi,cgitb

cgitb.enable()
form= cgi.FieldStorage()
db = pymysql.connect(host="localhost",user="root",password="",database="pythoncgi")
cursor= db.cursor()

print ("Content-type: text/html\r\n\r\n")

email=form.getvalue('email')
password = form.getvalue('password')

try:
    cursor.execute("select * from student where email='%s' and password='%s'"%(email,password))
    data=cursor.fetchall()
    # db.commit()
    if(data):
        
       
        print('<a href="data.py">Login success</a>')
    else:
        print('<a href="login.py">Login failed</a>')
except:
    db.rollback()
    print('error in query')

db.close()