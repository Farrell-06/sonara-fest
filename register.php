<?php
session_start();
require_once 'config/config.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);

    // Check if email exists
    $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email = '$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $error = "Email sudah terdaftar. Silakan gunakan email lain atau login.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nama_lengkap, email, password, no_telepon) VALUES ('$nama_lengkap', '$email', '$hashed_password', '$no_telepon')";
        
        if (mysqli_query($conn, $query)) {
            $success = "Registrasi berhasil! Silakan login.";
        } else {
            $error = "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SONARA FEST</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
    <style>
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 32px;
        }
        .auth-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 500px;
            box-shadow: var(--glow-violet);
        }
        .form-group {
            margin-bottom: 24px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-muted);
            font-family: var(--font-mono);
            font-size: 0.85rem;
        }
        .form-group input {
            width: 100%;
            padding: 14px 16px;
            background: rgba(0,0,0,0.5);
            border: 1px solid var(--border);
            border-radius: 8px;
            color: #fff;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            outline: none;
            border-color: var(--violet);
            box-shadow: 0 0 10px rgba(138,87,255,0.2);
        }
        .auth-card h2 {
            font-family: var(--font-display);
            font-size: 2.5rem;
            margin-bottom: 8px;
            color: #fff;
            text-align: center;
        }
        .auth-card p.subtitle {
            text-align: center;
            color: var(--text-muted);
            margin-bottom: 32px;
        }
        .btn-full {
            width: 100%;
            text-align: center;
            justify-content: center;
            margin-top: 10px;
            border: none;
            cursor: pointer;
        }
        .auth-links {
            text-align: center;
            margin-top: 24px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }
        .auth-links a {
            color: var(--violet-light);
            text-decoration: none;
        }
        .alert {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 0.9rem;
        }
        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }
        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #86efac;
        }
    </style>
</head>
<body>

<nav class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="index.php" class="nav-logo">SONARA<span>FEST</span></a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
</nav>

<section class="auth-container">
    <div class="auth-card">
        <h2>Join the Frequency</h2>
        <p class="subtitle">Create an account to secure your tickets</p>

        <?php if($error): ?>
            <div class="alert alert-error"><?= $error ?></div>
        <?php endif; ?>
        <?php if($success): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_lengkap">Full Name</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">Phone Number</label>
                <input type="text" id="no_telepon" name="no_telepon" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-primary btn-full">Register</button>
        </form>

        <div class="auth-links">
            Already have an account? <a href="login.php">Login here</a>
        </div>
    </div>
</section>

</body>
</html>
