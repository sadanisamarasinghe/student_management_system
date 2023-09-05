<?php
include "./header.php";
include "./navbar1.php";

?>
<form action="./script.php" method="post">
    <label for="LoginUsername">Username:</label>
    <input type="text" name="username" id="LoginUsername">

    <label for="LoginPassword">Password:</label>
    <input type="password" name="password" id="LoginPassword">

    <input type="submit" value="Login" name="loginButton">

</form>

<?php
include "./footer.php";
?>