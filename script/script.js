function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "" || x == null) {
        alert("Name must be filled out");
        return false;
    }
}


