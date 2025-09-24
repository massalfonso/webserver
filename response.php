<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <p>
        Your E46's Year: <?= htmlspecialchars($_POST['year']) . " " . htmlspecialchars($_POST['lastname'])?>
    </p>

    <p>
        Your E46 Model: <?= htmlspecialchars($_POST['models']) ?>
    </p>
</body>
</html>