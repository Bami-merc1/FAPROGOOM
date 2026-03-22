<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Connect to DB
    $conn = new mysqli("localhost", "root", "", "faprogoom_db");
    
    // Check if user exists
    $result = $conn->query("SELECT * FROM admins WHERE username='$user' AND password='$pass'");

    if ($result->num_rows > 0) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<div class="container mt-5 text-center">
    <h2 style="color: #008000;">FAPROGOOM Admin</h2>
    <form method="POST" class="col-md-4 mx-auto border p-4 bg-light">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button name="login" class="btn btn-success w-100">Login</button>
        <?php if(isset($error)) echo "<p class='text-danger'>$error</p>"; ?>
    </form>
</div>