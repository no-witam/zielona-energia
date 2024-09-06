<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zielona Energia</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // JavaScript do zmiany slajdów
        let currentSlide = 0;
        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            slides.forEach(slide => slide.style.display = 'none');
            dots.forEach(dot => dot.classList.remove('active'));
            slides[index].style.display = 'block';
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % 3;
            showSlide(currentSlide);
        }

        window.onload = function() {
            showSlide(currentSlide);
            setInterval(nextSlide, 5000); // Zmiana slajdu co 5 sekund
        }
    </script>
</head>
<body>
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
