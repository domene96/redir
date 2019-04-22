<?php
/*----------------Conexion a la BD--------------------------------
Esta seccion del codigo esta hecha con la intencion de generar las conexiones,
que son necesarias para esta parte de la familia de pagians que se manejan en este dominio.*/

/*Address of the server where db is installed.
Esta variable contiene la direccion IP o en dado momento el.  DNS que tendra el VPS de la Base de datos.*/
$servername = "localhost";

/*Username to connect to the db.
Aqui ponemos el username que usara para entrar a la base de Datos.*/
$username = "domeneco_soporte";

/*Password to connect to the db.
Es la contrasenia que se usa para entrar a la base de datos.*/
$password = "soporte";

/*Name of the db under which the table is created.
Aqui especificamos la base de datos a la cual vamos a acceder.*/
$dbName = "domeneco_redir";

/*Establishing the connection to the db.
Esta es solo una conexion, se pueden hacer mas.
Con esto se hace referencia a como es que puedo tener una conexion, que solo se encarge de hacer selects en una base de datos, y puedo, tambien tener por otro lado una conexion que haga solo INSERTS o SELECTS (cualquier cosa) en el mismo codigo pero con otra variable.*/
$conn = new mysqli($servername, $username, $password, $dbName);

/*checking if there were any error during the last connection attempt.
Se verifica la conexion viendo si se puede establecer la conexion.
En caso de que no sea posible se despliega una mensaje de error.*/

//Cambiar a que redireccione a una pagian de error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*---------------Fin del establecimiento de coenxion---------------
En este punt oya tenemos una conexion funcional almacenada en conn.
Esto debido a que no se presento el error de conexion.
Ahora seguimos con la declaracion y ejecucion de querys necesarios*/

//No cerramos el script porque lo usaremos en otros puntos del codigo. Lease se planea importar el script.
