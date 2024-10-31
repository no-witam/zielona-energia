<?php
include 'database.php';

$query = "SELECT liczba FROM licznik_wyswietlen WHERE id = 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$liczba_wyswietlen = $row['liczba'];

$nowa_liczba_wyswietlen = $liczba_wyswietlen + 1;
$update_query = "UPDATE licznik_wyswietlen SET liczba = $nowa_liczba_wyswietlen WHERE id = 1";
mysqli_query($conn, $update_query);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zielona Energia</title>
    <link rel="stylesheet" href="style.css">
    <script>
        let currentSlide = 0;
        
        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            const background = document.querySelector('.background');

            slides.forEach(slide => slide.style.display = 'none');
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].style.display = 'block';
            dots[index].classList.add('active');

            if (index === 0) {
                background.style.backgroundImage = "url('images/fotowoltaika.jpg')";
            } else if (index === 1) {
                background.style.backgroundImage = "url('images/wiatraki.jpeg')";
            } else if (index === 2) {
                background.style.backgroundImage = "url('images/energia geo.png')";
            }
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % 3;
            showSlide(currentSlide);
        }

        function updateClock() {
            const now = new Date();
            const options = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
            const timeString = now.toLocaleTimeString('pl-PL', options);
            document.getElementById('clock').textContent = timeString;

            const startHour = 8; 
            const endHour = 16; 
            const currentHour = now.getHours();

            const workStatus = document.querySelector('.work-hours p');
            if (currentHour >= startHour && currentHour < endHour) {
                workStatus.textContent = "Godziny pracy: 8:00 - 16:00 (Jesteśmy otwarci)";
            } else {
                workStatus.textContent = "Godziny pracy: 8:00 - 16:00 (Poza godzinami pracy)";
            }
        }

        window.onload = function() {
            showSlide(currentSlide);
            setInterval(nextSlide, 5000); 
            setInterval(updateClock, 1000); 
            updateClock();
        }
    </script>
</head>
<body>
<header>
    <div class="header-container">
        <div class="licznik">
            <p>Strona gości: <?php echo $nowa_liczba_wyswietlen; ?> razy</p>
        </div>
        <div class="work-hours">
            <h3 id="clock"></h3>
            <p>Godziny pracy: 8:00 - 16:00</p>
        </div>
    </div>
</header>

    <div class="background">
        <div class="content">
            <div class="slideshow-container">
                <div class="slide">
                    <h2>Fotowoltaika</h2>
                    <p>Doradztwo techniczne i energetyczne, projektowanie i montaż instalacji fotowoltaicznych. Optymalizacja i serwis.</p>
                    <a href="details.php?category=fotowoltaika" class="button">Dowiedz się więcej</a>
                </div>
                <div class="slide">
                    <h2>Turbiny Wiatrowe</h2>
                    <p>Kompleksowe usługi od projektowania po serwis i demontaż turbin wiatrowych. Optymalizacja wydajności systemów.</p>
                    <a href="details.php?category=wiatraki" class="button">Dowiedz się więcej</a>
                </div>
                <div class="slide">
                    <h2>Energia Geotermalna</h2>
                    <p>Doradztwo i badania, projektowanie i montaż systemów geotermalnych. Wiercenia i serwis pomp ciepła.</p>
                    <a href="details.php?category=geotermia" class="button">Dowiedz się więcej</a>
                </div>
                
            <div class="contact-form">
                <h2>Skontaktuj się z nami</h2>
                <?php
                    session_start();
                    $formMessage = "";
                    if (isset($_SESSION['form_success'])) {
                        $formMessage = $_SESSION['form_success'];
                        unset($_SESSION['form_success']);
                    } elseif (isset($_SESSION['form_error'])) {
                        $formMessage = $_SESSION['form_error'];
                        unset($_SESSION['form_error']);
                    }
                ?>

                <form action="kontakt.php" method="POST">
                    <label for="imie">Imię i nazwisko:</label>
                    <input type="text" id="imie" name="imie" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="temat">Temat:</label>
                    <input type="text" id="temat" name="temat" required>

                    <label for="wiadomosc">Wiadomość:</label>
                    <textarea id="wiadomosc" name="wiadomosc" rows="5" required></textarea>
                    <button type="submit">Wyślij wiadomość</button>
                </form>
                <?php if ($formMessage): ?>
                    <p style="color: green;"><?php echo $formMessage; ?></p>
                <?php endif; ?>
            </div>


                <div class="dots">
                    <span class="dot" onclick="showSlide(0)"></span>
                    <span class="dot" onclick="showSlide(1)"></span>
                    <span class="dot" onclick="showSlide(2)"></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
