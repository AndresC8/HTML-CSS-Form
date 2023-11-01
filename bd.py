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

    def mostrarRegistros(self):
        query = 'SELECT * FROM datos'
        self.cursor.execute(query)
        registros = self.cursor.fetchall()
        for i in registros:
            print(i)

    def eliminarRegistro(self, ID):
        query = 'DELETE FROM datos WHERE ID = %s'
        self.cursor.execute(query, (ID,))
        self.conexion.commit()


ID = int(input('ID del registro a eliminar: '))

conexion = Conexion()
conexion.eliminarRegistro(ID)
conexion.mostrarRegistros()

conexion.cursor.close()
