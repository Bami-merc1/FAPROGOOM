<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

<<<<<<< HEAD
    // Connect to DB
    $conn = new mysqli("localhost", "root", "", "faprogoom_db");
    
    // Check if user exists
    $result = $conn->query("SELECT * FROM admins WHERE username='$user' AND password='$pass'");
=======
    $conn = new mysqli("localhost", "root", "", "faprogoom_db");
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
>>>>>>> 98221e6 (re-edit of the revious commit)

    if ($result->num_rows > 0) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
<<<<<<< HEAD
=======
        exit();
>>>>>>> 98221e6 (re-edit of the revious commit)
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<<<<<<< HEAD
<div class="container mt-5 text-center">
    <h2 style="color: #008000;">FAPROGOOM Admin</h2>
    <form method="POST" class="col-md-4 mx-auto border p-4 bg-light">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button name="login" class="btn btn-success w-100">Login</button>
        <?php if(isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
    </form>
</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAPROGOOM Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> body { background: linear-gradient(#008000, #004d00); } </style>
</head>
<body class="text-white">
<div class="container mt-5 text-center">
    <h2 class="mb-4">FAPROGOOM Admin Login</h2>
    <form method="POST" class="col-md-4 mx-auto border p-4 bg-white text-dark rounded">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button name="login" class="btn btn-success w-100">Login</button>
        <?php if(isset($error)) echo "<p class='text-danger mt-3'>$error</p>"; ?>
    </form>
</div>
</body>
</html>
>>>>>>> 98221e6 (re-edit of the revious commit)
