<?php
    include "./header.php";
    include "./navbar2.php";
?>
<p>Add New Student</p>
<form action="./script.php" method="post">
    <label for="Addname">Name</label>
    <input type="text" name="name" placeholder="Enter your name here" id="Addname">
    <br><br>

    <label for="Addcity">city</label>
    <input type="text" name="city" placeholder="Enter your city here" id="Addcity">
    <br><br>

    <label for="Addage">Age</label>
    <input type="text" name="age" placeholder="Enter your age here" id="Addage">
    <br><br>

    <input type="submit" value="Add" name="AddButton">
    <br><br>

</form>

<?php include "./footer.php";?>