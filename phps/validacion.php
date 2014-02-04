<?php

	session_start();

	$nick=$_POST["nick"];
	$pass=$_POST["pass"];
	
	$db=mysql_connect("localhost","root","")or die("Connection Error:");
	mysql_select_db("wifi")or die ("Error connecting db");
	
	$SQL="SELECT id,rol FROM usuarios WHERE nick LIKE '$nick' AND password LIKE '$pass'";
	
	$result=mysql_query($SQL) or die("Couldnt execute query");
	$numRows=mysql_num_rows($result);
	
	if($numRows==1){
	$fila=mysql_fetch_array($result,MYSQL_ASSOC);
	$_SESSION["id"]=$fila["id"];
            if($fila["rol"]==1){
                echo "phps/Admin/indexAdmin.php";
            }
            else{
	echo "phps/users/indexUsers.php";
            }
	}
	;
	
	?>