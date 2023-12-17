import mysql.connector

try:

    db = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="native_crud"
    )

    cursor = db.cursor()
    sql = """INSERT INTO mahasiswa values (%s, %s, %s)
        """
    values = [
            ("1106045","Eko","Garut"),
            ("1106049","Gandana","Garut"),
            ("1106051","Haris","Garut"),
            ("1106052","Imam","Garut"),
            ("1106069","Robi","Garut"),
        ]

    for value in values:
        cursor.execute(sql, value)
        db.commit()

    print("Insert data mahasiswa success")

except mysql.connector.Error as error:
    print(f"Failed insert data mahasiswa: {error}")

finally:
    if db.is_connected():
        db.close()
        print("MySQL connection is closed")