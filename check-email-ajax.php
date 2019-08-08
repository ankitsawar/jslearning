<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "phplearning";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	// echo "Connected successfully";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];


		$sql = "SELECT email from users WHERE email = '".$email."'";

		$sql_execute = mysqli_query($conn, $sql);
		if(mysqli_num_rows($sql_execute) == 1){
			echo json_encode(array(
				"message" => "isMember"
			));
		} else {
    		// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    		echo json_encode(array(
				"message" => "notMember"
			));
		}
	}

?>