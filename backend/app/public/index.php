<?php
  	$mysqli = mysqli_connect("mariadb","user","password","docker_php");

  	$result = mysqli_query($mysqli, "SELECT * FROM Employees");

  	$followingdata = $result->fetch_assoc();
	var_dump($followingdata);


	echo 'Hello World';

	for ($i = 1; $i <= 10; $i++) {
    	?>
    	<input type="button" 		value=<?= $i ?>>
    	<?php
	}
?>
