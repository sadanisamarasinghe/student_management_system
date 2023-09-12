<?php
session_start();
if (isset($_SESSION['LogIn']) == false){
    header("Location:./login.php");
}
?>
<header>
    <nav>
        <h2>Student Management System</h2>
        <ul>
            <li><a href="./Dashbord.php"><button>Home</button></a></li>
            <li><a href="./logout.php"><button>Log out</button></a></li>
        </ul>
    </nav>
</header>