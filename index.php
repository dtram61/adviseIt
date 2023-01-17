<!DOCTYPE html>
<html>
<head>
  <script>
    function validateForm() {
      var x = document.forms["myForm"]["fname"].value;
      if (x == "" || x == null) {
        alert("Name must be filled out");
        return false;
      }
    }
  </script>
</head>
<body>


<h1>Advise It! Demo Version</h1>
<h2>Create a New Plan</h2>

<form name="myForm" action="newPlan.php"  method="post" >
    <input type="submit" value="New Plan">
</form>

<a href="previouslySavedPlan.php">
    <button>
        Previously Saved Plan
    </button>

</a>

</body>
</html>
