import cgi,cgitb,MYSQLdb

form=cgi.FieldStorage()

first_name=form.getvalue('first_name')

last_name=form.getvalue('last_name')
e_mail=form.getvalue('e-mail')
mobile=form.getvalue('mobile')
fdbk=form.getvalue('feedback')
space=" "               
name=first_name+space+last_name
             
#Sql Coding                   

db=MySQL.connect("localhost","root","","python")
cursor=db.cursor()
sql="""INSERT INTO `feedback`( `Name`, `E-mail`, `Mobile`, `feedback`)
VALUES (name,e_mail,nobile,fdbk)"""
try:
    cursor.execute(sql)
    db.commit()
    
except:
    print sql
db.close()

                   

            
                   
                   
