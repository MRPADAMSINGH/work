import mysql.connector as c
con = c.connect(host="localhost", user="root", passwd="1234", database="college")
if con.is_connected():
    print("Successfully Connected......")
else:
    print("Connection Error!!!!")

# creation of cursor
cur=con.curser()
try:
    dbs=cur.execute("show databases")
except:
    con.rollback()
for x in cur:
    print(x)
con.close()
