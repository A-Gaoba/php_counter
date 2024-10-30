<?php
session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    if (isset($_POST["increase"])) {
        $_SESSION["count"] += 1;
    }

    if (isset($_POST["decrease"])) {
        $_SESSION["count"] -= 1;
    }

    if (isset($_POST["zero"])) {
        $_SESSION["count"] = 0;
    }

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counter</title>
</head>
<body>
<div class="counter-container">
  <form action="index.php" method="POST">
      <input type="submit" name="increase" value="increase">
      <input type="submit" name="decrease" value="decrease">
      <input type="submit" name="zero" value="Zero">
  </form>
  <p class="count-display"  >Count: <?php echo $_SESSION["count"]; ?></p>
  </div>
</body>
</html>
