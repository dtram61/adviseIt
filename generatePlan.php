<?php

$host = "localhost";
$username = "dtramgre_grcuser";
$password = "Qazwsxedc123cpanel";
$dbname = "dtramgre_grc";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed: " .mysqli_connect_error());
}

$classes = $_POST['classes'];
$notes = $_POST['notes'];

function randomToken($length)
{

    $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($stringSpace, '8bit') - 1;
    for ($i = 0; $i < $length; ++ $i) {
        $pieces[] = $stringSpace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
$token = randomToken(6);

$sql = "INSERT INTO advise_it (classes, notes, token)
VALUES ('$classes', '$notes', '$token')";

if (mysqli_query($conn,$sql))
{
    echo "Form Submitted Successfully. Token: <strong>". $token . "</strong>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>
<body>
<h1>Hello, world!</h1>
<a href="index.html">
    <button>
        Home
    </button>

</a>
</body>
</html>



