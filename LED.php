<?php
<!DOCTYPE html>
<html>
<head>
    <title>LED Control</title>
</head>
<body>
    <form method="post" action="LED.php">
        <label>
            <input type="radio" name="led" value="on"> Turn LED On
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
        // Example output (replace with actual GPIO control as needed)
        if ($led === 'on') {
            echo "<p>LED is now ON.</p>";
            // shell_exec("gpio write 0 1");
        } elseif ($led === 'off') {
            echo "<p>LED is now OFF.</p>";
            // shell_exec("gpio write 0 0");
        } elseif ($led === 'blink') {
            echo "<p>LED is BLINKING.</p>";
            // Example blink logic (pseudo-code, replace with actual implementation)
            // for ($i = 0; $i < 5; $i++) {
            //     shell_exec("gpio write 0 1");
            //     usleep(500000); // 0.5 second
            //     shell_exec("gpio write 0 0");
            //     usleep(500000);
            // }
        }
    }
    ?>
</body>
</html>