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
        $hashed_password = $row['pwd']; 
        if (password_verify($_POST["password"], $hashed_password)) {
            echo '<script>alert("You have successfully logged in")</script>';
            header("refresh:1.5;url=index.php");
            exit();
        } else {    
            echo '<script>alert("Your password is incorrect!")</script>';
            header("refresh:1.5;url=login.php");
            exit();
        }
    } else {
        echo '<script>alert("User not found!")</script>';
        header("refresh:1.5;url=login.php");
        exit();
    }
} else {
    echo '
    <div class="wrapper">
        <script src="https://kit.fontawesome.com/887e44e44e.js" crossorigin="anonymous"></script>
	<form action="login.php" method="post">
   		 Username<br>
    		<input type="text" name="username" class="input" required><br>
    		Password<br>
   		<input type="password" name="password" class="input" required><br>
    		<input type="submit" value="Start" class="submitBtn">
	</form>

        <a href="register.php">Register</a><br>
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
        color: black;
        height: 100vh; 
        margin: 0; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
    }

    .wrapper {
        width: 80%; 
        max-width: 400px;
        padding: 20px;
        background-color: white;
        box-shadow: 0px 3px gray;
        border-radius: 10px; 
    }

    .submitBtn {
        width: 100%; 
        margin-bottom: 10px; 
        border-radius: 3px; 
    }

    .input {
        width: 100%;
        border-radius: 3px; 
        background-color: white; 
        margin-bottom: 10px; 
    }
</style>
