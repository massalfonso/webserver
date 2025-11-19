
<!DOCTYPE html>
<html>
<head>
    <title>BME280 Sensor Readings</title>
    <style>
        body {
            background: linear-gradient(135deg, #eaf6ff 0%, #d0e6fa 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #222;
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(255,255,255,0.85);
            max-width: 400px;
            margin: 60px auto;
            padding: 32px 24px 24px 24px;
            border-radius: 18px;
            box-shadow: 0 8px 32px #00336622, 0 2px 8px #0002;
            text-align: center;
        }
        h2 {
            font-family: 'Orbitron', Arial, sans-serif;
            font-size: 2em;
            margin-bottom: 24px;
            color: #003366;
            text-shadow: 0 0 12px #fff, 0 0 24px #fff;
        }
        .reading {
            font-size: 1.2em;
            margin: 16px 0;
        }
        input[type="submit"] {
            background: #003366;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 28px;
            font-size: 1.1em;
            font-family: 'Orbitron', Arial, sans-serif;
            cursor: pointer;
            box-shadow: 0 2px 8px #0002;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background: #0055aa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>BME280 Sensor Readings</h2>
        <form method="post">
            <input type="submit" name="read" value="Read Sensor">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['read'])) {
            $raw = `./WiringPi/raspberry-pi-bme280/bme280`;
            $deserialized = json_decode($raw, true);
            if ($deserialized) {
                echo "<div class='reading'>Temperature: <strong>" . htmlspecialchars($deserialized["temperature"]) . " °C</strong></div>";
                echo "<div class='reading'>Pressure: <strong>" . htmlspecialchars($deserialized["pressure"]) . " hPa</strong></div>";
                echo "<div class='reading'>Altitude: <strong>" . htmlspecialchars($deserialized["altitude"]) . " m</strong></div>";
                echo "<div class='reading'>Humidity: <strong>" . htmlspecialchars($deserialized["humidity"]) . " %</strong></div>";
            } else {
                echo "<div class='reading' style='color:red;'>Sensor read failed or invalid JSON.</div>";
            }
        }
        ?>
    </div>
</body>
</html>