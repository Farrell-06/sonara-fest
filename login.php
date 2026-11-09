<?php
session_start();
require_once 'config/config.php';

// Redirect to dashboard/home if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // or index.php
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
            $_SESSION['email'] = $user['email'];
            
            // Redirect based on your flow. For now, to index.html (or dashboard)
            header("Location: index.php"); 
            exit;
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Email tidak terdaftar.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SONARA FEST</title>
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
            max-width: 450px;
            box-shadow: var(--glow-magenta);
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
            border-color: var(--magenta);
            box-shadow: 0 0 10px rgba(217,70,239,0.2);
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
            color: var(--magenta);
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
        <h2>Welcome Back</h2>
        <p class="subtitle">Enter your frequency</p>

        <?php if($error): ?>
            <div class="alert alert-error"><?= $error ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-primary btn-full">Login</button>
        </form>

        <div class="auth-links">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>
</section>

</body>
</html>
