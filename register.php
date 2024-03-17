<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'dbConn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["password"]) && isset($_POST["username"]) && isset($_POST["email"])) {
        // Check if the username already exists
        $check_sql = "SELECT * FROM users WHERE uid = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $_POST["username"]);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            echo '<script>alert("Username already exists!");</script>';
            echo '<meta http-equiv="refresh" content="1.5;url=register.php">';
            exit();
        }

        // Hash the password
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // Insert user data into the database
        $insert_sql = "INSERT INTO users (uid, pwd, email) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("sss", $_POST["username"], $hashed_password, $_POST["email"]);

        if ($insert_stmt->execute()) {
            echo '<script>alert("Registration successful! You can now login.");</script>';
            echo '<meta http-equiv="refresh" content="1.5;url=login.php">';
            exit();
        } else {
            echo '<script>alert("Registration failed. Please try again later.");</script>';
            echo '<meta http-equiv="refresh" content="1.5;url=register.php">';
            exit();
        }
    }
}
?>

<div class="wrapper">
    <script src="https://kit.fontawesome.com/887e44e44e.js" crossorigin="anonymous"></script>
    <form action="register.php" method="post">
        Username<br>
        <input type="text" name="username" required><br>
        Password<br>
        <input type="password" name="password" required><br>
        Email<br>
        <input type="email" name="email" required><br>
        <input type="submit" value="Sign Up" class="submitBtn">
    </form>

    <a href="login.php">Login</a><br>
    <a href="forgot.php">Forgot Password?</a>
</div>

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

    form {
        background-color: white;
        box-shadow: 3px, 3px, gray;
    }

    .wrapper {
        width: 30dvh;
        height: 20dvh;
        margin-top: 40dvh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

