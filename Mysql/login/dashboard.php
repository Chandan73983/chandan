<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    body {
        min-height: 100vh;
        background: #f0f2f7;
        display: flex;
        flex-direction: column;
    }

    /* ===== Top Navbar ===== */
    .navbar {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: #fff;
        padding: 16px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .navbar .logo {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .navbar .logo span {
        color: #ffd369;
    }

    .navbar .user-area {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .navbar .user-area .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #fff;
        color: #667eea;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 16px;
    }

    .logout-btn {
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        text-decoration: none;
        padding: 9px 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.35);
    }

    .logout-btn:hover {
        background: #ff4b5c;
        border-color: #ff4b5c;
        transform: translateY(-2px);
    }

    /* ===== Main Container ===== */
    .container {
        flex: 1;
        padding: 40px;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }

    /* ===== Welcome Banner ===== */
    .welcome-banner {
        background: #fff;
        padding: 30px 35px;
        border-radius: 14px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        margin-bottom: 30px;
        border-left: 6px solid #667eea;
    }

    .welcome-banner h1 {
        font-size: 26px;
        color: #2d3142;
        margin-bottom: 8px;
    }

    .welcome-banner h1 span {
        color: #667eea;
    }

    .welcome-banner p {
        color: #6b7280;
        font-size: 15px;
    }

    /* ===== Stats Cards ===== */
    .stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: #fff;
        padding: 22px 25px;
        border-radius: 14px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        transition: 0.3s;
        border-top: 4px solid transparent;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(102, 126, 234, 0.2);
        border-top-color: #667eea;
    }

    .stat-card h3 {
        font-size: 14px;
        color: #6b7280;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    .stat-card .value {
        font-size: 32px;
        font-weight: 700;
        color: #2d3142;
    }

    .stat-card .icon {
        font-size: 26px;
        margin-bottom: 8px;
    }

    /* ===== Content Section ===== */
    .content-section {
        background: #fff;
        padding: 30px 35px;
        border-radius: 14px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
    }

    .content-section h2 {
        font-size: 20px;
        color: #2d3142;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #f0f2f7;
    }

    .content-section p {
        color: #4b5563;
        line-height: 1.7;
        font-size: 15px;
    }

    /* ===== Footer ===== */
    footer {
        text-align: center;
        padding: 20px;
        color: #8b8f9a;
        font-size: 13px;
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">My<span>App</span></div>
        <div class="user-area">
            <div class="avatar">U</div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Main -->
    <div class="container">

        <!-- Welcome -->
        <div class="welcome-banner">
            <h1>Welcome, <span>User</span> 👋</h1>
            <p>You are successfully logged in. Here's a quick overview of your dashboard.</p>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <div class="icon">📊</div>
                <h3>Total Projects</h3>
                <div class="value">12</div>
            </div>
            <div class="stat-card">
                <div class="icon">✅</div>
                <h3>Completed</h3>
                <div class="value">8</div>
            </div>
            <div class="stat-card">
                <div class="icon">⏳</div>
                <h3>In Progress</h3>
                <div class="value">3</div>
            </div>
            <div class="stat-card">
                <div class="icon">🔔</div>
                <h3>Notifications</h3>
                <div class="value">5</div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-section">
            <h2>Overview</h2>
            <p>
                This is your personal dashboard. From here you can manage your projects,
                track your progress, and stay updated with the latest activity.
                Use the navigation to explore more features.
            </p>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        © 2025 MyApp — All Rights Reserved
    </footer>

</body>

</html>