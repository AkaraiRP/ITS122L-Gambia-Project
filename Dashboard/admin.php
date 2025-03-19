<?php
    require_once '../scripts/php/database.php';
    session_start();

    $stmt =  $conn -> prepare("SELECT * FROM admins WHERE user_id = :id");
    $stmt -> execute(["id" => $_SESSION['user']['id']]);
    if(!$row = $stmt -> fetch()) {
        header("location: /Dashboard/");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUGHGUYS | Dashboard</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="/styles/admin.css">
    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d2133a2405.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/resources/icons/site.ico">
    <!-- Javascript -->
    <script defer src="/scripts/js/default.js"></script>
</head>
<body>
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
                <?php
                    if (isset($_SESSION['user'])) {
                        echo "<li><span></span><a href='/logout.php'>Logout</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="forms">
            <div class="create">
                <form action="/scripts/php/create-event.php" method="post">
                    <input type="text" name="event_name" value="event_name" placeholder="Event Name">
                    <input type="text" name="location" value="location" placeholder="Event Location">
                    <input type="text" name="date" value="date" placeholder="Event Date">
                    <input type="text" name="event_status" value="event_status" placeholder="Status">
                </form>
            </div>
        </div>
        <div class="headers">
            <h2 class="title">Events Panel</h2>
            <button onclick="window.location.href='/scripts/php/create-event.php'">Add Event</button>
        </div>
        <div class="container">
            <table class="events-table">
                <thead>
                    <tr>
                        <th class='event_id'>#</th>
                        <th>Event Name</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th class='event_status'>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stmt = $conn -> query("SELECT * FROM events");
                        while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td class='event_id'>{$row['event_id']}</td>";
                            echo "<td>{$row['event_name']}</td>";
                            echo "<td>{$row['location']}</td>";
                            echo "<td>{$row['date']}</td>";
                            echo "<td>{$row['event_status']}</td>";
                            echo "<td>{$row['img']}</td>";
                            echo "<td class='action'>";
                            echo '<a href="/scripts/php/update-event.php?id='. $row['event_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="/scripts/php/delete-event.php?id='. $row['event_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo '<a href="/scripts/php/upload-event.php?id='. $row['event_id'] .'" title="Add Image" data-toggle="tooltip"><span class="fa-solid fa-images"></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
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