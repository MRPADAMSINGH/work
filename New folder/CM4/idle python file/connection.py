import mysql.connector as c
con = c.connect(host="localhost", user="root", passwd="9852", database="college")
if con.is_connected():
    print("Successfully Connected......")
else:
    print("Connection Error!!!!")

# creation of cursor
cursor = con.cursor()
  
# assign data query
query1 = "desc students"
  
# executing cursor
cursor.execute(query1)
  
# display all records
table = cursor.fetchall()

# describe table
print('\n Table Description:')
for attr in table:
    print(attr)
  
# assign data query
# executing cursor
cursor.execute("select * from students")
  
# display all records
table = cursor.fetchall()


# fetch all columns
print('\n Table Data:')
for row in table:
    print(row)
# closing cursor connection
cursor.close()
  
# closing connection object
con.close()
