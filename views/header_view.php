<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/header.css">
</head>
<body>
    <div id="header">
        <img id="logo" src="./images/logo.png">

        <ul id="header-ul">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Explore</a></li>
        </ul>

        <?php if ($logged_in): ?>
            <div id="account">
                <img id="account-img" src="./images/account.png" alt="Account">
            </div>
        <?php else: ?>
            <div id="auth-buttons">
                <a href="./login/login.html" class="auth-btn login-btn">Login</a>
                <a href="./login/sign-up.html" class="auth-btn signup-btn">Sign Up</a>
            </div>
        <?php endif; ?>

        <ul id="account-ul">
            <li onclick="navigateToPage('./profile.php')">Profile</li>
            <li onclick="navigateToPage('./auth/logout.php')">Logout</li>
        </ul>
    </div>

    <div id="header-mobile">
        <img id="logo" src="./images/logo.png">

        <div id="hamburger_menu">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div id="mobile-side-bar">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <?php if ($logged_in): ?>
                    <li><a href="./profile.php">Profile</a></li>
                <?php endif; ?>
            </ul>

            <?php if ($logged_in): ?>
                <section id="account_section" onclick="navigateToPage('./auth/logout.php')">
                    <img id="account-img" src="./images/account.png">
                    <h2>Log Uit</h2>
                </section>
            <?php else: ?>
                <div id="mobile-auth-buttons" style="display: flex; flex-direction: column; gap: 10px; padding: 20px; margin-top: auto;">
                    <a href="./login/login.html" class="auth-btn login-btn">Login</a>
                    <a href="./login/sign-up.html" class="auth-btn signup-btn">Sign Up</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

<script src="./js/header.js"></script>

</body>
</html>