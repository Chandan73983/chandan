<?php 
session_start();

$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "login_page";
$port = 3308;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * FROM users WHERE email='$email'";

  $result=mysqli_query($conn,$sql);

  $user_data=mysqli_fetch_assoc($result);

  if($user_data && password_verify($password,$user_data['password'])){
    
    $_SESSION['user_id'] = $user_data['id'];
    
   $_SESSION['name']    = $user_data['name'];
    
    $_SESSION['email']   = $user_data['email'];
    

    
    header("Location: homepage.php");
    exit();
  }else{
    echo "Invslid Email and Password";
  }
    
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-family: 'Segoe UI', sans-serif;
    }

    .login-card {
        width: 100%;
        max-width: 460px;
        border: none;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        padding: 40px 30px;
        background: #fff;
    }

    .login-card h2 {
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }

    .login-card .subtitle {
        color: #888;
        font-size: 14px;
        margin-bottom: 30px;
    }

    .form-control {
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
    }

    .input-group-text {
        background: #f8f9fa;
        border: 1px solid #e0e0e0;
        border-radius: 10px 0 0 10px;
        color: #667eea;
    }

    .btn-login {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        color: #fff;
    }

    .form-check-input:checked {
        background-color: #667eea;
        border-color: #667eea;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
        color: #666;
        font-size: 14px;
    }

    .register-link a {
        color: #667eea;
        font-weight: 600;
        text-decoration: none;
    }

    .forgot-link {
        color: #667eea;
        font-size: 14px;
        text-decoration: none;
        font-weight: 500;
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 25px 0;
        color: #aaa;
        font-size: 13px;
    }

    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: #e0e0e0;
    }

    .divider::before {
        margin-right: 12px;
    }

    .divider::after {
        margin-left: 12px;
    }

    .social-btn {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 10px;
        font-size: 14px;
        font-weight: 500;
        color: #444;
        background: #fff;
        transition: 0.3s;
    }

    .social-btn:hover {
        background: #f8f9fa;
        border-color: #667eea;
    }

    @media (max-width: 480px) {
        .login-card {
            padding: 30px 20px;
        }

        .login-card h2 {
            font-size: 22px;
        }
    }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <i class="bi bi-person-circle" style="font-size: 60px; color: #667eea;"></i>
        </div>

        <h2 class="text-center">Welcome Back</h2>
        <p class="subtitle text-center">Login to continue to your account</p>

        <form method="post" id="loginForm" novalidate>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="rahul@example.com"
                        required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter password" required minlength="6">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password', this)">
                        <i class="bi bi-eye"></i>
                    </button>
                    <div class="invalid-feedback">Password must be at least 6 characters.</div>
                </div>
            </div>

            <!-- Remember + Forgot -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit" name="login" class="btn btn-login w-100">
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </button>

            <!-- Divider -->
            <div class="divider">OR</div>

            <!-- Social Login -->
            <div class="row g-2">
                <div class="col">
                    <button type="button" class="social-btn w-100">
                        <i class="bi bi-google text-danger me-1"></i> Google
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="social-btn w-100">
                        <i class="bi bi-facebook text-primary me-1"></i> Facebook
                    </button>
                </div>
            </div>

            <div class="register-link">
                Don't have an account? <a href="register.html">Register here</a>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // ✅ Password Show/Hide Toggle
    function togglePassword(inputId, btn) {
        const input = document.getElementById(inputId);
        const icon = btn.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('bi-eye', 'bi-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('bi-eye-slash', 'bi-eye');
        }
    }

    // ✅ Form Validation (Sirf Invalid Hone Par Rok)
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(e) {
        if (!form.checkValidity()) {
            e.preventDefault();
            form.classList.add('was-validated');
        }
        // ✅ Valid hai toh form normally PHP ko submit hoga
    });
    </script>

</body>

</html>