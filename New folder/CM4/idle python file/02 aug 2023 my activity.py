import mysql.connector as c
con = c.connect(host="localhost", user="root", passwd="", database="")
if con.is_connected():
    print("Successfully Connected......")
else:
    print("Connection Error!!!!")


def new():
    my_list=["create database none",
         "use none",
         "create table emp (id int(20),name varchar(40), city varchar(40), salary int(20))",
         "desc emp",
         "insert into emp values(01,'Padam Singh', 'Delhi',15000)",
         "select * from emp"
         ]

    for i in my_list:
        cursor = con.cursor()
        query = "i"
        my = len(my_list)
        for j in range(len(my_list)):
            if i == my_list[0]:
                print("Database create Successfully Database Name: first")
                cursor.execute(i)
                break
            if i == my_list[1]:
                print("use factory database")
                cursor.execute(i)
                break
            if i == my_list[2]:
                print("Table create successfully! table name: emp")
                cursor.execute(i)
                break
            if i == my_list[3]:
                print("Describe table: emp")
                cursor.execute(i)
                table = cursor.fetchall()
                for des in table:
                    print(des)
                break
            if i == my_list[4]:
                print("Insert values into the table Successfully")
                cursor.execute(i)
                break
            if i == my_list[5]:
                print("Data into the emp table")
                cursor.execute(i)
                table = cursor.fetchall()
                for empdata in table:
                    print(empdata)
                break
    cursor.close()
    con.close
new()
