<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My New Project</title>
</head>
<body>

<?php


$name = $_POST['fname'];
$_SESSION['fname'] = $name;
$totalCost = 0;
    echo "<p>Thank you, $name, for your order! <br> Order Summary:</p>";

    $isValid = true;


$flavor = isset($_POST['flavor']) ? $_POST['flavor'] : array();
foreach($flavor as $value) {
    echo "
 <ul> 
 <li>$value</li>
 </ul>
 </p>";

    $totalCost+= 3.50;

}
echo "Order Total: $$totalCost";






?>


</body>
</html>
