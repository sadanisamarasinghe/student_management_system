<?php
include "./header.php";
include "./navbar2.php";
include "./connection.php";

$Id = mysqli_real_escape_string($conn, $_GET['Id']);
$query = "SELECT * FROM student WHERE id='$Id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<p>Update New Student</p>
<form action="./script.php" method="post">

    <label for="AddFormIdTextBox">ID</label>
    <input type="text" name="Id" id="AddFormIdTextBox" value="<?php echo $data['id'] ?>" readonly>

    <label for="AddFormNameTextBox">Name</label>
    <input type="text" name="Name" id="AddFormNameTextBox" value="<?php echo $data['name'] ?>">

    <label for="AddFormCityTextBox">City</label>
    <input type="text" name="City" id="AddFormCityTextBox" value="<?php echo $data['city'] ?>">
    
    <label for="AddFormAgeTextBox">Age</label>
    <input type="number" name="Age" id="AddFormAgeTextBox" value="<?php echo $data['age'] ?>">
    
    <input type="submit" value="Update" name="UpdateButton">
</form>

<?php include "./footer.php";?>