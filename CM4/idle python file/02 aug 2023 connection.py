import mysql.connector as c
con = c.connect(host="localhost", user="root", passwd="1234", database="college")
print(con)

# creation of cursor
cur=con.cursor()
try:
    cur.execute("drop table emp")
    con.commit()
except:
    con.rollback()
con.close()

