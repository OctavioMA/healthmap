<?php
	require_once 'connect.php';

	$db = new DB_Connect();
	$con = $db->connect();

    $usuario= $_POST['usu'];
	$pass = $_POST['pass'];
    $arr = array();

    $pass = md5($pass);
    $result = $con->query("Select * from users where email='$usuario' and password='$pass'");
    if(!result)
    	 die('Consulta no válida: ' . mysql_error());
    else
        $arr = $result->fetch_array();

    echo json_encode($arr);
    mysqli_close($con);
    //$db->close($con);

?>