<!DOCTYPE html>
<html>
<body>
<?php

if(isset($_POST['submit']))
{
    $fallQuarter = $_POST['fallQuarter'];
    $notesForFall = $_POST['notesForFall'];
    echo "Fall Quarter: " .$fallQuarter . "<br />";
    echo "Fall Quarter Notes: " .$notesForFall . "<br /> <br />";

    $winterQuarter = $_POST['winterQuarter'];
    $notesForWinter = $_POST['notesForWinter'];
    echo "Winter Quarter: " .$winterQuarter . "<br />";
    echo "Winter Quarter Notes: " .$notesForWinter . "<br /> <br />";

    $springQuarter = $_POST['springQuarter'];
    $notesForSpring = $_POST['notesForSpring'];
    echo "Spring Quarter: " .$springQuarter . "<br />";
    echo "Spring Quarter Notes: " .$notesForSpring . "<br /> <br />";

    $summerQuarter = $_POST['summerQuarter'];
    $notesForSummer = $_POST['notesForSummer'];
    echo "Summer Quarter: " .$summerQuarter . "<br />";
    echo "Summer Quarter Notes: " .$notesForSummer . "<br /> <br />";
}

?>

<a href="index.php">
    <button>
        Home
    </button>

</a>

<button type="button" onclick="savePlan()">Save Plan</button>

<p>Academic Plan was last updated and saved: </p>

<ol id="savePlan"></ol>
<script>
    function savePlan() {
       let savePlan = document.getElementById("savePlan")
        let date = new Date();

       savePlan.innerHTML += `<l1>${date}</li>`
    }
</script>
</body>
</html>