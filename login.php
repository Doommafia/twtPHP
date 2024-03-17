<?php
	include_once 'dbConn.php';

	if(isset($_POST["password"]) && isset($_POST["username"])){
	    $sql = "SELECT * FROM users WHERE uid = ?";
    		$stmt = $conn->prepare($sql);
    		$stmt->bind_param("s", $_POST["username"]);
    		$stmt->execute();
    		$result = $stmt->get_result();

    	    if ($result->num_rows == 1) {
        	$row = $result->fetch_assoc();
        	$hashed_password = $row[$_POST["password"]]; // Assuming password is stored hashed
        	if (password_verify($pass, $hashed_password)) {
			echo'<script>alert("You have successfully logged in")</script>';
			header("refresh:1.5;url=index.php");
        	} else {	
		echo'<script>alert("Your password is incorrect!")</script>';
		header("refresh:1.5;url=login.php");
		}
    	} else {
	echo'<script>alert("User not found!")</script>';
	header("refresh:1.5;url=login.php");
	}
    }else{
    echo
        '<div class="wrapper">
            <script src="https://kit.fontawesome.com/887e44e44e.js" crossorigin="anonymous"></script>
            <form action="login.php" method="post">
                Username</br>
                <input type="text" name="username"></input></br>
                Password</br>
                <input type="password" name="password"></input></br>
                <input type="submit" value="Start" class="submitBtn"></input>
            </form>            

            <a href="signup.php">Sign up</a></br>
            <a href="forgot.php">Forgot Password?</a>
        </div>';
    }
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

:root {
    background: radial-gradient(circle, #0A0A33 36%, #000068 100%);
}
body {
    font-family: Roboto, sans-serif;
    color: white;
    display: flexbox;
    justify-content: center;
    align-items: center;
}
form{
    background-color: white;
	box-shadow: 3px, 3px, gray;
}
.wrapper{
    width: 30dvh;
    height: 20dvh;
    margin-top: 40dvh;
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
