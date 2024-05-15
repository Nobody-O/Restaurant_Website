<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Restaurant Name</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container mt-5">
    <h1>Register</h1>
    <form action="process-register.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <p class="mt-3">Already have an account? <a href="login.php">Login here</a></p>
</div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
