<?php
    require_once 'scripts/php/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUGHGUYS Global Ministry</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="styles/homepage.css">
    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Comfortaa:wght@300..700&family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d2133a2405.js" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script defer src="scripts/js/homepage-observer.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo-container">
            <div class="logo-text">
                <h1>TOUGHGUYS</h1>
                <h2>Global Ministry</h2>
            </div>
            <div class="logo-icons">
                <img src="resources/icons/tg-icon.png" alt="Toughguys Logo" width="128px" height="128px">
                <img src="resources/icons/tg-icon2.png" alt="Sentou Karate" width="128px" height="128px">
            </div>
        </div>
        
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#history">History</a>
            <a href="#mission">Mission</a>
            <a href="#system">System</a>
            <a href="#branches">Branches</a>
            <a href="#contact">Contact Us</a>
            <button class="menu-button">Menu ☰</button>
        </div>
    </nav>
    
    <section class="homepage">
        <div class="homepage-text hidden">
            <h2>FIGHT THE GOOD</h2>
            <h2>FIGHT OF FAITH</h2>
        </div>
        <button class="cta-button">JOIN NOW</button>
    </section>
    
    <section id="about" class="section">
        <div class="section-content">
            <h2 class="section-title hidden">ABOUT US</h2>
            <p class="section-subtitle hidden">TOUGHGUYS GLOBAL MINISTRY</p>
            <hr class="divider hidden">
            <div class="section-text hidden">
                <p>Toughguys Global Ministry is a non-government organization (NGO) and karate organization founded by Kancho Vincent Vicencio. It has expanded internationally, reaching multiple countries through volunteer-led training programs. The organization emphasizes karate training, leadership development, and community outreach, with instructors who were once students and now serve voluntarily.</p>
            </div>
        </div>
    </section>
    
    <section id="history" class="section">
        <div class="section-content">
            <h2 class="section-title hidden">HISTORY</h2>
            <p class="section-subtitle hidden">TOUGHGUYS GLOBAL MINISTRY</p>
            <hr class="divider hidden">
            <div class="section-text hidden">
                <p>The concept of the Toughguys Global Ministry started in 1998 when Kancho Vincent Vicencio witnessed a group of Christians from the United States presenting the gospel through a breaking demonstration. As a martial arts practitioner involved in full-time ministry, Kancho Vicencio was passionate about reaching out to lost youth, particularly unbelieving teenagers. Witnessing this demonstration sparked an idea.</p>
                <br>
                <p>Kancho Vicencio began visiting schools and other places where teens gathered, offering free martial arts training. This allowed him to establish contact, build relationships, and gain their trust. Through this martial arts program, presenting the gospel became easier, with a higher rate of receptiveness.</p>
                <br>
                <p>Over a decade later, Kancho Vicencio's passion to serve and guide the youth remains strong. He converted part of his house into a Martial Arts School of Leadership, opening his home to anyone interested in learning Mixed Martial Arts and becoming a missionary. This provides an opportunity to share the good news of the gospel. Toughguys Global Ministry also conducts nationwide tournaments to challenge students physically and spiritually, attract new crowds, and share their faith.</p>
                <br>
                <p>Today, Toughguys Global Ministry has numerous branches locally and internationally, with over a thousand students attending weekly. Through martial arts training, school rallies, drug and alcohol prevention campaigns, moral values seminars, evangelistic youth camps, and nationwide crusades, they have reached young people in the Philippines and other countries, including Cambodia, Pakistan, Thailand, Botswana, Russia, and the United States.</p>
            </div>
        </div>
    </section>
    
    <section id="mission" class="mission-vision anton">
        <div class="mission-box hidden">
            <h2 class="mission-title">MISSION<br>AND<br>VISION</h2>
            <p class="section-subtitle">TOUGHGUYS GLOBAL MINISTRY</p>
            <hr class="divider">
        </div>
        <p class="mission-description hidden">
            To guide the youth in finding Christ in an atmosphere that teaches them the importance of hard-work and self-discipline. To benefit the community, through violence and drug abuse prevention programs and martial arts training. To minimize gang involvement, drug and alcohol addiction, school drop-outs and destructive behavior in the community specially the youth.
        </p>
    </section>

    <section id="system" class="system-oath anton">
        <p class="system-description hidden">
            To guide the youth in finding Christ in an atmosphere that teaches them the importance of hard-work and self-discipline. To benefit the community, through violence and drug abuse prevention programs and martial arts training. To minimize gang involvement, drug and alcohol addiction, school drop-outs and destructive behavior in the community specially the youth.
        </p>
        <div class="system-box hidden">
            <h2 class="system-title">SYSTEM<br>AND<br>OATH</h2>
            <p class="section-subtitle">TOUGHGUYS GLOBAL MINISTRY</p>
            <hr class="divider">
        </div>
        <p class="motto hidden">FIGHT THE GOOD, FIGHT OF FAITH.</p>
    </section>
        
    
    <section id="branches" class="branches-section hidden">
        <h2 class="branches-title hidden">BRANCHES</h2>
        <p class="section-subtitle hidden">TOUGHGUYS GLOBAL MINISTRY</p>
        <hr class="divider hidden" style="background-color: #cc0000;">
            
        <div class="branches-container hidden">
            <div class="branches-list">
                <div class="branch-column hidden" style="--order: 1;">
                    <ul>
                        <li class="branch-item">Toughguys Main Gym</li>
                        <li class="branch-item">Toughguys Pasig</li>
                        <li class="branch-item">Toughguys Mandaluyong</li>
                        <li class="branch-item">Toughguys Bacoor/Area</li>
                        <li class="branch-item">Toughguys Morong Bataan</li>
                        <li class="branch-item">Toughguys Paranaque</li>
                        <li class="branch-item">Toughguys Cogeo Rizal</li>
                        <li class="branch-item">Toughguys Marikina</li>
                        <li class="branch-item">Toughguys Veterans Village</li>
                        <li class="branch-item">Toughguys Muntinlupa City</li>
                    </ul>
                </div>
                <div class="branch-column hidden" style="--order: 2;">
                    <ul>
                        <li class="branch-item">Toughguys Muntinlupa City 2</li>
                        <li class="branch-item">Toughguys Marilao Bulacan</li>
                        <li class="branch-item">Toughguys Imus Cavite</li>
                        <li class="branch-item">Toughguys Naic Cavite</li>
                        <li class="branch-item">Toughguys Dasmariñas Cavite</li>
                        <li class="branch-item">Toughguys South Caloocan</li>
                        <li class="branch-item">Toughguys Ampid Caloocan</li>
                        <li class="branch-item">Toughguys Taguig</li>
                        <li class="branch-item">Toughguys Mapayapa Rizal</li>
                        <li class="branch-item">Toughguys Cainta Rizal</li>
                        <li class="branch-item">Toughguys Taytay Rizal</li>
                    </ul>
                </div>
                <div class="branch-column hidden" style="--order: 3;">
                    <ul>
                        <li class="branch-item">Toughguys Centennial Rizal</li>
                        <li class="branch-item">Toughguys Novaliches QC 1</li>
                        <li class="branch-item">Toughguys Novaliches QC</li>
                        <li class="branch-item">Toughguys Romblon</li>
                        <li class="branch-item">Touhguys Samar</li>
                        <li class="branch-item">Toughguys Los Angeles</li>
                        <li class="branch-item">Toughguys New York</li>
                        <li class="branch-item">Toughguys Bothell Washington</li>
                        <li class="branch-item">Toughguys Cambodia</li>
                        <li class="branch-item">Toughguys Africa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="upcoming-events" class="upcoming-section">
        <h2 class="upcoming-title hidden">UPCOMING EVENTS</h2>
        <p class="section-subtitle hidden">TOUGHGUYS GLOBAL MINISTRY</p>
        <hr class="divider hidden" style="background-color: #cc0000;">

        <div class="events-container">
            <div class="featured hidden">
                <?php
                    $req = "SELECT * FROM EVENTS WHERE date >= Now() ORDER BY Date ASC LIMIT 1;";
                    $result = mysqli_query($conn, $req) or die ("Bad Query: $req");

                    if($row = mysqli_fetch_assoc($result)) {
                        $img = "resources/icons/tg-icon2.png";
                        if(is_null(!$row['img'])) {
                            $img = $row['img'];
                        }
                        $date = strtotime($row['date']);
                        $date = date('F d, Y', $date);

                        echo "<h2 class='featured-notif'>FEATURED</h2>";
                        echo "<img src='{$img}' width='440px' height='300px'>";
                        echo "<h2 class='featured-title'>{$row['event_name']}</h2>";
                        echo "<p class='featured-location'>{$row['location']}</p>";
                        echo "<p class='featured-date'>{$date}</p>";
                    }
                ?>
            </div>

            <div class="upcoming hidden">
                <h2 class="upcoming-title">UPCOMING EVENTS</h2>
                <hr class="divider">
                <?php
                    $req = "SELECT * FROM EVENTS WHERE date >= Now() ORDER BY Date ASC LIMIT 4;";
                    $result = mysqli_query($conn, $req) or die ("Bad Query: $req");

                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($i = 0) {}
                        else {
                            $date = strtotime($row['date']);
                            $date = date('M d', $date);
                            $date = explode(" ", $date);

                            echo "<div class='upcoming-entry'>";
                            echo "<div class='entry-date'>
                                    <h2 class='Month'>{$date[0]}</h2>
                                    <h2 class='Day'>{$date[1]}</h2>
                                 </div>";
                            echo "<p class='entry-name'>{$row['event_name']}</p>
                                 </div>";

                        }
                        $i++;
                    }
                ?>
            </div>
        </div>
        <button class="history">View Previous Events</button>
    </section>
    
    <!-- Footer with Contact Info -->
    <footer>
        <div class="contacts">
            <h2>CONTACT INFORMATION</h2>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61571502474004"><i class="fa-brands fa-square-facebook"></i> Toughguys Global Ministry - Sentou Karate</a></li>
                <li><a href="mailto:toughguysglobalsentoukarate@gmail.com"><i class="fa-solid fa-envelope"></i> toughguysglobalsentoukarate@gmail.com</a></li>
                <li><a href="https://www.instagram.com/toughguys_global/"><i class="fa-brands fa-instagram"></i> toughguys_global</a></li>
            </ul>
        </div>
        <div class="links">
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#branches">branches</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Membership Portal</a></li>
                <li><a href=""></a>Gallery</li>
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

    <script>
        // Simple scroll animation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: "end",
                    inline: "nearest"
                });
            });
        });
    </script>
</body>
</html>