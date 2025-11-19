<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['lastame'];
		$email = $_POST['email'];
        $password = $_POST['password'];

		
        $sql = "insert into users (name, last name, email, password) values (:name, :last name, :email, :password)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':surname', $last_name); 
        $sqlQuery->bindParam(':email', $email);
          $sqlQuery->bindParam(':password', $password);
           

        $sqlQuery->execute();

        echo "You have logged in";
	}
?>