<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "login_page";
$port = 3308;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, phone, password) 
            VALUES ('$name', '$email', '$phone', '$hash')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error aa gya hai: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

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

    .register-card {
        width: 100%;
        max-width: 500px;
        border: none;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        padding: 40px 30px;
        background: #fff;
    }

    .register-card h2 {
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }

    .register-card .subtitle {
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

    .btn-register {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 600;
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }

    .btn-register:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        color: #fff;
    }

    .login-link {
        text-align: center;
        margin-top: 20px;
        color: #666;
        font-size: 14px;
    }

    .login-link a {
        color: #667eea;
        font-weight: 600;
        text-decoration: none;
    }

    @media (max-width: 480px) {
        .register-card {
            padding: 30px 20px;
        }

        .register-card h2 {
            font-size: 22px;
        }
    }
    </style>
</head>

<body>

    <div class="register-card">
        <h2 class="text-center">Create Account</h2>
        <p class="subtitle text-center">Fill in the details to get started</p>

        <form method="post" id="registerForm" novalidate>

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                        required>
                    <div class="invalid-feedback">Please enter your name.</div>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="youname@example.com"
                        required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Phone Number</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="9876543210"
                        pattern="[0-9]{10}" required>
                    <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
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

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                        placeholder="Re-enter password" required>
                    <button class="btn btn-outline-secondary" type="button"
                        onclick="togglePassword('confirmPassword', this)">
                        <i class="bi bi-eye"></i>
                    </button>
                    <div class="invalid-feedback" id="confirmError">Passwords do not match.</div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-register w-100" name="register">
                <i class="bi bi-person-plus-fill me-2"></i>Register
            </button>

            <div class="login-link">
                Already have an account? <a href="login.php">Login here</a>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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


    const form = document.getElementById('registerForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');

    form.addEventListener('submit', function(e) {
        // Confirm password check
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Passwords do not match');
        } else {
            confirmPassword.setCustomValidity('');
        }

        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
        }

        form.classList.add('was-validated');
    });


    confirmPassword.addEventListener('input', function() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Passwords do not match');
        } else {
            confirmPassword.setCustomValidity('');
        }
    });
    </script>

</body>

</html>