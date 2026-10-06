<?php
$errors = [];
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];
    if (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }
    if ($password !== $confirm) {
        $errors[] = "Passwords do not match.";
    }
    if (empty($errors)) {
        $success = "Registration successful for $username!";

    }
}

?>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username (min 3 chars)" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password (min 6 chars)" required><br><br>
    <input type="password" name="confirm_password" placeholder="Confirm password" required><br><br>
    <button type="submit">Register</button>
</form>
<?php
if (!empty($errors)) {
echo "<ul>";
foreach ($errors as $erro) {
echo "<li>$erro</li>";
}
}
echo "</ul>";
if ($success) {
echo "<p>$success</p>";
}
?>