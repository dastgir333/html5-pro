<?
//the example of incerting data with variable from
//incert.php

mysql_connect("localhost","root","admin");//database connection

	mysql_select_db("employees");

	 

	//inserting data order

	$order = "INSERT INTO data_employees
	            (name, address)

	            VALUES

	            ('$name',

	            '$address')";

	 

	//declare in the order variable

	$result = mysql_query($order);  //order executes

	if($result){
	    echo("<br>Input data is succeed");

	} else{

	    echo("<br>Input data is fail");

	}
	?>
