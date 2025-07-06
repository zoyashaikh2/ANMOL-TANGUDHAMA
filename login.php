<?php
session_start();

// Initialize error message
$error_msg = "";

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve username and password from POST request
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if username and password match
    if ($username === 'admin' && $password === 'admin') {
        // Set session variables
        $_SESSION['user_id'] = 'admin'; // Use a dummy value for session
        $_SESSION['username'] = 'admin';

        // Redirect to admin home page
        header('Location: admin/index.php');
        exit();
    } else {
        // Set error message for incorrect credentials
        $error_msg = '<div class="ui warning message">Invalid Username or Password</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Semantic UI CSS for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
    <div class="ui container">
        <h2 class="ui header">Login Here</h2>
        <div class="ui grid">
            <div class="six wide column centered">
                <?php echo $error_msg; ?>
                <form action="login.php" method="post" class="ui form">
                    <div class="field">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <button name="submit" class="ui primary button" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Include Semantic UI JS for styling -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>
