
<html>
    <body>
        Search: <?php echo $_POST["search"]; ?><br>

        IP Address: <?php echo $_SERVER["REMOTE_ADDR"]; ?><br>

        <?php header("Location: https://acme.co"); ?><br>
    </body>
</html>