<!DOCTYPE html>
<html>
<head>
    <title>Raspberry Pi LED Control</title>
</head>
<body>
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
            echo "<p>LED on pin 25 is now <strong>ON</strong>.</p>";
        } elseif ($led === 'off') {
            $output = shell_exec('gpio write 25 0');
            echo "<p>LED on pin 25 is now <strong>OFF</strong>.</p>";
        }
    }
    ?>
</body>
</html>
