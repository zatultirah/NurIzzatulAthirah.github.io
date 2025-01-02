<?php

session_start();


$valid_username = "zatul";
$valid_password = "123456";


$error_message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === $valid_username && $password === $valid_password) {
        
        header("Location: profile.html");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UiTM Student E-Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main-content">
        <div class="container mt-5">
            <!-- Login Page -->
            <div class="container mt-5 d-flex justify-content-center" id="login-page">
                <div class="form-container">
                    <h2 class="text-center">Login Page</h2>

                    <?php if (!empty($error_message)): ?>
                    <p style="color: red;"><?= htmlspecialchars($error_message) ?></p>
                    <?php endif; ?>

                    <form class="mt-4" action="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>
                        <input type="hidden" name="page" value="profiles">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3">
        <p class="mb-0">@ Universiti Teknologi Mara</p>
    </footer>
</body>
</html>

