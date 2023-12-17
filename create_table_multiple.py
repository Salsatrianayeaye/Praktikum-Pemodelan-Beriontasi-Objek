import mysql.connector

try:

    db = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="native_crud"
    )

    cursor = db.cursor()
    table_mahasiswa = ["""CREATE TABLE mahasiswa (
            nim VARCHAR(7),
            name VARCHAR(255),
            address Varchar(255),
            PRIMARY KEY(nim)
            )
        """,
        """
            CREATE TABLE matakuliah (
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255)
            )
        """]

    for data in table_mahasiswa:
        cursor.execute(data)

    print("Table mahasiswa created")

except mysql.connector.Error as error:
    print(f"Create table mahasiswa failed: {error}")

finally:
    if db.is_connected():
        db.close()
        print("MySQL connection is closed")