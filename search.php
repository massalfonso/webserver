
<html>
    <body>
        Search: <?php echo $_POST["search"]; ?><br>
        <?php $search = $_POST["search"]; ?><br>

        IP Address: <?php echo $_SERVER["REMOTE_ADDR"]; ?><br>

        <?php header("Location: https://$search"); ?><br>
    </body>
</html>