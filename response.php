<!DOCTYPE html>
<html>
<head>
    <title>Response</title>
</head>
<body>
    <?php
    if (isset($_POST['year'])) 
    {
        echo "<p>Your E46's Year: " . htmlspecialchars($_POST['year']) . "</p>";
    }
    
    else if (isset($_POST['models'])) 
    {
        echo "<p>Your E46 Model: " . htmlspecialchars($_POST['models']) . "</p>";
    }

    else if (isset($_POST['models']) && isset($_POST['year'])) 
    {
        echo "<p>Your E46's Year: " . htmlspecialchars($_POST['year']) . "</p>";
        echo "<p>Your E46 Model: " . htmlspecialchars($_POST['models']) . "</p>";
    }
    ?>
</body>
</html>