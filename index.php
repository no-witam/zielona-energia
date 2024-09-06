<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energia Odnawialna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="info-window">
            <div class="slide">
                <h2>Fotowoltaika</h2>
                <p><?php $topic = 'fotowoltaika'; include 'fetch_info.php'; ?></p>
                <button onclick="window.location.href='details.php?topic=fotowoltaika'">Dowiedz się więcej</button>
            </div>
            <div class="slide">
                <h2>Turbiny Wiatrowe</h2>
                <p><?php $topic = 'wiatraki'; include 'fetch_info.php'; ?></p>
                <button onclick="window.location.href='details.php?topic=wiatraki'">Dowiedz się więcej</button>
            </div>
            <div class="slide">
                <h2>Energia Geotermalna</h2>
                <p><?php $topic = 'geotermalna'; include 'fetch_info.php'; ?></p>
                <button onclick="window.location.href='details.php?topic=geotermalna'">Dowiedz się więcej</button>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
