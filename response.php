<!DOCTYPE html>
<html>
<head>
    <title>Response</title>
    <?php
        $year = htmlspecialchars($_GET["year"]);
        $models = htmlspecialchars($_GET["models"]);
        $server = "localhost";
        $username = "php";
        $password = "Lego0810";
        $database = "UserInfo";
        $conn = mysqli_connect($server, $username, $password, $database);
            
        if (!$conn) 
        {
            die("Connection failed: {mysqli_connect_error()}");
        }
            
        $sql = "INSERT INTO CarInfo (CarYear, CarModel) VALUES ('$year', '$models');";
        $result = mysqli_query($conn, $sql);
    ?>
</head>
<body>
    <p>My Cars Year Is: <?= htmlspecialchars($_GET['year']) . " and Its Model Is: " . htmlspecialchars($_GET['models'])?></p>
    <?php
        /*if (isset($_POST['year'])) 
        {
            echo "<p>Your E46's Year: " . htmlspecialchars($_POST['year']) . "</p>";
        }
    
        if (isset($_POST['models'])) 
        {
            echo "<p>Your E46 Model: " . htmlspecialchars($_POST['models']) . "</p>";
        }*/

        $sql = $sql = "select temp from teaFlavor where temp=75;";
        $result = mysqli_query($conn, $sql);
        echo "<h3>The correct temperatures</h3>";
            foreach($result as $row) 
            {
                echo "<p>{$row['temp']}</p>\n";
            }
                
        $sql = $sql = "select distinct thick from teaFlavor;";
        $result = mysqli_query($conn, $sql);
        echo "<h3>The unique thicknesses</h3>";
            foreach($result as $row) 
            {
                echo "<p>{$row['thick']}</p>\n";
            }
                
        $sql = $sql = "select count(*) from CarInfo;";
        $result = mysqli_query($conn, $sql);
        echo "<h3>How many inputs</h3>";
            foreach($result as $row) 
            {
                echo "<p>{$row['count(*)']}</p>\n";
            }
                   
        mysqli_close($conn);
    ?>
</body>
</html>