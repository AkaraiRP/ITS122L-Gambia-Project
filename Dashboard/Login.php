<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header("location: /Dashboard/Home.php");
        exit();
    }
    if (isset($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUGHGUYS | Dashboard</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="/styles/dashboard.css">
    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d2133a2405.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/resources/icons/site.ico">
    <!-- Javascript -->
    <script defer src="/scripts/js/dashboard.js"></script>
    <script defer src="/scripts/js/default.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <div class="logo-text">
                <h1>TOUGHGUYS</h1>
                <h2>Global Ministry</h2>
            </div>
            <div class="logo-icons">
                <img src="/resources/icons/tg-icon.png" alt="Toughguys Logo" width="128px" height="128px">
                <img src="/resources/icons/tg-icon2.png" alt="Sentou Karate" width="128px" height="128px">
            </div>
        </div>
        
        <div class="nav-links">
            <a href="/#about">About Us</a>
            <a href="/#history">History</a>
            <a href="/#mission">Mission & Vision</a>
            <a href="/#system">System & Oath</a>
            <a href="/#branches">Branches</a>
            <a href="#contacts">Contact Us</a>
            <div class="menu-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="nav-menu">
            <ul>
                <li><span></span><a href="/Dashboard/">Membership Portal</a></li>
                <li><span></span><a href="/Gallery/Blackbelt-Gallery.php">Blackbelt Gallery</a></li>
                <li><span></span><a href="/Events/">Events</a></li>
            </ul>
        </div>
    </nav>

    <section class="user-account">
        <div class="motto">
            <p>Fight the good fight of Faith</p>
        </div>
        <div class="login">
            <div class="headers">
                <div class="selection">
                    <h2 onclick="lf()">Login</h2>
                    <h2 onclick="rf()">Register</h2>
                </div>
                <hr class="divider">
                <span></span>
            </div>
            <?php
                if (isset($errors['login'])) {
                echo '<div class="error-main">
                                <p>' . $errors['login'] . '</p>
                                </div>';
                unset($errors['login']);
                }
            ?>
            <form method="POST" action="/scripts/php/user-account.php">
                <h2 class="title">Email</h2>
                <?php
                    if (isset($errors['email'])) {
                    echo ' <div class="error">
                                <p>' . $errors['email'] . '</p>
                            </div>';
                    }
                ?>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <h2 class="title">Password</h2>
                <?php
                    if (isset($errors['password'])) {
                    echo ' <div class="error">
                                <p>' . $errors['password'] . '</p>
                            </div>';
                    }
                ?>
                <div class="input-group password">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <i id="eye" class="fa fa-eye"></i>
                </div>

                <input type="submit" class="btn" value="Login" name="login">
                <p class="forgot"><a href="#">Forgot Password?</a></p>
            </form>
        </div>
    </section>
    
    
    <!-- Footer with Contact Info -->
    <footer>
        <div class="contacts" id="contacts">
            <h2>CONTACT INFORMATION</h2>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61571502474004"><i class="fa-brands fa-square-facebook"></i> Toughguys Global Ministry - Sentou Karate</a></li>
                <li><a href="mailto:toughguysglobalsentoukarate@gmail.com"><i class="fa-solid fa-envelope"></i> toughguysglobalsentoukarate@gmail.com</a></li>
                <li><a href="https://www.instagram.com/toughguys_global/"><i class="fa-brands fa-instagram"></i> toughguys_global</a></li>
            </ul>
        </div>
        <div class="links">
            <h2>QUICK LINKS</h2>
            <ul>
                <li><a href="/#about">About Us</a></li>
                <li><a href="/#branches">Branches</a></li>
                <li><a href="/Events/">Events</a></li>
                <li><a href="/Dashboard/">Membership Portal</a></li>
                <li><a href="/Gallery/Blackbelt-Gallery.php">Blackbelt Gallery</a></li>
            </ul>
        </div>
        <div class="info">
            <h2>TOUGHGUYS GLOBAL MINISTRY</h2>
            <p>Toughguys Global Ministry, founded by Kancho Vincent Vicencio, is a global NGO promoting karate, leadership, 
                and community outreach through volunteer instructors.</p>
        </div>
        <div class="copyright">
            <p>© 2025 TOUGHGUYS Global Ministry. All Rights Reserved.</p>
            <p style="margin-top: 10px;">FIGHT THE GOOD, FIGHT OF FAITH.</p>
        </div>
    </footer>
</body>
</html>
<?php
    if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
    }
?>