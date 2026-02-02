<!DOCTYPE html>
<html>
<head>
    <title>Raspberry Pi LED Control</title>
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
        form {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin: 12px 0;
            font-size: 1.1em;
            cursor: pointer;
        }
        input[type="radio"] {
            margin-right: 8px;
            accent-color: #003366;
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
        .result {
            margin-top: 18px;
            font-size: 1.2em;
            font-weight: bold;
            color: #006622;
            text-shadow: 0 0 8px #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Control LED</h2>
        <form method="post" action="LED.php">
            <label>
                <input type="radio" name="led" value="on" required> Turn LED On
            </label>
            <label>
                <input type="radio" name="led" value="off"> Turn LED Off
            </label>
            <label>
                <input type="radio" name="led" value="blink"> Blink LED
            </label>
            <input type="submit" value="Set LED">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['led'])) {
            $led = $_POST['led'];
            $output = "";
            if ($led === 'on') {
                $output = shell_exec('gpio write 25 1');
                echo "<div class='result'>LED on pin 25 is now <strong>ON</strong>.</div>";
            } elseif ($led === 'off') {
                $output = shell_exec('gpio write 25 0');
                echo "<div class='result'>LED on pin 25 is now <strong>OFF</strong>.</div>";
            }
            elseif ($led === 'off') {
                $output = shell_exec('gpio blink 25');
                echo "<div class='result'>LED on pin 25 is now <strong>OFF</strong>.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
