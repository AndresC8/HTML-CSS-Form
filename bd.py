import pymysql

class Conexion:
    def __init__(self):
        self.conexion = pymysql.connect(
            host='localhost',
            user='root',
            password='',
            database='formulario'
        )
        self.cursor = self.conexion.cursor()
        cursor = self.cursor

    def mostrarDatos(self):
        query = 'SELECT * FROM datos'
        self.cursor.execute(query)
        registros = self.cursor.fetchall()
        for fila in registros:
            print(fila)

    
conexion = Conexion()
conexion.mostrarDatos()

conexion.cursor.close()
