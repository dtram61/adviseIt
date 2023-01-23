

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <style>

    </style>
</head>
<body>


<div>
    <h1><center>Token ID</center></h1>
    <form action="previouslySavedPlan.php" method="POST">
        <center>
            <input type="text" name="token" placeholder="Enter token" class="in">
            <input type="submit" name="search" value="Search" >
        </center>
    </form>
    <center>
    <a href="index.html">
        <button>
            Home
        </button>
    </a>
    </center>
</div>
<hr>
<?php
include"connection.php";
if(isset($_POST["search"]))
{
    $token=$_POST["token"];
    $sql = "SELECT * FROM advise_it WHERE token='$token';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        // output data of each row
        echo"<table id='advise'>
    <tr>
    
    <td>Classes</td>
    <td>Notes</td>
    <td>Token ID</td>
    
    </tr>";
        while($row = $result->fetch_assoc())
        {
            echo "<tr>
               
                 <td>" . $row["Classes"]. "</td>".
                "<td>" . $row["Notes"]. "</td>".
                "<td>" . $row["Token"]. "</td>".


                "</tr>";
        }
        echo"</td>";
    }
    else
    {
        echo "0 results";
    }
}

$conn->close();
?>


